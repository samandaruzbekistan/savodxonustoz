@csrf

<div class="grid gap-6 lg:grid-cols-3">
    <div class="space-y-5 lg:col-span-2">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.input label="Sarlavha" name="title" :value="$video->title" required />
            <x-form.input label="Slug (ixtiyoriy)" name="slug" :value="$video->slug" />
            <x-form.input label="YouTube havolasi" name="youtube_url" :value="$video->youtube_url" placeholder="https://www.youtube.com/watch?v=..." required />
            <x-form.textarea label="Tavsif" name="description" :value="$video->description" rows="4" />
        </div>
    </div>

    <div class="space-y-5">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            @if ($video->exists && $video->thumbnail_url)
                <img src="{{ $video->thumbnail_url }}" alt="" class="aspect-video w-full rounded-lg object-cover">
            @endif
            <x-form.select label="Holati" name="status" :options="$statuses" :selected="$video->status?->value ?? 'draft'" required />
            <x-form.select label="Kategoriya" name="category_id" :options="$categories" :selected="$video->category_id" placeholder="— yo'q —" />
            <x-form.input label="Davomiyligi (soniya, ixtiyoriy)" name="duration" type="number" :value="$video->duration" />

            <div class="space-y-1">
                <label for="published_at" class="block text-sm font-medium text-slate-700">Nashr sanasi</label>
                <input type="datetime-local" id="published_at" name="published_at"
                    value="{{ old('published_at', $video->published_at?->format('Y-m-d\TH:i')) }}"
                    class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <x-form.input label="Teglar (vergul bilan)" name="tags" :value="$tagList" />
        </div>

        <div class="flex items-center gap-3">
            <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Saqlash</button>
            <a href="{{ route('admin.videos.index') }}" class="text-sm text-slate-500 hover:text-slate-700">Bekor qilish</a>
        </div>
    </div>
</div>
