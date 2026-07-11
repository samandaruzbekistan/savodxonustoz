@extends('layouts.app')
@section('title', 'AQSH tajribasi — Xalqaro tajriba')
@section('content')
@php
    $prevSlug = 'buyuk-britaniya'; $prevName = 'Buyuk Britaniya';
    $nextSlug = 'avstraliya';       $nextName = 'Avstraliya';
    $focuses  = ['Science of Reading', 'Evidence-based instruction', 'Phonemic awareness', 'Phonics', 'Fluency', 'Vocabulary', 'Comprehension'];
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.xalqaro._sidebar', ['activeSlug' => 'aqsh'])

    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 rounded-2xl bg-gradient-to-br from-blue-700 to-blue-900 p-6 text-white">
            <div class="flex items-start gap-4">
                <span class="text-5xl leading-none">🇺🇸</span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-semibold">4-davlat</span>
                        <span class="text-xs text-white/80">Xalqaro tajriba</span>
                    </div>
                    <h1 class="text-2xl font-extrabold tracking-tight">AQSH tajribasi</h1>
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
            <div class="rounded-xl border border-blue-300 bg-blue-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-700">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-blue-900">Science of Reading</h3>
                </div>
                <p class="text-xs text-blue-800 leading-relaxed">O'qishni o'rgatishda ilmiy dalillarga asoslangan metodlarni qo'llash. AQSHda so'nggi yillarda keng muhokama qilinmoqda.</p>
            </div>
            <div class="rounded-xl border border-sky-300 bg-sky-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-sky-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-sky-900">What Works Clearinghouse</h3>
                </div>
                <p class="text-xs text-sky-800 leading-relaxed">AQSH Ta'lim departamenti huzuridagi IES tomonidan yurtiladigan resurs. O'qituvchilar uchun dalillarga asoslangan amaliy qarorlar.</p>
            </div>
            <div class="rounded-xl border border-indigo-300 bg-indigo-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-indigo-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-indigo-900">5 asosiy komponent</h3>
                </div>
                <p class="text-xs text-indigo-800 leading-relaxed">Fonemik anglash, phonics, ravon o'qish, lug'at boyligi va matnni tushunish — AQSHda o'qish savodxonligining asosi.</p>
            </div>
        </div>

        {{-- Asosiy yondashuv + siyosat --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">Asosiy yondashuv</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-4">
                    AQSH tajribasida so'nggi yillarda "Science of Reading" yondashuvi keng muhokama qilinmoqda.
                    Bu yondashuv o'qishni o'rgatishda ilmiy dalillarga asoslangan metodlarni qo'llashni nazarda
                    tutadi. What Works Clearinghouse o'qituvchilar va maktablar uchun dalillarga asoslangan
                    amaliy qarorlar qabul qilishga yordam beruvchi resurs sifatida ishlaydi.
                </p>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">O'qish savodxonligining 5 asosiy komponenti:</p>
                <div class="grid grid-cols-2 gap-2 sm:grid-cols-5">
                    @foreach ([
                        ['label'=>'Phonemic awareness','uz'=>'Fonemik anglash','color'=>'bg-blue-100 text-blue-800 border-blue-200'],
                        ['label'=>'Phonics','uz'=>'Harf-tovush mosligi','color'=>'bg-sky-100 text-sky-800 border-sky-200'],
                        ['label'=>'Fluency','uz'=>'Ravon o\'qish','color'=>'bg-indigo-100 text-indigo-800 border-indigo-200'],
                        ['label'=>'Vocabulary','uz'=>'Lug\'at boyligi','color'=>'bg-violet-100 text-violet-800 border-violet-200'],
                        ['label'=>'Comprehension','uz'=>'Matnni tushunish','color'=>'bg-purple-100 text-purple-800 border-purple-200'],
                    ] as $comp)
                        <div class="rounded-lg border {{ $comp['color'] }} p-2.5 text-center">
                            <p class="text-xs font-bold">{{ $comp['label'] }}</p>
                            <p class="text-xs opacity-75 mt-0.5">{{ $comp['uz'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- O'qituvchi tayyorgarligi --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">O'qituvchi tayyorgarligi</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-4">
                    AQSH tajribasida bo'lajak o'qituvchilarni o'qish metodikasiga tayyorlashda ilmiy asoslar
                    muhim. 2026-yil Stanford ma'lumotida ayrim shtatlarda o'qituvchi tayyorlash dasturlarini
                    tekshirish va litsenziya qoidalarini yangilash kabi choralar qayd etilgan.
                </p>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach ([
                        "O'qishning ilmiy asoslarini bilish",
                        "Fonemik anglash va phonics metodlarini qo'llash",
                        "O'qishda qiynalayotgan o'quvchilarni aniqlash",
                        "Dalillarga asoslangan intervensiya tanlash",
                        "O'quvchi natijalarini muntazam baholash",
                        "O'qishdagi qiyinchilikka erta yordam berish",
                    ] as $item)
                        <div class="flex items-start gap-2 rounded-lg bg-blue-50 border border-blue-100 px-3 py-2.5">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-blue-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-xs text-blue-800 leading-relaxed">{{ $item }}</span>
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
                    ['n'=>1,'title'=>'Explicit instruction','desc'=>'O\'qituvchi o\'qish strategiyasini aniq tushuntiradi, namuna ko\'rsatadi va o\'quvchini mashq qildiradi.'],
                    ['n'=>2,'title'=>'Phonics-based reading','desc'=>'Harf-tovush bog\'lanishlarini bosqichma-bosqich o\'rgatish.'],
                    ['n'=>3,'title'=>'Repeated reading','desc'=>'Ravonlikni oshirish uchun matnni qayta o\'qish.'],
                    ['n'=>4,'title'=>'Vocabulary mapping','desc'=>'Yangi so\'zlarni ma\'no, sinonim, antonim va gapda qo\'llash orqali o\'rgatish.'],
                    ['n'=>5,'title'=>'Comprehension strategies','desc'=>'Bashorat qilish, savol berish, aniqlashtirish, umumlashtirish va xulosa chiqarish.'],
                ] as $s)
                    <div class="flex gap-3 rounded-xl border border-blue-200 bg-white p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-blue-700 text-sm font-bold text-white">{{ $s['n'] }}</span>
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
                    <span class="grid h-6 w-6 place-items-center rounded-lg bg-blue-100 text-blue-700">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0H3"/></svg>
                    </span>
                    Raqamli resurslar
                </h3>
                <ul class="space-y-2">
                    @foreach (['"Science of Reading" bo\'yicha metodik sahifa','Fonemik anglash mashqlari','Audio + matn bilan birga o\'qish','Ravon o\'qish kuzatuv varaqasi','Individual o\'qish diagnostikasi','Dalillarga asoslangan metodlar banki'] as $r)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-blue-600"></span>{{ $r }}
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
                        "Boshlang'ich sinf o'qituvchilariga o'qishning ilmiy asoslari bo'yicha modul kiritish",
                        "1–2-sinflarda tovush-harf, bo'g'in va ravon o'qish mashqlarini tizimlashtirish",
                        "O'qishda qiynalayotgan o'quvchilarni erta aniqlash",
                        "O'quvchi rivojlanishini diagnostik jadvalda yuritish",
                        "Har bir matn uchun lug'at, ravonlik va tushunish topshiriqlarini birgalikda berish",
                    ] as $r)
                        <li class="flex items-start gap-2 text-xs text-amber-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-amber-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $r }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Nav --}}
        <div class="flex items-center justify-between">
            <a href="{{ route('xalqaro.show', $prevSlug) }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                {{ $prevName }}
            </a>
            <a href="{{ route('xalqaro.show', $nextSlug) }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-700 px-5 py-2.5 text-sm font-semibold text-white hover:bg-blue-800 transition-colors">
                {{ $nextName }}
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
