<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestRequest;
use App\Models\Category;
use App\Models\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TestController extends Controller
{
    public function index(): View
    {
        $tests = Test::query()
            ->withCount(['questions', 'attempts'])
            ->with('category')
            ->when(request('search'), fn ($q, $s) => $q->where('title', 'like', "%{$s}%"))
            ->when(request('status') === 'published', fn ($q) => $q->where('is_published', true))
            ->when(request('status') === 'draft', fn ($q) => $q->where('is_published', false))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.tests.index', compact('tests'));
    }

    public function create(): View
    {
        return view('admin.tests.create', $this->formData(new Test));
    }

    public function store(TestRequest $request): RedirectResponse
    {
        $test = Test::create($this->payload($request));

        return redirect()->route('admin.tests.questions.index', $test)
            ->with('success', 'Test yaratildi. Endi savollar qo\'shing.');
    }

    public function edit(Test $test): View
    {
        return view('admin.tests.edit', $this->formData($test));
    }

    public function update(TestRequest $request, Test $test): RedirectResponse
    {
        $test->update($this->payload($request));

        return redirect()->route('admin.tests.index')
            ->with('success', 'Test yangilandi.');
    }

    public function destroy(Test $test): RedirectResponse
    {
        $test->delete();

        return redirect()->route('admin.tests.index')
            ->with('success', 'Test o\'chirildi.');
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(TestRequest $request): array
    {
        $data = $request->safe()->except(['pass_percent']);
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);
        $data['author_id'] = $request->user()->id;
        $data['is_published'] = $request->boolean('is_published');
        $data['settings'] = ['pass_percent' => (int) $request->input('pass_percent', 60)];

        return $data;
    }

    /**
     * @return array<string, mixed>
     */
    private function formData(Test $test): array
    {
        return [
            'test' => $test,
            'categories' => Category::query()
                ->where('type', CategoryType::Test)
                ->orderBy('name')
                ->pluck('name', 'id')
                ->all(),
        ];
    }
}
