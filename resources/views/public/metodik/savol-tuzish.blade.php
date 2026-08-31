@extends('layouts.app')
@section('title', 'Savol tuzish metodikasi')
@section('content')
@php
    $img = fn (string $file) => asset('images/sections/metodik/savol-tuzish/'.$file);
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'savol-tuzish'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-violet-950 via-violet-900 to-pink-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 flex items-center gap-6">
                <div class="max-w-xl flex-1">
                    <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <x-icon name="cap" class="h-3.5 w-3.5" />
                        Ustozlar uchun · Dars sifati
                    </span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Savol tuzish metodikasi</h1>
                    <p class="mt-3 leading-relaxed text-violet-100">Yaxshi metodikali savollar o'quvchilarni darsga jalb qiladi va ularning fikrlashini rivojlantiradi. Ushbu bo'limda savol tuzish bo'yicha foydali usullarni o'rganing.</p>
                </div>
                <img src="{{ $img('01_question_notepad.png') }}" alt="Savol tuzish metodikasi" class="pointer-events-none hidden h-36 w-36 shrink-0 object-contain md:block lg:h-44 lg:w-44">
            </div>
        </div>

        {{-- Maqsad + Nima uchun muhim --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-rose-50 text-rose-600">
                        <x-icon name="target" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Maqsad</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Savol tuzish metodikasi bilan o'quvchilarda mustaqil fikrlash, mantiqiy bog'lanish va chuqur tushunishni shakllantirish.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-amber-50 text-amber-600">
                        <x-icon name="bulb" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Nima uchun muhim?</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">To'g'ri tuzilgan savollar dars sifatini oshiradi, o'quvchini fikrlashga undaydi va o'qituvchi uchun baholashni yengillashtiradi.</p>
            </div>
        </div>

        {{-- Savol tuzish turlari --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-7">
            <h2 class="mb-4 text-sm font-bold text-slate-800">Savol tuzish turlari</h2>
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-[220px_1fr_260px]">
                <div class="hidden items-center justify-center rounded-2xl bg-violet-50/60 p-4 lg:flex">
                    <img src="{{ $img('02_checklist_clipboard.png') }}" alt="Savol turlari" class="h-full max-h-56 w-full object-contain">
                </div>
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['title' => 'Yopiq savollar', 'desc' => "Ha yoki yo'q tarzida javoblanadi. Tezkor baholash uchun qulay.", 'tint' => 'bg-blue-50 text-blue-600'],
                        ['title' => 'Ochiq savollar', 'desc' => "O'quvchidan batafsil javob talab qiladi. Fikrlashni rivojlantiradi.", 'tint' => 'bg-teal-50 text-teal-600'],
                        ['title' => 'Tahliliy savollar', 'desc' => "Tahlil qilish, solishtirish va xulosa chiqarishni talab qiladi.", 'tint' => 'bg-violet-50 text-violet-600'],
                        ['title' => 'Ijodiy savollar', 'desc' => "Tasavvur va ijodkorlikni rivojlantiradi.", 'tint' => 'bg-pink-50 text-pink-600'],
                    ] as $t)
                        <div class="rounded-xl border border-slate-200 p-4 transition hover:border-violet-200 hover:bg-violet-50/50">
                            <div class="mb-2 flex items-center gap-2">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg {{ $t['tint'] }}">
                                    <x-icon name="help" class="h-3.5 w-3.5" />
                                </span>
                                <h4 class="text-xs font-bold text-slate-800">{{ $t['title'] }}</h4>
                            </div>
                            <p class="text-xs leading-relaxed text-slate-500">{{ $t['desc'] }}</p>
                        </div>
                    @endforeach
                    <div class="rounded-xl border border-slate-200 p-4 transition hover:border-violet-200 hover:bg-violet-50/50 sm:col-span-2">
                        <div class="mb-2 flex items-center gap-2">
                            <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-rose-50 text-rose-600">
                                <x-icon name="star" class="h-3.5 w-3.5" />
                            </span>
                            <h4 class="text-xs font-bold text-slate-800">Baholovchi savollar</h4>
                        </div>
                        <p class="text-xs leading-relaxed text-slate-500">O'quvchining fikrini asoslashni talab qiladi.</p>
                    </div>
                </div>
                <div class="rounded-2xl border border-emerald-200 bg-emerald-50/50 p-4">
                    <h4 class="mb-3 text-xs font-bold text-emerald-900">Yaxshi savol mezonlari</h4>
                    <ul class="space-y-1.5">
                        @foreach (["Maqsadga mos bo'lishi", "Tushunarli va aniq bo'lishi", "Fikr yuritishni rag'batlantirishi", "Darajaga mos bo'lishi", "Qiziqarli va hayotiy bo'lishi"] as $b)
                            <li class="flex items-start gap-1.5 text-xs text-emerald-800">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" stroke="2.5" />
                                {{ $b }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- Study desk banner --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <img src="{{ $img('03_study_desk.png') }}" alt="" class="h-40 w-full object-cover sm:h-48">
            <div class="p-5 sm:p-7">
                <h2 class="mb-4 text-sm font-bold text-slate-800">Savol tuzish bosqichlari</h2>
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        "Maqsadni aniqlang" => "Savol nima uchun berilishini va qanday natijaga erishmoqchiligingizni belgilang.",
                        "Mavzuni tahlil qiling" => "Asosiy tushunchalar va o'quvchilardan nima bilishini aniqlang.",
                        "Savol turini tanlang" => "Yopiq, ochiq, tahliliy yoki ijodiy savol kerakligini belgilang.",
                        "Savolni yozing" => "Qisqa, aniq va tushunarli tarzda yozing.",
                        "Sinab ko'ring" => "Savol o'quvchilar tomonidan tushunarlimi va javob berish mumkinmi – tekshiring.",
                        "Tahlil qiling va takomillashtiring" => "Darsdan keyin savol samaradorligini baholab, kerak bo'lsa o'zgartiring.",
                    ] as $title => $desc)
                        <div class="rounded-xl border border-slate-200 p-4">
                            <div class="mb-2 flex items-center gap-2">
                                <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-violet-600 text-xs font-bold text-white">{{ $loop->iteration }}</span>
                                <h4 class="text-xs font-bold text-slate-800">{{ $title }}</h4>
                            </div>
                            <p class="text-xs leading-relaxed text-slate-500">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Darsda qo'llash usullari + Xatolar va tavsiyalar --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                        <x-icon name="compass" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Darsda qo'llash usullari</h3>
                </div>
                <ul class="relative z-10 space-y-2">
                    @foreach ([
                        "Dars boshida – o'quvchini faollashtirish",
                        "Yangi mavzu tushuntirishda – fikr uyg'otish",
                        "Mustahkamlashda – bilimni chuqurlashtirish",
                        "Baholashda – tushunishni aniqlash",
                        "Uyga vazifa berishda – mustaqil fikrlashni rivojlantirish",
                    ] as $u)
                        <li class="flex items-start gap-2 text-xs text-slate-500">
                            <x-icon name="chevron-right" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" stroke="2.5" />
                            {{ $u }}
                        </li>
                    @endforeach
                </ul>
                <img src="{{ $img('05_open_book.png') }}" alt="" class="pointer-events-none absolute -bottom-3 -right-3 hidden h-24 w-24 object-contain opacity-90 sm:block">
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-violet-200 bg-violet-50/50 p-5">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-violet-100 text-violet-600">
                        <x-icon name="doc" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">Xatolar va tavsiyalar</h3>
                </div>
                <ul class="relative z-10 space-y-2">
                    @foreach ([
                        "Juda murakkab savol bermang",
                        "Faqat yopiq savollardan foydalanmang",
                        "Bir savolda ikkita fikr so'ramang",
                        "O'quvchining yoshiga mos savol tuzing",
                        "Javob variantlarini muvozanatli qiling",
                    ] as $x)
                        <li class="flex items-start gap-2 text-xs text-violet-800">
                            <x-icon name="chevron-right" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-500" stroke="2.5" />
                            {{ $x }}
                        </li>
                    @endforeach
                </ul>
                <img src="{{ $img('06_desk_lamp_books.png') }}" alt="" class="pointer-events-none absolute -bottom-3 -right-3 hidden h-24 w-24 object-contain opacity-90 sm:block">
            </div>
        </div>

        {{-- Maslahatlar --}}
        <div class="mb-8 flex items-center gap-3 rounded-2xl border border-amber-200 bg-amber-50/60 p-4 sm:p-5">
            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-amber-100 text-amber-600">
                <x-icon name="bulb" class="h-5 w-5" />
            </span>
            <div>
                <h3 class="text-sm font-bold text-amber-900">Maslahatlar</h3>
                <p class="text-xs leading-relaxed text-amber-800">Savol – o'qituvchining eng kuchli vositasidir. Yaxshi savol – yaxshi darsning boshlanishidir.</p>
            </div>
        </div>

        {{-- Foydali qo'llanmalar + Mavzuga oid videolar --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                        <x-icon name="download" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Foydali qo'llanmalar</h3>
                </div>
                <ul class="relative z-10 space-y-2">
                    @foreach ([
                        "Savol tuzish bo'yicha qo'llanma (PDF)",
                        "Bloom taksonomiyasi jadvali",
                        "Savol namunalar to'plami",
                        "Ochiq savollar banki",
                    ] as $g)
                        <li class="flex items-start gap-2 text-xs text-slate-500">
                            <x-icon name="doc" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" stroke="2" />
                            {{ $g }}
                        </li>
                    @endforeach
                </ul>
                <img src="{{ $img('07_books_stack.png') }}" alt="" class="pointer-events-none absolute -bottom-3 -right-3 hidden h-24 w-24 object-contain opacity-90 sm:block">
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-violet-50 text-violet-600">
                        <x-icon name="play" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Mavzuga oid videolar</h3>
                </div>
                <ul class="relative z-10 space-y-2">
                    @foreach ([
                        "Savol tuzish metodikasi – 10 daqiqada",
                        "Samarali savolning 5 qoidasi",
                        "Amaliy misollar va tahlil",
                        "Ustozlar tajribasi",
                    ] as $v)
                        <li class="flex items-start gap-2 text-xs text-slate-500">
                            <x-icon name="play" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-500" stroke="2" />
                            {{ $v }}
                        </li>
                    @endforeach
                </ul>
                <img src="{{ $img('08_video_monitor.png') }}" alt="" class="pointer-events-none absolute -bottom-3 -right-3 hidden h-24 w-24 object-contain opacity-90 sm:block">
            </div>
        </div>

        {{-- CTA: sinab ko'ring + savolingiz bormi --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-violet-950 via-violet-900 to-pink-900 p-5 text-white shadow-sm sm:p-6">
                <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-white/5"></div>
                <img src="{{ $img('09_graduation_cap_books.png') }}" alt="" class="pointer-events-none absolute -bottom-2 -right-2 hidden h-24 w-24 object-contain opacity-90 sm:block">
                <div class="relative z-10 max-w-[70%]">
                    <h3 class="text-sm font-bold text-white">O'zingizni sinab ko'ring!</h3>
                    <p class="mt-1.5 text-xs leading-relaxed text-violet-100">Savol tuzish bo'yicha bilimlaringizni tekshiring va amaliy mashqlarni bajaring.</p>
                    <a href="{{ route('tests.index') }}" class="mt-3 inline-flex items-center gap-2 rounded-xl bg-white px-4 py-2 text-xs font-semibold text-violet-900 transition-colors hover:bg-violet-50">
                        Test va mashqlar
                        <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-amber-100 to-orange-100 p-5 sm:p-6">
                <img src="{{ $img('10_question_envelope.png') }}" alt="" class="pointer-events-none absolute -bottom-2 -right-2 hidden h-24 w-24 object-contain opacity-90 sm:block">
                <div class="relative z-10 max-w-[70%]">
                    <h3 class="text-sm font-bold text-amber-900">Savolingiz bormi?</h3>
                    <p class="mt-1.5 text-xs leading-relaxed text-amber-800">Ustozlar jamoasiga savol yuboring yoki tajribangiz bilan bo'lishing.</p>
                    <a href="{{ route('contact') }}" class="mt-3 inline-flex items-center gap-2 rounded-xl bg-amber-500 px-4 py-2 text-xs font-semibold text-white transition-colors hover:bg-amber-600">
                        Savol yuborish
                        <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>
            </div>
        </div>

        {{-- Nav buttons --}}
        <div class="mt-6 flex justify-between">
            <a href="{{ route('metodik.show', 'matn-ishlash') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi: Matn bilan ishlash
            </a>
            <a href="{{ route('metodik.show', 'pirls-topshiriq') }}" class="inline-flex items-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-violet-700">
                Keyingi: PIRLS topshiriqlari
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
