@extends('layouts.app')
@section('title', "Sinf kutubxonalari — Sinf strategiyalari")
@section('content')

@php
    $asset = fn (string $file) => asset("images/sections/sinf-strategiyalari/sinf-kutubxonalari/{$file}");

    $colorMap = [
        'teal'    => ['tile' => 'bg-teal-50 ring-teal-100',       'badge' => 'bg-teal-600',    'text' => 'text-teal-700',    'border' => 'border-teal-200 bg-teal-50'],
        'cyan'    => ['tile' => 'bg-cyan-50 ring-cyan-100',       'badge' => 'bg-cyan-600',    'text' => 'text-cyan-700',    'border' => 'border-cyan-200 bg-cyan-50'],
        'blue'    => ['tile' => 'bg-blue-50 ring-blue-100',       'badge' => 'bg-blue-600',    'text' => 'text-blue-700',    'border' => 'border-blue-200 bg-blue-50'],
        'violet'  => ['tile' => 'bg-violet-50 ring-violet-100',   'badge' => 'bg-violet-600',  'text' => 'text-violet-700',  'border' => 'border-violet-200 bg-violet-50'],
        'emerald' => ['tile' => 'bg-emerald-50 ring-emerald-100', 'badge' => 'bg-emerald-600', 'text' => 'text-emerald-700', 'border' => 'border-emerald-200 bg-emerald-50'],
        'amber'   => ['tile' => 'bg-amber-50 ring-amber-100',     'badge' => 'bg-amber-500',   'text' => 'text-amber-700',   'border' => 'border-amber-200 bg-amber-50'],
        'rose'    => ['tile' => 'bg-rose-50 ring-rose-100',       'badge' => 'bg-rose-600',    'text' => 'text-rose-700',    'border' => 'border-rose-200 bg-rose-50'],
    ];

    $organize = [
        ['icon' => 'maktab_ryukzagi.png',      'title' => 'Sinf darajasiga moslik',     'desc' => "Kitoblar o'quvchi yoshiga mos bo'lishi",              'color' => 'blue'],
        ['icon' => 'globus.png',               'title' => 'Turli xillik',               'desc' => 'Badiiy va axborot kitoblari aralash bo\'lishi',        'color' => 'teal'],
        ['icon' => 'papka.png',                'title' => "Mavzu bo'yicha tartib",      'desc' => "Kitoblar mavzular bo'yicha ajratilishi",               'color' => 'amber'],
        ['icon' => 'tekshiruv_royxati.png',    'title' => '"Men o\'qidim" jadvali',     'desc' => "O'quvchi o'z o'qishini kuzatishi",                     'color' => 'violet'],
        ['icon' => 'yulduz.png',               'title' => '"Haftaning kitobi" burchagi','desc' => 'Har hafta yangi kitob namoyishi',                      'color' => 'rose'],
        ['icon' => 'muloqot_bulutlari.png',    'title' => "O'quvchi tavsiyalari",       'desc' => "O'quvchi tavsiya qilgan kitoblar ro'yxati",            'color' => 'cyan'],
        ['icon' => 'ota_onalar_va_oquvchilar.png', 'title' => 'Ota-onalar bilan hamkorlik', 'desc' => 'Kitob almashish va ulush qo\'shish',              'color' => 'emerald'],
    ];

    $activities = [
        ['icon' => 'oqish_kitoblari.png',       'title' => 'Haftaning kitobi',           'desc' => 'Har hafta bitta kitob tanlanadi va sinfda muhokama qilinadi.',            'color' => 'teal'],
        ['icon' => 'tavsiya_bosh_barmoq.png',   'title' => 'Men tavsiya qilaman',        'desc' => "O'quvchi o'qigan kitobini sinfdoshlariga tavsiya qiladi.",                'color' => 'amber'],
        ['icon' => 'soat.png',                  'title' => "10 daqiqa mustaqil o'qish",  'desc' => "Har kuni yoki haftada bir necha marta 10 daqiqa jim o'qish tashkil etiladi.", 'color' => 'blue'],
        ['icon' => 'kitobxonlik_kundaligi.png', 'title' => 'Kitobxonlik kundaligi',      'desc' => "O'quvchi o'qigan kitobi haqida qisqa yozuv qiladi.",                      'color' => 'violet'],
        ['icon' => 'kitob_almashtirish.png',    'title' => 'Kitob almashish kuni',       'desc' => "O'quvchilar o'z kitoblarini sinfdoshlari bilan almashadilar.",            'color' => 'emerald'],
    ];

    $tableRows = [
        ['Aziza',  'Zumrad va Qimmat', 'Zumrad',      'Yaxshilik doim qadrlanadi'],
        ['Sardor', 'Kichik shahzoda',  'Shahzoda',    "Do'stlik muhim"],
        ['Malika', 'Ertaklar kitobi',  'Kenja botir', 'Jasorat kerak'],
    ];
@endphp

<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'sinf-kutubxonalari'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl border border-teal-100 bg-gradient-to-br from-teal-50 via-white to-cyan-50">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-teal-100/60 blur-2xl"></div>
            <div class="pointer-events-none absolute -bottom-10 left-1/3 h-40 w-40 rounded-full bg-cyan-100/60 blur-2xl"></div>

            <div class="relative grid grid-cols-1 items-center gap-6 px-6 py-8 sm:px-8 sm:py-10 lg:grid-cols-[1.2fr_0.8fr]">
                <div>
                    <div class="mb-3 flex items-center gap-2">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-teal-600 text-xs font-bold text-white shadow-sm">5</span>
                        <span class="text-[11px] font-bold uppercase tracking-wide text-teal-700">Sinf strategiyalari &middot; 5-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Sinf kutubxonalari</h1>
                    <p class="mt-3 max-w-xl leading-relaxed text-slate-600">
                        Sinf kutubxonasi — o'quvchilar har kuni ko'radigan, foydalanadigan, kitob tanlaydigan va mustaqil o'qishga undaydigan kichik o'qish muhitidir. U sinfda kitobxonlik madaniyatini shakllantiruvchi pedagogik vositadir.
                    </p>
                    <div class="mt-5 flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-teal-200 bg-white px-3.5 py-2 text-xs font-semibold text-teal-700 shadow-sm">
                            7 ta tashkiliy mezon
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-500">
                            5 ta amaliy faoliyat
                        </span>
                    </div>
                </div>

                <div class="relative mx-auto hidden w-full max-w-xs sm:block">
                    <div class="pointer-events-none absolute -right-2 top-1 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('rangli_kitoblar.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <div class="pointer-events-none absolute -left-3 bottom-10 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('xona_guli.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <img src="{{ $asset('kitob_javoni_va_oqish_burchagi.png') }}" alt="Sinf kutubxonasi" class="mx-auto w-full max-w-[260px] object-contain drop-shadow-sm">
                </div>
            </div>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl border border-teal-100 bg-white p-5 shadow-sm">
                <img src="{{ $asset('chiroq_va_goya.png') }}" alt="" class="pointer-events-none absolute -right-3 -bottom-3 h-20 w-20 object-contain opacity-90">
                <div class="relative mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-teal-100">
                        <img src="{{ $asset('chiroq_va_goya.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Maqsad</h3>
                </div>
                <p class="relative max-w-[85%] text-sm leading-relaxed text-slate-600">O'quvchilarda mustaqil o'qish odatini shakllantirish, kitob tanlash madaniyatini rivojlantirish va o'quvchilarning qiziqishiga mos o'qish imkoniyatini yaratish.</p>
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-cyan-100 bg-white p-5 shadow-sm">
                <img src="{{ $asset('ochiq_kitob.png') }}" alt="" class="pointer-events-none absolute -right-3 -bottom-3 h-20 w-20 object-contain opacity-90">
                <div class="relative mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-cyan-100">
                        <img src="{{ $asset('ochiq_kitob.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="relative max-w-[85%] text-sm leading-relaxed text-slate-600">Sinf kutubxonasi o'quvchining mustaqil o'qish odatini shakllantiradi, kitob tanlash madaniyatini rivojlantiradi, o'quvchilarning qiziqishiga mos o'qish imkoniyatini yaratadi va o'qish motivatsiyasini kuchaytiradi.</p>
            </div>
        </div>

        {{-- Kutubxona tashkil etish --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('papka.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Tashkiliy mezonlar</p>
                    <h2 class="text-lg font-bold text-slate-900">Sinf kutubxonasini tashkil etishda e'tibor berish kerak</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($organize as $o)
                    @php $c = $colorMap[$o['color']]; @endphp
                    <div class="group flex items-start gap-3.5 rounded-2xl border {{ $c['border'] }} p-4 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-white ring-1 {{ $c['tile'] }}">
                            <img src="{{ $asset($o['icon']) }}" alt="" class="h-9 w-9 object-contain transition-transform duration-300 group-hover:scale-110">
                        </span>
                        <div class="pt-1">
                            <p class="text-sm font-bold {{ $c['text'] }}">{{ $o['title'] }}</p>
                            <p class="mt-1 text-xs leading-relaxed text-slate-500">{{ $o['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Faoliyatlar --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('kitoblar_va_qalam.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Amaliy faoliyatlar</p>
                    <h2 class="text-lg font-bold text-slate-900">Sinf kutubxonasidan foydalanish faoliyatlari</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($activities as $a)
                    @php $c = $colorMap[$a['color']]; @endphp
                    <div class="group overflow-hidden rounded-2xl border {{ $c['border'] }} shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex h-32 items-center justify-center overflow-hidden bg-white/70">
                            <img src="{{ $asset($a['icon']) }}" alt="{{ $a['title'] }}" class="h-24 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                        </div>
                        <div class="bg-white p-4">
                            <p class="text-sm font-bold {{ $c['text'] }}">{{ $a['title'] }}</p>
                            <p class="mt-1 text-xs leading-relaxed text-slate-500">{{ $a['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Jadval namuna --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('tekshiruv_royxati.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Kuzatuv varag'i</p>
                    <h2 class="text-lg font-bold text-slate-900">"Men o'qidim" jadvali namunasi</h2>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-teal-600 text-white">
                            <tr>
                                <th class="px-4 py-3 text-left font-bold">O'quvchi ismi</th>
                                <th class="px-4 py-3 text-left font-bold">Kitob nomi</th>
                                <th class="px-4 py-3 text-left font-bold">Menga yoqqan qahramon</th>
                                <th class="px-4 py-3 text-left font-bold">Men olgan xulosa</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($tableRows as $row)
                                <tr class="bg-white transition-colors hover:bg-teal-50">
                                    <td class="px-4 py-3 font-semibold text-slate-800">{{ $row[0] }}</td>
                                    <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                                    <td class="px-4 py-3 text-slate-600">{{ $row[2] }}</td>
                                    <td class="px-4 py-3 italic text-slate-400">{{ $row[3] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-teal-600 via-teal-600 to-cyan-700 px-6 py-8 sm:px-10 sm:py-9">
            <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full bg-white/10"></div>
            <div class="pointer-events-none absolute -bottom-16 left-10 h-40 w-40 rounded-full bg-white/10"></div>

            <div class="relative flex flex-col items-center gap-6 sm:flex-row sm:justify-between">
                <div class="max-w-lg text-center sm:text-left">
                    <p class="mb-2 text-xs font-bold uppercase tracking-wide text-teal-100">Kutiladigan natija</p>
                    <p class="text-lg font-bold leading-snug text-white sm:text-xl">
                        O'quvchilarda mustaqil o'qish odati shakllanadi, kitobga qiziqish ortadi, o'qiganini tushuntirish va tavsiya qilish ko'nikmasi rivojlanadi.
                    </p>
                    <p class="mt-2 text-sm leading-relaxed text-teal-100">
                        Sinfda kitobxonlik muhiti paydo bo'ladi.
                    </p>
                </div>
                <img src="{{ $asset('kubok_va_natija.png') }}" alt="" class="h-32 w-32 shrink-0 object-contain sm:h-36 sm:w-36">
            </div>
        </div>

        {{-- Navigatsiya --}}
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ route('sinf-strategiyalari.show', 'matn-turlari') }}"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-600 shadow-sm transition hover:bg-slate-50">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi bo'lim
            </a>
            <a href="{{ route('sinf-strategiyalari.show', 'matn-xususiyatlari') }}"
               class="inline-flex items-center gap-2 rounded-xl bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-teal-700">
                Keyingi bo'lim
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
