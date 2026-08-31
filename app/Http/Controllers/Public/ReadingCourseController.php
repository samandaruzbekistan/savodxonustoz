<?php

namespace App\Http\Controllers\Public;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReadingCourseController extends Controller
{
    public function textbooks(Request $request): View
    {
        $parent = Category::query()
            ->where('type', CategoryType::Resource)
            ->where('slug', '101-oqish-kursi')
            ->first();

        $categories = Category::query()
            ->where('type', CategoryType::Resource)
            ->where('parent_id', $parent?->id)
            ->orderBy('sort_order')
            ->get();

        $categoryIds = $categories->pluck('id')->push($parent?->id)->filter();

        $grades = [1, 2, 3, 4];

        $textbooks = Resource::query()->published()->with('category')
            ->whereIn('category_id', $categoryIds)
            ->when($request->query('category'), fn ($q, $slug) => $q->whereHas('category', fn ($c) => $c->where('slug', $slug)))
            ->when($request->query('sinf'), fn ($q, $grade) => $q->where('title', 'like', "%{$grade}-sinf%"))
            ->when($request->query('search'), fn ($q, $term) => $q->where(fn ($w) => $w->where('title', 'like', "%{$term}%")->orWhere('description', 'like', "%{$term}%")))
            ->orderBy('title')
            ->paginate(12)
            ->withQueryString();

        $counts = [
            'total' => Resource::query()->published()->whereIn('category_id', $categoryIds)->count(),
        ];

        foreach ($categories as $category) {
            $counts[$category->slug] = Resource::query()->published()->where('category_id', $category->id)->count();
        }

        $gradeCounts = [];

        foreach ($grades as $grade) {
            $gradeCounts[$grade] = Resource::query()->published()
                ->whereIn('category_id', $categoryIds)
                ->where('title', 'like', "%{$grade}-sinf%")
                ->count();
        }

        return view('public.reading-course.textbooks', compact('textbooks', 'categories', 'counts', 'grades', 'gradeCounts'));
    }
}
