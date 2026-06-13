<?php

namespace App\Http\Controllers\Public;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Content types presented in the blog/news feed.
     *
     * @var list<ContentType>
     */
    private array $feedTypes = [ContentType::Blog, ContentType::News];

    public function index(Request $request): View
    {
        $type = $this->resolveType($request->query('type'));

        $posts = Content::query()
            ->with('author')
            ->published()
            ->when(
                $type,
                fn ($query) => $query->where('type', $type),
                fn ($query) => $query->whereIn('type', $this->feedTypes),
            )
            ->when($request->query('search'), function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%");
                });
            })
            ->latest('published_at')
            ->paginate(9)
            ->withQueryString();

        $featured = $type ? null : Content::query()
            ->whereIn('type', $this->feedTypes)
            ->published()
            ->where('is_featured', true)
            ->latest('published_at')
            ->first();

        return view('public.blog.index', [
            'posts' => $posts,
            'featured' => $featured,
            'activeType' => $type,
        ]);
    }

    public function show(Content $content): View
    {
        abort_unless(
            in_array($content->type, $this->feedTypes, true)
                && $content->status === ContentStatus::Published
                && (! $content->published_at || $content->published_at <= now()),
            404
        );

        $content->load(['author', 'tags', 'media']);
        $content->increment('view_count');

        $related = Content::query()
            ->where('type', $content->type)
            ->published()
            ->whereKeyNot($content->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('public.blog.show', compact('content', 'related'));
    }

    private function resolveType(?string $type): ?ContentType
    {
        return match ($type) {
            'blog' => ContentType::Blog,
            'news' => ContentType::News,
            default => null,
        };
    }
}
