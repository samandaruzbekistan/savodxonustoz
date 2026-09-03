@php
    $navItems = [
        ['slug' => 'oqishda-qiynalayotganlar',      'label' => "O'qishda qiynalayotgan o'quvchilar"],
        ['slug' => 'differensial-topshiriqlar',     'label' => 'Differensial topshiriqlar'],
        ['slug' => 'ikkinchi-til-oquvchilari',       'label' => "Ikkinchi til sifatida o'zbek tili"],
        ['slug' => 'iqtidorli-oquvchilar',           'label' => "Iqtidorli o'quvchilar bilan ishlash"],
        ['slug' => 'individual-oqish-xaritasi',      'label' => "Individual o'qish xaritasi"],
    ];
    $current = $activeSlug ?? null;
    $currentLabel = collect($navItems)->firstWhere('slug', $current)['label'] ?? "Bo'lim menyusi";
@endphp

{{-- ── Mobile: collapsible drawer trigger ─────────────────────────── --}}
<div x-data="{ drawerOpen: false }" class="lg:hidden">
    <button @click="drawerOpen = !drawerOpen"
            class="flex w-full items-center gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600">
            <x-icon name="users" class="h-4.5 w-4.5 text-white" stroke="1.8" />
        </span>
        <span class="min-w-0 flex-1 text-left">
            <span class="block text-[11px] font-semibold uppercase tracking-wide text-indigo-500">Barcha o'quvchilarga yordam</span>
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
                @php $active = $current === $item['slug']; @endphp
                <a href="{{ route('barcha-oquvchilarga-yordam.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm transition-colors
                       {{ $active ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-600 font-medium hover:bg-slate-50' }}">
                    <span class="grid h-5.5 w-5.5 shrink-0 place-items-center rounded-full text-[11px] font-bold
                        {{ $active ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-400' }}">{{ $loop->iteration }}</span>
                    <span class="leading-snug">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
        <div class="border-t border-amber-200 bg-amber-50 p-4">
            <div class="flex items-start gap-2.5">
                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-amber-100">
                    <x-icon name="bulb" class="h-4 w-4 text-amber-600" stroke="1.8" />
                </span>
                <div>
                    <p class="text-xs font-bold text-amber-800 mb-1">Eslatma</p>
                    <p class="text-xs text-amber-700 leading-relaxed">Har bir bo'lim muammo tavsifi, metodik yechim, amaliy mashqlar, o'qituvchi va ota-ona hamkorligi hamda baholash mezonlarini o'z ichiga oladi.</p>
                </div>
            </div>
        </div>
        <div class="divide-y divide-slate-100 border-t border-slate-200">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <x-icon name="download" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                Materiallar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <x-icon name="help" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                Savollaringiz bormi?
            </a>
        </div>
    </div>
</div>

{{-- ── Desktop: sticky sidebar ─────────────────────────────────────── --}}
<aside class="hidden w-64 shrink-0 lg:block">
    <div class="sticky top-20 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
        <a href="{{ route('barcha-oquvchilarga-yordam.index') }}" class="block relative overflow-hidden bg-gradient-to-br from-blue-600 to-indigo-600 px-4 pt-4 pb-4">
            <div class="pointer-events-none absolute -right-6 -top-8 h-24 w-24 rounded-full bg-white/5 su-float-slow"></div>
            <div class="relative flex items-center gap-2.5">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white/20 ring-1 ring-inset ring-white/25">
                    <x-icon name="users" class="h-4.5 w-4.5 text-white" stroke="1.8" />
                </span>
                <span class="text-sm font-bold leading-tight text-white">Barcha o'quvchilarga yordam berish</span>
            </div>
        </a>
        <nav class="bg-white divide-y divide-slate-100">
            @foreach ($navItems as $item)
                @php $active = $current === $item['slug']; @endphp
                <a href="{{ route('barcha-oquvchilarga-yordam.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm transition-colors
                       {{ $active
                           ? 'bg-blue-50 text-blue-700 border-l-[3px] border-blue-600 font-semibold'
                           : 'border-l-[3px] border-transparent text-slate-600 font-medium hover:bg-slate-50 hover:text-blue-700' }}">
                    <span class="grid h-5.5 w-5.5 shrink-0 place-items-center rounded-full text-[11px] font-bold
                        {{ $active ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-400' }}">{{ $loop->iteration }}</span>
                    <span class="leading-snug">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
        <div class="bg-amber-50 border-t border-amber-200 p-4">
            <div class="flex items-start gap-2.5">
                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-amber-100">
                    <x-icon name="bulb" class="h-4 w-4 text-amber-600" stroke="1.8" />
                </span>
                <div>
                    <p class="text-xs font-bold text-amber-800 mb-1">Eslatma</p>
                    <p class="text-xs text-amber-700 leading-relaxed">Har bir bo'lim muammo tavsifi, metodik yechim, amaliy mashqlar, o'qituvchi va ota-ona hamkorligi hamda baholash mezonlarini o'z ichiga oladi.</p>
                </div>
            </div>
        </div>
        <div class="bg-white divide-y divide-slate-100 border-t border-slate-200">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <x-icon name="download" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                Materiallar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <x-icon name="help" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                Savollaringiz bormi?
            </a>
        </div>
    </div>
</aside>
