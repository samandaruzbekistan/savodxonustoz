<?php

namespace App\Http\Controllers\Public;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Resource;
use App\Models\Video;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $featured = Content::query()->published()
            ->where('is_featured', true)
            ->latest('published_at')
            ->limit(6)
            ->get();

        $recent = Content::query()->published()
            ->latest('published_at')
            ->limit(8)
            ->get();

        $sections = Category::query()
            ->where('type', CategoryType::Content)
            ->whereNull('parent_id')
            ->orderBy('sort_order')
            ->get();

        $stats = [
            ['label' => 'Maqolalar', 'value' => Content::query()->published()->count(), 'icon' => 'book', 'color' => 'indigo'],
            ['label' => 'Bo\'limlar', 'value' => $sections->count(), 'icon' => 'folder', 'color' => 'violet'],
            ['label' => 'Resurslar', 'value' => Resource::query()->count(), 'icon' => 'download', 'color' => 'sky'],
            ['label' => 'Videolar', 'value' => Video::query()->count(), 'icon' => 'play', 'color' => 'rose'],
        ];

        return view('public.home', compact('featured', 'recent', 'sections', 'stats'));
    }
}
