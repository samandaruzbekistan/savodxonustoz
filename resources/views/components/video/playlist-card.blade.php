@props(['playlist'])

<a href="{{ route('playlists.show', $playlist->slug) }}" {{ $attributes->merge(['class' => 'group flex w-64 shrink-0 items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4 transition hover:border-rose-300 hover:shadow-md']) }}>
    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-rose-50 text-rose-600">
        <x-icon name="play" class="h-6 w-6" />
    </span>
    <div class="min-w-0">
        <h3 class="truncate font-semibold text-slate-800 group-hover:text-rose-700">{{ $playlist->title }}</h3>
        <p class="text-xs text-slate-400">{{ $playlist->videos_count ?? $playlist->videos->count() }} ta video</p>
    </div>
</a>
