@props(['category'])

@php
    // Per-section banner palette — literal Tailwind classes for the scanner.
    $map = [
        'nazariya' => ['icon' => 'book', 'grad' => 'from-indigo-600 to-indigo-500', 'soft' => 'text-indigo-100'],
        'metodik-modul' => ['icon' => 'cap', 'grad' => 'from-violet-600 to-violet-500', 'soft' => 'text-violet-100'],
        'xalqaro-tajriba' => ['icon' => 'globe', 'grad' => 'from-teal-600 to-teal-500', 'soft' => 'text-teal-100'],
        'barcha-oquvchilarga-yordam' => ['icon' => 'users', 'grad' => 'from-amber-500 to-amber-400', 'soft' => 'text-amber-50'],
        'kitoblar-mualliflar' => ['icon' => 'library', 'grad' => 'from-rose-600 to-rose-500', 'soft' => 'text-rose-100'],
        'uyda-savodxonlik' => ['icon' => 'home', 'grad' => 'from-emerald-600 to-emerald-500', 'soft' => 'text-emerald-100'],
    ];
    $m = $map[$category->slug] ?? ['icon' => 'folder', 'grad' => 'from-slate-700 to-slate-600', 'soft' => 'text-slate-200'];
@endphp

<header class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br {{ $m['grad'] }} px-6 py-10 text-white sm:px-10">
    <div class="pointer-events-none absolute inset-0 opacity-10">
        <x-decor.dots :id="'sec-'.$category->slug" />
    </div>
    <div class="pointer-events-none absolute -right-8 -top-10 opacity-20">
        <x-icon :name="$m['icon']" class="h-48 w-48" stroke="1" />
    </div>
    <div class="relative flex items-start gap-5">
        <span class="grid h-16 w-16 shrink-0 place-items-center rounded-2xl bg-white/15 ring-1 ring-inset ring-white/25 backdrop-blur">
            <x-icon :name="$m['icon']" class="h-8 w-8" stroke="1.5" />
        </span>
        <div>
            <h1 class="text-2xl font-bold sm:text-3xl">{{ $category->name }}</h1>
            @if ($category->description)
                <p class="mt-2 max-w-3xl {{ $m['soft'] }}">{{ $category->description }}</p>
            @endif
        </div>
    </div>
</header>
