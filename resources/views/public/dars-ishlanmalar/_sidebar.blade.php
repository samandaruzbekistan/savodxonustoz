@php
    $grades = [
        ['slug' => '1-sinf', 'label' => '1-sinf uchun', 'emoji' => '🟢', 'style' => 'text-emerald-700'],
        ['slug' => '2-sinf', 'label' => '2-sinf uchun', 'emoji' => '🔵', 'style' => 'text-sky-700'],
        ['slug' => '3-sinf', 'label' => '3-sinf uchun', 'emoji' => '🟣', 'style' => 'text-violet-700'],
        ['slug' => '4-sinf', 'label' => '4-sinf uchun', 'emoji' => '🟠', 'style' => 'text-amber-700'],
        ['slug' => '5-sinf', 'label' => '5-sinf uchun', 'emoji' => '🔴', 'style' => 'text-rose-700'],
    ];
    $current = $activeSlug ?? null;
@endphp

<aside class="hidden w-60 shrink-0 lg:block">
    <div class="sticky top-20 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">

        {{-- Header --}}
        <a href="{{ route('dars-ishlanmalar.index') }}"
           class="flex items-center gap-2.5 px-4 py-4"
           style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #0369a1 100%);">
            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                </svg>
            </span>
            <div>
                <span class="block text-xs font-semibold text-blue-200 leading-none mb-0.5">Dars ishlanmalar</span>
                <span class="block text-xs text-white/70">1–5-sinf</span>
            </div>
        </a>

        {{-- Grade nav --}}
        <div class="bg-slate-50 border-b border-slate-200 px-3 pt-3 pb-1">
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400 px-1 mb-1">Sinflar</p>
        </div>
        <nav class="bg-white divide-y divide-slate-100">
            @foreach ($grades as $g)
                <a href="{{ route('dars-ishlanmalar.show', $g['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                       {{ $current === $g['slug']
                           ? 'bg-blue-50 text-blue-700 border-l-[3px] border-blue-500'
                           : 'text-slate-700 hover:bg-blue-50 hover:text-blue-700' }}">
                    <span class="text-base leading-none">{{ $g['emoji'] }}</span>
                    <span class="leading-snug text-sm">{{ $g['label'] }}</span>
                    <svg class="ml-auto h-3.5 w-3.5 shrink-0 text-slate-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </a>
            @endforeach
        </nav>

        {{-- Quick links --}}
        <div class="bg-slate-50 border-t border-slate-200 px-3 pt-3 pb-1">
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-400 px-1 mb-1">Foydali materiallar</p>
        </div>
        <div class="bg-white divide-y divide-slate-100">
            @foreach ([
                ['label' => 'Namuna matnlar',        'icon' => 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z'],
                ['label' => 'Namuna savollar',       'icon' => 'M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z'],
                ['label' => 'Maqolalar va darsliklar','icon' => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'],
                ['label' => 'Metodik tavsiyalar',    'icon' => 'M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5'],
            ] as $link)
                <a href="{{ route('resources.index') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs text-slate-600 hover:text-blue-700 transition-colors">
                    <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $link['icon'] }}"/>
                    </svg>
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
    </div>

    {{-- Quote card --}}
    <div class="mt-4 rounded-2xl border border-slate-200 bg-white p-5 text-center">
        <img src="{{ asset('images/sections/dars-ishlanmalar/04_plant.png') }}" alt=""
             class="mx-auto h-14 w-14 object-contain mb-3" loading="lazy">
        <p class="text-sm font-medium text-slate-700 italic leading-relaxed">
            &ldquo;Yaxshi dars &mdash; o&rsquo;quvchini matn bilan fikrlashga yetaklaydi.&rdquo;
        </p>
        <p class="mt-2 text-xs font-semibold text-slate-400">A. Navoiy</p>
    </div>
</aside>
