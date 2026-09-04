@extends('layouts.app')
@section('title', "O'qish savodxonligi tushunchasi")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'tushuncha'])

    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-950 via-indigo-900 to-violet-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-xl">
                <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">1</span>
                    Nazariya · 1-bo'lim
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">O'qish savodxonligi tushunchasi</h1>
                <p class="mt-3 leading-relaxed text-indigo-100">Ushbu bo'limda o'qish savodxonligi tushunchasi, uning mazmuni, ahamiyati va tarkibiy ko'nikmalar yoritiladi.</p>
            </div>
            <img src="{{ asset('images/nazariya/section_01.png') }}" alt="O'qish savodxonligi" class="pointer-events-none absolute right-6 bottom-0 hidden h-36 w-36 object-contain opacity-90 md:block lg:h-40 lg:w-40">
        </div>

        {{-- 3 intro cards --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-3">
            @foreach ([
                ['title'=>"O'qish savodxonligining ta'rifi",'icon'=>'bulb','tint'=>'bg-indigo-50 text-indigo-600','text'=>"O'qish savodxonligi — bu o'quvchining matnni faqat tovushlab yoki ichida o'qishi emas, balki o'qilgan matn mazmunini anglash, undagi asosiy fikrni ajratish, ma'lumotlarni tahlil qilish, xulosa chiqarish, o'z munosabatini bildirish va matndan hayotiy vaziyatlarda foydalana olish qobiliyatidir."],
                ['title'=>'Ahamiyati','icon'=>'users','tint'=>'bg-emerald-50 text-emerald-600','text'=>"Boshlang'ich sinfda o'qish savodxonligi bolaning keyingi ta'lim bosqichlaridagi muvaffaqiyatini belgilovchi asosiy omillardan biridir. Chunki o'quvchi ona tili, matematika, tabiiy fanlar, tarix yoki boshqa fanlarni o'zlashtirishda ham matnni tushunish, savolni anglash, topshiriq shartini to'g'ri talqin qilish va javobini asoslashga ehtiyoj sezadi."],
                ['title'=>'Maqsad','icon'=>'target','tint'=>'bg-orange-50 text-orange-600','text'=>"O'qish savodxonligi o'quvchining fikrlash, tushunish, izohlash va muloqotga kirishish qobiliyatini rivojlantiruvchi murakkab pedagogik jarayondir. Bo'lajak o'qituvchi bu jarayonni har bir fan va har bir darsda matn bilan ishlash madaniyatini shakllantirish orqali ta'minlashi lozim."],
            ] as $i)
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl {{ $i['tint'] }}">
                            <x-icon :name="$i['icon']" class="h-5 w-5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">{{ $i['title'] }}</h3>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-500">{{ $i['text'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Ko'nikmalar --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[220px_1fr]">
                <div class="hidden items-center justify-center bg-indigo-50 p-4 md:flex">
                    <img src="{{ asset('images/amaliyot-maydoni/22_puzzle_learning.png') }}" alt="Tarkibiy ko'nikmalar" class="h-28 w-28 object-contain">
                </div>
                <div class="p-5">
                    <h2 class="mb-4 text-xs font-bold uppercase tracking-wide text-slate-400">O'qish savodxonligining tarkibiy ko'nikmalari</h2>
                    <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">
                        @foreach ([
                            ['n'=>1,'title'=>"Matnni to'g'ri va ravon o'qish"],
                            ['n'=>2,'title'=>'Matndan aniq axborotni topish'],
                            ['n'=>3,'title'=>"Asosiy fikrni ajratish"],
                            ['n'=>4,'title'=>"Sabab-oqibat bog'lanishlarini tushunish"],
                            ['n'=>5,'title'=>"Yashirin ma'noni anglash"],
                            ['n'=>6,'title'=>'Xulosa chiqarish'],
                            ['n'=>7,'title'=>'Matnga nisbatan shaxsiy munosabat bildirish'],
                            ['n'=>8,'title'=>'Javobni matndan dalil bilan asoslash'],
                        ] as $k)
                            <div class="rounded-xl border border-slate-200 p-3 transition hover:border-indigo-200 hover:bg-indigo-50/50">
                                <span class="mb-2 inline-flex h-6 w-6 items-center justify-center rounded-lg bg-indigo-50 text-xs font-bold text-indigo-600">{{ $k['n'] }}</span>
                                <p class="text-xs font-medium leading-snug text-slate-600">{{ $k['title'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Metodik ahamiyati + Bu sahifa --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="{{ asset('images/sections/ravon-rivojlantirish/02_dars_oqituvchi_va_oquvchilar.png') }}" alt="O'qituvchi darsda o'quvchilar bilan ishlamoqda" class="h-32 w-full object-cover">
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h3>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-500">Bo'lajak boshlang'ich sinf o'qituvchisi o'qish savodxonligini rivojlantirishni alohida ko'nikma sifatida emas, balki o'quvchining umumiy intellektual rivojlanishi bilan bog'liq jarayon sifatida ko'rishi kerak. U matn tanlash, savol tuzish, baholash va o'quvchi javobini tahlil qilishda o'qish savodxonligining barcha tarkibiy qismlarini hisobga olishi zarur.</p>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                        <x-icon name="sparkle" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Bu sahifa talabalarga quyidagilarni anglashga yordam beradi</h3>
                </div>
                <ul class="space-y-2.5">
                    @foreach ([
                        "o'qish savodxonligi faqat tez o'qish emas",
                        "matnni tushunish o'quvchining tafakkuri bilan bog'liq",
                        "har bir savol o'quvchini fikrlashga undashi kerak",
                        "o'qituvchi o'quvchini tayyor javobga emas, mustaqil izlanishga yo'naltirishi lozim",
                    ] as $item)
                        <li class="flex items-start gap-2 text-xs text-slate-500">
                            <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-indigo-500" stroke="2.5" />
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Amaliy misollar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy misollar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-[1fr_1fr_auto] md:items-stretch">
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-indigo-50 text-indigo-600">
                            <x-icon name="compass" class="h-4 w-4" />
                        </span>
                        <h4 class="text-xs font-bold uppercase text-slate-700">1-misol. Oddiy o'qish va o'qish savodxonligi farqi</h4>
                    </div>
                    <div class="mb-3 rounded-lg border-l-4 border-indigo-400 bg-slate-50 p-3 text-xs italic leading-relaxed text-slate-600">
                        <strong class="not-italic text-slate-800">Matn:</strong> "Aziza daraxt tagida yotgan qushchani ko'rib qoldi. U qushchani ehtiyotlab olib, uyasiga qo'ydi."
                    </div>
                    <div class="space-y-2">
                        <div class="rounded-lg bg-slate-50 p-2.5 text-xs">
                            <span class="font-semibold text-slate-600">Oddiy savol:</span>
                            <span class="text-slate-500"> Aziza nimani ko'rib qoldi?</span>
                        </div>
                        <div class="rounded-lg border border-indigo-200 bg-indigo-50 p-2.5 text-xs">
                            <span class="font-semibold text-indigo-700">O'qish savodxonligiga yo'naltirilgan savol:</span>
                            <span class="text-indigo-700"> Azizaning harakatidan uning qanday fazilatga ega ekanini bilish mumkin?</span>
                        </div>
                        <p class="flex items-start gap-1.5 text-xs italic text-slate-400">
                            <x-icon name="star" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-indigo-400" />
                            Bu savol o'quvchini matndagi voqeani qayta aytishga emas, balki qahramon xarakterini anglashga yo'naltiradi.
                        </p>
                    </div>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-emerald-50 text-emerald-600">
                            <x-icon name="compass" class="h-4 w-4" />
                        </span>
                        <h4 class="text-xs font-bold uppercase text-slate-700">2-misol. Matndan xulosa chiqarish</h4>
                    </div>
                    <div class="space-y-2">
                        <div class="rounded-lg bg-slate-50 p-2.5 text-xs">
                            <span class="font-semibold text-slate-600">Savol:</span>
                            <span class="text-slate-500"> Nima uchun Aziza qushchani yerda qoldirmadi?</span>
                        </div>
                        <div class="rounded-lg border border-emerald-200 bg-emerald-50 p-2.5 text-xs">
                            <p class="mb-1 font-semibold text-emerald-700">Kutiladigan javob:</p>
                            <p class="text-emerald-700">Chunki u qushchaga achindi, unga yordam bermoqchi bo'ldi. Bu uning mehribonligini ko'rsatadi.</p>
                        </div>
                        <div class="mt-3 rounded-lg border border-amber-200 bg-amber-50 p-3">
                            <p class="text-xs font-medium text-amber-800">Muhim: O'quvchi matn asosida fakt topishi + o'z fikrini asoslashi kerak.</p>
                        </div>
                    </div>
                </div>
                <div class="hidden overflow-hidden rounded-2xl border border-slate-200 md:block md:w-40">
                    <img src="{{ asset('images/sections/sinf-strategiyalari/matn-turlari/15_bird_branch.png') }}" alt="Qushcha" class="h-full w-full object-cover">
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
                        ['n'=>1,'q'=>"O'qish savodxonligi oddiy o'qishdan nimasi bilan farq qiladi?"],
                        ['n'=>2,'q'=>"Boshlang'ich sinf o'quvchisi matnni tushunganini qanday aniqlash mumkin?"],
                        ['n'=>3,'q'=>"Quyidagi savollardan qaysi biri o'qish savodxonligini rivojlantirishga ko'proq xizmat qiladi? a) Qahramonning ismi nima? b) Qahramonning qarori sizga yoqdimi? Nega?"],
                        ['n'=>4,'q'=>"O'zingiz kichik matn tanlang va unga uch xil savol tuzing: aniq javobli, xulosa chiqarishga oid, baholashga oid."],
                        ['n'=>5,'q'=>"\"O'qish savodxonligi — hayotiy zarurat\" mavzusida 5–6 gapdan iborat fikr yozing."],
                    ] as $t)
                        <div class="flex gap-3 rounded-xl border border-slate-200 p-3.5 transition hover:-translate-y-0.5 hover:shadow-sm">
                            <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-indigo-50 text-xs font-bold text-indigo-600">{{ $t['n'] }}</span>
                            <p class="text-xs leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="hidden items-center justify-center rounded-xl bg-slate-50 md:flex">
                    <img src="{{ asset('images/sections/iqtidorli-oquvchilar/19_savol_belgisi.png') }}" alt="Savol-topshiriqlar" class="h-28 w-28 object-contain">
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-indigo-950 via-indigo-900 to-violet-900 p-6 text-white shadow-sm">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-2xl">
                <div class="mb-2 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-indigo-200">
                        <x-icon name="target" class="h-4.5 w-4.5" />
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-wide text-indigo-200">Kutiladigan natija</span>
                </div>
                <p class="text-sm leading-relaxed text-indigo-50">Ushbu sahifani o'rgangan foydalanuvchi o'qish savodxonligi tushunchasini to'g'ri anglaydi, uni oddiy o'qish malakasidan farqlaydi, boshlang'ich sinfda matn bilan ishlashning chuqurroq metodik maqsadini tushunadi hamda o'quvchini fikrlashga undovchi savollar tuzishga tayyorlanadi.</p>
                <p class="mt-3 text-xs italic text-indigo-300">"O'qish savodxonligi — bilim eshigini ochadigan kalitdir. Uni rivojlantirish — kelajakni yoritish demakdir."</p>
            </div>
            <img src="{{ asset('images/amaliyot-maydoni/07_goal_target.png') }}" alt="" class="pointer-events-none absolute -right-2 -bottom-2 hidden h-20 w-20 object-contain opacity-95 sm:block">
        </div>

        {{-- Nav buttons --}}
        <div class="mt-6 flex justify-end">
            <a href="{{ route('nazariya.show', 'pirls') }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-indigo-700">
                Keyingi: PIRLS dasturida o'qish savodxonligi
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>

    </div>
</div>
@endsection
