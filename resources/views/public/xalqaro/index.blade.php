@extends('layouts.app')

@section('title', "Xalqaro tajriba — Dunyoning yetakchi ta'lim tizimlari")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.xalqaro._sidebar')

    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="mb-8 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 40%, #0284c7 100%);">
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
                        <span class="h-2 w-2 rounded-full bg-cyan-300 animate-pulse"></span>
                        <span class="text-xs font-semibold text-white/90">Global ta'lim tajribasi</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white leading-tight">Xalqaro tajriba</h1>
                    <p class="mt-3 text-blue-100 leading-relaxed max-w-xl text-sm">
                        Qiziqarli davlatlarning ilmiy-amaliy ta'lim bo'yicha o'rganilgan tajribalarni
                        o'rganish va O'zbekiston sharoitiga moslashtirish.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                            🌍 7 ta davlat tajribasi
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                            📚 Amaliy tavsiyalar
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                            🇺🇿 O'zbekiston uchun xulasalar
                        </span>
                    </div>
                </div>
                <div class="hidden md:flex shrink-0 items-center justify-center">
                    <div class="relative">
                        <div class="h-32 w-32 rounded-full bg-white/10 border-2 border-white/20 flex items-center justify-center">
                            <div class="h-24 w-24 rounded-full bg-white/15 border border-white/25 flex items-center justify-center">
                                <svg class="h-14 w-14 text-white" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253M3.284 14.253A8.959 8.959 0 013 12c0-.778.099-1.533.284-2.253"/>
                                </svg>
                            </div>
                        </div>
                        {{-- Floating badges --}}
                        <span class="absolute -top-2 -right-3 text-2xl">🇫🇮</span>
                        <span class="absolute top-6 -right-8 text-xl">🇸🇬</span>
                        <span class="absolute bottom-2 -right-5 text-2xl">🇯🇵</span>
                        <span class="absolute -top-2 -left-5 text-2xl">🇺🇸</span>
                        <span class="absolute bottom-2 -left-6 text-xl">🇦🇺</span>
                    </div>
                </div>
            </div>
            {{-- Bottom wave --}}
            <div class="absolute bottom-0 left-0 right-0 h-8 bg-slate-50" style="clip-path: ellipse(60% 100% at 50% 100%); opacity: 0.15;"></div>
        </div>

        @php
            $countries = [
                ['slug' => 'finlandiya',      'flag' => '🇫🇮', 'name' => 'Finlandiya',      'img' => 'finlandiya.jpeg',    'color' => 'from-blue-500 to-cyan-400',   'desc' => "Tenglik, kitobxonlik madaniyati va maktab-kutubxona hamkorligi asosidagi ta'lim tizimi."],
                ['slug' => 'singapur',        'flag' => '🇸🇬', 'name' => 'Singapur',        'img' => 'singapur.webp',      'color' => 'from-red-500 to-pink-400',    'desc' => "Tizimli til ta'limi, integrativ savodxonlik va savol-javob strategiyalari."],
                ['slug' => 'buyuk-britaniya', 'flag' => '🇬🇧', 'name' => 'Buyuk Britaniya', 'img' => 'buyukbritaniya.jpg', 'color' => 'from-indigo-600 to-blue-400', 'desc' => "Phonics, reading for pleasure va dalillarga asoslangan o'qitish metodikasi."],
                ['slug' => 'aqsh',            'flag' => '🇺🇸', 'name' => 'AQSH',            'img' => 'aqsh.jpeg',          'color' => 'from-blue-700 to-red-500',    'desc' => "Science of Reading: fonemik anglash, phonics, ravon o'qish, lug'at va tushunish."],
                ['slug' => 'avstraliya',      'flag' => '🇦🇺', 'name' => 'Avstraliya',      'img' => 'avstraliya.jpg',     'color' => 'from-yellow-500 to-orange-400', 'desc' => "Evidence-based teaching, explicit instruction va formative assessment."],
                ['slug' => 'janubiy-koreya',  'flag' => '🇰🇷', 'name' => 'Janubiy Koreya',  'img' => 'koreya.jpg',         'color' => 'from-sky-500 to-blue-400',   'desc' => "Raqamli transformatsiya, AI darsliklar va individual o'qish yo'li tizimi."],
                ['slug' => 'yaponiya',        'flag' => '🇯🇵', 'name' => 'Yaponiya',        'img' => 'yaponiya.jpg',       'color' => 'from-rose-500 to-red-400',   'desc' => "Matnni chuqur tahlil qilish, guruhli muhokama va refleksiv o'qish madaniyati."],
            ];
        @endphp

        {{-- Section heading --}}
        <div class="flex items-center gap-3 mb-5">
            <h2 class="text-base font-bold text-slate-800">Davlatlar tajribasi</h2>
            <div class="flex-1 h-px bg-slate-200"></div>
            <span class="text-xs text-slate-500 font-medium">{{ count($countries) }} ta davlat</span>
        </div>

        {{-- Country cards grid: 3 columns --}}
        <div class="grid grid-cols-3 gap-5 mb-5">
            @foreach (array_slice($countries, 0, 6) as $country)
                <a href="{{ route('xalqaro.show', $country['slug']) }}"
                   class="group flex flex-col rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 overflow-hidden">
                    {{-- Image --}}
                    <div class="relative h-44 overflow-hidden bg-slate-100">
                        <img src="{{ asset('images/' . $country['img']) }}"
                             alt="{{ $country['name'] }}"
                             class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                             onerror="this.style.display='none'">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        {{-- Flag badge --}}
                        <div class="absolute bottom-3 left-3 flex items-center gap-2">
                            <span class="text-2xl leading-none drop-shadow-lg">{{ $country['flag'] }}</span>
                            <span class="rounded-md bg-black/40 px-2 py-0.5 text-xs font-bold text-white backdrop-blur-sm">{{ $country['name'] }}</span>
                        </div>
                    </div>
                    {{-- Body --}}
                    <div class="flex flex-col flex-1 p-4">
                        <p class="text-xs text-slate-600 leading-relaxed flex-1 mb-3">{{ $country['desc'] }}</p>
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                                Batafsil o'qish
                                <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </span>
                            <span class="h-6 w-6 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-blue-100 transition-colors">
                                <svg class="h-3 w-3 text-blue-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        {{-- Last row: Yaponiya + Xulasalar --}}
        <div class="grid grid-cols-3 gap-5 mb-8">
            {{-- Yaponiya card --}}
            @php $last = $countries[6]; @endphp
            <a href="{{ route('xalqaro.show', $last['slug']) }}"
               class="group flex flex-col rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 overflow-hidden">
                <div class="relative h-44 overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/' . $last['img']) }}"
                         alt="{{ $last['name'] }}"
                         class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                         onerror="this.style.display='none'">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                    <div class="absolute bottom-3 left-3 flex items-center gap-2">
                        <span class="text-2xl leading-none drop-shadow-lg">{{ $last['flag'] }}</span>
                        <span class="rounded-md bg-black/40 px-2 py-0.5 text-xs font-bold text-white backdrop-blur-sm">{{ $last['name'] }}</span>
                    </div>
                </div>
                <div class="flex flex-col flex-1 p-4">
                    <p class="text-xs text-slate-600 leading-relaxed flex-1 mb-3">{{ $last['desc'] }}</p>
                    <span class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600 group-hover:text-blue-700">
                        Batafsil o'qish
                        <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </span>
                </div>
            </a>

            {{-- Xulasalar card (spans 2 columns) --}}
            <a href="{{ route('xalqaro.show', 'xulasalar') }}"
               class="col-span-2 group flex flex-col rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200"
               style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #0284c7 100%);">
                <div class="flex flex-col flex-1 p-6 justify-between relative overflow-hidden">
                    {{-- Background pattern --}}
                    <div class="absolute inset-0 opacity-5">
                        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <circle cx="2" cy="2" r="1.5" fill="white"/>
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#dots)"/>
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-white/20 border border-white/30">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-white leading-snug mb-3">
                            Xalqaro tajribadan<br>O'zbekiston uchun xulasalar
                        </h3>
                        <div class="grid grid-cols-2 gap-2">
                            @foreach ([
                                ['flag' => '🇫🇮', 'text' => "Finlandiya: o'quvchi markazida"],
                                ['flag' => '🇸🇬', 'text' => "Singapur: yuksak standartlar"],
                                ['flag' => '🇯🇵', 'text' => "Yaponiya: jamoaviy mas'uliyat"],
                                ['flag' => '🇺🇸', 'text' => "AQSH: Science of Reading"],
                            ] as $tip)
                                <div class="flex items-center gap-2 rounded-lg bg-white/10 px-3 py-2">
                                    <span class="text-base leading-none">{{ $tip['flag'] }}</span>
                                    <span class="text-xs font-medium text-blue-50">{{ $tip['text'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="relative mt-4">
                        <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-blue-200 group-hover:text-white transition-colors">
                            To'liq xulasalarni ko'rish
                            <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
        </div>

        {{-- Bottom stats row --}}
        <div class="grid grid-cols-2 gap-4 xl:grid-cols-4">
            @foreach ([
                [
                    'icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253M3.284 14.253A8.959 8.959 0 013 12c0-.778.099-1.533.284-2.253',
                    'bg' => 'bg-blue-100', 'icon_color' => 'text-blue-600',
                    'title' => 'Global tajribalar',
                    'desc' => "Dunyoning yetakchi davlatlari tajribasi",
                    'stat' => '7 davlat', 'stat_color' => 'text-blue-600',
                ],
                [
                    'icon' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z',
                    'bg' => 'bg-emerald-100', 'icon_color' => 'text-emerald-600',
                    'title' => 'Amaliy yechimlar',
                    'desc' => "Sinfxonada qo'llash mumkin usullar",
                    'stat' => '30+ usul', 'stat_color' => 'text-emerald-600',
                ],
                [
                    'icon' => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z',
                    'bg' => 'bg-violet-100', 'icon_color' => 'text-violet-600',
                    'title' => 'Dolzarb topshiriqlar',
                    'desc' => "Xalqaro tajribadan ilhom topshiriqlar",
                    'stat' => '50+ topshiriq', 'stat_color' => 'text-violet-600',
                ],
                [
                    'icon' => 'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18',
                    'bg' => 'bg-amber-100', 'icon_color' => 'text-amber-600',
                    'title' => "O'zbekiston uchun",
                    'desc' => "Mahalliy sharoitga moslashtirilgan",
                    'stat' => "Yangi bo'lim", 'stat_color' => 'text-amber-600',
                ],
            ] as $stat)
                <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4 hover:border-slate-300 transition-colors">
                    <div class="grid h-10 w-10 shrink-0 place-items-center rounded-xl {{ $stat['bg'] }}">
                        <svg class="h-5 w-5 {{ $stat['icon_color'] }}" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $stat['icon'] }}"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-bold text-slate-800 truncate">{{ $stat['title'] }}</p>
                        <p class="text-xs text-slate-500 leading-relaxed mt-0.5">{{ $stat['desc'] }}</p>
                        <span class="mt-1.5 inline-block text-xs font-semibold {{ $stat['stat_color'] }}">{{ $stat['stat'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
