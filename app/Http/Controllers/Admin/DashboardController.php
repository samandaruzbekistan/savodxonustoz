<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ContentStatus;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'contents' => Content::count(),
            'published' => Content::where('status', ContentStatus::Published)->count(),
            'drafts' => Content::where('status', ContentStatus::Draft)->count(),
            'categories' => Category::count(),
        ];

        $recent = Content::with('category')->latest()->limit(8)->get();

        return view('admin.dashboard', compact('stats', 'recent'));
    }
}
