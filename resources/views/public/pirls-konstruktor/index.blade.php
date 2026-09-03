@extends('layouts.app')
@section('title', "PIRLS topshiriqlari konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.pirls-konstruktor._sidebar')

    <div class="min-w-0 flex-1">

        {{-- ============ HERO ============ --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 via-violet-50 to-sky-50 px-6 py-9 sm:px-10 sm:py-11">
            {{-- decorative blurred orbs --}}
            <div class="pointer-events-none absolute -left-16 -top-20 h-64 w-64 rounded-full bg-violet-300/30 blur-3xl"></div>
            <div class="pointer-events-none absolute -right-10 -bottom-24 h-72 w-72 rounded-full bg-blue-300/30 blur-3xl"></div>
            <div class="pointer-events-none absolute right-1/3 top-0 h-40 w-40 rounded-full bg-amber-200/30 blur-3xl"></div>

            <img src="{{ asset('images/sections/pirls-konstruktor/20_yulduzlar_dekor.png') }}" alt=""
                 class="pointer-events-none absolute right-10 top-6 hidden h-16 w-16 opacity-80 sm:block">

            <div class="relative flex flex-col gap-10 lg:flex-row lg:items-center">
                <div class="min-w-0 flex-1">
                    <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-indigo-200 bg-white/70 px-3 py-1.5 backdrop-blur">
                        <span class="grid h-5 w-5 place-items-center rounded-full bg-indigo-600">
                            <x-icon name="target" class="h-3 w-3 text-white" stroke="2" />
                        </span>
                        <span class="text-xs font-bold uppercase tracking-wide text-indigo-700">PIRLS konstruktori · 7 bosqichli vosita</span>
                    </div>

                    <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl">
                        PIRLS topshiriqlari<br class="hidden sm:block"> konstruktori
                    </h1>
                    <p class="mt-3 max-w-xl leading-relaxed text-slate-600">
                        Matn kiritishdan boshlab, savollar yaratish, javob kaliti va tayyor faylni yuklab olishgacha
                        bo'lgan bosqichma-bosqich vosita. Har bir bosqich PIRLS metodologiyasiga mos ravishda quriladi.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-2">
                        @foreach ([
                            ['icon' => 'layers', 'label' => "Bosqichma-bosqich yondashuv"],
                            ['icon' => 'cap', 'label' => "Metodik qo'llanma bilan"],
                            ['icon' => 'check', 'label' => "Avtomatik tekshirish"],
                            ['icon' => 'download', 'label' => "Tayyor faylni yuklab olish"],
                        ] as $badge)
                            <span class="inline-flex items-center gap-1.5 rounded-full border border-indigo-200 bg-white/80 px-3 py-1.5 text-xs font-semibold text-indigo-700 shadow-sm backdrop-blur">
                                <x-icon :name="$badge['icon']" class="h-3.5 w-3.5" stroke="2" />
                                {{ $badge['label'] }}
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- illustration cluster --}}
                <div class="relative mx-auto hidden h-64 w-72 shrink-0 lg:block">
                    <img src="{{ asset('images/sections/pirls-konstruktor/01_noutbuk_checklist.png') }}" alt="PIRLS konstruktori"
                         class="absolute left-1/2 top-1/2 h-52 w-auto -translate-x-1/2 -translate-y-1/2 drop-shadow-2xl">

                    <img src="{{ asset('images/sections/pirls-konstruktor/03_kitoblar_va_qalamlar.png') }}" alt=""
                         class="absolute -bottom-2 -left-4 h-20 w-auto drop-shadow-xl">

                    <img src="{{ asset('images/sections/pirls-konstruktor/07_papka.png') }}" alt=""
                         class="absolute -right-2 top-0 h-14 w-auto drop-shadow-lg">

                    <img src="{{ asset('images/sections/pirls-konstruktor/04_suhbat_buluti.png') }}" alt=""
                         class="absolute -left-6 top-8 h-12 w-auto drop-shadow-lg">

                    <img src="{{ asset('images/sections/pirls-konstruktor/02_stol_chirogi.png') }}" alt=""
                         class="absolute -right-4 bottom-4 h-14 w-auto drop-shadow-lg">
                </div>
            </div>
        </div>

        {{-- ============ WORKFLOW TIMELINE ============ --}}
        @php
            $workflow = [
                ['label' => 'Matn yuklash', 'color' => 'bg-blue-500'],
                ['label' => 'Literal savollar', 'color' => 'bg-violet-500'],
                ['label' => 'Xulosa savollari', 'color' => 'bg-emerald-500'],
                ['label' => 'Talqin savollari', 'color' => 'bg-amber-500'],
                ['label' => 'Baholash savollari', 'color' => 'bg-rose-500'],
                ['label' => 'Javob kaliti', 'color' => 'bg-teal-500'],
                ['label' => 'PDF / Word', 'color' => 'bg-indigo-500'],
            ];
        @endphp
        <div class="mb-8 rounded-2xl border border-slate-200 bg-white p-5 sm:p-6">
            <p class="text-xs font-bold uppercase tracking-wide text-slate-400">Ish jarayoni</p>
            <h2 class="mt-1 text-lg font-extrabold text-slate-900">Matndan tayyor topshiriqqacha — 7 qadam</h2>

            <div class="mt-6 flex items-start gap-1 overflow-x-auto pb-1 sm:gap-0">
                @foreach ($workflow as $i => $step)
                    <div class="flex min-w-[92px] flex-1 flex-col items-center text-center">
                        <div class="flex w-full items-center">
                            <div class="h-0.5 flex-1 {{ $i === 0 ? 'bg-transparent' : 'bg-slate-200' }}"></div>
                            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-full {{ $step['color'] }} text-xs font-bold text-white shadow-sm ring-4 ring-white">
                                {{ $i + 1 }}
                            </span>
                            <div class="h-0.5 flex-1 {{ $i === count($workflow) - 1 ? 'bg-transparent' : 'bg-slate-200' }}"></div>
                        </div>
                        <p class="mt-2 max-w-[92px] text-[11px] font-semibold leading-tight text-slate-600">{{ $step['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ============ 7 CARDS ============ --}}
        @php
            $cards = [
                [
                    'num' => 1, 'color' => 'blue',
                    'slug' => 'matn-yuklash',
                    'title' => 'Matn yuklash oynasi',
                    'desc' => "Badiiy yoki axborot matnini kiritish, sinf darajasi va o'qish maqsadini belgilash.",
                    'points' => ["Matn turi va sinf darajasi", "Moslik tekshiruvi", "Savollar sonini belgilash"],
                    'img' => '06_matn_yuklash.png',
                ],
                [
                    'num' => 2, 'color' => 'violet',
                    'slug' => 'literal-tushunish',
                    'title' => 'Literal tushunish savollari',
                    'desc' => "Matnda aniq ko'rsatilgan faktlarga asoslangan savollarni avtomatik yaratish.",
                    'points' => ["To'g'ridan-to'g'ri fakt savollari", "Matn parchasiga bog'liq savollar"],
                    'img' => '08_savol_va_hujjat.png',
                ],
                [
                    'num' => 3, 'color' => 'emerald',
                    'slug' => 'xulosa-chiqarish',
                    'title' => 'Xulosa chiqarish savollari',
                    'desc' => "Matn mazmunidan kelib chiqib xulosa chiqarishni talab qiluvchi savollar.",
                    'points' => ["Sabab-oqibat bog'lanishi", "Bilvosita ma'no aniqlash"],
                    'img' => '09_goya_va_fikr.png',
                ],
                [
                    'num' => 4, 'color' => 'amber',
                    'slug' => 'talqin-qilish',
                    'title' => 'Talqin qilish savollari',
                    'desc' => "O'quvchining shaxsiy fikri va matnni izohlash qobiliyatini rivojlantiruvchi savollar.",
                    'points' => ["Muallif niyatini anglash", "Shaxsiy fikr bildirish"],
                    'img' => '10_xabar_va_izoh.png',
                ],
                [
                    'num' => 5, 'color' => 'rose',
                    'slug' => 'baholash-savollari',
                    'title' => 'Baholash savollari',
                    'desc' => "Matnni tanqidiy baholash va muallif pozitsiyasini tahlil qilish savollari.",
                    'points' => ["Tanqidiy fikrlash", "Muallif pozitsiyasini baholash"],
                    'img' => '12_baholash_checklist.png',
                ],
                [
                    'num' => 6, 'color' => 'teal',
                    'slug' => 'javob-kaliti',
                    'title' => 'Javob kaliti yaratish',
                    'desc' => "Har bir savol uchun to'g'ri javob namunasi va baholash mezonini shakllantirish.",
                    'points' => ["Namunaviy javoblar", "Baholash mezonlari"],
                    'img' => '13_javob_sifati_kalit.png',
                ],
            ];

            $colorMap = [
                'blue'    => ['bar' => 'bg-blue-500',    'chip' => 'bg-blue-100 text-blue-700',       'iconbg' => 'bg-blue-50 ring-blue-100',       'dot' => 'text-blue-500',    'btn' => 'bg-blue-600 hover:bg-blue-700'],
                'violet'  => ['bar' => 'bg-violet-500',  'chip' => 'bg-violet-100 text-violet-700',   'iconbg' => 'bg-violet-50 ring-violet-100',   'dot' => 'text-violet-500',  'btn' => 'bg-violet-600 hover:bg-violet-700'],
                'emerald' => ['bar' => 'bg-emerald-500', 'chip' => 'bg-emerald-100 text-emerald-700', 'iconbg' => 'bg-emerald-50 ring-emerald-100', 'dot' => 'text-emerald-500', 'btn' => 'bg-emerald-600 hover:bg-emerald-700'],
                'amber'   => ['bar' => 'bg-amber-500',   'chip' => 'bg-amber-100 text-amber-700',     'iconbg' => 'bg-amber-50 ring-amber-100',     'dot' => 'text-amber-500',   'btn' => 'bg-amber-600 hover:bg-amber-700'],
                'rose'    => ['bar' => 'bg-rose-500',    'chip' => 'bg-rose-100 text-rose-700',       'iconbg' => 'bg-rose-50 ring-rose-100',       'dot' => 'text-rose-500',    'btn' => 'bg-rose-600 hover:bg-rose-700'],
                'teal'    => ['bar' => 'bg-teal-500',    'chip' => 'bg-teal-100 text-teal-700',       'iconbg' => 'bg-teal-50 ring-teal-100',       'dot' => 'text-teal-500',    'btn' => 'bg-teal-600 hover:bg-teal-700'],
                'indigo'  => ['bar' => 'bg-indigo-500',  'chip' => 'bg-indigo-100 text-indigo-700',   'iconbg' => 'bg-indigo-50 ring-indigo-100',   'dot' => 'text-indigo-500',  'btn' => 'bg-indigo-600 hover:bg-indigo-700'],
            ];
        @endphp

        <div class="mb-5 flex items-end justify-between gap-3">
            <div>
                <p class="text-xs font-bold uppercase tracking-wide text-slate-400">7 ta bosqich</p>
                <h2 class="mt-1 text-xl font-extrabold text-slate-900">Konstruktor bosqichlari</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-5">
            @foreach ($cards as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="h-1.5 w-full {{ $c['bar'] }}"></div>

                    <div class="flex flex-1 flex-col p-5">
                        <div class="mb-4 flex items-center justify-between">
                            <span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide {{ $c['chip'] }}">
                                {{ $card['num'] }}-bosqich
                            </span>
                            <span class="grid h-7 w-7 place-items-center rounded-full text-xs font-bold {{ $c['chip'] }}">{{ $card['num'] }}</span>
                        </div>

                        {{-- illustration preview --}}
                        <div class="relative mb-4 flex h-36 items-center justify-center overflow-hidden rounded-xl ring-1 ring-inset {{ $c['iconbg'] }}">
                            <img src="{{ asset('images/sections/pirls-konstruktor/' . $card['img']) }}"
                                 alt="{{ $card['title'] }}"
                                 class="h-24 w-auto object-contain drop-shadow-md transition-transform duration-300 group-hover:scale-110">
                            <span class="absolute bottom-2 right-2 rounded-full bg-white/90 px-2 py-1 text-[10px] font-semibold text-slate-500 opacity-0 shadow-sm ring-1 ring-slate-200 transition-opacity duration-200 group-hover:opacity-100">
                                Ko'rish
                            </span>
                        </div>

                        <h3 class="mb-1.5 text-base font-bold leading-snug text-slate-800">{{ $card['title'] }}</h3>
                        <p class="mb-3 text-xs leading-relaxed text-slate-500">{{ $card['desc'] }}</p>

                        <ul class="mb-4 flex-1 space-y-1.5">
                            @foreach ($card['points'] as $point)
                                <li class="flex items-start gap-1.5 text-xs text-slate-600">
                                    <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 {{ $c['dot'] }}" stroke="2.5" />
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('pirls-konstruktor.show', $card['slug']) }}"
                           class="inline-flex items-center justify-center gap-1.5 rounded-xl px-4 py-2.5 text-xs font-bold text-white transition-colors {{ $c['btn'] }}">
                            Boshlash
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- ============ CARD 7 — SPOTLIGHT ============ --}}
        <div class="group relative mb-10 overflow-hidden rounded-2xl border border-indigo-200 bg-gradient-to-r from-indigo-50 via-white to-blue-50 shadow-sm transition-shadow hover:shadow-lg">
            <div class="grid grid-cols-1 gap-6 p-6 sm:p-8 md:grid-cols-[16rem_1fr] md:items-center">
                <div class="relative flex h-40 w-full items-center justify-center overflow-hidden rounded-xl bg-white ring-1 ring-inset ring-indigo-100">
                    <img src="{{ asset('images/sections/pirls-konstruktor/14_pdf_va_word.png') }}" alt="PDF va Word yuklab olish"
                         class="h-24 w-auto object-contain drop-shadow-md transition-transform duration-300 group-hover:scale-110">
                    <span class="absolute bottom-2 right-2 rounded-full bg-white/90 px-2 py-1 text-[10px] font-semibold text-slate-500 opacity-0 shadow-sm ring-1 ring-slate-200 transition-opacity duration-200 group-hover:opacity-100">
                        Ko'rish
                    </span>
                </div>

                <div class="min-w-0">
                    <div class="mb-2 flex items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-indigo-100 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-indigo-700">7-bosqich · Yakuniy</span>
                    </div>
                    <h3 class="mb-1.5 text-lg font-bold text-slate-800">Pdf, Word yuklab olish</h3>
                    <p class="mb-3 max-w-xl text-sm leading-relaxed text-slate-500">Tayyor topshiriqni PDF yoki Word formatida yuklab olish va chop etish — sinfda darhol foydalanishga tayyor.</p>
                    <ul class="mb-4 flex flex-wrap gap-x-5 gap-y-1.5">
                        @foreach (["PDF eksport", "Word eksport"] as $point)
                            <li class="flex items-center gap-1.5 text-xs text-slate-600">
                                <x-icon name="check" class="h-3.5 w-3.5 shrink-0 text-indigo-500" stroke="2.5" />
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('pirls-konstruktor.show', 'yuklab-olish') }}"
                       class="inline-flex items-center justify-center gap-1.5 rounded-xl bg-indigo-600 px-4 py-2.5 text-xs font-bold text-white transition-colors hover:bg-indigo-700">
                        Boshlash
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- ============ METODIK AFZALLIKLAR ============ --}}
        @php
            $features = [
                ['title' => 'Matnni metodik tahlil qilish', 'desc' => "Matn PIRLS talablariga mosligini avtomatik tekshiradi.", 'img' => '11_matnni_tahlil_lupa.png', 'color' => 'blue'],
                ['title' => "Savol turini to'g'ri tanlash", 'desc' => "4 xil kognitiv darajaga mos savol turlarini tanlashda yordam beradi.", 'img' => '17_matematika_amallari.png', 'color' => 'violet'],
                ['title' => 'PIRLS darajasiga mos topshiriq tuzish', 'desc' => "Xalqaro PIRLS metodologiyasi standartlariga mos topshiriq shakllantiradi.", 'img' => '18_xavfsizlik_tasdiqi.png', 'color' => 'rose'],
                ['title' => 'Javob kalitini tayyorlash', 'desc' => "Har bir savol uchun namunaviy javob va baholash mezonini yaratadi.", 'img' => '05_tasdiqlash_belgisi.png', 'color' => 'emerald'],
                ['title' => 'Tayyor faylni eksport qilish', 'desc' => "Bir zumda PDF yoki Word formatida yuklab olish imkonini beradi.", 'img' => '19_yuklab_olish.png', 'color' => 'indigo'],
            ];
        @endphp
        <div class="mb-10">
            <div class="mb-5 flex items-center gap-3">
                <img src="{{ asset('images/sections/pirls-konstruktor/02_stol_chirogi.png') }}" alt="" class="h-10 w-10 object-contain">
                <div>
                    <p class="text-xs font-bold uppercase tracking-wide text-slate-400">Metodik afzalliklar</p>
                    <h2 class="text-xl font-extrabold text-slate-900">Bu konstruktor nimani osonlashtiradi?</h2>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                @foreach ($features as $feature)
                    @php $fc = $colorMap[$feature['color']]; @endphp
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-shadow hover:shadow-md">
                        <div class="mb-3 flex h-16 w-16 items-center justify-center rounded-xl ring-1 ring-inset {{ $fc['iconbg'] }}">
                            <img src="{{ asset('images/sections/pirls-konstruktor/' . $feature['img']) }}" alt="" class="h-11 w-11 object-contain">
                        </div>
                        <h3 class="mb-1 text-xs font-bold leading-snug text-slate-800">{{ $feature['title'] }}</h3>
                        <p class="text-[11px] leading-relaxed text-slate-500">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ============ CTA ============ --}}
        <div class="relative overflow-hidden rounded-2xl border border-blue-200 bg-gradient-to-r from-blue-50 via-indigo-50 to-violet-50 px-6 py-6 sm:px-8">
            <img src="{{ asset('images/sections/pirls-konstruktor/20_yulduzlar_dekor.png') }}" alt=""
                 class="pointer-events-none absolute left-8 top-3 hidden h-10 w-10 opacity-70 sm:block">

            <div class="relative flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/sections/pirls-konstruktor/15_boshlash_raketa.png') }}" alt=""
                         class="hidden h-16 w-16 shrink-0 object-contain drop-shadow-lg sm:block">
                    <div>
                        <p class="text-sm font-bold text-blue-900 mb-1">Matndan tayyor PIRLS topshirig'igacha — bir necha bosqichda.</p>
                        <p class="text-xs text-blue-700">Konstruktor bo'lajak o'qituvchiga sifatli baholash topshiriqlarini mustaqil yaratish ko'nikmasini beradi.</p>
                    </div>
                </div>
                <a href="{{ route('pirls-konstruktor.show', 'matn-yuklash') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                    Boshlash
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
