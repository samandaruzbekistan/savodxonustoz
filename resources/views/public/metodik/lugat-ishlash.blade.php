@extends('layouts.app')
@section('title', "Lug'at ustida ishlash")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'lugat-ishlash'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-indigo-100 text-indigo-700">6</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Metodik modul • 6-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Lug'at ustida ishlash</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Bo'lajak boshlang'ich sinf o'qituvchilariga o'quvchilarning so'z boyligini kengaytirish, yangi so'zlarni kontekstda tushuntirish va lug'at orqali matnni tushunishni chuqurlashtirish metodikasini o'rgatish.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-indigo-300 bg-indigo-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-indigo-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-indigo-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-indigo-800 leading-relaxed">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga o'quvchilarning so'z boyligini kengaytirish, yangi so'zlarni kontekstda tushuntirish va lug'at orqali matnni tushunishni chuqurlashtirish metodikasini o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-xl border border-violet-300 bg-violet-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-violet-800 leading-relaxed mb-2">Lug'at boyligi o'qish savodxonligining muhim omillaridan biridir. O'quvchi matndagi so'zlarning ma'nosini tushunmasa, matnning umumiy mazmunini ham to'liq anglay olmaydi.</p>
                <p class="text-xs text-violet-800 leading-relaxed">Shu sababli boshlang'ich sinfda lug'at ustida ishlash o'qish darsining alohida emas, balki har bir matn bilan bog'liq zaruriy qismi bo'lishi kerak.</p>
            </div>
        </div>

        {{-- Yo'nalishlar --}}
        <div class="mb-6 rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
            <div class="bg-indigo-600 px-4 py-2.5">
                <h3 class="text-sm font-bold text-white">Lug'at ustida ishlash yo'nalishlari</h3>
            </div>
            <div class="grid grid-cols-1 divide-y divide-slate-100 sm:grid-cols-2 sm:divide-y-0 sm:divide-x">
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
                    <div class="flex items-start gap-3 px-4 py-2.5">
                        <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-100 text-indigo-700 font-bold text-[10px]">{{ $i+1 }}</span>
                        <span class="text-xs text-slate-700">{{ $y }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-6 rounded-xl border border-amber-300 bg-amber-100 p-5">
            <p class="text-xs text-amber-900 leading-relaxed">Lug'at ustida ishlash faqat so'zning izohini aytish bilan tugamasligi kerak. O'quvchi yangi so'zni matnda ko'rishi, talaffuz qilishi, ma'nosini izohlashi, gapda ishlatishi va hayotiy vaziyat bilan bog'lashi zarur.</p>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY METODLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"So'z xaritasi",'desc'=>"O'quvchi yangi so'z atrofida uning ma'nosi, sinonimi, antonimi, rasmli ifodasi va gapdagi qo'llanishini yozadi.",'color'=>'border-indigo-300 bg-indigo-100','ic'=>'bg-indigo-600','tc'=>'text-indigo-900'],
                    ['n'=>2,'title'=>'Kontekstdan top','desc'=>"O'quvchi so'z ma'nosini matndagi boshqa gaplar yordamida taxmin qiladi.",'color'=>'border-violet-300 bg-violet-100','ic'=>'bg-violet-600','tc'=>'text-violet-900'],
                    ['n'=>3,'title'=>'Rasm va so\'z','desc'=>"Yangi so'zga mos rasm ko'rsatiladi yoki o'quvchi o'zi rasm chizadi.",'color'=>'border-sky-300 bg-sky-100','ic'=>'bg-sky-600','tc'=>'text-sky-900'],
                    ['n'=>4,'title'=>"Sinonimlar zanjiri",'desc'=>"O'quvchilar bir so'zga ma'nodosh so'zlar topadilar.",'color'=>'border-blue-300 bg-blue-100','ic'=>'bg-blue-600','tc'=>'text-blue-900'],
                    ['n'=>5,'title'=>"Yangi so'z bilan gap tuz",'desc'=>"O'quvchi yangi so'zni o'z gapi ichida ishlatadi.",'color'=>'border-emerald-300 bg-emerald-100','ic'=>'bg-emerald-600','tc'=>'text-emerald-900'],
                    ['n'=>6,'title'=>"Kalit so'zlar",'desc'=>"O'quvchi matnning asosiy mazmunini ochuvchi so'zlarni ajratadi.",'color'=>'border-teal-300 bg-teal-100','ic'=>'bg-teal-600','tc'=>'text-teal-900'],
                ] as $m)
                    <div class="rounded-xl border p-4 {{ $m['color'] }}">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full {{ $m['ic'] }} text-white text-xs font-bold">{{ $m['n'] }}</span>
                            <h4 class="text-xs font-bold {{ $m['tc'] }}">{{ $m['title'] }}</h4>
                        </div>
                        <p class="text-xs leading-relaxed {{ $m['tc'] }} opacity-90">{{ $m['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Darsda qo'llash + Talabalar uchun mashq --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                <div class="bg-slate-800 px-4 py-2.5">
                    <h3 class="text-sm font-bold text-white uppercase tracking-wide">Darsda qo'llash tartibi</h3>
                </div>
                <ol class="divide-y divide-slate-100">
                    @foreach ([
                        "Matn oldindan ko'rib chiqiladi",
                        "O'quvchilar uchun notanish yoki muhim so'zlar belgilanadi",
                        "So'zlar o'qishdan oldin yoki matn jarayonida tushuntiriladi",
                        "O'quvchilar so'z ma'nosini kontekst orqali izohlaydi",
                        "Yangi so'zlardan gap tuziladi",
                        "Matn mazmunini ochuvchi kalit so'zlar ajratiladi",
                        "Dars oxirida yangi so'zlar takrorlanadi",
                    ] as $i => $step)
                        <li class="flex items-start gap-3 px-4 py-2.5">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-100 text-indigo-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            <span class="text-xs text-slate-700">{{ $step }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="rounded-xl border border-indigo-200 bg-indigo-50 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-indigo-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-indigo-900">Talabalar uchun mashq</h3>
                </div>
                <ol class="space-y-2">
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
                        <li class="flex items-start gap-2 text-xs text-indigo-800">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-200 text-indigo-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $task }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-6 rounded-xl border border-amber-300 bg-amber-100 p-5">
            <div class="flex items-center gap-2 mb-3">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126z"/></svg>
                </span>
                <h3 class="text-sm font-bold text-amber-900">O'qituvchi uchun tavsiya</h3>
            </div>
            <p class="text-xs text-amber-900 leading-relaxed">Yangi so'zlarni haddan tashqari ko'p bermang. Bir darsda 5–7 ta asosiy so'z bilan chuqur ishlash ko'proq samara beradi. So'zni faqat tarjima yoki izoh bilan emas, rasm, harakat, misol, kontekst va o'quvchining shaxsiy tajribasi bilan bog'lab tushuntiring.</p>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">NAMUNAVIY TOPSHIRIQ</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-indigo-300 bg-indigo-50 p-5">
                    <p class="text-xs font-bold text-indigo-800 mb-3">Matn mavzusi: "Mehnatsevar chumoli"</p>
                    <p class="text-xs font-semibold text-indigo-900 mb-2">Yangi so'zlar:</p>
                    <ul class="space-y-1.5 mb-3">
                        @foreach (["mehnatsevar", "g'amxo'r", "zaxira", "mashaqqat", "sabr"] as $w)
                            <li class="flex items-start gap-2 text-xs text-indigo-800">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                {{ $w }}
                            </li>
                        @endforeach
                    </ul>
                    <p class="text-xs font-semibold text-indigo-900 mb-2">Topshiriqlar:</p>
                    <ol class="space-y-2">
                        @foreach ([
                            "\"Mehnatsevar\" so'zining ma'nosini izohlang",
                            "\"Sabr\" so'ziga mos hayotiy misol keltiring",
                            "\"G'amxo'r\" so'ziga sinonim toping",
                            "\"Mashaqqat\" so'zi qatnashgan gap tuzing",
                            "Matndagi asosiy fikrni bildiruvchi 3 ta kalit so'zni yozing",
                        ] as $i => $task)
                            <li class="flex items-start gap-3">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-white font-bold text-[10px]">{{ $i+1 }}</span>
                                <span class="text-xs text-indigo-800">{{ $task }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="text-xs font-bold text-slate-700 mb-3">So'z xaritasi namunasi:</p>
                    <div class="overflow-hidden rounded-lg border border-slate-200">
                        <table class="w-full text-xs">
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
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl bg-gradient-to-br from-slate-800 to-indigo-900 p-5 text-white">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="h-4 w-4 text-indigo-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                    <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
                </div>
                <ul class="space-y-2">
                    @foreach ([
                        "Lug'at ustida ishlashning metodik ahamiyatini tushunadi",
                        "Yangi so'zlarni matn mazmuni bilan bog'lab o'rgatadi",
                        "O'quvchilarning so'z boyligini oshirish orqali matnni tushunish darajasini kuchaytiradi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs text-slate-200">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-indigo-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $n }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-amber-300 bg-amber-50 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="h-4 w-4 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                    <p class="text-xs font-semibold text-amber-800 uppercase tracking-wide">Dissertatsiyadagi ilmiy ahamiyati</p>
                </div>
                <p class="text-xs text-amber-900 leading-relaxed">Lug'at ustida ishlash sahifasi dissertatsiyada bo'lajak o'qituvchilarning lingvistik-metodik va kognitiv tayyorgarligini rivojlantirish vositasi sifatida asoslanadi. So'z boyligi o'qish savodxonligining mazmuniy tayanchi bo'lib, matnni tushunish, xulosa chiqarish va fikr bildirish jarayonlarini kuchaytiradi.</p>
            </div>
        </div>

        {{-- Bo'lim yakuni --}}
        <div class="mb-6 rounded-2xl border border-emerald-300 bg-emerald-50 p-6">
            <h3 class="text-sm font-bold text-emerald-900 uppercase tracking-wide mb-3">Bo'lim yakuni</h3>
            <p class="text-xs text-emerald-900 leading-relaxed mb-3">"Bo'lajak boshlang'ich sinf o'qituvchilari uchun metodik modul" bo'limi o'qish savodxonligini rivojlantirish bo'yicha nazariy bilimlarni amaliy faoliyatga aylantirishga xizmat qiladi. Ushbu bo'lim orqali talaba matn bilan ishlash, savol tuzish, PIRLS topshiriqlarini yaratish, o'quvchi javobini baholash, ravon o'qishni rivojlantirish va lug'at ustida ishlash metodikasini bosqichma-bosqich egallaydi.</p>
            <p class="text-xs text-emerald-900 leading-relaxed mb-4">Bo'limning asosiy qiymati shundaki, u bo'lajak o'qituvchini tayyor dars ishlanmasidan foydalanuvchi emas, balki matn tanlay oladigan, savol tuza oladigan, topshiriq yarata oladigan, baholay oladigan va o'quvchining individual rivojlanishini kuzata oladigan metodik jihatdan faol mutaxassis sifatida shakllantiradi.</p>
            <p class="text-xs font-semibold text-emerald-900 mb-2">Dissertatsiya nuqtayi nazaridan mazkur modul quyidagi tayyorgarlik komponentlarini rivojlantirishga xizmat qiladi:</p>
            <ul class="space-y-1.5">
                @foreach ([
                    "kognitiv tayyorgarlik — o'qish savodxonligi mazmunini tushunish",
                    "amaliy-metodik tayyorgarlik — dars jarayonida matn va topshiriqlardan foydalanish",
                    "diagnostik-baholash tayyorgarligi — o'quvchi javobini mezon asosida baholash",
                    "kommunikativ tayyorgarlik — savol-javob, muhokama va fikr almashishni tashkil etish",
                    "refleksiv tayyorgarlik — o'z metodik faoliyatini tahlil qilish va takomillashtirish",
                ] as $c)
                    <li class="flex items-start gap-2 text-xs text-emerald-800">
                        <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                        {{ $c }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('metodik.show', 'ravon-rivojlantirish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Ravon o'qishni rivojlantirish
            </a>
            <a href="{{ route('metodik.index') }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700 transition-colors">
                Metodik modulga qaytish
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
