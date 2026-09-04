@extends('layouts.app')
@section('title', "Talqin qilish savollari — PIRLS konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.pirls-konstruktor._sidebar', ['activeSlug' => 'talqin-qilish'])
    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="relative mb-6 overflow-hidden rounded-3xl border border-violet-100 bg-gradient-to-br from-violet-50 via-indigo-50 to-sky-50 px-6 py-7 sm:px-8">
            <div class="pointer-events-none absolute -left-14 -top-16 h-56 w-56 rounded-full bg-violet-300/25 blur-3xl"></div>
            <div class="pointer-events-none absolute -right-10 -bottom-20 h-64 w-64 rounded-full bg-indigo-300/25 blur-3xl"></div>

            <div class="relative flex flex-wrap items-center justify-between gap-6">
                <div class="min-w-0 flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-violet-600 text-white shadow-sm">4</span>
                        <span class="text-xs text-violet-700/80 uppercase tracking-wide font-bold">PIRLS topshiriqlari konstruktori • 4-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Talqin qilish savollari</h1>
                    <p class="mt-2 text-slate-600 leading-relaxed max-w-xl">Saytga joylashga tayyor matn</p>

                    <div class="mt-4">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/80 border border-violet-200 px-3 py-1.5 text-xs font-semibold text-violet-700 shadow-sm backdrop-blur">
                            <x-icon name="sparkle" class="h-3.5 w-3.5" /> AI yordamida yaratiladi
                        </span>
                    </div>
                </div>

                <img src="{{ asset('images/sections/pirls-konstruktor/10_xabar_va_izoh.png') }}" alt="Talqin qilish savollari"
                     class="hidden h-32 w-auto shrink-0 object-contain drop-shadow-xl sm:block">
            </div>
        </div>

        <div class="mb-6 rounded-xl border border-blue-200 bg-blue-50 p-5">
            <p class="text-sm text-blue-900 leading-relaxed">Talqin qilish savollari o'quvchining matndagi g'oya, obraz, voqea, axborot va muallif fikrini chuqurroq tushunishiga xizmat qiladi. O'quvchi matn qismlarini bir-biri bilan bog'laydi, asosiy g'oyani aniqlaydi, qahramon xarakterini izohlaydi, muallif nima demoqchi bo'lganini tushuntiradi.</p>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            {{-- Main column --}}
            <div class="lg:col-span-2 space-y-5">

                {{-- Matn parchasi with illustration --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="hidden sm:block shrink-0">
                            <svg width="96" height="88" viewBox="0 0 96 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="48" cy="44" r="44" class="fill-violet-50"/>
                                <path d="M30 60c0-14 8-24 18-24s18 10 18 24" class="stroke-violet-400" stroke-width="2.2" fill="none"/>
                                <circle cx="48" cy="28" r="8" class="fill-violet-300"/>
                                <path d="M40 20a8 8 0 0116 0" class="stroke-emerald-400" stroke-width="2" fill="none"/>
                                <ellipse cx="48" cy="66" rx="22" ry="4" class="fill-violet-100"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <h3 class="mb-2 text-sm font-bold text-slate-800">Matn parchasi</h3>
                            <blockquote class="rounded-xl border-l-4 border-violet-400 bg-violet-50/60 px-4 py-3 text-sm italic text-slate-700 leading-relaxed">
                                "Bobur har kuni maktabdan keyin bobosining bog'iga borardi. U yerda gullarni sug'orar, qurigan barglarni terar edi. Bobosi unga: 'Yer mehrni sezadi, bolam', derdi."
                            </blockquote>
                        </div>
                    </div>
                </div>

                {{-- AI mock generator --}}
                <div class="rounded-2xl border border-violet-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-r from-violet-600 to-indigo-600 px-4 py-2.5 flex items-center gap-2">
                        <x-icon name="sparkle" class="h-4 w-4 text-white" />
                        <h3 class="text-sm font-bold text-white">AI yordamida talqin savollari yaratish</h3>
                    </div>
                    <div class="p-5">
                        <label class="mb-2 block text-xs font-semibold text-slate-600">Matnning asosiy g'oyasi yoki mavzusi</label>
                        <input id="ai-topic" type="text" value="Tabiatga mehr bilan qarash"
                               class="mb-3 w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm text-slate-700 focus:border-violet-500 focus:ring-violet-500">
                        <button type="button" id="ai-generate"
                                class="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-violet-600 px-4 py-3 text-sm font-bold text-white hover:bg-violet-700 transition-colors">
                            <x-icon name="sparkle" class="h-4 w-4" />
                            AI yordamida yaratish
                        </button>
                        <div id="ai-result" class="mt-4 space-y-2"></div>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Talqin qilish savollari</h3>
                    </div>
                    <ol class="divide-y divide-slate-100">
                        @foreach ([
                            "Matnning asosiy g'oyasi nima?",
                            "Bobosining \"Yer mehrni sezadi\" degan gapini qanday tushunasiz?",
                            "Boburning harakati uning qanday bola ekanini ko'rsatadi?",
                            "Sarlavha sifatida \"Mehr ko'rgan bog'\" nomi mos keladimi? Nega?",
                            "Muallif bu matn orqali o'quvchiga qanday fikr bermoqchi?",
                        ] as $i => $q)
                            <li class="flex items-start gap-3 px-4 py-2.5">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i + 1 }}</span>
                                <span class="text-xs text-slate-700">{{ $q }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                    <p class="text-xs font-bold text-emerald-800 mb-2">Kutiladigan javob namunasi</p>
                    <p class="text-xs text-emerald-900 leading-relaxed">Matnning asosiy g'oyasi tabiatga mehr bilan qarash kerakligidir. Bobur gullarni sug'orib, bog'ga g'amxo'rlik qilgani uchun u mehnatsevar va mehribon bola sifatida tasvirlangan.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Baholash mezoni</h3>
                    </div>
                    <table class="w-full text-xs">
                        <tbody class="divide-y divide-slate-100">
                            <tr><td class="px-4 py-2.5 font-bold text-emerald-600 w-16">3 ball</td><td class="px-4 py-2.5 text-slate-700">Asosiy g'oyani aniq izohlaydi, dalil keltiradi, fikrini mustaqil asoslaydi.</td></tr>
                            <tr><td class="px-4 py-2.5 font-bold text-teal-500">2 ball</td><td class="px-4 py-2.5 text-slate-700">Asosiy fikrni tushunadi, dalil yoki izoh yetarli emas.</td></tr>
                            <tr><td class="px-4 py-2.5 font-bold text-amber-500">1 ball</td><td class="px-4 py-2.5 text-slate-700">Javob qisman mos, lekin umumiy va yuzaki.</td></tr>
                            <tr><td class="px-4 py-2.5 font-bold text-rose-500">0 ball</td><td class="px-4 py-2.5 text-slate-700">Javob matn mazmuniga mos emas.</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Right column --}}
            <div class="space-y-5">
                <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Foydalanuvchi harakati</h3>
                    </div>
                    <ol class="divide-y divide-slate-100">
                        @foreach ([
                            "Matnning asosiy g'oyasini aniqlaydi",
                            "Matndagi muhim voqea, qahramon yoki axborotni tanlaydi",
                            "O'quvchini umumlashtirishga yo'naltiruvchi savol tuzadi",
                            "Savolga bir nechta asoslangan javob mumkinligini hisobga oladi",
                            "Javobda matndan dalil yoki izoh talab qiladi",
                            "Savolni o'quvchining yosh darajasiga moslashtiradi",
                        ] as $i => $step)
                            <li class="flex items-start gap-3 px-4 py-2.5">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i + 1 }}</span>
                                <span class="text-xs text-slate-700">{{ $step }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="rounded-xl border border-amber-300 bg-amber-100 p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                            <x-icon name="bulb" class="h-4 w-4 text-white" stroke="1.8" />
                        </span>
                        <h3 class="text-sm font-bold text-amber-900">Metodik izoh</h3>
                    </div>
                    <p class="text-xs text-amber-900 leading-relaxed mb-2">Talqin qilish savollari o'quvchining chuqur tushunish ko'nikmasini rivojlantiradi. Matn bo'laklarga ajratilmaydi, balki yaxlit mazmun sifatida ko'riladi.</p>
                    <p class="text-xs text-amber-900 leading-relaxed mb-2">Faqat "nima bo'ldi?" emas, balki "bu nimani anglatadi?", "muallif nima demoqchi?", "qaysi dalil buni ko'rsatadi?" kabi savollar bering.</p>
                    <p class="text-xs text-amber-900 leading-relaxed">Ayniqsa 3–4-sinflarda samarali, 1–2-sinflarda soddalashtirilgan shaklda qo'llanadi.</p>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-800 to-blue-900 p-5 text-white">
            <div class="flex items-center gap-2 mb-3">
                <x-icon name="sparkle" class="h-4 w-4 text-blue-300" />
                <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
            </div>
            <p class="text-xs text-slate-200 leading-relaxed">Foydalanuvchi matnning asosiy g'oyasi, qahramon xarakteri, muallif fikri va voqealar bog'liqligini ochishga xizmat qiluvchi savollar tuzishni o'rganadi. O'quvchilarda umumlashtirish, izohlash va matn mazmunini chuqur anglash ko'nikmalari rivojlanadi.</p>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('pirls-konstruktor.show', 'xulosa-chiqarish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Xulosa chiqarish savollari
            </a>
            <a href="{{ route('pirls-konstruktor.show', 'baholash-savollari') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                Keyingi: Baholash savollari
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const button = document.getElementById('ai-generate');
        const result = document.getElementById('ai-result');
        const topicInput = document.getElementById('ai-topic');

        const templates = [
            "Matnning asosiy g'oyasi nima?",
            'Muallif bu voqea orqali nima demoqchi?',
            "Qahramonning qaysi harakati eng muhim deb o'ylaysiz?",
            "\"{topic}\" mavzusi matnda qanday ochib berilgan?",
            'Sarlavha matn mazmuniga mosmi? Nega?',
        ];

        button.addEventListener('click', function () {
            button.disabled = true;
            button.textContent = 'AI savollar tayyorlamoqda...';
            result.innerHTML = '';

            setTimeout(function () {
                const topic = topicInput.value.trim() || "matn g'oyasi";
                templates.forEach(function (tpl, i) {
                    const li = document.createElement('div');
                    li.className = 'flex items-start gap-2 rounded-lg bg-violet-50 border border-violet-200 px-3 py-2 text-xs text-violet-900';
                    li.innerHTML = '<span class="font-bold text-violet-600">' + (i + 1) + '.</span><span>' + tpl.replace('{topic}', topic) + '</span>';
                    result.appendChild(li);
                });
                button.disabled = false;
                button.innerHTML = '<svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3.5 13.7 8.8 19 10.5 13.7 12.2 12 17.5 10.3 12.2 5 10.5 10.3 8.8z"/></svg> AI yordamida yaratish';
            }, 700);
        });
    })();
</script>
@endpush
@endsection
