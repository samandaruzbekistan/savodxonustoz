@extends('layouts.app')

@section('title', "O'qish savodxonligi nazariyasi")

@section('content')
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">

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
                    'img' => 'section_01.png',
                ],
                [
                    'num' => 2, 'color' => 'blue',
                    'title' => "PIRLS dasturida o'qish savodxonligi",
                    'slug' => 'pirls',
                    'points' => ["PIRLS maqsadi va mazmuni", "Matn turlari", "Savol turlari va darajalari", "Baholash yondashuvi"],
                    'img' => 'section_02.png',
                ],
                [
                    'num' => 3, 'color' => 'cyan',
                    'title' => "PISA va funksional o'qish savodxonligi",
                    'slug' => 'pisa',
                    'points' => ["PISA dasturining yondashuvi", "Funksional o'qish savodxonligi", "Hayotiy matnlar turlari", "Amaliy foydalanish"],
                    'img' => 'section_03.png',
                ],
                [
                    'num' => 4, 'color' => 'violet',
                    'title' => "Matnni tushunish nazariyasi",
                    'slug' => 'matn-tushunish',
                    'points' => ["Tushunish jarayonining bosqichlari", "O'qishdan oldin – davomida – keyin", "Savol turlari", "Tahlil va xulosa chiqarish"],
                    'img' => 'section_04.png',
                ],
                [
                    'num' => 5, 'color' => 'emerald',
                    'title' => "Ravon o'qish",
                    'slug' => 'ravon-oqish',
                    'points' => ["Ravon o'qish tushunchasi", "Aniqlik, tezlik, ifodalilik", "Rivojlantirish usullari", "Baholash mezonlari"],
                    'img' => 'section_05.png',
                ],
                [
                    'num' => 6, 'color' => 'orange',
                    'title' => "Tanqidiy o'qish",
                    'slug' => 'tanqidiy',
                    'points' => ["Tanqidiy o'qish tushunchasi", "Fakt va fikrni farqlash", "Dalil topish va baholash", "Muhokama va munosabat bildirish"],
                    'img' => 'section_06.png',
                ],
                [
                    'num' => 7, 'color' => 'pink',
                    'title' => "Metakognitiv strategiyalar",
                    'slug' => 'metakognitiv',
                    'points' => ["Metakognitsiya tushunchasi", "O'qishdan oldin – davomida – keyin", "O'z o'qishini nazorat qilish", "Refleksiya va baholash"],
                    'img' => 'section_07.png',
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

        {{-- Row 1: cards 1-4 --}}
        <div class="grid grid-cols-2 gap-4 xl:grid-cols-4 mb-4">
            @foreach (array_slice($cards, 0, 4) as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="flex flex-col overflow-hidden rounded-2xl bg-white p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative -mx-4 -mt-4 mb-3">
                        <img src="{{ asset('images/nazariya/'.$card['img']) }}" alt="{{ $card['title'] }}" loading="lazy" class="h-36 w-full object-cover">
                        <span class="absolute left-3 top-3 inline-flex h-7 w-7 items-center justify-center rounded-full text-xs font-bold shadow-sm {{ $c['badge'] }}">{{ $card['num'] }}</span>
                    </div>
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
                <div class="flex flex-col overflow-hidden rounded-2xl bg-white p-4 shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative -mx-4 -mt-4 mb-3">
                        <img src="{{ asset('images/nazariya/'.$card['img']) }}" alt="{{ $card['title'] }}" loading="lazy" class="h-36 w-full object-cover">
                        <span class="absolute left-3 top-3 inline-flex h-7 w-7 items-center justify-center rounded-full text-xs font-bold shadow-sm {{ $c['badge'] }}">{{ $card['num'] }}</span>
                    </div>
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
            <div class="rounded-2xl bg-gradient-to-br from-indigo-50 to-violet-50 p-4 shadow-sm">
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
