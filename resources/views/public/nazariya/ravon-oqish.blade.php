@extends('layouts.app')
@section('title', "Ravon o'qish")
@section('content')
@php
    $ravonMaterials = \App\Models\Resource::query()
        ->published()
        ->with('category')
        ->whereHas('category', fn ($q) => $q->whereIn('slug', [
            'ona-tili-va-oqish-savodxonligi',
            'oqish-kitobi',
        ]))
        ->latest('published_at')
        ->take(4)
        ->get();

    $formatBytes = function (int $bytes): string {
        return $bytes >= 1048576
            ? number_format($bytes / 1048576, 1).' MB'
            : number_format(max($bytes, 0) / 1024, 0).' KB';
    };
@endphp
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'ravon-oqish'])
    <div class="min-w-0 flex-1">

        {{-- ============ HERO ============ --}}
        <div class="su-reveal relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-emerald-950 via-emerald-900 to-teal-900 shadow-sm">
            <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-white/5 su-blob"></div>
            <div class="pointer-events-none absolute -bottom-16 left-1/4 h-40 w-40 rounded-full bg-white/5"></div>

            <div class="relative z-10 grid grid-cols-1 items-center gap-6 px-7 py-9 sm:px-10 sm:py-10 lg:grid-cols-[1.15fr_0.85fr]">
                <div class="max-w-xl">
                    <span class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">5</span>
                        Nazariya · 5-bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl lg:text-[44px]">Ravon o'qish</h1>
                    <p class="mt-4 max-w-lg text-sm leading-relaxed text-emerald-100 sm:text-[15px]">Ravon o'qish tushunchasi, uning uch asosiy tarkibiy qismi — aniqlik, tezlik, ifodalilik — va rivojlantirish usullari yoritiladi.</p>

                    <div class="mt-7 flex flex-wrap items-center gap-3">
                        <a href="#tarkibiy-qism" class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-emerald-900 shadow-lg shadow-black/10 transition hover:-translate-y-0.5 hover:bg-emerald-50">
                            <x-icon name="play" class="h-4 w-4" />
                            Darsni boshlash
                        </a>
                        <a href="#materiallar" class="inline-flex items-center gap-2 rounded-xl bg-white/10 px-5 py-3 text-sm font-bold text-white ring-1 ring-white/25 backdrop-blur-sm transition hover:bg-white/20">
                            <x-icon name="download" class="h-4 w-4" />
                            Materiallarni ko'rish
                        </a>
                    </div>
                </div>

                <div class="relative mx-auto hidden h-64 w-full max-w-sm lg:block">
                    <img src="{{ asset('images/nazariya/ravon-oqish/bola-kitob-bilan.png') }}" alt="Bola ravon o'qimoqda" class="absolute bottom-0 left-2 h-60 w-auto object-contain drop-shadow-2xl" loading="lazy">
                    <img src="{{ asset('images/nazariya/ravon-oqish/ifodalilik-grafik.png') }}" alt="Aniqlik, tezlik, ifodalilik" class="su-float absolute -right-2 top-2 h-36 w-auto object-contain drop-shadow-2xl">
                </div>
            </div>
        </div>

        {{-- ============ 01 · SAHIFA HAQIDA ============ --}}
        <div id="maqsad" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">01 &middot; Sahifa haqida</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Nima haqida bilib olasiz?</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md sm:p-6">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                            <x-icon name="compass" class="h-5 w-5" />
                        </span>
                        <h3 class="text-[15px] font-bold text-slate-800">Sahifaning maqsadi</h3>
                    </div>
                    <p class="text-[13px] leading-relaxed text-slate-500">Ushbu sahifaning maqsadi ravon o'qish tushunchasini izohlash, uning o'qish savodxonligi bilan bog'liqligini ko'rsatish va boshlang'ich sinf o'quvchilarida ravon o'qishni rivojlantirish usullarini yoritishdan iborat.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md sm:p-6">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-teal-50 text-teal-600">
                            <x-icon name="book" class="h-5 w-5" />
                        </span>
                        <h3 class="text-[15px] font-bold text-slate-800">Ravon o'qish nima?</h3>
                    </div>
                    <p class="text-[13px] leading-relaxed text-slate-500">Ravon o'qish — bu matnni to'g'ri, me'yorida, ifodali va tushungan holda o'qish qobiliyatidir. Ravon o'qish faqat tez o'qish degani emas. Agar o'quvchi juda tez o'qisa-yu, mazmunni tushunmasa, bu haqiqiy ravon o'qish hisoblanmaydi.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md sm:p-6">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-amber-50 text-amber-600">
                            <x-icon name="bulb" class="h-5 w-5" />
                        </span>
                        <h3 class="text-[15px] font-bold text-slate-800">Nega bu muhim?</h3>
                    </div>
                    <p class="text-[13px] leading-relaxed text-slate-500">Ravon o'qish matnni tushunishga bevosita ta'sir qiladi. Shuning uchun boshlang'ich sinfda ravon o'qishni rivojlantirish o'qish savodxonligining muhim sharti hisoblanadi.</p>
                </div>
            </div>
        </div>

        {{-- ============ 02 · UCH ASOSIY TARKIBIY QISM ============ --}}
        <div id="tarkibiy-qism" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">02 &middot; Tarkibiy qismlar</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Ravon o'qish uch asosiy tarkibiy qismdan iborat</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                @foreach ([
                    ['n'=>'01','title'=>'Aniqlik','desc'=>"Biror so'zni xatosiz va to'g'ri o'qish.",'img'=>'aniqlik-nishoni.png','tint'=>'bg-emerald-50 text-emerald-600','ring'=>'hover:border-emerald-200'],
                    ['n'=>'02','title'=>'Tezlik','desc'=>"Yoshiga mos sur'atda o'qish.",'img'=>'tezlik-sekundomer.png','tint'=>'bg-blue-50 text-blue-600','ring'=>'hover:border-blue-200'],
                    ['n'=>'03','title'=>'Ifodalilik','desc'=>"Tinish belgilariga, ohang va mazmunga mos ravishda o'qish.",'img'=>'ifodalilik-grafik.png','tint'=>'bg-orange-50 text-orange-600','ring'=>'hover:border-orange-200'],
                ] as $q)
                    <div class="group flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg {{ $q['ring'] }}">
                        <div class="relative flex h-40 shrink-0 items-center justify-center overflow-hidden bg-gradient-to-br from-slate-50 to-slate-100">
                            <img src="{{ asset('images/nazariya/ravon-oqish/'.$q['img']) }}" alt="{{ $q['title'] }}" loading="lazy" class="h-[80%] w-auto object-contain transition duration-300 group-hover:scale-105">
                        </div>
                        <div class="flex flex-1 flex-col p-5 text-center">
                            <span class="mx-auto mb-2 inline-flex h-8 w-8 items-center justify-center rounded-full text-xs font-bold {{ $q['tint'] }}">{{ $q['n'] }}</span>
                            <h4 class="mb-1 text-base font-bold text-slate-800">{{ $q['title'] }}</h4>
                            <p class="text-[13px] leading-relaxed text-slate-500">{{ $q['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ============ 03 · RIVOJLANTIRISH USULLARI ============ --}}
        <div id="usullar" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">03 &middot; Amaliy usullar</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Ravon o'qishni rivojlantirish usullari</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-[1fr_1.2fr]">
                <div class="relative min-h-[220px] overflow-hidden rounded-2xl bg-gradient-to-br from-emerald-100 via-teal-50 to-emerald-100 shadow-sm">
                    <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-emerald-200/50 blur-2xl"></div>
                    <div class="pointer-events-none absolute -bottom-10 -left-8 h-36 w-36 rounded-full bg-teal-200/40 blur-2xl"></div>
                    <img src="{{ asset('images/nazariya/ravon-oqish/suhbatlashayotgan-bolalar.png') }}" alt="O'quvchilar birgalikda o'qimoqda" class="absolute inset-0 m-auto h-[88%] w-auto object-contain drop-shadow-xl" loading="lazy">
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                    <div class="mb-4 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                            <x-icon name="sparkle" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Sinfda qo'llash mumkin bo'lgan 8 ta usul</h3>
                    </div>
                    <ul class="grid grid-cols-1 gap-2.5 sm:grid-cols-2">
                        @foreach (["takroriy o'qish","juftlikda o'qish","o'qituvchi ortidan o'qish","audio bilan birga o'qish","rollarga bo'lib o'qish","ifodali o'qish musobaqasi","o'z ovozini yozib eshitish","qisqa matnni vaqt bilan o'qish"] as $u)
                            <li class="flex items-start gap-2.5 rounded-xl bg-emerald-50/60 p-3 text-[13px] leading-snug text-slate-700">
                                <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600" stroke="2.5" />
                                {{ $u }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- ============ 04 · METODIK AHAMIYAT ============ --}}
        <div id="metodik" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">04 &middot; Metodik ahamiyat</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Bo'lajak o'qituvchi uchun metodik ahamiyati</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="relative min-h-[220px] overflow-hidden rounded-2xl bg-gradient-to-br from-blue-50 via-slate-50 to-emerald-50 shadow-sm">
                    <div class="pointer-events-none absolute -right-8 -top-10 h-28 w-28 rounded-full bg-blue-200/40 blur-2xl"></div>
                    <div class="pointer-events-none absolute -bottom-10 -left-8 h-32 w-32 rounded-full bg-emerald-200/30 blur-2xl"></div>
                    <img src="{{ asset('images/nazariya/ravon-oqish/oqituvchi.png') }}" alt="Bo'lajak o'qituvchi" class="absolute inset-0 m-auto h-[85%] w-auto object-contain drop-shadow-xl" loading="lazy">
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Nimaga e'tibor qaratish kerak?</h3>
                    </div>
                    <p class="text-[13px] leading-relaxed text-slate-500">Bo'lajak o'qituvchi ravon o'qishni baholashda faqat tezlikka e'tibor bermasligi kerak. U o'quvchining so'zlarni to'g'ri o'qishi, ifodali o'qishi va matn mazmunini tushunishi bilan birgalikda kuzatishi lozim.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                            <x-icon name="sparkle" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Bu sahifa talabalarga nimani o'rgatadi?</h3>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (["ravon o'qish mezonlarini aniqlash","o'quvchining o'qishdagi xatolarini tahlil qilish","ravon o'qishga oid mashqlar tanlash","o'qish tezligi va tushunish o'rtasidagi muvozanatni saqlash","individual yondashuvni qo'llash"] as $k)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-500" stroke="2.5" />
                                {{ $k }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- ============ 05 · AMALIY MISOLLAR ============ --}}
        <div id="amaliyot" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">05 &middot; Amaliyot</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Amaliy misollar</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach ([
                    ['n'=>1,'icon'=>'compass','tint'=>'bg-emerald-50 text-emerald-600','img'=>'kitob-oqiyotgan-bola.png','title'=>"Mashq 1. Takroriy o'qish",'text'=>"O'quvchi 5–6 gapdan iborat matnni birinchi marta o'qiydi. O'qituvchi xatolarni belgilaydi. Keyin o'quvchi shu matnni ikkinchi va uchinchi marta o'qiydi. Har safar o'qish aniqligi va ifodaliligi yaxshilanadi."],
                    ['n'=>2,'icon'=>'play','tint'=>'bg-blue-50 text-blue-600','img'=>'bola-naushnik-bilan.png','title'=>"Mashq 2. Audio bilan o'qish",'text'=>"O'quvchi avval matn audiosini tinglaydi. So'ng audio bilan birga o'qiydi. Keyin mustaqil o'qib, o'z ovozini yozadi va solishtiradi."],
                    ['n'=>3,'icon'=>'users','tint'=>'bg-orange-50 text-orange-600','img'=>'suhbatlashayotgan-bolalar.png','title'=>"Mashq 3. Rollarga bo'lib o'qish",'text'=>"Dialogli matn tanlanadi. O'quvchilar qahramonlarga bo'linib o'qiydi. Bu usul ifodali o'qish va matn mazmunini tushunishga yordam beradi."],
                ] as $m)
                    <div class="group flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative flex h-36 shrink-0 items-center justify-center overflow-hidden bg-gradient-to-br from-slate-50 to-slate-100">
                            <img src="{{ asset('images/nazariya/ravon-oqish/'.$m['img']) }}" alt="{{ $m['title'] }}" loading="lazy" class="h-[82%] w-auto object-contain transition duration-300 group-hover:scale-105">
                        </div>
                        <div class="flex flex-1 flex-col p-4">
                            <div class="mb-2 flex items-center gap-2.5">
                                <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg {{ $m['tint'] }}">
                                    <x-icon :name="$m['icon']" class="h-4 w-4" />
                                </span>
                                <h4 class="text-xs font-bold uppercase text-slate-700">{{ $m['title'] }}</h4>
                            </div>
                            <p class="text-[13px] leading-relaxed text-slate-500">{{ $m['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ============ 06 · MATERIALLAR (FILE PREVIEW CARDS) ============ --}}
        @if ($ravonMaterials->isNotEmpty())
            <div id="materiallar" class="mb-10 scroll-mt-20">
                <div class="mb-5 flex items-end justify-between gap-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">06 &middot; Materiallar</span>
                        <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Mavzu bo'yicha materiallar</h2>
                    </div>
                    <a href="{{ route('resources.index') }}" class="hidden shrink-0 items-center gap-1.5 text-xs font-bold text-emerald-600 hover:text-emerald-700 sm:inline-flex">
                        Barcha resurslar
                        <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($ravonMaterials as $material)
                        <div class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="relative h-48 overflow-hidden bg-gradient-to-br from-emerald-50 via-teal-50 to-emerald-100">
                                <div class="absolute right-2 top-2 z-10">
                                    <x-resource.file-badge :extension="$material->extension" />
                                </div>
                                @if ($material->coverUrl())
                                    <img src="{{ $material->coverUrl() }}" alt="{{ $material->title }} — 1-sahifa" loading="lazy"
                                         class="absolute inset-0 h-full w-full object-cover object-top transition duration-300 group-hover:scale-105">
                                    <span class="absolute bottom-2 left-2 rounded-full bg-black/60 px-2 py-0.5 text-[10px] font-semibold text-white backdrop-blur-sm">1-sahifa</span>
                                @else
                                    <div class="absolute inset-0 flex items-center justify-center p-6 transition duration-300 group-hover:scale-105">
                                        <div class="flex h-full w-[78%] flex-col rounded-md bg-white shadow-md ring-1 ring-slate-900/5">
                                            <div class="h-1.5 shrink-0 rounded-t-md bg-emerald-400"></div>
                                            <div class="flex-1 space-y-1.5 p-3">
                                                <div class="h-1.5 w-3/4 rounded-full bg-slate-200"></div>
                                                <div class="h-1.5 w-full rounded-full bg-slate-100"></div>
                                                <div class="h-1.5 w-full rounded-full bg-slate-100"></div>
                                                <div class="h-1.5 w-5/6 rounded-full bg-slate-100"></div>
                                                <div class="mt-2 h-1.5 w-2/3 rounded-full bg-slate-200"></div>
                                                <div class="h-1.5 w-full rounded-full bg-slate-100"></div>
                                                <div class="h-1.5 w-4/5 rounded-full bg-slate-100"></div>
                                            </div>
                                            <div class="flex items-center justify-center border-t border-slate-100 py-1.5">
                                                <x-icon name="doc" class="h-4 w-4 text-emerald-400" />
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="line-clamp-2 text-sm font-bold leading-snug text-slate-800">{{ $material->title }}</h3>
                                <p class="mt-1 text-xs text-slate-400">{{ $material->category?->name }}</p>
                                <div class="mt-2 flex items-center gap-2 text-[11px] text-slate-400">
                                    <span>{{ $formatBytes((int) $material->file_size) }}</span>
                                    <span>&middot;</span>
                                    <span class="inline-flex items-center gap-1"><x-icon name="download" class="h-3 w-3" /> {{ $material->download_count }}</span>
                                </div>
                                <a href="{{ route('resources.download', $material->slug) }}"
                                   class="mt-3 inline-flex items-center justify-center gap-2 rounded-lg bg-emerald-600 px-3 py-2 text-xs font-bold text-white transition hover:bg-emerald-700">
                                    <x-icon name="download" class="h-3.5 w-3.5" /> Yuklab olish
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- ============ 07 · SAVOL-TOPSHIRIQLAR ============ --}}
        <div id="savollar" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">07 &middot; Mustahkamlash</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Savol-topshiriqlar</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm md:grid-cols-[1fr_180px]">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['n'=>1,'q'=>"Ravon o'qishning uch asosiy tarkibiy qismini ayting."],
                        ['n'=>2,'q'=>"Tez o'qish va ravon o'qish o'rtasida qanday farq bor?"],
                        ['n'=>3,'q'=>"2-sinf o'quvchilari uchun ravon o'qishni rivojlantiruvchi 3 ta mashq tuzing."],
                        ['n'=>4,'q'=>"O'quvchi matnni tez o'qiydi, lekin tushunmaydi. Siz qanday metodik yordam berasiz?"],
                        ['n'=>5,'q'=>"Audio bilan o'qish mashg'ulotining tartibini yozing."],
                    ] as $t)
                        <div class="flex gap-3 rounded-xl border border-slate-200 p-3.5 transition hover:-translate-y-0.5 hover:shadow-sm">
                            <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-xs font-bold text-emerald-700">{{ $t['n'] }}</span>
                            <p class="text-xs leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="hidden items-center justify-center overflow-hidden rounded-xl bg-slate-50 md:flex">
                    <img src="{{ asset('images/nazariya/ravon-oqish/yozayotgan-qiz.png') }}" alt="Savol-topshiriqlar" class="h-full w-full object-contain p-3" loading="lazy">
                </div>
            </div>
        </div>

        {{-- ============ KUTILADIGAN NATIJA ============ --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-emerald-950 via-emerald-900 to-teal-900 p-6 text-white shadow-sm sm:p-7">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-14 right-32 h-32 w-32 rounded-full bg-white/5"></div>
            <div class="relative z-10">
                <div class="mb-4 flex items-center justify-between gap-2.5">
                    <div class="flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-emerald-200">
                            <x-icon name="target" class="h-4.5 w-4.5" />
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-wide text-emerald-200">Kutiladigan natija</span>
                    </div>
                    <img src="{{ asset('images/nazariya/ravon-oqish/kubok.png') }}" alt="" class="pointer-events-none hidden h-14 w-14 shrink-0 object-contain opacity-95 drop-shadow-xl sm:block" loading="lazy">
                </div>
                <div class="grid grid-cols-1 gap-2.5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        "Foydalanuvchi ravon o'qishning mazmunini to'g'ri tushunadi.",
                        "U ravon o'qishni tez o'qish bilan aralashtirmaydi.",
                        "Boshlang'ich sinf o'quvchilariga to'g'ri o'qishni rivojlantirish usullarini qo'llay oladi.",
                        "O'quvchilarni ifodali va mazmunli o'qishga yo'naltira oladi.",
                        "O'qish savodxonligini oshirishga xizmat qiladigan metodlarni amaliyotda qo'llaydi.",
                        "O'quvchilarning o'qish tezligi, aniqligi va tushunish darajasini bosqichma-bosqich rivojlantiradi.",
                    ] as $n)
                        <div class="flex items-start gap-2.5 rounded-xl bg-white/10 p-3 text-[13px] leading-relaxed text-emerald-50">
                            <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-200" stroke="2.5" />
                            {{ $n }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ============ NAV BUTTONS ============ --}}
        <div class="mt-6 flex justify-between">
            <a href="{{ route('nazariya.show', 'matn-tushunish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'tanqidiy') }}" class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-emerald-700">
                Keyingi: Tanqidiy o'qish
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
