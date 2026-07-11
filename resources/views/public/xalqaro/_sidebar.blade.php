@php
    $countries = [
        ['slug' => 'finlandiya',       'label' => 'Finlandiya',       'flag' => '🇫🇮'],
        ['slug' => 'singapur',         'label' => 'Singapur',         'flag' => '🇸🇬'],
        ['slug' => 'buyuk-britaniya',  'label' => 'Buyuk Britaniya',  'flag' => '🇬🇧'],
        ['slug' => 'aqsh',             'label' => 'AQSH',             'flag' => '🇺🇸'],
        ['slug' => 'avstraliya',       'label' => 'Avstraliya',       'flag' => '🇦🇺'],
        ['slug' => 'janubiy-koreya',   'label' => 'Janubiy Koreya',   'flag' => '🇰🇷'],
        ['slug' => 'yaponiya',         'label' => 'Yaponiya',         'flag' => '🇯🇵'],
    ];
    $current = $activeSlug ?? null;
@endphp

<aside class="hidden w-64 shrink-0 lg:block">
    <div class="sticky top-20 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
        <a href="{{ route('xalqaro.index') }}" class="flex items-center gap-2.5 bg-gradient-to-br from-blue-600 to-cyan-600 px-4 py-4">
            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253M3.284 14.253A8.959 8.959 0 013 12c0-.778.099-1.533.284-2.253"/>
                </svg>
            </span>
            <span class="text-sm font-bold leading-tight text-white">Xalqaro tajriba</span>
        </a>

        <nav class="bg-white divide-y divide-slate-100">
            @foreach ($countries as $item)
                <a href="{{ route('xalqaro.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                       {{ $current === $item['slug']
                           ? 'bg-blue-50 text-blue-700 border-l-2 border-blue-500'
                           : 'text-slate-700 hover:bg-blue-50 hover:text-blue-700' }}">
                    <span class="text-lg leading-none">{{ $item['flag'] }}</span>
                    <span class="leading-snug">{{ $item['label'] }}</span>
                    <svg class="ml-auto h-3.5 w-3.5 shrink-0 text-slate-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </a>
            @endforeach
        </nav>

        {{-- Special conclusion item --}}
        <div class="border-t border-amber-200 bg-amber-50">
            <a href="{{ route('xalqaro.show', 'xulasalar') }}"
               class="flex items-start gap-3 px-4 py-3.5 text-xs font-semibold text-amber-800 hover:bg-amber-100 transition-colors
                   {{ ($current ?? '') === 'xulasalar' ? 'bg-amber-100 border-l-2 border-amber-500' : '' }}">
                <span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-amber-200 text-amber-700">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </span>
                <span class="leading-snug">Xalqaro tajribadan O'zbekiston uchun xulasalar</span>
            </a>
        </div>

        <div class="bg-slate-50 divide-y divide-slate-100 border-t border-slate-200">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                </svg>
                Resurslar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                </svg>
                Biz bilan bog'laning
            </a>
        </div>
    </div>
</aside>
