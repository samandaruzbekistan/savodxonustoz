@extends('layouts.app')
@section('title', "Javob kaliti yaratish — PIRLS konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.pirls-konstruktor._sidebar', ['activeSlug' => 'javob-kaliti'])
    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="relative mb-6 overflow-hidden rounded-3xl border border-teal-100 bg-gradient-to-br from-teal-50 via-emerald-50 to-sky-50 px-6 py-7 sm:px-8">
            <div class="pointer-events-none absolute -left-14 -top-16 h-56 w-56 rounded-full bg-teal-300/25 blur-3xl"></div>
            <div class="pointer-events-none absolute -right-10 -bottom-20 h-64 w-64 rounded-full bg-emerald-300/25 blur-3xl"></div>

            <div class="relative flex flex-wrap items-center justify-between gap-6">
                <div class="min-w-0 flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-teal-600 text-white shadow-sm">6</span>
                        <span class="text-xs text-teal-700/80 uppercase tracking-wide font-bold">PIRLS topshiriqlari konstruktori • 6-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Javob kaliti yaratish</h1>
                    <p class="mt-2 text-slate-600 leading-relaxed max-w-xl">Saytga joylashga tayyor matn</p>

                    <div class="mt-4">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/80 border border-teal-200 px-3 py-1.5 text-xs font-semibold text-teal-700 shadow-sm backdrop-blur">
                            <x-icon name="clipboard" class="h-3.5 w-3.5" /> 7 qismli kalit
                        </span>
                    </div>
                </div>

                <img src="{{ asset('images/sections/pirls-konstruktor/13_javob_sifati_kalit.png') }}" alt="Javob kaliti yaratish"
                     class="hidden h-32 w-auto shrink-0 object-contain drop-shadow-xl sm:block">
            </div>
        </div>

        <div class="mb-6 rounded-xl border border-blue-200 bg-blue-50 p-5">
            <p class="text-sm text-blue-900 leading-relaxed">"Javob kaliti yaratish" sahifasi PIRLS topshiriqlarining muhim bosqichidir. Savol qanchalik yaxshi tuzilmasin, agar unga aniq javob kaliti va baholash mezoni ishlab chiqilmasa, topshiriqning diagnostik qiymati pasayadi. Javob kaliti o'qituvchiga qaysi javob to'liq, qaysi qisman, qaysi noto'g'ri ekanini oldindan belgilab olish imkonini beradi.</p>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            {{-- Main column --}}
            <div class="lg:col-span-2 space-y-5">

                {{-- Javob kaliti qismlari — interactive stepper --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <h3 class="mb-3 text-sm font-bold text-slate-800">Javob kaliti qismini tanlang</h3>
                    <div id="key-parts" class="flex flex-wrap gap-2 mb-4">
                        @foreach ([
                            'savol' => 'Savol matni: Kamola sinfdoshiga nima uchun yordam berdi?',
                            'toliq' => "To'liq javob: Kamola sinfdoshining daftarini unutib qoldirganini ko'rdi va unga yordam berishni xohladi. Bu uning mehribon va e'tiborli qiz ekanini ko'rsatadi.",
                            'qisman' => "Qisman javob: Chunki sinfdoshi daftarini unutgan edi.",
                            'notogri' => "Noto'g'ri javob: Chunki Kamola kitob o'qidi.",
                            'ball' => "Ball: 2 ball (to'liq), 1 ball (qisman), 0 ball (noto'g'ri)",
                            'tavsiya' => "Rivojlantiruvchi tavsiya: Javobingizni yana bitta dalil bilan boyiting.",
                        ] as $key => $text)
                            <button type="button" data-text="{{ $text }}"
                                    class="key-btn rounded-full border border-slate-300 px-3.5 py-1.5 text-xs font-semibold capitalize text-slate-600 transition-colors hover:border-teal-400 hover:text-teal-700">
                                {{ $key }}
                            </button>
                        @endforeach
                    </div>
                    <div class="rounded-xl border border-dashed border-teal-300 bg-teal-50/60 p-4">
                        <p id="key-sample" class="text-sm text-teal-900">Qismni tanlang — mazmuni shu yerda ko'rinadi.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Savol namunasi</h3>
                    </div>
                    <div class="p-4 space-y-3">
                        <p class="text-xs font-semibold text-slate-700">Savol: Kamola sinfdoshiga nima uchun yordam berdi?</p>
                        <div class="rounded-lg border border-emerald-200 bg-emerald-50 p-3">
                            <p class="text-[11px] font-bold uppercase tracking-wide text-emerald-700 mb-1">To'liq javob</p>
                            <p class="text-xs text-emerald-900">Kamola sinfdoshining daftarini unutib qoldirganini ko'rdi va unga yordam berishni xohladi. Bu uning mehribon va e'tiborli qiz ekanini ko'rsatadi.</p>
                        </div>
                        <div class="rounded-lg border border-amber-200 bg-amber-50 p-3">
                            <p class="text-[11px] font-bold uppercase tracking-wide text-amber-700 mb-1">Qisman javob</p>
                            <p class="text-xs text-amber-900">Chunki sinfdoshi daftarini unutgan edi.</p>
                        </div>
                        <div class="rounded-lg border border-rose-200 bg-rose-50 p-3">
                            <p class="text-[11px] font-bold uppercase tracking-wide text-rose-700 mb-1">Noto'g'ri javob</p>
                            <p class="text-xs text-rose-900">Chunki Kamola kitob o'qidi.</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                        <div class="bg-slate-800 px-4 py-2.5">
                            <h3 class="text-sm font-bold text-white uppercase tracking-wide">Baholash mezoni</h3>
                        </div>
                        <table class="w-full text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500">
                                    <th class="px-3 py-2 text-left font-semibold">Ball</th>
                                    <th class="px-3 py-2 text-left font-semibold">Javob turi</th>
                                    <th class="px-3 py-2 text-left font-semibold">Izoh</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr><td class="px-3 py-2 font-bold text-emerald-600">2</td><td class="px-3 py-2 text-slate-700">To'liq javob</td><td class="px-3 py-2 text-slate-500">Sabab tushuntirilgan, xulosa bor.</td></tr>
                                <tr><td class="px-3 py-2 font-bold text-amber-500">1</td><td class="px-3 py-2 text-slate-700">Qisman javob</td><td class="px-3 py-2 text-slate-500">Sabab aytilgan, izoh yetarli emas.</td></tr>
                                <tr><td class="px-3 py-2 font-bold text-rose-500">0</td><td class="px-3 py-2 text-slate-700">Noto'g'ri javob</td><td class="px-3 py-2 text-slate-500">Javob matnga mos emas.</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                        <div class="bg-slate-800 px-4 py-2.5">
                            <h3 class="text-sm font-bold text-white uppercase tracking-wide">Kengaytirilgan javob uchun</h3>
                        </div>
                        <table class="w-full text-xs">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500">
                                    <th class="px-3 py-2 text-left font-semibold">Ball</th>
                                    <th class="px-3 py-2 text-left font-semibold">Javob sifati</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr><td class="px-3 py-2 font-bold text-emerald-600">3</td><td class="px-3 py-2 text-slate-700">To'liq, dalil bor, xulosa aniq.</td></tr>
                                <tr><td class="px-3 py-2 font-bold text-teal-500">2</td><td class="px-3 py-2 text-slate-700">To'g'ri, dalil yoki xulosa yetarli emas.</td></tr>
                                <tr><td class="px-3 py-2 font-bold text-amber-500">1</td><td class="px-3 py-2 text-slate-700">Qisman to'g'ri, izoh yuzaki.</td></tr>
                                <tr><td class="px-3 py-2 font-bold text-rose-500">0</td><td class="px-3 py-2 text-slate-700">Noto'g'ri yoki berilmagan.</td></tr>
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
                            "Har bir savol uchun kutiladigan javobni yozadi",
                            "Ochiq savollar uchun bir nechta maqbul javob variantini belgilaydi",
                            "Qisman to'g'ri javob qanday bo'lishini aniqlaydi",
                            "Noto'g'ri javobga misol yozadi",
                            "Ball mezonini belgilaydi",
                            "O'quvchiga beriladigan qisqa tavsiyani yozadi",
                            "Javob kalitini topshiriq varag'iga qo'shadi",
                        ] as $i => $step)
                            <li class="flex items-start gap-3 px-4 py-2.5">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i + 1 }}</span>
                                <span class="text-xs text-slate-700">{{ $step }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">PIRLS savollarining 4 darajali modeli</h3>
                    </div>
                    <table class="w-full text-[11px]">
                        <tbody class="divide-y divide-slate-100">
                            @foreach ([
                                ['d' => '1', 'turi' => 'Aniq axborotni topish', 'rang' => 'blue'],
                                ['d' => '2', 'turi' => 'Xulosa chiqarish', 'rang' => 'emerald'],
                                ['d' => '3', 'turi' => 'Talqin qilish', 'rang' => 'violet'],
                                ['d' => '4', 'turi' => 'Baholash va asoslash', 'rang' => 'rose'],
                            ] as $row)
                                <tr>
                                    <td class="px-3 py-2 w-8"><span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-{{ $row['rang'] }}-100 text-{{ $row['rang'] }}-700 font-bold text-[10px]">{{ $row['d'] }}</span></td>
                                    <td class="px-3 py-2 text-slate-700">{{ $row['turi'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="rounded-xl border border-amber-300 bg-amber-100 p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                            <x-icon name="bulb" class="h-4 w-4 text-white" stroke="1.8" />
                        </span>
                        <h3 class="text-sm font-bold text-amber-900">Metodik izoh</h3>
                    </div>
                    <p class="text-xs text-amber-900 leading-relaxed mb-2">Javob kaliti o'qituvchining baholashdagi subyektivligini kamaytiradi — ayniqsa ochiq javobli savollarni tekshirishda.</p>
                    <p class="text-xs text-amber-900 leading-relaxed">Bitta yagona so'zma-so'z javobni kutmang. Muhimi — javob matn mazmuniga mos, dalilli va mantiqli bo'lishi.</p>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-800 to-blue-900 p-5 text-white">
            <div class="flex items-center gap-2 mb-3">
                <x-icon name="sparkle" class="h-4 w-4 text-blue-300" />
                <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
            </div>
            <p class="text-xs text-slate-200 leading-relaxed">Foydalanuvchi har bir savol uchun javob kaliti, qisman javob va baholash mezonini tuzishni o'rganadi. Bu orqali topshiriqning aniqligi, adolatliligi va metodik qiymati oshadi.</p>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('pirls-konstruktor.show', 'baholash-savollari') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Baholash savollari
            </a>
            <a href="{{ route('pirls-konstruktor.show', 'yuklab-olish') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                Keyingi: Pdf, Word yuklab olish
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const buttons = document.querySelectorAll('.key-btn');
        const sample = document.getElementById('key-sample');

        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                buttons.forEach(function (b) {
                    b.classList.remove('bg-teal-600', 'text-white', 'border-teal-600');
                });
                btn.classList.add('bg-teal-600', 'text-white', 'border-teal-600');
                sample.textContent = btn.dataset.text || '';
            });
        });
    })();
</script>
@endpush
@endsection
