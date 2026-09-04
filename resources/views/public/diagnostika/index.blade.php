@extends('layouts.app')

@section('title', "Diagnostika va baholash — O'qish savodxonligi")

@section('content')

@php
    $sections = [
        [
            'slug'  => 'diagnostikasi',
            'num'   => 1,
            'color' => 'blue',
            'title' => "O'qish savodxonligi diagnostikasi",
            'desc'  => "O'quvchining matnni o'qish, tushunish, xulosa chiqarish va asoslash darajasini aniqlash.",
            'points'=> ['8 ta baholash indikatori', 'Rubrika jadvali', 'Namunaviy matn va savollar', 'Natija tahlili jadvali'],
            'image' => '25_student_woman.png',
        ],
        [
            'slug'  => 'mezonlar',
            'num'   => 2,
            'color' => 'violet',
            'title' => '0–3 ballik baholash mezonlari',
            'desc'  => "O'quvchi javobini aniq, adolatli va rivojlantiruvchi mezonlar asosida baholash tizimi.",
            'points'=> ['0–3 ballik umumiy rubrika', 'Javob namunalari (0–3 ball)', "Ko'nikma tahlili jadvali", "O'qituvchi uchun tavsiyalar"],
            'image' => '03_ppks_checklist.png',
        ],
        [
            'slug'  => 'testlar',
            'num'   => 3,
            'color' => 'emerald',
            'title' => 'Testlar banki',
            'desc'  => "1–4-sinf o'quvchilari uchun PIRLS tipidagi matnli testlar va darajali topshiriqlar jamlanmasi.",
            'points'=> ['9 turdagi topshiriq formatlari', "Ko'nikma–topshiriq turi jadvali", 'Namunaviy test (5 savol)', 'Natija tahlili mezonlari'],
            'image' => '14_test_checklist.png',
        ],
        [
            'slug'  => 'savol-javob',
            'num'   => 4,
            'color' => 'amber',
            'title' => 'Matn asosida savol-javob',
            'desc'  => "O'quvchining matn asosida og'zaki va yozma javob berish, dalil keltirish ko'nikmalarini baholash.",
            'points'=> ['5 darajali savol tizimi', '6 ta baholash indikatori', 'Namunaviy matn va 6 savol', "O'qituvchi uchun yo'naltiruvchi savollar"],
            'image' => '16_reflection_chat.png',
        ],
        [
            'slug'  => 'portfolio',
            'num'   => 5,
            'color' => 'rose',
            'title' => "O'quvchi portfeli",
            'desc'  => "O'quvchining o'qish savodxonligi bo'yicha rivojlanish dinamikasini muntazam kuzatish tizimi.",
            'points'=> ['12 qismli portfel tarkibi', '8 ta kuzatuv indikatori', 'Portfel sahifasi namunasi', 'Oylik tahlil savollari'],
            'image' => '27_resource_folder.png',
        ],
    ];

    $stats = [
        ['num' => '3',  'label' => 'Diagnostika turlari',   'sub' => "Boshlang'ich / Oraliq / Yakuniy",  'icon' => 'layers', 'tone' => 'bg-blue-100 text-blue-600'],
        ['num' => '4',  'label' => 'Baholash darajalari',   'sub' => "Boshlang'ich → Yuqori",             'icon' => 'chart',  'tone' => 'bg-emerald-100 text-emerald-600'],
        ['num' => '8',  'label' => "Ko'nikma indikatorlari", 'sub' => "O'qish, tushunish, tahlil...",     'icon' => 'star',   'tone' => 'bg-amber-100 text-amber-600'],
        ['num' => '12', 'label' => 'Portfel qismlari',      'sub' => "To'liq rivojlanish xaritasi",       'icon' => 'users',  'tone' => 'bg-rose-100 text-rose-600'],
    ];
@endphp

{{-- ══════════════════════ HERO ══════════════════════ --}}
<section class="relative mb-8 overflow-hidden rounded-[28px] bg-gradient-to-br from-blue-700 via-blue-600 to-indigo-700">
    <div class="pointer-events-none absolute inset-0 text-white opacity-10">
        <x-decor.dots id="diagnostika-hero-dots" />
    </div>
    <div class="su-blob pointer-events-none absolute -left-24 -top-24 h-72 w-72 rounded-full bg-cyan-300/20 blur-3xl"></div>
    <div class="su-blob su-delay-2 pointer-events-none absolute -bottom-28 right-0 h-80 w-80 rounded-full bg-fuchsia-300/20 blur-3xl"></div>

    <div class="relative grid gap-8 px-6 py-9 sm:px-10 sm:py-11 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:py-14">
        <div class="su-reveal" data-reveal="left">
            <div class="flex flex-wrap gap-2">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/15 px-3 py-1.5 text-[11px] font-semibold uppercase tracking-wider text-blue-50 ring-1 ring-inset ring-white/25 backdrop-blur">
                    <x-icon name="target" class="h-3.5 w-3.5" stroke="2.2" /> Diagnostika
                </span>
                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/15 px-3 py-1.5 text-[11px] font-semibold uppercase tracking-wider text-blue-50 ring-1 ring-inset ring-white/25 backdrop-blur">
                    <x-icon name="chart" class="h-3.5 w-3.5" stroke="2.2" /> Baholash
                </span>
                <span class="inline-flex items-center gap-1.5 rounded-full bg-white/15 px-3 py-1.5 text-[11px] font-semibold uppercase tracking-wider text-blue-50 ring-1 ring-inset ring-white/25 backdrop-blur">
                    <x-icon name="star" class="h-3.5 w-3.5" stroke="2.2" /> PIRLS standartlari
                </span>
            </div>

            <h1 class="mt-4 text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl">
                Diagnostika va <span class="text-cyan-200">baholash</span>
            </h1>

            <p class="mt-3 max-w-xl text-sm leading-relaxed text-blue-100 sm:text-[15px]">
                Bu bo'limda boshlang'ich sinf o'quvchilarining o'qish savodxonligini aniqlash, baholash va rivojlanishini
                kuzatish uchun zarur bo'lgan diagnostik topshiriqlar, 0–3 ballik rubrikalar, testlar banki va portfel shakllari jamlangan.
            </p>

            <div class="mt-6 grid grid-cols-2 gap-3 sm:max-w-lg">
                @foreach([
                    ["Aniq diagnostika haqiqiy natija", 'target'],
                    ["Rivojlanishni kuzatish imkoniyati", 'chart'],
                    ["O'qituvchi uchun tayyor vositalar", 'users'],
                    ['PIRLSga mos yondashuv', 'star'],
                ] as [$label, $icon])
                    <div class="flex items-center gap-2 rounded-xl bg-white/10 px-3 py-2 ring-1 ring-inset ring-white/10 backdrop-blur">
                        <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-white/15">
                            <x-icon :name="$icon" class="h-3.5 w-3.5 text-white" stroke="2.2" />
                        </span>
                        <span class="text-[11px] font-medium leading-tight text-blue-50">{{ $label }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="su-reveal relative hidden lg:block" data-reveal="right">
            <div class="su-blob absolute inset-6 rounded-[2rem] bg-white/10 blur-2xl"></div>
            <img src="{{ asset('images/sections/diagnostika/01_teacher_woman_idea.png') }}" alt="O'qituvchi"
                 class="su-float-slow relative mx-auto h-64 w-auto drop-shadow-2xl">

            <div class="rounded-2xl rounded-bl-sm bg-white px-3.5 py-3 shadow-lg absolute left-0 top-2 -rotate-2">
                <p class="mb-1.5 text-[11px] font-bold text-blue-900">O'qish savodxonligi</p>
                @foreach(['Diagnostika', 'Rivojlanish', 'Muvaffaqiyat'] as $chip)
                    <p class="flex items-center gap-1.5 text-[10.5px] text-slate-500">
                        <x-icon name="check" class="h-3 w-3 shrink-0 text-emerald-500" stroke="3" /> {{ $chip }}
                    </p>
                @endforeach
            </div>

            <div class="su-float rounded-2xl rounded-br-sm bg-white px-3.5 py-2.5 shadow-lg absolute right-0 bottom-4 rotate-2">
                <p class="flex items-center gap-1.5 text-[11px] font-bold text-blue-900">
                    <x-icon name="heart" class="h-3.5 w-3.5 text-rose-500" stroke="2.2" />
                    Har bir bola imkoniyatga loyiq!
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════ RESOURCE CARDS + QUOTE ══════════════════════ --}}
<div class="su-stagger grid grid-cols-1 items-stretch gap-6 sm:grid-cols-2 lg:grid-cols-3 mb-8">
    @foreach ($sections as $s)
        <x-section.resource-card
            :num="$s['num']"
            :title="$s['title']"
            :desc="$s['desc']"
            :points="$s['points']"
            :image="$s['image']"
            :color="$s['color']"
            folder="sections/diagnostika"
            :badge="$s['num'].'-bo\'lim'"
            :href="route('diagnostika.show', $s['slug'])" />
    @endforeach

    {{-- Motivation / quote block --}}
    <div class="group relative flex flex-col justify-between overflow-hidden rounded-[22px] border border-blue-200 bg-gradient-to-br from-blue-600 via-blue-600 to-indigo-700 p-6 text-white shadow-sm">
        <div class="pointer-events-none absolute inset-0 opacity-10">
            <x-decor.dots id="diagnostika-quote-dots" />
        </div>
        <div class="su-blob pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-cyan-300/20 blur-2xl"></div>

        <div class="relative">
            <x-icon name="sparkle" class="h-6 w-6 text-cyan-200" stroke="1.5" />
            <p class="mt-3 text-xl font-extrabold leading-snug">
                To'g'ri baholash — bola imkoniyatini ochadigan kalitdir.
            </p>
            <p class="mt-3 text-sm italic leading-relaxed text-blue-100">
                Har bir natija katta yutuqlarga boshlaydi!
            </p>
        </div>

        <div class="relative mt-6 flex items-end justify-between">
            <img src="{{ asset('images/sections/diagnostika/20_graduation_books.png') }}" alt=""
                 class="su-float-slow h-16 w-auto drop-shadow-lg">
            <img src="{{ asset('images/sections/diagnostika/19_education_plant.png') }}" alt=""
                 class="su-float h-14 w-auto drop-shadow-lg">
        </div>
    </div>
</div>

{{-- ══════════════════════ STATISTICS ══════════════════════ --}}
<div class="su-stagger grid grid-cols-2 gap-4 lg:grid-cols-4">
    @foreach ($stats as $stat)
        <div class="group rounded-2xl border border-slate-200 bg-white px-5 py-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
            <div class="mx-auto mb-3 grid h-11 w-11 place-items-center rounded-full {{ $stat['tone'] }}">
                <x-icon :name="$stat['icon']" class="h-5 w-5" stroke="2" />
            </div>
            <div class="text-3xl font-extrabold text-slate-800">{{ $stat['num'] }}</div>
            <div class="mt-0.5 text-sm font-semibold text-slate-700">{{ $stat['label'] }}</div>
            <div class="mt-0.5 text-xs text-slate-400">{{ $stat['sub'] }}</div>
        </div>
    @endforeach
</div>

@endsection
