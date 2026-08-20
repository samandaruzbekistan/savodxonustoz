@extends('layouts.app')
@section('title', 'Savol tuzish metodikasi')
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'savol-tuzish'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-violet-950 via-violet-900 to-pink-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-xl">
                <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">2</span>
                    Metodik modul · 2-bo'lim
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Savol tuzish metodikasi</h1>
                <p class="mt-3 leading-relaxed text-violet-100">Matn asosida turli darajadagi savollar tuzishni, savol orqali o'quvchini fikrlashga yo'naltirishni va o'qish savodxonligini baholashga xizmat qiladigan topshiriqlar yaratishni o'rgatish.</p>
            </div>
            <img src="{{ asset('images/metodik modul/Savol tuzish metodikasi.png') }}" alt="Savol tuzish metodikasi" class="pointer-events-none absolute right-6 bottom-0 hidden h-36 w-36 object-contain opacity-90 md:block lg:h-40 lg:w-40">
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-violet-50 text-violet-600">
                        <x-icon name="target" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Maqsad</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga matn asosida turli darajadagi savollar tuzishni, savol orqali o'quvchini fikrlashga yo'naltirishni va o'qish savodxonligini baholashga xizmat qiladigan topshiriqlar yaratishni o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-pink-50 text-pink-600">
                        <x-icon name="sparkle" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="mb-2 text-xs leading-relaxed text-slate-500">Savol — dars jarayonining oddiy yordamchi vositasi emas, balki <strong class="text-slate-700">o'quvchining fikrlashini harakatga keltiruvchi metodik mexanizmdir.</strong> To'g'ri tuzilgan savol o'quvchini matnga qaytaradi, dalil izlashga undaydi, sabab-oqibatni tushuntirishga majbur qiladi va mustaqil xulosa chiqarishga yo'naltiradi.</p>
                <p class="text-xs leading-relaxed text-slate-500">Boshlang'ich sinfda savollar quyidagi darajalarda tuzilishi maqsadga muvofiq.</p>
            </div>
        </div>

        {{-- 5 savol darajasi --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[220px_1fr]">
                <div class="hidden items-center justify-center bg-violet-50 p-4 md:flex">
                    <img src="{{ asset('images/metodik/savol-tuzish/darajalar.jpg') }}" alt="5 ta savol darajasi" class="h-full max-h-40 w-full object-contain">
                </div>
                <div class="p-5">
                    <h2 class="mb-4 text-xs font-bold uppercase tracking-wide text-slate-400">5 ta savol darajasi</h2>
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ([
                            ['n'=>1,'title'=>"Aniq javobli savollar",'desc'=>"Javob matnda ochiq berilgan bo'ladi. O'quvchi matnni sinchiklab o'qib to'g'ri javobni topadi.",'tint'=>'bg-indigo-50 text-indigo-600'],
                            ['n'=>2,'title'=>"Tushunishga oid savollar",'desc'=>"O'quvchi matn mazmunini izohlaydi va o'z so'zlari bilan tushuntiradi.",'tint'=>'bg-blue-50 text-blue-600'],
                            ['n'=>3,'title'=>"Xulosa chiqarishga oid savollar",'desc'=>"Javob matnda bevosita aytilmaydi, lekin mazmundan kelib chiqadi.",'tint'=>'bg-violet-50 text-violet-600'],
                            ['n'=>4,'title'=>"Talqin qilish savollari",'desc'=>"O'quvchi muallif fikri, qahramon xarakteri yoki asosiy g'oyani izohlaydi.",'tint'=>'bg-pink-50 text-pink-600'],
                            ['n'=>5,'title'=>"Baholash savollari",'desc'=>"O'quvchi o'z munosabatini bildiradi va javobini aniq asoslaydi.",'tint'=>'bg-rose-50 text-rose-600'],
                        ] as $t)
                            <div class="rounded-xl border border-slate-200 p-4 transition hover:border-violet-200 hover:bg-violet-50/50">
                                <div class="mb-2 flex items-center gap-2">
                                    <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full text-xs font-bold {{ $t['tint'] }}">{{ $t['n'] }}</span>
                                    <h4 class="text-xs font-bold text-slate-800">{{ $t['title'] }}</h4>
                                </div>
                                <p class="text-xs leading-relaxed text-slate-500">{{ $t['desc'] }}</p>
                            </div>
                        @endforeach
                        <div class="rounded-xl border border-emerald-200 bg-emerald-50/50 p-4">
                            <h4 class="mb-2 text-xs font-bold text-emerald-900">Yaxshi savolning belgilari</h4>
                            <ul class="space-y-1.5">
                                @foreach (["Aniq va tushunarli bo'ladi","Matn mazmuni bilan bog'liq bo'ladi","O'quvchini fikrlashga undaydi","Bitta maqsadga xizmat qiladi","Javobni dalil bilan asoslash imkonini beradi"] as $b)
                                    <li class="flex items-start gap-1.5 text-xs text-emerald-800">
                                        <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" stroke="2.5" />
                                        {{ $b }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <img src="{{ asset('images/metodik/savol-tuzish/metodlar.jpg') }}" alt="Amaliy metodlar" class="h-36 w-full object-cover">
            <div class="p-5">
                <h2 class="mb-4 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy metodlar</h2>
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['title'=>'"Kim? Nima? Qachon? Qayerda?"','desc'=>"Bu savollar matndan aniq axborotni topishga yordam beradi. O'quvchi matnni sinchklab o'qib, faktlarni aniqlab, ularni to'g'ri tartibda bayon qilishni o'rganadi.",'tint'=>'bg-blue-50 text-blue-600'],
                        ['title'=>'"Nega? Qanday qilib?"','desc'=>"Bu savollar sabab-oqibatni tushunishga xizmat qiladi. O'quvchi savolga asoslangan mulohaza bildiradi va fikrlarini asoslaydi.",'tint'=>'bg-violet-50 text-violet-600'],
                        ['title'=>'"Qanday bildingiz?"','desc'=>"Bu savol o'quvchini javobini matndan dalil bilan asoslashga o'rgatadi. O'quvchi matndan aniq gap yoki iborani topib keltiradi.",'tint'=>'bg-pink-50 text-pink-600'],
                        ['title'=>'"Siz nima deb o\'ylaysiz?"','desc'=>"Bu savol o'quvchining shaxsiy munosabatini aniqlaydi. Savol ijodiy va mustaqil fikrlashni rag'batlantiradi.",'tint'=>'bg-rose-50 text-rose-600'],
                        ['title'=>'"Savolni o\'zing tuz"','desc'=>"O'quvchilar matn bo'yicha o'zlari savol tuzadilar. Bu usul ularning matnni ongli tushunganini ko'rsatadi va chuqur o'qishga undaydi.",'tint'=>'bg-amber-50 text-amber-600'],
                    ] as $m)
                        <div class="rounded-xl border border-slate-200 p-4 transition hover:-translate-y-0.5 hover:shadow-sm">
                            <div class="mb-2 flex items-center gap-2">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg {{ $m['tint'] }}">
                                    <x-icon name="help" class="h-3.5 w-3.5" />
                                </span>
                                <h4 class="text-xs font-bold text-slate-800">{{ $m['title'] }}</h4>
                            </div>
                            <p class="text-xs leading-relaxed text-slate-500">{{ $m['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
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
                <ol class="space-y-2.5">
                    @foreach ([
                        "Matn tanlanadi",
                        "Matnning asosiy g'oyasi aniqlanadi",
                        "Har bir g'oya yoki voqea bo'yicha savollar darajalarga ajratiladi",
                        "Avval sodda savollar, keyin murakkab savollar beriladi",
                        "O'quvchilardan javobni matndan dalil bilan asoslash talab qilinadi",
                        "Yakunda o'quvchilarning o'zi savol tuzadi",
                    ] as $i => $step)
                        <li class="flex items-start gap-2 text-xs text-slate-500">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-violet-50 text-violet-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $step }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="rounded-2xl border border-violet-200 bg-violet-50/50 p-5">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-violet-100 text-violet-600">
                        <x-icon name="cap" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">Talabalar uchun mashq</h3>
                </div>
                <p class="mb-3 text-xs text-violet-800">Talabalarga quyidagi topshiriq beriladi:</p>
                <ol class="space-y-2">
                    @foreach ([
                        "3-sinf uchun badiiy matn tanlang",
                        "Matn bo'yicha 2 ta aniq javobli savol tuzing",
                        "2 ta xulosa chiqarishga oid savol tuzing",
                        "2 ta baholash savoli tuzing",
                        "Har bir savolga namunaviy javob yozing",
                        "Savollarning qaysi ko'nikmani rivojlantirishini izohlang",
                    ] as $i => $item)
                        <li class="flex items-start gap-2 text-xs text-violet-800">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-violet-600 text-white font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[160px_1fr]">
                <div class="hidden items-center justify-center bg-amber-50 p-4 md:flex">
                    <img src="{{ asset('images/metodik/savol-tuzish/tavsiya.png') }}" alt="O'qituvchi uchun tavsiya" class="h-full max-h-28 w-full object-contain">
                </div>
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-50 text-amber-600">
                            <x-icon name="bulb" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">O'qituvchi uchun tavsiya</h3>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-500">Savol tuzishda bir xil shakldagi savollarni ko'paytirib yubormang. Dars davomida "Kim?", "Nima qildi?" kabi savollar zarur, lekin ular bilan cheklanib qolish o'quvchining chuqur fikrlashini rivojlantirmaydi. <strong class="text-slate-700">Har bir matnda kamida bitta "Nega?", bitta "Qanday bildingiz?", bitta "Siz qanday fikrdasiz?" savoli bo'lishi tavsiya etiladi.</strong></p>
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
                    <img src="{{ asset('images/metodik/savol-tuzish/namuna.jpg') }}" alt="Buvi va nabira" class="h-full w-full object-cover">
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                    <p class="mb-2 text-xs font-bold text-slate-700">Matn parchasi:</p>
                    <p class="rounded-lg border border-slate-200 bg-white p-3 text-xs italic leading-relaxed text-slate-600">"Malika buvisining eski sandig'idan kichik kitob topib oldi. Kitobning varaqlari sarg'aygan, lekin undagi ertaklar juda qiziqarli edi. Malika har kuni kechqurun buvisidan shu kitobdagi ertaklarni o'qib berishni so'radi."</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                    <p class="mb-3 text-xs font-bold text-slate-700">Savollar:</p>
                    <ol class="space-y-2">
                        @foreach ([
                            "Malika kitobni qayerdan topdi?",
                            "Kitob qanday holatda edi?",
                            "Nima uchun Malika har kuni buvisidan ertak o'qib berishni so'radi?",
                            "Sizningcha, eski kitoblar nima uchun qadrli bo'lishi mumkin?",
                            "Matndan Malikaning kitobga qiziqqanini ko'rsatuvchi gapni toping.",
                        ] as $i => $q)
                            <li class="flex items-start gap-1.5 text-xs text-slate-500">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-violet-50 text-violet-700 font-bold text-[10px]">{{ $i+1 }}</span>
                                {{ $q }}
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-violet-950 via-violet-900 to-pink-900 p-5 text-white shadow-sm">
                <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full bg-white/5"></div>
                <div class="relative z-10 mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-violet-200">
                        <x-icon name="star" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-violet-200">Kutiladigan natija</p>
                </div>
                <ul class="relative z-10 space-y-2">
                    @foreach ([
                        "Matn asosida turli darajadagi savollar tuzishni o'rganadi",
                        "Savol orqali o'quvchining tushunish, tahlil qilish, xulosa chiqarish va baholash ko'nikmalarini rivojlantira oladi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs leading-relaxed text-violet-50">
                            <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-300" stroke="2.5" />
                            {{ $n }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-amber-200 bg-amber-50/50 p-5">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-100 text-amber-600">
                        <x-icon name="doc" class="h-4.5 w-4.5" />
                    </span>
                    <p class="text-xs font-semibold uppercase tracking-wide text-amber-800">Dissertatsiyadagi ilmiy ahamiyati</p>
                </div>
                <p class="text-xs leading-relaxed text-amber-900">Savol tuzish metodikasi dissertatsiyada bo'lajak o'qituvchilarning kognitiv-metodik tayyorgarligini rivojlantirish vositasi sifatida talqin qilinadi. Talaba savol tuzish orqali o'quvchi tafakkurini boshqarish, o'qish jarayonini faollashtirish va o'quv natijasini baholash imkoniyatiga ega bo'ladi.</p>
            </div>
        </div>

        {{-- Nav buttons --}}
        <div class="mt-6 flex justify-between">
            <a href="{{ route('metodik.show', 'matn-ishlash') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi: Matn bilan ishlash
            </a>
            <a href="{{ route('metodik.show', 'pirls-topshiriq') }}" class="inline-flex items-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-violet-700">
                Keyingi: PIRLS topshiriqlari
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
