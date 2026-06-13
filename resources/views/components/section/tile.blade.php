@props(['category', 'variant' => 'card'])

@php
    // Canonical per-section visual identity. Literal Tailwind classes so the
    // scanner keeps them. Shared by the homepage grid and the nav mega-menu.
    $map = [
        'nazariya' => ['icon' => 'book', 'wrap' => 'bg-indigo-100 text-indigo-600', 'title' => 'group-hover:text-indigo-700', 'border' => 'hover:border-indigo-300', 'ring' => 'group-hover:ring-indigo-200'],
        'metodik-modul' => ['icon' => 'cap', 'wrap' => 'bg-violet-100 text-violet-600', 'title' => 'group-hover:text-violet-700', 'border' => 'hover:border-violet-300', 'ring' => 'group-hover:ring-violet-200'],
        'xalqaro-tajriba' => ['icon' => 'globe', 'wrap' => 'bg-teal-100 text-teal-600', 'title' => 'group-hover:text-teal-700', 'border' => 'hover:border-teal-300', 'ring' => 'group-hover:ring-teal-200'],
        'barcha-oquvchilarga-yordam' => ['icon' => 'users', 'wrap' => 'bg-amber-100 text-amber-600', 'title' => 'group-hover:text-amber-700', 'border' => 'hover:border-amber-300', 'ring' => 'group-hover:ring-amber-200'],
        'kitoblar-mualliflar' => ['icon' => 'library', 'wrap' => 'bg-rose-100 text-rose-600', 'title' => 'group-hover:text-rose-700', 'border' => 'hover:border-rose-300', 'ring' => 'group-hover:ring-rose-200'],
        'uyda-savodxonlik' => ['icon' => 'home', 'wrap' => 'bg-emerald-100 text-emerald-600', 'title' => 'group-hover:text-emerald-700', 'border' => 'hover:border-emerald-300', 'ring' => 'group-hover:ring-emerald-200'],
    ];
    $m = $map[$category->slug] ?? ['icon' => 'folder', 'wrap' => 'bg-slate-100 text-slate-500', 'title' => 'group-hover:text-indigo-700', 'border' => 'hover:border-indigo-300', 'ring' => 'group-hover:ring-indigo-200'];
@endphp

@if ($variant === 'menu')
    <a href="{{ route('sections.show', $category->slug) }}" class="group flex items-start gap-3 rounded-xl p-3 transition hover:bg-slate-50">
        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg {{ $m['wrap'] }}">
            <x-icon :name="$m['icon']" class="h-5 w-5" />
        </span>
        <span class="min-w-0">
            <span class="block text-sm font-semibold text-slate-800 {{ $m['title'] }}">{{ $category->name }}</span>
            @if ($category->description)
                <span class="mt-0.5 line-clamp-1 block text-xs text-slate-400">{{ $category->description }}</span>
            @endif
        </span>
    </a>
@else
    <a href="{{ route('sections.show', $category->slug) }}" class="group relative flex flex-col gap-3 overflow-hidden rounded-2xl border border-slate-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-lg {{ $m['border'] }}">
        <span class="grid h-14 w-14 place-items-center rounded-2xl ring-4 ring-transparent transition {{ $m['wrap'] }} {{ $m['ring'] }}">
            <x-icon :name="$m['icon']" class="h-7 w-7" stroke="1.5" />
        </span>
        <div>
            <h3 class="font-bold text-slate-800 {{ $m['title'] }}">{{ $category->name }}</h3>
            @if ($category->description)
                <p class="mt-1.5 line-clamp-2 text-sm leading-relaxed text-slate-500">{{ $category->description }}</p>
            @endif
        </div>
        <span class="mt-auto inline-flex items-center gap-1 text-sm font-medium text-slate-400 transition {{ $m['title'] }}">
            Ko'rish <x-icon name="arrow-right" class="h-4 w-4 transition group-hover:translate-x-0.5" />
        </span>
    </a>
@endif
