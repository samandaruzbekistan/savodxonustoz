<?php

namespace App\Http\Controllers\Public;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Playlist;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideoController extends Controller
{
    public function index(Request $request): View
    {
        $videos = Video::query()->published()->with('category')
            ->when($request->query('category'), fn ($q, $slug) => $q->whereHas('category', fn ($c) => $c->where('slug', $slug)))
            ->when($request->query('search'), fn ($q, $term) => $q->where('title', 'like', "%{$term}%"))
            ->orderByDesc('published_at')
            ->paginate(12)
            ->withQueryString();

        $playlists = Playlist::query()
            ->where('status', ContentStatus::Published)
            ->withCount('videos')
            ->orderBy('sort_order')
            ->get();

        $categories = Category::query()
            ->where('type', CategoryType::Video)
            ->orderBy('name')
            ->get();

        return view('public.videos.index', compact('videos', 'playlists', 'categories'));
    }

    public function show(Video $video): View
    {
        abort_unless($video->status === ContentStatus::Published, 404);

        $video->increment('view_count');
        $video->load(['category', 'playlists', 'tags']);

        $related = Video::query()->published()
            ->where('category_id', $video->category_id)
            ->whereKeyNot($video->id)
            ->when(! $video->category_id, fn ($q) => $q->whereRaw('1 = 0'))
            ->limit(4)
            ->get();

        return view('public.videos.show', compact('video', 'related'));
    }

    public function playlist(Playlist $playlist): View
    {
        abort_unless($playlist->status === ContentStatus::Published, 404);

        $playlist->load(['videos' => fn ($q) => $q->published()->with('category')]);

        return view('public.videos.playlist', compact('playlist'));
    }
}
