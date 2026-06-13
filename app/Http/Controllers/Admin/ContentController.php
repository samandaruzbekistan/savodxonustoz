<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContentRequest;
use App\Models\Category;
use App\Models\Content;
use App\Models\Tag;
use App\Services\MediaUploader;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ContentController extends Controller
{
    public function __construct(private readonly MediaUploader $media) {}

    public function index(): View
    {
        $contents = Content::with('category')
            ->when(request('type'), fn ($q, $type) => $q->where('type', $type))
            ->when(request('status'), fn ($q, $status) => $q->where('status', $status))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.contents.index', [
            'contents' => $contents,
            'types' => $this->typeOptions(),
            'statuses' => $this->statusOptions(),
        ]);
    }

    public function create(): View
    {
        return view('admin.contents.create', $this->formData(new Content));
    }

    public function store(ContentRequest $request): RedirectResponse
    {
        $content = Content::create($this->payload($request));

        $this->syncTags($content, $request->input('tags'));

        return redirect()->route('admin.contents.index')
            ->with('success', 'Kontent yaratildi.');
    }

    public function edit(Content $content): View
    {
        return view('admin.contents.edit', $this->formData($content));
    }

    public function update(ContentRequest $request, Content $content): RedirectResponse
    {
        $content->update($this->payload($request, $content));

        $this->syncTags($content, $request->input('tags'));

        return redirect()->route('admin.contents.index')
            ->with('success', 'Kontent yangilandi.');
    }

    public function destroy(Content $content): RedirectResponse
    {
        $content->delete();

        return redirect()->route('admin.contents.index')
            ->with('success', 'Kontent o\'chirildi.');
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(ContentRequest $request, ?Content $content = null): array
    {
        $data = $request->safe()->except(['tags', 'cover_image']);
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        $data['is_featured'] = $request->boolean('is_featured');
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['author_id'] = $request->user()->id;

        if ($request->filled('status') && $data['status'] === ContentStatus::Published->value && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('cover_image')) {
            if ($content?->cover_image) {
                Storage::disk('public')->delete($content->cover_image);
            }
            $data['cover_image'] = $this->media->store($request->file('cover_image'), 'covers/'.date('Y/m'));
        }

        return $data;
    }

    private function syncTags(Content $content, ?string $tags): void
    {
        if ($tags === null) {
            return;
        }

        $ids = collect(explode(',', $tags))
            ->map(fn ($name) => trim($name))
            ->filter()
            ->map(fn ($name) => Tag::firstOrCreate(['slug' => Str::slug($name)], ['name' => $name])->id)
            ->all();

        $content->tags()->sync($ids);
    }

    /**
     * @return array<string, mixed>
     */
    private function formData(Content $content): array
    {
        return [
            'content' => $content,
            'types' => $this->typeOptions(),
            'statuses' => $this->statusOptions(),
            'categories' => Category::orderBy('type')->orderBy('name')->get()
                ->mapWithKeys(fn (Category $c) => [$c->id => "[{$c->type->label()}] {$c->name}"])->all(),
            'parents' => Content::query()
                ->when($content->id, fn ($q) => $q->whereKeyNot($content->id))
                ->orderBy('title')->get()
                ->mapWithKeys(fn (Content $c) => [$c->id => $c->title])->all(),
            'tagList' => $content->relationLoaded('tags') || $content->exists
                ? $content->tags->pluck('name')->implode(', ')
                : '',
        ];
    }

    /**
     * @return array<string, string>
     */
    private function typeOptions(): array
    {
        return collect(ContentType::cases())
            ->mapWithKeys(fn (ContentType $t) => [$t->value => $t->label()])->all();
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
