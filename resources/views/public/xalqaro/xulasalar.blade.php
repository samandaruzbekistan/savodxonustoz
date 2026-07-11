@extends('layouts.app')
@section('title', "Xalqaro tajribadan O'zbekiston uchun xulasalar")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.xalqaro._sidebar', ['activeSlug' => 'xulasalar'])

    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 p-6 text-white">
            <div class="flex items-start gap-4">
                <span class="text-5xl leading-none">🇺🇿</span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-semibold">Yakuniy bo'lim</span>
                        <span class="text-xs text-white/80">Xalqaro tajriba</span>
                    </div>
                    <h1 class="text-2xl font-extrabold tracking-tight">Xalqaro tajribadan O'zbekiston uchun xulasalar</h1>
                    <p class="mt-2 text-sm text-white/90">7 davlat tajribasini O'zbekiston boshlang'ich ta'limiga moslashtirish imkoniyatlari</p>
                </div>
            </div>
        </div>

        {{-- Country summaries --}}
        @php
            $summaries = [
                [
                    'slug'  => 'finlandiya',
                    'flag'  => '🇫🇮',
                    'name'  => 'Finlandiya',
                    'color' => 'teal',
                    'key'   => 'Tenglik, kutubxona, mustaqil o\'qish',
                    'items' => [
                        'Har bir sinfda kichik sinf kutubxonasi yaratish',
                        '"Haftaning kitobi" loyihasini yo\'lga qo\'yish',
                        'O\'qish darslarini tabiat va texnologiya fanlari bilan bog\'lash',
                        'O\'qishni tezlik bilan emas, tushunish va dalil bilan baholash',
                    ],
                ],
                [
                    'slug'  => 'singapur',
                    'flag'  => '🇸🇬',
                    'name'  => 'Singapur',
                    'color' => 'red',
                    'key'   => 'Integrativ savodxonlik, think-aloud',
                    'items' => [
                        'O\'qish darsida tinglash, gapirish, o\'qish va yozishni birgalikda tashkil etish',
                        '"O\'qi — o\'yla — javob ber — asosla" algoritmini qo\'llash',
                        'Bo\'lajak o\'qituvchilarni think-aloud metodiga o\'rgatish',
                    ],
                ],
                [
                    'slug'  => 'buyuk-britaniya',
                    'flag'  => '🇬🇧',
                    'name'  => 'Buyuk Britaniya',
                    'color' => 'indigo',
                    'key'   => 'Phonics, reading for pleasure',
                    'items' => [
                        '1-sinfda tovush-harf asosidagi tizimli o\'qish mashqlarini kuchaytirish',
                        'Decodable matnlar va qisqa kitobchalar yaratish',
                        '"Haftalik mustaqil o\'qish" tizimini joriy qilish',
                    ],
                ],
                [
                    'slug'  => 'aqsh',
                    'flag'  => '🇺🇸',
                    'name'  => 'AQSH',
                    'color' => 'blue',
                    'key'   => 'Science of Reading, 5 komponent',
                    'items' => [
                        'O\'qituvchilarga o\'qishning ilmiy asoslari bo\'yicha modul kiritish',
                        '1–2-sinflarda tovush-harf, bo\'g\'in va ravon o\'qish mashqlarini tizimlashtirish',
                        'O\'qishda qiynalayotgan o\'quvchilarni erta aniqlash',
                    ],
                ],
                [
                    'slug'  => 'avstraliya',
                    'flag'  => '🇦🇺',
                    'name'  => 'Avstraliya',
                    'color' => 'orange',
                    'key'   => 'I do — We do — You do, formative assessment',
                    'items' => [
                        '"Namuna — birgalikda bajarish — mustaqil bajarish" modelini joriy qilish',
                        'Har bir matn uchun uch darajali topshiriq ishlab chiqish',
                        'Bo\'lajak o\'qituvchilarni formative assessmentga o\'rgatish',
                    ],
                ],
                [
                    'slug'  => 'janubiy-koreya',
                    'flag'  => '🇰🇷',
                    'name'  => 'Janubiy Koreya',
                    'color' => 'rose',
                    'key'   => 'Texnologiya + o\'qituvchi nazorati',
                    'items' => [
                        'AI vositalarini o\'qituvchiga yordamchi sifatida ishlatish',
                        'O\'quvchi natijasini elektron portfelda yuritish',
                        'Raqamli resurslarni bosma kitob va og\'zaki muhokama bilan birlashtirish',
                    ],
                ],
                [
                    'slug'  => 'yaponiya',
                    'flag'  => '🇯🇵',
                    'name'  => 'Yaponiya',
                    'color' => 'pink',
                    'key'   => 'Chuqur o\'qish, guruhli muhokama, refleksiya',
                    'items' => [
                        'Matnni qismlarga bo\'lib tahlil qilish',
                        'Darsda juftlik va kichik guruh muhokamasini kuchaytirish',
                        'Dars oxirida qisqa yozma refleksiya o\'tkazish',
                    ],
                ],
            ];

            $colorMap = [
                'teal'   => ['border' => 'border-teal-200',   'bg' => 'bg-teal-50',   'badge' => 'bg-teal-100 text-teal-700',   'dot' => 'bg-teal-500',  'hdr' => 'bg-teal-600'],
                'red'    => ['border' => 'border-red-200',    'bg' => 'bg-red-50',    'badge' => 'bg-red-100 text-red-700',    'dot' => 'bg-red-500',   'hdr' => 'bg-red-600'],
                'indigo' => ['border' => 'border-indigo-200', 'bg' => 'bg-indigo-50', 'badge' => 'bg-indigo-100 text-indigo-700','dot' => 'bg-indigo-500','hdr' => 'bg-indigo-700'],
                'blue'   => ['border' => 'border-blue-200',   'bg' => 'bg-blue-50',   'badge' => 'bg-blue-100 text-blue-700',   'dot' => 'bg-blue-600',  'hdr' => 'bg-blue-700'],
                'orange' => ['border' => 'border-orange-200', 'bg' => 'bg-orange-50', 'badge' => 'bg-orange-100 text-orange-700','dot' => 'bg-orange-500','hdr' => 'bg-orange-500'],
                'rose'   => ['border' => 'border-rose-200',   'bg' => 'bg-rose-50',   'badge' => 'bg-rose-100 text-rose-700',   'dot' => 'bg-rose-500',  'hdr' => 'bg-rose-600'],
                'pink'   => ['border' => 'border-pink-200',   'bg' => 'bg-pink-50',   'badge' => 'bg-pink-100 text-pink-700',   'dot' => 'bg-pink-500',  'hdr' => 'bg-pink-500'],
            ];
        @endphp

        <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">
            7 davlat — O'zbekiston uchun asosiy tavsiyalar
        </div>

        <div class="grid grid-cols-1 gap-4 mb-6 sm:grid-cols-2">
            @foreach ($summaries as $s)
                @php $c = $colorMap[$s['color']]; @endphp
                <div class="rounded-2xl border {{ $c['border'] }} {{ $c['bg'] }} overflow-hidden">
                    <div class="flex items-center gap-3 px-4 py-3 {{ $c['hdr'] }}">
                        <span class="text-2xl leading-none">{{ $s['flag'] }}</span>
                        <div>
                            <p class="text-sm font-bold text-white">{{ $s['name'] }}</p>
                            <p class="text-xs text-white/80">{{ $s['key'] }}</p>
                        </div>
                        <a href="{{ route('xalqaro.show', $s['slug']) }}" class="ml-auto text-white/70 hover:text-white transition-colors">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                    <ul class="px-4 py-3 space-y-2">
                        @foreach ($s['items'] as $item)
                            <li class="flex items-start gap-2 text-xs text-slate-700">
                                <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full {{ $c['dot'] }}"></span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        {{-- Umumiy tavsiyalar --}}
        <div class="mb-6 rounded-2xl border border-amber-200 bg-amber-50 p-5">
            <h2 class="text-sm font-bold text-amber-900 mb-4 flex items-center gap-2">
                <svg class="h-5 w-5 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                O'zbekiston uchun umumiy strategik tavsiyalar
            </h2>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                @foreach ([
                    ['num'=>'01','title'=>'Savodxonlikni fan sifatida belgilash','desc'=>'O\'qish savodxonligini faqat ona tili emas, barcha fanlarning asosiy kompetensiyasi sifatida ko\'rish.'],
                    ['num'=>'02','title'=>'O\'qituvchi tayyorgarligini kuchaytirish','desc'=>'Bo\'lajak o\'qituvchilarni matn bilan ishlash metodikasiga, savollar tuzishga va baholashga o\'rgatish.'],
                    ['num'=>'03','title'=>'Kutubxona va o\'qish muhitini yaratish','desc'=>'Har bir sinfda va maktabda qulay o\'qish muhiti, kitoblar va audio matnlar bo\'lishi.'],
                    ['num'=>'04','title'=>'Dalillarga asoslangan metodlar','desc'=>'Xalqaro tadqiqotlar (PIRLS, PISA, Science of Reading) asosida isbotlangan metodlardan foydalanish.'],
                    ['num'=>'05','title'=>'Raqamli vositalar + o\'qituvchi nazorati','desc'=>'Texnologiyani o\'qituvchiga yordamchi sifatida, lekin metodikani almashtirmaydigan tarzda ishlatish.'],
                    ['num'=>'06','title'=>'Individual qo\'llab-quvvatlash','desc'=>'O\'qishda qiynalayotgan o\'quvchilarni erta aniqlash va ularga individual yordam berish tizimini joriy qilish.'],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-amber-200 bg-white p-3.5">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-amber-100 text-xs font-bold text-amber-700">{{ $t['num'] }}</span>
                        <div>
                            <p class="text-xs font-bold text-slate-800 mb-0.5">{{ $t['title'] }}</p>
                            <p class="text-xs text-slate-600 leading-relaxed">{{ $t['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Back button --}}
        <div class="flex justify-start">
            <a href="{{ route('xalqaro.index') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Xalqaro tajriba asosiy sahifasi
            </a>
        </div>

    </div>
</div>
@endsection
