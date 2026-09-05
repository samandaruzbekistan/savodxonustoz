@extends('layouts.app')
@section('title', "PISA va funksional o'qish savodxonligi")
@section('content')
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'pisa'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="su-reveal relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-cyan-950 via-cyan-900 to-teal-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-24 left-1/3 h-48 w-48 rounded-full bg-white/5"></div>
            <div class="relative z-10 grid grid-cols-1 items-center gap-6 lg:grid-cols-[1fr_auto]">
                <div class="max-w-xl">
                    <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">3</span>
                        Nazariya · 3-bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">PISA va funksional o'qish savodxonligi</h1>
                    <p class="mt-3 leading-relaxed text-cyan-100">PISA dasturining yondashuvi orqali funksional o'qish savodxonligi, hayotiy matn turlari va amaliy foydalanish ko'nikmalari yoritiladi.</p>

                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1.5 text-xs font-semibold text-cyan-100 ring-1 ring-white/15">
                            <x-icon name="layers" class="h-3.5 w-3.5" stroke="2" />
                            3 ta mavzu
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1.5 text-xs font-semibold text-cyan-100 ring-1 ring-white/15">
                            <x-icon name="doc" class="h-3.5 w-3.5" stroke="2" />
                            10 ta matn turi
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1.5 text-xs font-semibold text-cyan-100 ring-1 ring-white/15">
                            <x-icon name="check" class="h-3.5 w-3.5" stroke="2.5" />
                            5 ta amaliy topshiriq
                        </span>
                    </div>
                </div>

                <div class="relative mx-auto h-40 w-36 shrink-0 sm:h-48 sm:w-40 md:h-52 md:w-44 lg:h-60 lg:w-52">
                    <img src="{{ asset('images/nazariya/pisa/01_pisa_teacher.png') }}" alt="PISA yo'nalishi bo'yicha o'qituvchi" class="su-float-slow relative z-10 h-full w-full object-contain drop-shadow-2xl" loading="lazy">
                    <span class="su-float su-delay-1 absolute -top-3 -right-4 rotate-3 rounded-xl bg-white/10 px-3 py-1.5 text-[11px] font-semibold text-white ring-1 ring-white/20 backdrop-blur-sm">
                        Hayotga tayyorlaydi!
                    </span>
                    <div class="su-float-slow su-delay-2 absolute -bottom-2 -left-6 -rotate-6 rounded-2xl bg-white p-1.5 shadow-lg ring-4 ring-white/10">
                        <img src="{{ asset('images/nazariya/pisa/20_pisa_checklist.png') }}" alt="PISA mezonlari" class="h-14 w-14 object-contain">
                    </div>
                </div>
            </div>
        </div>

        {{-- 3 intro cards --}}
        <div class="su-stagger mb-8 grid grid-cols-1 gap-4 md:grid-cols-3">
            @foreach ([
                ['title'=>"PISA nima?",'img'=>'02_globe_books.png','tint'=>'bg-cyan-50','text'=>"PISA xalqaro baholash dasturi asosan 15 yoshli o'quvchilarning hayotiy vaziyatlarda bilimdan foydalanish qobiliyatini baholaydi. PISAda o'qish savodxonligi o'quvchining matnni tushunishi, undan foydalanishi, baholashi, mulohaza yuritishi va o'z maqsadlariga erishishda yozma axborotdan olish sifatida talqin qilinadi."],
                ['title'=>"Boshlang'ich ta'limdagi asosi",'img'=>'19_school_building.png','tint'=>'bg-teal-50','text'=>"PISA boshlang'ich sinf o'quvchilarini bevosita baholamasa-da, unda talab qilinadigan ko'nikmalarning asosi aynan boshlang'ich ta'limda shakllanadi. Agar bola 1–4-sinflarda topshiriq shartini tushunish, matndan axborotni topish, savolga asosli javob berish va o'qilgan ma'lumotni hayot bilan bog'lashga o'rgatilsa, yuqori sinflarda funksional savodxonlikka ega bo'lishi osonlashadi."],
                ['title'=>"Funksional o'qish savodxonligi",'img'=>'10_laptop_chart.png','tint'=>'bg-orange-50','text'=>"Bu o'quvchining matnni faqat dars uchun emas, balki kundalik hayotda ham tushunib ishlatidir. Masalan, e'lonni o'qib kerakli vaqtni aniqlash, yo'riqnomani tushunish, jadvaldan ma'lumot olish, xaritadagi belgilarni anglash, mahsulot yorlig'idagi axborotni tahlil qilish — bularning barchasi funksional o'qish savodxonligiga kiradi."],
            ] as $i)
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="mb-3 flex items-center gap-3">
                        <span class="grid h-12 w-12 shrink-0 place-items-center rounded-xl {{ $i['tint'] }}">
                            <img src="{{ asset('images/nazariya/pisa/'.$i['img']) }}" alt="" class="h-8 w-8 object-contain">
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">{{ $i['title'] }}</h3>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-500">{{ $i['text'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Hayotiy matn turlari --}}
        <div class="su-reveal mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[220px_1fr]">
                <div class="hidden flex-col items-center justify-center gap-3 bg-teal-50 p-6 text-center md:flex">
                    <img src="{{ asset('images/nazariya/pisa/12_chat_messages.png') }}" alt="Hayotiy matn turlari" class="h-28 w-28 object-contain">
                    <p class="text-xs font-semibold text-teal-700">10+ turdagi hayotiy matn</p>
                </div>
                <div class="p-5">
                    <h2 class="mb-4 text-xs font-bold uppercase tracking-wide text-slate-400">Boshlang'ich sinfda ishlatiladigan hayotiy matn turlari</h2>
                    <div class="su-stagger grid grid-cols-2 gap-3 sm:grid-cols-5">
                        @foreach ([
                            ['label'=>"E'lon",'icon'=>'news','tint'=>'bg-cyan-50 text-cyan-600'],
                            ['label'=>'Jadval','img'=>'08_calendar.png'],
                            ['label'=>'Xarita','img'=>'09_map_location.png'],
                            ['label'=>"Yo'riqnoma",'img'=>'07_checklist_pencil.png'],
                            ['label'=>'Taklifnoma','img'=>'11_envelope_letter.png'],
                            ['label'=>'Xat','icon'=>'mail','tint'=>'bg-teal-50 text-teal-600'],
                            ['label'=>'Retsept','icon'=>'doc','tint'=>'bg-amber-50 text-amber-600'],
                            ['label'=>"Ro'yxat",'icon'=>'clipboard','tint'=>'bg-violet-50 text-violet-600'],
                            ['label'=>'Afisha','img'=>'14_image_landscape.png'],
                            ['label'=>"Qisqa ma'lumotnoma",'img'=>'13_folder_documents.png'],
                        ] as $t)
                            <div class="group flex flex-col items-center justify-center gap-2 rounded-xl border border-slate-200 p-3 text-center transition hover:-translate-y-0.5 hover:border-teal-200 hover:bg-teal-50/50 hover:shadow-sm">
                                @if (isset($t['img']))
                                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-slate-50 transition group-hover:bg-white">
                                        <img src="{{ asset('images/nazariya/pisa/'.$t['img']) }}" alt="" class="h-7 w-7 object-contain">
                                    </span>
                                @else
                                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg {{ $t['tint'] }}">
                                        <x-icon :name="$t['icon']" class="h-4.5 w-4.5" stroke="1.8" />
                                    </span>
                                @endif
                                <span class="text-xs font-medium leading-tight text-teal-800">{{ $t['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Metodik + Amaliy --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="su-reveal overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm" data-reveal="left">
                <div class="flex h-36 items-center justify-center bg-gradient-to-br from-cyan-50 to-teal-50">
                    <img src="{{ asset('images/nazariya/pisa/05_graduation_books.png') }}" alt="Metodik ahamiyati" class="h-28 w-28 object-contain">
                </div>
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-cyan-50 p-1.5">
                            <img src="{{ asset('images/nazariya/pisa/03_book_lightbulb.png') }}" alt="" class="h-full w-full object-contain">
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h3>
                    </div>
                    <p class="mb-3 text-xs leading-relaxed text-slate-500">Bo'lajak o'qituvchi PISA yondashuvini bilish orqali o'qish savodxonligini real hayot bilan bog'lashni o'rganadi. Bu uning darslarini amaliy, mazmunli va hayotiy qiladi.</p>
                    <p class="mb-2 text-xs font-semibold text-slate-700">Metodik ahamiyati quyidagilarda ko'rinadi:</p>
                    <ul class="space-y-2">
                        @foreach (["o'quvchi matnni hayotiy vaziyatda qo'llashga o'rganadi","darsda turli matn turlaridan foydalaniladi","fanlararo integratsiya kuchayadi","o'quvchi savolga javobni matndan izlaydi","o'quvchi o'qigan ma'lumotiga tanqidiy yondashadi"] as $k)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-cyan-500" stroke="2.5" />
                                {{ $k }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="su-reveal overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm" data-reveal="right">
                <div class="flex h-36 items-center justify-center bg-gradient-to-br from-amber-50 to-orange-50">
                    <img src="{{ asset('images/nazariya/pisa/06_student_boy.png') }}" alt="Amaliy misol" class="h-28 w-28 object-contain">
                </div>
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-amber-50 p-1.5">
                            <img src="{{ asset('images/nazariya/pisa/17_magnifying_glass.png') }}" alt="" class="h-full w-full object-contain">
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Amaliy misol — hayotiy matn namunasi</h3>
                    </div>
                    <div class="mb-3 rounded-lg border-l-4 border-amber-400 bg-amber-50 p-3 text-xs italic leading-relaxed text-amber-900">
                        "E'lon: Shanba kuni soat 10:00 da maktab kutubxonasida 'Kitobxon bolalar' tanlovi bo'lib o'tadi. Ishtirokchilar o'zlari yoqtirgan kitob haqida 3 daqiqa davomida gapirib beradilar."
                    </div>
                    <p class="mb-2 text-xs font-semibold text-slate-700">Savollar:</p>
                    <ol class="space-y-2">
                        @foreach (['Tanlov qayerda bo\'lib o\'tadi?','Tanlov qaysi kuni boshlanadi?','Ishtirokchi nima haqida gapirishi kerak?','Siz bu tanlovda qatnashsangiz, qaysi kitob haqida gapirar edingiz? Nega?',"E'londa yana qanday ma'lumot berilsa yaxshi bo'lardi?"] as $idx => $s)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <span class="inline-flex h-4.5 w-4.5 shrink-0 items-center justify-center rounded-full bg-cyan-50 text-[10px] font-bold text-cyan-700">{{ $idx+1 }}</span>
                                {{ $s }}
                            </li>
                        @endforeach
                    </ol>
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
            <div class="su-reveal grid grid-cols-1 gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm md:grid-cols-[1fr_180px]">
                <div class="su-stagger grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-2">
                    @foreach ([
                        ['n'=>1,'q'=>"Funksional o'qish savodxonligi deganda nimani tushunasiz?"],
                        ['n'=>2,'q'=>"Boshlang'ich sinfda qaysi hayotiy matnlardan foydalanish zarurligini asoslang."],
                        ['n'=>3,'q'=>"E'lon, jadval yoki yo'riqnoma asosida 5 ta savol tuzing."],
                        ['n'=>4,'q'=>"O'quvchiga hayotiy vaziyat bering va shu vaziyatga mos matn tanlang."],
                        ['n'=>5,'q'=>"\"Matnni hayotda qo'llash\" mavzusida kichik topshiriq ishlab chiqing."],
                    ] as $t)
                        <div class="flex gap-3 rounded-xl border border-slate-200 p-3.5 transition hover:-translate-y-0.5 hover:shadow-sm">
                            <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-cyan-50 text-xs font-bold text-cyan-700">{{ $t['n'] }}</span>
                            <p class="text-xs leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="relative hidden items-center justify-center overflow-hidden rounded-xl bg-gradient-to-br from-slate-50 to-cyan-50 md:flex">
                    <img src="{{ asset('images/nazariya/pisa/18_lightbulb.png') }}" alt="Savol-topshiriqlar" class="h-24 w-24 object-contain">
                    <div class="absolute -bottom-2 -right-2 rotate-6 rounded-xl bg-white p-1 shadow-md ring-2 ring-white">
                        <img src="{{ asset('images/nazariya/pisa/16_apple_books.png') }}" alt="" class="h-10 w-10 object-contain">
                    </div>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="su-reveal relative overflow-hidden rounded-2xl bg-gradient-to-br from-cyan-950 via-cyan-900 to-teal-900 p-6 text-white shadow-sm">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-2xl pr-0 sm:pr-28">
                <div class="mb-2 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-cyan-200">
                        <x-icon name="target" class="h-4.5 w-4.5" />
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-wide text-cyan-200">Kutiladigan natija</span>
                </div>
                <p class="text-sm leading-relaxed text-cyan-50">Foydalanuvchi PISA yondashuvi orqali o'qish savodxonligining hayotiy mazmunini anglaydi. Boshlang'ich sinfda turli matn turlari bilan ishlash zarurligini tushunadi. O'quvchilarni real vaziyatlarda matndan o'rganish usullarini bilib oladi. Matn asosida turli darajadagi savollar tuzishni o'rganadi.</p>
                <p class="mt-3 text-xs italic text-cyan-300">Eslatma: PISA yondashuvi o'qituvchini o'quvchini hayotga tayyorlashga yo'naltiradi, chunki bilim faqat darsda emas, hayotda foydali bo'lishi kerak!</p>
            </div>
            <div class="pointer-events-none absolute -right-2 bottom-0 hidden sm:block">
                <img src="{{ asset('images/nazariya/pisa/15_trophy_award.png') }}" alt="" class="su-float-slow relative z-10 h-24 w-24 object-contain drop-shadow-xl">
                <img src="{{ asset('images/nazariya/pisa/04_growth_chart.png') }}" alt="" class="absolute -left-10 bottom-0 h-14 w-14 -rotate-6 object-contain drop-shadow-lg">
            </div>
        </div>

        {{-- Nav buttons --}}
        <div class="mt-6 flex justify-between">
            <a href="{{ route('nazariya.show', 'pirls') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'matn-tushunish') }}" class="inline-flex items-center gap-2 rounded-xl bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-teal-700">
                Keyingi: Matnni tushunish
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
