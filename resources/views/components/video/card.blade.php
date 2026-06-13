@props(['video'])

@php
    $d = (int) $video->duration;
    $duration = $d > 0 ? sprintf('%d:%02d', intdiv($d, 60), $d % 60) : null;
@endphp

<a href="{{ route('videos.show', $video->slug) }}" {{ $attributes->merge(['class' => 'group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:-translate-y-0.5 hover:border-rose-300 hover:shadow-md']) }}>
    <div class="relative aspect-video w-full overflow-hidden bg-gradient-to-br from-slate-800 to-slate-900">
        @if ($video->thumbnail_url)
            <img src="{{ $video->thumbnail_url }}" alt="" loading="lazy" class="h-full w-full object-cover opacity-90 transition group-hover:opacity-100">
        @endif
        <span class="absolute inset-0 grid place-items-center">
            <span class="grid h-12 w-12 place-items-center rounded-full bg-white/90 text-rose-600 shadow transition group-hover:scale-110">
                <x-icon name="play" class="h-7 w-7" />
            </span>
        </span>
        @if ($duration)
            <span class="absolute bottom-2 right-2 rounded bg-black/75 px-1.5 py-0.5 text-xs font-medium text-white">{{ $duration }}</span>
        @endif
    </div>
    <div class="flex flex-1 flex-col p-4">
        <span class="mb-1 inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wide text-rose-600">
            <x-icon name="play" class="h-3.5 w-3.5" /> Video
        </span>
        <h3 class="font-semibold text-slate-800 group-hover:text-rose-700">{{ $video->title }}</h3>
        @if ($video->category)
            <p class="mt-1 text-sm text-slate-400">{{ $video->category->name }}</p>
        @endif
    </div>
</a>
