@extends('layouts.app')
@section('title', 'Matn bilan ishlash metodikasi')
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'matn-ishlash'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-indigo-100 text-indigo-700">1</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Metodik modul • 1-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Matn bilan ishlash metodikasi</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Bo'lajak boshlang'ich sinf o'qituvchilariga matnni to'g'ri tanlash, metodik tahlil qilish, o'quvchining yosh xususiyatiga moslashtirish va dars jarayonida samarali qo'llash yo'llarini o'rgatish.</p>
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
                <p class="text-xs text-indigo-800 leading-relaxed">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga matnni to'g'ri tanlash, uni metodik jihatdan tahlil qilish, o'quvchining yosh xususiyatiga moslashtirish va dars jarayonida samarali qo'llash yo'llarini o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-xl border border-violet-300 bg-violet-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-violet-800 leading-relaxed mb-2">Matn bilan ishlash o'qish savodxonligini rivojlantirishning markaziy yo'nalishidir. O'quvchi matn orqali yangi bilim oladi, tasavvuri kengayadi, so'z boyligi ortadi, fikrlash va xulosa chiqarish ko'nikmalari shakllanadi.</p>
                <p class="text-xs text-violet-800 leading-relaxed">Boshlang'ich ta'limda matn bilan ishlash faqat "o'qing va qayta hikoya qiling" shaklida qolib ketmasligi kerak. Zamonaviy metodik yondashuvda matn o'quvchini fikrlashga, savol berishga, izlanishga, dalil topishga va o'z munosabatini bildirishga undaydigan didaktik vosita sifatida qaraladi.</p>
            </div>
        </div>

        {{-- 3 bosqich --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">MATN BILAN ISHLASH QUYIDAGI UCH BOSQICHDA TASHKIL ETILADI</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"O'QISHDAN OLDINGI BOSQICH",'items'=>["O'quvchining mavzuga qiziqishini uyg'otish","Sarlavha asosida taxmin qilish","Yangi so'zlarni tushuntirish","Oldingi bilimlarni faollashtirish"],'color'=>'border-indigo-300 bg-indigo-100 text-indigo-900','ic'=>'bg-indigo-600'],
                    ['n'=>2,'title'=>"O'QISH JARAYONIDAGI BOSQICH",'items'=>["Matnni tushunib o'qish","Muhim joylarni belgilash","Savollarga javob izlash","Noma'lum so'zlarni aniqlash"],'color'=>'border-blue-300 bg-blue-100 text-blue-900','ic'=>'bg-blue-600'],
                    ['n'=>3,'title'=>"O'QISHDAN KEYINGI BOSQICH",'items'=>["Xulosa chiqarish","Savollarga javob berish","Munosabat bildirish","Ijodiy topshiriq bajarish"],'color'=>'border-emerald-300 bg-emerald-100 text-emerald-900','ic'=>'bg-emerald-600'],
                ] as $s)
                    <div class="rounded-xl border p-4 {{ $s['color'] }}">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="grid h-7 w-7 place-items-center rounded-full {{ $s['ic'] }} text-white text-sm font-bold shrink-0">{{ $s['n'] }}</span>
                            <h4 class="text-xs font-bold">{{ $s['title'] }}</h4>
                        </div>
                        <ul class="space-y-1.5">
                            @foreach ($s['items'] as $item)
                                <li class="flex items-start gap-1.5 text-xs">
                                    <svg class="mt-0.5 h-3 w-3 shrink-0 opacity-60" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY METODLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['title'=>'"SARLAVHADAN TAXMIN QIL"','desc'=>"O'quvchilar matnni o'qishdan oldin sarlavhaga qarab matn mazmunini taxmin qiladilar. Bu metod o'quvchilarning oldingi bilimlarini faollashtiradi.",'color'=>'border-indigo-300 bg-indigo-100 text-indigo-900','bc'=>'bg-indigo-600'],
                    ['title'=>'"MATN XARITASI"','desc'=>"O'quvchilar matndagi qahramonlar, voqealar, joy, vaqt, muammo va yechimni jadval yoki sxema orqali ko'rsatadilar.",'color'=>'border-blue-300 bg-blue-100 text-blue-900','bc'=>'bg-blue-600'],
                    ['title'=>'"DALIL TOP"','desc'=>"O'quvchi o'z javobini matndan topilgan gap yoki ibora bilan asoslaydi. Bu tanqidiy o'qish ko'nikmalarini shakllantiradi.",'color'=>'border-violet-300 bg-violet-100 text-violet-900','bc'=>'bg-violet-600'],
                    ['title'=>'"TO\'XTAB O\'QI"','desc'=>"Matn qismlarga bo'linadi. Har bir qismdan keyin o'quvchilar qisqa savollarga javob beradilar va keyingi qismni bashorat qiladilar.",'color'=>'border-teal-300 bg-teal-100 text-teal-900','bc'=>'bg-teal-600'],
                    ['title'=>'"BESH BARMOQ XULOSASI"','desc'=>"O'quvchi matn bo'yicha 5 jihatni aytadi: qahramon, voqea, muammo, xulosa, mening fikrim. Bu tuzilgan fikrlashni o'rgatadi.",'color'=>'border-emerald-300 bg-emerald-100 text-emerald-900','bc'=>'bg-emerald-600'],
                ] as $m)
                    <div class="rounded-xl border p-4 {{ $m['color'] }}">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="grid h-6 w-6 place-items-center rounded-md {{ $m['bc'] }} shrink-0">
                                <svg class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            </span>
                            <h4 class="text-xs font-bold">{{ $m['title'] }}</h4>
                        </div>
                        <p class="text-xs leading-relaxed">{{ $m['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Darsda qo'llash + Talabalar uchun mashq --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-sm font-bold text-slate-800 mb-3 flex items-center gap-2">
                    <span class="grid h-6 w-6 place-items-center rounded-md bg-slate-800">
                        <svg class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                    </span>
                    DARSDA QO'LLASH TARTIBI
                </h3>
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
                        <li class="flex items-start gap-2 text-xs text-slate-700">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-100 text-indigo-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $step }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="rounded-xl border border-blue-300 bg-blue-100 p-5">
                <h3 class="text-sm font-bold text-blue-900 mb-3 flex items-center gap-2">
                    <span class="grid h-6 w-6 place-items-center rounded-md bg-blue-600">
                        <svg class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                    </span>
                    TALABALAR UCHUN MASHQ
                </h3>
                <p class="text-xs text-blue-800 mb-3">Quyidagi topshiriq bo'lajak o'qituvchilar uchun beriladi:</p>
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
                        <li class="flex items-start gap-1.5 text-xs text-blue-800">
                            <span class="inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-blue-600 text-white font-bold text-[9px]">{{ $i+1 }}</span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-6">
            <div class="rounded-xl border border-amber-300 bg-amber-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-amber-900">O'QITUVCHI UCHUN TAVSIYA</h3>
                </div>
                <p class="text-xs text-amber-800 leading-relaxed">Matn tanlashda faqat mazmuniga emas, uning o'quvchini fikrlashga undash imkoniyatiga ham e'tibor bering. Juda sodda matn o'quvchini rivojlantirmaydi, haddan tashqari murakkab matn esa uni charchatadi. <strong>Eng maqbul matn — o'quvchi uchun qiziqarli, tushunarli, lekin o'ylashga majbur qiladigan matndir.</strong></p>
            </div>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">NAMUNAVIY TOPSHIRIQ</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-slate-300 bg-slate-100 p-4">
                    <p class="text-xs font-bold text-slate-700 mb-2">Matn parchasi:</p>
                    <p class="text-xs text-slate-700 leading-relaxed italic bg-white rounded-lg p-3 border border-slate-200">"Anvar har kuni maktabga ketayotib yo'l chetidagi kichik daraxtni ko'rardi. Bir kuni daraxtning shoxi sinib qolganini payqadi. U darsdan keyin daraxt yoniga kelib, shoxini bog'lab qo'ydi va atrofiga suv quydi."</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                    <p class="text-xs font-bold text-slate-700 mb-3">Topshiriqlar:</p>
                    <ol class="space-y-2">
                        @foreach ([
                            "Anvar nimani payqadi?",
                            "U daraxtga qanday yordam berdi?",
                            "Anvarning bu ishi uning qanday bola ekanini ko'rsatadi?",
                            "Siz Anvar o'rnida bo'lsangiz nima qilardingiz?",
                            "Matndan tabiatga mehr g'oyasini bildiruvchi gapni toping.",
                        ] as $i => $q)
                            <li class="flex items-start gap-1.5 text-xs text-slate-700">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-100 text-indigo-700 font-bold text-[10px]">{{ $i+1 }}</span>
                                {{ $q }}
                            </li>
                        @endforeach
                    </ol>
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
                        "Matnni o'qish savodxonligini rivojlantirish vositasi sifatida tanlay oladi",
                        "Matn bilan ishlash bosqichlarini rejalashtiradi",
                        "O'quvchilarni matnni tushunish, xulosa chiqarish va munosabat bildirishga yo'naltira oladi",
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
                <p class="text-xs text-amber-900 leading-relaxed">Mazkur sahifa dissertatsiyada bo'lajak boshlang'ich sinf o'qituvchilarining amaliy-metodik tayyorgarligini rivojlantirish vositasi sifatida asoslanadi. Matn bilan ishlash metodikasi talabalarda o'qish savodxonligini shakllantirishga xizmat qiluvchi dars vaziyatlarini loyihalash, matnni didaktik tahlil qilish va o'quvchi faoliyatini boshqarish ko'nikmalarini rivojlantiradi.</p>
            </div>
        </div>

        <div class="mt-4 flex justify-end">
            <a href="{{ route('metodik.show', 'savol-tuzish') }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700 transition-colors">
                Keyingi: Savol tuzish metodikasi
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
