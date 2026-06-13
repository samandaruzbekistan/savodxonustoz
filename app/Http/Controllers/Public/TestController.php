<?php

namespace App\Http\Controllers\Public;

use App\Enums\CategoryType;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Test;
use App\Models\TestAttempt;
use App\Services\TestGrader;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{
    public function index(Request $request): View
    {
        $tests = Test::query()
            ->published()
            ->withCount('questions')
            ->with('category')
            ->when($request->query('category'), function ($query, $slug) {
                $query->whereHas('category', fn ($q) => $q->where('slug', $slug));
            })
            ->when($request->query('search'), fn ($q, $s) => $q->where('title', 'like', "%{$s}%"))
            ->latest()
            ->paginate(12)
            ->withQueryString();

        $categories = Category::query()
            ->where('type', CategoryType::Test)
            ->orderBy('name')
            ->get();

        return view('public.tests.index', compact('tests', 'categories'));
    }

    public function show(Test $test): View
    {
        abort_unless($test->is_published, 404);

        $test->load(['questions.options']);

        return view('public.tests.show', compact('test'));
    }

    public function submit(Request $request, Test $test, TestGrader $grader): RedirectResponse
    {
        abort_unless($test->is_published, 404);

        $answers = $request->input('answers', []);

        $attempt = $grader->grade($test, $request->user(), is_array($answers) ? $answers : []);

        return redirect()->route('tests.result', $attempt);
    }

    public function result(TestAttempt $attempt): View
    {
        $user = request()->user();

        abort_unless($attempt->user_id === $user->id || $user->hasRole(UserRole::Admin), 403);

        $attempt->load(['test', 'answers.question.options']);

        $passPercent = (int) ($attempt->test->settings['pass_percent'] ?? 60);
        $passed = $attempt->percentage >= $passPercent;

        return view('public.tests.result', compact('attempt', 'passPercent', 'passed'));
    }
}
