@extends('layouts.app')
@section('title', 'Yaponiya tajribasi — Xalqaro tajriba')
@section('content')
@php
    $prevSlug = 'janubiy-koreya'; $prevName = 'Janubiy Koreya';
    $nextSlug = 'xulasalar';       $nextName = "O'zbekiston uchun xulasalar";
    $focuses  = ['Matnni chuqur tahlil', 'Til faoliyati', 'Guruhli muhokama', "O'quvchi fikrini izohlash", 'Tartibli o\'qish madaniyati'];
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.xalqaro._sidebar', ['activeSlug' => 'yaponiya'])

    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 rounded-2xl bg-gradient-to-br from-pink-500 to-rose-500 p-6 text-white">
            <div class="flex items-start gap-4">
                <span class="text-5xl leading-none">🇯🇵</span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="rounded-full bg-white/20 px-2.5 py-0.5 text-xs font-semibold">7-davlat</span>
                        <span class="text-xs text-white/80">Xalqaro tajriba</span>
                    </div>
                    <h1 class="text-2xl font-extrabold tracking-tight">Yaponiya tajribasi</h1>
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
            <div class="rounded-xl border border-pink-300 bg-pink-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-pink-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-pink-900">Chuqur o'qish</h3>
                </div>
                <p class="text-xs text-pink-800 leading-relaxed">O'quvchi matn bilan shoshilinch ishlamaydi. Matnni diqqat bilan o'qish, fikrni izohlash va guruhda muhokama qilish muhim.</p>
            </div>
            <div class="rounded-xl border border-fuchsia-300 bg-fuchsia-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-fuchsia-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-fuchsia-900">Guruhli o'rganish</h3>
                </div>
                <p class="text-xs text-fuchsia-800 leading-relaxed">O'quvchi matnni faqat yakka tartibda emas, balki juftlikda, guruhda va sinf muhokamasida anglaydi.</p>
            </div>
            <div class="rounded-xl border border-rose-300 bg-rose-50 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-rose-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-rose-900">Refleksiv yondashuv</h3>
                </div>
                <p class="text-xs text-rose-800 leading-relaxed">Dars oxirida o'quvchi o'z taassurotini va tushunishini qisqa yozma shaklda ifodalashi — Yaponiya tajribasining muhim qismi.</p>
            </div>
        </div>

        {{-- Asosiy yondashuv --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">Asosiy yondashuv</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-3">
                    Yaponiya tajribasida o'quvchi matn bilan shoshilinch ishlamaydi; aksincha, matnni diqqat bilan
                    o'qish, fikrni izohlash, guruhda muhokama qilish va o'z taassurotini ifodalashga alohida
                    e'tibor beriladi. Yaponiya milliy ta'lim yondashuvlarida til faoliyatlari orqali o'quvchining
                    o'z fikri va taassurotini chuqurlashtirish, faol o'rganish elementlarini kuchaytirish ko'zda
                    tutiladi.
                </p>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Yaponiyada boshlang'ich ta'limda til va o'qish faoliyati o'quvchining fikrini tartibli
                    ifodalash, boshqalarning fikrini tinglash, matnni tushunish va o'z munosabatini madaniyatli
                    bildirish bilan bog'lanadi.
                </p>
            </div>
        </div>

        {{-- O'qituvchi tayyorgarligi --}}
        <div class="mb-6">
            <div class="mb-3 rounded-lg bg-slate-800 px-4 py-2.5 text-sm font-bold text-white uppercase tracking-wide">O'qituvchi tayyorgarligi</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-4">
                    Yaponiya tajribasida o'qituvchi darsdagi muhokamani boshqaruvchi, savollarni bosqichma-bosqich
                    beruvchi va o'quvchilarning fikrini aniqlashtiruvchi shaxs sifatida namoyon bo'ladi.
                </p>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach ([
                        "Matnni kichik qismlarga ajratib o'qitish",
                        "O'quvchining fikrini tinglash",
                        "Guruhli muhokama tashkil qilish",
                        '"Nega shunday o\'ylaysan?" deb so\'rash',
                        "Matn asosida yozma izoh olish",
                        "Darsdan keyin o'quvchi refleksiyasini tashkil etish",
                    ] as $item)
                        <div class="flex items-start gap-2 rounded-lg bg-pink-50 border border-pink-100 px-3 py-2.5">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-pink-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="text-xs text-pink-800 leading-relaxed">{{ $item }}</span>
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
                    ['n'=>1,'title'=>'Chuqur o\'qish','desc'=>'Bir matn yuzasidan ko\'p bosqichli savollar beriladi.'],
                    ['n'=>2,'title'=>'Guruhli muhokama','desc'=>'O\'quvchilar matn bo\'yicha o\'z fikrlarini kichik guruhda aytadilar.'],
                    ['n'=>3,'title'=>'Matnni bo\'laklab tahlil qilish','desc'=>'Har bir qismdan keyin savol, izoh va xulosa beriladi.'],
                    ['n'=>4,'title'=>'Fikrni yozma izohlash','desc'=>'O\'quvchi matn bo\'yicha qisqa yozma munosabat bildiradi.'],
                    ['n'=>5,'title'=>'Refleksiv yakun','desc'=>'Dars oxirida "Men bugun nimani tushundim?" savoliga javob yoziladi.'],
                ] as $s)
                    <div class="flex gap-3 rounded-xl border border-pink-200 bg-white p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-pink-500 text-sm font-bold text-white">{{ $s['n'] }}</span>
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
                    <span class="grid h-6 w-6 place-items-center rounded-lg bg-pink-100 text-pink-600">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0H3"/></svg>
                    </span>
                    Raqamli resurslar
                </h3>
                <ul class="space-y-2">
                    @foreach (["Guruhli muhokama savollari banki",'Refleksiya kundaligi','Matnni qismlarga ajratish moduli','"Mening fikrim — mening dalilim" sahifasi',"O'quvchi yozma javoblari portfeli",'Darsdan keyingi xulosa oynasi'] as $r)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-pink-500"></span>{{ $r }}
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
                        "Matnni qismlarga bo'lib tahlil qilish",
                        "Darsda juftlik va kichik guruh muhokamasini kuchaytirish",
                        "O'quvchidan har bir javobini izohlashni so'rash",
                        "Dars oxirida qisqa yozma refleksiya o'tkazish",
                        "Qahramon, voqea va xulosa ustida bosqichma-bosqich ishlash",
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
            <a href="{{ route('xalqaro.show', $nextSlug) }}" class="inline-flex items-center gap-2 rounded-xl bg-amber-500 px-5 py-2.5 text-sm font-semibold text-white hover:bg-amber-600 transition-colors">
                {{ $nextName }}
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
