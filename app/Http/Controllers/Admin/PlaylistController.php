<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ContentStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlaylistRequest;
use App\Models\Playlist;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PlaylistController extends Controller
{
    public function index(): View
    {
        $playlists = Playlist::withCount('videos')->latest()->paginate(20);

        return view('admin.playlists.index', compact('playlists'));
    }

    public function create(): View
    {
        return view('admin.playlists.create', $this->formData(new Playlist));
    }

    public function store(PlaylistRequest $request): RedirectResponse
    {
        $playlist = Playlist::create($this->payload($request));
        $this->syncVideos($playlist, $request);

        return redirect()->route('admin.playlists.index')
            ->with('success', 'Pleylist yaratildi.');
    }

    public function edit(Playlist $playlist): View
    {
        return view('admin.playlists.edit', $this->formData($playlist));
    }

    public function update(PlaylistRequest $request, Playlist $playlist): RedirectResponse
    {
        $playlist->update($this->payload($request));
        $this->syncVideos($playlist, $request);

        return redirect()->route('admin.playlists.index')
            ->with('success', 'Pleylist yangilandi.');
    }

    public function destroy(Playlist $playlist): RedirectResponse
    {
        $playlist->delete();

        return redirect()->route('admin.playlists.index')
            ->with('success', 'Pleylist o\'chirildi.');
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(PlaylistRequest $request): array
    {
        $data = $request->safe()->only(['title', 'slug', 'description', 'status']);
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);

        return $data;
    }

    private function syncVideos(Playlist $playlist, PlaylistRequest $request): void
    {
        $orders = $request->input('order', []);

        $sync = collect($request->input('videos', []))
            ->mapWithKeys(fn ($id) => [$id => ['sort_order' => (int) ($orders[$id] ?? 0)]])
            ->all();

        $playlist->videos()->sync($sync);
    }

    /**
     * @return array<string, mixed>
     */
    private function formData(Playlist $playlist): array
    {
        $playlist->loadMissing('videos');

        return [
            'playlist' => $playlist,
            'statuses' => collect(ContentStatus::cases())
                ->mapWithKeys(fn (ContentStatus $s) => [$s->value => $s->label()])->all(),
            'allVideos' => Video::orderBy('title')->get(['id', 'title']),
            'selected' => $playlist->videos->pluck('id')->all(),
            'orders' => $playlist->videos->mapWithKeys(fn ($v) => [$v->id => $v->pivot->sort_order])->all(),
        ];
    }
}
