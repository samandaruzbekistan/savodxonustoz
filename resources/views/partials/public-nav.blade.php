@php
    $modules = collect(config('navigation.public_modules'))
        ->filter(fn ($m) => \Illuminate\Support\Facades\Route::has($m['route']));
    $more = collect(config('navigation.public_more'))
        ->filter(fn ($m) => \Illuminate\Support\Facades\Route::has($m['route']));
    $accent = config('navigation.public_accent');
    $accentEnabled = $accent && \Illuminate\Support\Facades\Route::has($accent['route']);
    $cats = $navCategories ?? collect();
    $siteName = isset($settings) ? $settings->get('site_name', config('app.name')) : config('app.name');
    $tagline = isset($settings) ? $settings->get('site_tagline', "Kelajak o'qishdan boshlanadi") : "Kelajak o'qishdan boshlanadi";
    $linkBase = 'rounded-lg px-3 py-2 text-sm font-medium transition';
@endphp

<nav x-data="{ open: false, mega: false }" class="sticky top-0 z-40 border-b border-slate-200 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center gap-4 px-4 py-2.5">
        {{-- Brand --}}
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2.5">
            <span class="grid h-10 w-10 place-items-center rounded-xl bg-gradient-to-br from-indigo-600 to-violet-600 text-white shadow-sm">
                <x-icon name="book" class="h-6 w-6" stroke="1.6" />
            </span>
            <span class="hidden leading-tight sm:block">
                <span class="block text-[15px] font-extrabold tracking-tight text-slate-800">{{ $siteName }}</span>
                <span class="block text-[11px] font-medium text-slate-400">{{ $tagline }}</span>
            </span>
        </a>

        {{-- Desktop nav --}}
        <div class="ml-2 hidden items-center gap-0.5 lg:flex">
            <a href="{{ route('home') }}" class="{{ $linkBase }} {{ request()->routeIs('home') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-indigo-700' }}">Bosh sahifa</a>

            {{-- Bo'limlar mega-menu --}}
            @if ($cats->isNotEmpty())
                <div class="relative" @mouseenter="mega = true" @mouseleave="mega = false">
                    <button @click="mega = !mega"
                            class="{{ $linkBase }} inline-flex items-center gap-1 {{ request()->routeIs('sections.show') || request()->routeIs('contents.show') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-indigo-700' }}">
                        Bo'limlar <x-icon name="chevron-down" class="h-4 w-4 transition" ::class="mega && 'rotate-180'" />
                    </button>
                    <div x-show="mega" x-cloak x-transition.opacity
                         class="absolute left-0 top-full z-50 w-[640px] pt-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-3 shadow-xl">
                            <div class="grid grid-cols-2 gap-1">
                                @foreach ($cats as $cat)
                                    <x-section.tile :category="$cat" variant="menu" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @foreach ($modules as $module)
                <a href="{{ route($module['route']) }}"
                   class="{{ $linkBase }} {{ request()->routeIs($module['match']) ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-indigo-700' }}">{{ $module['label'] }}</a>
            @endforeach

            @if ($more->isNotEmpty())
                <div x-data="{ moreOpen: false }" class="relative" @mouseenter="moreOpen = true" @mouseleave="moreOpen = false">
                    <button class="{{ $linkBase }} inline-flex items-center gap-1 text-slate-600 hover:bg-slate-100 hover:text-indigo-700">Ko'proq <x-icon name="chevron-down" class="h-4 w-4" /></button>
                    <div x-show="moreOpen" x-cloak x-transition.opacity class="absolute left-0 top-full z-50 w-48 pt-2">
                        <div class="rounded-xl border border-slate-200 bg-white py-1 shadow-lg">
                            @foreach ($more as $item)
                                <a href="{{ route($item['route']) }}" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-indigo-700">
                                    <x-icon :name="$item['icon'] ?? 'dot'" class="h-4 w-4 text-slate-400" /> {{ $item['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- Right actions --}}
        <div class="ml-auto flex items-center gap-2">
            @if ($accentEnabled)
                <a href="{{ route($accent['route']) }}" class="hidden items-center gap-1.5 rounded-lg bg-gradient-to-r from-violet-600 to-fuchsia-600 px-3.5 py-2 text-sm font-semibold text-white shadow-sm transition hover:from-violet-700 hover:to-fuchsia-700 sm:inline-flex">
                    <x-icon name="sparkle" class="h-4 w-4" /> {{ $accent['label'] }}
                </a>
            @endif

            @auth
                <div x-data="{ u: false }" class="relative hidden lg:block">
                    <button @click="u = !u" @click.outside="u = false" class="flex items-center gap-2 rounded-lg px-2 py-1.5 text-sm font-medium text-slate-700 hover:bg-slate-100">
                        <span class="grid h-8 w-8 place-items-center rounded-full bg-indigo-100 text-xs font-bold text-indigo-700">{{ mb_strtoupper(mb_substr(auth()->user()->name, 0, 1)) }}</span>
                        <span class="max-w-[120px] truncate">{{ auth()->user()->name }}</span>
                        <x-icon name="chevron-down" class="h-4 w-4 text-slate-400" />
                    </button>
                    <div x-show="u" x-cloak x-transition.opacity class="absolute right-0 top-full z-50 mt-1 w-48 rounded-xl border border-slate-200 bg-white py-1 shadow-lg">
                        @if (auth()->user()->hasRole(\App\Enums\UserRole::Admin))
                            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-slate-600 hover:bg-slate-50">Boshqaruv paneli</a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="block w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-red-50">Chiqish</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="hidden rounded-lg border border-slate-300 px-3.5 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50 lg:inline-flex">Kirish</a>
            @endauth

            <button @click="open = !open" class="rounded-lg p-2 text-slate-600 hover:bg-slate-100 lg:hidden" aria-label="Menyu">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div x-show="open" x-cloak class="border-t border-slate-200 bg-white lg:hidden">
        <div class="max-h-[80vh] space-y-1 overflow-y-auto px-4 py-3">
            <a href="{{ route('home') }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">Bosh sahifa</a>

            @if ($cats->isNotEmpty())
                <p class="px-3 pb-1 pt-3 text-xs font-semibold uppercase tracking-wide text-slate-400">Bo'limlar</p>
                @foreach ($cats as $cat)
                    <a href="{{ route('sections.show', $cat->slug) }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">{{ $cat->name }}</a>
                @endforeach
            @endif

            <p class="px-3 pb-1 pt-3 text-xs font-semibold uppercase tracking-wide text-slate-400">Platforma</p>
            @foreach ($modules as $module)
                <a href="{{ route($module['route']) }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">{{ $module['label'] }}</a>
            @endforeach
            @if ($accentEnabled)
                <a href="{{ route($accent['route']) }}" class="block rounded-lg px-3 py-2 text-sm font-semibold text-violet-700 hover:bg-violet-50">{{ $accent['label'] }}</a>
            @endif
            @foreach ($more as $item)
                <a href="{{ route($item['route']) }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">{{ $item['label'] }}</a>
            @endforeach

            <div class="pt-3">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="block w-full rounded-lg bg-slate-100 px-3 py-2 text-left text-sm font-semibold text-red-600">Chiqish ({{ auth()->user()->name }})</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block rounded-lg bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white">Kirish / Ro'yxatdan o'tish</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
