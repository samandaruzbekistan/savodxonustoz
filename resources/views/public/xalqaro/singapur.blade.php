@extends('layouts.app')
@section('title', 'Singapur tajribasi — Xalqaro tajriba')
@section('content')
@php
    $prevSlug = 'finlandiya'; $prevName = 'Finlandiya';
    $nextSlug = 'buyuk-britaniya'; $nextName = 'Buyuk Britaniya';
    $focuses  = ['Tizimli til ta\'limi', 'Integrativ savodxonlik', 'Mustaqil o\'qish', 'Savol-javob', 'Metakognitiv strategiyalar'];
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.xalqaro._sidebar', ['activeSlug' => 'singapur'])

    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="relative mb-6 overflow-hidden rounded-2xl p-6 text-white">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/singapur.webp') }}')"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-red-600/85 to-rose-600/80"></div>
            <div class="relative flex items-start gap-4">
                <span class="text-5xl leading-none">🇸🇬</span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-semibold">2-davlat</span>
                        <span class="text-xs text-white/80">Xalqaro tajriba</span>
                    </div>
                    <h1 class="text-2xl font-extrabold tracking-tight">Singapur tajribasi</h1>
                    <div class="mt-2 flex flex-wrap gap-1.5">
                        @foreach ($focuses as $f)
                            <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-medium">{{ $f }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <x-xalqaro.gallery-strip :images="['singapur.webp', 'xalqaro/singapur-2.jpg', 'xalqaro/singapur-3.jpg']" name="Singapur" />

        {{-- 3 intro boxes --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
            <div class="rounded-xl border border-red-300 bg-red-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-red-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-red-900">Integrativ yondashuv</h3>
                </div>
                <p class="text-xs text-red-800 leading-relaxed">Til ko'nikmalari — tinglash, gapirish, o'qish, yozish, ko'rish va namoyon qilish — integratsiyada o'zlashtiriladi.</p>
            </div>
            <div class="rounded-xl border border-orange-300 bg-orange-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-orange-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-orange-900">Mustaqil o'quvchi</h3>
                </div>
                <p class="text-xs text-orange-800 leading-relaxed">PIRLS 2021 mamlakat ma'lumotlarida Singapur o'quvchilarni mustaqil o'quvchi va umr davomida o'rganishga tayyorlashga intilishi ko'rsatilgan.</p>
            </div>
            <div class="rounded-xl border border-rose-300 bg-rose-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-rose-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-rose-900">Yuqori natija</h3>
                </div>
                <p class="text-xs text-rose-800 leading-relaxed">Singapur PIRLS va PISA reytinglarida doimiy ravishda dunyoning eng yuqori ko'rsatkichlaridan birini ko'rsatib kelmoqda.</p>
            </div>
        </div>

        {{-- Asosiy yondashuv --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">Asosiy yondashuv</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-3">
                    Singapur tajribasida o'qish savodxonligi til ta'limining markazida turadi. Boshlang'ich sinflarda
                    o'quvchilar tilni tinglash, gapirish, o'qish, yozish, ko'rish va namoyon qilish ko'nikmalari
                    bilan integratsiyada o'zlashtiradilar. Singapur boshlang'ich ingliz tili dasturida til
                    ko'nikmalarini rivojlantirish, mustahkamlash va kengaytirish, keng o'qish hamda mustaqil
                    til qo'llashga e'tibor qaratiladi.
                </p>
                <p class="text-sm text-slate-700 leading-relaxed">
                    PIRLS 2021 mamlakat ma'lumotlarida Singapur til va savodxonlikni rivojlantirishda integrativ
                    yondashuvdan foydalanishi, o'quvchilarni mustaqil o'quvchi va umr davomida o'rganishga
                    tayyorlashga intilishi ko'rsatilgan.
                </p>
            </div>
        </div>

        {{-- O'qituvchi tayyorgarligi --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">O'qituvchi tayyorgarligi</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-4">
                    Singapur tajribasida o'qituvchi darsni aniq maqsad, natija va strategiyalar asosida loyihalaydi.
                    O'qituvchi faqat matnni o'qitmaydi, balki o'quvchini savol berish, mazmunni tahlil qilish,
                    axborotni qayta ishlash va o'z fikrini aniq ifodalashga o'rgatadi.
                </p>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-3">Bo'lajak o'qituvchilar uchun muhim jihatlar:</p>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach ([
                        "Darsda o'qish strategiyalarini oldindan rejalashtirish",
                        "Savollarni oddiydan murakkabga qarab tuzish",
                        "O'quvchining javobini dalil bilan asoslashga o'rgatish",
                        "O'quvchining mustaqil o'qish odatini shakllantirish",
                        "Til ko'nikmalarini bir-biri bilan bog'liq holda o'qitish",
                    ] as $item)
                        <div class="flex items-start gap-2 rounded-lg bg-red-50 border border-red-100 px-3 py-2.5">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-red-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-xs text-red-800 leading-relaxed">{{ $item }}</span>
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
                    ['n'=>1,'title'=>'Think-aloud','desc'=>'Ovoz chiqarib fikrlash. O\'qituvchi matnni o\'qish jarayonida qanday o\'ylayotganini o\'quvchiga namoyish etadi.'],
                    ['n'=>2,'title'=>'Questioning','desc'=>'Savol orqali fikrlashni boshqarish. Savollar literal, inferensial, talqin va baholash darajalarida beriladi.'],
                    ['n'=>3,'title'=>'Reading-to-learn','desc'=>'O\'qish orqali o\'rganish. O\'quvchi matnni faqat o\'qish uchun emas, yangi bilim olish va uni qo\'llash uchun o\'qiydi.'],
                    ['n'=>4,'title'=>'Extensive reading','desc'=>'Keng o\'qish. O\'quvchining kitobxonlik qiziqishini kuchaytirishga yo\'naltirilgan muntazam o\'qish.'],
                    ['n'=>5,'title'=>'Metakognitiv monitoring','desc'=>'"Nimani tushundim?", "Qaysi joyda qiynaldim?", "Qanday dalil topdim?" kabi savollar orqali o\'qishni kuzatish.'],
                ] as $s)
                    <div class="flex gap-3 rounded-xl border border-red-200 bg-white p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-red-600 text-sm font-bold text-white">{{ $s['n'] }}</span>
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
                    <span class="grid h-6 w-6 place-items-center rounded-lg bg-red-100 text-red-600">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0H3"/></svg>
                    </span>
                    Raqamli resurslar
                </h3>
                <ul class="space-y-2">
                    @foreach ([
                        'Interaktiv savol-javob oynasi',
                        'Matn bo\'yicha avtomatik savol yaratish moduli',
                        'Audio matnlar',
                        'O\'quvchi javobini baholash rubrikasi',
                        '"Men tushundim / tushunmadim" refleksiya oynasi',
                        'Keng o\'qish uchun elektron kitob tavsiyalari',
                    ] as $r)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-red-500"></span>
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
                        "O'qish darsida tinglash, gapirish, o'qish va yozishni birgalikda tashkil etish",
                        'Matn asosida "o\'qi — o\'yla — javob ber — asosla" algoritmini qo\'llash',
                        "Bo'lajak o'qituvchilarni think-aloud metodiga o'rgatish",
                        "Matn asosida savol tuzish modulini dars jarayoniga kiritish",
                        "Keng o'qish ro'yxatini sinflar kesimida shakllantirish",
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
                <span class="text-sm font-bold text-white">Singapur ta'lim tizimi — video</span>
            </div>
            <div class="p-5">
                <div class="aspect-video w-full rounded-xl overflow-hidden bg-slate-100">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/MJtNZT5CStw"
                        title="Singapur ta'lim tizimi" frameborder="0"
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
            <a href="{{ route('xalqaro.show', $nextSlug) }}" class="inline-flex items-center gap-2 rounded-xl bg-red-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-red-700 transition-colors">
                {{ $nextName }}
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
