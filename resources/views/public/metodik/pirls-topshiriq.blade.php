@extends('layouts.app')
@section('title', "PIRLS topshiriqlarini yaratish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'pirls-topshiriq'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-blue-950 via-blue-900 to-cyan-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-xl">
                <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">3</span>
                    Metodik modul · 3-bo'lim
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">PIRLS topshiriqlarini yaratish</h1>
                <p class="mt-3 leading-relaxed text-blue-100">Bo'lajak boshlang'ich sinf o'qituvchilariga PIRLS tipidagi topshiriqlarni yaratish, savollarni o'qish maqsadlariga moslashtirish, javob kaliti va baholash mezonlarini ishlab chiqishni o'rgatish.</p>
            </div>
            <img src="{{ asset('images/metodik modul/PIRLS topshiriqlarini yaratish.png') }}" alt="PIRLS topshiriqlarini yaratish" class="pointer-events-none absolute right-6 bottom-0 hidden h-36 w-36 object-contain opacity-90 md:block lg:h-40 lg:w-40">
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                        <x-icon name="target" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Maqsad</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga PIRLS tipidagi topshiriqlarni yaratish, savollarni o'qish maqsadlariga moslashtirish, javob kaliti va baholash mezonlarini ishlab chiqishni o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-cyan-50 text-cyan-600">
                        <x-icon name="sparkle" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="mb-2 text-xs leading-relaxed text-slate-500">PIRLS topshiriqlari o'quvchining matnni qanday o'qiyotgani va qanchalik chuqur tushunayotganini aniqlashga xizmat qiladi. Bunday topshiriqlar oddiy test emas. Ular o'quvchining matndan axborot topishi, xulosa chiqarishi, g'oyani talqin qilishi va matnga baho berishini aniqlaydi.</p>
                <p class="text-xs font-semibold text-slate-700">PIRLS tipidagi topshiriqlar 2 asosiy matn turiga asoslanadi:</p>
            </div>
        </div>

        {{-- 2 matn turi + 7 element --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <img src="{{ asset('images/metodik/pirls-topshiriq/matn-turlari.png') }}" alt="O'quvchilar sinfda" class="h-36 w-full object-cover">
            <div class="grid grid-cols-1 gap-4 p-5 md:grid-cols-2">
                <div class="grid grid-cols-1 gap-3">
                    <div class="rounded-xl border border-blue-200 bg-blue-50/50 p-4">
                        <div class="mb-2 flex items-center gap-2">
                            <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">1</span>
                            <h4 class="text-xs font-bold text-blue-900">Badiiy matnlar</h4>
                        </div>
                        <p class="text-xs leading-relaxed text-blue-800">Qahramon, voqea, muammo, yechim, kayfiyat va g'oya tahlil qilinadi.</p>
                    </div>
                    <div class="rounded-xl border border-teal-200 bg-teal-50/50 p-4">
                        <div class="mb-2 flex items-center gap-2">
                            <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-teal-600 text-xs font-bold text-white">2</span>
                            <h4 class="text-xs font-bold text-teal-900">Axborot matnlari</h4>
                        </div>
                        <p class="text-xs leading-relaxed text-teal-800">Fakt, tushuncha, jarayon, sabab-oqibat, taqqoslash va umumlashtirish aniqlanadi.</p>
                    </div>
                </div>
                <div class="rounded-xl border border-slate-200 p-4">
                    <h4 class="mb-3 text-xs font-bold text-slate-700">Topshiriq yaratishda quyidagi elementlar bo'lishi kerak:</h4>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach (["Matn","Savollar","Javob variantlari yoki ochiq javob","Javob kaliti","Baholash mezoni","Ko'nikma turi","Ball"] as $el)
                            <div class="flex items-center gap-1.5 rounded-lg border border-blue-200 bg-blue-50 px-2.5 py-2 text-xs font-medium text-blue-800">
                                <x-icon name="dot" class="h-2 w-2 text-blue-500" />
                                {{ $el }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <img src="{{ asset('images/metodik/pirls-topshiriq/metodlar.png') }}" alt="Amaliy metodlar" class="h-36 w-full object-cover">
            <div class="grid grid-cols-1 gap-4 p-5 md:grid-cols-2">
                <div class="rounded-xl border border-blue-200 bg-blue-50/50 p-4">
                    <h4 class="mb-3 text-xs font-bold text-blue-900">"4 darajali savol modeli"</h4>
                    <p class="mb-3 text-xs text-blue-800">Har bir matnga kamida 4 xil savol tuziladi:</p>
                    <div class="space-y-2">
                        @foreach ([
                            ['n'=>1,'t'=>"Matndan aniq axborotni topish",'c'=>'bg-blue-100'],
                            ['n'=>2,'t'=>"Bevosita xulosa chiqarish",'c'=>'bg-cyan-100'],
                            ['n'=>3,'t'=>"G'oya va axborotni talqin qilish",'c'=>'bg-violet-100'],
                            ['n'=>4,'t'=>"Matn mazmuni yoki qahramon harakatini baholash",'c'=>'bg-emerald-100'],
                        ] as $d)
                            <div class="flex items-center gap-2 rounded-lg px-2.5 py-2 {{ $d['c'] }}">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-slate-800 text-[10px] font-bold text-white">{{ $d['n'] }}</span>
                                <span class="text-xs font-medium text-slate-700">{{ $d['t'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="rounded-xl border border-violet-200 bg-violet-50/50 p-4">
                        <h4 class="mb-1 text-xs font-bold text-violet-900">"Savol + dalil" metodi</h4>
                        <p class="text-xs leading-relaxed text-violet-800">O'quvchi javob bergandan keyin "Buni qaysi gapdan bildingiz?" savoli beriladi. O'quvchi matndan aniq dalil keltiradi.</p>
                    </div>
                    <div class="rounded-xl border border-teal-200 bg-teal-50/50 p-4">
                        <h4 class="mb-1 text-xs font-bold text-teal-900">"Ochiq javob" metodi</h4>
                        <p class="text-xs leading-relaxed text-teal-800">O'quvchi bir yoki ikki gap bilan o'z fikrini yozadi. Bu o'quvchining haqiqiy tushunish darajasini ko'rsatadi.</p>
                    </div>
                    <div class="rounded-xl border border-emerald-200 bg-emerald-50/50 p-4">
                        <h4 class="mb-1 text-xs font-bold text-emerald-900">"Baholash rubrikasi" metodi</h4>
                        <p class="text-xs leading-relaxed text-emerald-800">O'quvchi javobi 0, 1, 2 yoki 3 ball asosida belgilangan mezon bo'yicha baholanadi.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Darsda qo'llash + O'qituvchi tavsiya --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-slate-100 text-slate-600">
                        <x-icon name="clipboard" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Darsda qo'llash tartibi</h3>
                </div>
                <ol class="space-y-2">
                    @foreach ([
                        "O'qituvchi yoki talaba matn tanlaydi",
                        "Matn turi aniqlanadi",
                        "Matnning asosiy g'oyasi belgilanadi",
                        "Savollar 4 daraja bo'yicha tuziladi",
                        "Har bir savol uchun javob kaliti yoziladi",
                        "Ochiq savollar uchun baholash mezoni belgilanadi",
                        "Topshiriq o'quvchilarga beriladi",
                        "Javoblar tahlil qilinadi",
                        "Qaysi ko'nikma sust ekani aniqlanadi",
                    ] as $i => $step)
                        <li class="flex items-start gap-2 text-xs text-slate-500">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-50 text-blue-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $step }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="flex flex-col gap-3">
                <div class="rounded-2xl border border-cyan-200 bg-cyan-50/50 p-4">
                    <h3 class="mb-2 text-sm font-bold text-cyan-900">Talabalar uchun mashq</h3>
                    <ol class="space-y-1.5">
                        @foreach ([
                            "4-sinf o'quvchilari uchun 250–300 so'zli matn tanlang",
                            "Matn turini aniqlang",
                            "8 ta savol tuzing: 2 ta aniq, 2 ta xulosa, 2 ta talqin, 2 ta baholash",
                            "Har bir savolga javob kaliti yozing",
                            "2 ta savol uchun 0–3 ballik rubrika yarating",
                            "Topshiriqning qaysi o'qish ko'nikmasini rivojlantirishini izohlang",
                        ] as $i => $item)
                            <li class="flex items-start gap-1.5 text-xs text-cyan-800">
                                <span class="inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-cyan-600 text-[9px] font-bold text-white">{{ $i+1 }}</span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ol>
                </div>
                <div class="flex-1 overflow-hidden rounded-2xl border border-amber-200 bg-white shadow-sm">
                    <div class="grid h-full grid-cols-[96px_1fr]">
                        <img src="{{ asset('images/metodik/pirls-topshiriq/tavsiya.jpg') }}" alt="O'qituvchi uchun tavsiya" class="h-full w-full object-cover">
                        <div class="bg-amber-50/50 p-4">
                            <h3 class="mb-2 text-sm font-bold text-amber-900">O'qituvchi uchun tavsiya</h3>
                            <p class="text-xs leading-relaxed text-amber-800">PIRLS topshiriqlarini yaratishda savollarni haddan tashqari murakkablashtirib yubormang. Boshlang'ich sinf o'quvchisi fikrlashi kerak, lekin savolni tushunmay qolmasligi lozim. <strong class="text-amber-900">Savol matn mazmuniga tayangan, aniq, yoshga mos va baholash mezoni bilan ta'minlangan bo'lishi kerak.</strong></p>
                        </div>
                    </div>
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
            <div class="grid grid-cols-1 gap-4 md:grid-cols-[140px_1fr_1fr]">
                <div class="hidden items-center justify-center overflow-hidden rounded-2xl border border-slate-200 bg-sky-50 md:flex">
                    <img src="{{ asset('images/metodik/pirls-topshiriq/namuna.png') }}" alt="Laylak — Bahromning hikoyasi" class="h-24 w-24 object-contain">
                </div>
                <div>
                    <div class="mb-3 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <p class="mb-2 text-xs font-bold text-slate-700">Matn parchasi:</p>
                        <p class="rounded-lg border border-slate-200 bg-white p-3 text-xs italic leading-relaxed text-slate-600">"Bahrom maktab kutubxonasidan qushlar haqida kitob oldi. U kitobdan laylaklar uzoq masofaga uchishini, ular bahorda yana o'z uyalariga qaytishini bildi. Ertasi kuni Bahrom hovlidagi daraxtga qarab, unda qushlar uchun kichik uya yasashni o'yladi."</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <p class="mb-2 text-xs font-bold text-slate-700">Baholash mezoni:</p>
                        <div class="overflow-hidden rounded-lg border border-slate-200">
                            <table class="w-full text-xs">
                                <thead><tr class="border-b border-slate-200 bg-slate-100">
                                    <th class="px-2 py-2 text-left font-bold text-slate-700">Ball</th>
                                    <th class="px-2 py-2 text-left font-bold text-slate-700">Tavsif</th>
                                </tr></thead>
                                <tbody class="divide-y divide-slate-100">
                                    @foreach ([
                                        ['3 ball','bg-emerald-100 text-emerald-700',"O'quvchi fikrini to'liq bildiradi, matndan dalil keltiradi, xulosa chiqaradi."],
                                        ['2 ball','bg-blue-100 text-blue-700',"Javob to'g'ri, lekin dalil yoki izoh yetarli emas."],
                                        ['1 ball','bg-amber-100 text-amber-700',"Javob qisman to'g'ri, fikr yuzaki."],
                                        ['0 ball','bg-red-100 text-red-700',"Javob noto'g'ri yoki matnga aloqador emas."],
                                    ] as $r)
                                        <tr>
                                            <td class="px-2 py-2"><span class="rounded-full px-2 py-0.5 text-[10px] font-bold {{ $r[1] }}">{{ $r[0] }}</span></td>
                                            <td class="px-2 py-2 text-slate-500">{{ $r[2] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl border border-blue-200 bg-blue-50/50 p-4">
                    <p class="mb-3 text-xs font-bold text-blue-900">PIRLS tipidagi savollar:</p>
                    <ol class="space-y-2">
                        @foreach ([
                            "Bahrom kutubxonadan qanday kitob oldi?",
                            "Bahrom laylaklar haqida nimalarni bildi?",
                            "Bahrom nima uchun qushlar uchun uya yasashni o'yladi?",
                            "Bahromning bu harakati uning tabiatga munosabatini qanday ko'rsatadi?",
                            "Siz Bahromning ishini foydali deb hisoblaysizmi? Javobingizni asoslang.",
                        ] as $i => $q)
                            <li class="flex items-start gap-2 text-xs text-blue-800">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-600 text-[10px] font-bold text-white">{{ $i+1 }}</span>
                                {{ $q }}
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-blue-950 via-blue-900 to-cyan-900 p-5 text-white shadow-sm">
                <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-white/5"></div>
                <div class="relative z-10 mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-blue-200">
                        <x-icon name="star" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-blue-200">Kutiladigan natija</p>
                </div>
                <ul class="relative z-10 space-y-2">
                    @foreach ([
                        "Talaba PIRLS tipidagi topshiriqlarni mustaqil ishlab chiqadi",
                        "Matn asosida savollarni fikrlash darajalari bo'yicha tuzadi",
                        "Javob kaliti va baholash mezonlarini yaratadi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs leading-relaxed text-blue-50">
                            <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-300" stroke="2.5" />
                            {{ $n }}
                        </li>
                    @endforeach
                </ul>
                <img src="{{ asset('images/metodik/pirls-topshiriq/natija.png') }}" alt="Yutuq" class="pointer-events-none absolute -right-3 -bottom-3 h-20 w-20 object-contain opacity-90">
            </div>
            <div class="rounded-2xl border border-amber-200 bg-amber-50/50 p-5">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-100 text-amber-600">
                        <x-icon name="doc" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-amber-800">Dissertatsiyadagi ilmiy ahamiyati</p>
                </div>
                <p class="text-xs leading-relaxed text-amber-900">Bu sahifa dissertatsiyada bo'lajak o'qituvchilarning diagnostik-baholash va metodik loyihalash kompetensiyasini rivojlantirish vositasi sifatida asoslanadi. PIRLS topshiriqlarini yaratish orqali talaba xalqaro baholash mezonlarini amaliy dars jarayoniga moslashtirishni o'rganadi.</p>
            </div>
        </div>

        {{-- Nav buttons --}}
        <div class="mt-6 flex justify-between">
            <a href="{{ route('metodik.show', 'savol-tuzish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi: Savol tuzish
            </a>
            <a href="{{ route('metodik.show', 'javob-baholash') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-blue-700">
                Keyingi: Javobni baholash
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
