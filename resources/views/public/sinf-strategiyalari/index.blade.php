@extends('layouts.app')
@section('title', "Sinf strategiyalari — O'qish savodxonligini rivojlantirish")
@section('content')

@php
    $asset = fn (string $file) => asset("images/sections/sinf-strategiyalari/{$file}");

    $cards = [
        [
            'num'   => 1,
            'slug'  => 'matn-tanlash',
            'color' => 'blue',
            'image' => $asset('books_checkmark.png'),
            'title' => "Sinfda matnlarni tanlash",
            'desc'  => "Yoshga mos, qiziqarli va didaktik jihatdan to'g'ri matn tanlash metodikasi va mezonlari.",
            'points'=> ["Sinf darajasiga moslik", "Matnni metodik tahlil", "Savol tuzish imkoniyati", "Boshlang'ich sinf namunalari"],
        ],
        [
            'num'   => 2,
            'slug'  => 'foydalanish-strategiyalari',
            'color' => 'violet',
            'image' => $asset('strategy_clipboard.png'),
            'title' => "Matnlardan foydalanish strategiyalari",
            'desc'  => "O'qishdan oldin, jarayonida va keyin matn bilan ishlashning uch bosqichli metodikasi.",
            'points'=> ["Uch bosqichli strategiya", "Amaliy faoliyatlar", "Metodlar va usullar", "Darsda qo'llash tartibi"],
        ],
        [
            'num'   => 3,
            'slug'  => 'matn-turlari',
            'color' => 'emerald',
            'image' => $asset('stacked_books.png'),
            'title' => "Matn turlari",
            'desc'  => "Badiiy, axborot, hayotiy va rasmli matn turlarini sinf darajasiga mos o'rgatish usullari.",
            'points'=> ["6 xil matn turi", "Sinf darajasiga moslik", "Darsda qo'llash namunasi", "Funksional savodxonlik"],
        ],
        [
            'num'   => 4,
            'slug'  => 'sinf-kutubxonalari',
            'color' => 'teal',
            'image' => $asset('classroom_library.png'),
            'title' => "Sinf kutubxonalari",
            'desc'  => "Sinfda o'qish muhitini yaratish, kitoblarni tashkil etish va mustaqil o'qish odatini shakllantirish.",
            'points'=> ["Kutubxona tashkil etish", "Haftaning kitobi", "Kitobxonlik kundaligi", "O'qish motivatsiyasi"],
        ],
        [
            'num'   => 5,
            'slug'  => 'matn-xususiyatlari',
            'color' => 'indigo',
            'image' => $asset('reading_analysis.png'),
            'title' => "Matn xususiyatlarini o'qitish",
            'desc'  => "Sarlavha, asosiy g'oya, kalit so'zlar, rasm va jadvallarni tizimli tushunishga o'rgatish metodikasi.",
            'points'=> ["11 ta matn xususiyati", "Ajratish va tahlil", "Jadval usuli", "Kalit so'zlar bilan ishlash"],
        ],
        [
            'num'   => 6,
            'slug'  => 'matn-turlarini-tushunish',
            'color' => 'rose',
            'image' => $asset('open_book_learning.png'),
            'title' => "Matn turlarini tushunish",
            'desc'  => "O'quvchiga har xil matn turiga mos o'qish usulini tanlash va kerakli axborotni topishni o'rgatish.",
            'points'=> ["Turli matnni farqlash", "Mos o'qish strategiyasi", "Hayotiy savodxonlik", "\"Matn turini top\" metodi"],
        ],
    ];

    $colorMap = [
        'blue'    => ['badge' => 'bg-blue-600',    'btn' => 'border-blue-200 text-blue-700 hover:bg-blue-50',       'bg' => 'from-blue-50 to-blue-100/40',       'chip' => 'bg-blue-100 text-blue-700',       'bullet' => 'bg-blue-500'],
        'violet'  => ['badge' => 'bg-violet-600',  'btn' => 'border-violet-200 text-violet-700 hover:bg-violet-50', 'bg' => 'from-violet-50 to-violet-100/40',   'chip' => 'bg-violet-100 text-violet-700',   'bullet' => 'bg-violet-500'],
        'emerald' => ['badge' => 'bg-emerald-600', 'btn' => 'border-emerald-200 text-emerald-700 hover:bg-emerald-50','bg' => 'from-emerald-50 to-emerald-100/40', 'chip' => 'bg-emerald-100 text-emerald-700', 'bullet' => 'bg-emerald-500'],
        'orange'  => ['badge' => 'bg-orange-600',  'btn' => 'border-orange-200 text-orange-700 hover:bg-orange-50', 'bg' => 'from-orange-50 to-orange-100/40',   'chip' => 'bg-orange-100 text-orange-700',   'bullet' => 'bg-orange-500'],
        'teal'    => ['badge' => 'bg-teal-600',    'btn' => 'border-teal-200 text-teal-700 hover:bg-teal-50',       'bg' => 'from-teal-50 to-teal-100/40',       'chip' => 'bg-teal-100 text-teal-700',       'bullet' => 'bg-teal-500'],
        'indigo'  => ['badge' => 'bg-indigo-600',  'btn' => 'border-indigo-200 text-indigo-700 hover:bg-indigo-50', 'bg' => 'from-indigo-50 to-indigo-100/40',   'chip' => 'bg-indigo-100 text-indigo-700',   'bullet' => 'bg-indigo-500'],
        'rose'    => ['badge' => 'bg-rose-600',    'btn' => 'border-rose-200 text-rose-700 hover:bg-rose-50',       'bg' => 'from-rose-50 to-rose-100/40',       'chip' => 'bg-rose-100 text-rose-700',       'bullet' => 'bg-rose-500'],
    ];

    $features = [
        ['title' => "Amaliy va ishonchli",        'desc' => "Har bir bo'lim amaliy tavsiyalar va darsda sinovdan o'tgan metodlarga asoslangan.", 'color' => 'indigo', 'icon' => 'shield'],
        ['title' => "Boshlang'ich sinfga mos",    'desc' => "1–4 sinf o'quvchilari uchun bosqichma-bosqich yondashuv.",                           'color' => 'violet', 'icon' => 'cap'],
        ['title' => "Natijaga yo'naltirilgan",    'desc' => "O'quvchilarda o'qish savodxonligini rivojlantirishga qaratilgan.",                    'color' => 'emerald','icon' => 'target'],
        ['title' => "Namunalar va materiallar",   'desc' => "Dars ishlanmalari, namuna matnlar va yuklab olish imkoniyati.",                       'color' => 'orange', 'icon' => 'folder'],
    ];
@endphp

<div class="flex gap-6 -mt-2">

    @include('public.sinf-strategiyalari._sidebar')

    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 via-white to-violet-50">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-indigo-100/60 blur-2xl"></div>
            <div class="pointer-events-none absolute -bottom-10 left-1/3 h-40 w-40 rounded-full bg-violet-100/60 blur-2xl"></div>

            <div class="relative grid grid-cols-1 items-center gap-6 px-6 py-8 sm:grid-cols-[1.2fr_0.8fr] sm:px-8 sm:py-10">
                <div>
                    <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/80 px-3 py-1 text-[11px] font-bold uppercase tracking-wide text-indigo-700 shadow-sm ring-1 ring-indigo-100">
                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.958a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.363 1.118l1.287 3.957c.3.922-.755 1.688-1.538 1.118l-3.367-2.445a1 1 0 00-1.176 0l-3.367 2.445c-.783.57-1.838-.196-1.538-1.118l1.287-3.957a1 1 0 00-.363-1.118L2.063 9.385c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.285-3.958z"/></svg>
                        Metodik bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Sinf strategiyalari</h1>
                    <p class="mt-3 max-w-xl leading-relaxed text-slate-600">
                        Bu bo'lim boshlang'ich sinf o'qituvchilari va bo'lajak o'qituvchilar uchun matn bilan ishlashni dars jarayonida to'g'ri tashkil etishga qaratilgan amaliy-metodik bo'limdir. Matn tanlash, foydalanish, turlarini farqlash, sinf kutubxonasi va matn xususiyatlarini o'rgatish bo'yicha aniq ko'rsatmalar beriladi.
                    </p>
                    <div class="mt-5 flex flex-wrap items-center gap-2">
                        <a href="{{ route('sinf-strategiyalari.show', 'matn-tanlash') }}"
                           class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700">
                            O'rganishni boshlash
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-slate-200 bg-white px-3.5 py-2.5 text-xs font-semibold text-slate-500">
                            6 ta amaliy bo'lim
                        </span>
                    </div>
                </div>

                <div class="relative mx-auto hidden w-full max-w-xs sm:block sm:justify-self-end">
                    <div class="pointer-events-none absolute -right-2 top-2 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('target_goal.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <div class="pointer-events-none absolute -left-3 bottom-8 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('graduation_books.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <img src="{{ $asset('teacher_woman.png') }}" alt="Sinf strategiyalari" class="mx-auto w-full max-w-[260px] object-contain drop-shadow-sm">
                </div>
            </div>
        </div>

        {{-- Cards grid --}}
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-8">
            @foreach ($cards as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="group flex flex-col overflow-hidden rounded-[20px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-slate-300">

                    <div class="relative h-40 overflow-hidden bg-gradient-to-br {{ $c['bg'] }}">
                        <span class="absolute left-3 top-3 z-10 grid h-8 w-8 place-items-center rounded-full {{ $c['badge'] }} text-xs font-bold text-white shadow">
                            {{ $card['num'] }}
                        </span>
                        <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}"
                             class="absolute inset-0 mx-auto my-auto h-full max-h-[9.5rem] w-auto object-contain p-3 transition-transform duration-300 group-hover:scale-105">
                    </div>

                    <div class="flex flex-1 flex-col p-5">
                        <h3 class="mb-1.5 text-base font-bold leading-snug text-slate-800">{{ $card['title'] }}</h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-500">{{ $card['desc'] }}</p>
                        <ul class="mb-4 flex-1 space-y-1.5">
                            @foreach ($card['points'] as $point)
                                <li class="flex items-start gap-2 text-xs text-slate-600">
                                    <span class="mt-1 h-1.5 w-1.5 shrink-0 rounded-full {{ $c['bullet'] }}"></span>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('sinf-strategiyalari.show', $card['slug']) }}"
                           class="inline-flex w-fit items-center gap-1.5 rounded-lg border px-3.5 py-2 text-xs font-semibold transition {{ $c['btn'] }}">
                            Batafsil
                            <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="relative mb-10 overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-600 via-indigo-600 to-violet-700 px-6 py-8 sm:px-10 sm:py-10">
            <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full bg-white/10"></div>
            <div class="pointer-events-none absolute -bottom-16 left-10 h-40 w-40 rounded-full bg-white/10"></div>

            <div class="relative flex flex-col items-center gap-6 sm:flex-row sm:justify-between">
                <div class="max-w-lg text-center sm:text-left">
                    <p class="text-lg font-bold leading-snug text-white sm:text-xl">
                        O'quvchilarda o'qish savodxonligini rivojlantirish uchun sinfda boy, ongli va tizimli o'qish muhitini yarating.
                    </p>
                    <p class="mt-2 text-sm leading-relaxed text-indigo-100">
                        Har bir bo'limda nazariy izoh, amaliy tavsiya, darsda qo'llash usuli, boshlang'ich sinf namunalari va kutiladigan natijalar berilgan.
                    </p>
                    <a href="{{ route('sinf-strategiyalari.show', 'matn-tanlash') }}"
                       class="mt-5 inline-flex items-center gap-2 rounded-xl bg-white px-5 py-2.5 text-sm font-bold text-indigo-700 shadow-sm transition hover:bg-indigo-50">
                        Boshlash
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
                <img src="{{ $asset('male_teacher_lightbulb.png') }}" alt="" class="h-36 w-36 shrink-0 object-contain sm:h-40 sm:w-40">
            </div>
        </div>

        {{-- Feature strip --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($features as $f)
                @php $fc = $colorMap[$f['color']]; @endphp
                <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl {{ $fc['chip'] }}">
                        @switch($f['icon'])
                            @case('shield')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.75h-.152c-3.196 0-6.1-1.248-8.25-3.286z"/></svg>
                                @break
                            @case('cap')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.44 60.44 0 00-.491 6.347A48.62 48.62 0 0112 20.904a48.62 48.62 0 018.232-4.41 60.46 60.46 0 00-.491-6.347M4.26 10.147a50.02 50.02 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.841c-.896.248-1.783.52-2.658.814M4.26 10.147a50.02 50.02 0 01-2.658-.814 59.905 59.905 0 000 0M12 12.75a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"/></svg>
                                @break
                            @case('target')
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0-4a5 5 0 100-10 5 5 0 000 10zm0-3a2 2 0 100-4 2 2 0 000 4z"/></svg>
                                @break
                            @default
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5A1.5 1.5 0 014.5 6h4.379a1.5 1.5 0 011.06.44l1.122 1.12a1.5 1.5 0 001.06.44H19.5A1.5 1.5 0 0121 9.5v7A1.5 1.5 0 0119.5 18h-15A1.5 1.5 0 013 16.5v-9z"/></svg>
                        @endswitch
                    </span>
                    <div>
                        <p class="text-sm font-bold text-slate-800">{{ $f['title'] }}</p>
                        <p class="mt-0.5 text-xs leading-relaxed text-slate-500">{{ $f['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
