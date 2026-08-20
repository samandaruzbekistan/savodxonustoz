@extends('layouts.app')
@section('title', 'Matn bilan ishlash metodikasi')
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'matn-ishlash'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-950 via-indigo-900 to-violet-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 flex items-center gap-6">
                <div class="max-w-xl flex-1">
                    <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">1</span>
                        Metodik modul · 1-bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Matn bilan ishlash metodikasi</h1>
                    <p class="mt-3 leading-relaxed text-indigo-100">Bo'lajak boshlang'ich sinf o'qituvchilariga matnni to'g'ri tanlash, metodik tahlil qilish, o'quvchining yosh xususiyatiga moslashtirish va dars jarayonida samarali qo'llash yo'llarini o'rgatish.</p>
                </div>
                <div class="hidden shrink-0 items-center justify-center rounded-2xl bg-white/95 p-4 shadow-xl md:flex">
                    <img src="{{ asset('images/'.rawurlencode('metodik modul').'/'.rawurlencode('Matn bilan ishlash metodikasi.png')) }}" alt="" class="h-32 w-44 object-contain">
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
                <p class="text-xs leading-relaxed text-slate-500">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga matnni to'g'ri tanlash, uni metodik jihatdan tahlil qilish, o'quvchining yosh xususiyatiga moslashtirish va dars jarayonida samarali qo'llash yo'llarini o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-violet-50 text-violet-600">
                        <x-icon name="sparkle" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="mb-2 text-xs leading-relaxed text-slate-500">Matn bilan ishlash o'qish savodxonligini rivojlantirishning markaziy yo'nalishidir. O'quvchi matn orqali yangi bilim oladi, tasavvuri kengayadi, so'z boyligi ortadi, fikrlash va xulosa chiqarish ko'nikmalari shakllanadi.</p>
                <p class="text-xs leading-relaxed text-slate-500">Boshlang'ich ta'limda matn bilan ishlash faqat "o'qing va qayta hikoya qiling" shaklida qolib ketmasligi kerak. Zamonaviy metodik yondashuvda matn o'quvchini fikrlashga, savol berishga, izlanishga, dalil topishga va o'z munosabatini bildirishga undaydigan didaktik vosita sifatida qaraladi.</p>
            </div>
        </div>

        {{-- 3 bosqich --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Matn bilan ishlash quyidagi uch bosqichda tashkil etiladi</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"O'qishdan oldingi bosqich",'items'=>["O'quvchining mavzuga qiziqishini uyg'otish","Sarlavha asosida taxmin qilish","Yangi so'zlarni tushuntirish","Oldingi bilimlarni faollashtirish"],'tint'=>'bg-indigo-50 text-indigo-600'],
                    ['n'=>2,'title'=>"O'qish jarayonidagi bosqich",'items'=>["Matnni tushunib o'qish","Muhim joylarni belgilash","Savollarga javob izlash","Noma'lum so'zlarni aniqlash"],'tint'=>'bg-blue-50 text-blue-600'],
                    ['n'=>3,'title'=>"O'qishdan keyingi bosqich",'items'=>["Xulosa chiqarish","Savollarga javob berish","Munosabat bildirish","Ijodiy topshiriq bajarish"],'tint'=>'bg-emerald-50 text-emerald-600'],
                ] as $s)
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <div class="mb-3 flex items-center gap-2.5">
                            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg text-sm font-bold {{ $s['tint'] }}">{{ $s['n'] }}</span>
                            <h4 class="text-xs font-bold text-slate-800">{{ $s['title'] }}</h4>
                        </div>
                        <ul class="space-y-1.5">
                            @foreach ($s['items'] as $item)
                                <li class="flex items-start gap-1.5 text-xs text-slate-500">
                                    <x-icon name="dot" class="mt-1 h-2.5 w-2.5 shrink-0 text-slate-300" />
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy metodlar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['title'=>'"Sarlavhadan taxmin qil"','desc'=>"O'quvchilar matnni o'qishdan oldin sarlavhaga qarab matn mazmunini taxmin qiladilar. Bu metod o'quvchilarning oldingi bilimlarini faollashtiradi.",'tint'=>'bg-indigo-50 text-indigo-600'],
                    ['title'=>'"Matn xaritasi"','desc'=>"O'quvchilar matndagi qahramonlar, voqealar, joy, vaqt, muammo va yechimni jadval yoki sxema orqali ko'rsatadilar.",'tint'=>'bg-blue-50 text-blue-600'],
                    ['title'=>'"Dalil top"','desc'=>"O'quvchi o'z javobini matndan topilgan gap yoki ibora bilan asoslaydi. Bu tanqidiy o'qish ko'nikmalarini shakllantiradi.",'tint'=>'bg-violet-50 text-violet-600'],
                    ['title'=>'"To\'xtab o\'qi"','desc'=>"Matn qismlarga bo'linadi. Har bir qismdan keyin o'quvchilar qisqa savollarga javob beradilar va keyingi qismni bashorat qiladilar.",'tint'=>'bg-teal-50 text-teal-600'],
                    ['title'=>'"Besh barmoq xulosasi"','desc'=>"O'quvchi matn bo'yicha 5 jihatni aytadi: qahramon, voqea, muammo, xulosa, mening fikrim. Bu tuzilgan fikrlashni o'rgatadi.",'tint'=>'bg-emerald-50 text-emerald-600'],
                ] as $m)
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="mb-2 flex items-center gap-2.5">
                            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg {{ $m['tint'] }}">
                                <x-icon name="check" class="h-4 w-4" stroke="2.5" />
                            </span>
                            <h4 class="text-xs font-bold text-slate-800">{{ $m['title'] }}</h4>
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
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-slate-100 text-slate-600">
                        <x-icon name="clipboard" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Darsda qo'llash tartibi</h3>
                </div>
                <ol class="space-y-2">
                    @foreach ([
                        "O'qituvchi matnni tanlaydi",
                        "Matnning mavzusi, hajmi, tili va mazmuni o'quvchi yoshiga mosligi tekshiriladi",
                        "Matndan oldin savollar tuziladi",
                        "Yangi so'zlar ajratiladi",
                        "Matn o'qiladi: o'qituvchi o'qishi, o'quvchi mustaqil o'qishi yoki audio orqali tinglash mumkin",
                        "Matn asosida savollar beriladi",
                        "O'quvchilar javobini matndan dalil bilan asoslaydilar",
                        "Yakunda xulosa chiqariladi yoki ijodiy topshiriq bajariladi",
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
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                        <x-icon name="cap" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Talabalar uchun mashq</h3>
                </div>
                <p class="mb-3 text-xs text-slate-500">Quyidagi topshiriq bo'lajak o'qituvchilar uchun beriladi:</p>
                <ol class="space-y-1.5">
                    @foreach ([
                        "2–4-sinf o'quvchilari uchun mos kichik matn tanlang",
                        "Matn turini aniqlang: badiiy, axborot, ilmiy-ommabop yoki hayotiy matn",
                        "Matndan 5 ta yangi so'z ajrating",
                        "O'qishdan oldin 3 ta savol tuzing",
                        "O'qish jarayonida beriladigan 3 ta savol tuzing",
                        "O'qishdan keyingi 3 ta savol tuzing",
                        "Matn asosida bitta ijodiy topshiriq ishlab chiqing",
                    ] as $i => $item)
                        <li class="flex items-start gap-1.5 text-xs text-slate-500">
                            <span class="inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[9px]">{{ $i+1 }}</span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-8 rounded-2xl border border-amber-200 bg-amber-50 p-5">
            <div class="mb-3 flex items-center gap-2.5">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-100 text-amber-600">
                    <x-icon name="bulb" class="h-4.5 w-4.5" />
                </span>
                <h3 class="text-sm font-bold text-amber-900">O'qituvchi uchun tavsiya</h3>
            </div>
            <p class="text-xs leading-relaxed text-amber-800">Matn tanlashda faqat mazmuniga emas, uning o'quvchini fikrlashga undash imkoniyatiga ham e'tibor bering. Juda sodda matn o'quvchini rivojlantirmaydi, haddan tashqari murakkab matn esa uni charchatadi. <strong>Eng maqbul matn — o'quvchi uchun qiziqarli, tushunarli, lekin o'ylashga majbur qiladigan matndir.</strong></p>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Namunaviy topshiriq</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="mb-2 text-xs font-bold text-slate-700">Matn parchasi:</p>
                    <p class="rounded-xl border-l-4 border-indigo-400 bg-slate-50 p-3 text-xs italic leading-relaxed text-slate-600">"Anvar har kuni maktabga ketayotib yo'l chetidagi kichik daraxtni ko'rardi. Bir kuni daraxtning shoxi sinib qolganini payqadi. U darsdan keyin daraxt yoniga kelib, shoxini bog'lab qo'ydi va atrofiga suv quydi."</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="mb-3 text-xs font-bold text-slate-700">Topshiriqlar:</p>
                    <ol class="space-y-2">
                        @foreach ([
                            "Anvar nimani payqadi?",
                            "U daraxtga qanday yordam berdi?",
                            "Anvarning bu ishi uning qanday bola ekanini ko'rsatadi?",
                            "Siz Anvar o'rnida bo'lsangiz nima qilardingiz?",
                            "Matndan tabiatga mehr g'oyasini bildiruvchi gapni toping.",
                        ] as $i => $q)
                            <li class="flex items-start gap-1.5 text-xs text-slate-600">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-50 text-indigo-600 font-bold text-[10px]">{{ $i+1 }}</span>
                                {{ $q }}
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-indigo-950 via-indigo-900 to-violet-900 p-5 text-white shadow-sm">
                <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-white/5"></div>
                <div class="relative mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-indigo-200">
                        <x-icon name="target" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-indigo-200">Kutiladigan natija</p>
                </div>
                <ul class="relative space-y-2">
                    @foreach ([
                        "Matnni o'qish savodxonligini rivojlantirish vositasi sifatida tanlay oladi",
                        "Matn bilan ishlash bosqichlarini rejalashtiradi",
                        "O'quvchilarni matnni tushunish, xulosa chiqarish va munosabat bildirishga yo'naltira oladi",
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
                        <x-icon name="star" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-amber-800">Dissertatsiyadagi ilmiy ahamiyati</p>
                </div>
                <p class="text-xs leading-relaxed text-amber-900">Mazkur sahifa dissertatsiyada bo'lajak boshlang'ich sinf o'qituvchilarining amaliy-metodik tayyorgarligini rivojlantirish vositasi sifatida asoslanadi. Matn bilan ishlash metodikasi talabalarda o'qish savodxonligini shakllantirishga xizmat qiluvchi dars vaziyatlarini loyihalash, matnni didaktik tahlil qilish va o'quvchi faoliyatini boshqarish ko'nikmalarini rivojlantiradi.</p>
            </div>
        </div>

        <div class="mt-4 flex justify-end">
            <a href="{{ route('metodik.show', 'savol-tuzish') }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700 transition-colors">
                Keyingi: Savol tuzish metodikasi
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
