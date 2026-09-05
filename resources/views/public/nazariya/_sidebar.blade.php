@php
    $navItems = [
        ['slug' => 'tushuncha',      'label' => "O'qish savodxonligi tushunchasi", 'icon' => 'book'],
        ['slug' => 'pirls',          'label' => "PIRLS dasturida o'qish savodxonligi", 'icon' => 'globe'],
        ['slug' => 'pisa',           'label' => "PISA va funksional o'qish savodxonligi", 'icon' => 'target'],
        ['slug' => 'matn-tushunish', 'label' => 'Matnni tushunish nazariyasi', 'icon' => 'layers'],
        ['slug' => 'ravon-oqish',    'label' => "Ravon o'qish", 'icon' => 'play'],
        ['slug' => 'tanqidiy',       'label' => "Tanqidiy o'qish", 'icon' => 'search'],
        ['slug' => 'metakognitiv',   'label' => 'Metakognitiv strategiyalar', 'icon' => 'bulb'],
    ];
    $current = $activeSlug ?? null;
    $currentLabel = collect($navItems)->firstWhere('slug', $current)['label'] ?? "Bo'lim menyusi";
    $currentIndex = collect($navItems)->search(fn ($item) => $item['slug'] === $current);
    $stepNumber = $currentIndex === false ? null : $currentIndex + 1;
    $totalSteps = count($navItems);
    $progressPct = $stepNumber ? round($stepNumber / $totalSteps * 100) : 0;
@endphp

{{-- ── Mobile: collapsible drawer trigger ─────────────────────────── --}}
<div x-data="{ drawerOpen: false }" class="lg:hidden">
    <button @click="drawerOpen = !drawerOpen"
            class="flex w-full items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-indigo-600 to-violet-600">
            <x-icon name="book" class="h-4.5 w-4.5 text-white" stroke="1.8" />
        </span>
        <span class="min-w-0 flex-1 text-left">
            <span class="block text-[11px] font-semibold uppercase tracking-wide text-indigo-500">
                O'qish savodxonligi nazariyasi @if($stepNumber) · {{ $stepNumber }}/{{ $totalSteps }} @endif
            </span>
            <span class="block truncate text-sm font-bold text-slate-800">{{ $currentLabel }}</span>
        </span>
        <x-icon name="chevron-down" class="h-4 w-4 shrink-0 text-slate-400 transition-transform duration-200" ::class="drawerOpen ? 'rotate-180' : ''" />
    </button>

    <div x-show="drawerOpen" x-cloak
         x-transition:enter="transition ease-out duration-150"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="mt-2 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <nav class="divide-y divide-slate-100">
            @foreach ($navItems as $item)
                @php $isActive = $current === $item['slug']; @endphp
                <a href="{{ route('nazariya.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                       {{ $isActive
                           ? 'bg-indigo-50 text-indigo-700'
                           : 'text-slate-700 hover:bg-indigo-50 hover:text-indigo-700' }}">
                    <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg {{ $isActive ? 'bg-indigo-600 text-white' : 'bg-slate-100 text-slate-400' }}">
                        <x-icon :name="$item['icon']" class="h-4 w-4" stroke="2" />
                    </span>
                    <span class="leading-snug">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
        <div class="bg-slate-50 divide-y divide-slate-100 border-t border-slate-200">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-indigo-700 transition-colors">
                <x-icon name="download" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                Usullar va qo'llanmalar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-indigo-700 transition-colors">
                <x-icon name="help" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                Savollaringiz bormi? Biz bilan bog'laning
            </a>
        </div>
    </div>
</div>

{{-- ── Desktop: sticky sidebar ─────────────────────────────────────── --}}
<aside class="hidden w-72 shrink-0 lg:block">
    <div class="sticky top-20 space-y-4">
        <div class="overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
            <a href="{{ route('nazariya.index') }}" class="flex items-center gap-2.5 bg-gradient-to-br from-indigo-600 to-violet-600 px-4 py-4">
                <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                    <x-icon name="book" class="h-5 w-5 text-white" stroke="1.8" />
                </span>
                <span class="text-sm font-bold leading-tight text-white">O'qish savodxonligi nazariyasi</span>
            </a>

            @if ($stepNumber)
                <div class="border-b border-slate-100 bg-white px-4 py-3">
                    <div class="mb-1.5 flex items-center justify-between text-[11px] font-semibold text-slate-400">
                        <span>{{ $stepNumber }} / {{ $totalSteps }} mavzu</span>
                        <span class="text-indigo-600">{{ $progressPct }}%</span>
                    </div>
                    <div class="h-1.5 w-full overflow-hidden rounded-full bg-slate-100">
                        <div class="h-full rounded-full bg-gradient-to-r from-indigo-500 to-violet-500" style="width: {{ $progressPct }}%"></div>
                    </div>
                </div>
            @endif

            <nav class="divide-y divide-slate-100 bg-white">
                @foreach ($navItems as $item)
                    @php $isActive = $current === $item['slug']; @endphp
                    <a href="{{ route('nazariya.show', $item['slug']) }}"
                       class="group flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                           {{ $isActive
                               ? 'border-l-2 border-indigo-500 bg-indigo-50 text-indigo-700'
                               : 'border-l-2 border-transparent text-slate-700 hover:bg-indigo-50/60 hover:text-indigo-700' }}">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg transition-colors
                            {{ $isActive
                                ? 'bg-indigo-600 text-white'
                                : 'bg-slate-100 text-slate-400 group-hover:bg-indigo-100 group-hover:text-indigo-600' }}">
                            <x-icon :name="$item['icon']" class="h-4 w-4" stroke="2" />
                        </span>
                        <span class="leading-snug">{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </nav>

            <div class="divide-y divide-slate-100 border-t border-slate-200 bg-slate-50">
                <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 transition-colors hover:text-indigo-700">
                    <x-icon name="download" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                    Usullar va qo'llanmalar yuklab olish
                </a>
                <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 transition-colors hover:text-indigo-700">
                    <x-icon name="help" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                    Savollaringiz bormi? Biz bilan bog'laning
                </a>
            </div>
        </div>

        <div class="overflow-hidden rounded-2xl border border-indigo-100 bg-gradient-to-br from-indigo-50 to-violet-50 p-4 text-center shadow-sm">
            <img src="{{ asset('images/nazariya/section_02.png') }}" alt="" class="mx-auto mb-3 h-20 w-auto object-contain" loading="lazy">
            <p class="text-sm font-bold text-slate-800">Bilimli o'qituvchi —<br>kuchli avlod!</p>
            <p class="mt-1 text-xs leading-relaxed text-slate-500">Har bir dars — katta o'zgarish sari kichik qadam.</p>
        </div>
    </div>
</aside>
