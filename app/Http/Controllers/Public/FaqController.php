<?php

namespace App\Http\Controllers\Public;

use App\Enums\ContentType;
use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        $faqs = Content::query()
            ->where('type', ContentType::Faq)
            ->published()
            ->orderBy('sort_order')
            ->orderBy('title')
            ->get();

        return view('public.faq.index', compact('faqs'));
    }
}
