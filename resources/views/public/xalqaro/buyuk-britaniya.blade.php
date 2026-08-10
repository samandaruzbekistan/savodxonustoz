@extends('layouts.app')
@section('title', 'Buyuk Britaniya tajribasi — Xalqaro tajriba')
@section('content')
@php
    $prevSlug = 'singapur'; $prevName = 'Singapur';
    $nextSlug = 'aqsh';     $nextName = 'AQSH';
    $focuses  = ['Phonics', 'Reading for pleasure', 'Reading Framework', 'Maktab kutubxonasi', 'Dalillarga asoslangan o\'qitish'];
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.xalqaro._sidebar', ['activeSlug' => 'buyuk-britaniya'])

    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="relative mb-6 overflow-hidden rounded-2xl p-6 text-white">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/buyukbritaniya.jpg') }}')"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-700/85 to-blue-700/80"></div>
            <div class="relative flex items-start gap-4">
                <span class="text-5xl leading-none">🇬🇧</span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-semibold">3-davlat</span>
                        <span class="text-xs text-white/80">Xalqaro tajriba</span>
                    </div>
                    <h1 class="text-2xl font-extrabold tracking-tight">Buyuk Britaniya tajribasi</h1>
                    <div class="mt-2 flex flex-wrap gap-1.5">
                        @foreach ($focuses as $f)
                            <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-medium">{{ $f }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <x-xalqaro.gallery-strip :images="['buyukbritaniya.jpg', 'xalqaro/buyuk-britaniya-2.jpg', 'xalqaro/buyuk-britaniya-3.jpg']" name="Buyuk Britaniya" />

        {{-- 3 intro boxes --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
            <div class="rounded-xl border border-indigo-300 bg-indigo-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-indigo-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-indigo-900">Phonics yondashuvi</h3>
                </div>
                <p class="text-xs text-indigo-800 leading-relaxed">Boshlang'ich sinfda fonik bilimlar orqali so'zlarni o'qishga o'rganiladi, keyin ravon o'qish va tushunish ko'nikmalari rivojlantiriladi.</p>
            </div>
            <div class="rounded-xl border border-blue-300 bg-blue-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-blue-900">Reading Framework</h3>
                </div>
                <p class="text-xs text-blue-800 leading-relaxed">Angliya Ta'lim departamentining "The Reading Framework" hujjati maktablarda o'qish asoslarini o'rgatish bo'yicha amaliy yo'riqnoma sifatida qo'llanadi (2023 yangilangan).</p>
            </div>
            <div class="rounded-xl border border-violet-300 bg-violet-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">Reading for pleasure</h3>
                </div>
                <p class="text-xs text-violet-800 leading-relaxed">O'quvchining kitobdan zavq olishi va mustaqil o'qish odatini shakllantirish o'qish siyosatining markazida turadi.</p>
            </div>
        </div>

        {{-- Asosiy yondashuv --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">Asosiy yondashuv</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-3">
                    Buyuk Britaniya, ayniqsa Angliya tajribasida boshlang'ich sinfda o'qish savodxonligini
                    shakllantirishda fonika, ravon o'qish, lug'at boyligi, matnni tushunish va o'qishdan
                    zavqlanish muhim o'rin egallaydi.
                </p>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Angliya o'qish siyosatida bolalar boshlang'ich bosqichda fonik bilimlar orqali so'zlarni
                    o'qishga o'rganadi, keyin ravon o'qish va tushunish ko'nikmalari rivojlantiriladi.
                    "The Reading Framework"da o'qish, yozish va og'zaki nutq o'quvchilarning ta'limdagi
                    muvaffaqiyati uchun asosiy omil ekanligi ta'kidlanadi.
                </p>
            </div>
        </div>

        {{-- O'qituvchi tayyorgarligi --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">O'qituvchi tayyorgarligi</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">Buyuk Britaniya tajribasida o'qituvchi quyidagi ko'nikmalarga ega bo'lishi zarur:</p>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach ([
                        "Erta o'qishni o'rgatish",
                        "Fonika va dekodlashni tashkil etish",
                        "O'quvchilarda ravon o'qishni rivojlantirish",
                        "Lug'atni matn orqali o'rgatish",
                        "Reading for pleasure muhitini yaratish",
                        "O'quvchi javobini dalil asosida baholash",
                    ] as $item)
                        <div class="flex items-start gap-2 rounded-lg bg-indigo-50 border border-indigo-100 px-3 py-2.5">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-xs text-indigo-800 leading-relaxed">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Metodik strategiyalar --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">Metodik strategiyalar</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>'Systematic synthetic phonics','desc'=>'Harf-tovush mosligini tizimli o\'rgatish.'],
                    ['n'=>2,'title'=>'Shared reading','desc'=>'O\'qituvchi va o\'quvchilar birgalikda matnni o\'qiydi va muhokama qiladi.'],
                    ['n'=>3,'title'=>'Guided reading','desc'=>'Kichik guruhlar bilan matn darajasiga mos o\'qish mashg\'uloti tashkil etiladi.'],
                    ['n'=>4,'title'=>'Reading for pleasure','desc'=>'O\'quvchining kitobdan zavq olishi va mustaqil o\'qish odatini shakllantirish.'],
                    ['n'=>5,'title'=>'Vocabulary in context','desc'=>'Yangi so\'zlarni alohida yodlatish emas, matn ichida tushuntirish.'],
                ] as $s)
                    <div class="flex gap-3 rounded-xl border border-indigo-200 bg-white p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-indigo-700 text-sm font-bold text-white">{{ $s['n'] }}</span>
                        <div>
                            <p class="text-sm font-bold text-slate-800 mb-1">{{ $s['title'] }}</p>
                            <p class="text-xs text-slate-600 leading-relaxed">{{ $s['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Raqamli + O'zbekiston --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-6">
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <h3 class="text-sm font-bold text-slate-800 mb-3 flex items-center gap-2">
                    <span class="grid h-6 w-6 place-items-center rounded-lg bg-indigo-100 text-indigo-600">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0H3"/></svg>
                    </span>
                    Raqamli resurslar
                </h3>
                <ul class="space-y-2">
                    @foreach (['Phonics mashqlari','Decodable books ro\'yxati',"O'qish kundaligi",'Kitob tavsiya moduli','Audio o\'qish',"O'quvchi javobini rubrika asosida baholash"] as $r)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-indigo-500"></span>{{ $r }}
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
                        "1-sinfda tovush-harf asosidagi tizimli o'qish mashqlarini kuchaytirish",
                        "Decodable matnlar va qisqa kitobchalar yaratish",
                        "Sinf kutubxonalarini rivojlantirish",
                        '"Haftalik mustaqil o\'qish" tizimini joriy qilish',
                        "O'qish darsida og'zaki nutq, lug'at va matnni tushunishni birgalikda olib borish",
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
                <span class="text-sm font-bold text-white">Buyuk Britaniya ta'lim tizimi — video</span>
            </div>
            <div class="p-5">
                <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/CU2b0wMnD0Y"
                        title="Buyuk Britaniya ta'lim tizimi" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        {{-- Nav --}}
        <div class="flex items-center justify-between">
            <a href="{{ route('xalqaro.show', $prevSlug) }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                {{ $prevName }}
            </a>
            <a href="{{ route('xalqaro.show', $nextSlug) }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-700 px-5 py-2.5 text-sm font-semibold text-white hover:bg-indigo-800 transition-colors">
                {{ $nextName }}
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
