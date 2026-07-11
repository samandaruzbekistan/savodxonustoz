@extends('layouts.app')

@section('title', "Video darslar va mikrotreninglar — O'qish savodxonligi")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.video-darslar._sidebar')

    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="mb-8 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #4c1d95 0%, #6d28d9 35%, #4f46e5 70%, #2563eb 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="circles" width="32" height="32" patternUnits="userSpaceOnUse">
                            <circle cx="16" cy="16" r="12" fill="none" stroke="white" stroke-width="1"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#circles)"/>
                </svg>
            </div>
            <div class="relative px-8 py-8 flex gap-6 items-center">
                <div class="flex-1 min-w-0">
                    <div class="inline-flex items-center gap-2 rounded-full bg-white/20 px-3 py-1 mb-4">
                        <span class="h-2 w-2 rounded-full bg-pink-300 animate-pulse"></span>
                        <span class="text-xs font-semibold text-white/90">O'qish savodxonligi</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white leading-tight">
                        Video darslar va<br>mikrotreninglar
                    </h1>
                    <p class="mt-3 text-violet-100 leading-relaxed max-w-xl text-sm">
                        O'qish savodxonligi bo'yicha amaliy video darslar, o'qituvchilarga
                        yo'naltirilgan mikrotreninglar va savodxonlikni oshirish bo'yicha maslahatlar.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                            🎬 12 ta video
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                            🎯 Amaliy ko'nikmalar
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                            📚 5 ta mavzu
                        </span>
                    </div>
                </div>
                <div class="hidden md:flex shrink-0 items-center justify-center">
                    <div class="relative h-32 w-32">
                        <div class="absolute inset-0 rounded-2xl bg-white/10 border-2 border-white/20 flex items-center justify-center">
                            <div class="h-16 w-16 rounded-full bg-white/20 flex items-center justify-center border border-white/30">
                                <svg class="h-8 w-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="absolute -top-2 -right-2 h-7 w-7 rounded-full bg-pink-500 border-2 border-white flex items-center justify-center text-xs text-white font-bold">12</div>
                    </div>
                </div>
            </div>
        </div>

        @php
            $sections = [
                [
                    'id'    => 'asoslar',
                    'label' => "O'qish savodxonligi asoslari",
                    'color' => 'text-blue-700',
                    'bg'    => 'bg-blue-50',
                    'dot'   => 'bg-blue-500',
                    'videos' => [
                        ['num' => 1, 'type' => 'youtube', 'id' => 'R2PJHB81OHg',
                         'title' => "Matnni qanday tahlil qilish kerak?",
                         'desc'  => "O'quvchilarga matn tahlilini o'rgatishning asosiy bosqichlari va samarali usullari.",
                         'dur'   => '06:15', 'views' => 1240],
                        ['num' => 2, 'type' => 'youtube', 'id' => 'lTo-m7Ud6UA',
                         'title' => "O'quvchida xulosa chiqarish ko'nikmasini shakllantirish",
                         'desc'  => "Kitobxonlikda maqsadli xulosa chiqarish va muhokama yuritish metodikasi.",
                         'dur'   => '07:43', 'views' => 980],
                        ['num' => 3, 'type' => 'youtube', 'id' => 'qGfnc4q-jTo',
                         'title' => "Lug'at boyligini oshirish strategiyalari",
                         'desc'  => "So'z boyligini rivojlantirish va kontekst orqali ma'no anglash usullari.",
                         'dur'   => '06:48', 'views' => 1120],
                    ],
                ],
                [
                    'id'    => 'fonetik',
                    'label' => 'Fonetik usullar',
                    'color' => 'text-rose-700',
                    'bg'    => 'bg-rose-50',
                    'dot'   => 'bg-rose-500',
                    'videos' => [
                        ['num' => 4, 'type' => 'youtube', 'id' => 'IcIHPdDhSXU',
                         'title' => "Fonetik usullar: nazariya va sinfda qo'llash",
                         'desc'  => "Tovush-harf munosabatini o'rgatishda phonics usulining amaliy tatbiq etilishi.",
                         'dur'   => '11:30', 'views' => 643],
                        ['num' => 5, 'type' => 'facebook', 'id' => '1255572873411989',
                         'url'   => 'https://www.facebook.com/100026621564775/videos/sehrli-soz-1-qism2-sinfoqish-savodxonligi/1255572873411989/',
                         'title' => "Sehrli so'z: 1-qism (2-sinf, o'qish savodxonligi)",
                         'desc'  => "Sinfda 'sehrli so'z' usulini qo'llash orqali o'qish savodxonligini rivojlantirish.",
                         'dur'   => '04:30', 'views' => 2100],
                    ],
                ],
                [
                    'id'    => 'pirls',
                    'label' => 'PIRLS savollari',
                    'color' => 'text-amber-700',
                    'bg'    => 'bg-amber-50',
                    'dot'   => 'bg-amber-500',
                    'videos' => [
                        ['num' => 6, 'type' => 'youtube', 'id' => 'mZdYpsoXz1g',
                         'title' => "PIRLS savol turlarini qanday baholash kerak?",
                         'desc'  => "PIRLS xalqaro baholash savollari bilan ishlashning samarali strategiyalari.",
                         'dur'   => '03:58', 'views' => 856],
                        ['num' => 7, 'type' => 'youtube', 'id' => 'SUpNlfP1wHw',
                         'title' => "PIRLS: o'quvchi javoblarini tahlil qilish",
                         'desc'  => "Xalqaro standartdagi ochiq va yopiq savollar asosida baholash mezoni.",
                         'dur'   => '05:10', 'views' => 712],
                    ],
                ],
                [
                    'id'    => 'baholash',
                    'label' => 'Baholash metodlari',
                    'color' => 'text-emerald-700',
                    'bg'    => 'bg-emerald-50',
                    'dot'   => 'bg-emerald-500',
                    'videos' => [
                        ['num' => 8, 'type' => 'youtube', 'id' => 'r4h0z0wS_UU',
                         'title' => "Ravon o'qishni rivojlantirish bo'yicha 5 ta usul",
                         'desc'  => "Darsda o'qish tezligi va tushunishni bir vaqtda rivojlantirish metodlari.",
                         'dur'   => '08:22', 'views' => 1530],
                        ['num' => 9, 'type' => 'youtube', 'id' => 'FZsmPfQX6Gc',
                         'title' => "Formativ baholash: o'qish jarayonida kuzatish",
                         'desc'  => "Dars davomida o'quvchi progress-ini real vaqtda kuzatish va qayd etish.",
                         'dur'   => '09:05', 'views' => 1890],
                        ['num' => 10, 'type' => 'youtube', 'id' => 'oH2TmwLXVos',
                         'title' => "Sinfda raqamli savodxonlik: maktab tajribasi",
                         'desc'  => "Raqamli vositalar yordamida o'qish savodxonligini oshirish tajribasi.",
                         'dur'   => '10:20', 'views' => 1345],
                    ],
                ],
                [
                    'id'    => 'metodik',
                    'label' => 'Dars metodikasi',
                    'color' => 'text-violet-700',
                    'bg'    => 'bg-violet-50',
                    'dot'   => 'bg-violet-500',
                    'videos' => [
                        ['num' => 11, 'type' => 'youtube', 'id' => 'F1p-Yp92QB0',
                         'title' => "Metakognitiv o'qish strategiyalari",
                         'desc'  => "O'quvchiga o'z o'qish jarayonini nazorat qilishni o'rgatish usullari.",
                         'dur'   => '07:12', 'views' => 895],
                        ['num' => 12, 'type' => 'youtube', 'id' => 'hVL5PZyK2Ec',
                         'title' => "Guruhli o'qish: hamkorlikda o'rganish",
                         'desc'  => "Kichik guruhlarda matn ustida ishlash va fikr almashish usullari.",
                         'dur'   => '05:55', 'views' => 778],
                    ],
                ],
            ];
        @endphp

        {{-- All anchor + section loop --}}
        <div id="all" class="space-y-10">
            @foreach ($sections as $section)
                <section id="{{ $section['id'] }}">
                    {{-- Section heading --}}
                    <div class="flex items-center gap-3 mb-5">
                        <span class="h-3 w-3 rounded-full {{ $section['dot'] }} shrink-0"></span>
                        <h2 class="text-base font-bold {{ $section['color'] }}">{{ $section['label'] }}</h2>
                        <div class="flex-1 h-px bg-slate-200"></div>
                        <span class="text-xs text-slate-400 font-medium">{{ count($section['videos']) }} ta video</span>
                    </div>

                    {{-- Video cards --}}
                    <div class="grid grid-cols-3 gap-5">
                        @foreach ($section['videos'] as $v)
                            @php
                                $href   = $v['type'] === 'facebook'
                                    ? $v['url']
                                    : 'https://www.youtube.com/watch?v=' . $v['id'];
                                $thumb  = $v['type'] === 'youtube'
                                    ? 'https://img.youtube.com/vi/' . $v['id'] . '/hqdefault.jpg'
                                    : null;
                            @endphp
                            <a href="{{ $href }}" target="_blank" rel="noopener noreferrer"
                               class="group flex flex-col rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 overflow-hidden">

                                {{-- Thumbnail --}}
                                <div class="relative h-44 overflow-hidden bg-slate-100">
                                    @if ($thumb)
                                        <img src="{{ $thumb }}"
                                             alt="{{ $v['title'] }}"
                                             class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                             loading="lazy"
                                             onerror="this.parentElement.classList.add('thumbnail-fallback'); this.remove();">
                                    @endif

                                    {{-- Facebook fallback / no-thumb placeholder --}}
                                    @if ($v['type'] === 'facebook')
                                        <div class="absolute inset-0 flex flex-col items-center justify-center"
                                             style="background: linear-gradient(135deg, #1877f2 0%, #0c5ec7 100%);">
                                            <svg class="h-10 w-10 text-white/60 mb-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                            <span class="text-xs font-semibold text-white/80">Facebook Video</span>
                                        </div>
                                    @endif

                                    {{-- Overlay --}}
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>

                                    {{-- Number badge --}}
                                    <div class="absolute top-3 left-3 h-6 w-6 rounded-full bg-white font-bold text-xs text-slate-800 flex items-center justify-center shadow-sm">
                                        {{ $v['num'] }}
                                    </div>

                                    {{-- Duration badge --}}
                                    <div class="absolute top-3 right-3 rounded-md bg-black/60 px-2 py-0.5 text-xs font-semibold text-white backdrop-blur-sm">
                                        {{ $v['dur'] }}
                                    </div>

                                    {{-- Play button --}}
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="h-12 w-12 rounded-full bg-white/90 flex items-center justify-center shadow-lg opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-200">
                                            <svg class="h-5 w-5 text-slate-800 ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z"/>
                                            </svg>
                                        </div>
                                    </div>

                                    {{-- Platform badge --}}
                                    @if ($v['type'] === 'facebook')
                                        <div class="absolute bottom-3 right-3">
                                            <span class="rounded-md bg-[#1877f2] px-2 py-0.5 text-xs font-semibold text-white">Facebook</span>
                                        </div>
                                    @else
                                        <div class="absolute bottom-3 right-3">
                                            <span class="rounded-md bg-[#ff0000] px-2 py-0.5 text-xs font-semibold text-white">YouTube</span>
                                        </div>
                                    @endif
                                </div>

                                {{-- Body --}}
                                <div class="flex flex-col flex-1 p-4">
                                    <h3 class="text-sm font-bold text-slate-800 leading-snug mb-2 line-clamp-2">{{ $v['title'] }}</h3>
                                    <p class="text-xs text-slate-500 leading-relaxed flex-1 mb-3 line-clamp-2">{{ $v['desc'] }}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="inline-flex items-center gap-1 text-xs font-semibold text-violet-600 group-hover:text-violet-700">
                                            Ko'rish
                                            <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                            </svg>
                                        </span>
                                        <span class="inline-flex items-center gap-1 text-xs text-slate-400">
                                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                            {{ number_format($v['views']) }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>

        {{-- Bottom CTA --}}
        <div class="mt-10 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #4c1d95 0%, #4f46e5 60%, #2563eb 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="cta-dots" width="24" height="24" patternUnits="userSpaceOnUse">
                            <circle cx="3" cy="3" r="2" fill="white"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#cta-dots)"/>
                </svg>
            </div>
            <div class="relative px-8 py-6 flex items-center gap-6">
                <div class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-white/20 border border-white/30">
                    <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="text-base font-bold text-white">Muntazam o'rganing, amaliyot qiling — natijangizni to'ldiring!</h3>
                    <p class="mt-1 text-sm text-violet-200">Har bir video tomosha qilgach, o'z sinfingizda qo'llab ko'ring va tajribangizni ulashing.</p>
                </div>
                <a href="{{ route('contact') }}"
                   class="shrink-0 rounded-xl bg-white px-5 py-2.5 text-sm font-semibold text-violet-700 hover:bg-violet-50 transition-colors shadow-sm">
                    Fikr bildirish →
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
