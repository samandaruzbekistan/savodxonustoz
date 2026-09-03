@extends('layouts.app')
@section('title', "Differensial topshiriqlar — Barcha o'quvchilarga yordam berish")
@section('content')
@php
    $img = fn (string $name) => asset("images/sections/barcha-oquvchilarga-yordam/differensial-topshiriqlar/{$name}");

    $levels = [
        [
            'n' => 1, 'label' => 'Oson daraja', 'desc' => "Matndan aniq javob topish.",
            'img' => 'tree.png', 'badge' => 'bg-emerald-600', 'card' => 'border-emerald-200 bg-emerald-50', 'text' => 'text-emerald-900', 'sub' => 'text-emerald-700',
        ],
        [
            'n' => 2, 'label' => "O'rta daraja", 'desc' => "Sababni tushuntirish, qahramon harakatini izohlash.",
            'img' => 'books_graduation_cap.png', 'badge' => 'bg-amber-500', 'card' => 'border-amber-200 bg-amber-50', 'text' => 'text-amber-900', 'sub' => 'text-amber-700',
        ],
        [
            'n' => 3, 'label' => 'Murakkab daraja', 'desc' => "Xulosa chiqarish, baholash, dalil bilan asoslash, ijodiy javob.",
            'img' => 'target_arrow.png', 'badge' => 'bg-rose-600', 'card' => 'border-rose-200 bg-rose-50', 'text' => 'text-rose-900', 'sub' => 'text-rose-700',
        ],
    ];

    $practice = [
        [
            'label' => 'Oson daraja', 'img' => 'boy_watering_plant.png',
            'card' => 'border-emerald-200 bg-emerald-50', 'text' => 'text-emerald-900', 'sub' => 'text-emerald-800', 'chip' => 'bg-emerald-600',
            'items' => ['Qahramon kim?', 'U nima ekdi?', "Ko'chatga nima quydi?"],
        ],
        [
            'label' => "O'rta daraja", 'img' => 'growing_plant.png',
            'card' => 'border-amber-200 bg-amber-50', 'text' => 'text-amber-900', 'sub' => 'text-amber-800', 'chip' => 'bg-amber-500',
            'items' => ["Qahramon ko'chatga qanday g'amxo'rlik qildi?", "Nima uchun ko'chatda yangi barglar paydo bo'ldi?", "Qahramonning harakati uning qanday bola ekanini ko'rsatadi?"],
        ],
        [
            'label' => 'Murakkab daraja', 'img' => 'girl_reading_book.png',
            'card' => 'border-rose-200 bg-rose-50', 'text' => 'text-rose-900', 'sub' => 'text-rose-800', 'chip' => 'bg-rose-600',
            'items' => ['Matnning asosiy g\'oyasi nima?', 'Siz qahramonning ishini foydali deb hisoblaysizmi? Nega?', 'Javobingizni matndan dalil bilan asoslang.', '"Men ham tabiatga yordam beraman" mavzusida 4 gap yozing.'],
        ],
    ];

    $teacherSteps = [
        ['img' => 'student_group.png', 'text' => "O'quvchilarni 3 ta darajaga ajratadi", 'wrap' => 'bg-indigo-50', 'ring' => 'ring-indigo-100'],
        ['img' => 'task_checklist.png', 'text' => "O'quvchiga mos darajadagi vazifani beradi", 'wrap' => 'bg-violet-50', 'ring' => 'ring-violet-100'],
        ['img' => 'open_book.png', 'text' => 'Matn asosida uch darajali topshiriq tayyorlaydi', 'wrap' => 'bg-sky-50', 'ring' => 'ring-sky-100'],
        ['img' => 'progress_chart.png', 'text' => 'Bajarilgan ishni individual baholaydi', 'wrap' => 'bg-emerald-50', 'ring' => 'ring-emerald-100'],
        ['img' => 'achievement_medal.png', 'text' => "O'quvchini keyingi darajaga o'tishga rag'batlantiradi", 'wrap' => 'bg-amber-50', 'ring' => 'ring-amber-100'],
    ];

    $rubric = [
        ['ball' => '3 ball', 'desc' => "Topshiriq to'liq, dalil va xulosa bilan bajarilgan", 'stars' => 3, 'color' => 'text-emerald-600 bg-emerald-50'],
        ['ball' => '2 ball', 'desc' => "Javob to'g'ri, lekin izoh yetarli emas", 'stars' => 2, 'color' => 'text-amber-600 bg-amber-50'],
        ['ball' => '1 ball', 'desc' => "Javob qisman to'g'ri", 'stars' => 1, 'color' => 'text-orange-600 bg-orange-50'],
        ['ball' => '0 ball', 'desc' => "Javob noto'g'ri yoki bajarilmagan", 'stars' => 0, 'color' => 'text-rose-600 bg-rose-50'],
    ];
@endphp
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'differensial-topshiriqlar'])
    <div class="min-w-0 flex-1">

        {{-- ══════════════════════ HERO ══════════════════════ --}}
        <section class="su-reveal relative mb-6 overflow-hidden rounded-[1.75rem] bg-gradient-to-br from-violet-600 via-indigo-600 to-indigo-700 px-6 py-8 sm:px-9 sm:py-10">
            <div class="pointer-events-none absolute inset-0 text-white opacity-[0.08]">
                <x-decor.dots id="dif-hero-dots" />
            </div>
            <div class="su-blob pointer-events-none absolute -left-16 -top-16 h-56 w-56 rounded-full bg-cyan-300/20 blur-3xl"></div>
            <div class="su-blob su-delay-2 pointer-events-none absolute -bottom-20 right-0 h-64 w-64 rounded-full bg-fuchsia-400/25 blur-3xl"></div>

            <div class="relative flex flex-col items-center gap-6 sm:flex-row sm:gap-8">
                <div class="flex-1 text-center sm:text-left">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3.5 py-1.5 text-[11px] font-bold uppercase tracking-wider text-violet-100 ring-1 ring-inset ring-white/25 backdrop-blur">
                        <span class="grid h-4.5 w-4.5 place-items-center rounded-full bg-white/25 text-[10px]">2</span>
                        Barcha o'quvchilarga yordam berish · 2-bo'lim
                    </span>
                    <h1 class="mt-4 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Differensial topshiriqlar</h1>
                    <p class="mt-3 max-w-lg text-sm leading-relaxed text-violet-100 sm:text-[15px]">Bir sinfda o'quvchilarning o'qish darajasi bir xil bo'lmaydi. Differensial yondashuv — bu bir xil mavzu yoki matn asosida o'quvchilarga turli darajadagi topshiriqlar berishdir.</p>
                </div>
                <div class="relative shrink-0">
                    <div class="pointer-events-none absolute inset-0 -m-4 rounded-full bg-white/10 blur-2xl"></div>
                    <img src="{{ $img('hero_book_pencil.png') }}" alt="" width="256" height="256"
                         class="su-float-slow relative h-36 w-36 object-contain drop-shadow-2xl sm:h-44 sm:w-44">
                </div>
            </div>
        </section>

        {{-- ══════════════════════ MUAMMO TAVSIFI ══════════════════════ --}}
        <section class="su-reveal mb-8 flex flex-col items-center gap-5 rounded-3xl border border-violet-100 bg-violet-50/70 p-6 sm:flex-row sm:p-7">
            <div class="min-w-0 flex-1 text-center sm:text-left">
                <div class="mb-3 flex items-center justify-center gap-2.5 sm:justify-start">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-violet-600 shadow-sm shadow-violet-600/30">
                        <svg class="h-4.5 w-4.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                    </span>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-violet-700">Muammo tavsifi</h3>
                </div>
                <p class="text-sm leading-relaxed text-violet-900">Agar barcha o'quvchilarga bir xil topshiriq berilsa, kuchli o'quvchilar zerikishi, qiynalayotgan o'quvchilar esa muvaffaqiyatsizlik hissini boshdan kechirishi mumkin.</p>
            </div>
            <img src="{{ $img('checklist_pen.png') }}" alt="" width="256" height="256" loading="lazy"
                 class="h-24 w-24 shrink-0 object-contain sm:h-28 sm:w-28">
        </section>

        {{-- ══════════════════════ UCH DARAJALI TIZIM ══════════════════════ --}}
        <section class="mb-10">
            <div class="su-reveal mb-6 text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600">Metodik yechim</span>
                <h2 class="mt-1.5 text-2xl font-extrabold tracking-tight text-slate-900">Uch darajali topshiriq tizimi</h2>
            </div>
            <div class="su-stagger grid grid-cols-1 gap-4 sm:grid-cols-3">
                @foreach ($levels as $level)
                    <div class="su-lift group relative flex h-full flex-col items-center rounded-3xl border {{ $level['card'] }} p-6 text-center shadow-sm shadow-slate-200/40 hover:shadow-lg">
                        <span class="grid h-8 w-8 place-items-center rounded-full {{ $level['badge'] }} text-sm font-bold text-white shadow-sm">{{ $level['n'] }}</span>
                        <div class="mt-4 grid h-24 w-24 place-items-center rounded-2xl bg-white/80 shadow-inner transition-transform duration-300 group-hover:scale-105">
                            <img src="{{ $img($level['img']) }}" alt="" width="256" height="256" loading="lazy" class="h-16 w-16 object-contain">
                        </div>
                        <p class="mt-4 text-sm font-bold {{ $level['text'] }}">{{ $level['label'] }}</p>
                        <p class="mt-1.5 text-xs leading-relaxed {{ $level['sub'] }}">{{ $level['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- ══════════════════════ AMALIY MASHQ ══════════════════════ --}}
        <section class="mb-10">
            <div class="su-reveal mb-6 text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600">Amaliy mashq</span>
                <h2 class="mt-1.5 text-2xl font-extrabold tracking-tight text-slate-900">Matn: &ldquo;Kichik bog'bon&rdquo;</h2>
            </div>
            <div class="su-stagger grid grid-cols-1 gap-4 md:grid-cols-3 md:items-stretch">
                @foreach ($practice as $p)
                    <div class="su-lift flex h-full flex-col rounded-3xl border {{ $p['card'] }} p-5 shadow-sm shadow-slate-200/40 hover:shadow-lg">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-white/80 shadow-inner">
                                <img src="{{ $img($p['img']) }}" alt="" width="256" height="256" loading="lazy" class="h-10 w-10 object-contain">
                            </div>
                            <span class="inline-flex items-center rounded-full {{ $p['chip'] }} px-3 py-1 text-xs font-bold text-white">{{ $p['label'] }}</span>
                        </div>
                        <ol class="flex-1 space-y-2 text-xs leading-relaxed {{ $p['sub'] }}">
                            @foreach ($p['items'] as $i => $item)
                                <li class="flex gap-2">
                                    <span class="mt-0.5 shrink-0 font-bold {{ $p['text'] }}">{{ $i + 1 }}.</span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- ══════════════════════ O'QITUVCHI HARAKATI ══════════════════════ --}}
        <section class="su-reveal mb-10">
            <div class="mb-6 text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600">Amaliyot</span>
                <h2 class="mt-1.5 text-2xl font-extrabold tracking-tight text-slate-900">O'qituvchi harakati</h2>
            </div>
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm shadow-slate-200/40 sm:p-7">
                <p class="mb-7 text-sm leading-relaxed text-slate-600">O'qituvchi differensial topshiriqlarni berishda o'quvchilarni "kuchli", "sust" deb ajratib qo'ymasligi kerak. Topshiriqlarni "1-daraja", "2-daraja", "3-daraja" yoki "Yulduzcha", "Oycha", "Quyoshcha" kabi neytral nomlar bilan berish mumkin.</p>

                <div class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-5 sm:gap-x-2">
                    @foreach ($teacherSteps as $step)
                        <div class="relative flex flex-col items-center gap-3 text-center">
                            @if (! $loop->last)
                                <div class="pointer-events-none absolute left-1/2 top-8 hidden h-0.5 w-full -translate-y-1/2 border-t-2 border-dashed border-slate-200 sm:block"></div>
                            @endif
                            <span class="relative grid h-16 w-16 shrink-0 place-items-center rounded-2xl {{ $step['wrap'] }} ring-4 {{ $step['ring'] }}">
                                <span class="absolute -right-1 -top-1 grid h-5 w-5 place-items-center rounded-full bg-white text-[10px] font-bold text-slate-500 shadow ring-1 ring-slate-100">{{ $loop->iteration }}</span>
                                <img src="{{ $img($step['img']) }}" alt="" width="256" height="256" loading="lazy" class="h-9 w-9 object-contain">
                            </span>
                            <p class="text-[11px] font-medium leading-snug text-slate-600">{{ $step['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ══════════════════════ OTA-ONA BILAN HAMKORLIK ══════════════════════ --}}
        <section class="su-reveal mb-10">
            <div class="mb-6 text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600">Hamkorlik</span>
                <h2 class="mt-1.5 text-2xl font-extrabold tracking-tight text-slate-900">Ota-ona bilan hamkorlik</h2>
            </div>
            <div class="flex flex-col items-center gap-6 rounded-3xl border border-rose-100 bg-gradient-to-br from-rose-50 to-orange-50 p-6 sm:flex-row sm:p-8">
                <img src="{{ $img('family_reading_together.png') }}" alt="" width="256" height="256" loading="lazy"
                     class="h-32 w-32 shrink-0 object-contain sm:h-40 sm:w-40">
                <div class="min-w-0 flex-1">
                    <p class="text-sm italic leading-relaxed text-rose-800">&ldquo;Farzandingiz matndan aniq javoblarni yaxshi topmoqda. Endi u bilan 'Nega?', 'Qanday bilding?' kabi savollar ustida ko'proq ishlash tavsiya etiladi.&rdquo;</p>
                    <p class="mt-4 text-xs font-bold uppercase tracking-wide text-rose-900">Uyga vazifa ham differensial bo'lishi mumkin:</p>
                    <ul class="mt-2.5 space-y-2 text-sm text-rose-800">
                        <li class="flex items-center gap-2">
                            <span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-rose-600 text-white"><svg class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12.5 10 17.5 19 7"/></svg></span>
                            Oson: matndan 3 ta so'z topish
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-rose-600 text-white"><svg class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12.5 10 17.5 19 7"/></svg></span>
                            O'rta: matn mazmunini 3 gap bilan aytish
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-rose-600 text-white"><svg class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12.5 10 17.5 19 7"/></svg></span>
                            Murakkab: matndan xulosa yozish
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- ══════════════════════ BAHOLASH ══════════════════════ --}}
        <section class="su-reveal mb-10">
            <div class="mb-6 text-center">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600">Baholash</span>
                <h2 class="mt-1.5 text-2xl font-extrabold tracking-tight text-slate-900">0–3 ballik rubrika</h2>
            </div>
            <div class="flex flex-col items-center gap-6 rounded-3xl border border-slate-200 bg-white p-5 shadow-sm shadow-slate-200/40 sm:flex-row sm:p-6">
                <div class="min-w-0 w-full flex-1 overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="text-slate-400">
                            <tr>
                                <th class="whitespace-nowrap px-3 pb-3 text-left text-xs font-bold uppercase tracking-wide">Ball</th>
                                <th class="px-3 pb-3 text-left text-xs font-bold uppercase tracking-wide">Tavsif</th>
                                <th class="whitespace-nowrap px-3 pb-3 text-right text-xs font-bold uppercase tracking-wide">Belgi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($rubric as $row)
                                <tr>
                                    <td class="whitespace-nowrap px-3 py-3.5">
                                        <span class="inline-flex items-center rounded-lg {{ $row['color'] }} px-2.5 py-1 text-xs font-bold">{{ $row['ball'] }}</span>
                                    </td>
                                    <td class="px-3 py-3.5 text-slate-600">{{ $row['desc'] }}</td>
                                    <td class="px-3 py-3.5">
                                        <div class="flex items-center justify-end gap-0.5">
                                            @for ($i = 1; $i <= 3; $i++)
                                                <svg class="h-4 w-4 {{ $i <= $row['stars'] ? 'text-amber-400' : 'text-slate-200' }}" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l2.4 5 5.6.8-4 3.9 1 5.5-5-2.7-5 2.7 1-5.5-4-3.9 5.6-.8z"/></svg>
                                            @endfor
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <img src="{{ $img('trophy_laurel.png') }}" alt="" width="256" height="256" loading="lazy"
                     class="su-float-slow hidden h-28 w-28 shrink-0 object-contain sm:block">
            </div>
        </section>

        {{-- ══════════════════════ KUTILADIGAN NATIJA ══════════════════════ --}}
        <section class="su-reveal relative overflow-hidden rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 via-violet-50 to-fuchsia-50 px-6 py-7 sm:px-8">
            <div class="su-blob pointer-events-none absolute -right-10 -top-14 h-40 w-40 rounded-full bg-violet-200/40 blur-3xl"></div>
            <div class="relative flex flex-col items-center gap-6 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col items-center gap-4 text-center sm:flex-row sm:text-left">
                    <img src="{{ $img('achievement_medal.png') }}" alt="" width="256" height="256" loading="lazy" class="h-16 w-16 shrink-0 object-contain">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-widest text-violet-600">Kutiladigan natija</p>
                        <p class="mt-1.5 max-w-xl text-sm leading-relaxed text-slate-700">Har bir o'quvchi o'z darajasiga mos topshiriq bajaradi. O'quvchilar o'z imkoniyatiga qarab rivojlanadi, qiyinchilikdan qo'rqmaydi, kuchli o'quvchilar esa murakkabroq topshiriqlar orqali yanada o'sadi.</p>
                    </div>
                </div>
                <a href="{{ route('barcha-oquvchilarga-yordam.show', 'ikkinchi-til-oquvchilari') }}"
                   class="su-lift group inline-flex shrink-0 items-center gap-2 rounded-2xl bg-gradient-to-r from-violet-600 to-indigo-600 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-violet-600/25 hover:from-violet-700 hover:to-indigo-700">
                    Keyingi bo'lim
                    <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </section>

    </div>
</div>
@endsection
