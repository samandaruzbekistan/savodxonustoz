@extends('layouts.app')
@section('title', "PIRLS topshiriqlari konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.pirls-konstruktor._sidebar')

    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">PIRLS topshiriqlari konstruktori</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">
                Matn kiritishdan boshlab, savollar yaratish, javob kaliti va tayyor faylni yuklab olishgacha
                bo'lgan bosqichma-bosqich vosita. Har bir bosqich PIRLS metodologiyasiga mos ravishda quriladi.
            </p>
        </div>

        @php
            $cards = [
                [
                    'num' => 1, 'color' => 'blue',
                    'slug' => 'matn-yuklash',
                    'title' => 'Matn yuklash oynasi',
                    'desc' => "Badiiy yoki axborot matnini kiritish, sinf darajasi va o'qish maqsadini belgilash.",
                    'points' => ["Matn turi va sinf darajasi", "Moslik tekshiruvi", "Savollar sonini belgilash"],
                    'icon' => '<svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>',
                ],
                [
                    'num' => 2, 'color' => 'violet',
                    'slug' => 'literal-tushunish',
                    'title' => 'Literal tushunish savollari',
                    'desc' => "Matnda aniq ko'rsatilgan faktlarga asoslangan savollarni avtomatik yaratish.",
                    'points' => ["To'g'ridan-to'g'ri fakt savollari", "Matn parchasiga bog'liq savollar"],
                    'icon' => '<svg class="h-8 w-8 text-violet-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>',
                ],
                [
                    'num' => 3, 'color' => 'emerald',
                    'slug' => 'xulosa-chiqarish',
                    'title' => 'Xulosa chiqarish savollari',
                    'desc' => "Matn mazmunidan kelib chiqib xulosa chiqarishni talab qiluvchi savollar.",
                    'points' => ["Sabab-oqibat bog'lanishi", "Bilvosita ma'no aniqlash"],
                    'icon' => '<svg class="h-8 w-8 text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>',
                ],
                [
                    'num' => 4, 'color' => 'amber',
                    'slug' => 'talqin-qilish',
                    'title' => 'Talqin qilish savollari',
                    'desc' => "O'quvchining shaxsiy fikri va matnni izohlash qobiliyatini rivojlantiruvchi savollar.",
                    'points' => ["Muallif niyatini anglash", "Shaxsiy fikr bildirish"],
                    'icon' => '<svg class="h-8 w-8 text-amber-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>',
                ],
                [
                    'num' => 5, 'color' => 'rose',
                    'slug' => 'baholash-savollari',
                    'title' => 'Baholash savollari',
                    'desc' => "Matnni tanqidiy baholash va muallif pozitsiyasini tahlil qilish savollari.",
                    'points' => ["Tanqidiy fikrlash", "Muallif pozitsiyasini baholash"],
                    'icon' => '<svg class="h-8 w-8 text-rose-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>',
                ],
                [
                    'num' => 6, 'color' => 'teal',
                    'slug' => 'javob-kaliti',
                    'title' => 'Javob kaliti yaratish',
                    'desc' => "Har bir savol uchun to'g'ri javob namunasi va baholash mezonini shakllantirish.",
                    'points' => ["Namunaviy javoblar", "Baholash mezonlari"],
                    'icon' => '<svg class="h-8 w-8 text-teal-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.412-.07-.85.02-1.147.319l-6.591 6.591a2.25 2.25 0 01-3.182 0 2.25 2.25 0 010-3.182l6.591-6.591c.299-.297.39-.735.319-1.147a6 6 0 017.03-7.03z"/></svg>',
                ],
                [
                    'num' => 7, 'color' => 'indigo',
                    'slug' => 'yuklab-olish',
                    'title' => "Pdf, Word yuklab olish",
                    'desc' => "Tayyor topshiriqni PDF yoki Word formatida yuklab olish va chop etish.",
                    'points' => ["PDF eksport", "Word eksport"],
                    'icon' => '<svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>',
                ],
            ];

            $colorMap = [
                'blue'    => ['badge' => 'bg-blue-100 text-blue-700',       'btn' => 'border-blue-200 text-blue-700 hover:bg-blue-50',       'bg' => 'bg-blue-50'],
                'violet'  => ['badge' => 'bg-violet-100 text-violet-700',   'btn' => 'border-violet-200 text-violet-700 hover:bg-violet-50', 'bg' => 'bg-violet-50'],
                'emerald' => ['badge' => 'bg-emerald-100 text-emerald-700', 'btn' => 'border-emerald-200 text-emerald-700 hover:bg-emerald-50', 'bg' => 'bg-emerald-50'],
                'amber'   => ['badge' => 'bg-amber-100 text-amber-700',     'btn' => 'border-amber-200 text-amber-700 hover:bg-amber-50',    'bg' => 'bg-amber-50'],
                'rose'    => ['badge' => 'bg-rose-100 text-rose-700',       'btn' => 'border-rose-200 text-rose-700 hover:bg-rose-50',       'bg' => 'bg-rose-50'],
                'teal'    => ['badge' => 'bg-teal-100 text-teal-700',       'btn' => 'border-teal-200 text-teal-700 hover:bg-teal-50',       'bg' => 'bg-teal-50'],
                'indigo'  => ['badge' => 'bg-indigo-100 text-indigo-700',   'btn' => 'border-indigo-200 text-indigo-700 hover:bg-indigo-50', 'bg' => 'bg-indigo-50'],
            ];
        @endphp

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 mb-6">
            @foreach ($cards as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-5 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between mb-3">
                        <div class="grid h-12 w-12 place-items-center rounded-xl {{ $c['bg'] }}">{!! $card['icon'] !!}</div>
                        <span class="inline-flex h-7 w-7 items-center justify-center rounded-full text-xs font-bold {{ $c['badge'] }}">{{ $card['num'] }}</span>
                    </div>
                    <h3 class="text-sm font-bold text-slate-800 leading-snug mb-1.5">{{ $card['title'] }}</h3>
                    <p class="text-xs text-slate-500 leading-relaxed mb-3">{{ $card['desc'] }}</p>
                    <ul class="flex-1 space-y-1.5 mb-4">
                        @foreach ($card['points'] as $point)
                            <li class="flex items-start gap-1.5 text-xs text-slate-600">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-slate-400" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                    @if (!empty($card['soon']))
                        <span class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-medium text-slate-400">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Tez orada
                        </span>
                    @else
                        <a href="{{ route('pirls-konstruktor.show', $card['slug']) }}"
                           class="inline-flex items-center gap-1 rounded-lg border px-3 py-1.5 text-xs font-semibold transition {{ $c['btn'] }}">
                            Boshlash
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>

        <div class="rounded-2xl border border-blue-200 bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-bold text-blue-900 mb-1">Matndan tayyor PIRLS topshirig'igacha — bir necha bosqichda.</p>
                    <p class="text-xs text-blue-700">Konstruktor bo'lajak o'qituvchiga sifatli baholash topshiriqlarini mustaqil yarata olish ko'nikmasini beradi.</p>
                </div>
                <a href="{{ route('pirls-konstruktor.show', 'matn-yuklash') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                    Boshlash
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
