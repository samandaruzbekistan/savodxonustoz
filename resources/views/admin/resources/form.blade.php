@csrf

<div class="grid gap-6 lg:grid-cols-3">
    <div class="space-y-5 lg:col-span-2">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.input label="Sarlavha" name="title" :value="$resource->title" required />
            <x-form.input label="Slug (ixtiyoriy)" name="slug" :value="$resource->slug" />
            <x-form.textarea label="Tavsif" name="description" :value="$resource->description" rows="4" />
        </div>

        <div class="space-y-3 rounded-xl border border-slate-200 bg-white p-6">
            <label class="block text-sm font-medium text-slate-700">
                Fayl @unless ($resource->exists)<span class="text-red-500">*</span>@endunless
            </label>
            @if ($resource->exists && $resource->file_name)
                <div class="flex items-center gap-3 rounded-lg bg-slate-50 px-4 py-3 text-sm">
                    <x-resource.file-badge :extension="$resource->extension" />
                    <span class="font-medium text-slate-700">{{ $resource->file_name }}</span>
                    <span class="text-slate-400">{{ number_format($resource->file_size / 1024, 0) }} KB</span>
                </div>
                <p class="text-xs text-slate-500">Yangi fayl yuklasangiz, eskisi almashtiriladi.</p>
            @endif
            <input type="file" name="file" accept=".pdf,.docx,.pptx,.xlsx,.zip" class="block w-full text-sm text-slate-600 file:mr-3 file:rounded-lg file:border-0 file:bg-indigo-50 file:px-3 file:py-2 file:text-sm file:font-medium file:text-indigo-700">
            <p class="text-xs text-slate-400">Ruxsat etilgan: PDF, DOCX, PPTX, XLSX, ZIP — maksimal 20MB.</p>
            @error('file')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
        </div>
    </div>

    <div class="space-y-5">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.select label="Holati" name="status" :options="$statuses" :selected="$resource->status?->value ?? 'draft'" required />
            <x-form.select label="Kategoriya" name="category_id" :options="$categories" :selected="$resource->category_id" placeholder="— yo'q —" />

            <div class="space-y-1">
                <label for="published_at" class="block text-sm font-medium text-slate-700">Nashr sanasi</label>
                <input type="datetime-local" id="published_at" name="published_at"
                    value="{{ old('published_at', $resource->published_at?->format('Y-m-d\TH:i')) }}"
                    class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <x-form.input label="Teglar (vergul bilan)" name="tags" :value="$tagList" />
        </div>

        <div class="flex items-center gap-3">
            <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Saqlash</button>
            <a href="{{ route('admin.resources.index') }}" class="text-sm text-slate-500 hover:text-slate-700">Bekor qilish</a>
        </div>
    </div>
</div>
