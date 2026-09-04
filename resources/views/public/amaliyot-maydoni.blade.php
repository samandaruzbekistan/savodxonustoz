@extends('layouts.app')

@section('title', "Amaliyot maydoni — " . config('app.name'))

@section('content')

{{-- ══════════════════════ HERO ══════════════════════ --}}
<section class="relative mb-10 overflow-hidden rounded-[28px] bg-gradient-to-br from-indigo-700 via-indigo-600 to-violet-700 px-6 py-10 text-white sm:px-10 sm:py-12 lg:py-14">
    <div class="pointer-events-none absolute inset-0 text-white opacity-10">
        <x-decor.dots id="am-dots" />
    </div>
    <div class="su-blob pointer-events-none absolute -left-16 -top-16 h-64 w-64 rounded-full bg-white/10 blur-3xl"></div>
    <div class="su-blob su-delay-2 pointer-events-none absolute -bottom-20 right-10 h-72 w-72 rounded-full bg-fuchsia-400/20 blur-3xl"></div>

    <div class="relative grid gap-10 lg:grid-cols-[1.15fr_0.95fr] lg:items-center">
        {{-- Text column --}}
        <div class="su-reveal" data-reveal="left">
            <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3.5 py-1.5 text-xs font-semibold uppercase tracking-wider ring-1 ring-inset ring-white/20 backdrop-blur">
                <x-icon name="sparkle" class="h-4 w-4" /> Talabalar uchun
            </span>

            <h1 class="mt-4 text-3xl font-extrabold leading-tight tracking-tight sm:text-4xl lg:text-[2.6rem]">
                Talabalar uchun amaliyot maydoni
            </h1>

            <p class="mt-3 max-w-xl text-[15px] leading-relaxed text-indigo-100">
                Kelajakdagi boshlang'ich sinf o'qituvchilari uchun dars ishlanmasi, PPKS savollar, metodik topshiriqlar, refleksiya shakllari amaliy ko'nikmalarni rivojlantiradi.
            </p>

            {{-- Feature badges --}}
            <div class="mt-7 grid grid-cols-1 gap-3 sm:grid-cols-3 sm:max-w-xl">
                @foreach ([
                    ['icon' => 'target', 'title' => 'Amaliy tajriba', 'sub' => 'Haqiqiy dars stsenariylari'],
                    ['icon' => 'cap', 'title' => "Metodik qo'llab-quvvatlash", 'sub' => 'Tajribali ustozlar tavsiyalari'],
                    ['icon' => 'chart', 'title' => 'Rivojlanish va natija', 'sub' => "O'z o'sishingizni kuzating"],
                ] as $badge)
                    <div class="flex items-start gap-2.5 rounded-2xl bg-white/10 p-3 ring-1 ring-inset ring-white/10 backdrop-blur">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-xl bg-white/15">
                            <x-icon :name="$badge['icon']" class="h-4 w-4 text-white" stroke="2" />
                        </span>
                        <span class="min-w-0">
                            <span class="block text-xs font-bold leading-tight text-white">{{ $badge['title'] }}</span>
                            <span class="block text-[11px] leading-snug text-indigo-100">{{ $badge['sub'] }}</span>
                        </span>
                    </div>
                @endforeach
            </div>

            {{-- Stats --}}
            <div class="mt-7 flex flex-wrap gap-x-8 gap-y-3 border-t border-white/15 pt-6">
                @foreach ([
                    ['to' => 120, 'suffix' => '+', 'label' => 'Dars ishlanmasi namunasi'],
                    ['to' => 48, 'suffix' => '', 'label' => "PPKS savollar to'plami"],
                    ['to' => 500, 'suffix' => '+', 'label' => 'Faol talaba'],
                ] as $stat)
                    <div>
                        <p class="text-2xl font-extrabold text-white">
                            <span data-count-to="{{ $stat['to'] }}" data-count-suffix="{{ $stat['suffix'] }}">0{{ $stat['suffix'] }}</span>
                        </p>
                        <p class="text-xs font-medium text-indigo-100">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Illustration column --}}
        <div class="su-reveal relative hidden lg:block" data-reveal="right">
            <div class="su-blob absolute inset-10 rounded-[3rem] bg-white/10 blur-2xl"></div>

            <img src="{{ asset('images/amaliyot-maydoni/01_teacher_woman_idea.png') }}" alt="O'qituvchi"
                 class="su-float-slow relative mx-auto h-72 w-auto drop-shadow-2xl">

            <div class="absolute left-0 top-0 max-w-[190px] -rotate-3 rounded-2xl rounded-bl-sm bg-white px-4 py-3 text-left shadow-xl">
                <p class="text-xs font-bold leading-snug text-indigo-900">"Yaxshi o'qituvchi — katta o'zgarish boshlanishidir!"</p>
            </div>

            <div class="su-float absolute right-0 top-10 flex items-center gap-2 rounded-2xl bg-white px-3 py-2.5 shadow-xl">
                <img src="{{ asset('images/amaliyot-maydoni/07_goal_target.png') }}" alt="" class="h-8 w-8 object-contain">
                <span class="text-xs font-bold text-indigo-900">Maqsadga aniq yo'l</span>
            </div>

            <div class="su-float su-delay-2 absolute bottom-2 left-6 flex items-center gap-2 rounded-2xl bg-white px-3 py-2.5 shadow-xl">
                <img src="{{ asset('images/amaliyot-maydoni/09_achievement_trophy.png') }}" alt="" class="h-8 w-8 object-contain">
                <span class="text-xs font-bold text-indigo-900">Yutuqlarni qo'lga kiriting</span>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════ MAIN GRID ══════════════════════ --}}
<div class="mb-10 grid gap-6 lg:grid-cols-[1fr_320px] lg:items-start">

    {{-- LEFT: 4 Activity Cards --}}
    <div class="su-stagger grid gap-5 sm:grid-cols-2">

        {{-- 1. Dars ishlanmasi yozish --}}
        <article class="group flex flex-col overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            {{-- Visual panel --}}
            <div class="relative h-44 shrink-0 overflow-hidden bg-gradient-to-br from-indigo-50 via-blue-50 to-indigo-100 sm:h-48">
                <div class="pointer-events-none absolute -right-8 -top-10 h-28 w-28 rounded-full bg-indigo-200/40 blur-2xl"></div>
                <div class="pointer-events-none absolute -bottom-10 -left-8 h-32 w-32 rounded-full bg-indigo-200/40 blur-2xl"></div>
                <img src="{{ asset('images/amaliyot-maydoni/02_lesson_plan.png') }}" alt="Dars ishlanmasi namunasi"
                     class="absolute inset-0 m-auto h-[78%] w-auto object-contain drop-shadow-lg transition-transform duration-300 ease-out group-hover:scale-105">

                <span class="grid absolute left-4 top-4 h-9 w-9 place-items-center rounded-xl bg-indigo-600 text-sm font-bold text-white shadow-md">1</span>
                <div class="absolute right-4 top-4 flex gap-1.5">
                    <span class="inline-flex items-center rounded-md bg-white/95 px-2 py-0.5 text-[10px] font-bold uppercase text-sky-700 shadow-sm backdrop-blur">docx</span>
                    <span class="inline-flex items-center rounded-md bg-white/95 px-2 py-0.5 text-[10px] font-bold uppercase text-red-700 shadow-sm backdrop-blur">pdf</span>
                </div>
            </div>

            {{-- Content --}}
            <div class="flex flex-1 flex-col p-5">
                <h2 class="font-bold text-slate-800">Dars ishlanmasi yozish</h2>
                <p class="mt-1 text-[13px] leading-relaxed text-slate-500">Namuna, shablon va tavsiyalar asosida o'z dars ishlanmangizni yarating.</p>

                {{-- Upload area --}}
                <div class="mt-4 flex flex-1 flex-col items-center justify-center rounded-xl border-2 border-dashed border-indigo-200 bg-indigo-50/60 p-5 text-center transition hover:border-indigo-400 hover:bg-indigo-50">
                    <span class="mb-2 grid h-12 w-12 place-items-center rounded-2xl bg-indigo-100 text-indigo-500">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                    </span>
                    <p class="text-sm font-semibold text-indigo-700">Fayl tanlash yoki tashlash</p>
                    <p class="mt-1 text-xs text-slate-400">DOCX, PDF, PPT — max 10 MB</p>
                </div>

                <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-indigo-400"></span> Dars ishlanmasi fayli (DOCX, PDF)
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-indigo-400"></span> Belgilangan tuzilmaga amal qiling
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-indigo-400"></span> Qo'shimcha ilova qo'shishingiz mumkin
                    </li>
                </ul>

                <button class="su-lift mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-indigo-700">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    Fayl yuklash
                </button>
            </div>
        </article>

        {{-- 2. PPKS savoli yozish --}}
        <article class="group flex flex-col overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            {{-- Visual panel --}}
            <div class="relative h-44 shrink-0 overflow-hidden bg-gradient-to-br from-violet-50 via-fuchsia-50 to-violet-100 sm:h-48">
                <div class="pointer-events-none absolute -right-8 -top-10 h-28 w-28 rounded-full bg-violet-200/40 blur-2xl"></div>
                <div class="pointer-events-none absolute -bottom-10 -left-8 h-32 w-32 rounded-full bg-violet-200/40 blur-2xl"></div>
                <img src="{{ asset('images/amaliyot-maydoni/03_ppks_checklist.png') }}" alt="PPKS savollari"
                     class="absolute inset-0 m-auto h-[78%] w-auto object-contain drop-shadow-lg transition-transform duration-300 ease-out group-hover:scale-105">

                <span class="grid absolute left-4 top-4 h-9 w-9 place-items-center rounded-xl bg-violet-600 text-sm font-bold text-white shadow-md">2</span>
                <span class="absolute right-4 top-4 inline-flex items-center gap-1 rounded-full bg-white/95 px-2.5 py-1 text-[11px] font-extrabold text-violet-700 shadow-sm backdrop-blur">86%</span>
            </div>

            {{-- Content --}}
            <div class="flex flex-1 flex-col p-5">
                <h2 class="font-bold text-slate-800">PPKS savoli yozish</h2>
                <p class="mt-1 text-[13px] leading-relaxed text-slate-500">O'qituvchilar uchun professional kompetensiya savollarini tuzing.</p>

                <div class="mt-4 flex items-center gap-4 rounded-xl bg-violet-50/60 p-3">
                    <div class="relative flex h-16 w-16 shrink-0 items-center justify-center">
                        <svg class="absolute inset-0 h-16 w-16 -rotate-90" viewBox="0 0 80 80">
                            <circle cx="40" cy="40" r="34" fill="none" stroke="#ede9fe" stroke-width="8" />
                            <circle cx="40" cy="40" r="34" fill="none" stroke="#7c3aed" stroke-width="8"
                                stroke-dasharray="213.6"
                                stroke-dashoffset="{{ 213.6 - (213.6 * 86 / 100) }}"
                                stroke-linecap="round" />
                        </svg>
                        <span class="text-base font-extrabold text-violet-700">86%</span>
                    </div>
                    <div class="text-sm text-slate-500">
                        <p class="font-semibold text-slate-700">Bajarildi: 6/7</p>
                        <p class="mt-0.5 text-xs">Barcha savollarni to'ldiring</p>
                    </div>
                </div>

                <ul class="mt-4 flex-1 space-y-2">
                    @foreach ([
                        ['done' => true,  'text' => "O'qish maqsadini aniqlash"],
                        ['done' => true,  'text' => 'Matnni tanlash va tayyorlash'],
                        ['done' => true,  'text' => 'Savol tuzish (1–2-daraja)'],
                        ['done' => true,  'text' => 'Savol tuzish (3–4-daraja)'],
                        ['done' => true,  'text' => 'Baholash rubrikalari'],
                        ['done' => true,  'text' => "Qo'shimcha materiallar"],
                        ['done' => false, 'text' => 'Yakuniy tekshiruv'],
                    ] as $item)
                        <li class="flex items-center gap-2.5 text-sm">
                            @if ($item['done'])
                                <span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-violet-100 text-violet-600">
                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </span>
                                <span class="text-slate-700">{{ $item['text'] }}</span>
                            @else
                                <span class="grid h-5 w-5 shrink-0 place-items-center rounded-full border-2 border-slate-300 bg-white"></span>
                                <span class="text-slate-400">{{ $item['text'] }}</span>
                            @endif
                        </li>
                    @endforeach
                </ul>

                <button class="su-lift mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-violet-700">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Savol qo'shish
                </button>
            </div>
        </article>

        {{-- 3. Metodik topshiriq --}}
        <article class="group flex flex-col overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            {{-- Visual panel --}}
            <div class="relative h-44 shrink-0 overflow-hidden bg-gradient-to-br from-teal-50 via-emerald-50 to-teal-100 sm:h-48">
                <div class="pointer-events-none absolute -right-8 -top-10 h-28 w-28 rounded-full bg-teal-200/40 blur-2xl"></div>
                <div class="pointer-events-none absolute -bottom-10 -left-8 h-32 w-32 rounded-full bg-teal-200/40 blur-2xl"></div>
                <img src="{{ asset('images/amaliyot-maydoni/04_methodology_books.png') }}" alt="Metodik topshiriq"
                     class="absolute inset-0 m-auto h-[78%] w-auto object-contain drop-shadow-lg transition-transform duration-300 ease-out group-hover:scale-105">

                <span class="grid absolute left-4 top-4 h-9 w-9 place-items-center rounded-xl bg-teal-600 text-sm font-bold text-white shadow-md">3</span>
            </div>

            {{-- Content --}}
            <div class="flex flex-1 flex-col p-5">
                <h2 class="font-bold text-slate-800">Metodik topshiriq</h2>
                <p class="mt-1 text-[13px] leading-relaxed text-slate-500">Matnni tushunish darajalarini aniqlash bo'yicha metodik tahlil yozing.</p>

                <div class="mt-4 rounded-xl bg-teal-50/60 p-4">
                    <p class="mb-1 text-xs font-semibold uppercase tracking-wide text-teal-600">Joriy topshiriq</p>
                    <p class="text-sm font-medium text-slate-800">Matnni tushunish darajalarini aniqlash bo'yicha metodik tahlil yozing</p>
                </div>

                <div class="mt-4">
                    <p class="mb-2 text-xs font-semibold text-slate-500">O'z ishingizni baholang</p>
                    <div class="flex gap-1">
                        @for ($i = 1; $i <= 5; $i++)
                            <button class="text-2xl transition hover:scale-110 {{ $i <= 4 ? 'text-amber-400' : 'text-slate-200' }}">★</button>
                        @endfor
                    </div>
                </div>

                <ul class="mt-4 flex-1 space-y-2">
                    @foreach ([
                        ['done' => true,  'text' => "Nazariy asosni o'rganish"],
                        ['done' => true,  'text' => 'Topshiriq rejasini tuzish'],
                        ['done' => true,  'text' => 'Qoralama yozish'],
                        ['done' => false, 'text' => 'Tahrir va tekshiruv'],
                        ['done' => false, 'text' => 'Yakuniy taqdimot'],
                    ] as $item)
                        <li class="flex items-center gap-2.5 text-sm">
                            @if ($item['done'])
                                <span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-teal-100 text-teal-600">
                                    <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </span>
                                <span class="text-slate-700">{{ $item['text'] }}</span>
                            @else
                                <span class="grid h-5 w-5 shrink-0 place-items-center rounded-full border-2 border-slate-300 bg-white"></span>
                                <span class="text-slate-400">{{ $item['text'] }}</span>
                            @endif
                        </li>
                    @endforeach
                </ul>

                <button class="su-lift mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-teal-700">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Topshiriqni bajarish
                </button>
            </div>
        </article>

        {{-- 4. Refleksiya kundaligi --}}
        <article class="group flex flex-col overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            {{-- Visual panel --}}
            <div class="relative h-44 shrink-0 overflow-hidden bg-gradient-to-br from-rose-50 via-pink-50 to-rose-100 sm:h-48">
                <div class="pointer-events-none absolute -right-8 -top-10 h-28 w-28 rounded-full bg-rose-200/40 blur-2xl"></div>
                <div class="pointer-events-none absolute -bottom-10 -left-8 h-32 w-32 rounded-full bg-rose-200/40 blur-2xl"></div>
                <img src="{{ asset('images/amaliyot-maydoni/16_reflection_chat.png') }}" alt="Refleksiya kundaligi"
                     class="absolute inset-0 m-auto h-[70%] w-auto object-contain drop-shadow-lg transition-transform duration-300 ease-out group-hover:scale-105">

                <span class="grid absolute left-4 top-4 h-9 w-9 place-items-center rounded-xl bg-rose-500 text-sm font-bold text-white shadow-md">4</span>
            </div>

            {{-- Content --}}
            <div class="flex flex-1 flex-col p-5">
                <h2 class="font-bold text-slate-800">Refleksiya kundaligi</h2>
                <p class="mt-1 text-[13px] leading-relaxed text-slate-500">Bugungi faoliyatingiz, yutuq va qiyinchiliklaringiz haqida yozing.</p>

                <div class="mt-4 flex items-center gap-2 rounded-xl bg-rose-50/60 px-3 py-2">
                    <svg class="h-4 w-4 shrink-0 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-xs font-semibold text-rose-600">{{ now()->format('d.m.Y') }} — Bugungi yozuv</span>
                </div>

                <div class="mt-4">
                    <p class="mb-2 text-xs font-semibold text-slate-500">Bugungi kayfiyat</p>
                    <div class="flex gap-2">
                        @foreach (['😔' => 'Qiyin', '😐' => 'Oddiy', '🙂' => 'Yaxshi', '😄' => "A'lo"] as $emoji => $label)
                            <button class="flex flex-1 flex-col items-center gap-1 rounded-xl border border-slate-200 px-2 py-2 text-[11px] text-slate-500 transition hover:border-rose-300 hover:bg-rose-50 {{ $emoji === '🙂' ? 'border-rose-400 bg-rose-50 text-rose-600 font-semibold' : '' }}">
                                <span class="text-xl">{{ $emoji }}</span>
                                {{ $label }}
                            </button>
                        @endforeach
                    </div>
                </div>

                <textarea
                    rows="3"
                    placeholder="Bugun nima o'rgandim? Qaysi jihat qiyin bo'ldi? Ertaga nima qilaman?..."
                    class="mt-4 flex-1 resize-none rounded-xl border border-slate-200 bg-slate-50 px-3 py-2.5 text-sm text-slate-700 placeholder-slate-400 outline-none transition focus:border-rose-400 focus:bg-white focus:ring-2 focus:ring-rose-100"
                ></textarea>

                <button class="su-lift mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-rose-500 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-rose-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Kundalik yozish
                </button>
            </div>
        </article>
    </div>

    {{-- RIGHT: Sidebar --}}
    <aside class="flex flex-col gap-5">

        {{-- Leaderboard --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <div class="mb-4 flex items-center justify-between">
                <h3 class="flex items-center gap-2 font-bold text-slate-800">
                    <img src="{{ asset('images/amaliyot-maydoni/09_achievement_trophy.png') }}" alt="" class="h-6 w-6 object-contain">
                    Talabalar reytingi
                </h3>
                <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-600">Haftalik</span>
            </div>

            <ul class="space-y-2">
                @foreach ([
                    ['rank' => 1, 'name' => 'Aziza N.',    'score' => 94, 'badge' => '🥇'],
                    ['rank' => 2, 'name' => 'Bobur T.',    'score' => 88, 'badge' => '🥈'],
                    ['rank' => 3, 'name' => 'Gulnora M.',  'score' => 85, 'badge' => '🥉'],
                    ['rank' => 4, 'name' => 'Jasur K.',    'score' => 79, 'badge' => null],
                    ['rank' => 5, 'name' => 'Dilnoza S.',  'score' => 76, 'badge' => null],
                    ['rank' => 6, 'name' => 'Sherzod A.',  'score' => 72, 'badge' => null],
                    ['rank' => 7, 'name' => 'Malika R.',   'score' => 68, 'badge' => null],
                ] as $student)
                    <li class="flex items-center gap-3 rounded-xl p-2 transition hover:bg-slate-50 {{ $student['rank'] <= 3 ? 'bg-gradient-to-r from-indigo-50/50 to-transparent' : '' }}">
                        <span class="w-6 shrink-0 text-center text-sm font-bold {{ $student['rank'] <= 3 ? 'text-indigo-600' : 'text-slate-400' }}">
                            {{ $student['badge'] ?? $student['rank'] }}
                        </span>
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-indigo-100 text-xs font-bold text-indigo-700">
                            {{ mb_strtoupper(mb_substr($student['name'], 0, 1)) }}
                        </span>
                        <span class="min-w-0 flex-1 truncate text-sm font-medium text-slate-700">{{ $student['name'] }}</span>
                        <span class="shrink-0 rounded-full bg-slate-100 px-2.5 py-0.5 text-xs font-bold text-slate-600">{{ $student['score'] }}</span>
                    </li>
                @endforeach
            </ul>

            <a href="#" class="mt-3 inline-flex w-full items-center justify-center gap-1.5 rounded-xl border border-slate-200 py-2 text-xs font-semibold text-slate-500 transition hover:border-indigo-200 hover:text-indigo-600">
                Barchasini ko'rish <x-icon name="arrow-right" class="h-3.5 w-3.5" />
            </a>
        </div>

        {{-- Quick actions --}}
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <h3 class="mb-4 font-bold text-slate-800">Tezkor harakatlar</h3>
            <div class="space-y-1">
                @foreach ([
                    ['icon' => 'clipboard', 'label' => "Diagnostik ko'rsatkich",  'color' => 'bg-indigo-50 text-indigo-600',  'href' => '#'],
                    ['icon' => 'book',      'label' => "Refleksiya ko'rsatkichi", 'color' => 'bg-violet-50 text-violet-600', 'href' => '#'],
                    ['icon' => 'layers',    'label' => 'Faoliyat tahlili',        'color' => 'bg-teal-50 text-teal-600',    'href' => '#'],
                    ['icon' => 'star',      'label' => 'Raqamli kompetensiya',    'color' => 'bg-amber-50 text-amber-600',  'href' => '#'],
                ] as $action)
                    <a href="{{ $action['href'] }}" class="flex items-center gap-3 rounded-xl p-2.5 transition hover:bg-slate-50">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl {{ $action['color'] }}">
                            <x-icon :name="$action['icon']" class="h-5 w-5" />
                        </span>
                        <span class="text-sm font-medium text-slate-700">{{ $action['label'] }}</span>
                        <x-icon name="arrow-right" class="ml-auto h-4 w-4 text-slate-300" />
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Motivational tip --}}
        <div class="flex items-center gap-3 rounded-2xl border border-amber-100 bg-amber-50/70 p-4">
            <img src="{{ asset('images/amaliyot-maydoni/21_idea_lightbulb.png') }}" alt="" class="su-float h-10 w-10 shrink-0 object-contain">
            <p class="text-sm font-semibold leading-snug text-amber-800">"Kichik qadamlar katta natijalarga olib keladi."</p>
        </div>
    </aside>
</div>

{{-- ══════════════════════ FOYDALI BO'LIMLAR ══════════════════════ --}}
<section class="mb-10">
    <div class="mb-5 flex items-end justify-between">
        <div>
            <span class="text-sm font-semibold uppercase tracking-wider text-indigo-600">Tezkor kirish</span>
            <h2 class="mt-1 text-xl font-bold text-slate-800">Foydali bo'limlar</h2>
        </div>
    </div>

    <div class="su-stagger grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ([
            ['image' => '20_graduation_books.png',   'panel' => 'from-indigo-50 to-indigo-100',  'blob' => 'bg-indigo-200/40',  'title' => 'Nazariy bilimlar',   'text' => 'PIRLS, PISA va matnni tushunish asoslari.',    'route' => 'nazariya.index'],
            ['image' => '22_puzzle_learning.png',    'panel' => 'from-violet-50 to-violet-100',  'blob' => 'bg-violet-200/40',  'title' => 'Metodik modul',      'text' => 'Amaliy metodika va dars rejalari.',            'route' => 'metodik.index'],
            ['image' => '06_international_experience_globe.png', 'panel' => 'from-teal-50 to-teal-100', 'blob' => 'bg-teal-200/40', 'title' => 'Xalqaro tajriba', 'text' => 'Jahon yetakchi davlatlari tajribasi.', 'route' => 'xalqaro.index'],
            ['image' => '14_test_checklist.png',     'panel' => 'from-amber-50 to-amber-100',    'blob' => 'bg-amber-200/40',   'title' => 'Testlar',            'text' => 'PIRLS tipidagi baholash savollari.',           'route' => 'tests.index'],
            ['image' => '13_video_lesson.png',       'panel' => 'from-rose-50 to-rose-100',      'blob' => 'bg-rose-200/40',    'title' => 'Video darslar',      'text' => "Ko'rgazmali dars tahlillari va misollar.",    'route' => 'video-darslar.index'],
            ['image' => '27_resource_folder.png',    'panel' => 'from-emerald-50 to-emerald-100','blob' => 'bg-emerald-200/40', 'title' => 'Resurslar',          'text' => 'Yuklab olinadigan materiallar va shablonlar.', 'route' => 'resources.index'],
        ] as $card)
            @if (\Illuminate\Support\Facades\Route::has($card['route']))
                <a href="{{ route($card['route']) }}" class="group flex overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative flex h-auto w-28 shrink-0 items-center justify-center overflow-hidden bg-gradient-to-br {{ $card['panel'] }} sm:w-32">
                        <div class="pointer-events-none absolute -right-4 -top-4 h-16 w-16 rounded-full {{ $card['blob'] }} blur-xl"></div>
                        <img src="{{ asset('images/amaliyot-maydoni/'.$card['image']) }}" alt="{{ $card['title'] }}"
                             class="relative h-16 w-auto object-contain drop-shadow transition-transform duration-300 ease-out group-hover:scale-110 sm:h-20">
                    </div>
                    <div class="flex flex-1 flex-col justify-center p-4">
                        <h3 class="font-semibold text-slate-800 group-hover:text-indigo-700">{{ $card['title'] }}</h3>
                        <p class="mt-1 text-[13px] leading-relaxed text-slate-500">{{ $card['text'] }}</p>
                        <span class="mt-2 inline-flex items-center gap-1 text-xs font-semibold text-indigo-500">
                            Ko'rish <x-icon name="arrow-right" class="h-3.5 w-3.5 transition group-hover:translate-x-0.5" />
                        </span>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
</section>

{{-- ══════════════════════ CTA BANNER ══════════════════════ --}}
<section class="relative overflow-hidden rounded-[28px] bg-gradient-to-br from-indigo-600 to-violet-700 px-6 py-10 text-white sm:px-12">
    <div class="pointer-events-none absolute inset-0 text-white opacity-10">
        <x-decor.dots id="cta-dots" />
    </div>
    <div class="su-blob pointer-events-none absolute -bottom-16 left-1/3 h-56 w-56 rounded-full bg-white/10 blur-3xl"></div>

    <div class="relative flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between lg:gap-8">
        <div class="flex items-center gap-6">
            <img src="{{ asset('images/amaliyot-maydoni/05_digital_methodology_laptop.png') }}" alt="Raqamli-metodik platforma"
                 class="su-float-slow hidden h-24 w-auto shrink-0 drop-shadow-2xl sm:block lg:h-32">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wide text-indigo-200">Boshlang'ich ta'lim uchun</p>
                <h2 class="mt-1 text-2xl font-bold">Raqamli-metodik platforma</h2>
                <p class="mt-2 max-w-md text-indigo-100">O'qish savodxonligini rivojlantirish uchun barcha kerakli vositalar bir joyda.</p>
            </div>
        </div>
        <a href="{{ route('home') }}" class="su-lift inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-indigo-700 shadow-lg transition-colors hover:bg-indigo-50 lg:w-auto">
            Bosh sahifaga qaytish <x-icon name="arrow-right" class="h-4 w-4" />
        </a>
    </div>
</section>

@endsection
