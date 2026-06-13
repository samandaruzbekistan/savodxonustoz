@props(['resource'])

@php
    $bytes = (int) $resource->file_size;
    $size = $bytes >= 1048576
        ? number_format($bytes / 1048576, 1).' MB'
        : number_format(max($bytes, 0) / 1024, 0).' KB';
@endphp

<div {{ $attributes->merge(['class' => 'flex flex-col rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-indigo-300 hover:shadow-md']) }}>
    <div class="mb-3 flex items-center justify-between">
        <span class="grid h-11 w-11 place-items-center rounded-xl bg-slate-50 text-slate-400">
            <x-icon name="doc" class="h-6 w-6" />
        </span>
        <x-resource.file-badge :extension="$resource->extension" />
    </div>

    <h3 class="font-semibold text-slate-800">{{ $resource->title }}</h3>
    @if ($resource->description)
        <p class="mt-1 line-clamp-2 text-sm text-slate-500">{{ $resource->description }}</p>
    @endif

    <div class="mt-3 flex items-center gap-3 text-xs text-slate-400">
        <span>{{ $size }}</span>
        <span>·</span>
        <span class="inline-flex items-center gap-1"><x-icon name="download" class="h-3.5 w-3.5" /> {{ $resource->download_count }}</span>
    </div>

    <a href="{{ route('resources.download', $resource->slug) }}"
       class="mt-4 inline-flex items-center justify-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-700">
        <x-icon name="download" class="h-4 w-4" /> Yuklab olish
    </a>
</div>
