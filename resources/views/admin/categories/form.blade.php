@csrf
<div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
    <x-form.input label="Nomi" name="name" :value="$category->name" required />
    <x-form.input label="Slug (ixtiyoriy)" name="slug" :value="$category->slug" />
    <x-form.select label="Turi" name="type" :options="$types" :selected="$category->type?->value" placeholder="— tanlang —" required />
    <x-form.select label="Ota kategoriya" name="parent_id" :options="$parents" :selected="$category->parent_id" placeholder="— yo'q (ildiz) —" />
    <x-form.input label="Ikonka (ixtiyoriy)" name="icon" :value="$category->icon" />
    <x-form.input label="Tartib raqami" name="sort_order" type="number" :value="$category->sort_order ?? 0" />
    <x-form.textarea label="Tavsif" name="description" :value="$category->description" />

    <div class="flex items-center gap-3">
        <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Saqlash</button>
        <a href="{{ route('admin.categories.index') }}" class="text-sm text-slate-500 hover:text-slate-700">Bekor qilish</a>
    </div>
</div>
