@extends('layouts.app')
@section('title', "Xulosa chiqarish savollari — PIRLS konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.pirls-konstruktor._sidebar', ['activeSlug' => 'xulosa-chiqarish'])
    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 flex flex-wrap items-start justify-between gap-3">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-blue-100 text-blue-700">3</span>
                    <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">PIRLS topshiriqlari konstruktori • 3-bo'lim</span>
                </div>
                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Xulosa chiqarish savollari</h1>
                <p class="mt-2 text-slate-600 leading-relaxed max-w-2xl">Saytga joylashga tayyor matn</p>
            </div>
            <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 border border-blue-200 px-3 py-1.5 text-xs font-semibold text-blue-700">
                <x-icon name="bulb" class="h-3.5 w-3.5" /> 2-daraja savollari
            </span>
        </div>

        <div class="mb-6 rounded-xl border border-blue-200 bg-blue-50 p-5">
            <p class="text-sm text-blue-900 leading-relaxed">Xulosa chiqarish savollari o'quvchining matnda bevosita aytilmagan, lekin matn mazmunidan anglash mumkin bo'lgan fikrni topishiga yordam beradi. Javob matnda aynan tayyor holda berilmaydi — o'quvchi qahramonning harakati, voqealar ketma-ketligi yoki muallif bergan ishoralarga tayanib javob beradi.</p>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            {{-- Main column --}}
            <div class="lg:col-span-2 space-y-5">

                {{-- Matn parchasi with illustration --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="hidden sm:block shrink-0">
                            <svg width="96" height="88" viewBox="0 0 96 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="48" cy="44" r="44" class="fill-emerald-50"/>
                                <circle cx="32" cy="32" r="8" class="fill-emerald-300"/>
                                <path d="M20 62c1-9 6-14 12-14s11 5 12 14" class="stroke-emerald-400" stroke-width="2.2" stroke-linecap="round" fill="none"/>
                                <circle cx="66" cy="34" r="8" class="fill-teal-300"/>
                                <path d="M54 62c1-9 6-14 12-14s11 5 12 14" class="stroke-teal-400" stroke-width="2.2" stroke-linecap="round" fill="none"/>
                                <path d="M40 30h16" class="stroke-slate-300" stroke-width="1.6" stroke-dasharray="2 3"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <h3 class="mb-2 text-sm font-bold text-slate-800">Matn parchasi</h3>
                            <blockquote class="rounded-xl border-l-4 border-emerald-400 bg-emerald-50/60 px-4 py-3 text-sm italic text-slate-700 leading-relaxed">
                                "Kamola sinfdoshi daftarini uyda unutib qoldirganini eshitdi. U o'z daftarining bo'sh varag'ini yirtib, sinfdoshiga berdi."
                            </blockquote>
                        </div>
                    </div>
                </div>

                {{-- Interactive: harakatdan xulosa --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <h3 class="mb-3 text-sm font-bold text-slate-800">Harakatni tanlang — mos xulosa savolini ko'ring</h3>
                    <div id="action-picker" class="flex flex-wrap gap-2 mb-4">
                        @foreach ([
                            'varaq berdi' => "Kamola nima uchun sinfdoshiga varaq berdi?",
                            'yordam so\'radi' => "Sinfdoshi nima uchun Kamoladan yordam so'radi?",
                            'jim qoldi' => "Kamola nima uchun jim qoldi deb o'ylaysiz?",
                        ] as $action => $question)
                            <button type="button" data-question="{{ $question }}"
                                    class="action-btn rounded-full border border-slate-300 px-3.5 py-1.5 text-xs font-semibold text-slate-600 transition-colors hover:border-emerald-400 hover:text-emerald-700">
                                {{ $action }}
                            </button>
                        @endforeach
                    </div>
                    <div class="rounded-xl border border-dashed border-emerald-300 bg-emerald-50/60 p-4">
                        <p class="text-xs font-semibold text-emerald-800 mb-2">Yuzaga keladigan xulosa savoli:</p>
                        <p id="action-sample" class="text-sm text-emerald-900">Harakatni tanlang — savol shu yerda paydo bo'ladi.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Xulosa chiqarish savollari</h3>
                    </div>
                    <ol class="divide-y divide-slate-100">
                        @foreach ([
                            "Kamola nima uchun sinfdoshiga varaq berdi?",
                            "Kamolaning bu harakati uning qanday qiz ekanini ko'rsatadi?",
                            "Sinfdoshi Kamolaning yordamidan keyin o'zini qanday his qilgan bo'lishi mumkin?",
                            "Bu voqeadan qanday xulosa chiqarish mumkin?",
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
                    <p class="text-xs text-emerald-900 leading-relaxed">Kamola sinfdoshiga yordam berishni xohladi, chunki u daftarini unutib qoldirgan edi. Bu Kamolaning mehribon va yordamga tayyor qiz ekanini ko'rsatadi.</p>
                </div>

                {{-- Baholash mezoni --}}
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                        <div class="bg-slate-800 px-4 py-2.5">
                            <h3 class="text-sm font-bold text-white uppercase tracking-wide">Baholash mezoni (oddiy)</h3>
                        </div>
                        <table class="w-full text-xs">
                            <tbody class="divide-y divide-slate-100">
                                <tr><td class="px-4 py-2.5 font-bold text-emerald-600 w-16">2 ball</td><td class="px-4 py-2.5 text-slate-700">To'g'ri xulosa chiqaradi va matndan dalil keltiradi.</td></tr>
                                <tr><td class="px-4 py-2.5 font-bold text-amber-500">1 ball</td><td class="px-4 py-2.5 text-slate-700">Qisman to'g'ri xulosa, dalil yetarli emas.</td></tr>
                                <tr><td class="px-4 py-2.5 font-bold text-rose-500">0 ball</td><td class="px-4 py-2.5 text-slate-700">Javob matnga mos emas yoki xulosa noto'g'ri.</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                        <div class="bg-slate-800 px-4 py-2.5">
                            <h3 class="text-sm font-bold text-white uppercase tracking-wide">Murakkabroq savollar uchun</h3>
                        </div>
                        <table class="w-full text-xs">
                            <tbody class="divide-y divide-slate-100">
                                <tr><td class="px-4 py-2.5 font-bold text-emerald-600 w-16">3 ball</td><td class="px-4 py-2.5 text-slate-700">Xulosa aniq, dalil bor, fikr mustaqil izohlangan.</td></tr>
                                <tr><td class="px-4 py-2.5 font-bold text-teal-500">2 ball</td><td class="px-4 py-2.5 text-slate-700">Xulosa to'g'ri, izoh yetarli emas.</td></tr>
                                <tr><td class="px-4 py-2.5 font-bold text-amber-500">1 ball</td><td class="px-4 py-2.5 text-slate-700">Javob yuzaki, matnga qisman mos.</td></tr>
                                <tr><td class="px-4 py-2.5 font-bold text-rose-500">0 ball</td><td class="px-4 py-2.5 text-slate-700">Javob noto'g'ri yoki berilmagan.</td></tr>
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
                            "Matndagi qahramon harakati yoki muhim voqeani tanlaydi",
                            "Ushbu harakatning sababini aniqlashga yo'naltirilgan savol tuzadi",
                            "Javob matnda aynan berilmaganini, mazmun orqali topilishini tekshiradi",
                            "O'quvchidan javobini matndan dalil bilan asoslashni talab qiladi",
                            "Javobning bir nechta to'g'ri variantlari bo'lishi mumkinligini hisobga oladi",
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
                    <p class="text-xs text-amber-900 leading-relaxed mb-2">Xulosa chiqarish savollari o'quvchining fikrlash faoliyatini faollashtiradi. O'quvchi matndagi yashirin ma'noni izlaydi, qahramon harakatini tahlil qiladi va o'z javobini asoslashga harakat qiladi.</p>
                    <p class="text-xs text-amber-900 leading-relaxed">Tavsiya: "Qanday bildingiz?" savolini ham qo'shing — bu o'quvchini matndan dalil topishga o'rgatadi.</p>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-800 to-blue-900 p-5 text-white">
            <div class="flex items-center gap-2 mb-3">
                <x-icon name="sparkle" class="h-4 w-4 text-blue-300" />
                <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
            </div>
            <p class="text-xs text-slate-200 leading-relaxed">Foydalanuvchi o'quvchilarni matndan yashirin ma'noni topishga, sabab-oqibatni anglashga va qahramon harakatidan xulosa chiqarishga yo'naltiruvchi savollar tuzishni o'rganadi. O'quvchilarda tahliliy fikrlash va dalilga asoslangan javob berish ko'nikmasi rivojlanadi.</p>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('pirls-konstruktor.show', 'literal-tushunish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Literal tushunish savollari
            </a>
            <a href="{{ route('pirls-konstruktor.show', 'talqin-qilish') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                Keyingi: Talqin qilish savollari
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const buttons = document.querySelectorAll('.action-btn');
        const sample = document.getElementById('action-sample');

        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                buttons.forEach(function (b) {
                    b.classList.remove('bg-emerald-600', 'text-white', 'border-emerald-600');
                });
                btn.classList.add('bg-emerald-600', 'text-white', 'border-emerald-600');
                sample.textContent = btn.dataset.question || '';
            });
        });
    })();
</script>
@endpush
@endsection
