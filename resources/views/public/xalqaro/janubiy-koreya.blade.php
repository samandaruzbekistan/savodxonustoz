@extends('layouts.app')
@section('title', 'Janubiy Koreya tajribasi — Xalqaro tajriba')
@section('content')
@php
    $prevSlug = 'avstraliya'; $prevName = 'Avstraliya';
    $nextSlug = 'yaponiya';   $nextName = 'Yaponiya';
    $focuses  = ['Raqamli transformatsiya', 'AI darsliklar', 'Individual o\'qish yo\'li', 'Monitoring', 'Ehtiyotkor texnologiya integratsiyasi'];
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.xalqaro._sidebar', ['activeSlug' => 'janubiy-koreya'])

    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 rounded-2xl bg-gradient-to-br from-rose-600 to-red-700 p-6 text-white">
            <div class="flex items-start gap-4">
                <span class="text-5xl leading-none">🇰🇷</span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-semibold">6-davlat</span>
                        <span class="text-xs text-white/80">Xalqaro tajriba</span>
                    </div>
                    <h1 class="text-2xl font-extrabold tracking-tight">Janubiy Koreya tajribasi</h1>
                    <div class="mt-2 flex flex-wrap gap-1.5">
                        @foreach ($focuses as $f)
                            <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-medium">{{ $f }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Ehtiyotkorlik ogohlantirishi --}}
        <div class="mb-6 rounded-2xl border border-yellow-300 bg-yellow-50 p-4 flex gap-3 items-start">
            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-yellow-400 text-white">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
            </span>
            <div>
                <p class="text-sm font-bold text-yellow-900 mb-0.5">Muhim eslatma</p>
                <p class="text-xs text-yellow-800 leading-relaxed">2025-yilda Janubiy Koreyada AI darsliklar borasida tanqidlar kuchaydi. Ayrim manbalarda AI darsliklar rasmiy darslik maqomidan qo'shimcha material maqomiga o'tkazilgani, o'qituvchilar va ota-onalar tayyorgarlik, xatoliklar, maxfiylik va yuklama masalalarini ko'targani xabar qilingan.</p>
            </div>
        </div>

        {{-- 3 intro boxes --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
            <div class="rounded-xl border border-rose-300 bg-rose-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-rose-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-rose-900">AI darsliklar</h3>
                </div>
                <p class="text-xs text-rose-800 leading-relaxed">2025-yildan matematika, ingliz tili, informatika va koreys tili fanlari uchun AI raqamli darsliklar joriy qilish rejasi e'lon qilingan.</p>
            </div>
            <div class="rounded-xl border border-pink-300 bg-pink-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-pink-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-pink-900">Individual ta'lim</h3>
                </div>
                <p class="text-xs text-pink-800 leading-relaxed">O'quvchi natijasini raqamli kuzatish, shaxsiylashtirilgan topshiriqlar va raqamli darsliklar orqali individual ta'lim yo'lini tashkil etish.</p>
            </div>
            <div class="rounded-xl border border-red-300 bg-red-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-red-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-red-900">Mas'uliyatli texnologiya</h3>
                </div>
                <p class="text-xs text-red-800 leading-relaxed">Texnologiya o'qituvchi metodikasini almashtirmasligi kerak. Raqamli vosita o'qituvchiga yordamchi bo'lishi lozim.</p>
            </div>
        </div>

        {{-- Asosiy yondashuv --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">Asosiy yondashuv</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-3">
                    Janubiy Koreya ta'lim tizimida raqamli texnologiyalar va sun'iy intellekt vositalarini o'quv
                    jarayoniga kiritishga katta e'tibor qaratilgan. Bu tajribaning muhim jihati shundaki,
                    o'quvchi natijasini raqamli kuzatish, shaxsiylashtirilgan topshiriqlar va raqamli darsliklar
                    orqali individual ta'lim yo'lini tashkil etish g'oyasi kuchli.
                </p>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Biroq bu tajriba shuni ham ko'rsatadiki, texnologiya o'qituvchi metodikasini almashtirmasligi
                    kerak. Raqamli vosita o'qituvchiga yordamchi bo'lishi, o'quvchining matnni chuqur tushunishi,
                    fikrlashi va muloqotini susaytirmasligi lozim.
                </p>
            </div>
        </div>

        {{-- O'qituvchi tayyorgarligi --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">O'qituvchi tayyorgarligi</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach ([
                        "Raqamli matnlar bilan ishlash",
                        "AI yoki platforma bergan tavsiyalarni metodik jihatdan tekshirish",
                        "O'quvchi natijalarini dashboard orqali tahlil qilish",
                        "Individual topshiriqlar tanlash",
                        "Texnologiyadan mas'uliyatli foydalanish",
                        "Bolalarda raqamli charchoq va yuzaki o'qish xavfini kamaytirish",
                    ] as $item)
                        <div class="flex items-start gap-2 rounded-lg bg-rose-50 border border-rose-100 px-3 py-2.5">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-rose-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-xs text-rose-800 leading-relaxed">{{ $item }}</span>
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
                    ['n'=>1,'title'=>'Individual o\'qish yo\'li','desc'=>'Har bir o\'quvchiga darajasiga mos matn va topshiriq berish.'],
                    ['n'=>2,'title'=>'Raqamli monitoring','desc'=>'O\'quvchi qaysi savolda qiynalayotganini grafik va jadval orqali kuzatish.'],
                    ['n'=>3,'title'=>'AI yordamida savol yaratish','desc'=>'Matnga mos savol namunalarini olish, lekin o\'qituvchi tomonidan tahrirlash.'],
                    ['n'=>4,'title'=>'Blended reading','desc'=>'Bosma matn, audio matn va raqamli topshiriqlarni uyg\'unlashtirish.'],
                    ['n'=>5,'title'=>'O\'qituvchi nazorati','desc'=>'Har qanday raqamli tavsiya o\'qituvchi tomonidan metodik jihatdan tekshiriladi.'],
                ] as $s)
                    <div class="flex gap-3 rounded-xl border border-rose-200 bg-white p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-rose-600 text-sm font-bold text-white">{{ $s['n'] }}</span>
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
                    <span class="grid h-6 w-6 place-items-center rounded-lg bg-rose-100 text-rose-600">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0H3"/></svg>
                    </span>
                    Raqamli resurslar
                </h3>
                <ul class="space-y-2">
                    @foreach (["O'quvchi natijalarini ko'rsatuvchi dashboard",'Individual topshiriq tavsiya tizimi','AI asosidagi savol yaratish moduli',"O'quvchi rivojlanish grafigi",'Raqamli portfel','Matnni audio va vizual yordam bilan o\'qish'] as $r)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rose-500"></span>{{ $r }}
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
                        "AI vositalarini o'qituvchiga yordamchi sifatida ishlatish",
                        "Savollarni avtomatik yaratishdan oldin metodik ekspertiza qilish",
                        "O'quvchi natijasini elektron portfelda yuritish",
                        "Raqamli resurslarni bosma kitob va og'zaki muhokama bilan birlashtirish",
                        "O'qituvchilarni texnologiyadan pedagogik maqsadda foydalanishga o'rgatish",
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
            <a href="{{ route('xalqaro.show', $nextSlug) }}" class="inline-flex items-center gap-2 rounded-xl bg-rose-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-rose-700 transition-colors">
                {{ $nextName }}
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
