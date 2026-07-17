<?php

namespace App\Http\Controllers\Public;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ScientificArticleController extends Controller
{
    public function index(Request $request): View
    {
        $parent = Category::query()
            ->where('type', CategoryType::Resource)
            ->where('slug', 'ilmiy-maqolalar')
            ->first();

        $categories = Category::query()
            ->where('type', CategoryType::Resource)
            ->where('parent_id', $parent?->id)
            ->orderBy('sort_order')
            ->get();

        $categoryIds = $categories->pluck('id')->push($parent?->id)->filter();

        $articles = Resource::query()->published()->with('category')
            ->whereIn('category_id', $categoryIds)
            ->when($request->query('category'), fn ($q, $slug) => $q->whereHas('category', fn ($c) => $c->where('slug', $slug)))
            ->when($request->query('search'), fn ($q, $term) => $q->where(fn ($w) => $w->where('title', 'like', "%{$term}%")->orWhere('description', 'like', "%{$term}%")))
            ->when(
                $request->query('sort') === 'most_downloaded',
                fn ($q) => $q->orderByDesc('download_count'),
                fn ($q) => $q->orderByDesc('published_at'),
            )
            ->paginate(12)
            ->withQueryString();

        $counts = [
            'total' => Resource::query()->published()->whereIn('category_id', $categoryIds)->count(),
        ];

        foreach ($categories as $category) {
            $counts[$category->slug] = Resource::query()->published()->where('category_id', $category->id)->count();
        }

        return view('public.articles.index', compact('articles', 'categories', 'counts'));
    }
}
