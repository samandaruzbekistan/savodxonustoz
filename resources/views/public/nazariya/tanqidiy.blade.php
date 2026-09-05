@extends('layouts.app')
@section('title', "Tanqidiy o'qish")
@section('content')
@php
    $tanqidiyMaterials = \App\Models\Resource::query()
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
    @include('public.nazariya._sidebar', ['activeSlug' => 'tanqidiy'])
    <div class="min-w-0 flex-1">

        {{-- ============ HERO ============ --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-orange-950 via-orange-900 to-rose-900 shadow-sm">
            <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-white/5 su-blob"></div>
            <div class="pointer-events-none absolute -bottom-16 left-1/4 h-40 w-40 rounded-full bg-white/5"></div>

            <div class="relative z-10 grid grid-cols-1 items-center gap-6 px-7 py-9 sm:px-10 sm:py-10 lg:grid-cols-[1.15fr_0.85fr]">
                <div class="max-w-xl">
                    <span class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">6</span>
                        Nazariya · 6-bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl lg:text-[44px]">Tanqidiy o'qish</h1>
                    <p class="mt-4 max-w-lg text-sm leading-relaxed text-orange-100 sm:text-[15px]">Tanqidiy o'qish tushunchasi, fakt va fikrni farqlash, dalil topish, baholash va o'z munosabatini asoslash ko'nikmalari yoritiladi.</p>

                    <div class="mt-7 flex flex-wrap items-center gap-3">
                        <a href="#konikmalar" class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-orange-900 shadow-lg shadow-black/10 transition hover:-translate-y-0.5 hover:bg-orange-50">
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
                    <img src="{{ asset('images/nazariya/tanqidiy/01_oquvchi_fikr_yuritmoqda.png') }}" alt="O'quvchi fikr yuritmoqda" class="absolute bottom-0 left-2 h-60 w-auto object-contain drop-shadow-2xl" loading="lazy">
                    <img src="{{ asset('images/nazariya/tanqidiy/02_fikr_tahlil_baholash_kitoblar.png') }}" alt="Fikrla, tahlil qil, baholab, o'z nuqtai nazaringni bildir" class="su-float absolute -right-2 top-2 h-40 w-auto object-contain drop-shadow-2xl">
                </div>
            </div>
        </div>

        {{-- ============ 01 · SAHIFA HAQIDA ============ --}}
        <div id="maqsad" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-orange-600">01 &middot; Sahifa haqida</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Nima haqida bilib olasiz?</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md sm:p-6">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-orange-50 text-orange-600">
                            <x-icon name="target" class="h-5 w-5" />
                        </span>
                        <h3 class="text-[15px] font-bold text-slate-800">Sahifaning maqsadi</h3>
                    </div>
                    <p class="text-[13px] leading-relaxed text-slate-500">Ushbu sahifaning maqsadi tanqidiy o'qish tushunchasini izohlash, uni matnni tushunishning yuqori darajasi sifatida ko'rsatish va boshlang'ich sinf o'quvchilarida tanqidiy fikrlashni rivojlantirish usullarini yoritishdir.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md sm:p-6">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-rose-50 text-rose-600">
                            <x-icon name="bulb" class="h-5 w-5" />
                        </span>
                        <h3 class="text-[15px] font-bold text-slate-800">Tanqidiy o'qish nima?</h3>
                    </div>
                    <p class="text-[13px] leading-relaxed text-slate-500">Tanqidiy o'qish — bu matnni shunchaki qabul qilish emas, balki <strong class="text-slate-700">ustida o'ylash, savol berish, dalil izlash, muallif fikrini tushunish, baholash va o'z munosabatini asoslash</strong> demakdir. Boshlang'ich sinfda bu ko'nikma asta-sekin shakllanadi va o'quvchini mustaqil fikrlovchi shaxsga aylantiradi.</p>
                </div>
            </div>
        </div>

        {{-- ============ 02 · KO'NIKMALAR ============ --}}
        <div id="konikmalar" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-orange-600">02 &middot; Asosiy ko'nikmalar</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Tanqidiy o'qish ko'nikmalari</h2>
            </div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">
                @foreach ([
                    ['icon'=>'check','label'=>"Fakt va fikrni farqlash",'tint'=>'bg-orange-50 text-orange-600'],
                    ['icon'=>'clipboard','label'=>"Asosiy g'oya va dalillarni aniqlash",'tint'=>'bg-rose-50 text-rose-600'],
                    ['icon'=>'users','label'=>"Qahramon harakatiga baho berish",'tint'=>'bg-amber-50 text-amber-600'],
                    ['icon'=>'compass','label'=>"Sabab-oqibat munosabatini aniqlash",'tint'=>'bg-yellow-50 text-yellow-600'],
                    ['icon'=>'doc','label'=>"O'z fikrini asoslash",'tint'=>'bg-violet-50 text-violet-600'],
                    ['icon'=>'heart','label'=>"Boshqa fikrni hurmat qilish",'tint'=>'bg-teal-50 text-teal-600'],
                    ['icon'=>'search','label'=>"Muallif maqsadi va nuqtai nazarini baholash",'tint'=>'bg-indigo-50 text-indigo-600'],
                    ['icon'=>'library','label'=>"Matn turini va janrini aniqlash",'tint'=>'bg-cyan-50 text-cyan-600'],
                ] as $k)
                    <div class="flex flex-col items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition hover:-translate-y-0.5 hover:border-orange-200 hover:shadow-md">
                        <span class="grid h-12 w-12 shrink-0 place-items-center rounded-full {{ $k['tint'] }}">
                            <x-icon :name="$k['icon']" class="h-5 w-5" stroke="2" />
                        </span>
                        <p class="text-xs font-semibold leading-snug text-slate-700">{{ $k['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ============ 03 · NEGA MUHIM ============ --}}
        <div id="ahamiyat" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-orange-600">03 &middot; Ahamiyati</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Nega tanqidiy o'qish muhim?</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-[1.3fr_1fr]">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                    <div class="grid grid-cols-1 gap-2.5 sm:grid-cols-2">
                        @foreach ([
                            "Axborot oqimida muhim va ahamiyatsiz ma'lumotni ajratishga yordam beradi",
                            "Soxta yoki asossiz da'volardan himoyalanish ko'nikmasini shakllantiradi",
                            "Mustaqil va mantiqiy fikrlashni rivojlantiradi",
                            "Matnni chuqur tahlil qilish orqali ta'lim natijalarini yaxshilaydi",
                            "O'z fikrini dalil bilan asoslab, hurmat bilan bildirish madaniyatini tarbiyalaydi",
                        ] as $reason)
                            <div class="flex items-start gap-2.5 rounded-xl bg-orange-50/60 p-3 text-[13px] leading-snug text-slate-700">
                                <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0 text-orange-600" stroke="2.5" />
                                {{ $reason }}
                            </div>
                        @endforeach
                    </div>
                    <p class="mt-4 rounded-xl border-l-4 border-orange-400 bg-slate-50 p-3.5 text-[13px] italic leading-relaxed text-slate-600">
                        "Savol berish — tafakkur eshigini ochadi." Boshlang'ich sinfda tanqidiy o'qish aynan savol berish odatidan boshlanadi.
                    </p>
                </div>
                <div class="relative min-h-[220px] overflow-hidden rounded-2xl bg-gradient-to-br from-orange-100 via-amber-50 to-rose-100 shadow-sm">
                    <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-orange-200/50 blur-2xl"></div>
                    <div class="pointer-events-none absolute -bottom-10 -left-8 h-36 w-36 rounded-full bg-rose-200/40 blur-2xl"></div>
                    <img src="{{ asset('images/nazariya/tanqidiy/12_ustoz_kitob_bilan.png') }}" alt="O'quvchi qo'l ko'tarib savol bermoqda" class="absolute inset-0 m-auto h-[92%] w-auto object-contain drop-shadow-xl" loading="lazy">
                </div>
            </div>
        </div>

        {{-- ============ 04 · METODIK AHAMIYAT ============ --}}
        <div id="metodik" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-orange-600">04 &middot; Metodik ahamiyat</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Bo'lajak o'qituvchi uchun metodik ahamiyati</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="relative min-h-[220px] overflow-hidden rounded-2xl bg-gradient-to-br from-orange-50 via-amber-50 to-orange-100 shadow-sm">
                    <div class="pointer-events-none absolute -right-8 -top-10 h-28 w-28 rounded-full bg-orange-200/40 blur-2xl"></div>
                    <div class="pointer-events-none absolute -bottom-10 -left-8 h-32 w-32 rounded-full bg-rose-200/30 blur-2xl"></div>
                    <img src="{{ asset('images/nazariya/tanqidiy/24_ustoz_ayol.png') }}" alt="Bo'lajak o'qituvchi" class="absolute inset-0 m-auto h-[85%] w-auto object-contain drop-shadow-xl" loading="lazy">
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-orange-50 text-orange-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Nimaga e'tibor qaratish kerak?</h3>
                    </div>
                    <p class="text-[13px] leading-relaxed text-slate-500">Bo'lajak o'qituvchi tanqidiy o'qishni o'quvchiga sevdira olishi uchun avvalo o'zi tanqidiy fikrlovchi bo'lishi kerak. Sinfda «Nima uchun?», «Kim aytdi?», «Bu to'g'rimi?» kabi savollarni odatiy hol qilish zarur.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                            <x-icon name="sparkle" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Rivojlanadigan ko'nikmalar</h3>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (["Matnni tahlil qilish va baholash ko'nikmasi","O'quvchilarga tanqidiy savol berishni o'rgatish usullari","Darsda bahsli muhit yaratish metodikasi","Fakt va fikr o'rtasidagi farqni o'rgatish","O'z munosabatini asoslashni tarbiyalash"] as $m)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-500" stroke="2.5" />
                                {{ $m }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- ============ 05 · AMALIYOT ============ --}}
        <div id="amaliyot" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-orange-600">05 &middot; Amaliyot</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Amaliy misol — tanqidiy savol turlari</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                    <img src="{{ asset('images/nazariya/tanqidiy/13_matn_va_qalam.png') }}" alt="" class="pointer-events-none absolute -right-2 -top-2 h-16 w-16 object-contain opacity-90">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-50 text-amber-600">
                            <x-icon name="help" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Matnni o'qigandan so'ng quyidagi savollarni bering</h3>
                    </div>
                    <div class="mb-3 rounded-lg border-l-4 border-amber-400 bg-amber-50 p-3 text-xs italic leading-relaxed text-amber-900">
                        "Ali maktabga ketayotib yo'lda pul topib oldi. U o'sha pulni o'z xohishiga sarfladi. Kechqurun Alining onasi bu haqda bilib qoldi va jahl bilan gapirdi: «Topilgan pulni o'zingga olmaydilar!»"
                    </div>
                    <div class="space-y-2">
                        @foreach ([
                            ['type'=>'Fakt savol','color'=>'bg-blue-100 text-blue-700','q'=>"Ali nima topib oldi?"],
                            ['type'=>"Fikr/baholash savol",'color'=>'bg-rose-100 text-rose-700','q'=>"Ali to'g'ri ish qildimi? Nima uchun?"],
                            ['type'=>'Sabab-oqibat savol','color'=>'bg-amber-100 text-amber-700','q'=>"Onasi nima uchun jahl qildi?"],
                            ['type'=>"Munosabat savol",'color'=>'bg-violet-100 text-violet-700','q'=>"Siz Alining o'rnida bo'lsangiz nima qilardingiz?"],
                            ['type'=>"Dalil savol",'color'=>'bg-emerald-100 text-emerald-700','q'=>"Matnda Alining onasi haqligi ko'rsatilganmi?"],
                        ] as $q)
                            <div class="flex items-start gap-2 text-xs">
                                <span class="inline-block shrink-0 rounded px-1.5 py-0.5 text-[10px] font-semibold {{ $q['color'] }}">{{ $q['type'] }}</span>
                                <span class="text-slate-600">{{ $q['q'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                            <x-icon name="library" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Matndan qisqa misol</h3>
                    </div>
                    <div class="mb-4 rounded-xl border-l-4 border-slate-300 bg-slate-50 p-3.5 text-xs italic leading-relaxed text-slate-600">
                        "Ali topilgan pulni o'z xohishiga sarfladi. Onasi bu haqda bilib, jahl bilan: «Topilgan pulni o'zingga olmaydilar!» dedi."
                    </div>
                    <div class="space-y-2.5">
                        <div class="rounded-xl bg-blue-50 p-3">
                            <span class="text-xs font-bold text-blue-700">Fakt:</span>
                            <span class="text-xs text-blue-800"> Ali yo'lda pul topdi va uni sarfladi.</span>
                        </div>
                        <div class="rounded-xl bg-rose-50 p-3">
                            <span class="text-xs font-bold text-rose-700">Fikr:</span>
                            <span class="text-xs text-rose-800"> Topilgan pulni o'zlashtirish to'g'ri emas.</span>
                        </div>
                        <div class="rounded-xl bg-emerald-50 p-3">
                            <span class="text-xs font-bold text-emerald-700">Dalil:</span>
                            <span class="text-xs text-emerald-800"> Onasining jahl bilan aytgan gapi matnda aniq keltirilgan.</span>
                        </div>
                        <div class="rounded-xl bg-violet-50 p-3">
                            <span class="text-xs font-bold text-violet-700">Savol:</span>
                            <span class="text-xs text-violet-800"> Siz Alining o'rnida bo'lganingizda nima qilardingiz? Nega?</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ============ 06 · FAKT VA FIKR ============ --}}
        <div id="fakt-fikr" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-orange-600">06 &middot; Farqni tushunish</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Fakt va fikr — farqni tushunish</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-blue-200 bg-blue-50 p-5 sm:p-6">
                    <div class="mb-2.5 flex items-center gap-2.5">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-blue-100 text-blue-600">
                            <x-icon name="doc" class="h-5 w-5" />
                        </span>
                        <p class="text-[15px] font-bold text-blue-800">Fakt</p>
                    </div>
                    <p class="mb-3 text-[13px] text-blue-700">Tekshirib bo'ladigan, haqiqatga asoslangan ma'lumot.</p>
                    <p class="text-xs leading-relaxed text-blue-600"><strong class="font-bold">Masalan:</strong> "Ali maktabga borayotganda yo'lda pul topdi" → Bu fakt: matnda yozilgan.</p>
                </div>
                <div class="rounded-2xl border border-rose-200 bg-rose-50 p-5 sm:p-6">
                    <div class="mb-2.5 flex items-center gap-2.5">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-rose-100 text-rose-600">
                            <x-icon name="bulb" class="h-5 w-5" />
                        </span>
                        <p class="text-[15px] font-bold text-rose-800">Fikr</p>
                    </div>
                    <p class="mb-3 text-[13px] text-rose-700">Shaxsiy munosabat, baholash yoki talqin.</p>
                    <p class="text-xs leading-relaxed text-rose-600"><strong class="font-bold">Masalan:</strong> "Ali yaxshi ish qilmadi" → Bu fikr: har kim boshqacha baholashi mumkin.</p>
                </div>
            </div>
        </div>

        {{-- ============ 07 · MATERIALLAR (FILE PREVIEW CARDS) ============ --}}
        @if ($tanqidiyMaterials->isNotEmpty())
            <div id="materiallar" class="mb-10 scroll-mt-20">
                <div class="mb-5 flex items-end justify-between gap-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-orange-600">07 &middot; Materiallar</span>
                        <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Mavzu bo'yicha materiallar</h2>
                    </div>
                    <a href="{{ route('resources.index') }}" class="hidden shrink-0 items-center gap-1.5 text-xs font-bold text-orange-600 hover:text-orange-700 sm:inline-flex">
                        Barcha resurslar
                        <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($tanqidiyMaterials as $material)
                        <div class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="relative h-48 overflow-hidden bg-gradient-to-br from-red-50 via-rose-50 to-red-100">
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
                                            <div class="h-1.5 shrink-0 rounded-t-md bg-red-400"></div>
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
                                                <x-icon name="doc" class="h-4 w-4 text-red-400" />
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
                                   class="mt-3 inline-flex items-center justify-center gap-2 rounded-lg bg-orange-600 px-3 py-2 text-xs font-bold text-white transition hover:bg-orange-700">
                                    <x-icon name="download" class="h-3.5 w-3.5" /> Yuklab olish
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- ============ 08 · SAVOL-TOPSHIRIQLAR ============ --}}
        <div id="savollar" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-orange-600">08 &middot; Mustahkamlash</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Savol-topshiriqlar</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm md:grid-cols-[1fr_180px]">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['n'=>1,'q'=>"Tanqidiy o'qish va matnni tushunish o'rtasida qanday farq bor?"],
                        ['n'=>2,'q'=>"Boshlang'ich sinf o'quvchisiga fakt va fikrni farqlashni qanday o'rgatasiz?"],
                        ['n'=>3,'q'=>"Ali haqidagi matn bo'yicha qo'shimcha 2 ta tanqidiy savol tuzing."],
                        ['n'=>4,'q'=>"O'quvchi muallif fikrini tanqid qilsa, siz o'qituvchi sifatida qanday yo'l tutasiz?"],
                        ['n'=>5,'q'=>"Darsda tanqidiy muhit yaratish uchun qanday metodlardan foydalanasiz?"],
                    ] as $t)
                        <div class="flex gap-3 rounded-xl border border-slate-200 p-3.5 transition hover:-translate-y-0.5 hover:shadow-sm">
                            <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-orange-50 text-xs font-bold text-orange-700">{{ $t['n'] }}</span>
                            <p class="text-xs leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                        </div>
                    @endforeach
                    <div class="flex gap-3 rounded-xl border border-dashed border-rose-300 bg-rose-50/60 p-3.5 sm:col-span-2">
                        <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-rose-100">
                            <x-icon name="sparkle" class="h-3.5 w-3.5 text-rose-600" />
                        </span>
                        <p class="text-xs leading-relaxed text-rose-700"><strong class="font-bold">Amaliy topshiriq:</strong> Bugungi kundagi biror voqea yoki xabarni tanlang. Undan kamida bitta faktni va bitta fikrni ajratib yozing, so'ng fikringizni dalil bilan asoslang.</p>
                    </div>
                </div>
                <div class="hidden items-center justify-center rounded-xl bg-slate-50 md:flex">
                    <img src="{{ asset('images/nazariya/tanqidiy/05_checklist_topshiriqlar.png') }}" alt="Savol-topshiriqlar" class="h-32 w-32 object-contain" loading="lazy">
                </div>
            </div>
        </div>

        {{-- ============ KUTILADIGAN NATIJA ============ --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-orange-950 via-orange-900 to-rose-900 p-6 text-white shadow-sm sm:p-7">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-14 right-32 h-32 w-32 rounded-full bg-white/5"></div>
            <div class="relative flex items-center gap-6">
                <div class="min-w-0 flex-1">
                    <div class="mb-2 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-orange-200">
                            <x-icon name="target" class="h-4.5 w-4.5" />
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-wide text-orange-200">Kutiladigan natija</span>
                    </div>
                    <p class="max-w-2xl text-sm leading-relaxed text-orange-50">Foydalanuvchi tanqidiy o'qishni matnni passiv qabul qilishdan farqlay oladi, fakt va fikrni aniq farqlashni o'rganadi, o'quvchilar uchun tanqidiy savollar tuza oladi, matnda dalillarni izlab topish ko'nikmasi shakllanadi hamda o'quvchining fikrlarini hurmat qilgan holda yo'naltira oladi.</p>
                    <p class="mt-3 text-xs italic text-orange-300">Eslatma: tanqidiy o'qish — o'quvchini mustaqil fikrlovchi, savol beruvchi va dalil izlovchi shaxsga aylantiruvchi zamonaviy o'qish madaniyatidir.</p>
                </div>
                <img src="{{ asset('images/nazariya/tanqidiy/28_bilim_amaliyot_tajriba_natija_kitoblar.png') }}" alt="Bilim, amaliyot, tajriba, natija" class="pointer-events-none hidden h-28 w-28 shrink-0 object-contain opacity-95 drop-shadow-xl sm:block" loading="lazy">
            </div>
        </div>

        {{-- ============ NAV BUTTONS ============ --}}
        <div class="mt-6 flex justify-between">
            <a href="{{ route('nazariya.show', 'ravon-oqish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'metakognitiv') }}" class="inline-flex items-center gap-2 rounded-xl bg-orange-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-orange-700">
                Keyingi: Metakognitiv strategiyalar
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
