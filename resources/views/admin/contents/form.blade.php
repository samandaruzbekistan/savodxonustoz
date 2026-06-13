@csrf

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/trix@2.1.1/dist/trix.css">
@endpush

<div class="grid gap-6 lg:grid-cols-3">
    <div class="space-y-5 lg:col-span-2">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.input label="Sarlavha" name="title" :value="$content->title" required />
            <x-form.input label="Slug (ixtiyoriy)" name="slug" :value="$content->slug" />
            <x-form.textarea label="Qisqa tavsif (excerpt)" name="excerpt" :value="$content->excerpt" rows="2" />

            <div class="space-y-1">
                <label class="block text-sm font-medium text-slate-700">Asosiy matn</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $content->body) }}">
                <trix-editor input="body" data-upload-url="{{ route('admin.media.store') }}" class="trix-content min-h-[300px] rounded-lg border border-slate-300 bg-white"></trix-editor>
                @error('body')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <h3 class="font-semibold text-slate-700">Sahifa bloklari (ixtiyoriy)</h3>
            @php
                $metaFields = [
                    'goal' => 'Sahifaning maqsadi',
                    'examples' => 'Amaliy misollar',
                    'tasks' => 'Savol-topshiriqlar',
                    'expected_result' => 'Kutiladigan natija',
                ];
            @endphp
            @foreach ($metaFields as $key => $label)
                <div class="space-y-1">
                    <label for="meta_{{ $key }}" class="block text-sm font-medium text-slate-700">{{ $label }}</label>
                    <textarea id="meta_{{ $key }}" name="meta[{{ $key }}]" rows="3"
                        class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old("meta.$key", $content->meta[$key] ?? '') }}</textarea>
                </div>
            @endforeach
        </div>
    </div>

    <div class="space-y-5">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.select label="Turi" name="type" :options="$types" :selected="$content->type?->value" placeholder="— tanlang —" required />
            <x-form.select label="Holati" name="status" :options="$statuses" :selected="$content->status?->value ?? 'draft'" required />
            <x-form.select label="Kategoriya" name="category_id" :options="$categories" :selected="$content->category_id" placeholder="— yo'q —" />
            <x-form.select label="Ota kontent (nested)" name="parent_id" :options="$parents" :selected="$content->parent_id" placeholder="— yo'q —" />

            <div class="space-y-1">
                <label for="published_at" class="block text-sm font-medium text-slate-700">Nashr sanasi</label>
                <input type="datetime-local" id="published_at" name="published_at"
                    value="{{ old('published_at', $content->published_at?->format('Y-m-d\TH:i')) }}"
                    class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <label class="flex items-center gap-2 text-sm text-slate-700">
                <input type="hidden" name="is_featured" value="0">
                <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $content->is_featured)) class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                Bosh sahifada ko'rsatilsin
            </label>

            <x-form.input label="Tartib raqami" name="sort_order" type="number" :value="$content->sort_order ?? 0" />
            <x-form.input label="Teglar (vergul bilan)" name="tags" :value="$tagList" />
        </div>

        <div class="space-y-3 rounded-xl border border-slate-200 bg-white p-6">
            <label class="block text-sm font-medium text-slate-700">Muqova rasmi</label>
            @if ($content->cover_image)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($content->cover_image) }}" alt="" class="h-32 w-full rounded-lg object-cover">
            @endif
            <input type="file" name="cover_image" accept="image/*" class="block w-full text-sm text-slate-600 file:mr-3 file:rounded-lg file:border-0 file:bg-indigo-50 file:px-3 file:py-2 file:text-sm file:font-medium file:text-indigo-700">
            @error('cover_image')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
        </div>

        <div class="flex items-center gap-3">
            <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Saqlash</button>
            <a href="{{ route('admin.contents.index') }}" class="text-sm text-slate-500 hover:text-slate-700">Bekor qilish</a>
        </div>
    </div>
</div>

@push('scripts')
    {{-- Trix library; the upload handler lives in resources/js/trix-uploads.js --}}
    <script src="https://unpkg.com/trix@2.1.1/dist/trix.umd.min.js"></script>
@endpush
