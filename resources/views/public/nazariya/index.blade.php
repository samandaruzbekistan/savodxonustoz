@extends('layouts.app')

@section('title', "O'qish savodxonligi nazariyasi")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.nazariya._sidebar')

    {{-- Main content --}}
    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6">
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">O'qish savodxonligi nazariyasi</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">
                Ushbu bo'limda o'qish savodxonligining ilmiy-nazariy asoslari, xalqaro baholash tadqiqotlari,
                matnni tushunish jarayoni, o'qish turlari va samarali strategiyalar yoritiladi.
            </p>
        </div>

        {{-- Cards grid --}}
        @php
            $cards = [
                [
                    'num' => 1, 'color' => 'indigo',
                    'title' => "O'qish savodxonligi tushunchasi",
                    'slug' => 'tushuncha',
                    'points' => ["Tushuncha va mazmuni", "Oddiy o'qishdan farqi", "Tarkibiy ko'nikmalar", "Rivojlantirish zarurati"],
                    'svg' => '<svg width="100%" height="96" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <!-- Open book -->
                        <rect x="10" y="20" width="44" height="50" rx="3" fill="#e0e7ff" stroke="#6366f1" stroke-width="1.5"/>
                        <rect x="66" y="20" width="44" height="50" rx="3" fill="#e0e7ff" stroke="#6366f1" stroke-width="1.5"/>
                        <line x1="54" y1="20" x2="54" y2="70" stroke="#6366f1" stroke-width="2"/>
                        <line x1="20" y1="32" x2="46" y2="32" stroke="#a5b4fc" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="20" y1="39" x2="46" y2="39" stroke="#a5b4fc" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="20" y1="46" x2="38" y2="46" stroke="#a5b4fc" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="66" y1="32" x2="100" y2="32" stroke="#a5b4fc" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="66" y1="39" x2="100" y2="39" stroke="#a5b4fc" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="66" y1="46" x2="88" y2="46" stroke="#a5b4fc" stroke-width="1.5" stroke-linecap="round"/>
                        <!-- Magnifying glass -->
                        <circle cx="90" cy="22" r="12" fill="white" stroke="#6366f1" stroke-width="2"/>
                        <line x1="98" y1="30" x2="107" y2="39" stroke="#6366f1" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="90" cy="22" r="7" fill="#c7d2fe"/>
                        <!-- Star/sparkle -->
                        <circle cx="18" cy="15" r="4" fill="#818cf8"/>
                        <circle cx="28" cy="10" r="2.5" fill="#a5b4fc"/>
                    </svg>',
                ],
                [
                    'num' => 2, 'color' => 'blue',
                    'title' => "PIRLS dasturida o'qish savodxonligi",
                    'slug' => 'pirls',
                    'points' => ["PIRLS maqsadi va mazmuni", "Matn turlari", "Savol turlari va darajalari", "Baholash yondashuvi"],
                    'svg' => '<svg width="100%" height="96" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <!-- Clipboard -->
                        <rect x="25" y="12" width="55" height="60" rx="4" fill="#dbeafe" stroke="#3b82f6" stroke-width="1.5"/>
                        <rect x="38" y="8" width="29" height="10" rx="3" fill="#93c5fd" stroke="#3b82f6" stroke-width="1.5"/>
                        <!-- PIRLS text placeholder -->
                        <rect x="33" y="26" width="39" height="5" rx="2" fill="#93c5fd"/>
                        <!-- Check items -->
                        <rect x="33" y="36" width="28" height="4" rx="2" fill="#bfdbfe"/>
                        <circle cx="68" cy="38" r="4" fill="#3b82f6"/>
                        <polyline points="65,38 67,40 71,36" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <rect x="33" y="45" width="20" height="4" rx="2" fill="#bfdbfe"/>
                        <circle cx="68" cy="47" r="4" fill="#3b82f6"/>
                        <polyline points="65,47 67,49 71,45" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <rect x="33" y="54" width="24" height="4" rx="2" fill="#bfdbfe"/>
                        <circle cx="68" cy="56" r="4" fill="#93c5fd" stroke="#3b82f6" stroke-width="1"/>
                        <!-- Bar chart beside -->
                        <rect x="86" y="50" width="8" height="18" rx="2" fill="#3b82f6"/>
                        <rect x="97" y="38" width="8" height="30" rx="2" fill="#60a5fa"/>
                        <rect x="108" y="44" width="8" height="24" rx="2" fill="#93c5fd"/>
                        <line x1="83" y1="68" x2="119" y2="68" stroke="#3b82f6" stroke-width="1.5"/>
                    </svg>',
                ],
                [
                    'num' => 3, 'color' => 'cyan',
                    'title' => "PISA va funksional o'qish savodxonligi",
                    'slug' => 'pisa',
                    'points' => ["PISA dasturining yondashuvi", "Funksional o'qish savodxonligi", "Hayotiy matnlar turlari", "Amaliy foydalanish"],
                    'svg' => '<svg width="100%" height="96" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <!-- Globe -->
                        <circle cx="52" cy="42" r="30" fill="#cffafe" stroke="#06b6d4" stroke-width="1.5"/>
                        <ellipse cx="52" cy="42" rx="14" ry="30" fill="none" stroke="#06b6d4" stroke-width="1.2" stroke-dasharray="3 2"/>
                        <line x1="22" y1="42" x2="82" y2="42" stroke="#06b6d4" stroke-width="1.2"/>
                        <ellipse cx="52" cy="42" rx="30" ry="12" fill="none" stroke="#06b6d4" stroke-width="1.2" stroke-dasharray="3 2"/>
                        <!-- Trend arrow -->
                        <polyline points="72,65 85,50 95,55 108,35" stroke="#0891b2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <polygon points="108,35 103,38 106,43" fill="#0891b2"/>
                        <!-- Dots on trend -->
                        <circle cx="72" cy="65" r="3" fill="#22d3ee"/>
                        <circle cx="85" cy="50" r="3" fill="#22d3ee"/>
                        <circle cx="95" cy="55" r="3" fill="#22d3ee"/>
                    </svg>',
                ],
                [
                    'num' => 4, 'color' => 'violet',
                    'title' => "Matnni tushunish nazariyasi",
                    'slug' => 'matn-tushunish',
                    'points' => ["Tushunish jarayonining bosqichlari", "O'qishdan oldin – davomida – keyin", "Savol turlari", "Tahlil va xulosa chiqarish"],
                    'svg' => '<svg width="100%" height="96" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <!-- Head silhouette -->
                        <ellipse cx="50" cy="38" rx="24" ry="28" fill="#ede9fe" stroke="#7c3aed" stroke-width="1.5"/>
                        <rect x="40" y="62" width="20" height="8" rx="2" fill="#ede9fe" stroke="#7c3aed" stroke-width="1.5"/>
                        <!-- Brain lines inside head -->
                        <path d="M38 30 Q44 24 50 30 Q56 24 62 30" stroke="#7c3aed" stroke-width="1.3" fill="none" stroke-linecap="round"/>
                        <path d="M36 40 Q42 34 50 40 Q58 34 64 40" stroke="#7c3aed" stroke-width="1.3" fill="none" stroke-linecap="round"/>
                        <line x1="50" y1="30" x2="50" y2="50" stroke="#7c3aed" stroke-width="1" stroke-dasharray="2 2"/>
                        <!-- Lightbulb -->
                        <circle cx="88" cy="25" r="14" fill="#f5f3ff" stroke="#7c3aed" stroke-width="1.5"/>
                        <path d="M82 25 Q82 18 88 15 Q94 18 94 25 Q94 30 88 32 Q82 30 82 25Z" fill="#c4b5fd"/>
                        <rect x="84" y="33" width="8" height="3" rx="1" fill="#7c3aed"/>
                        <rect x="85" y="37" width="6" height="2" rx="1" fill="#7c3aed"/>
                        <!-- Rays -->
                        <line x1="88" y1="8" x2="88" y2="5" stroke="#a78bfa" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="100" y1="13" x2="103" y2="10" stroke="#a78bfa" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="76" y1="13" x2="73" y2="10" stroke="#a78bfa" stroke-width="1.5" stroke-linecap="round"/>
                        <!-- Arrows between head and bulb -->
                        <path d="M73 30 Q68 28 66 26" stroke="#a78bfa" stroke-width="1.5" stroke-linecap="round" marker-end="url(#arr)"/>
                    </svg>',
                ],
                [
                    'num' => 5, 'color' => 'emerald',
                    'title' => "Ravon o'qish",
                    'slug' => 'ravon-oqish',
                    'points' => ["Ravon o'qish tushunchasi", "Aniqlik, tezlik, ifodalilik", "Rivojlantirish usullari", "Baholash mezonlari"],
                    'svg' => '<svg width="100%" height="96" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <!-- Stopwatch -->
                        <circle cx="55" cy="46" r="28" fill="#d1fae5" stroke="#059669" stroke-width="1.5"/>
                        <circle cx="55" cy="46" r="20" fill="white" stroke="#059669" stroke-width="1"/>
                        <line x1="55" y1="18" x2="55" y2="14" stroke="#059669" stroke-width="2" stroke-linecap="round"/>
                        <rect x="49" y="12" width="12" height="5" rx="2" fill="#6ee7b7" stroke="#059669" stroke-width="1"/>
                        <!-- Clock hands -->
                        <line x1="55" y1="46" x2="55" y2="32" stroke="#059669" stroke-width="2" stroke-linecap="round"/>
                        <line x1="55" y1="46" x2="66" y2="50" stroke="#10b981" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="55" cy="46" r="2.5" fill="#059669"/>
                        <!-- Speed lines -->
                        <line x1="83" y1="38" x2="95" y2="38" stroke="#34d399" stroke-width="2" stroke-linecap="round"/>
                        <line x1="86" y1="46" x2="98" y2="46" stroke="#34d399" stroke-width="2" stroke-linecap="round"/>
                        <line x1="83" y1="54" x2="93" y2="54" stroke="#34d399" stroke-width="2" stroke-linecap="round"/>
                        <!-- Book at bottom -->
                        <rect x="15" y="62" width="20" height="14" rx="2" fill="#a7f3d0" stroke="#059669" stroke-width="1.2"/>
                        <line x1="25" y1="62" x2="25" y2="76" stroke="#059669" stroke-width="1"/>
                        <line x1="18" y1="67" x2="23" y2="67" stroke="#6ee7b7" stroke-width="1"/>
                        <line x1="18" y1="71" x2="23" y2="71" stroke="#6ee7b7" stroke-width="1"/>
                    </svg>',
                ],
                [
                    'num' => 6, 'color' => 'orange',
                    'title' => "Tanqidiy o'qish",
                    'slug' => 'tanqidiy',
                    'points' => ["Tanqidiy o'qish tushunchasi", "Fakt va fikrni farqlash", "Dalil topish va baholash", "Muhokama va munosabat bildirish"],
                    'svg' => '<svg width="100%" height="96" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <!-- Document with text -->
                        <rect x="12" y="10" width="50" height="62" rx="4" fill="#ffedd5" stroke="#f97316" stroke-width="1.5"/>
                        <line x1="20" y1="22" x2="54" y2="22" stroke="#fed7aa" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="20" y1="30" x2="54" y2="30" stroke="#fed7aa" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="20" y1="38" x2="46" y2="38" stroke="#fed7aa" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="20" y1="46" x2="54" y2="46" stroke="#fed7aa" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="20" y1="54" x2="40" y2="54" stroke="#fed7aa" stroke-width="1.5" stroke-linecap="round"/>
                        <!-- Magnifying glass -->
                        <circle cx="82" cy="38" r="20" fill="white" stroke="#f97316" stroke-width="2"/>
                        <circle cx="82" cy="38" r="13" fill="#fff7ed"/>
                        <line x1="97" y1="53" x2="108" y2="64" stroke="#f97316" stroke-width="3" stroke-linecap="round"/>
                        <!-- Question mark inside lens -->
                        <text x="76" y="44" font-size="18" font-weight="bold" fill="#f97316" font-family="serif">?</text>
                        <!-- Checkmark and cross -->
                        <circle cx="25" cy="64" r="5" fill="#4ade80"/>
                        <polyline points="22,64 24,66 28,62" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <circle cx="48" cy="64" r="5" fill="#f87171"/>
                        <line x1="45" y1="61" x2="51" y2="67" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        <line x1="51" y1="61" x2="45" y2="67" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>',
                ],
                [
                    'num' => 7, 'color' => 'pink',
                    'title' => "Metakognitiv strategiyalar",
                    'slug' => 'metakognitiv',
                    'points' => ["Metakognitsiya tushunchasi", "O'qishdan oldin – davomida – keyin", "O'z o'qishini nazorat qilish", "Refleksiya va baholash"],
                    'svg' => '<svg width="100%" height="96" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <!-- Head -->
                        <ellipse cx="42" cy="52" rx="20" ry="22" fill="#fce7f3" stroke="#ec4899" stroke-width="1.5"/>
                        <rect x="34" y="70" width="16" height="6" rx="2" fill="#fce7f3" stroke="#ec4899" stroke-width="1.2"/>
                        <!-- Inner brain waves -->
                        <path d="M33 46 Q37 41 42 46 Q47 41 51 46" stroke="#ec4899" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        <path d="M33 54 Q37 49 42 54 Q47 49 51 54" stroke="#ec4899" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        <!-- Thought bubble 1 -->
                        <circle cx="62" cy="38" r="3" fill="#fbcfe8"/>
                        <circle cx="70" cy="28" r="5" fill="#fbcfe8" stroke="#ec4899" stroke-width="1"/>
                        <!-- Thought bubble 2 - Nimani bilaman? -->
                        <rect x="76" y="10" width="38" height="16" rx="8" fill="#fdf2f8" stroke="#ec4899" stroke-width="1.2"/>
                        <text x="83" y="21" font-size="7" fill="#be185d" font-family="sans-serif">Nimani bilaman?</text>
                        <!-- Thought bubble 3 - Tushundim? -->
                        <rect x="78" y="32" width="32" height="16" rx="8" fill="#fdf2f8" stroke="#ec4899" stroke-width="1.2"/>
                        <text x="84" y="43" font-size="7" fill="#be185d" font-family="sans-serif">Tushundim?</text>
                        <!-- Thought bubble 4 -->
                        <rect x="73" y="54" width="42" height="16" rx="8" fill="#fdf2f8" stroke="#ec4899" stroke-width="1.2"/>
                        <text x="78" y="65" font-size="7" fill="#be185d" font-family="sans-serif">Nimani bilmadim?</text>
                        <!-- Connecting dots -->
                        <circle cx="74" cy="38" r="2" fill="#f9a8d4"/>
                        <circle cx="76" cy="47" r="2" fill="#f9a8d4"/>
                        <circle cx="73" cy="58" r="2" fill="#f9a8d4"/>
                    </svg>',
                ],
            ];

            $colorMap = [
                'indigo'  => ['badge' => 'bg-indigo-100 text-indigo-700',  'icon' => 'bg-indigo-50 text-indigo-500',  'btn' => 'border-indigo-200 text-indigo-700 hover:bg-indigo-50'],
                'blue'    => ['badge' => 'bg-blue-100 text-blue-700',      'icon' => 'bg-blue-50 text-blue-500',      'btn' => 'border-blue-200 text-blue-700 hover:bg-blue-50'],
                'cyan'    => ['badge' => 'bg-cyan-100 text-cyan-700',      'icon' => 'bg-cyan-50 text-cyan-500',      'btn' => 'border-cyan-200 text-cyan-700 hover:bg-cyan-50'],
                'violet'  => ['badge' => 'bg-violet-100 text-violet-700',  'icon' => 'bg-violet-50 text-violet-500',  'btn' => 'border-violet-200 text-violet-700 hover:bg-violet-50'],
                'emerald' => ['badge' => 'bg-emerald-100 text-emerald-700','icon' => 'bg-emerald-50 text-emerald-500','btn' => 'border-emerald-200 text-emerald-700 hover:bg-emerald-50'],
                'orange'  => ['badge' => 'bg-orange-100 text-orange-700',  'icon' => 'bg-orange-50 text-orange-500',  'btn' => 'border-orange-200 text-orange-700 hover:bg-orange-50'],
                'pink'    => ['badge' => 'bg-pink-100 text-pink-700',      'icon' => 'bg-pink-50 text-pink-500',      'btn' => 'border-pink-200 text-pink-700 hover:bg-pink-50'],
            ];

        @endphp

        {{-- Reusable card macro --}}
        @php
            $renderCard = function($card, $c) {
                return $card; // just a reference, rendered below
            };
        @endphp

        {{-- Row 1: cards 1-4 --}}
        <div class="grid grid-cols-2 gap-4 xl:grid-cols-4 mb-4">
            @foreach (array_slice($cards, 0, 4) as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-2">
                        <span class="inline-flex h-7 w-7 items-center justify-center rounded-full text-xs font-bold {{ $c['badge'] }}">{{ $card['num'] }}</span>
                    </div>
                    {{-- SVG illustration --}}
                    <div class="mb-3 w-full">{!! $card['svg'] !!}</div>
                    <h3 class="text-sm font-bold text-slate-800 leading-snug mb-3">{{ $card['title'] }}</h3>
                    <ul class="flex-1 space-y-1.5 mb-4">
                        @foreach ($card['points'] as $point)
                            <li class="flex items-start gap-1.5 text-xs text-slate-600">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-slate-400" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('nazariya.show', $card['slug']) }}"
                       class="inline-flex items-center gap-1 rounded-lg border px-3 py-1.5 text-xs font-semibold transition {{ $c['btn'] }}">
                        Batafsil o'rganish
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Row 2: cards 5-7 + info box --}}
        <div class="grid grid-cols-2 gap-4 xl:grid-cols-4">
            @foreach (array_slice($cards, 4, 3) as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-2">
                        <span class="inline-flex h-7 w-7 items-center justify-center rounded-full text-xs font-bold {{ $c['badge'] }}">{{ $card['num'] }}</span>
                    </div>
                    {{-- SVG illustration --}}
                    <div class="mb-3 w-full">{!! $card['svg'] !!}</div>
                    <h3 class="text-sm font-bold text-slate-800 leading-snug mb-3">{{ $card['title'] }}</h3>
                    <ul class="flex-1 space-y-1.5 mb-4">
                        @foreach ($card['points'] as $point)
                            <li class="flex items-start gap-1.5 text-xs text-slate-600">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-slate-400" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('nazariya.show', $card['slug']) }}"
                       class="inline-flex items-center gap-1 rounded-lg border px-3 py-1.5 text-xs font-semibold transition {{ $c['btn'] }}">
                        Batafsil o'rganish
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            @endforeach

            {{-- Info box --}}
            <div class="rounded-2xl border border-indigo-200 bg-gradient-to-br from-indigo-50 to-violet-50 p-4">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-indigo-100 text-indigo-600">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                    </span>
                    <h4 class="text-sm font-bold text-indigo-900">Nima uchun bu bo'lim muhim?</h4>
                </div>
                <ul class="space-y-2.5">
                    @foreach ([
                        "O'qish savodxonligining ilmiy asoslarini tushunsangiz",
                        "Darsda matn bilan ishlash ko'nikmalaringiz rivojlanadi",
                        "Xalqaro tadqiqotlar yondashuvini amaliyotga tatbiq etasiz",
                        "O'quvchilarda mustaqil fikrlash va tushunish ko'nikmalari shakllanadi",
                    ] as $reason)
                        <li class="flex items-start gap-2 text-xs text-indigo-800">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $reason }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Bottom quote bar --}}
        <div class="mt-6 flex flex-col gap-3 rounded-2xl bg-amber-50 border border-amber-200 px-6 py-4 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm font-medium text-amber-900">
                <span class="mr-2 text-amber-500">&#9650;</span>
                O'qish savodxonligi – bilim olishning kaliti, hayotda muvaffaqiyatga erishishning asosi.
            </p>
            <div class="text-right">
                <p class="text-xs text-amber-700 italic">"Kitob – aql charог'i, o'qish esa uni yoqadigan mash'aladir."</p>
                <p class="text-xs font-semibold text-amber-800">A. Navoiy</p>
            </div>
        </div>

    </div>{{-- /main --}}
</div>
@endsection
