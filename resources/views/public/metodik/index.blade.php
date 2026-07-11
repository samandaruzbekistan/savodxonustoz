@extends('layouts.app')
@section('title', "Metodik modul — Bo'lajak boshlang'ich sinf o'qituvchilari uchun")
@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.metodik._sidebar')

    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Bo'lajak boshlang'ich sinf o'qituvchilari uchun metodik modul</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">
                Ushbu bo'limda boshlang'ich sinf o'qituvchilarining o'qish savodxonligini rivojlantirish bo'yicha amaliy metodikalar, savol tuzish, baholash va lug'at ustida ishlash usullari yoritiladi.
            </p>
        </div>

        @php
            $cards = [
                [
                    'num' => 1, 'color' => 'indigo',
                    'slug' => 'matn-ishlash',
                    'title' => 'Matn bilan ishlash metodikasi',
                    'desc' => "Matnni uch bosqichda o'qitish: oldin, jarayonida va keyin. Amaliy metodlar va namunalar.",
                    'points' => ["Uch bosqichda ishlash", "5 ta amaliy metod", "Darsda qo'llash tartibi", "Namunay topshiriq"],
                    'icon' => '<svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>',
                ],
                [
                    'num' => 2, 'color' => 'violet',
                    'slug' => 'savol-tuzish',
                    'title' => 'Savol tuzish metodikasi',
                    'desc' => "O'quvchi tushunishini 5 turdagi savol orqali aniqlash va rivojlantirish usullari.",
                    'points' => ["5 ta savol turi", "Yaxshi savolning belgilari", "Amaliy metodlar", "O'qituvchi uchun tavsiya"],
                    'icon' => '<svg class="h-8 w-8 text-violet-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>',
                ],
                [
                    'num' => 3, 'color' => 'blue',
                    'slug' => 'pirls-topshiriq',
                    'title' => "PIRLS topshiriqlarini yaratish",
                    'desc' => "PIRLS tipidagi 4 darajali savol modeli asosida topshiriq yaratish va baholash metodikasi.",
                    'points' => ["4 darajali savol modeli", "Baholash mezonlari (rubrika)", "Namunay topshiriq", "Darsda qo'llash"],
                    'icon' => '<svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>',
                ],
                [
                    'num' => 4, 'color' => 'emerald',
                    'slug' => 'javob-baholash',
                    'title' => "O'quvchi javobini baholash",
                    'desc' => "0–3 ballik rubrika asosida o'quvchi javoblarini adolatli va rivojlantiruvchi tarzda baholash.",
                    'points' => ["0–3 ballik baholash mezoni", "Rubrika yaratish", "Namunay topshiriq", "Adaptiv baholash"],
                    'icon' => '<svg class="h-8 w-8 text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>',
                ],
                [
                    'num' => 5, 'color' => 'teal',
                    'slug' => 'ravon-rivojlantirish',
                    'title' => "Ravon o'qishni rivojlantirish",
                    'desc' => "O'quvchilarda ravon, ifodali va tushunib o'qish ko'nikmalarini shakllantirish metodlari.",
                    'points' => ["Ravon o'qish mezonlari", "Rivojlantirish mashqlari", "Kuzatish varaqlari", "Baholash usullari"],
                    'icon' => '<svg class="h-8 w-8 text-teal-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>',
                    'soon' => true,
                ],
                [
                    'num' => 6, 'color' => 'orange',
                    'slug' => 'lugat-ishlash',
                    'title' => "Lug'at ustida ishlash",
                    'desc' => "O'quvchilarning so'z boyligini matn orqali rivojlantirish va yangi so'zlarni o'zlashtirishga yo'naltirish.",
                    'points' => ["Yangi so'z o'zlashtiruv usullari", "Kontekstdan mazmun aniqlash", "Lug'at topshiriqlari", "Amaliy mashqlar"],
                    'icon' => '<svg class="h-8 w-8 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802"/></svg>',
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
                        <a href="{{ route('metodik.show', $card['slug']) }}"
                           class="inline-flex items-center gap-1 rounded-lg border px-3 py-1.5 text-xs font-semibold transition {{ $c['btn'] }}">
                            Batafsil o'rganish
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>

        <div class="rounded-2xl border border-emerald-200 bg-gradient-to-r from-emerald-50 to-teal-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-bold text-emerald-900 mb-1">Metodik tayyorgarlik — sifatli ta'lim va ongli savodxonlikning tayanchi.</p>
                    <p class="text-xs text-emerald-700">Har bir bo'limda nazariy izoh, amaliy metodlar, namunay topshiriqlar va dissertatsiya uchun ilmiy asoslar berilgan.</p>
                </div>
                <a href="{{ route('metodik.show', 'matn-ishlash') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-emerald-700 transition-colors">
                    Boshlash
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
