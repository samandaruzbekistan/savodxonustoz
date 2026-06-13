@php
    $modules = collect(config('navigation.public_modules'))
        ->filter(fn ($m) => \Illuminate\Support\Facades\Route::has($m['route']));
    $more = collect(config('navigation.public_more'))
        ->filter(fn ($m) => \Illuminate\Support\Facades\Route::has($m['route']));
@endphp

<nav x-data="{ open: false }" class="sticky top-0 z-40 border-b border-slate-200 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3">
        <a href="{{ route('home') }}" class="flex items-center gap-2 text-lg font-bold text-indigo-700">
            <span class="grid h-9 w-9 place-items-center rounded-lg bg-indigo-600 text-sm font-bold text-white">SU</span>
            <span class="hidden sm:inline">{{ isset($settings) ? $settings->get('site_name', config('app.name')) : config('app.name') }}</span>
        </a>

        <div class="hidden items-center gap-1 md:flex">
            <a href="{{ route('home') }}" class="rounded-lg px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-indigo-700">Bosh sahifa</a>

            @foreach (($navCategories ?? collect()) as $navCategory)
                <a href="{{ route('sections.show', $navCategory->slug) }}"
                   class="rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs('sections.show') && request()->route('category')?->id === $navCategory->id ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-indigo-700' }}">
                    {{ $navCategory->name }}
                </a>
            @endforeach

            @foreach ($modules as $module)
                <a href="{{ route($module['route']) }}"
                   class="rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs($module['match']) ? 'bg-indigo-50 text-indigo-700' : ((($module['accent'] ?? false)) ? 'text-violet-700 hover:bg-violet-50' : 'text-slate-600 hover:bg-slate-100 hover:text-indigo-700') }}">
                    {{ $module['label'] }}
                </a>
            @endforeach

            @if ($more->isNotEmpty())
                <div x-data="{ moreOpen: false }" class="relative">
                    <button @click="moreOpen = !moreOpen" @click.outside="moreOpen = false"
                            class="rounded-lg px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-indigo-700">Ko'proq ▾</button>
                    <div x-show="moreOpen" x-cloak x-transition
                         class="absolute right-0 mt-1 w-44 rounded-xl border border-slate-200 bg-white py-1 shadow-lg">
                        @foreach ($more as $item)
                            <a href="{{ route($item['route']) }}" class="block px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-indigo-700">{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <button @click="open = !open" class="rounded-lg p-2 text-slate-600 hover:bg-slate-100 md:hidden" aria-label="Menyu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>

    <div x-show="open" x-cloak class="border-t border-slate-200 bg-white md:hidden">
        <div class="space-y-1 px-4 py-3">
            <a href="{{ route('home') }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">Bosh sahifa</a>
            @foreach (($navCategories ?? collect()) as $navCategory)
                <a href="{{ route('sections.show', $navCategory->slug) }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">{{ $navCategory->name }}</a>
            @endforeach
            @foreach ($modules as $module)
                <a href="{{ route($module['route']) }}" class="block rounded-lg px-3 py-2 text-sm font-medium {{ ($module['accent'] ?? false) ? 'text-violet-700' : 'text-slate-700' }} hover:bg-slate-100">{{ $module['label'] }}</a>
            @endforeach
            @foreach ($more as $item)
                <a href="{{ route($item['route']) }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">{{ $item['label'] }}</a>
            @endforeach
        </div>
    </div>
</nav>
