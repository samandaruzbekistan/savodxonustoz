@php
    $platformGroups = collect(config('navigation.public_platform'))
        ->map(fn ($group) => [
            'heading' => $group['heading'],
            'items'   => collect($group['items'])->filter(fn ($m) => \Illuminate\Support\Facades\Route::has($m['route']))->values(),
        ])
        ->filter(fn ($group) => $group['items']->isNotEmpty());

    $more = collect(config('navigation.public_more'))
        ->filter(fn ($m) => \Illuminate\Support\Facades\Route::has($m['route']));

    $accent       = config('navigation.public_accent');
    $accentEnabled = $accent && \Illuminate\Support\Facades\Route::has($accent['route']);
    $cats          = $navCategories ?? collect();
    $siteName      = isset($settings) ? $settings->get('site_name', config('app.name')) : config('app.name');
    $tagline       = isset($settings) ? $settings->get('site_tagline', "O'qish savodxonligi metodik platformasi") : "O'qish savodxonligi metodik platformasi";

    $isPlatformActive = $platformGroups->flatMap(fn ($g) => $g['items'])
        ->contains(fn ($m) => request()->routeIs($m['match']));
@endphp

<nav x-data="{ open: false, mega: false, platform: false, moreOpen: false }"
     @keydown.escape.window="mega = false; platform = false; moreOpen = false; open = false"
     class="sticky top-0 z-40 border-b border-slate-100 bg-white/95 shadow-sm backdrop-blur">

    <div class="mx-auto flex max-w-7xl items-center gap-3 px-4 py-3">

        {{-- ── Brand ─────────────────────────────── --}}
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-2.5">
            <span class="grid h-9 w-9 place-items-center rounded-xl bg-gradient-to-br from-indigo-600 to-violet-600 text-white shadow">
                <x-icon name="book" class="h-5 w-5" stroke="1.6" />
            </span>
            <span class="hidden leading-tight sm:block">
                <span class="block text-sm font-extrabold tracking-tight text-slate-800">{{ $siteName }}</span>
                <span class="block text-[11px] text-slate-400">{{ $tagline }}</span>
            </span>
        </a>

        {{-- ── Desktop links ────────────────────── --}}
        <div class="ml-4 hidden items-center gap-1 lg:flex">

            {{-- Bosh sahifa --}}
            <a href="{{ route('home') }}"
               class="rounded-lg px-3 py-2 text-sm font-medium transition
                      {{ request()->routeIs('home') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                Bosh sahifa
            </a>

            {{-- Bo'limlar ── DB-driven mega-menu --}}
            @if ($cats->isNotEmpty())
                <div class="relative" @mouseenter="mega = true" @mouseleave="mega = false">
                    <button @click="mega = !mega"
                            class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-medium transition
                                   {{ request()->routeIs('sections.show', 'contents.show') ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                        Bo'limlar
                        <x-icon name="chevron-down" class="h-3.5 w-3.5 transition-transform duration-200" ::class="mega ? 'rotate-180' : ''" />
                    </button>

                    <div x-show="mega" x-cloak
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="absolute left-0 top-full z-50 pt-2">
                        <div class="w-72 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl">
                            <div class="divide-y divide-slate-100">
                                @foreach ($cats as $cat)
                                    <x-section.tile :category="$cat" variant="menu" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Platforma ── grouped module mega-menu --}}
            @if ($platformGroups->isNotEmpty())
                <div class="relative" @mouseenter="platform = true" @mouseleave="platform = false">
                    <button @click="platform = !platform"
                            class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-medium transition
                                   {{ $isPlatformActive ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                        Platforma
                        <x-icon name="chevron-down" class="h-3.5 w-3.5 transition-transform duration-200" ::class="platform ? 'rotate-180' : ''" />
                    </button>

                    <div x-show="platform" x-cloak
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="absolute left-0 top-full z-50 pt-2">
                        <div class="rounded-2xl border border-slate-200 bg-white shadow-xl" style="width:580px">
                            <div class="flex divide-x divide-slate-100">
                                @foreach ($platformGroups as $group)
                                    <div class="flex-1 p-3">
                                        <p class="mb-2 px-2 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                                            {{ $group['heading'] }}
                                        </p>
                                        @foreach ($group['items'] as $item)
                                            <a href="{{ route($item['route']) }}"
                                               class="group mb-0.5 flex w-full items-center gap-3 rounded-xl px-2 py-2.5 transition hover:bg-slate-50
                                                      {{ request()->routeIs($item['match']) ? 'bg-indigo-50' : '' }}">
                                                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-lg {{ $item['color'] }}">
                                                    <x-icon :name="$item['icon']" class="h-4 w-4" />
                                                </span>
                                                <span class="flex-1" style="min-width:0">
                                                    <span class="block text-sm font-semibold leading-tight text-slate-800 group-hover:text-indigo-700
                                                                 {{ request()->routeIs($item['match']) ? 'text-indigo-700' : '' }}">
                                                        {{ $item['label'] }}
                                                    </span>
                                                    <span class="mt-0.5 block text-xs leading-tight text-slate-400">
                                                        {{ $item['desc'] }}
                                                    </span>
                                                </span>
                                            </a>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Ko'proq --}}
            @if ($more->isNotEmpty())
                <div class="relative" @mouseenter="moreOpen = true" @mouseleave="moreOpen = false">
                    <button class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                        Ko'proq
                        <x-icon name="chevron-down" class="h-3.5 w-3.5 transition-transform duration-200" ::class="moreOpen ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="moreOpen" x-cloak
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="absolute left-0 top-full z-50 pt-2">
                        <div class="w-44 overflow-hidden rounded-xl border border-slate-200 bg-white shadow-lg">
                            @foreach ($more as $item)
                                <a href="{{ route($item['route']) }}"
                                   class="flex items-center gap-2.5 px-4 py-2.5 text-sm text-slate-600 transition hover:bg-slate-50 hover:text-slate-900
                                          {{ request()->routeIs($item['match']) ? 'bg-slate-50 font-medium text-indigo-700' : '' }}">
                                    <x-icon :name="$item['icon'] ?? 'dot'" class="h-4 w-4 shrink-0 text-slate-400" />
                                    {{ $item['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>

        {{-- ── Right side ───────────────────────── --}}
        <div class="ml-auto flex items-center gap-2">

            @if ($accentEnabled)
                <a href="{{ route($accent['route']) }}"
                   class="hidden items-center gap-1.5 rounded-lg bg-gradient-to-r from-violet-600 to-fuchsia-600 px-3.5 py-2 text-sm font-semibold text-white shadow-sm transition hover:opacity-90 sm:inline-flex">
                    <x-icon name="sparkle" class="h-4 w-4" />
                    {{ $accent['label'] }}
                </a>
            @endif

            @auth
                <div x-data="{ u: false }" @click.outside="u = false" class="relative hidden lg:block">
                    <button @click="u = !u"
                            class="flex items-center gap-2 rounded-lg border border-slate-200 px-2.5 py-1.5 text-sm font-medium text-slate-700 transition hover:bg-slate-50">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-indigo-600 text-[11px] font-bold text-white">
                            {{ mb_strtoupper(mb_substr(auth()->user()->name, 0, 1)) }}
                        </span>
                        <span class="max-w-[100px] truncate">{{ auth()->user()->name }}</span>
                        <x-icon name="chevron-down" class="h-3.5 w-3.5 text-slate-400" />
                    </button>
                    <div x-show="u" x-cloak x-transition.opacity
                         class="absolute right-0 top-full z-50 mt-1 w-44 overflow-hidden rounded-xl border border-slate-200 bg-white shadow-lg">
                        @if (auth()->user()->hasRole(\App\Enums\UserRole::Admin))
                            <a href="{{ route('admin.dashboard') }}"
                               class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-600 hover:bg-slate-50">
                                Boshqaruv paneli
                            </a>
                            <div class="border-t border-slate-100"></div>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="flex w-full items-center gap-2 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50">
                                Chiqish
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                   class="hidden rounded-lg border border-slate-300 px-3.5 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50 lg:inline-flex">
                    Kirish
                </a>
            @endauth

            {{-- Mobile burger --}}
            <button @click="open = !open"
                    class="rounded-lg p-2 text-slate-600 transition hover:bg-slate-100 lg:hidden"
                    aria-label="Menyu">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- ── Mobile menu ──────────────────────────── --}}
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="border-t border-slate-100 bg-white lg:hidden">
        <div class="max-h-[75vh] space-y-0.5 overflow-y-auto px-3 py-3">

            <a href="{{ route('home') }}"
               class="block rounded-xl px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100">
                Bosh sahifa
            </a>

            @if ($cats->isNotEmpty())
                <p class="px-3 pb-1 pt-3 text-[10px] font-bold uppercase tracking-widest text-slate-400">Bo'limlar</p>
                @foreach ($cats as $cat)
                    <a href="{{ route('sections.show', $cat->slug) }}"
                       class="block rounded-xl px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100">
                        {{ $cat->name }}
                    </a>
                @endforeach
            @endif

            @foreach ($platformGroups as $group)
                <p class="px-3 pb-1 pt-3 text-[10px] font-bold uppercase tracking-widest text-slate-400">{{ $group['heading'] }}</p>
                @foreach ($group['items'] as $item)
                    <a href="{{ route($item['route']) }}"
                       class="flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100
                              {{ request()->routeIs($item['match']) ? 'bg-indigo-50 text-indigo-700' : '' }}">
                        <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg {{ $item['color'] }}">
                            <x-icon :name="$item['icon']" class="h-3.5 w-3.5" />
                        </span>
                        {{ $item['label'] }}
                    </a>
                @endforeach
            @endforeach

            @if ($more->isNotEmpty())
                <p class="px-3 pb-1 pt-3 text-[10px] font-bold uppercase tracking-widest text-slate-400">Boshqa</p>
                @foreach ($more as $item)
                    <a href="{{ route($item['route']) }}"
                       class="block rounded-xl px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            @endif

            <div class="space-y-2 border-t border-slate-100 pt-3">
                @if ($accentEnabled)
                    <a href="{{ route($accent['route']) }}"
                       class="block rounded-xl bg-gradient-to-r from-violet-600 to-fuchsia-600 px-3 py-2.5 text-center text-sm font-semibold text-white">
                        {{ $accent['label'] }}
                    </a>
                @endif
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="block w-full rounded-xl bg-red-50 px-3 py-2.5 text-left text-sm font-semibold text-red-600">
                            Chiqish — {{ auth()->user()->name }}
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="block rounded-xl bg-indigo-600 px-3 py-2.5 text-center text-sm font-semibold text-white">
                        Kirish / Ro'yxatdan o'tish
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
