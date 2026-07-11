@extends('layouts.app')
@section('title', 'Avstraliya tajribasi — Xalqaro tajriba')
@section('content')
@php
    $prevSlug = 'aqsh';         $prevName = 'AQSH';
    $nextSlug = 'janubiy-koreya'; $nextName = 'Janubiy Koreya';
    $focuses  = ['Evidence-based teaching', 'Explicit instruction', 'Assessment literacy', 'Teacher standards', 'Amaliy resurslar'];
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.xalqaro._sidebar', ['activeSlug' => 'avstraliya'])

    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-600 p-6 text-white">
            <div class="flex items-start gap-4">
                <span class="text-5xl leading-none">🇦🇺</span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-semibold">5-davlat</span>
                        <span class="text-xs text-white/80">Xalqaro tajriba</span>
                    </div>
                    <h1 class="text-2xl font-extrabold tracking-tight">Avstraliya tajribasi</h1>
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
            <div class="rounded-xl border border-orange-300 bg-orange-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-orange-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-orange-900">AERO resurslari</h3>
                </div>
                <p class="text-xs text-orange-800 leading-relaxed">Australian Education Research Organisation o'qituvchilar va maktab rahbarlari uchun savodxonlik bo'yicha amaliy resurslar ishlab chiqadi.</p>
            </div>
            <div class="rounded-xl border border-amber-300 bg-amber-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-amber-900">AITSL standarti</h3>
                </div>
                <p class="text-xs text-amber-800 leading-relaxed">AITSL o'qituvchilarni ilhomlantirish, kuchaytirish va kasbiy rivojlantirishga xizmat qiluvchi resurslar bilan ta'minlaydi.</p>
            </div>
            <div class="rounded-xl border border-yellow-300 bg-yellow-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-yellow-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-yellow-900">NAPLAN baholash</h3>
                </div>
                <p class="text-xs text-yellow-800 leading-relaxed">Milliy o'quv dasturi va NAPLAN milliy baholash tizimi bilan bog'liq holda o'qish savodxonligi rivojlantiriladi.</p>
            </div>
        </div>

        {{-- Asosiy yondashuv --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">Asosiy yondashuv</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-3">
                    Avstraliya tajribasida o'qish savodxonligini rivojlantirishda dalillarga asoslangan o'qitish,
                    explicit teaching va o'qituvchi kasbiy standartlari muhim ahamiyatga ega. AERO sayti
                    boshlang'ich va yuqori sinf o'qituvchilari uchun savodxonlikka oid resurslarni taqdim etadi.
                </p>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Avstraliyada o'qish savodxonligi milliy o'quv dasturi va o'qituvchi standartlari bilan
                    bog'liq holda rivojlantiriladi. AITSL o'qituvchilarni ilhomlantirish, kuchaytirish va
                    kasbiy rivojlantirishga xizmat qiluvchi resurslar bilan ta'minlaydi.
                </p>
            </div>
        </div>

        {{-- O'qituvchi tayyorgarligi --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">O'qituvchi tayyorgarligi</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach ([
                        "Darsni aniq maqsad va natija asosida rejalashtirish",
                        "Explicit teaching bosqichlarini qo'llash",
                        "O'quvchi natijasini baholash",
                        "Matnni o'qishdan oldin, davomida va keyin qo'llanadigan strategiyalarni tanlash",
                        "O'quvchining ehtiyojiga qarab differensial topshiriq berish",
                    ] as $item)
                        <div class="flex items-start gap-2 rounded-lg bg-orange-50 border border-orange-100 px-3 py-2.5">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-orange-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-xs text-orange-800 leading-relaxed">{{ $item }}</span>
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
                    ['n'=>1,'title'=>'I do — We do — You do','desc'=>'O\'qituvchi avval namuna ko\'rsatadi, keyin birgalikda mashq qildiriladi, so\'ng o\'quvchi mustaqil bajaradi.'],
                    ['n'=>2,'title'=>'Explicit vocabulary teaching','desc'=>'Yangi so\'zlar ma\'nosi ochiq tushuntiriladi va kontekstda qo\'llanadi.'],
                    ['n'=>3,'title'=>'Comprehension monitoring','desc'=>'O\'quvchi o\'z tushunishini nazorat qiladi.'],
                    ['n'=>4,'title'=>'Formative assessment','desc'=>'O\'qituvchi dars jarayonida o\'quvchining natijasini kuzatib boradi.'],
                    ['n'=>5,'title'=>'Differentiated reading tasks','desc'=>'Bir matn asosida oson, o\'rta va murakkab topshiriqlar beriladi.'],
                ] as $s)
                    <div class="flex gap-3 rounded-xl border border-orange-200 bg-white p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-orange-500 text-sm font-bold text-white">{{ $s['n'] }}</span>
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
                    <span class="grid h-6 w-6 place-items-center rounded-lg bg-orange-100 text-orange-600">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0H3"/></svg>
                    </span>
                    Raqamli resurslar
                </h3>
                <ul class="space-y-2">
                    @foreach (['Explicit teaching shablonlari','Dars rejalari banki','Baholash rubrikalari','Differensial topshiriqlar generatori',"O'qish strategiyalari kartalari","O'quvchi rivojlanish monitoringi"] as $r)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-orange-500"></span>{{ $r }}
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
                        'Dars ishlanmalarida "namuna — birgalikda bajarish — mustaqil bajarish" modelini joriy qilish',
                        "Har bir matn uchun uch darajali topshiriq ishlab chiqish",
                        "Bo'lajak o'qituvchilarni formative assessmentga o'rgatish",
                        "Savodxonlik bo'yicha amaliy resurslar bankini yaratish",
                        "O'qituvchi portfelida dars reja, savol, baholash va refleksiyani birga jamlash",
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
            <a href="{{ route('xalqaro.show', $nextSlug) }}" class="inline-flex items-center gap-2 rounded-xl bg-orange-500 px-5 py-2.5 text-sm font-semibold text-white hover:bg-orange-600 transition-colors">
                {{ $nextName }}
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
