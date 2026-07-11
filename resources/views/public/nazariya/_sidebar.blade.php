@php
    $navItems = [
        ['slug' => 'tushuncha',      'label' => "O'qish savodxonligi tushunchasi"],
        ['slug' => 'pirls',          'label' => "PIRLS dasturida o'qish savodxonligi"],
        ['slug' => 'pisa',           'label' => "PISA va funksional o'qish savodxonligi"],
        ['slug' => 'matn-tushunish', 'label' => 'Matnni tushunish nazariyasi'],
        ['slug' => 'ravon-oqish',    'label' => "Ravon o'qish"],
        ['slug' => 'tanqidiy',       'label' => "Tanqidiy o'qish"],
        ['slug' => 'metakognitiv',   'label' => 'Metakognitiv strategiyalar'],
    ];
    $current = $activeSlug ?? null;
@endphp

<aside class="hidden w-64 shrink-0 lg:block">
    <div class="sticky top-20 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
        <a href="{{ route('nazariya.index') }}" class="flex items-center gap-2.5 bg-gradient-to-br from-indigo-600 to-violet-600 px-4 py-4">
            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
            </span>
            <span class="text-sm font-bold leading-tight text-white">O'qish savodxonligi nazariyasi</span>
        </a>
        <nav class="bg-white divide-y divide-slate-100">
            @foreach ($navItems as $item)
                <a href="{{ route('nazariya.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                       {{ $current === $item['slug']
                           ? 'bg-indigo-50 text-indigo-700 border-l-2 border-indigo-500'
                           : 'text-slate-700 hover:bg-indigo-50 hover:text-indigo-700' }}">
                    <span class="leading-snug">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
        <div class="bg-slate-50 divide-y divide-slate-100 border-t border-slate-200">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-indigo-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                Usullar va qo'llanmalar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-indigo-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                Savollaringiz bormi? Biz bilan bog'laning
            </a>
        </div>
    </div>
</aside>
