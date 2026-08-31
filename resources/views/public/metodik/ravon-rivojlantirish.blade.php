@extends('layouts.app')
@section('title', "Ravon o'qishni rivojlantirish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'ravon-rivojlantirish'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-teal-950 via-teal-900 to-cyan-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 flex flex-col items-center gap-6 md:flex-row md:items-center md:justify-between">
                <div class="max-w-xl">
                    <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">5</span>
                        Metodik modul · 5-bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Ravon o'qishni rivojlantirish</h1>
                    <p class="mt-3 leading-relaxed text-teal-100">Bo'lajak boshlang'ich sinf o'qituvchilariga o'quvchilarda to'g'ri, me'yorida, ifodali va tushungan holda o'qish ko'nikmasini rivojlantirish metodikasini o'rgatish.</p>
                </div>
                <div class="shrink-0 overflow-hidden rounded-2xl bg-white shadow-lg ring-1 ring-white/20">
                    <img src="{{ asset('images/sections/ravon-rivojlantirish/01_hero_bola_kitob.png') }}" alt="Bola kitob o'qimoqda" class="h-40 w-52 object-cover sm:h-44 sm:w-60 lg:h-52 lg:w-72">
                </div>
            </div>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-teal-50 text-teal-600">
                        <x-icon name="target" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Maqsad</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga o'quvchilarda to'g'ri, me'yorida, ifodali va tushungan holda o'qish ko'nikmasini rivojlantirish metodikasini o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-cyan-50 text-cyan-600">
                        <x-icon name="sparkle" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="mb-2 text-xs leading-relaxed text-slate-500">Ravon o'qish — o'qish savodxonligining muhim tarkibiy qismi. O'quvchi matnni to'g'ri va ifodali o'qiy olmasa, uning mazmunini chuqur anglashda qiyinchilik tug'iladi. Biroq ravon o'qishni faqat tezlik bilan baholash noto'g'ri.</p>
                <p class="text-xs leading-relaxed text-slate-500">Ravon o'qish <strong class="text-slate-700">aniqlik, tezlik, ifodalilik va tushunishni</strong> birlashtiradi.</p>
            </div>
        </div>

        {{-- Ravon o'qish mashg'uloti + Ravonlik ko'rsatkichlari --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[220px_1fr_1fr]">
                <div class="hidden md:block">
                    <img src="{{ asset('images/sections/ravon-rivojlantirish/02_dars_oqituvchi_va_oquvchilar.png') }}" alt="O'qituvchi bolalarga ifodali o'qib bermoqda" class="h-full min-h-[260px] w-full object-cover">
                </div>
                <div class="p-5">
                    <h2 class="mb-3 text-xs font-bold uppercase tracking-wide text-slate-400">Ravon o'qish mashg'uloti</h2>
                    <div class="space-y-2.5">
                        @foreach ([
                            ['label' => 'Matn',          'value' => "2-sinf uchun 80–100 so'z matn"],
                            ['label' => 'Usul',           'value' => 'Echo reading'],
                            ['label' => 'Mashq varaqi',   'value' => "Talaffuzi qiyin so'zlar ro'yxati"],
                            ['label' => 'Baholash',       'value' => "4 mezon: aniqlik, tezlik, ifodalilik, tushunish"],
                            ['label' => "Rag'batlantirish", 'value' => '"Bugun kechagidan ancha ravon o\'qiding!"'],
                        ] as $row)
                            <div class="border-b border-slate-100 pb-2 last:border-0">
                                <p class="text-[10px] font-semibold uppercase tracking-wide text-slate-400">{{ $row['label'] }}</p>
                                <p class="text-xs text-slate-700">{{ $row['value'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="border-t border-slate-100 bg-teal-50/50 p-5 md:border-l md:border-t-0">
                    <h2 class="mb-3 text-xs font-bold uppercase tracking-wide text-teal-700">Ravonlik ko'rsatkichlari</h2>
                    <div class="space-y-2.5">
                        @foreach ([
                            ['title' => 'Aniqlik',      'desc' => "So'zlarni xatosiz o'qish"],
                            ['title' => 'Tezlik',        'desc' => "Yoshiga mos sur'at"],
                            ['title' => 'Ifodalilik',    'desc' => "Mazmuniga mos ohang"],
                            ['title' => 'Tushunish',     'desc' => "O'qilganni anglab yetish"],
                            ['title' => 'Tinish belgilari', 'desc' => "Vergul, nuqta, undov"],
                        ] as $k)
                            <div class="flex items-start gap-2">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-teal-600" stroke="2.5" />
                                <div>
                                    <p class="text-xs font-semibold text-teal-900">{{ $k['title'] }}</p>
                                    <p class="text-xs text-teal-700">{{ $k['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <img src="{{ asset('images/sections/ravon-rivojlantirish/03_oquvchi_oqish_fotosi.png') }}" alt="O'quvchilar sinfda ovoz chiqarib o'qimoqda" class="h-36 w-full object-cover">
            <div class="p-5">
                <h2 class="mb-4 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy metodlar</h2>
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        ['n'=>1,'title'=>"Takroriy o'qish",'desc'=>"O'quvchi bir matnni bir necha marta o'qiydi. Har safar aniqlik, ifodalilik va tushunish yaxshilanadi.",'tint'=>'bg-teal-50 text-teal-600','img'=>'04_takroriy_oqish_kitoblar.png'],
                        ['n'=>2,'title'=>"Juftlikda o'qish",'desc'=>"Kuchliroq o'quvchi sustroq o'quvchi bilan birga o'qiydi. Bu hamkorlikni kuchaytiradi.",'tint'=>'bg-cyan-50 text-cyan-600','img'=>'05_juftlikda_oqish.png'],
                        ['n'=>3,'title'=>'Echo reading','desc'=>"O'qituvchi bir gapni ifodali o'qiydi, o'quvchilar takrorlaydi. Ohang va intonatsiya o'rganiladi.",'tint'=>'bg-sky-50 text-sky-600','img'=>'06_echo_reading_megafon.png'],
                        ['n'=>4,'title'=>"Audio bilan o'qish",'desc'=>"O'quvchi matn audiosini tinglaydi, so'ng unga qo'shilib o'qiydi. Quloq va til birga ishlaydi.",'tint'=>'bg-blue-50 text-blue-600','img'=>'07_audio_oqish_quloqchin.png'],
                        ['n'=>5,'title'=>"Rollarga bo'lib o'qish",'desc'=>"Dialogli matnlar qahramonlarga bo'linib o'qiladi. Ifodalilik va irodalilik rivojlanadi.",'tint'=>'bg-emerald-50 text-emerald-600','img'=>'08_rollarga_bolib_oqish.png'],
                        ['n'=>6,'title'=>"O'z ovozini yozib tahlil qilish",'desc'=>"O'quvchi o'z o'qishini yozib oladi va qayta eshitib, xatolarini aniqlaydi.",'tint'=>'bg-violet-50 text-violet-600','img'=>'09_ovozini_yozib_tahlil.png'],
                    ] as $m)
                        <div class="flex h-full flex-col overflow-hidden rounded-xl border border-slate-200 transition hover:-translate-y-0.5 hover:shadow-sm">
                            <div class="flex h-24 shrink-0 items-center justify-center overflow-hidden bg-slate-50 p-3">
                                <img src="{{ asset('images/sections/ravon-rivojlantirish/'.$m['img']) }}" alt="{{ $m['title'] }}" class="h-full w-full object-contain">
                            </div>
                            <div class="flex flex-1 flex-col p-4">
                                <div class="mb-2 flex items-center gap-2">
                                    <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full text-xs font-bold {{ $m['tint'] }}">{{ $m['n'] }}</span>
                                    <h4 class="text-xs font-bold text-slate-800">{{ $m['title'] }}</h4>
                                </div>
                                <p class="text-xs leading-relaxed text-slate-500">{{ $m['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Darsda qo'llash + Talabalar uchun mashq --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center overflow-hidden rounded-xl bg-slate-100 p-1.5">
                        <img src="{{ asset('images/sections/ravon-rivojlantirish/10_darsda_qollash_tartibi_clipboard.png') }}" alt="" class="h-full w-full object-contain">
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Darsda qo'llash tartibi</h3>
                </div>
                <ol class="space-y-2.5">
                    @foreach ([
                        "O'quvchilarga qisqa matn beriladi",
                        "O'qituvchi matnni namunali o'qib beradi",
                        "O'quvchilar matnni ichida o'qiydi",
                        "Keyin navbat bilan ovoz chiqarib o'qiydi",
                        "Xatolar muloyim tuzatiladi",
                        "Matn qayta o'qiladi",
                        "O'qishdan keyin mazmuniy savollar beriladi",
                        "Natija ravonlik mezoni asosida baholanadi",
                    ] as $i => $step)
                        <li class="flex items-start gap-2 text-xs text-slate-500">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-teal-50 text-teal-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $step }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="rounded-2xl border border-teal-200 bg-teal-50/50 p-5">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center overflow-hidden rounded-xl bg-teal-100 p-1.5">
                        <img src="{{ asset('images/sections/ravon-rivojlantirish/11_talabalar_uchun_mashq_daftar.png') }}" alt="" class="h-full w-full object-contain">
                    </span>
                    <h3 class="text-sm font-bold text-teal-900">Talabalar uchun mashq</h3>
                </div>
                <ol class="space-y-2">
                    @foreach ([
                        "2-sinf uchun 80–100 so'zli matn tanlang",
                        "Ravon o'qish mashg'uloti rejasini tuzing",
                        "Matnni o'qishdan oldin talaffuzi qiyin so'zlarni ajrating",
                        "Echo reading usulini qo'llash tartibini yozing",
                        "Ravon o'qishni baholash uchun 4 mezon belgilang",
                        "O'quvchiga beriladigan rag'batlantiruvchi izoh yozing",
                    ] as $i => $task)
                        <li class="flex items-start gap-2 text-xs text-teal-800">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-teal-600 text-white font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $task }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[200px_1fr]">
                <img src="{{ asset('images/sections/ravon-rivojlantirish/12_oqituvchi_bilan_mashq.png') }}" alt="O'quvchilar kulib kitob o'qimoqda" class="hidden h-full w-full object-cover md:block">
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center overflow-hidden rounded-xl bg-amber-50 p-1.5">
                            <img src="{{ asset('images/sections/ravon-rivojlantirish/13_oqituvchi_tavsiyasi_lampochka.png') }}" alt="" class="h-full w-full object-contain">
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">O'qituvchi uchun tavsiya</h3>
                    </div>
                    <p class="mb-2 text-xs leading-relaxed text-slate-500">Ravon o'qishda o'quvchini boshqalar oldida keskin tanqid qilmang. Xatoni to'g'rilash jarayoni bolaning o'qishga bo'lgan ishonchini sindirmasligi kerak.</p>
                    <p class="text-xs leading-relaxed text-slate-500">Har bir kichik yutuqni ko'rsatish foydali: <strong class="text-slate-700">"Bugun kechagidan ancha ravon o'qiding"</strong>, <strong class="text-slate-700">"Tinish belgilariga yaxshi e'tibor berding"</strong> kabi izohlar o'quvchini ruhlantiradi va yangi sa'y-harakatga chorlaydi.</p>
                </div>
            </div>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Namunaviy topshiriq</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-[160px_1fr_1fr]">
                <div class="hidden overflow-hidden rounded-2xl border border-slate-200 md:block">
                    <img src="{{ asset('images/sections/ravon-rivojlantirish/14_namunaviy_topshiriq_kitoblar.png') }}" alt="Katta kishi bolalarga ovoz chiqarib o'qib bermoqda" class="h-full w-full object-cover">
                </div>
                <div class="rounded-2xl border border-teal-200 bg-teal-50/50 p-5">
                    <p class="mb-3 text-xs font-bold text-teal-900">Mashq: "Uch marta o'qi"</p>
                    <ol class="space-y-3">
                        @foreach ([
                            ["Birinchi o'qish", "so'zlarni to'g'ri o'qishga e'tibor beriladi"],
                            ["Ikkinchi o'qish", "tinish belgilariga rioya qilinadi"],
                            ["Uchinchi o'qish", "ifodali va mazmunli o'qishga harakat qilinadi"],
                        ] as $i => $r)
                            <li class="flex items-start gap-3">
                                <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-teal-600 text-white font-bold text-[10px]">{{ $i+1 }}</span>
                                <div>
                                    <span class="text-xs font-semibold text-teal-900">{{ $r[0] }}</span>
                                    <span class="text-xs text-teal-700"> — {{ $r[1] }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-8 w-8 shrink-0 place-items-center overflow-hidden rounded-xl bg-amber-50 p-1.5">
                            <img src="{{ asset('images/sections/ravon-rivojlantirish/15_baholash_mezoni_kubok.png') }}" alt="" class="h-full w-full object-contain">
                        </span>
                        <p class="text-xs font-bold text-slate-700">Baholash mezoni:</p>
                    </div>
                    <ul class="space-y-2">
                        @foreach ([
                            "So'zlarni to'g'ri o'qidi",
                            "Tinish belgilariga rioya qildi",
                            "Ovoz ohangi matnga mos bo'ldi",
                            "O'qiganini tushuntirib berdi",
                        ] as $crit)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-teal-500" stroke="2.5" />
                                {{ $crit }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-teal-950 via-teal-900 to-cyan-900 p-5 text-white shadow-sm">
                <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-white/5"></div>
                <div class="relative z-10 mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center overflow-hidden rounded-xl bg-white/10 p-1.5">
                        <img src="{{ asset('images/sections/ravon-rivojlantirish/16_kutiladigan_natija_nishon.png') }}" alt="" class="h-full w-full object-contain">
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-teal-200">Kutiladigan natija</p>
                </div>
                <ul class="relative z-10 space-y-2">
                    @foreach ([
                        "Ravon o'qishni rivojlantirish metodlarini biladi",
                        "O'quvchilarning o'qish aniqligi, ifodaliligi va tushunishini kuzata oladi",
                        "Ravon o'qish mashg'ulotlarini rejalashtiradi va o'tkazadi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs leading-relaxed text-teal-50">
                            <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-teal-300" stroke="2.5" />
                            {{ $n }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-amber-200 bg-amber-50/50 p-5">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center overflow-hidden rounded-xl bg-amber-100 p-1.5">
                        <img src="{{ asset('images/sections/ravon-rivojlantirish/17_dissertatsiya_ilmiy_ahamiyati_diplom.png') }}" alt="" class="h-full w-full object-contain">
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-amber-800">Dissertatsiyadagi ilmiy ahamiyati</p>
                </div>
                <p class="text-xs leading-relaxed text-amber-900">Mazkur sahifa dissertatsiyada bo'lajak o'qituvchilarning ravon o'qish metodikasiga oid amaliy tayyorgarligini ko'rsatuvchi vosita sifatida asoslanadi. Ravon o'qishni rivojlantirish metodlari talabalarda o'quvchi o'qishini kuzatish, tuzatish va rag'batlantirish ko'nikmalarini shakllantiradi.</p>
            </div>
        </div>

        {{-- Nav buttons --}}
        <div class="mt-6 flex items-center justify-between">
            <a href="{{ route('metodik.show', 'javob-baholash') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi: O'quvchi javobini baholash
            </a>
            <a href="{{ route('metodik.show', 'lugat-ishlash') }}" class="inline-flex items-center gap-2 rounded-xl bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-teal-700">
                Keyingi: Lug'at ustida ishlash
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
