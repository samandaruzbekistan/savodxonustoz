@extends('layouts.app')
@section('title', "Topshiriqni yuklab olish — PIRLS konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.pirls-konstruktor._sidebar', ['activeSlug' => 'yuklab-olish'])
    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="relative mb-6 overflow-hidden rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 via-blue-50 to-sky-50 px-6 py-7 sm:px-8">
            <div class="pointer-events-none absolute -left-14 -top-16 h-56 w-56 rounded-full bg-indigo-300/25 blur-3xl"></div>
            <div class="pointer-events-none absolute -right-10 -bottom-20 h-64 w-64 rounded-full bg-blue-300/25 blur-3xl"></div>
            <img src="{{ asset('images/sections/pirls-konstruktor/20_yulduzlar_dekor.png') }}" alt=""
                 class="pointer-events-none absolute right-8 top-4 hidden h-12 w-12 opacity-80 sm:block">

            <div class="relative flex flex-wrap items-center justify-between gap-6">
                <div class="min-w-0 flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-indigo-600 text-white shadow-sm">7</span>
                        <span class="text-xs text-indigo-700/80 uppercase tracking-wide font-bold">PIRLS topshiriqlari konstruktori • 7-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Topshiriqni PDF/Word shaklida yuklab olish</h1>
                    <p class="mt-2 text-slate-600 leading-relaxed max-w-xl">Saytga joylashga tayyor matn</p>

                    <div class="mt-4">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/80 border border-indigo-200 px-3 py-1.5 text-xs font-semibold text-indigo-700 shadow-sm backdrop-blur">
                            <x-icon name="download" class="h-3.5 w-3.5" /> Yakuniy bosqich
                        </span>
                    </div>
                </div>

                <img src="{{ asset('images/sections/pirls-konstruktor/14_pdf_va_word.png') }}" alt="PDF va Word yuklab olish"
                     class="hidden h-32 w-auto shrink-0 object-contain drop-shadow-xl sm:block">
            </div>
        </div>

        <div class="mb-6 rounded-xl border border-blue-200 bg-blue-50 p-5">
            <p class="text-sm text-blue-900 leading-relaxed">Bu sahifa foydalanuvchiga tayyor PIRLS tipidagi topshiriqlarni saqlash, chop etish, darsda qo'llash yoki metodik portfelga joylash imkonini beradi. Yaratilgan matn, savollar, javob kaliti va baholash mezonlari yagona hujjat shakliga keltiriladi.</p>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            {{-- Main column: document preview --}}
            <div class="lg:col-span-2 space-y-5">

                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5 flex items-center justify-between">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Hujjat tuzilishi</h3>
                        <span class="text-[11px] text-slate-300">10 qism</span>
                    </div>
                    <ol class="divide-y divide-slate-100">
                        @foreach ([
                            "Topshiriq nomi", 'Sinf darajasi', 'Matn turi', "O'qish maqsadi",
                            'Matn', 'Savollar', 'Javob yozish joyi', 'Javob kaliti',
                            'Baholash mezoni', "O'qituvchi uchun metodik izoh",
                        ] as $i => $part)
                            <li class="flex items-start gap-3 px-4 py-2.5">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i + 1 }}</span>
                                <span class="text-xs text-slate-700">{{ $part }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                {{-- Document mock preview --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="mx-auto max-w-md rounded-xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-center text-[10px] font-semibold uppercase tracking-widest text-slate-400 mb-3">Topshiriq namunasi</p>
                        <h4 class="text-center text-sm font-bold text-slate-800 mb-1">"Qushlar uchun uya"</h4>
                        <p class="text-center text-[11px] text-slate-500 mb-4">4-sinf · Badiiy-axborot matn · Axborot olish va xulosa chiqarish</p>
                        <div class="space-y-1.5 rounded-lg bg-white border border-slate-200 p-3">
                            @foreach ([
                                "Jasur kutubxonadan qanday kitob oldi?",
                                "U laylaklar haqida nimani bildi?",
                                "Jasur nima uchun qushlar uchun uya yasashga qaror qildi?",
                                "Jasurning harakati uning qanday bola ekanini ko'rsatadi?",
                                "Siz Jasurning ishini foydali deb hisoblaysizmi? Javobingizni asoslang.",
                            ] as $i => $q)
                                <p class="text-[11px] text-slate-600"><span class="font-semibold text-slate-800">{{ $i + 1 }}.</span> {{ $q }}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-5 flex flex-col gap-3 sm:flex-row">
                        <button type="button" id="download-pdf" class="flex-1 inline-flex items-center justify-center gap-2 rounded-xl bg-rose-600 px-4 py-3 text-sm font-bold text-white hover:bg-rose-700 transition-colors">
                            <x-icon name="doc" class="h-4 w-4" />
                            PDF shaklida yuklab olish
                        </button>
                        <button type="button" id="download-word" class="flex-1 inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-3 text-sm font-bold text-white hover:bg-blue-700 transition-colors">
                            <x-icon name="doc" class="h-4 w-4" />
                            Word shaklida yuklab olish
                        </button>
                    </div>
                    <p id="download-note" class="mt-3 text-center text-xs text-slate-400"></p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Baholash mezoni (hujjatda)</h3>
                    </div>
                    <table class="w-full text-xs">
                        <thead>
                            <tr class="bg-slate-50 text-slate-500">
                                <th class="px-4 py-2 text-left font-semibold">Savol</th>
                                <th class="px-4 py-2 text-left font-semibold">Ko'nikma</th>
                                <th class="px-4 py-2 text-left font-semibold">Ball</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ([
                                ['1-savol', 'Aniq axborotni topish', '1 ball'],
                                ['2-savol', 'Aniq axborotni topish', '1 ball'],
                                ['3-savol', 'Xulosa chiqarish', '2 ball'],
                                ['4-savol', 'Talqin qilish', '3 ball'],
                                ['5-savol', 'Baholash va asoslash', '3 ball'],
                            ] as $row)
                                <tr>
                                    <td class="px-4 py-2.5 font-semibold text-slate-800">{{ $row[0] }}</td>
                                    <td class="px-4 py-2.5 text-slate-700">{{ $row[1] }}</td>
                                    <td class="px-4 py-2.5 font-bold text-blue-600">{{ $row[2] }}</td>
                                </tr>
                            @endforeach
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
                            "Tayyor topshiriqni ko'rib chiqadi",
                            "Savollar tartibini tahrirlaydi",
                            "Zarur bo'lsa, savol yoki javob kalitini o'zgartiradi",
                            "Hujjat shaklini tanlaydi: Word yoki PDF",
                            "\"Yuklab olish\" tugmasini bosadi",
                            "Faylni darsda, amaliyotda yoki talaba portfelida foydalanadi",
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
                    <p class="text-xs text-amber-900 leading-relaxed mb-2">Bu imkoniyat bo'lajak o'qituvchining metodik portfelini shakllantirishga yordam beradi. Talaba yaratgan topshiriqlarini amaliyot darslarida sinab ko'rishi mumkin.</p>
                    <p class="text-xs text-amber-900 leading-relaxed">Platforma oddiy axborot sayti emas, balki amaliy resurs yaratish vositasiga aylanadi.</p>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-800 to-blue-900 p-5 text-white">
            <div class="flex items-center gap-2 mb-3">
                <x-icon name="sparkle" class="h-4 w-4 text-blue-300" />
                <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
            </div>
            <p class="text-xs text-slate-200 leading-relaxed">Foydalanuvchi tayyor PIRLS tipidagi topshiriqni hujjat shaklida oladi, uni dars jarayonida qo'llaydi, metodik portfelga joylaydi yoki o'quvchilar diagnostikasi uchun foydalanadi.</p>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('pirls-konstruktor.show', 'javob-kaliti') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Javob kaliti yaratish
            </a>
            <a href="{{ route('pirls-konstruktor.index') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                Konstruktorga qaytish
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const note = document.getElementById('download-note');
        document.getElementById('download-pdf').addEventListener('click', function () {
            note.textContent = "Bu — namunaviy ko'rinish. Real PDF eksport funksiyasi tez orada ishga tushiriladi.";
        });
        document.getElementById('download-word').addEventListener('click', function () {
            note.textContent = "Bu — namunaviy ko'rinish. Real Word eksport funksiyasi tez orada ishga tushiriladi.";
        });
    })();
</script>
@endpush
@endsection
