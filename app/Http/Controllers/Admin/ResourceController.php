<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Enums\ResourceExtension;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ResourceRequest;
use App\Models\Category;
use App\Models\Resource;
use App\Models\Tag;
use App\Services\MediaUploader;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ResourceController extends Controller
{
    public function __construct(private readonly MediaUploader $media) {}

    public function index(): View
    {
        $resources = Resource::with('category')
            ->when(request('category'), fn ($q, $id) => $q->where('category_id', $id))
            ->when(request('extension'), fn ($q, $ext) => $q->where('extension', $ext))
            ->when(request('status'), fn ($q, $status) => $q->where('status', $status))
            ->when(request('search'), fn ($q, $term) => $q->where('title', 'like', "%{$term}%"))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.resources.index', [
            'resources' => $resources,
            'categories' => $this->categoryOptions(),
            'extensions' => $this->extensionOptions(),
            'statuses' => $this->statusOptions(),
        ]);
    }

    public function create(): View
    {
        return view('admin.resources.create', $this->formData(new Resource));
    }

    public function store(ResourceRequest $request): RedirectResponse
    {
        Resource::create($this->payload($request))
            ->tags()->sync($this->tagIds($request->input('tags')));

        return redirect()->route('admin.resources.index')
            ->with('success', 'Resurs yuklandi.');
    }

    public function edit(Resource $resource): View
    {
        return view('admin.resources.edit', $this->formData($resource));
    }

    public function update(ResourceRequest $request, Resource $resource): RedirectResponse
    {
        $resource->update($this->payload($request, $resource));
        $resource->tags()->sync($this->tagIds($request->input('tags')));

        return redirect()->route('admin.resources.index')
            ->with('success', 'Resurs yangilandi.');
    }

    public function destroy(Resource $resource): RedirectResponse
    {
        $resource->delete();

        return redirect()->route('admin.resources.index')
            ->with('success', 'Resurs o\'chirildi.');
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(ResourceRequest $request, ?Resource $resource = null): array
    {
        $data = $request->safe()->except(['tags', 'file']);
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        $data['author_id'] = $request->user()->id;

        if ($data['status'] === ContentStatus::Published->value && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('file')) {
            if ($resource?->file_path) {
                Storage::disk($resource->disk)->delete($resource->file_path);
            }

            $file = $request->file('file');
            $data['disk'] = 'public';
            $data['file_path'] = $this->media->store($file, 'resources/'.date('Y/m'));
            $data['file_name'] = $file->getClientOriginalName();
            $data['mime_type'] = $file->getMimeType();
            $data['file_size'] = $file->getSize();
            $data['extension'] = ResourceExtension::from(strtolower($file->getClientOriginalExtension()))->value;
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
    private function formData(Resource $resource): array
    {
        return [
            'resource' => $resource,
            'categories' => $this->categoryOptions(),
            'statuses' => $this->statusOptions(),
            'tagList' => $resource->exists ? $resource->tags->pluck('name')->implode(', ') : '',
        ];
    }

    /**
     * @return array<int, string>
     */
    private function categoryOptions(): array
    {
        return Category::query()
            ->where('type', CategoryType::Resource)
            ->orderBy('name')
            ->pluck('name', 'id')
            ->all();
    }

    /**
     * @return array<string, string>
     */
    private function extensionOptions(): array
    {
        return collect(ResourceExtension::cases())
            ->mapWithKeys(fn (ResourceExtension $e) => [$e->value => $e->label()])->all();
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
