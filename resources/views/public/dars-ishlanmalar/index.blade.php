@extends('layouts.app')

@section('title', "Dars ishlanmalar banki — 1–5-sinf uchun")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.dars-ishlanmalar._sidebar')

    <div class="min-w-0 flex-1">

        {{-- Hero + info panel --}}
        <div class="mb-8 flex flex-col xl:flex-row gap-5 items-stretch">

            {{-- Hero --}}
            <div class="flex-1 min-w-0 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 45%, #0369a1 100%);">
                <div class="absolute inset-0 opacity-10">
                    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#grid)"/>
                    </svg>
                </div>
                <div class="relative px-8 py-8 flex gap-6 items-center">
                    <div class="flex-1 min-w-0">
                        <div class="inline-flex items-center gap-2 rounded-full bg-white/20 px-3 py-1 mb-4">
                            <span class="h-2 w-2 rounded-full bg-cyan-300"></span>
                            <span class="text-xs font-semibold text-white/90">O'qish savodxonligi</span>
                        </div>
                        <h1 class="text-3xl font-extrabold tracking-tight text-white leading-tight">Dars ishlanmalar banki</h1>
                        <p class="mt-3 text-blue-100 leading-relaxed max-w-xl text-sm">
                            1–5-sinf uchun o'qish savodxonligi bo'yicha tayyor dars ishlanmalari, namunaviy matnlar,
                            PIRLS tipidagi savollar va baholash mezonlari.
                        </p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">📚 1–5 sinf</span>
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">📝 PIRLS standartida</span>
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">✅ Baholash mezonlari</span>
                        </div>
                    </div>
                    <div class="hidden md:block shrink-0">
                        <img src="{{ asset('images/sections/dars-ishlanmalar/01_hero_children_books.png') }}"
                             alt="O'quvchilar kitob bilan" class="w-52 h-auto object-contain" loading="lazy">
                    </div>
                </div>
            </div>

            {{-- Info panel --}}
            <div class="w-full xl:w-72 shrink-0 rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('images/sections/dars-ishlanmalar/21_idea_lightbulb.png') }}" alt=""
                         class="h-6 w-6 object-contain" loading="lazy">
                    <h2 class="text-sm font-bold text-slate-800">Nima uchun bu bo'lim muhim?</h2>
                </div>
                <ul class="space-y-3">
                    @foreach ([
                        ['icon' => '15_open_book_icon.png', 'text' => "O'qish ko'nikmasini mustahkamlashga yordam beradi."],
                        ['icon' => '14_checklist.png',      'text' => "Sinf darajasiga mos ravon va metodik dars ishlanmalari."],
                        ['icon' => '16_collaboration.png',  'text' => "Interfaol metodlar orqali o'quvchilarning faolligini oshiradi."],
                        ['icon' => '13_magnifying_glass.png', 'text' => "Baholash mezonlari orqali rivojlanish darajasi aniqlanadi."],
                        ['icon' => '17_certificate.png',    'text' => "PIRLS standartlariga mos savollar va topshiriqlar bilan ta'minlanadi."],
                    ] as $item)
                        <li class="flex items-start gap-2.5">
                            <img src="{{ asset('images/sections/dars-ishlanmalar/'.$item['icon']) }}" alt=""
                                 class="h-5 w-5 shrink-0 object-contain mt-0.5" loading="lazy">
                            <span class="text-xs text-slate-600 leading-relaxed">{{ $item['text'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Section heading --}}
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-base font-bold text-slate-800">Sinflar bo'yicha ishlanmalar</h2>
            <div class="flex-1 h-px bg-slate-200"></div>
        </div>

        {{-- Grade cards (2 col) --}}
        @php
            $grades = [
                [
                    'slug'  => '1-sinf', 'num' => '1', 'label' => '1-sinf uchun dars ishlanmalari',
                    'color' => ['bg' => '#10b981', 'light' => '#d1fae5', 'text' => '#065f46'],
                    'image' => '06_boy_reading.png',
                    'desc'  => "Harf va bo'g'in o'qish, qisqa matnlarni tushunish, rasmli matnlar bilan ishlash. Matn hajmi 30–80 so'z.",
                    'tags'  => ["Harf tanish", "Bo'g'in o'qish", "Rasm-matn"],
                    'meta'  => ['savollar' => '2 daraja', 'matn' => '30–80 so\'z'],
                ],
                [
                    'slug'  => '2-sinf', 'num' => '2', 'label' => '2-sinf uchun dars ishlanmalari',
                    'color' => ['bg' => '#0ea5e9', 'light' => '#e0f2fe', 'text' => '#0c4a6e'],
                    'image' => '07_girl_writing.png',
                    'desc'  => "So'z va gap, oddiy matnni tushunish, asosiy axborotni topish, kim-nima-qayerda savollar.",
                    'tags'  => ["So'z tahlili", "Asosiy axborot", "Savol-javob"],
                    'meta'  => ['savollar' => '2–3 daraja', 'matn' => '80–150 so\'z'],
                ],
                [
                    'slug'  => '3-sinf', 'num' => '3', 'label' => '3-sinf uchun dars ishlanmalari',
                    'color' => ['bg' => '#8b5cf6', 'light' => '#ede9fe', 'text' => '#4c1d95'],
                    'image' => '08_boy_thinking.png',
                    'desc'  => "Qahramon tahlili, asosiy g'oyani topish, oddiy xulosa chiqarish va matn xaritasi.",
                    'tags'  => ["Qahramon tahlili", "Asosiy g'oya", "Matn xaritasi"],
                    'meta'  => ['savollar' => '3 daraja', 'matn' => '150–250 so\'z'],
                ],
                [
                    'slug'  => '4-sinf', 'num' => '4', 'label' => '4-sinf uchun dars ishlanmalari',
                    'color' => ['bg' => '#f59e0b', 'light' => '#fef3c7', 'text' => '#78350f'],
                    'image' => '09_teacher_books.png',
                    'desc'  => "PIRLS talablariga yaqin: yashirin ma'no, talqin, dalil bilan asoslash, 4 darajali savollar.",
                    'tags'  => ["PIRLS savollari", "Talqin", "Dalil bilan asoslash"],
                    'meta'  => ['savollar' => '4 daraja', 'matn' => '250–350 so\'z'],
                ],
                [
                    'slug'  => '5-sinf', 'num' => '5', 'label' => '5-sinf uchun dars ishlanmalari',
                    'color' => ['bg' => '#f43f5e', 'light' => '#ffe4e6', 'text' => '#881337'],
                    'image' => '11_boy_laptop.png',
                    'desc'  => "Tanqidiy o'qish, muallif pozitsiyasi, turli matn turlari, yuqori darajali savollar va argumentatsiya.",
                    'tags'  => ["Tanqidiy fikr", "Muallif pozitsiyasi", "Argumentatsiya"],
                    'meta'  => ['savollar' => '4+ daraja', 'matn' => '350–500 so\'z'],
                ],
            ];
        @endphp

        <div class="grid grid-cols-2 gap-5 mb-8">
            @foreach ($grades as $g)
                <a href="{{ route('dars-ishlanmalar.show', $g['slug']) }}"
                   class="group flex flex-col rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 overflow-hidden">
                    {{-- Top color bar --}}
                    <div class="h-2" style="background: {{ $g['color']['bg'] }};"></div>
                    <div class="flex flex-col flex-1 p-5">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="h-12 w-12 shrink-0 rounded-xl flex items-center justify-center text-white font-extrabold text-2xl shadow-sm"
                                 style="background: {{ $g['color']['bg'] }};">{{ $g['num'] }}</div>
                            <div class="min-w-0 flex-1">
                                <h3 class="text-base font-bold text-slate-800 leading-snug group-hover:text-blue-700 transition-colors">{{ $g['label'] }}</h3>
                                <div class="mt-1.5 flex gap-3 text-xs text-slate-500">
                                    <span>📝 {{ $g['meta']['matn'] }}</span>
                                    <span>❓ {{ $g['meta']['savollar'] }}</span>
                                </div>
                            </div>
                            <img src="{{ asset('images/sections/dars-ishlanmalar/'.$g['image']) }}" alt=""
                                 class="h-16 w-16 shrink-0 object-contain" loading="lazy">
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4 flex-1">{{ $g['desc'] }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex flex-wrap gap-1.5">
                                @foreach ($g['tags'] as $tag)
                                    <span class="rounded-full px-2.5 py-0.5 text-xs font-semibold"
                                          style="background: {{ $g['color']['light'] }}; color: {{ $g['color']['text'] }};">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600 group-hover:text-blue-700 shrink-0 ml-2">
                                Ko'rish
                                <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-4 gap-4">
            @foreach ([
                ['label' => "O'quv bosqichi", 'value' => '5 sinf',       'icon' => 'M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5', 'bg' => 'bg-blue-100', 'ic' => 'text-blue-600'],
                ['label' => 'Savol darajalari', 'value' => '4 daraja',   'icon' => 'M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z', 'bg' => 'bg-violet-100', 'ic' => 'text-violet-600'],
                ['label' => 'Baholash tizimi', 'value' => '0–3 ball',    'icon' => 'M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75', 'bg' => 'bg-emerald-100', 'ic' => 'text-emerald-600'],
                ['label' => 'Standart',        'value' => 'PIRLS 2021',  'icon' => 'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18', 'bg' => 'bg-amber-100', 'ic' => 'text-amber-600'],
            ] as $s)
                <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4">
                    <div class="grid h-10 w-10 shrink-0 place-items-center rounded-xl {{ $s['bg'] }}">
                        <svg class="h-5 w-5 {{ $s['ic'] }}" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $s['icon'] }}"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 leading-relaxed">{{ $s['label'] }}</p>
                        <p class="text-sm font-bold text-slate-800 mt-0.5">{{ $s['value'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
