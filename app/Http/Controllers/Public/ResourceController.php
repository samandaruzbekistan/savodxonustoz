<?php

namespace App\Http\Controllers\Public;

use App\Enums\CategoryType;
use App\Enums\ContentStatus;
use App\Enums\ResourceExtension;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ResourceController extends Controller
{
    public function index(Request $request): View
    {
        $resources = Resource::query()->published()->with('category')
            ->when($request->query('category'), fn ($q, $slug) => $q->whereHas('category', fn ($c) => $c->where('slug', $slug)))
            ->when($request->query('extension'), fn ($q, $ext) => $q->where('extension', $ext))
            ->when($request->query('search'), fn ($q, $term) => $q->where(fn ($w) => $w->where('title', 'like', "%{$term}%")->orWhere('description', 'like', "%{$term}%")))
            ->when(
                $request->query('sort') === 'most_downloaded',
                fn ($q) => $q->orderByDesc('download_count'),
                fn ($q) => $q->latest('published_at'),
            )
            ->paginate(12)
            ->withQueryString();

        $categories = Category::query()
            ->where('type', CategoryType::Resource)
            ->orderBy('name')
            ->get();

        $extensions = collect(ResourceExtension::cases())
            ->mapWithKeys(fn (ResourceExtension $e) => [$e->value => $e->label()]);

        return view('public.resources.index', compact('resources', 'categories', 'extensions'));
    }

    public function download(Request $request, Resource $resource): StreamedResponse
    {
        abort_unless($resource->status === ContentStatus::Published, 404);

        $resource->recordDownload($request->user(), $request->ip(), $request->userAgent());

        return Storage::disk($resource->disk)->download($resource->file_path, $resource->file_name);
    }
}
