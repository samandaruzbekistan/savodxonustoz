@extends('layouts.app')
@section('title', "O'quvchi javobini baholash")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'javob-baholash'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl shadow-sm">
            <img src="{{ asset('images/metodik/javob-baholash/hero.jpg') }}" alt="O'quvchi doskada javob yozmoqda" class="h-56 w-full object-cover object-top sm:h-64" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-950/95 via-emerald-900/70 to-emerald-900/10"></div>
            <div class="absolute inset-0 flex flex-col justify-center px-7 sm:px-10">
                <span class="mb-3 inline-flex w-fit items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">4</span>
                    Metodik modul · 4-bo'lim
                </span>
                <h1 class="max-w-2xl text-3xl font-extrabold tracking-tight text-white sm:text-4xl">O'quvchi javobini baholash</h1>
                <p class="mt-3 max-w-xl text-sm leading-relaxed text-emerald-100">Ochiq javoblarni mezon asosida tahlil qilish va sun'iy intellekt yordamida baholash rubrikasini yaratish sahifasi. Bo'lajak o'qituvchilarda adolatli, aniq va mezonli baholash kompetensiyasini rivojlantirish.</p>
            </div>
        </div>

        {{-- Maqsad --}}
        <div class="mb-6">
            <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-emerald-900">MAQSAD — Sahifa quyidagi ko'nikmalarni shakllantirishga yo'naltiriladi:</h3>
                </div>
                <div class="overflow-hidden rounded-lg border border-emerald-200 bg-white">
                    <table class="w-full text-xs">
                        <thead><tr class="bg-emerald-50 border-b border-emerald-200">
                            <th class="px-3 py-2 text-left font-bold text-emerald-800">Yo'nalish</th>
                            <th class="px-3 py-2 text-left font-bold text-emerald-800">Mazmuni</th>
                        </tr></thead>
                        <tbody class="divide-y divide-emerald-50">
                            @foreach ([
                                ["Mezonli baholash","Javobni oldindan belgilangan mezon asosida baholash"],
                                ["Dalilni aniqlash","O'quvchi javobida matnga tayangan dalil bor yoki yo'qligini ko'rish"],
                                ["Xulosani baholash","Javobdagi fikr, izoh va xulosa darajasini aniqlash"],
                                ["Rivojlantiruvchi izoh","O'quvchiga keyingi o'sish yo'lini ko'rsatadigan fikr-mulohaza berish"],
                                ["AI yordamida baholash","Matn, savol va javob asosida sun'iy intellekt orqali rubrika yaratish"],
                            ] as $row)
                                <tr>
                                    <td class="px-3 py-2 font-semibold text-emerald-800">{{ $row[0] }}</td>
                                    <td class="px-3 py-2 text-slate-600">{{ $row[1] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="overflow-hidden rounded-xl border border-teal-300 bg-teal-100">
                <img src="{{ asset('images/metodik/javob-baholash/teacher-review.jpg') }}" alt="O'qituvchi o'quvchi javobini ko'zdan kechirmoqda" class="h-36 w-full object-cover object-[center_35%]">
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-teal-600">
                            <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                        </span>
                        <h3 class="text-sm font-bold text-teal-900">NAZARIY IZOH</h3>
                    </div>
                    <p class="text-xs text-teal-800 leading-relaxed mb-2">O'qish savodxonligini rivojlantirishda baholash oddiy ball qo'yish jarayoni emas. Baholash — bu o'quvchining matnni qay darajada tushungani, savol mazmunini anglagani, matndan dalil keltira olgani va o'z fikrini mustaqil ifodalaganini aniqlash vositasidir.</p>
                    <p class="text-xs text-teal-800 leading-relaxed">Boshlang'ich sinflarda ochiq javoblarni baholash alohida ahamiyatga ega. Bunday javoblarda o'quvchi tayyor variantni tanlamaydi, balki o'z tushunchasi, munosabati va xulosasini bildiradi.</p>
                </div>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-xs font-bold text-slate-800 mb-3">O'QUVCHI JAVOBINI BAHOLASHDA QO'YIDAGI JIHATLAR E'TIBORGA OLINADI:</h3>
                <div class="overflow-hidden rounded-lg border border-slate-200">
                    <table class="w-full text-xs">
                        <thead><tr class="bg-slate-50 border-b border-slate-200">
                            <th class="px-2 py-1.5 text-left font-bold text-slate-700">Baholash jihati</th>
                            <th class="px-2 py-1.5 text-left font-bold text-slate-700">Savol</th>
                        </tr></thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ([
                                ["Savolni tushunish","O'quvchi savol mazmunini to'g'ri anglaganmi?"],
                                ["Matnga moslik","Javob matndagi mazmun bilan bog'langanmi?"],
                                ["Dalil keltirish","Javobda matndan dalil yoki asos bormi?"],
                                ["Xulosa chiqarish","O'quvchi fikrini yakunlay olganmi?"],
                                ["Mustaqil fikr","Javobda shaxsiy munosabat yoki tahlil bormi?"],
                                ["Til ravonligi","Javob tushunarli va mantiqan izchil yozilganmi?"],
                            ] as $row)
                                <tr>
                                    <td class="px-2 py-1.5 font-semibold text-slate-700">{{ $row[0] }}</td>
                                    <td class="px-2 py-1.5 text-slate-600">{{ $row[1] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- AI rubrika generatori --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-gradient-to-r from-violet-700 to-indigo-700 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">
                <span class="mr-2">✦</span>SUN'IY INTELLEKT YORDAMIDA BAHOLASH RUBRIKASI YARATISH<span class="ml-2">✦</span>
            </div>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                {{-- Generator form --}}
                <div class="rounded-xl border border-violet-300 bg-white p-5 shadow-sm">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-gradient-to-br from-violet-600 to-indigo-600">
                            <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">AI rubrika generatori</h3>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Matnni kiriting:</label>
                            <textarea rows="2" placeholder="Bu yerga o'quvchiga berilgan matn joylashtiriladi..." class="w-full rounded-lg border border-slate-200 px-3 py-2 text-xs text-slate-700 focus:border-violet-400 focus:outline-none focus:ring-1 focus:ring-violet-300 resize-none"></textarea>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Savolni kiriting:</label>
                            <input type="text" placeholder="Masalan: Qahramon nima uchun do'stiga yordam berdi?" class="w-full rounded-lg border border-slate-200 px-3 py-2 text-xs text-slate-700 focus:border-violet-400 focus:outline-none focus:ring-1 focus:ring-violet-300">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">O'quvchi javobini kiriting:</label>
                            <input type="text" placeholder="Masalan: Chunki u do'stining qiynalayotganini ko'rdi..." class="w-full rounded-lg border border-slate-200 px-3 py-2 text-xs text-slate-700 focus:border-violet-400 focus:outline-none focus:ring-1 focus:ring-violet-300">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Baholash turini tanlang:</label>
                            <select class="w-full rounded-lg border border-slate-200 px-3 py-2 text-xs text-slate-700 focus:border-violet-400 focus:outline-none focus:ring-1 focus:ring-violet-300">
                                <option>0–3 ballik rubrika</option>
                                <option>PIRLS tipidagi baholash</option>
                                <option>Rivojlantiruvchi izoh</option>
                                <option>Dalil asosida baholash</option>
                                <option>To'liq / qisman / noto'g'ri javob tahlili</option>
                            </select>
                        </div>
                        <button class="w-full rounded-xl bg-gradient-to-r from-violet-600 to-indigo-600 px-4 py-2.5 text-sm font-semibold text-white hover:from-violet-700 hover:to-indigo-700 transition-all flex items-center justify-center gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                            Rubrika yaratish
                        </button>
                    </div>
                </div>

                {{-- AI natija namunasi --}}
                <div class="rounded-xl border border-emerald-300 bg-emerald-50 p-5">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                            <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                        </span>
                        <h3 class="text-sm font-bold text-emerald-900">AI natijasi namunasi</h3>
                    </div>
                    <div class="overflow-hidden rounded-lg border border-emerald-200 bg-white">
                        <table class="w-full text-xs">
                            <thead><tr class="bg-emerald-50 border-b border-emerald-200">
                                <th class="px-3 py-2 text-left font-bold text-emerald-800">Baholash elementi</th>
                                <th class="px-3 py-2 text-left font-bold text-emerald-800">AI tahlili</th>
                            </tr></thead>
                            <tbody class="divide-y divide-emerald-50">
                                @foreach ([
                                    ["Tavsiya etilgan ball","2 ball","bg-blue-100 text-blue-700"],
                                    ["Javob sifati","Fikr to'g'ri, lekin matndan aniq dalil yetarli emas",null],
                                    ["Kuchli jihati","O'quvchi qahramonning yordam berish sababini tushungan",null],
                                    ["Kamchiligi","Javobda matndagi aniq holat yoki dalil keltirilmagan",null],
                                ] as $row)
                                    <tr>
                                        <td class="px-3 py-2 font-semibold text-slate-700">{{ $row[0] }}</td>
                                        <td class="px-3 py-2 text-slate-600">
                                            @if($row[2])
                                                <span class="rounded-full px-2 py-0.5 text-xs font-bold {{ $row[2] }}">{{ $row[1] }}</span>
                                            @else
                                                {{ $row[1] }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3 rounded-lg border border-emerald-200 bg-white p-3">
                        <p class="text-xs font-semibold text-emerald-800 mb-1">Rivojlantiruvchi izoh:</p>
                        <p class="text-xs text-slate-600 italic">"Sen qahramon do'stiga yordam berganini to'g'ri tushungansan. Endi javobingga matndan aniq dalil qo'shsang, fikring yanada kuchli bo'ladi."</p>
                    </div>
                    <div class="mt-2 rounded-lg border border-amber-200 bg-amber-50 p-3">
                        <p class="text-xs font-semibold text-amber-800 mb-1">Keyingi topshiriq:</p>
                        <p class="text-xs text-amber-700">Matndan qahramonning do'stiga yordam bergan joyini topib, javobga qo'shing.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY METODLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-4">
                    <h4 class="text-xs font-bold text-emerald-900 mb-3">"0–3 BALLIK RUBRIKA" METODI</h4>
                    <div class="space-y-1.5">
                        @foreach ([
                            ['3 ball','bg-emerald-600',"Fikr aniq, javob matnga mos, dalil mavjud, xulosa to'liq"],
                            ['2 ball','bg-blue-500',"Fikr to'g'ri, lekin dalil yoki izoh yetarli emas"],
                            ['1 ball','bg-amber-500',"Javob qisman mos, fikr yuzaki, dalil yo'q"],
                            ['0 ball','bg-red-500',"Javob savolga mos emas yoki javob berilmagan"],
                        ] as $r)
                            <div class="flex items-center gap-2 rounded-lg bg-white border border-slate-100 px-2.5 py-2">
                                <span class="inline-flex h-14 w-14 shrink-0 items-center justify-center rounded-lg {{ $r[1] }} text-white text-xs font-bold">{{ $r[0] }}</span>
                                <span class="text-xs text-slate-600">{{ $r[2] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="rounded-xl border border-blue-300 bg-blue-100 p-4">
                        <h4 class="text-xs font-bold text-blue-900 mb-2">"DALIL BOR — DALIL YO'Q" METODI</h4>
                        <div class="space-y-1.5">
                            @foreach ([
                                ["Dalil bor","Javob asoslangan hisoblanadi","bg-emerald-100 border-emerald-200 text-emerald-800"],
                                ["Dalil qisman bor","Javobni kuchaytirish kerak","bg-amber-100 border-amber-200 text-amber-800"],
                                ["Dalil yo'q","O'quvchi matnga qayta murojaat qiladi","bg-red-100 border-red-200 text-red-800"],
                            ] as $row)
                                <div class="flex items-center justify-between rounded-lg border px-2.5 py-1.5 {{ $row[2] }}">
                                    <span class="text-xs font-semibold">{{ $row[0] }}</span>
                                    <span class="text-xs">{{ $row[1] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="rounded-xl border border-violet-300 bg-violet-100 p-4">
                        <h4 class="text-xs font-bold text-violet-900 mb-2">"IKKI YULDUZ, BIR TAVSIYA" METODI</h4>
                        <ul class="space-y-1.5">
                            @foreach ([
                                ["⭐ 1-yulduz:","Sen savolga mos javob bergansan."],
                                ["⭐ 2-yulduz:","Qahramon harakatini to'g'ri tushungansan."],
                                ["💡 Tavsiya:","Javobingga matndan bitta dalil qo'shsang, fikring yanada aniq bo'ladi."],
                            ] as $row)
                                <li class="flex items-start gap-1.5 text-xs text-violet-800">
                                    <span class="font-semibold shrink-0">{{ $row[0] }}</span>
                                    {{ $row[1] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="rounded-xl border border-teal-300 bg-teal-100 p-4">
                        <h4 class="text-xs font-bold text-teal-900 mb-2">"O'ZINI BAHOLASH" METODI</h4>
                        <div class="overflow-hidden rounded-lg border border-teal-200 bg-white">
                            <table class="w-full text-xs">
                                <thead><tr class="bg-teal-50 border-b border-teal-200">
                                    <th class="px-2 py-1.5 text-left font-bold text-teal-800">Savol</th>
                                    <th class="px-2 py-1.5 text-center font-bold text-teal-800">Ha</th>
                                    <th class="px-2 py-1.5 text-center font-bold text-teal-800">Yo'q</th>
                                </tr></thead>
                                <tbody class="divide-y divide-teal-50">
                                    @foreach (["Men savolga javob berdimmi?","Javobim matnga mosmi?","Dalil keltirdimmi?","Xulosa yozdimmi?"] as $q)
                                        <tr>
                                            <td class="px-2 py-1.5 text-slate-600">{{ $q }}</td>
                                            <td class="px-2 py-1.5 text-center text-slate-400">☐</td>
                                            <td class="px-2 py-1.5 text-center text-slate-400">☐</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Darsda qo'llash tartibi --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">DARSDA QO'LLASH TARTIBI</div>
            <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
                <table class="w-full text-xs">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200">
                            <th class="px-4 py-2.5 text-left font-bold text-slate-700">Bosqich</th>
                            <th class="px-4 py-2.5 text-left font-bold text-slate-700">O'qituvchi faoliyati</th>
                            <th class="px-4 py-2.5 text-left font-bold text-slate-700">O'quvchi faoliyati</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ([
                            ["1","Savol beradi","Savolni tinglaydi yoki o'qiydi"],
                            ["2","Javobni yozma yoki og'zaki oladi","Javob beradi"],
                            ["3","Javobni mezon asosida tahlil qiladi","O'z javobini solishtiradi"],
                            ["4","To'liq, qisman va noto'g'ri javoblarni ajratadi","Xatosini anglaydi"],
                            ["5","Rivojlantiruvchi izoh beradi","Tavsiyani qabul qiladi"],
                            ["6","Matnga qaytib dalil topishni topshiradi","Matndan dalil izlaydi"],
                            ["7","Qayta javob yozdiradi","Javobini yaxshilaydi"],
                        ] as $row)
                            <tr>
                                <td class="px-4 py-2.5"><span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 font-bold text-[10px]">{{ $row[0] }}</span></td>
                                <td class="px-4 py-2.5 text-slate-700">{{ $row[1] }}</td>
                                <td class="px-4 py-2.5 text-slate-600">{{ $row[2] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Talabalar uchun mashq --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">TALABALAR UCHUN MASHQ</div>
            <div class="mb-3 grid grid-cols-1 gap-3 sm:grid-cols-[160px_1fr]">
                <div class="hidden overflow-hidden rounded-xl border border-slate-200 sm:block">
                    <img src="{{ asset('images/metodik/javob-baholash/classroom.jpg') }}" alt="O'quvchilar sinfda diqqat bilan tinglamoqda" class="h-full w-full object-cover">
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm flex items-center">
                    <p class="text-xs font-bold text-slate-700">Savol: <span class="font-normal text-slate-600">Nima uchun qahramon do'stiga yordam berdi?</span></p>
                </div>
            </div>
            <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
                <table class="w-full text-xs">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200">
                            <th class="px-3 py-2.5 text-left font-bold text-slate-700">Javob</th>
                            <th class="px-3 py-2.5 text-left font-bold text-slate-700">O'quvchi javobi</th>
                            <th class="px-3 py-2.5 text-center font-bold text-slate-700">Ball</th>
                            <th class="px-3 py-2.5 text-left font-bold text-slate-700">Izoh</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ([
                            ["1-javob","Chunki u yaxshi bola edi.","1 ball","bg-amber-100 text-amber-700","Javob savolga qisman mos, lekin dalil va aniq izoh yo'q"],
                            ["2-javob","U do'stining qiynalayotganini ko'rdi va yordam berdi.","2 ball","bg-blue-100 text-blue-700","Fikr to'g'ri, ammo matndan aniq dalil keltirilmagan"],
                            ["3-javob","Qahramon do'stining og'ir sumkasini ko'tarolmayotganini ko'rib, unga yordam berdi. Bu uning mehribon va e'tiborli bola ekanini ko'rsatadi.","3 ball","bg-emerald-100 text-emerald-700","Javob to'liq, dalil bor, xulosa aniq"],
                        ] as $row)
                            <tr>
                                <td class="px-3 py-2.5 font-semibold text-slate-600">{{ $row[0] }}</td>
                                <td class="px-3 py-2.5 text-slate-600 italic">{{ $row[1] }}</td>
                                <td class="px-3 py-2.5 text-center"><span class="rounded-full px-2 py-0.5 text-xs font-bold {{ $row[3] }}">{{ $row[2] }}</span></td>
                                <td class="px-3 py-2.5 text-slate-500">{{ $row[4] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">NAMUNAVIY TOPSHIRIQ</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-slate-300 bg-slate-100 p-4">
                    <p class="text-xs font-bold text-slate-700 mb-2">Savol:</p>
                    <p class="text-xs text-slate-700 italic bg-white rounded-lg p-3 border border-slate-200 mb-3">"Siz qahramonning qarorini to'g'ri deb hisoblaysizmi? Matndan dalil keltiring."</p>
                    <div class="overflow-hidden rounded-lg border border-slate-200 bg-white">
                        <table class="w-full text-xs">
                            <thead><tr class="bg-slate-50 border-b border-slate-200">
                                <th class="px-2 py-1.5 text-left font-bold text-slate-700">Ball</th>
                                <th class="px-2 py-1.5 text-left font-bold text-slate-700">Javob sifati</th>
                            </tr></thead>
                            <tbody class="divide-y divide-slate-100">
                                @foreach ([
                                    ['3 ball','bg-emerald-100 text-emerald-700',"Fikr aniq, dalil bor, xulosa to'liq"],
                                    ['2 ball','bg-blue-100 text-blue-700',"Fikr to'g'ri, lekin dalil yetarli emas"],
                                    ['1 ball','bg-amber-100 text-amber-700',"Fikr qisman mos, izoh yuzaki"],
                                    ['0 ball','bg-red-100 text-red-700',"Javob savolga mos emas yoki berilmagan"],
                                ] as $r)
                                    <tr>
                                        <td class="px-2 py-1.5"><span class="rounded-full px-2 py-0.5 text-[10px] font-bold {{ $r[1] }}">{{ $r[0] }}</span></td>
                                        <td class="px-2 py-1.5 text-slate-600">{{ $r[2] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="rounded-xl border border-amber-300 bg-amber-100 p-4">
                        <h4 class="text-xs font-bold text-amber-900 mb-2">O'QITUVCHI UCHUN TAVSIYA</h4>
                        <p class="text-xs text-amber-800 leading-relaxed mb-2">O'quvchining javobini baholashda faqat xatosini ko'rsatish bilan cheklanmaslik kerak. Avvalo uning javobidagi to'g'ri fikr aniqlanadi, keyin esa nimani yaxshilash zarurligi tushuntiriladi.</p>
                        <div class="rounded-lg bg-white border border-amber-200 p-2.5">
                            <p class="text-xs text-amber-800 italic">"Sen qahramon yordam berganini to'g'ri aytding. Endi javobingga matndan dalil qo'shsang, fikring yanada kuchli bo'ladi."</p>
                        </div>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                        <h4 class="text-xs font-bold text-slate-800 mb-2">SUN'IY INTELLEKTDAN FOYDALANISHDA METODIK ESLATMA</h4>
                        <p class="text-xs text-slate-600 leading-relaxed mb-2">Sun'iy intellekt o'qituvchining o'rnini bosmaydi. U faqat yordamchi vosita sifatida ishlatiladi. Yakuniy bahoni o'qituvchi o'quvchining yosh xususiyati, matn murakkabligi va dars maqsadini hisobga olgan holda belgilaydi.</p>
                        <div class="grid grid-cols-1 gap-1.5">
                            @foreach ([
                                ["Ochiq javoblarni baholashda","Javobni mezon asosida tez tahlil qiladi"],
                                ["PIRLS tipidagi topshiriqlarda","Dalil, xulosa va talqinni ajratishga yordam beradi"],
                                ["Individual ishlashda","Har bir o'quvchiga mos tavsiya ishlab chiqadi"],
                            ] as $row)
                                <div class="flex items-start gap-2 rounded-lg bg-slate-50 border border-slate-100 px-2.5 py-1.5">
                                    <svg class="mt-0.5 h-3 w-3 shrink-0 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                    <div>
                                        <span class="text-xs font-semibold text-slate-700">{{ $row[0] }}: </span>
                                        <span class="text-xs text-slate-600">{{ $row[1] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl bg-gradient-to-br from-slate-800 to-emerald-900 p-5 text-white">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="h-4 w-4 text-emerald-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                    <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
                </div>
                <ul class="space-y-1.5">
                    @foreach ([
                        "O'quvchi javobini mezon asosida baholashni o'rganadi",
                        "Ochiq javoblarni to'liq, qisman va noto'g'ri javoblarga ajratadi",
                        "Dalil, fikr va xulosani farqlaydi",
                        "Rivojlantiruvchi fikr-mulohaza berish malakasini egallaydi",
                        "Sun'iy intellekt yordamida baholash rubrikasi yaratishni o'rganadi",
                        "PIRLS tipidagi topshiriqlarda o'quvchi javobini tahlil qilish kompetensiyasini rivojlantiradi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs text-slate-200">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
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
                <p class="text-xs text-amber-900 leading-relaxed">Ushbu sahifa dissertatsiyada bo'lajak boshlang'ich sinf o'qituvchilarining diagnostik-baholash kompetensiyasini rivojlantirish vositasi sifatida asoslanadi. O'quvchi javobini mezonli baholash va sun'iy intellektdan foydalanish orqali talaba zamonaviy ta'lim texnologiyalarini amaliy dars jarayoniga moslashtirishni o'rganadi.</p>
            </div>
        </div>

        <div class="rounded-2xl border border-emerald-300 bg-emerald-50 px-5 py-3 mb-4 text-center">
            <p class="text-xs font-semibold text-emerald-800">Adaptif baholash — o'quvchining natijasini aniq ko'rsatadi, rivojlanish yo'lini belgilaydi!</p>
        </div>

        <div class="mt-4 flex justify-start">
            <a href="{{ route('metodik.show', 'pirls-topshiriq') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: PIRLS topshiriqlari
            </a>
        </div>
    </div>
</div>
@endsection
