<?php

namespace App\Http\Controllers\Public;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContentController extends Controller
{
    public function section(Category $category): View|RedirectResponse
    {
        // Fairy tales live under grade sub-categories, so this generic view would
        // render the parent as empty. Send visitors to the dedicated page, which
        // lists every tale and filters by grade.
        if ($category->slug === 'ertaklar-va-audiolar') {
            return redirect()->route('fairy-tales.index', [], 301);
        }

        if (preg_match('/^([1-4])-sinf-ertaklari$/', $category->slug, $matches)) {
            return redirect()->route('fairy-tales.index', ['sinf' => $matches[1]], 301);
        }

        $contents = $category->contents()->published()
            ->orderBy('sort_order')
            ->orderBy('title')
            ->paginate(12);

        $children = $category->children()->orderBy('sort_order')->get();
        $ancestors = $this->ancestors($category);

        return view('public.content.index', compact('category', 'contents', 'children', 'ancestors'));
    }

    public function show(Content $content): View|RedirectResponse
    {
        abort_unless(
            $content->status === ContentStatus::Published
                && (! $content->published_at || $content->published_at <= now()),
            404
        );

        // Fairy tales are rendered by FairyTaleController, which pairs the story
        // with its audio player; this generic view would drop the audio.
        if ($content->type === ContentType::Ertak) {
            return redirect()->route('fairy-tales.show', $content->slug, 301);
        }

        $content->load([
            'category',
            'tags',
            'media',
            'children' => fn ($q) => $q->published()->orderBy('sort_order'),
        ]);

        $content->increment('view_count');

        $ancestors = $this->ancestors($content->category);

        return view('public.content.show', compact('content', 'ancestors'));
    }

    /**
     * Build breadcrumb items by walking the category parent chain.
     *
     * @return array<int, array{label: string, url: ?string}>
     */
    private function ancestors(?Category $category): array
    {
        $items = [];

        while ($category) {
            array_unshift($items, [
                'label' => $category->name,
                'url' => route('sections.show', $category->slug),
            ]);
            $category = $category->parent;
        }

        return $items;
    }
}
