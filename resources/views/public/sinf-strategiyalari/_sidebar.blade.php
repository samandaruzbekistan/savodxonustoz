@php
    $navItems = [
        ['slug' => 'matn-tanlash',                'label' => "Sinfda matnlarni tanlash",                 'color' => 'blue'],
        ['slug' => 'foydalanish-strategiyalari',  'label' => "Matnlardan foydalanish strategiyalari",    'color' => 'violet'],
        ['slug' => 'matn-turlari',                'label' => "Matn turlari",                             'color' => 'emerald'],
        ['slug' => 'sinf-kutubxonalari',          'label' => "Sinf kutubxonalari",                       'color' => 'teal'],
        ['slug' => 'matn-xususiyatlari',          'label' => "Matn xususiyatlarini o'qitish",            'color' => 'indigo'],
        ['slug' => 'matn-turlarini-tushunish',    'label' => "Matn turlarini tushunish",                 'color' => 'rose'],
    ];
    $current = $activeSlug ?? null;

    $dotMap = [
        'blue'    => 'bg-blue-500',
        'violet'  => 'bg-violet-500',
        'emerald' => 'bg-emerald-500',
        'orange'  => 'bg-orange-500',
        'teal'    => 'bg-teal-500',
        'indigo'  => 'bg-indigo-500',
        'rose'    => 'bg-rose-500',
    ];
@endphp

<div class="mb-4 lg:hidden">
    <label class="mb-1.5 block text-xs font-semibold uppercase tracking-wide text-slate-400">Bo'limga o'tish</label>
    <select onchange="if(this.value) window.location.href=this.value"
            class="w-full rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-sm font-medium text-slate-700 shadow-sm focus:border-indigo-400 focus:outline-none focus:ring-1 focus:ring-indigo-300">
        <option value="">Bo'lim tanlang…</option>
        @foreach ($navItems as $i => $item)
            <option value="{{ route('sinf-strategiyalari.show', $item['slug']) }}" @selected($current === $item['slug'])>{{ $i + 1 }}. {{ $item['label'] }}</option>
        @endforeach
    </select>
</div>

<aside class="hidden w-72 shrink-0 lg:block">
    <div class="sticky top-20 space-y-4">

        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <a href="{{ route('sinf-strategiyalari.index') }}"
               class="relative flex items-center gap-3 overflow-hidden bg-gradient-to-br from-indigo-600 via-violet-600 to-fuchsia-600 px-4 py-5">
                <span class="pointer-events-none absolute -right-6 -top-8 h-24 w-24 rounded-full bg-white/10"></span>
                <span class="pointer-events-none absolute -bottom-10 -left-4 h-20 w-20 rounded-full bg-white/10"></span>
                <span class="relative grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-white/20 backdrop-blur">
                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 00-.491 6.347A48.62 48.62 0 0112 20.904a48.62 48.62 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.636 50.636 0 00-2.658-.813A59.906 59.906 0 0112 3.493a59.903 59.903 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                    </svg>
                </span>
                <span class="relative leading-tight">
                    <span class="block text-sm font-bold text-white">Sinf strategiyalari</span>
                    <span class="block text-[11px] text-indigo-100">6 ta amaliy-metodik bo'lim</span>
                </span>
            </a>

            <nav class="divide-y divide-slate-100 p-2">
                @foreach ($navItems as $i => $item)
                    @php $isActive = $current === $item['slug']; @endphp
                    <a href="{{ route('sinf-strategiyalari.show', $item['slug']) }}"
                       class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium transition-all
                           {{ $isActive
                               ? 'bg-gradient-to-r from-indigo-50 to-violet-50 text-indigo-700'
                               : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                        <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full text-[11px] font-bold transition-colors
                            {{ $isActive ? $dotMap[$item['color']].' text-white' : 'bg-slate-100 text-slate-400 group-hover:bg-slate-200' }}">
                            {{ $i + 1 }}
                        </span>
                        <span class="leading-snug">{{ $item['label'] }}</span>
                        @if ($isActive)
                            <svg class="ml-auto h-3.5 w-3.5 shrink-0 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        @endif
                    </a>
                @endforeach
            </nav>
        </div>

        <div class="rounded-2xl border border-amber-200 bg-amber-50 p-4">
            <div class="flex items-start gap-2.5">
                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-amber-400/90">
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                    </svg>
                </span>
                <div>
                    <p class="text-xs font-bold text-amber-800 mb-1">Eslatma</p>
                    <p class="text-xs text-amber-700 leading-relaxed">Har bir bo'limda nazariy izoh, amaliy tavsiya, darsda qo'llash usuli va namunalar natija bilan beriladi.</p>
                </div>
            </div>
        </div>

        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3.5 text-sm font-medium text-slate-700 transition-colors hover:bg-slate-50 hover:text-indigo-700">
                <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-indigo-50 text-indigo-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                </span>
                Materiallar yuklab olish
            </a>
            <div class="border-t border-slate-100"></div>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3.5 text-sm font-medium text-slate-700 transition-colors hover:bg-slate-50 hover:text-indigo-700">
                <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-violet-50 text-violet-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                </span>
                Savollaringiz bormi?
            </a>
        </div>
    </div>
</aside>
