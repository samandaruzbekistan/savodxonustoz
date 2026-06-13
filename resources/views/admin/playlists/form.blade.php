@csrf

<div class="grid gap-6 lg:grid-cols-3">
    <div class="space-y-5 lg:col-span-2">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.input label="Nomi" name="title" :value="$playlist->title" required />
            <x-form.input label="Slug (ixtiyoriy)" name="slug" :value="$playlist->slug" />
            <x-form.textarea label="Tavsif" name="description" :value="$playlist->description" rows="3" />
        </div>

        <div class="rounded-xl border border-slate-200 bg-white p-6">
            <h3 class="mb-3 font-semibold text-slate-700">Videolar</h3>
            @if ($allVideos->isEmpty())
                <p class="text-sm text-slate-400">Avval video qo'shing.</p>
            @else
                <div class="space-y-2">
                    @foreach ($allVideos as $v)
                        <label class="flex items-center gap-3 rounded-lg border border-slate-200 px-3 py-2 text-sm">
                            <input type="checkbox" name="videos[]" value="{{ $v->id }}" @checked(in_array($v->id, $selected)) class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                            <span class="flex-1 text-slate-700">{{ $v->title }}</span>
                            <input type="number" name="order[{{ $v->id }}]" value="{{ $orders[$v->id] ?? 0 }}" min="0" class="w-20 rounded-lg border border-slate-300 px-2 py-1 text-sm" title="Tartib">
                        </label>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <div class="space-y-5">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.select label="Holati" name="status" :options="$statuses" :selected="$playlist->status?->value ?? 'draft'" required />
        </div>
        <div class="flex items-center gap-3">
            <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Saqlash</button>
            <a href="{{ route('admin.playlists.index') }}" class="text-sm text-slate-500 hover:text-slate-700">Bekor qilish</a>
        </div>
    </div>
</div>
