<?php

namespace App\Http\Controllers\Public;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Test;
use App\Models\TestAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FairyTaleController extends Controller
{
    public function index(Request $request): View
    {
        $parent = Category::query()
            ->ofType(CategoryType::Content)
            ->where('slug', 'ertaklar-va-audiolar')
            ->first();

        $grades = Category::query()
            ->ofType(CategoryType::Content)
            ->where('parent_id', $parent?->id)
            ->orderBy('sort_order')
            ->get();

        $tales = Content::query()
            ->ofType(ContentType::Ertak)
            ->published()
            ->with('category')
            ->when($request->query('sinf'), fn ($q, $slug) => $q->whereHas('category', fn ($c) => $c->where('slug', "{$slug}-sinf-ertaklari")))
            ->when($request->query('search'), fn ($q, $term) => $q->where('title', 'like', "%{$term}%"))
            ->orderBy('category_id')
            ->orderBy('title')
            ->paginate(12)
            ->withQueryString();

        $counts = ['total' => Content::query()->ofType(ContentType::Ertak)->published()->count()];

        foreach ($grades as $grade) {
            $counts[$grade->slug] = Content::query()->ofType(ContentType::Ertak)->published()
                ->where('category_id', $grade->id)->count();
        }

        $totalErtaklar = $counts['total'];
        $achievements = $this->computeAchievements($totalErtaklar);

        return view('public.fairy-tales.index', compact('tales', 'grades', 'counts', 'totalErtaklar', 'achievements'));
    }

    public function show(Content $tale): View
    {
        abort_unless($tale->type === ContentType::Ertak && $tale->status === ContentStatus::Published, 404);

        $tale->load('category');
        $tale->increment('view_count');

        $siblings = Content::query()
            ->ofType(ContentType::Ertak)
            ->published()
            ->where('category_id', $tale->category_id)
            ->orderBy('title')
            ->get(['id', 'slug', 'title']);

        $position = $siblings->search(fn ($item) => $item->is($tale));
        $previous = $position > 0 ? $siblings->get($position - 1) : null;
        $next = $position !== false && $position < $siblings->count() - 1 ? $siblings->get($position + 1) : null;

        $related = $siblings->reject(fn ($item) => $item->is($tale))->take(4);

        $quiz = Test::query()->published()->where('slug', $tale->slug)->withCount('questions')->first();

        $latestAttempt = $quiz && Auth::check()
            ? $quiz->attempts()->with('answers')->where('user_id', Auth::id())->whereNotNull('submitted_at')->latest('submitted_at')->first()
            : null;

        $totalErtaklar = Content::query()->ofType(ContentType::Ertak)->published()->count();

        $achievements = $this->computeAchievements($totalErtaklar);

        return view('public.fairy-tales.show', [
            'tale' => $tale,
            'related' => $related,
            'previous' => $previous,
            'next' => $next,
            'position' => $position === false ? null : $position + 1,
            'total' => $siblings->count(),
            'quiz' => $quiz,
            'latestAttempt' => $latestAttempt,
            'achievements' => $achievements,
            'totalErtaklar' => $totalErtaklar,
            'tasks' => $tale->meta['tasks'] ?? null,
        ]);
    }

    /**
     * @return array{read: int, total: int, average: int, best: int}|null
     */
    private function computeAchievements(int $totalErtaklar): ?array
    {
        if (! Auth::check()) {
            return null;
        }

        $ertakSlugs = Content::query()->ofType(ContentType::Ertak)->published()->pluck('slug');

        $attempts = TestAttempt::query()
            ->where('user_id', Auth::id())
            ->whereNotNull('submitted_at')
            ->whereHas('test', fn ($q) => $q->whereIn('slug', $ertakSlugs))
            ->get(['id', 'test_id', 'score', 'max_score']);

        if ($attempts->isEmpty()) {
            return null;
        }

        $percentages = $attempts->map->percentage;

        return [
            'read' => $attempts->pluck('test_id')->unique()->count(),
            'total' => $totalErtaklar,
            'average' => (int) round($percentages->avg()),
            'best' => $percentages->max(),
        ];
    }
}
