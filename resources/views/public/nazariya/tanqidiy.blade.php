@extends('layouts.app')
@section('title', "Tanqidiy o'qish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'tanqidiy'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-orange-950 via-orange-900 to-rose-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-xl">
                <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">6</span>
                    Nazariya · 6-bo'lim
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Tanqidiy o'qish</h1>
                <p class="mt-3 leading-relaxed text-orange-100">Tanqidiy o'qish tushunchasi, fakt va fikrni farqlash, dalil topish, baholash va o'z munosabatini asoslash ko'nikmalari yoritiladi.</p>
            </div>
            <img src="{{ asset('images/nazariya/section_06.png') }}" alt="Tanqidiy o'qish" class="pointer-events-none absolute right-6 bottom-0 hidden h-36 w-36 rounded-2xl object-contain opacity-90 md:block lg:h-40 lg:w-40">
        </div>

        {{-- 2 intro cards --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-orange-50 text-orange-600">
                        <x-icon name="target" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Sahifaning maqsadi</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Ushbu sahifaning maqsadi tanqidiy o'qish tushunchasini izohlash, uni matnni tushunishning yuqori darajasi sifatida ko'rsatish va boshlang'ich sinf o'quvchilarida tanqidiy fikrlashni rivojlantirish usullarini yoritishdir.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-rose-50 text-rose-600">
                        <x-icon name="bulb" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Tanqidiy o'qish nima?</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Tanqidiy o'qish — bu matnni shunchaki qabul qilish emas, balki <strong class="text-slate-700">ustida o'ylash, savol berish, dalil izlash, muallif fikrini tushunish, baholash va o'z munosabatini asoslash</strong> demakdir. Boshlang'ich sinfda bu ko'nikma asta-sekin shakllanadi va o'quvchini mustaqil fikrlovchi shaxsga aylantiradi.</p>
            </div>
        </div>

        {{-- Ko'nikmalar --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[220px_1fr]">
                <div class="hidden items-center justify-center bg-orange-50 p-4 md:flex">
                    <img src="{{ asset('images/nazariya/tanqidiy/konikmalar.png') }}" alt="Tanqidiy o'qish ko'nikmalari" class="h-full max-h-40 w-full object-contain">
                </div>
                <div class="p-5">
                    <h2 class="mb-4 text-xs font-bold uppercase tracking-wide text-slate-400">Tanqidiy o'qish ko'nikmalari</h2>
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
                            <div class="rounded-xl border border-slate-200 p-3 transition hover:border-orange-200 hover:bg-orange-50/50">
                                <span class="mb-2 inline-flex h-6 w-6 items-center justify-center rounded-lg {{ $k['tint'] }}">
                                    <x-icon :name="$k['icon']" class="h-3.5 w-3.5" stroke="2" />
                                </span>
                                <p class="text-xs font-medium leading-snug text-slate-600">{{ $k['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Metodik + Amaliy --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="{{ asset('images/nazariya/tanqidiy/metodik.jpg') }}" alt="O'quvchilar tanqidiy muhokamada" class="h-32 w-full object-cover">
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-orange-50 text-orange-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h3>
                    </div>
                    <p class="mb-3 text-xs leading-relaxed text-slate-500">Bo'lajak o'qituvchi tanqidiy o'qishni o'quvchiga sevdirolishi uchun avvalo o'zi tanqidiy fikrlovchi bo'lishi kerak. Sinfda «Nima uchun?», «Kim aytdi?», «Bu to'g'rimi?» kabi savollarni odatiy hol qilish zarur.</p>
                    <p class="mb-2 text-xs font-semibold text-slate-700">Bu sahifa talabalarning quyidagi ko'nikmalarini rivojlantiradi:</p>
                    <ul class="space-y-2">
                        @foreach (["Matnni tahlil qilish va baholash ko'nikmasi","O'quvchilarga tanqidiy savol berishni o'rgatish usullari","Darsda bahsli muhit yaratish metodikasi","Fakt va fikr o'rtasidagi farqni o'rgatish","O'z munosabatini asoslashni tarbiyalash"] as $m)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-orange-500" stroke="2.5" />
                                {{ $m }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="{{ asset('images/nazariya/tanqidiy/amaliy-misol.png') }}" alt="" class="pointer-events-none absolute -right-3 -top-3 h-20 w-20 object-contain opacity-90">
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-50 text-amber-600">
                            <x-icon name="help" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Amaliy misol — tanqidiy savol turlari</h3>
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
            </div>
        </div>

        {{-- Fakt vs Fikr --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Fakt va fikr — farqni tushunish</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-blue-200 bg-blue-50 p-5">
                    <div class="mb-2 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-100 text-blue-600">
                            <x-icon name="doc" class="h-4.5 w-4.5" />
                        </span>
                        <p class="text-sm font-bold text-blue-800">Fakt</p>
                    </div>
                    <p class="mb-2 text-xs text-blue-700">Tekshirib bo'ladigan, haqiqatga asoslangan ma'lumot</p>
                    <p class="text-xs italic leading-relaxed text-blue-600">"Ali maktabga borayotganda yo'lda pul topdi" → Bu fakt: matnda yozilgan.</p>
                </div>
                <div class="rounded-2xl border border-rose-200 bg-rose-50 p-5">
                    <div class="mb-2 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-rose-100 text-rose-600">
                            <x-icon name="bulb" class="h-4.5 w-4.5" />
                        </span>
                        <p class="text-sm font-bold text-rose-800">Fikr</p>
                    </div>
                    <p class="mb-2 text-xs text-rose-700">Shaxsiy munosabat, baholash yoki talqin</p>
                    <p class="text-xs italic leading-relaxed text-rose-600">"Ali yaxshi ish qilmadi" → Bu fikr: har kim boshqacha baholashi mumkin.</p>
                </div>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Savol-topshiriqlar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
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
                </div>
                <div class="hidden items-center justify-center rounded-xl bg-slate-50 md:flex">
                    <img src="{{ asset('images/nazariya/tanqidiy/savollar.png') }}" alt="Savol-topshiriqlar" class="h-36 w-36 object-contain">
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-orange-950 via-orange-900 to-rose-900 p-6 text-white shadow-sm">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-2xl">
                <div class="mb-2 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-orange-200">
                        <x-icon name="target" class="h-4.5 w-4.5" />
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-wide text-orange-200">Kutiladigan natija</span>
                </div>
                <p class="text-sm leading-relaxed text-orange-50">Foydalanuvchi tanqidiy o'qishni matnni passiv qabul qilishdan farqlay oladi, fakt va fikrni aniq farqlashni o'rganadi, o'quvchilar uchun tanqidiy savollar tuza oladi, matnda dalillarni izlab topish ko'nikmasi shakllanadi hamda o'quvchining fikrlarini hurmat qilgan holda yo'naltira oladi.</p>
                <p class="mt-3 text-xs italic text-orange-300">Eslatma: tanqidiy o'qish — o'quvchini mustaqil fikrlovchi, savol beruvchi va dalil izlovchi shaxsga aylantiruvchi zamonaviy o'qish madaniyatidir.</p>
            </div>
            <img src="{{ asset('images/nazariya/tanqidiy/natija.png') }}" alt="Natija" class="pointer-events-none absolute -right-4 top-1/2 hidden h-24 w-24 -translate-y-1/2 object-contain opacity-90 sm:block">
        </div>

        {{-- Nav buttons --}}
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
