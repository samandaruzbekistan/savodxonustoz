@extends('layouts.app')
@section('title', "Literal tushunish savollari — PIRLS konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.pirls-konstruktor._sidebar', ['activeSlug' => 'literal-tushunish'])
    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 flex flex-wrap items-start justify-between gap-3">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-blue-100 text-blue-700">2</span>
                    <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">PIRLS topshiriqlari konstruktori • 2-bo'lim</span>
                </div>
                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Literal tushunish savollari</h1>
                <p class="mt-2 text-slate-600 leading-relaxed max-w-2xl">Saytga joylashga tayyor matn</p>
            </div>
            <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 border border-blue-200 px-3 py-1.5 text-xs font-semibold text-blue-700">
                <x-icon name="search" class="h-3.5 w-3.5" /> 7 ta so'roq birligi
            </span>
        </div>

        <div class="mb-6 rounded-xl border border-blue-200 bg-blue-50 p-5">
            <p class="text-sm text-blue-900 leading-relaxed">Literal tushunish savollari matnda ochiq berilgan axborotni topishga qaratiladi. Bunday savollar o'quvchining matnni diqqat bilan o'qiganini, undagi asosiy faktlarni ko'ra olishini va berilgan ma'lumotni aniqlay olishini tekshiradi. Ularning asosiy vazifasi — o'quvchini matnga qaytarish, kerakli axborotni izlash va javobni matn asosida topishga o'rgatishdir.</p>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            {{-- Main column --}}
            <div class="lg:col-span-2 space-y-5">

                {{-- So'roq birliklari — interactive chip picker --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <h3 class="mb-3 text-sm font-bold text-slate-800">So'roq birliklarini tanlang</h3>
                    <div id="question-words" class="flex flex-wrap gap-2 mb-4">
                        @foreach (['Kim?', 'Nima?', 'Qayerda?', 'Qachon?', 'Qanday?', 'Nechta?', 'Qaysi?'] as $word)
                            <button type="button" data-word="{{ $word }}"
                                    class="qword-btn rounded-full border border-slate-300 px-3.5 py-1.5 text-xs font-semibold text-slate-600 transition-colors hover:border-blue-400 hover:text-blue-700">
                                {{ $word }}
                            </button>
                        @endforeach
                    </div>
                    <div class="rounded-xl border border-dashed border-blue-300 bg-blue-50/60 p-4">
                        <p class="text-xs font-semibold text-blue-800 mb-2">Tanlangan so'roq birligi bilan savol namunasi:</p>
                        <p id="qword-sample" class="text-sm text-blue-900">So'roq birligini tanlang — namunaviy savol shu yerda paydo bo'ladi.</p>
                    </div>
                </div>

                {{-- Matn parchasi --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="hidden sm:block shrink-0">
                            <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="44" cy="44" r="44" class="fill-blue-50"/>
                                <circle cx="34" cy="34" r="9" class="fill-blue-200"/>
                                <path d="M20 66c1-10 8-16 18-16s17 6 18 16" class="stroke-blue-400" stroke-width="2.5" stroke-linecap="round" fill="none"/>
                                <rect x="46" y="42" width="20" height="15" rx="1.5" class="fill-blue-300"/>
                                <path d="M46 46h20M46 50h20M46 54h14" class="stroke-blue-50" stroke-width="1.2"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <h3 class="mb-2 text-sm font-bold text-slate-800">Matn parchasi</h3>
                            <blockquote class="rounded-xl border-l-4 border-blue-400 bg-blue-50/60 px-4 py-3 text-sm italic text-slate-700 leading-relaxed">
                                "Dilnoza ertalab maktab kutubxonasiga bordi. U yerda hayvonlar haqidagi rangli kitobni tanladi."
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                        <div class="bg-slate-800 px-4 py-2.5">
                            <h3 class="text-sm font-bold text-white uppercase tracking-wide">Savol namunalari</h3>
                        </div>
                        <ol class="divide-y divide-slate-100">
                            @foreach ([
                                "Dilnoza ertalab qayerga bordi?",
                                "U qanday kitobni tanladi?",
                                "Kitob nima haqida edi?",
                            ] as $i => $q)
                                <li class="flex items-start gap-3 px-4 py-2.5">
                                    <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i + 1 }}</span>
                                    <span class="text-xs text-slate-700">{{ $q }}</span>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                    <div class="rounded-2xl border border-emerald-200 bg-emerald-50 overflow-hidden">
                        <div class="bg-emerald-600 px-4 py-2.5">
                            <h3 class="text-sm font-bold text-white uppercase tracking-wide">Kutiladigan javoblar</h3>
                        </div>
                        <ol class="divide-y divide-emerald-100">
                            @foreach ([
                                "Dilnoza maktab kutubxonasiga bordi.",
                                "U rangli kitobni tanladi.",
                                "Kitob hayvonlar haqida edi.",
                            ] as $i => $a)
                                <li class="flex items-start gap-3 px-4 py-2.5">
                                    <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" stroke="2.5" />
                                    <span class="text-xs text-emerald-900">{{ $a }}</span>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>

                {{-- Baholash mezoni --}}
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                        <div class="bg-slate-800 px-4 py-2.5">
                            <h3 class="text-sm font-bold text-white uppercase tracking-wide">Baholash mezoni (oddiy savollar uchun)</h3>
                        </div>
                        <table class="w-full text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500">
                                    <th class="px-4 py-2 text-left font-semibold">Ball</th>
                                    <th class="px-4 py-2 text-left font-semibold">Baholash tavsifi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr>
                                    <td class="px-4 py-2.5 font-bold text-emerald-600">1 ball</td>
                                    <td class="px-4 py-2.5 text-slate-700">O'quvchi matndan aniq javobni to'g'ri topadi.</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2.5 font-bold text-rose-500">0 ball</td>
                                    <td class="px-4 py-2.5 text-slate-700">Javob noto'g'ri, noaniq yoki matnga mos emas.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                        <div class="bg-slate-800 px-4 py-2.5">
                            <h3 class="text-sm font-bold text-white uppercase tracking-wide">Kengroq javob talab qilsa</h3>
                        </div>
                        <table class="w-full text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500">
                                    <th class="px-4 py-2 text-left font-semibold">Ball</th>
                                    <th class="px-4 py-2 text-left font-semibold">Baholash tavsifi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr>
                                    <td class="px-4 py-2.5 font-bold text-emerald-600">2 ball</td>
                                    <td class="px-4 py-2.5 text-slate-700">Javob to'liq va matnga mos.</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2.5 font-bold text-amber-500">1 ball</td>
                                    <td class="px-4 py-2.5 text-slate-700">Javob qisman to'g'ri, lekin yetarli emas.</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2.5 font-bold text-rose-500">0 ball</td>
                                    <td class="px-4 py-2.5 text-slate-700">Javob noto'g'ri yoki berilmagan.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
                            "Matndan aniq axborot berilgan gaplarni belgilaydi",
                            "Qahramon, voqea, joy, vaqt, predmet yoki harakatni aniqlaydi",
                            '"Kim?", "Nima?", "Qayerda?", "Qachon?" kabi savol shakllarini tanlaydi',
                            "Savolni qisqa, aniq va o'quvchi yoshiga mos qilib tuzadi",
                            "Javob matndan bevosita topilishini tekshiradi",
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
                    <p class="text-xs text-amber-900 leading-relaxed mb-2">Literal savollar oddiy ko'rinsa-da, ular o'quvchida matn bilan ishlash madaniyatini shakllantiradi. O'quvchi o'z taxminiga emas, matndagi aniq axborotga tayanishni o'rganadi.</p>
                    <p class="text-xs text-amber-900 leading-relaxed">Bo'lajak o'qituvchi literal savollarni haddan tashqari ko'paytirib yubormasligi kerak — faqat shu darajada qolish chuqur fikrlashni rivojlantirmaydi.</p>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-800 to-blue-900 p-5 text-white">
            <div class="flex items-center gap-2 mb-3">
                <x-icon name="sparkle" class="h-4 w-4 text-blue-300" />
                <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
            </div>
            <p class="text-xs text-slate-200 leading-relaxed">Foydalanuvchi matndan aniq axborotni topishga qaratilgan savollar tuzishni o'rganadi. O'quvchilar esa matnni diqqat bilan o'qish, kerakli ma'lumotni topish va javobni matnga tayangan holda berish ko'nikmasini rivojlantiradi.</p>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('pirls-konstruktor.show', 'matn-yuklash') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Matn yuklash oynasi
            </a>
            <a href="{{ route('pirls-konstruktor.show', 'xulosa-chiqarish') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                Keyingi: Xulosa chiqarish savollari
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const samples = {
            'Kim?': 'Kim maktab kutubxonasiga bordi?',
            'Nima?': 'Dilnoza nima qildi?',
            'Qayerda?': 'Dilnoza ertalab qayerga bordi?',
            'Qachon?': 'Dilnoza kutubxonaga qachon bordi?',
            'Qanday?': 'U qanday kitobni tanladi?',
            'Nechta?': 'Nechta kitob tanlandi?',
            'Qaysi?': 'Qaysi mavzudagi kitob tanlandi?',
        };
        const buttons = document.querySelectorAll('.qword-btn');
        const sample = document.getElementById('qword-sample');

        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                buttons.forEach(function (b) {
                    b.classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
                });
                btn.classList.add('bg-blue-600', 'text-white', 'border-blue-600');
                sample.textContent = samples[btn.dataset.word] || '';
            });
        });
    })();
</script>
@endpush
@endsection
