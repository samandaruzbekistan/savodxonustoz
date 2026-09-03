@extends('layouts.app')
@section('title', "Matn xususiyatlarini o'qitish — Sinf strategiyalari")
@section('content')

@php
    $asset = fn (string $file) => asset("images/sections/sinf-strategiyalari/matn-xususiyatlari/{$file}");

    $colorMap = [
        'indigo'  => ['tile' => 'bg-indigo-50 ring-indigo-100',   'badge' => 'bg-indigo-600',  'text' => 'text-indigo-700',  'border' => 'border-indigo-200 bg-indigo-50'],
        'violet'  => ['tile' => 'bg-violet-50 ring-violet-100',   'badge' => 'bg-violet-600',  'text' => 'text-violet-700',  'border' => 'border-violet-200 bg-violet-50'],
        'blue'    => ['tile' => 'bg-blue-50 ring-blue-100',       'badge' => 'bg-blue-600',    'text' => 'text-blue-700',    'border' => 'border-blue-200 bg-blue-50'],
        'emerald' => ['tile' => 'bg-emerald-50 ring-emerald-100', 'badge' => 'bg-emerald-600', 'text' => 'text-emerald-700', 'border' => 'border-emerald-200 bg-emerald-50'],
        'teal'    => ['tile' => 'bg-teal-50 ring-teal-100',       'badge' => 'bg-teal-600',    'text' => 'text-teal-700',    'border' => 'border-teal-200 bg-teal-50'],
        'orange'  => ['tile' => 'bg-orange-50 ring-orange-100',   'badge' => 'bg-orange-600',  'text' => 'text-orange-700',  'border' => 'border-orange-200 bg-orange-50'],
        'amber'   => ['tile' => 'bg-amber-50 ring-amber-100',     'badge' => 'bg-amber-500',   'text' => 'text-amber-700',   'border' => 'border-amber-200 bg-amber-50'],
        'rose'    => ['tile' => 'bg-rose-50 ring-rose-100',       'badge' => 'bg-rose-600',    'text' => 'text-rose-700',    'border' => 'border-rose-200 bg-rose-50'],
        'cyan'    => ['tile' => 'bg-cyan-50 ring-cyan-100',       'badge' => 'bg-cyan-600',    'text' => 'text-cyan-700',    'border' => 'border-cyan-200 bg-cyan-50'],
    ];

    $traits = [
        ['icon' => '02_hujjat_va_qalam.png',  'title' => 'Sarlavha',          'desc' => 'Mavzuni bildiradi',       'color' => 'indigo'],
        ['icon' => '03_ochiq_eshiq.png',      'title' => 'Kirish qismi',      'desc' => 'Matn boshlanishi',        'color' => 'blue'],
        ['icon' => '04_hujjat_va_ruchka.png', 'title' => 'Asosiy qism',       'desc' => 'Voqea rivojlanadi',       'color' => 'violet'],
        ['icon' => '05_checklist.png',        'title' => 'Yakuniy qism',      'desc' => 'Xulosa va natija',        'color' => 'emerald'],
        ['icon' => '07_qahramonlar.png',      'title' => 'Qahramonlar',       'desc' => 'Kim ishtirok etadi',      'color' => 'teal'],
        ['icon' => '08_joy_va_vaqt.png',      'title' => 'Joy va vaqt',       'desc' => 'Qayerda, qachon',         'color' => 'orange'],
        ['icon' => '09_asosiy_goya.png',      'title' => "Asosiy g'oya",      'desc' => "Matn nimani o'rgatadi",   'color' => 'amber'],
        ['icon' => '06_rasm_va_moyqalam.png', 'title' => 'Rasm va izohlar',   'desc' => 'Vizual yordam',           'color' => 'rose'],
        ['icon' => '10_jadval_diagramma.png', 'title' => 'Jadval/diagramma',  'desc' => "Ma'lumot tartibli",       'color' => 'cyan'],
        ['icon' => '11_kalit_sozlar.png',     'title' => "Kalit so'zlar",     'desc' => "Muhim so'zlar",           'color' => 'indigo'],
        ['icon' => '12_muallif_fikri.png',    'title' => 'Muallif fikri',     'desc' => 'Yozuvchi niyati',         'color' => 'violet'],
    ];

    $steps = [
        ['n' => 1, 'icon' => '13_qadam_1_matnni_oqish.png',        'title' => "O'qituvchi matnni beradi",                          'color' => 'indigo'],
        ['n' => 2, 'icon' => '14_qadam_2_sarlavhani_aniqlash.png', 'title' => "O'quvchilar sarlavhani o'qiydi va taxmin qiladi",  'color' => 'violet'],
        ['n' => 3, 'icon' => '15_qadam_3_matn_qismlari.png',       'title' => "Matn kirish, asosiy va yakuniy qismlarga ajratiladi", 'color' => 'blue'],
        ['n' => 4, 'icon' => '16_qadam_4_savol_tuzish.png',        'title' => "Har bir qismga savol tuziladi",                    'color' => 'emerald'],
        ['n' => 5, 'icon' => '17_qadam_5_kalit_sozlar.png',        'title' => "Kalit so'zlar belgilanadi",                        'color' => 'teal'],
        ['n' => 6, 'icon' => '18_qadam_6_asosiy_goya.png',         'title' => "Matnning asosiy g'oyasi yoziladi",                 'color' => 'amber'],
    ];

    $tableRows = [
        ['Sarlavha',      'Kichik ixtirochi'],
        ['Qahramon',      'Sardor'],
        ['Muammo',        "Tegirmon avval ishlamadi"],
        ['Harakat',       "Qanotlarini qayta o'lchadi"],
        ['Natija',        'Tegirmon aylana boshladi'],
        ["Asosiy g'oya",  'Sabr va mehnat bilan natijaga erishiladi'],
    ];
@endphp

<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'matn-xususiyatlari'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 via-white to-violet-50">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-indigo-100/60 blur-2xl"></div>
            <div class="pointer-events-none absolute -bottom-10 left-1/3 h-40 w-40 rounded-full bg-violet-100/60 blur-2xl"></div>

            <div class="relative grid grid-cols-1 items-center gap-6 px-6 py-8 sm:px-8 sm:py-10 lg:grid-cols-[1.2fr_0.8fr]">
                <div>
                    <div class="mb-3 flex items-center gap-2">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-indigo-600 text-xs font-bold text-white shadow-sm">6</span>
                        <span class="text-[11px] font-bold uppercase tracking-wide text-indigo-700">Sinf strategiyalari &middot; 6-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Matn xususiyatlarini o'qitish</h1>
                    <p class="mt-3 max-w-xl leading-relaxed text-slate-600">
                        O'quvchilarga matnning tuzilishi, sarlavhasi, muallif fikri, asosiy g'oyasi, qismlari, rasm, jadval, kalit so'zlar, xulosa va izohlarni anglashni o'rgatish metodikasi.
                    </p>
                    <div class="mt-5 flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-indigo-200 bg-white px-3.5 py-2 text-xs font-semibold text-indigo-700 shadow-sm">
                            11 ta matn xususiyati
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-500">
                            6 bosqichli metod
                        </span>
                    </div>
                </div>

                <div class="relative mx-auto hidden w-full max-w-xs sm:block">
                    <div class="pointer-events-none absolute -right-2 top-1 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('19_oqituvchi.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <div class="pointer-events-none absolute -left-3 bottom-10 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('23_yashil_gul.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <img src="{{ $asset('01_kitob_va_lupa.png') }}" alt="Matn xususiyatlari" class="mx-auto w-full max-w-[260px] object-contain drop-shadow-sm">
                </div>
            </div>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl border border-indigo-100 bg-white p-5 shadow-sm">
                <img src="{{ $asset('22_noutbuk_va_oqish.png') }}" alt="" class="pointer-events-none absolute -right-3 -bottom-3 h-20 w-20 object-contain opacity-90">
                <div class="relative mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-indigo-100">
                        <img src="{{ $asset('22_noutbuk_va_oqish.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Maqsad</h3>
                </div>
                <p class="relative max-w-[85%] text-sm leading-relaxed text-slate-600">O'quvchini matn tuzilishini ko'ra olishga, sarlavha va asosiy g'oyani bog'lashga, kalit so'zlarni ajratishga, voqea rivojini tushunishga va matnni yaxlit mazmun sifatida anglashga o'rgatish.</p>
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-violet-100 bg-white p-5 shadow-sm">
                <img src="{{ $asset('21_bitiruv_kitoblari.png') }}" alt="" class="pointer-events-none absolute -right-3 -bottom-3 h-20 w-20 object-contain opacity-90">
                <div class="relative mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-violet-100">
                        <img src="{{ $asset('21_bitiruv_kitoblari.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="relative max-w-[85%] text-sm leading-relaxed text-slate-600">O'quvchi matn xususiyatlarini bilsa, u matnni yaxshiroq tushunadi. Sarlavha matn mavzusini taxmin qilishga yordam beradi, rasm matn mazmunini ochadi, jadval ma'lumotni tartibli ko'rsatadi, kalit so'zlar esa asosiy mazmunni anglashga yordam beradi.</p>
            </div>
        </div>

        {{-- Matnning asosiy xususiyatlari --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('11_kalit_sozlar.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Turkumlash</p>
                    <h2 class="text-lg font-bold text-slate-900">Matnning asosiy xususiyatlari</h2>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                @foreach ($traits as $t)
                    @php $c = $colorMap[$t['color']]; @endphp
                    <div class="group overflow-hidden rounded-2xl border {{ $c['border'] }} text-center shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex h-24 items-center justify-center overflow-hidden bg-white/70">
                            <img src="{{ $asset($t['icon']) }}" alt="{{ $t['title'] }}" class="h-16 w-auto object-contain transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <div class="bg-white px-3 py-3">
                            <p class="text-xs font-bold {{ $c['text'] }}">{{ $t['title'] }}</p>
                            <p class="mt-0.5 text-[11px] text-slate-500">{{ $t['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metod --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('13_qadam_1_matnni_oqish.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Amaliy metod</p>
                    <h2 class="text-lg font-bold text-slate-900">"Matnni qismlarga ajrat" metodi</h2>
                </div>
            </div>

            {{-- Desktop: connected timeline --}}
            <div class="hidden items-start lg:flex">
                @foreach ($steps as $s)
                    @php $c = $colorMap[$s['color']]; @endphp
                    <div class="flex flex-1 flex-col items-center text-center">
                        <div class="relative">
                            <span class="grid h-20 w-20 place-items-center rounded-2xl bg-white ring-1 {{ $c['tile'] }}">
                                <img src="{{ $asset($s['icon']) }}" alt="" class="h-12 w-12 object-contain">
                            </span>
                            <span class="absolute -right-1.5 -top-1.5 grid h-6 w-6 place-items-center rounded-full {{ $c['badge'] }} text-[11px] font-bold text-white shadow">{{ $s['n'] }}</span>
                        </div>
                        <p class="mt-3 max-w-[10rem] text-xs font-medium leading-snug text-slate-700">{{ $s['title'] }}</p>
                    </div>
                    @if (!$loop->last)
                        <div class="flex w-8 shrink-0 items-center justify-center pt-9">
                            <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- Mobile / tablet: vertical steps --}}
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:hidden">
                @foreach ($steps as $s)
                    @php $c = $colorMap[$s['color']]; @endphp
                    <div class="flex items-center gap-4 rounded-2xl border {{ $c['border'] }} p-4">
                        <div class="relative shrink-0">
                            <span class="grid h-14 w-14 place-items-center rounded-2xl bg-white ring-1 {{ $c['tile'] }}">
                                <img src="{{ $asset($s['icon']) }}" alt="" class="h-9 w-9 object-contain">
                            </span>
                            <span class="absolute -right-1.5 -top-1.5 grid h-5 w-5 place-items-center rounded-full {{ $c['badge'] }} text-[10px] font-bold text-white shadow">{{ $s['n'] }}</span>
                        </div>
                        <p class="text-xs font-medium leading-snug text-slate-700">{{ $s['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Namuna --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-indigo-600 text-white shadow-sm">
                    <svg class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.75h-.152c-3.196 0-6.1-1.248-8.25-3.286z"/></svg>
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Amaliy namuna</p>
                    <h2 class="text-lg font-bold text-slate-900">Boshlang'ich sinfga mos namuna — "Kichik ixtirochi"</h2>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-indigo-600 text-white">
                            <tr>
                                <th class="px-4 py-3 text-left font-bold">Matn xususiyati</th>
                                <th class="px-4 py-3 text-left font-bold">O'quvchi javobi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($tableRows as $row)
                                <tr class="bg-white transition-colors hover:bg-indigo-50">
                                    <td class="px-4 py-3 font-semibold text-slate-800">{{ $row[0] }}</td>
                                    <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-600 via-indigo-600 to-violet-700 px-6 py-8 sm:px-10 sm:py-9">
            <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full bg-white/10"></div>
            <div class="pointer-events-none absolute -bottom-16 left-10 h-40 w-40 rounded-full bg-white/10"></div>

            <div class="relative flex flex-col items-center gap-6 sm:flex-row sm:justify-between">
                <div class="max-w-lg text-center sm:text-left">
                    <p class="mb-2 text-xs font-bold uppercase tracking-wide text-indigo-100">Kutiladigan natija</p>
                    <p class="text-lg font-bold leading-snug text-white sm:text-xl">
                        O'quvchi matn tuzilishini ko'ra oladi, sarlavha va asosiy g'oyani bog'laydi, kalit so'zlarni ajratadi, voqea rivojini tushunadi va matnni yaxlit mazmun sifatida anglaydi.
                    </p>
                </div>
                <img src="{{ $asset('24_lavanda_guli.png') }}" alt="" class="h-32 w-32 shrink-0 object-contain sm:h-36 sm:w-36">
            </div>
        </div>

        {{-- Navigatsiya --}}
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ route('sinf-strategiyalari.show', 'sinf-kutubxonalari') }}"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-600 shadow-sm transition hover:bg-slate-50">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi bo'lim
            </a>
            <a href="{{ route('sinf-strategiyalari.show', 'matn-turlarini-tushunish') }}"
               class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700">
                Keyingi bo'lim
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
