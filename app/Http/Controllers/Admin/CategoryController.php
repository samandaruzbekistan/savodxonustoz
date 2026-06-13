<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::with('parent')
            ->orderBy('type')
            ->orderBy('sort_order')
            ->paginate(30);

        return view('admin.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.categories.create', [
            'category' => new Category,
            'types' => $this->typeOptions(),
            'parents' => $this->parentOptions(),
        ]);
    }

    public function store(CategoryRequest $request): RedirectResponse
    {
        Category::create($this->payload($request));

        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategoriya yaratildi.');
    }

    public function edit(Category $category): View
    {
        return view('admin.categories.edit', [
            'category' => $category,
            'types' => $this->typeOptions(),
            'parents' => $this->parentOptions($category->id),
        ]);
    }

    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($this->payload($request));

        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategoriya yangilandi.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', 'Kategoriya o\'chirildi.');
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(CategoryRequest $request): array
    {
        $data = $request->validated();
        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $parent = ! empty($data['parent_id']) ? Category::find($data['parent_id']) : null;
        $data['depth'] = $parent ? $parent->depth + 1 : 0;
        $data['path'] = $parent ? trim($parent->path.'/'.$data['slug'], '/') : $data['slug'];

        return $data;
    }

    /**
     * @return array<string, string>
     */
    private function typeOptions(): array
    {
        return collect(CategoryType::cases())
            ->mapWithKeys(fn (CategoryType $t) => [$t->value => $t->label()])
            ->all();
    }

    /**
     * @return array<int, string>
     */
    private function parentOptions(?int $excludeId = null): array
    {
        return Category::query()
            ->when($excludeId, fn ($q) => $q->whereKeyNot($excludeId))
            ->orderBy('type')
            ->orderBy('name')
            ->get()
            ->mapWithKeys(fn (Category $c) => [$c->id => "[{$c->type->label()}] {$c->name}"])
            ->all();
    }
}
