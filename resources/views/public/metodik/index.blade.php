@extends('layouts.app')
@section('title', "Metodik modul — Bo'lajak boshlang'ich sinf o'qituvchilari uchun")
@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.metodik._sidebar')

    <div class="min-w-0 flex-1">

        @php
            $imgUrl = fn (string $file) => asset('images/'.rawurlencode('metodik modul').'/'.rawurlencode($file));
        @endphp

        {{-- Hero banner --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-emerald-950 via-emerald-900 to-teal-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 flex items-center gap-6">
                <div class="max-w-xl flex-1">
                    <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="h-2 w-2 rounded-full bg-emerald-300 animate-pulse"></span>
                        Bo'lajak o'qituvchilar uchun
                    </span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Metodik modul</h1>
                    <p class="mt-3 leading-relaxed text-emerald-100">
                        Boshlang'ich sinf o'qituvchilarining o'qish savodxonligini rivojlantirish bo'yicha amaliy metodikalar, savol tuzish, baholash va lug'at ustida ishlash usullari.
                    </p>
                </div>
                <div class="hidden shrink-0 items-center justify-center rounded-2xl bg-white/95 p-4 shadow-xl md:flex">
                    <img src="{{ $imgUrl('bannerga.png') }}" alt="" class="h-40 w-56 object-contain">
                </div>
            </div>
        </div>

        @php
            $cards = [
                [
                    'num' => 1, 'color' => 'indigo',
                    'slug' => 'matn-ishlash',
                    'title' => 'Matn bilan ishlash metodikasi',
                    'desc' => "Matnni uch bosqichda o'qitish: oldin, jarayonida va keyin. Amaliy metodlar va namunalar.",
                    'points' => ["Uch bosqichda ishlash", "5 ta amaliy metod", "Darsda qo'llash tartibi", "Namunay topshiriq"],
                    'img' => 'Matn bilan ishlash metodikasi.png',
                ],
                [
                    'num' => 2, 'color' => 'violet',
                    'slug' => 'savol-tuzish',
                    'title' => 'Savol tuzish metodikasi',
                    'desc' => "O'quvchi tushunishini 5 turdagi savol orqali aniqlash va rivojlantirish usullari.",
                    'points' => ["5 ta savol turi", "Yaxshi savolning belgilari", "Amaliy metodlar", "O'qituvchi uchun tavsiya"],
                    'img' => 'Savol tuzish metodikasi.png',
                ],
                [
                    'num' => 3, 'color' => 'blue',
                    'slug' => 'pirls-topshiriq',
                    'title' => "PIRLS topshiriqlarini yaratish",
                    'desc' => "PIRLS tipidagi 4 darajali savol modeli asosida topshiriq yaratish va baholash metodikasi.",
                    'points' => ["4 darajali savol modeli", "Baholash mezonlari (rubrika)", "Namunay topshiriq", "Darsda qo'llash"],
                    'img' => 'PIRLS topshiriqlarini yaratish.png',
                ],
                [
                    'num' => 4, 'color' => 'emerald',
                    'slug' => 'javob-baholash',
                    'title' => "O'quvchi javobini baholash",
                    'desc' => "0–3 ballik rubrika asosida o'quvchi javoblarini adolatli va rivojlantiruvchi tarzda baholash.",
                    'points' => ["0–3 ballik baholash mezoni", "Rubrika yaratish", "Namunay topshiriq", "Adaptiv baholash"],
                    'img' => "O'quvchi javobini baholash.png",
                ],
                [
                    'num' => 5, 'color' => 'teal',
                    'slug' => 'ravon-rivojlantirish',
                    'title' => "Ravon o'qishni rivojlantirish",
                    'desc' => "O'quvchilarda ravon, ifodali va tushunib o'qish ko'nikmalarini shakllantirish metodlari.",
                    'points' => ["Ravon o'qish mezonlari", "Rivojlantirish mashqlari", "Kuzatish varaqlari", "Baholash usullari"],
                    'img' => "Ravon o'qishni rivojlantirish.png",
                    'soon' => true,
                ],
                [
                    'num' => 6, 'color' => 'orange',
                    'slug' => 'lugat-ishlash',
                    'title' => "Lug'at ustida ishlash",
                    'desc' => "O'quvchilarning so'z boyligini matn orqali rivojlantirish va yangi so'zlarni o'zlashtirishga yo'naltirish.",
                    'points' => ["Yangi so'z o'zlashtiruv usullari", "Kontekstdan mazmun aniqlash", "Lug'at topshiriqlari", "Amaliy mashqlar"],
                    'img' => "Lug'at ustida ishlash.png",
                    'soon' => true,
                ],
            ];

            $colorMap = [
                'indigo'  => ['badge' => 'bg-indigo-100 text-indigo-700',  'btn' => 'border-indigo-200 text-indigo-700 hover:bg-indigo-50',  'bg' => 'bg-indigo-50'],
                'violet'  => ['badge' => 'bg-violet-100 text-violet-700',  'btn' => 'border-violet-200 text-violet-700 hover:bg-violet-50',  'bg' => 'bg-violet-50'],
                'blue'    => ['badge' => 'bg-blue-100 text-blue-700',      'btn' => 'border-blue-200 text-blue-700 hover:bg-blue-50',      'bg' => 'bg-blue-50'],
                'emerald' => ['badge' => 'bg-emerald-100 text-emerald-700','btn' => 'border-emerald-200 text-emerald-700 hover:bg-emerald-50','bg' => 'bg-emerald-50'],
                'teal'    => ['badge' => 'bg-teal-100 text-teal-700',      'btn' => 'border-teal-200 text-teal-700 hover:bg-teal-50',      'bg' => 'bg-teal-50'],
                'orange'  => ['badge' => 'bg-orange-100 text-orange-700',  'btn' => 'border-orange-200 text-orange-700 hover:bg-orange-50',  'bg' => 'bg-orange-50'],
            ];
        @endphp

        <div class="mb-8 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($cards as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="relative flex h-28 items-center justify-center overflow-hidden {{ $c['bg'] }}">
                        <img src="{{ $imgUrl($card['img']) }}" alt="{{ $card['title'] }}" loading="lazy" class="h-24 w-24 object-contain">
                        <span class="absolute right-3 top-3 inline-flex h-7 w-7 items-center justify-center rounded-full text-xs font-bold shadow-sm {{ $c['badge'] }}">{{ $card['num'] }}</span>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <h3 class="mb-1.5 text-sm font-bold leading-snug text-slate-800">{{ $card['title'] }}</h3>
                        <p class="mb-3 text-xs leading-relaxed text-slate-500">{{ $card['desc'] }}</p>
                        <ul class="mb-4 flex-1 space-y-1.5">
                            @foreach ($card['points'] as $point)
                                <li class="flex items-start gap-1.5 text-xs text-slate-600">
                                    <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-slate-400" stroke="2.5" />
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                        @if (!empty($card['soon']))
                            <span class="inline-flex items-center gap-1.5 self-start rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-medium text-slate-400">
                                <x-icon name="dot" class="h-3.5 w-3.5" />
                                Tez orada
                            </span>
                        @else
                            <a href="{{ route('metodik.show', $card['slug']) }}"
                               class="inline-flex items-center gap-1 self-start rounded-lg border px-3 py-1.5 text-xs font-semibold transition {{ $c['btn'] }}">
                                Batafsil o'rganish
                                <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-emerald-950 via-emerald-900 to-teal-900 p-6 text-white shadow-sm">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="max-w-2xl">
                    <div class="mb-2 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-emerald-200">
                            <x-icon name="target" class="h-4.5 w-4.5" />
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-wide text-emerald-200">Metodik tayyorgarlik</span>
                    </div>
                    <p class="text-sm font-bold leading-relaxed text-white">Sifatli ta'lim va ongli savodxonlikning tayanchi.</p>
                    <p class="mt-1 text-xs leading-relaxed text-emerald-100">Har bir bo'limda nazariy izoh, amaliy metodlar, namunay topshiriqlar va dissertatsiya uchun ilmiy asoslar berilgan.</p>
                </div>
                <a href="{{ route('metodik.show', 'matn-ishlash') }}" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-emerald-900 transition-colors hover:bg-emerald-50">
                    Boshlash
                    <x-icon name="arrow-right" class="h-4 w-4" />
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
