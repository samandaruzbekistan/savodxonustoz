@csrf

<div class="grid gap-6 lg:grid-cols-3">
    <div class="space-y-5 lg:col-span-2">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.input label="Sarlavha" name="title" :value="$test->title" required />
            <x-form.input label="Slug (ixtiyoriy)" name="slug" :value="$test->slug" />
            <x-form.textarea label="Tavsif" name="description" :value="$test->description" rows="3" />
            <x-form.textarea label="Ko'rsatma (test oldidan)" name="instructions" :value="$test->instructions" rows="3" />
        </div>
    </div>

    <div class="space-y-5">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.select label="Kategoriya" name="category_id" :options="$categories" :selected="$test->category_id" placeholder="— yo'q —" />
            <x-form.input label="O'tish chegarasi (%)" name="pass_percent" type="number" :value="$test->settings['pass_percent'] ?? 60" />

            <label class="flex items-center gap-2 text-sm text-slate-700">
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" name="is_published" value="1" @checked(old('is_published', $test->is_published)) class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                Nashr etilgan
            </label>
        </div>

        <div class="flex items-center gap-3">
            <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Saqlash</button>
            <a href="{{ route('admin.tests.index') }}" class="text-sm text-slate-500 hover:text-slate-700">Bekor qilish</a>
        </div>
    </div>
</div>
