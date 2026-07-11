@extends('layouts.app')
@section('title', 'Finlandiya tajribasi — Xalqaro tajriba')
@section('content')
@php
    $color   = 'teal';
    $flag    = '🇫🇮';
    $country = 'Finlandiya';
    $num     = 1;
    $prevSlug = null;
    $nextSlug = 'singapur';
    $nextName = 'Singapur';
    $focuses  = ['Tenglik', 'Kitobxonlik madaniyati', 'Maktab-kutubxona hamkorligi', 'Mustaqil o\'qish', 'Media savodxonlik'];
    $colors = [
        'badge' => 'bg-teal-100 text-teal-700', 'ring' => 'ring-teal-300',
        'head'  => 'from-teal-600 to-cyan-600',  'light' => 'bg-teal-50',
        'border'=> 'border-teal-200',             'text'  => 'text-teal-700',
        'btn'   => 'bg-teal-600 hover:bg-teal-700',
        'dot'   => 'bg-teal-500',
    ];
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.xalqaro._sidebar', ['activeSlug' => 'finlandiya'])

    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 rounded-2xl bg-gradient-to-br {{ $colors['head'] }} p-6 text-white">
            <div class="flex items-start gap-4">
                <span class="text-5xl leading-none">{{ $flag }}</span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-semibold">{{ $num }}-davlat</span>
                        <span class="text-xs text-white/80">Xalqaro tajriba</span>
                    </div>
                    <h1 class="text-2xl font-extrabold tracking-tight">{{ $country }} tajribasi</h1>
                    <div class="mt-2 flex flex-wrap gap-1.5">
                        @foreach ($focuses as $f)
                            <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-medium">{{ $f }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- 3 intro boxes --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
            <div class="rounded-xl border border-teal-300 bg-teal-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-teal-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-teal-900">Asosiy yo'nalish</h3>
                </div>
                <p class="text-xs text-teal-800 leading-relaxed">O'qish savodxonligi butun ta'lim jarayonining asosiy kompetensiyasi. O'quvchining mustaqil o'qish qiziqishi, kutubxona bilan ishlashi va media axborotga ongli munosabati muhim.</p>
            </div>
            <div class="rounded-xl border border-emerald-300 bg-emerald-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-emerald-900">Strategiya</h3>
                </div>
                <p class="text-xs text-emerald-800 leading-relaxed">Milliy savodxonlik strategiyasida savodxonlik ishlarini tizimli tashkil etish, o'qituvchilarni qo'llab-quvvatlash va barcha yosh guruhlarida savodxonlikni rivojlantirish ko'rsatilgan.</p>
            </div>
            <div class="rounded-xl border border-cyan-300 bg-cyan-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-cyan-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-cyan-900">Islohotlar</h3>
                </div>
                <p class="text-xs text-cyan-800 leading-relaxed">2025-yildan maktabgacha ta'limdan quyi o'rta ta'limgacha bo'lgan bosqichlarda differensial ta'lim, hamkorlikda o'qitish va inklyuzivlikka e'tibor kuchaytirilyapti.</p>
            </div>
        </div>

        {{-- Asosiy yondashuv --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">
                Asosiy yondashuv
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-3">
                    Finlandiya tajribasida o'qish savodxonligi faqat ona tili darsining vazifasi sifatida qaralmaydi.
                    U butun ta'lim jarayonining asosiy kompetensiyalaridan biri sifatida ko'riladi. Finlandiyada
                    o'quvchining mustaqil o'qishga qiziqishi, kutubxona bilan ishlashi, turli matnlarni tushunishi
                    va media axborotga ongli munosabatda bo'lishi muhim o'rin egallaydi.
                </p>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Finlandiya milliy savodxonlik strategiyasida savodxonlik ishlarini tizimli tashkil etish,
                    o'qituvchilarni qo'llab-quvvatlash va barcha yosh guruhlarida savodxonlikni rivojlantirish
                    vazifalari ko'rsatilgan. Strategiyada o'qituvchilar tayyorlash va malaka oshirish jarayonida
                    savodxonlikni qo'llab-quvvatlaydigan zamonaviy metodlarni xaritalash zarurligi ham qayd etiladi.
                </p>
            </div>
        </div>

        {{-- O'qish siyosati --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">
                Boshlang'ich ta'limdagi o'qish siyosati
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-3">
                    Finlandiyada boshlang'ich ta'limda o'quvchi shaxsiga yo'naltirilgan, teng imkoniyatli va
                    qo'llab-quvvatlovchi ta'lim muhitiga alohida e'tibor beriladi. Finlandiya milliy o'quv dasturi
                    boshlang'ich va quyi o'rta ta'lim bosqichlari uchun yagona asos sifatida ishlab chiqilgan
                    bo'lib, 1–6-sinflarda 2016-yildan joriy etilgan.
                </p>
                <p class="text-sm text-slate-700 leading-relaxed">
                    2025-yildan Finlandiyada maktabgacha ta'limdan quyi o'rta ta'limgacha bo'lgan bosqichlarda
                    o'quvchilarni qo'llab-quvvatlashni kuchaytirishga qaratilgan islohotlar amalga oshirilgani,
                    bunda differensial ta'lim, hamkorlikda o'qitish va inklyuzivlikka e'tibor berilgani qayd etiladi.
                </p>
            </div>
        </div>

        {{-- O'qituvchi tayyorgarligi --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">
                O'qituvchi tayyorgarligi
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-4">
                    Finlandiya tajrimasida o'qituvchi yuqori darajadagi kasbiy mustaqillikka ega mutaxassis
                    sifatida qaraladi. O'qituvchidan matn tanlash, o'quvchining o'qishdagi ehtiyojini aniqlash,
                    mustaqil o'qishni rag'batlantirish va individual yordam berish ko'nikmalari talab etiladi.
                </p>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">Bo'lajak boshlang'ich sinf o'qituvchilari uchun muhim jihatlar:</p>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach ([
                        "O'quvchining individual o'qish darajasini aniqlash",
                        "Darsda badiiy va axborot matnlarini uyg'un qo'llash",
                        "Sinf kutubxonasi va maktab kutubxonasidan faol foydalanish",
                        "O'qish motivatsiyasini doimiy qo'llab-quvvatlash",
                        "Media savodxonlik elementlarini o'qish darslariga kiritish",
                    ] as $item)
                        <div class="flex items-start gap-2 rounded-lg bg-teal-50 border border-teal-100 px-3 py-2.5">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-teal-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-xs text-teal-800 leading-relaxed">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Metodik strategiyalar --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">
                Metodik strategiyalar
            </div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                @foreach ([
                    ['n'=>1,'title'=>'Mustaqil o\'qish va kitob tanlash erkinligi','desc'=>'O\'quvchi yoshiga, qiziqishiga va o\'qish darajasiga mos kitob tanlaydi.'],
                    ['n'=>2,'title'=>'Maktab-kutubxona hamkorligi','desc'=>'Kutubxona darsning tashqi yordamchi joyi emas, balki o\'qish madaniyatini rivojlantiruvchi muhit sifatida ishlatiladi.'],
                    ['n'=>3,'title'=>'Fanlararo o\'qish','desc'=>'Matn bilan ishlash faqat ona tili yoki o\'qish darsida emas, tabiatshunoslik, tarix, san\'at, texnologiya darslarida ham qo\'llanadi.'],
                    ['n'=>4,'title'=>'O\'quvchini qo\'llab-quvvatlash','desc'=>'O\'qishda qiynalayotgan o\'quvchilar uchun individual topshiriqlar, kichik guruhli mashg\'ulotlar va differensial matnlar beriladi.'],
                ] as $s)
                    <div class="flex gap-3 rounded-xl border border-teal-200 bg-white p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-teal-600 text-sm font-bold text-white">{{ $s['n'] }}</span>
                        <div>
                            <p class="text-sm font-bold text-slate-800 mb-1">{{ $s['title'] }}</p>
                            <p class="text-xs text-slate-600 leading-relaxed">{{ $s['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Raqamli resurslar + O'zbekiston --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-6">
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <h3 class="text-sm font-bold text-slate-800 mb-3 flex items-center gap-2">
                    <span class="grid h-6 w-6 place-items-center rounded-lg bg-teal-100 text-teal-600">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0H3"/></svg>
                    </span>
                    Raqamli resurslar
                </h3>
                <ul class="space-y-2">
                    @foreach ([
                        '"Mening o\'qigan kitoblarim" elektron kundaligi',
                        'Sinf kutubxonasi elektron katalogi',
                        'Audio matnlar',
                        'Media matnlarni tahlil qilish topshiriqlari',
                        'O\'quvchining o\'qish xaritasi',
                    ] as $r)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-teal-500"></span>
                            {{ $r }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5">
                <h3 class="text-sm font-bold text-amber-900 mb-3 flex items-center gap-2">
                    <span class="grid h-6 w-6 place-items-center rounded-lg bg-amber-200 text-amber-700">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    O'zbekiston uchun moslashtirish
                </h3>
                <ul class="space-y-2">
                    @foreach ([
                        'Har bir sinfda kichik sinf kutubxonasi yaratish',
                        '"Haftaning kitobi" loyihasini yo\'lga qo\'yish',
                        'O\'quvchining o\'qish kundaligini yuritish',
                        'O\'qish darslarini tabiat, texnologiya, tarbiya fanlari bilan bog\'lash',
                        'O\'qish savodxonligini tezlik bilan emas, tushunish va dalil bilan baholash',
                        'O\'qishda qiynalayotgan o\'quvchilar uchun individual o\'qish yo\'nalishi tuzish',
                    ] as $r)
                        <li class="flex items-start gap-2 text-xs text-amber-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-amber-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $r }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Video --}}
        <div class="mb-6 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="bg-slate-800 px-5 py-3 flex items-center gap-2">
                <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                <span class="text-sm font-bold text-white">Finlandiya ta'lim tizimi — video</span>
            </div>
            <div class="p-5">
                <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/Phz-ejKcx74"
                        title="Finlandiya ta'lim tizimi" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        {{-- Nav buttons --}}
        <div class="flex items-center justify-between">
            <span></span>
            <a href="{{ route('xalqaro.show', $nextSlug) }}"
               class="inline-flex items-center gap-2 rounded-xl bg-teal-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-teal-700 transition-colors">
                {{ $nextName }} tajribasi
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
