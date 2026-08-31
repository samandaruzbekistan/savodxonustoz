@extends('layouts.app')
@section('title', "O'quvchi javobini baholash")
@section('content')
@php
    $img = fn (string $file) => asset('images/sections/metodik/javob-baholash/'.$file);
@endphp
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'javob-baholash'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-emerald-950 via-emerald-900 to-teal-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 flex items-center gap-6">
                <div class="max-w-xl flex-1">
                    <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">4</span>
                        Metodik modul · 4-bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">O'quvchi javobini baholash</h1>
                    <p class="mt-3 leading-relaxed text-emerald-100">Ochiq javoblarni mezon asosida tahlil qilish va sun'iy intellekt yordamida baholash rubrikasini yaratish sahifasi. Bo'lajak o'qituvchilarda adolatli, aniq va mezonli baholash kompetensiyasini rivojlantirish.</p>
                </div>
                <img src="{{ $img('hero_open_book.png') }}" alt="O'quvchi javobini baholash" class="pointer-events-none hidden h-36 w-36 shrink-0 object-contain md:block lg:h-44 lg:w-44">
            </div>
        </div>

        {{-- Maqsad --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="p-5 sm:p-7">
                <div class="mb-4 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center overflow-hidden rounded-xl bg-emerald-50">
                        <img src="{{ $img('assessment_clipboard.png') }}" alt="Maqsad" class="h-7 w-7 object-contain">
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">MAQSAD — Sahifa quyidagi ko'nikmalarni shakllantirishga yo'naltiriladi:</h3>
                </div>
                <div class="overflow-hidden rounded-lg border border-slate-200">
                    <table class="w-full text-xs">
                        <thead><tr class="bg-slate-50 border-b border-slate-200">
                            <th class="px-3 py-2 text-left font-bold text-slate-700">Yo'nalish</th>
                            <th class="px-3 py-2 text-left font-bold text-slate-700">Mazmuni</th>
                        </tr></thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ([
                                ["Mezonli baholash","Javobni oldindan belgilangan mezon asosida baholash"],
                                ["Dalilni aniqlash","O'quvchi javobida matnga tayangan dalil bor yoki yo'qligini ko'rish"],
                                ["Xulosani baholash","Javobdagi fikr, izoh va xulosa darajasini aniqlash"],
                                ["Rivojlantiruvchi izoh","O'quvchiga keyingi o'sish yo'lini ko'rsatadigan fikr-mulohaza berish"],
                                ["AI yordamida baholash","Matn, savol va javob asosida sun'iy intellekt orqali rubrika yaratish"],
                            ] as $row)
                                <tr>
                                    <td class="px-3 py-2 font-semibold text-slate-700">{{ $row[0] }}</td>
                                    <td class="px-3 py-2 text-slate-500">{{ $row[1] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center overflow-hidden rounded-xl bg-amber-50">
                        <img src="{{ $img('light_bulb.png') }}" alt="Nazariy izoh" class="h-7 w-7 object-contain">
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500 mb-2">O'qish savodxonligini rivojlantirishda baholash oddiy ball qo'yish jarayoni emas. Baholash — bu o'quvchining matnni qay darajada tushungani, savol mazmunini anglagani, matndan dalil keltira olgani va o'z fikrini mustaqil ifodalaganini aniqlash vositasidir.</p>
                <p class="text-xs leading-relaxed text-slate-500">Boshlang'ich sinflarda ochiq javoblarni baholash alohida ahamiyatga ega. Bunday javoblarda o'quvchi tayyor variantni tanlamaydi, balki o'z tushunchasi, munosabati va xulosasini bildiradi.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center overflow-hidden rounded-xl bg-red-50">
                        <img src="{{ $img('target.png') }}" alt="Baholash jihatlari" class="h-7 w-7 object-contain">
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">O'quvchi javobini baholashda qo'yidagi jihatlar e'tiborga olinadi:</h3>
                </div>
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
                                    <td class="px-2 py-1.5 text-slate-500">{{ $row[1] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- AI rubrika generatori --}}
        <div class="mb-8">
            <div class="mb-4 rounded-xl bg-gradient-to-r from-violet-700 to-indigo-700 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">
                <span class="mr-2">✦</span>Sun'iy intellekt yordamida baholash rubrikasi yaratish<span class="ml-2">✦</span>
            </div>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                {{-- Generator form --}}
                <div class="rounded-2xl border border-violet-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center gap-2.5 mb-4">
                        <span class="grid h-10 w-10 shrink-0 place-items-center overflow-hidden rounded-xl bg-violet-50">
                            <img src="{{ $img('online_assessment.png') }}" alt="AI rubrika generatori" class="h-7 w-7 object-contain">
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
                            <x-icon name="sparkle" class="h-4 w-4" />
                            Rubrika yaratish
                        </button>
                    </div>
                </div>

                {{-- AI natija namunasi --}}
                <div class="rounded-2xl border border-emerald-200 bg-emerald-50/50 p-5">
                    <div class="flex items-center gap-2.5 mb-4">
                        <span class="grid h-10 w-10 shrink-0 place-items-center overflow-hidden rounded-xl bg-white">
                            <img src="{{ $img('score_chart.png') }}" alt="AI natijasi namunasi" class="h-7 w-7 object-contain">
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
                                        <td class="px-3 py-2 text-slate-500">
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
                        <p class="text-xs text-slate-500 italic">"Sen qahramon do'stiga yordam berganini to'g'ri tushungansan. Endi javobingga matndan aniq dalil qo'shsang, fikring yanada kuchli bo'ladi."</p>
                    </div>
                    <div class="mt-2 rounded-lg border border-amber-200 bg-amber-50 p-3">
                        <p class="text-xs font-semibold text-amber-800 mb-1">Keyingi topshiriq:</p>
                        <p class="text-xs text-amber-700">Matndan qahramonning do'stiga yordam bergan joyini topib, javobga qo'shing.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy metodlar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                    <div class="mb-3 flex items-center gap-2">
                        <img src="{{ $img('pen.png') }}" alt="" class="h-6 w-6 shrink-0 object-contain">
                        <h4 class="text-xs font-bold text-slate-800">"0–3 ballik rubrika" metodi</h4>
                    </div>
                    <div class="space-y-1.5">
                        @foreach ([
                            ['3 ball','bg-emerald-600',"Fikr aniq, javob matnga mos, dalil mavjud, xulosa to'liq"],
                            ['2 ball','bg-blue-500',"Fikr to'g'ri, lekin dalil yoki izoh yetarli emas"],
                            ['1 ball','bg-amber-500',"Javob qisman mos, fikr yuzaki, dalil yo'q"],
                            ['0 ball','bg-red-500',"Javob savolga mos emas yoki javob berilmagan"],
                        ] as $r)
                            <div class="flex items-center gap-2 rounded-lg bg-slate-50 border border-slate-100 px-2.5 py-2">
                                <span class="inline-flex h-10 w-14 shrink-0 items-center justify-center rounded-lg {{ $r[1] }} text-white text-xs font-bold">{{ $r[0] }}</span>
                                <span class="text-xs text-slate-500">{{ $r[2] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="mb-2 flex items-center gap-2">
                            <img src="{{ $img('question_answer.png') }}" alt="" class="h-6 w-6 shrink-0 object-contain">
                            <h4 class="text-xs font-bold text-slate-800">"Dalil bor — dalil yo'q" metodi</h4>
                        </div>
                        <div class="space-y-1.5">
                            @foreach ([
                                ["Dalil bor","Javob asoslangan hisoblanadi","bg-emerald-50 border-emerald-100 text-emerald-800"],
                                ["Dalil qisman bor","Javobni kuchaytirish kerak","bg-amber-50 border-amber-100 text-amber-800"],
                                ["Dalil yo'q","O'quvchi matnga qayta murojaat qiladi","bg-red-50 border-red-100 text-red-800"],
                            ] as $row)
                                <div class="flex items-center justify-between rounded-lg border px-2.5 py-1.5 {{ $row[2] }}">
                                    <span class="text-xs font-semibold">{{ $row[0] }}</span>
                                    <span class="text-xs">{{ $row[1] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="mb-2 flex items-center gap-2">
                            <x-icon name="star" class="h-5 w-5 shrink-0 text-amber-500" />
                            <h4 class="text-xs font-bold text-slate-800">"Ikki yulduz, bir tavsiya" metodi</h4>
                        </div>
                        <ul class="space-y-1.5">
                            @foreach ([
                                ["⭐ 1-yulduz:","Sen savolga mos javob bergansan."],
                                ["⭐ 2-yulduz:","Qahramon harakatini to'g'ri tushungansan."],
                                ["💡 Tavsiya:","Javobingga matndan bitta dalil qo'shsang, fikring yanada aniq bo'ladi."],
                            ] as $row)
                                <li class="flex items-start gap-1.5 text-xs text-slate-500">
                                    <span class="font-semibold shrink-0 text-slate-700">{{ $row[0] }}</span>
                                    {{ $row[1] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="mb-2 flex items-center gap-2">
                            <img src="{{ $img('checklist_clock.png') }}" alt="" class="h-6 w-6 shrink-0 object-contain">
                            <h4 class="text-xs font-bold text-slate-800">"O'zini baholash" metodi</h4>
                        </div>
                        <div class="overflow-hidden rounded-lg border border-slate-200">
                            <table class="w-full text-xs">
                                <thead><tr class="bg-slate-50 border-b border-slate-200">
                                    <th class="px-2 py-1.5 text-left font-bold text-slate-700">Savol</th>
                                    <th class="px-2 py-1.5 text-center font-bold text-slate-700">Ha</th>
                                    <th class="px-2 py-1.5 text-center font-bold text-slate-700">Yo'q</th>
                                </tr></thead>
                                <tbody class="divide-y divide-slate-100">
                                    @foreach (["Men savolga javob berdimmi?","Javobim matnga mosmi?","Dalil keltirdimmi?","Xulosa yozdimmi?"] as $q)
                                        <tr>
                                            <td class="px-2 py-1.5 text-slate-500">{{ $q }}</td>
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
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="p-5 sm:p-7">
                <div class="mb-4 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center overflow-hidden rounded-xl bg-slate-100">
                        <img src="{{ $img('books_stack.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Darsda qo'llash tartibi</h3>
                </div>
                <div class="overflow-hidden rounded-lg border border-slate-200">
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
                                    <td class="px-4 py-2.5"><span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-50 text-emerald-700 font-bold text-[10px]">{{ $row[0] }}</span></td>
                                    <td class="px-4 py-2.5 text-slate-700">{{ $row[1] }}</td>
                                    <td class="px-4 py-2.5 text-slate-500">{{ $row[2] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Talabalar uchun mashq --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 gap-4 p-5 sm:grid-cols-[160px_1fr] sm:p-7">
                <div class="hidden items-center justify-center rounded-xl bg-emerald-50/60 p-3 sm:flex">
                    <img src="{{ $img('student_backpack.png') }}" alt="Talabalar uchun mashq" class="h-full max-h-32 w-full object-contain">
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 flex items-center">
                    <p class="text-xs font-bold text-slate-700">Savol: <span class="font-normal text-slate-500">Nima uchun qahramon do'stiga yordam berdi?</span></p>
                </div>
            </div>
            <div class="overflow-hidden border-t border-slate-200">
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
                                <td class="px-3 py-2.5 text-slate-500 italic">{{ $row[1] }}</td>
                                <td class="px-3 py-2.5 text-center"><span class="rounded-full px-2 py-0.5 text-xs font-bold {{ $row[3] }}">{{ $row[2] }}</span></td>
                                <td class="px-3 py-2.5 text-slate-500">{{ $row[4] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Namunaviy topshiriq</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                    <div class="mb-2 flex items-center gap-2">
                        <img src="{{ $img('pdf_document.png') }}" alt="" class="h-5 w-5 shrink-0 object-contain">
                        <p class="text-xs font-bold text-slate-700">Savol:</p>
                    </div>
                    <p class="text-xs text-slate-600 italic bg-white rounded-lg p-3 border border-slate-200 mb-3">"Siz qahramonning qarorini to'g'ri deb hisoblaysizmi? Matndan dalil keltiring."</p>
                    <div class="overflow-hidden rounded-lg border border-slate-200 bg-white">
                        <div class="flex items-center gap-1.5 border-b border-slate-200 bg-slate-50 px-2 py-1.5">
                            <img src="{{ $img('certificate.png') }}" alt="" class="h-4 w-4 shrink-0 object-contain">
                            <span class="text-xs font-bold text-slate-700">Baholash mezoni</span>
                        </div>
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
                                        <td class="px-2 py-1.5 text-slate-500">{{ $r[2] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="rounded-2xl border border-amber-200 bg-amber-50/50 p-4">
                        <h4 class="text-xs font-bold text-amber-900 mb-2">O'qituvchi uchun tavsiya</h4>
                        <p class="text-xs text-amber-800 leading-relaxed mb-2">O'quvchining javobini baholashda faqat xatosini ko'rsatish bilan cheklanmaslik kerak. Avvalo uning javobidagi to'g'ri fikr aniqlanadi, keyin esa nimani yaxshilash zarurligi tushuntiriladi.</p>
                        <div class="rounded-lg bg-white border border-amber-200 p-2.5">
                            <p class="text-xs text-amber-800 italic">"Sen qahramon yordam berganini to'g'ri aytding. Endi javobingga matndan dalil qo'shsang, fikring yanada kuchli bo'ladi."</p>
                        </div>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="mb-2 flex items-center gap-2">
                            <img src="{{ $img('resource_folder.png') }}" alt="" class="h-5 w-5 shrink-0 object-contain">
                            <h4 class="text-xs font-bold text-slate-800">Sun'iy intellektdan foydalanishda metodik eslatma</h4>
                        </div>
                        <p class="text-xs text-slate-500 leading-relaxed mb-2">Sun'iy intellekt o'qituvchining o'rnini bosmaydi. U faqat yordamchi vosita sifatida ishlatiladi. Yakuniy bahoni o'qituvchi o'quvchining yosh xususiyati, matn murakkabligi va dars maqsadini hisobga olgan holda belgilaydi.</p>
                        <div class="grid grid-cols-1 gap-1.5">
                            @foreach ([
                                ["Ochiq javoblarni baholashda","Javobni mezon asosida tez tahlil qiladi"],
                                ["PIRLS tipidagi topshiriqlarda","Dalil, xulosa va talqinni ajratishga yordam beradi"],
                                ["Individual ishlashda","Har bir o'quvchiga mos tavsiya ishlab chiqadi"],
                            ] as $row)
                                <div class="flex items-start gap-2 rounded-lg bg-slate-50 border border-slate-100 px-2.5 py-1.5">
                                    <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" stroke="2.5" />
                                    <div>
                                        <span class="text-xs font-semibold text-slate-700">{{ $row[0] }}: </span>
                                        <span class="text-xs text-slate-500">{{ $row[1] }}</span>
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
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-slate-800 to-emerald-900 p-5 text-white shadow-sm">
                <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-white/5"></div>
                <div class="relative z-10 mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-emerald-200">
                        <x-icon name="star" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold text-emerald-200 uppercase tracking-wide">Kutiladigan natija</p>
                </div>
                <ul class="relative z-10 space-y-1.5">
                    @foreach ([
                        "O'quvchi javobini mezon asosida baholashni o'rganadi",
                        "Ochiq javoblarni to'liq, qisman va noto'g'ri javoblarga ajratadi",
                        "Dalil, fikr va xulosani farqlaydi",
                        "Rivojlantiruvchi fikr-mulohaza berish malakasini egallaydi",
                        "Sun'iy intellekt yordamida baholash rubrikasi yaratishni o'rganadi",
                        "PIRLS tipidagi topshiriqlarda o'quvchi javobini tahlil qilish kompetensiyasini rivojlantiradi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs leading-relaxed text-emerald-50">
                            <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-300" stroke="2.5" />
                            {{ $n }}
                        </li>
                    @endforeach
                </ul>
                <img src="{{ $img('trophy.png') }}" alt="Yutuq" class="pointer-events-none absolute -right-3 -bottom-3 h-20 w-20 object-contain opacity-90">
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-amber-200 bg-amber-50/50 p-5">
                <div class="relative z-10 mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-100 text-amber-600">
                        <x-icon name="doc" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold text-amber-800 uppercase tracking-wide">Dissertatsiyadagi ilmiy ahamiyati</p>
                </div>
                <p class="relative z-10 max-w-[calc(100%-4rem)] text-xs leading-relaxed text-amber-900">Ushbu sahifa dissertatsiyada bo'lajak boshlang'ich sinf o'qituvchilarining diagnostik-baholash kompetensiyasini rivojlantirish vositasi sifatida asoslanadi. O'quvchi javobini mezonli baholash va sun'iy intellektdan foydalanish orqali talaba zamonaviy ta'lim texnologiyalarini amaliy dars jarayoniga moslashtirishni o'rganadi.</p>
                <img src="{{ $img('graduation_cap.png') }}" alt="" class="pointer-events-none absolute -right-2 -bottom-2 h-20 w-20 object-contain opacity-90">
                <img src="{{ $img('plant.png') }}" alt="" class="pointer-events-none absolute -left-2 -top-2 h-14 w-14 object-contain opacity-40">
            </div>
        </div>

        <div class="rounded-2xl border border-emerald-200 bg-emerald-50/50 px-5 py-3 mb-4 flex items-center justify-center gap-2 text-center">
            <p class="text-xs font-semibold text-emerald-800">Adaptif baholash — o'quvchining natijasini aniq ko'rsatadi, rivojlanish yo'lini belgilaydi!</p>
        </div>

        <div class="mt-4 flex justify-start">
            <a href="{{ route('metodik.show', 'pirls-topshiriq') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi: PIRLS topshiriqlari
            </a>
        </div>
    </div>
</div>
@endsection
