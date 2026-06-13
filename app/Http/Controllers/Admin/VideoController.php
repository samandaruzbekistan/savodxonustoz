<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VideoRequest;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Video;
use App\Support\YouTube;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class VideoController extends Controller
{
    public function index(): View
    {
        $videos = Video::with('category')
            ->when(request('category'), fn ($q, $id) => $q->where('category_id', $id))
            ->when(request('status'), fn ($q, $status) => $q->where('status', $status))
            ->when(request('search'), fn ($q, $term) => $q->where('title', 'like', "%{$term}%"))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.videos.index', [
            'videos' => $videos,
            'categories' => $this->categoryOptions(),
            'statuses' => $this->statusOptions(),
        ]);
    }

    public function create(): View
    {
        return view('admin.videos.create', $this->formData(new Video));
    }

    public function store(VideoRequest $request): RedirectResponse
    {
        Video::create($this->payload($request))
            ->tags()->sync($this->tagIds($request->input('tags')));

        return redirect()->route('admin.videos.index')
            ->with('success', 'Video qo\'shildi.');
    }

    public function edit(Video $video): View
    {
        return view('admin.videos.edit', $this->formData($video));
    }

    public function update(VideoRequest $request, Video $video): RedirectResponse
    {
        $video->update($this->payload($request));
        $video->tags()->sync($this->tagIds($request->input('tags')));

        return redirect()->route('admin.videos.index')
            ->with('success', 'Video yangilandi.');
    }

    public function destroy(Video $video): RedirectResponse
    {
        $video->delete();

        return redirect()->route('admin.videos.index')
            ->with('success', 'Video o\'chirildi.');
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(VideoRequest $request): array
    {
        $data = $request->safe()->except('tags');
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);

        $youtubeId = YouTube::id($data['youtube_url']);
        $data['youtube_id'] = $youtubeId;
        $data['thumbnail_url'] = YouTube::thumbnail($youtubeId);

        if ($data['status'] === ContentStatus::Published->value && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        return $data;
    }

    /**
     * @return array<int, int>
     */
    private function tagIds(?string $tags): array
    {
        return collect(explode(',', (string) $tags))
            ->map(fn ($name) => trim($name))
            ->filter()
            ->map(fn ($name) => Tag::firstOrCreate(['slug' => Str::slug($name)], ['name' => $name])->id)
            ->all();
    }

    /**
     * @return array<string, mixed>
     */
    private function formData(Video $video): array
    {
        return [
            'video' => $video,
            'categories' => $this->categoryOptions(),
            'statuses' => $this->statusOptions(),
            'tagList' => $video->exists ? $video->tags->pluck('name')->implode(', ') : '',
        ];
    }

    /**
     * @return array<int, string>
     */
    private function categoryOptions(): array
    {
        return Category::query()
            ->where('type', CategoryType::Video)
            ->orderBy('name')
            ->pluck('name', 'id')
            ->all();
    }

    /**
     * @return array<string, string>
     */
    private function statusOptions(): array
    {
        return collect(ContentStatus::cases())
            ->mapWithKeys(fn (ContentStatus $s) => [$s->value => $s->label()])->all();
    }
}
