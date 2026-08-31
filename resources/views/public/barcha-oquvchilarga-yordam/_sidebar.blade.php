@php
    $navItems = [
        ['slug' => 'oqishda-qiynalayotganlar',      'label' => "O'qishda qiynalayotgan o'quvchilar"],
        ['slug' => 'differensial-topshiriqlar',     'label' => 'Differensial topshiriqlar'],
        ['slug' => 'ikkinchi-til-oquvchilari',       'label' => "Ikkinchi til sifatida o'zbek tili"],
        ['slug' => 'iqtidorli-oquvchilar',           'label' => "Iqtidorli o'quvchilar bilan ishlash"],
        ['slug' => 'individual-oqish-xaritasi',      'label' => "Individual o'qish xaritasi"],
    ];
    $current = $activeSlug ?? null;
@endphp

<aside class="hidden w-64 shrink-0 lg:block">
    <div class="sticky top-20 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
        <a href="{{ route('barcha-oquvchilarga-yordam.index') }}" class="block relative overflow-hidden bg-gradient-to-br from-blue-600 to-indigo-600 px-4 pt-4 pb-3">
            <div class="pointer-events-none absolute -right-6 -top-8 h-24 w-24 rounded-full bg-white/5"></div>
            <div class="relative flex items-center gap-2.5">
                <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                    </svg>
                </span>
                <span class="text-sm font-bold leading-tight text-white mb-3">Barcha o'quvchilarga yordam berish</span>
            </div>
        </a>
        <nav class="bg-white divide-y divide-slate-100">
            @foreach ($navItems as $item)
                <a href="{{ route('barcha-oquvchilarga-yordam.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                       {{ $current === $item['slug']
                           ? 'bg-blue-50 text-blue-700 border-l-2 border-blue-500'
                           : 'text-slate-700 hover:bg-blue-50 hover:text-blue-700' }}">
                    <span class="leading-snug">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
        <div class="bg-amber-50 border-t border-amber-200 p-4">
            <div class="flex items-start gap-2">
                <svg class="h-4 w-4 shrink-0 mt-0.5 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                </svg>
                <div>
                    <p class="text-xs font-bold text-amber-800 mb-1">Eslatma</p>
                    <p class="text-xs text-amber-700 leading-relaxed">Har bir bo'lim muammo tavsifi, metodik yechim, amaliy mashqlar, o'qituvchi va ota-ona hamkorligi hamda baholash mezonlarini o'z ichiga oladi.</p>
                </div>
            </div>
        </div>
        <div class="bg-white divide-y divide-slate-100 border-t border-slate-200">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                Materiallar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                Savollaringiz bormi?
            </a>
        </div>
    </div>
</aside>
