@extends('layouts.app')
@section('title', "Lug'at ustida ishlash")
@section('content')
@php
    $img = fn (string $name) => asset("images/sections/metodik/lugat-ishlash/{$name}");
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'lugat-ishlash'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-950 via-indigo-900 to-violet-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 flex items-center gap-6">
                <div class="max-w-xl flex-1">
                    <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">6</span>
                        Metodik modul · 6-bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Lug'at ustida ishlash</h1>
                    <p class="mt-3 leading-relaxed text-indigo-100">Bo'lajak boshlang'ich sinf o'qituvchilariga o'quvchilarning so'z boyligini kengaytirish, yangi so'zlarni kontekstda tushuntirish va lug'at orqali matnni tushunishni chuqurlashtirish metodikasini o'rgatish.</p>
                </div>
                <div class="hidden shrink-0 items-center justify-center rounded-2xl bg-white/95 p-5 shadow-xl md:flex">
                    <img src="{{ $img('12_ant_leaf.png') }}" alt="Kitoblar va yozuv anjomlari" class="h-32 w-32 object-contain">
                </div>
            </div>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-indigo-50 text-indigo-600">
                        <x-icon name="target" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Maqsad</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga o'quvchilarning so'z boyligini kengaytirish, yangi so'zlarni kontekstda tushuntirish va lug'at orqali matnni tushunishni chuqurlashtirish metodikasini o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-amber-50 text-amber-600">
                        <x-icon name="bulb" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="mb-2 text-xs leading-relaxed text-slate-500">Lug'at boyligi o'qish savodxonligining muhim omillaridan biridir. O'quvchi matndagi so'zlarning ma'nosini tushunmasa, matnning umumiy mazmunini ham to'liq anglay olmaydi.</p>
                <p class="text-xs leading-relaxed text-slate-500">Shu sababli boshlang'ich sinfda lug'at ustida ishlash o'qish darsining alohida emas, balki har bir matn bilan bog'liq zaruriy qismi bo'lishi kerak.</p>
            </div>
        </div>

        {{-- Yo'nalishlar --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[200px_1fr]">
                <div class="hidden shrink-0 items-center justify-center bg-gradient-to-br from-violet-50 to-indigo-50 p-6 md:flex">
                    <img src="{{ $img('09_golden_key.png') }}" alt="O'quvchi kitob o'qimoqda" class="h-40 w-40 rounded-2xl object-cover shadow-sm">
                </div>
                <div class="p-5">
                    <div class="mb-4 flex items-center justify-between">
                        <h2 class="text-xs font-bold uppercase tracking-wide text-slate-400">Lug'at ustida ishlash yo'nalishlari</h2>
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-violet-50 text-violet-600">
                            <x-icon name="book" class="h-4.5 w-4.5" />
                        </span>
                    </div>
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                        @foreach ([
                            "Yangi so'zlarni tushuntirish",
                            "So'z ma'nosini kontekstdan aniqlash",
                            "Sinonim va antonim topish",
                            "So'zdan gap tuzish",
                            "So'z xaritasi yaratish",
                            "Rasm orqali so'z ma'nosini ochish",
                            "Kalit so'zlarni ajratish",
                            "Yangi so'zlarni og'zaki va yozma nutqda qo'llash",
                        ] as $i => $y)
                            <div class="flex items-start gap-2 rounded-xl border border-slate-200 p-3 transition hover:border-violet-200 hover:bg-violet-50/50">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-violet-50 text-violet-600 font-bold text-[10px]">{{ $i+1 }}</span>
                                <span class="text-xs text-slate-600">{{ $y }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-8 flex items-start gap-3 rounded-2xl border border-amber-200 bg-amber-50 p-5">
            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-amber-100 text-amber-600">
                <x-icon name="star" class="h-4 w-4" />
            </span>
            <p class="text-xs leading-relaxed text-amber-800">Lug'at ustida ishlash faqat so'zning izohini aytish bilan tugamasligi kerak. O'quvchi yangi so'zni matnda ko'rishi, talaffuz qilishi, ma'nosini izohlashi, gapda ishlatishi va hayotiy vaziyat bilan bog'lashi zarur.</p>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-lg font-bold text-slate-800">Amaliy metodlar</h2>
                <span class="inline-flex items-center gap-1.5 rounded-full bg-violet-50 px-3 py-1.5 text-xs font-semibold text-violet-600">
                    <x-icon name="sparkle" class="h-3.5 w-3.5" />
                    Metodik tavsiyalar
                </span>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"So'z xaritasi",'desc'=>"O'quvchi yangi so'z atrofida uning ma'nosi, sinonimi, antonimi, rasmli ifodasi va gapdagi qo'llanishini yozadi.",'tint'=>'bg-indigo-50 text-indigo-600','img'=>'04_magnifying_book.png'],
                    ['n'=>2,'title'=>'Kontekstdan top','desc'=>"O'quvchi so'z ma'nosini matndagi boshqa gaplar yordamida taxmin qiladi.",'tint'=>'bg-emerald-50 text-emerald-600','img'=>'01_books_stationery.png'],
                    ['n'=>3,'title'=>'Rasm va so\'z','desc'=>"Yangi so'zga mos rasm ko'rsatiladi yoki o'quvchi o'zi rasm chizadi.",'tint'=>'bg-sky-50 text-sky-600','img'=>'02_teacher_classroom.png'],
                    ['n'=>4,'title'=>"Sinonimlar zanjiri",'desc'=>"O'quvchilar bir so'zga ma'nodosh so'zlar topadilar.",'tint'=>'bg-pink-50 text-pink-600','img'=>'06_photo_gallery.png'],
                    ['n'=>5,'title'=>"Yangi so'z bilan gap tuz",'desc'=>"O'quvchi yangi so'zni o'z gapi ichida ishlatadi.",'tint'=>'bg-orange-50 text-orange-600','img'=>'03_student_reading.png'],
                    ['n'=>6,'title'=>"Kalit so'zlar",'desc'=>"O'quvchi matnning asosiy mazmunini ochuvchi so'zlarni ajratadi.",'tint'=>'bg-teal-50 text-teal-600','img'=>'05_puzzle_pieces.png'],
                ] as $m)
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 transition hover:-translate-y-0.5 hover:shadow-sm">
                        <div class="mb-3 flex items-center gap-3">
                            <span class="grid h-12 w-12 shrink-0 place-items-center rounded-xl p-2 {{ $m['tint'] }}">
                                <img src="{{ $img($m['img']) }}" alt="" class="h-full w-full object-contain">
                            </span>
                            <h4 class="text-xs font-bold text-slate-800">{{ $m['n'] }}. {{ $m['title'] }}</h4>
                        </div>
                        <p class="text-xs leading-relaxed text-slate-500">{{ $m['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Darsda qo'llash + Talabalar uchun mashq --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-indigo-50 text-indigo-600">
                        <x-icon name="clipboard" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Darsda qo'llash tartibi</h3>
                </div>
                <ol class="space-y-2">
                    @foreach ([
                        "Matn oldindan ko'rib chiqiladi",
                        "O'quvchilar uchun notanish yoki muhim so'zlar belgilanadi",
                        "So'zlar o'qishdan oldin yoki matn jarayonida tushuntiriladi",
                        "O'quvchilar so'z ma'nosini kontekst orqali izohlaydi",
                        "Yangi so'zlardan gap tuziladi",
                        "Matn mazmunini ochuvchi kalit so'zlar ajratiladi",
                        "Dars oxirida yangi so'zlar takrorlanadi",
                    ] as $i => $step)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-50 text-indigo-600 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $step }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-violet-50 p-1.5 text-violet-600">
                        <img src="{{ $img('07_chat_bubbles.png') }}" alt="" class="h-full w-full object-contain">
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Talabalar uchun mashq</h3>
                </div>
                <ol class="space-y-1.5">
                    @foreach ([
                        "3-sinf uchun mos matn tanlang",
                        "Matndan 8 ta muhim so'z ajrating",
                        "Har bir so'z uchun izoh yozing",
                        "3 ta so'zga sinonim toping",
                        "3 ta so'zga antonim toping",
                        "5 ta so'z bilan gap tuzing",
                        "Bitta so'z xaritasi ishlab chiqing",
                        "Lug'at ustida ishlash uchun 10 daqiqalik dars fragmenti yozing",
                    ] as $i => $task)
                        <li class="flex items-start gap-1.5 text-xs text-slate-500">
                            <span class="inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-violet-100 text-violet-700 font-bold text-[9px]">{{ $i+1 }}</span>
                            {{ $task }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-8 rounded-2xl border border-amber-200 bg-amber-50 p-5">
            <div class="mb-3 flex items-center gap-2.5">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-100 text-amber-600">
                    <x-icon name="cap" class="h-4.5 w-4.5" />
                </span>
                <h3 class="text-sm font-bold text-amber-900">O'qituvchi uchun tavsiya</h3>
            </div>
            <p class="text-xs leading-relaxed text-amber-800">Yangi so'zlarni haddan tashqari ko'p bermang. Bir darsda 5–7 ta asosiy so'z bilan chuqur ishlash ko'proq samara beradi. So'zni faqat tarjima yoki izoh bilan emas, rasm, harakat, misol, kontekst va o'quvchining shaxsiy tajribasi bilan bog'lab tushuntiring.</p>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Namunaviy topshiriq</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="flex flex-col rounded-2xl border border-indigo-200 bg-indigo-50 p-5">
                    <p class="mb-3 text-xs font-bold text-indigo-800">Matn mavzusi: "Mehnatsevar chumoli"</p>
                    <p class="mb-2 text-xs font-semibold text-indigo-900">Yangi so'zlar:</p>
                    <ul class="mb-3 space-y-1.5">
                        @foreach (["mehnatsevar", "g'amxo'r", "zaxira", "mashaqqat", "sabr"] as $w)
                            <li class="flex items-start gap-2 text-xs text-indigo-800">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-indigo-500" stroke="2.5" />
                                {{ $w }}
                            </li>
                        @endforeach
                    </ul>
                    <p class="mb-2 text-xs font-semibold text-indigo-900">Topshiriqlar:</p>
                    <ol class="mb-4 space-y-2">
                        @foreach ([
                            "\"Mehnatsevar\" so'zining ma'nosini izohlang",
                            "\"Sabr\" so'ziga mos hayotiy misol keltiring",
                            "\"G'amxo'r\" so'ziga sinonim toping",
                            "\"Mashaqqat\" so'zi qatnashgan gap tuzing",
                            "Matndagi asosiy fikrni bildiruvchi 3 ta kalit so'zni yozing",
                        ] as $i => $task)
                            <li class="flex items-start gap-2 text-xs text-indigo-800">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-white font-bold text-[10px]">{{ $i+1 }}</span>
                                {{ $task }}
                            </li>
                        @endforeach
                    </ol>
                    <div class="mt-auto flex items-center justify-center rounded-xl bg-white/60 p-4">
                        <img src="{{ $img('08_learning_blocks.png') }}" alt="Mehnatsevar chumoli" class="h-24 w-24 object-contain">
                    </div>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="mb-3 text-xs font-bold text-slate-700">So'z xaritasi namunasi:</p>
                    <div class="overflow-x-auto rounded-lg border border-slate-200">
                        <table class="w-full min-w-[420px] text-xs">
                            <thead>
                                <tr class="bg-slate-100 text-slate-600">
                                    <th class="px-3 py-2 text-left font-semibold">So'z</th>
                                    <th class="px-3 py-2 text-left font-semibold">Ma'nosi</th>
                                    <th class="px-3 py-2 text-left font-semibold">Sinonimi</th>
                                    <th class="px-3 py-2 text-left font-semibold">Gapda qo'llash</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="text-slate-700">
                                    <td class="px-3 py-2 font-semibold">Mehnatsevar</td>
                                    <td class="px-3 py-2">Ishni yaxshi ko'radigan, tinmay harakat qiladigan</td>
                                    <td class="px-3 py-2">Tirishqoq</td>
                                    <td class="px-3 py-2">Mehnatsevar bola har kuni kitob o'qiydi.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 flex items-center gap-3 rounded-xl bg-slate-50 p-4">
                        <img src="{{ $img('10_checklist_clipboard.png') }}" alt="" class="h-14 w-14 shrink-0 object-contain">
                        <p class="text-xs leading-relaxed text-slate-500">So'z xaritasini har bir yangi so'z uchun sinfda birgalikda to'ldirish o'quvchining mustaqil fikrlashini rivojlantiradi.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-indigo-950 via-indigo-900 to-violet-900 p-5 text-white shadow-sm">
                <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-white/5"></div>
                <div class="relative mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-indigo-200">
                        <x-icon name="trophy" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-indigo-200">Kutiladigan natija</p>
                </div>
                <ul class="relative space-y-2">
                    @foreach ([
                        "Lug'at ustida ishlashning metodik ahamiyatini tushunadi",
                        "Yangi so'zlarni matn mazmuni bilan bog'lab o'rgatadi",
                        "O'quvchilarning so'z boyligini oshirish orqali matnni tushunish darajasini kuchaytiradi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs text-indigo-100">
                            <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-indigo-300" stroke="2.5" />
                            {{ $n }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-100 text-amber-600">
                        <x-icon name="bulb" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-amber-800">Dissertatsiyadagi ilmiy ahamiyati</p>
                </div>
                <p class="text-xs leading-relaxed text-amber-900">Lug'at ustida ishlash sahifasi dissertatsiyada bo'lajak o'qituvchilarning lingvistik-metodik va kognitiv tayyorgarligini rivojlantirish vositasi sifatida asoslanadi. So'z boyligi o'qish savodxonligining mazmuniy tayanchi bo'lib, matnni tushunish, xulosa chiqarish va fikr bildirish jarayonlarini kuchaytiradi.</p>
            </div>
        </div>

        {{-- Bo'lim yakuni --}}
        <div class="mb-6 overflow-hidden rounded-2xl border border-teal-200 bg-gradient-to-br from-teal-50 via-emerald-50 to-white p-6">
            <div class="grid grid-cols-1 gap-5 md:grid-cols-[1fr_auto] md:items-center">
                <div>
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-teal-100 text-teal-700">
                            <x-icon name="flag" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold uppercase tracking-wide text-emerald-900">Bo'lim yakuni</h3>
                    </div>
                    <p class="mb-3 text-xs leading-relaxed text-emerald-900">"Bo'lajak boshlang'ich sinf o'qituvchilari uchun metodik modul" bo'limi o'qish savodxonligini rivojlantirish bo'yicha nazariy bilimlarni amaliy faoliyatga aylantirishga xizmat qiladi. Ushbu bo'lim orqali talaba matn bilan ishlash, savol tuzish, PIRLS topshiriqlarini yaratish, o'quvchi javobini baholash, ravon o'qishni rivojlantirish va lug'at ustida ishlash metodikasini bosqichma-bosqich egallaydi.</p>
                    <p class="mb-4 text-xs leading-relaxed text-emerald-900">Bo'limning asosiy qiymati shundaki, u bo'lajak o'qituvchini tayyor dars ishlanmasidan foydalanuvchi emas, balki matn tanlay oladigan, savol tuza oladigan, topshiriq yarata oladigan, baholay oladigan va o'quvchining individual rivojlanishini kuzata oladigan metodik jihatdan faol mutaxassis sifatida shakllantiradi.</p>
                    <p class="mb-2 text-xs font-semibold text-emerald-900">Dissertatsiya nuqtayi nazaridan mazkur modul quyidagi tayyorgarlik komponentlarini rivojlantirishga xizmat qiladi:</p>
                    <ul class="space-y-1.5">
                        @foreach ([
                            "kognitiv tayyorgarlik — o'qish savodxonligi mazmunini tushunish",
                            "amaliy-metodik tayyorgarlik — dars jarayonida matn va topshiriqlardan foydalanish",
                            "diagnostik-baholash tayyorgarligi — o'quvchi javobini mezon asosida baholash",
                            "kommunikativ tayyorgarlik — savol-javob, muhokama va fikr almashishni tashkil etish",
                            "refleksiv tayyorgarlik — o'z metodik faoliyatini tahlil qilish va takomillashtirish",
                        ] as $c)
                            <li class="flex items-start gap-2 text-xs text-emerald-800">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" stroke="2.5" />
                                {{ $c }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="hidden shrink-0 items-center justify-center rounded-2xl bg-white/70 p-4 md:flex">
                    <img src="{{ $img('11_notebook_pencil.png') }}" alt="Ta'lim yakuni" class="h-24 w-24 object-contain">
                </div>
            </div>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('metodik.show', 'ravon-rivojlantirish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi: Ravon o'qishni rivojlantirish
            </a>
            <a href="{{ route('metodik.index') }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-indigo-700">
                Metodik modulga qaytish
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
