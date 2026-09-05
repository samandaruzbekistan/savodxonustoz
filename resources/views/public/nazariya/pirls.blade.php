@extends('layouts.app')
@section('title', "PIRLS dasturida o'qish savodxonligi")
@section('content')
@php
    $pirlsMaterials = \App\Models\Resource::query()
        ->published()
        ->with('category')
        ->whereHas('category', fn ($q) => $q->whereIn('slug', [
            'ona-tili-va-oqish-savodxonligi',
            'oqish-kitobi',
            'metodik-qollanmalar',
            'dars-ishlanmalari',
        ]))
        ->latest('published_at')
        ->take(4)
        ->get();

    $formatBytes = function (int $bytes): string {
        return $bytes >= 1048576
            ? number_format($bytes / 1048576, 1).' MB'
            : number_format(max($bytes, 0) / 1024, 0).' KB';
    };
@endphp
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'pirls'])

    <div class="min-w-0 flex-1">

        {{-- ============ HERO ============ --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-blue-950 via-blue-900 to-indigo-900 shadow-sm">
            <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-white/5 su-blob"></div>
            <div class="pointer-events-none absolute -bottom-16 left-1/4 h-40 w-40 rounded-full bg-white/5"></div>

            <div class="relative z-10 grid grid-cols-1 items-center gap-6 px-7 py-9 sm:px-10 sm:py-10 lg:grid-cols-[1.15fr_0.85fr]">
                <div class="max-w-xl">
                    <span class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">2</span>
                        Nazariya · 2-bo'lim
                    </span>
                    <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl lg:text-[44px]">PIRLS dasturida<br class="hidden sm:block"> o'qish savodxonligi</h1>
                    <p class="mt-4 max-w-lg text-sm leading-relaxed text-blue-100 sm:text-[15px]">PIRLS xalqaro tadqiqoti orqali o'qish savodxonligini baholash yondashuvlari, matn turlari va savol darajalari yoritiladi.</p>

                    <div class="mt-7 flex flex-wrap items-center gap-3">
                        <a href="#tushunchalar" class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-blue-900 shadow-lg shadow-black/10 transition hover:-translate-y-0.5 hover:bg-blue-50">
                            <x-icon name="play" class="h-4 w-4" />
                            Darsni boshlash
                        </a>
                        <a href="{{ $pirlsMaterials->isNotEmpty() ? route('resources.download', $pirlsMaterials->first()->slug) : route('resources.index') }}" class="inline-flex items-center gap-2 rounded-xl bg-white/10 px-5 py-3 text-sm font-bold text-white ring-1 ring-white/25 backdrop-blur-sm transition hover:bg-white/20">
                            <x-icon name="download" class="h-4 w-4" />
                            PDF yuklab olish
                        </a>
                    </div>
                </div>

                <div class="relative mx-auto hidden w-full max-w-sm lg:block">
                    <div class="absolute -inset-4 rounded-[2rem] bg-white/5"></div>
                    <img src="{{ asset("images/nazariya/pirls/hero-qizaloq-kitob-o'qish.png") }}" alt="Qizaloq kitob o'qimoqda" class="relative h-72 w-full rounded-3xl object-cover shadow-2xl" loading="lazy">
                    <div class="su-float absolute -left-8 top-4 w-40 rounded-xl bg-white p-3 text-left shadow-xl">
                        <div class="flex items-center gap-1.5 text-amber-500">
                            <x-icon name="star" class="h-3.5 w-3.5" />
                            <x-icon name="star" class="h-3.5 w-3.5" />
                            <x-icon name="star" class="h-3.5 w-3.5" />
                        </div>
                        <p class="mt-1 text-[11px] font-semibold leading-snug text-slate-700">"Yaxshi o'qish — keng imkoniyatlar eshigini ochadi!"</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ============ STATISTIKA ============ --}}
        <div class="mb-9 grid grid-cols-2 gap-3 sm:gap-4 lg:grid-cols-4">
            @foreach ([
                ['img'=>'globus-talim.png','n'=>'57 ta','l'=>'mamlakat','d'=>'PIRLS tadqiqotida ishtirok etadi','tint'=>'bg-blue-50'],
                ['img'=>'maktab-oquvchisi.png','n'=>'4-sinf','l'=>"o'quvchilari",'d'=>'asosiy maqsadli guruh','tint'=>'bg-emerald-50'],
                ['img'=>'kalendar.png','n'=>'5 yilda','l'=>'bir marta','d'=>"tadqiqot o'tkaziladi",'tint'=>'bg-violet-50'],
                ['img'=>'osish-grafik.png','n'=>"O'qish","l"=>'savodxonligi','d'=>"kelajak muvaffaqiyatining asosidir",'tint'=>'bg-orange-50'],
            ] as $s)
                <div class="flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl {{ $s['tint'] }}">
                        <img src="{{ asset('images/nazariya/pirls/'.$s['img']) }}" alt="" class="h-6 w-6 object-contain" loading="lazy">
                    </span>
                    <div class="min-w-0">
                        <p class="text-base font-extrabold leading-tight text-slate-900">{{ $s['n'] }}</p>
                        <p class="text-xs font-semibold text-slate-600">{{ $s['l'] }}</p>
                        <p class="mt-0.5 truncate text-[11px] text-slate-400">{{ $s['d'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- ============ ASOSIY TUSHUNCHALAR ============ --}}
        <div id="tushunchalar" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600">01 &middot; Tayanch tushunchalar</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Asosiy tushunchalar</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach ([
                    ['letter'=>'A','title'=>"PIRLS nima?",'img'=>'pirls-pisa-kitoblar.png','tint'=>'bg-blue-50','text'=>"PIRLS — boshlang'ich sinf o'quvchilarining o'qish savodxonligini xalqaro miqyosda baholashga qaratilgan tadqiqotdir. Unda asosan 4-sinf o'quvchilarining matnni o'qish, tushunish, talqin qilish va baholash ko'nikmalari o'rganiladi.",'href'=>'#materiallar'],
                    ['letter'=>'B','title'=>"PIRLSda o'qish savodxonligi",'img'=>'ochiq-kitob.png','tint'=>'bg-emerald-50','text'=>"PIRLS dasturida o'qish savodxonligi o'quvchining o'qilganidan ma'no chiqarishi, o'qilgan axborotdan foydalanishi, matn mazmuni ustida fikr yuritishi va o'z fikrini asoslay olishi bilan belgilanadi.",'href'=>'#ikki-maqsad'],
                    ['letter'=>'C','title'=>"Asosiy g'oya",'img'=>'goya-lampochka.png','tint'=>'bg-amber-50','text'=>"Bu yondashuv boshlang'ich ta'limda o'qish darslarini faqat ifodali o'qish yoki qayta hikoya qilish bilan cheklamasdan, tahliliy va ijodiy fikrlash bilan bog'liq holda tashkil etish zarurligini ko'rsatadi.",'href'=>'#darajalar'],
                ] as $i)
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="mb-4 flex items-center gap-3">
                            <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl {{ $i['tint'] }}">
                                <img src="{{ asset('images/nazariya/pirls/'.$i['img']) }}" alt="" class="h-8 w-8 object-contain" loading="lazy">
                            </span>
                            <h3 class="text-[15px] font-bold leading-snug text-slate-800">{{ $i['letter'] }}. {{ $i['title'] }}</h3>
                        </div>
                        <p class="flex-1 text-[13px] leading-relaxed text-slate-500">{{ $i['text'] }}</p>
                        <a href="{{ $i['href'] }}" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700">
                            Batafsil o'qish
                            <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ============ IKKI MAQSAD ============ --}}
        <div id="ikki-maqsad" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600">02 &middot; Matn maqsadlari</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">PIRLS matnlarining ikki asosiy maqsadi</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md sm:p-6">
                    <div class="min-w-0 flex-1">
                        <div class="mb-2 flex items-center gap-2.5">
                            <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-gradient-to-br from-violet-500 to-purple-600 text-sm font-bold text-white shadow-sm">1</span>
                            <h4 class="text-[15px] font-bold text-slate-800">Adabiy tajriba orttirish</h4>
                        </div>
                        <p class="text-[13px] leading-relaxed text-slate-500">Badiiy matnlar, hikoya, ertak va voqeali matnlar orqali o'quvchining obraz, voqea, qahramon va g'oyani anglash ko'nikmasi rivojlanadi.</p>
                    </div>
                    <img src="{{ asset('images/nazariya/pirls/qizaloq-kitoblar-bilan.png') }}" alt="Qizaloq kitoblar bilan" class="hidden h-20 w-20 shrink-0 object-contain sm:block" loading="lazy">
                </div>
                <div class="flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md sm:p-6">
                    <div class="min-w-0 flex-1">
                        <div class="mb-2 flex items-center gap-2.5">
                            <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-gradient-to-br from-sky-500 to-blue-600 text-sm font-bold text-white shadow-sm">2</span>
                            <h4 class="text-[15px] font-bold text-slate-800">Axborot olish va undan foydalanish</h4>
                        </div>
                        <p class="text-[13px] leading-relaxed text-slate-500">Ilmiy-ommabop, tushuntiruvchi va ma'lumot beruvchi matnlar orqali faktlarni topish, solishtirish, umumlashtirish va axborotdan foydalanish ko'nikmasi shakllanadi.</p>
                    </div>
                    <img src="{{ asset('images/nazariya/pirls/noutbuk-talim.png') }}" alt="Noutbuk orqali ta'lim" class="hidden h-20 w-20 shrink-0 object-contain sm:block" loading="lazy">
                </div>
            </div>
        </div>

        {{-- ============ KATTA VISUAL BLOK + QUOTE ============ --}}
        <div class="mb-10 grid grid-cols-1 gap-4 lg:grid-cols-2">
            <div class="relative min-h-[280px] overflow-hidden rounded-2xl shadow-sm">
                <img src="{{ asset('images/nazariya/pirls/oqish-savodxonligi-kitoblar.png') }}" alt="O'qish savodxonligi kitoblari" class="absolute inset-0 h-full w-full object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                <div class="relative flex h-full flex-col justify-end p-6">
                    <x-icon name="sparkle" class="mb-2 h-6 w-6 text-blue-300" />
                    <p class="text-xl font-bold leading-snug text-white sm:text-2xl">"O'qish — bu yangi dunyolar eshigini ochadigan kalitdir."</p>
                </div>
            </div>
            <div class="flex flex-col justify-center rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <span class="mb-3 grid h-11 w-11 place-items-center rounded-xl bg-blue-50">
                    <img src="{{ asset('images/nazariya/pirls/lupa-tadqiqot.png') }}" alt="" class="h-6 w-6 object-contain" loading="lazy">
                </span>
                <h3 class="mb-2 text-lg font-bold text-slate-800">Nima uchun matnlar xilma-xil bo'lishi kerak?</h3>
                <p class="text-[13px] leading-relaxed text-slate-500">PIRLS tadqiqoti badiiy va axborot beruvchi matnlarni teng nisbatda taqdim etadi, chunki har bir matn turi o'quvchidan boshqacha fikrlash ko'nikmasini talab qiladi. Adabiy matnlar hissiy va obrazli tafakkurni, axborot matnlari esa mantiqiy va tahliliy fikrlashni rivojlantiradi — ikkalasi birgalikda mustaqil, tanqidiy fikrlaydigan o'quvchini shakllantiradi.</p>
            </div>
        </div>

        {{-- ============ FIKRLASH DARAJALARI ============ --}}
        <div id="darajalar" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600">03 &middot; Baholash darajalari</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">PIRLS topshiriqlari qaysi fikrlash darajalarini baholaydi?</h2>
            </div>
            <div class="grid grid-cols-2 gap-3 md:grid-cols-4">
                @foreach ([
                    ['n'=>1,'title'=>'Matndan aniq axborotni topish','tint'=>'bg-blue-50 text-blue-600'],
                    ['n'=>2,'title'=>'Bevosita xulosa chiqarish','tint'=>'bg-emerald-50 text-emerald-600'],
                    ['n'=>3,'title'=>"G'oya va axborotni talqin qilish",'tint'=>'bg-violet-50 text-violet-600'],
                    ['n'=>4,'title'=>"Matn mazmuni, tili va tuzilishini baholash",'tint'=>'bg-orange-50 text-orange-600'],
                ] as $d)
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="mb-2.5 inline-flex h-8 w-8 items-center justify-center rounded-lg text-sm font-bold {{ $d['tint'] }}">{{ $d['n'] }}</span>
                        <p class="text-[13px] font-medium leading-snug text-slate-700">{{ $d['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ============ METODIK AHAMIYATI ============ --}}
        <div id="metodik" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600">04 &middot; Metodik ahamiyat</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Bo'lajak o'qituvchi uchun metodik ahamiyati</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="overflow-hidden rounded-2xl shadow-sm">
                    <img src="{{ asset("images/nazariya/pirls/oqituvchi-bolalar-bilan-kitob-o'qish.png") }}" alt="O'qituvchi bolalar bilan kitob o'qimoqda" class="h-full min-h-[220px] w-full object-cover" loading="lazy">
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50">
                            <img src="{{ asset('images/nazariya/pirls/bitiruv-kepkasi-kitoblar.png') }}" alt="" class="h-5 w-5 object-contain" loading="lazy">
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Bo'lajak o'qituvchi nimani o'rganadi?</h3>
                    </div>
                    <p class="text-[13px] leading-relaxed text-slate-500">PIRLS yondashuvi bo'lajak o'qituvchiga matn bilan ishlashni tizimli tashkil etishni o'rgatadi. Talaba matn tanlash, savol tuzish, javobni baholash va o'quvchi fikrini rivojlantirishda PIRLS mezonlaridan foydalanishni o'rganadi.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50">
                            <img src="{{ asset('images/nazariya/pirls/tekshiruv-checklist.png') }}" alt="" class="h-5 w-5 object-contain" loading="lazy">
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Shakllanadigan metodik ko'nikmalar</h3>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (['badiiy va axborot matnlarini farqlash','matn maqsadiga mos savollar tuzish',"o'quvchi javobini dalil asosida baholash",'ochiq javobli savollar bilan ishlash',"xulosa chiqarish ko'nikmasini rivojlantirish",'baholash mezonlari asosida rivojlanishni kuzatish'] as $k)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-500" stroke="2.5" />
                                {{ $k }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- ============ AMALIY MISOL ============ --}}
        <div id="amaliy-misol" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600">05 &middot; Amaliyot</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Amaliy misol</h2>
            </div>
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="grid grid-cols-1 gap-0 sm:grid-cols-[220px_1fr]">
                    <img src="{{ asset('images/nazariya/pirls/oqituvchi-stol-bolalar.png') }}" alt="O'qituvchi va o'quvchilar matn ustida ishlamoqda" class="h-40 w-full object-cover sm:h-full" loading="lazy">
                    <div class="flex items-center border-l-4 border-blue-400 bg-slate-50 p-5 text-[13px] italic leading-relaxed text-slate-600">
                        <p><strong class="not-italic text-slate-800">Matn parchasi:</strong> "Bahor keldi. Daraxtlar kurtak chiqardi. Bolalar maktab hovlisiga gul ko'chatlari ekishdi. Dilorom eng kichik ko'chatni ehtiyotlab sug'ordi."</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-3 p-5 sm:grid-cols-2 sm:p-6">
                    @foreach ([
                        ['n'=>1,'type'=>'Aniq axborotni topish','q'=>"Bolalar qayerga gul ko'chatlari ekishdi?",'tint'=>'bg-blue-50 text-blue-600'],
                        ['n'=>2,'type'=>'Xulosa chiqarish','q'=>"Diloromning ko'chatni ehtiyotlab sug'orishi uning qanday bola ekanini ko'rsatadi?",'tint'=>'bg-emerald-50 text-emerald-600'],
                        ['n'=>3,'type'=>'Talqin qilish','q'=>"Matndagi bahor fasli qanday belgilar orqali tasvirlangan?",'tint'=>'bg-violet-50 text-violet-600'],
                        ['n'=>4,'type'=>'Baholash','q'=>"Siz bolalarning bu ishini foydali deb hisoblaysizmi? Fikringizni matndan dalil bilan asoslang.",'tint'=>'bg-orange-50 text-orange-600'],
                    ] as $m)
                        <div class="rounded-xl border border-slate-200 p-3.5 transition hover:border-slate-300 hover:bg-slate-50/60">
                            <div class="mb-1.5 flex items-center gap-2">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-lg text-xs font-bold {{ $m['tint'] }}">{{ $m['n'] }}</span>
                                <span class="text-xs font-semibold text-slate-700">{{ $m['type'] }}</span>
                            </div>
                            <p class="text-[13px] leading-relaxed text-slate-500">{{ $m['q'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ============ MATERIALLAR (FILE PREVIEW CARDS) ============ --}}
        @if ($pirlsMaterials->isNotEmpty())
            <div id="materiallar" class="mb-10 scroll-mt-20">
                <div class="mb-5 flex items-end justify-between gap-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-600">06 &middot; Materiallar</span>
                        <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Mavzu bo'yicha materiallar</h2>
                    </div>
                    <a href="{{ route('resources.index') }}" class="hidden shrink-0 items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700 sm:inline-flex">
                        Barcha resurslar
                        <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($pirlsMaterials as $material)
                        <div class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="relative h-40 overflow-hidden bg-gradient-to-br from-red-50 via-rose-50 to-red-100">
                                <div class="absolute right-2 top-2 z-10">
                                    <x-resource.file-badge :extension="$material->extension" />
                                </div>
                                <div class="absolute inset-0 flex items-center justify-center p-6 transition duration-300 group-hover:scale-105">
                                    <div class="flex h-full w-[78%] flex-col rounded-md bg-white shadow-md ring-1 ring-slate-900/5">
                                        <div class="h-1.5 shrink-0 rounded-t-md bg-red-400"></div>
                                        <div class="flex-1 space-y-1.5 p-3">
                                            <div class="h-1.5 w-3/4 rounded-full bg-slate-200"></div>
                                            <div class="h-1.5 w-full rounded-full bg-slate-100"></div>
                                            <div class="h-1.5 w-full rounded-full bg-slate-100"></div>
                                            <div class="h-1.5 w-5/6 rounded-full bg-slate-100"></div>
                                            <div class="mt-2 h-1.5 w-2/3 rounded-full bg-slate-200"></div>
                                            <div class="h-1.5 w-full rounded-full bg-slate-100"></div>
                                            <div class="h-1.5 w-4/5 rounded-full bg-slate-100"></div>
                                        </div>
                                        <div class="flex items-center justify-center border-t border-slate-100 py-1.5">
                                            <x-icon name="doc" class="h-4 w-4 text-red-400" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="line-clamp-2 text-sm font-bold leading-snug text-slate-800">{{ $material->title }}</h3>
                                <p class="mt-1 text-xs text-slate-400">{{ $material->category?->name }}</p>
                                <div class="mt-2 flex items-center gap-2 text-[11px] text-slate-400">
                                    <span>{{ $formatBytes((int) $material->file_size) }}</span>
                                    <span>&middot;</span>
                                    <span class="inline-flex items-center gap-1"><x-icon name="download" class="h-3 w-3" /> {{ $material->download_count }}</span>
                                </div>
                                <a href="{{ route('resources.download', $material->slug) }}"
                                   class="mt-3 inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-3 py-2 text-xs font-bold text-white transition hover:bg-blue-700">
                                    <x-icon name="download" class="h-3.5 w-3.5" /> Yuklab olish
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- ============ SAVOL-TOPSHIRIQLAR ============ --}}
        <div id="savollar" class="mb-10 scroll-mt-20">
            <div class="mb-5">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600">07 &middot; Mustahkamlash</span>
                <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-[28px]">Savol-topshiriqlar</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm md:grid-cols-[1fr_160px]">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['n'=>1,'q'=>"PIRLS dasturida o'qish savodxonligi qanday ko'nikmalar orqali baholanadi?"],
                        ['n'=>2,'q'=>"Badiiy matn va axborot matni uchun savollar qanday farqlanishi mumkin?"],
                        ['n'=>3,'q'=>"Quyidagi savol qaysi darajaga mansub: \"Kim bunday qaror qildi?\""],
                        ['n'=>4,'q'=>"Kichik bir matn tanlang va unga PIRLSga mos 4 xil savol tuzing."],
                        ['n'=>5,'q'=>"0–2 ballik baholash mezoni ishlab chiqing."],
                    ] as $t)
                        <div class="flex gap-3 rounded-xl border border-slate-200 p-3.5 transition hover:-translate-y-0.5 hover:shadow-sm">
                            <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-50 text-xs font-bold text-blue-600">{{ $t['n'] }}</span>
                            <p class="text-[13px] leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                        </div>
                    @endforeach
                    <div class="flex gap-3 rounded-xl border border-dashed border-rose-300 bg-rose-50/60 p-3.5">
                        <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-rose-100">
                            <img src="{{ asset('images/nazariya/pirls/rangli-qalamlar.png') }}" alt="" class="h-3.5 w-3.5 object-contain" loading="lazy">
                        </span>
                        <p class="text-[13px] leading-relaxed text-rose-700"><strong class="font-bold">Amaliy topshiriq:</strong> "Mening maktabim" mavzusida qisqa matn yozing va unga PIRLS mezonlariga mos savollar tuzing.</p>
                    </div>
                </div>
                <div class="hidden items-center justify-center rounded-xl bg-slate-50 md:flex">
                    <img src="{{ asset('images/nazariya/pirls/savol-javob.png') }}" alt="Savol-javob" class="h-28 w-28 object-contain" loading="lazy">
                </div>
            </div>
        </div>

        {{-- ============ KUTILADIGAN NATIJA ============ --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-blue-950 via-blue-900 to-indigo-900 p-6 text-white shadow-sm sm:p-7">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-14 right-32 h-32 w-32 rounded-full bg-white/5"></div>
            <div class="relative flex items-center gap-6">
                <div class="min-w-0 flex-1">
                    <div class="mb-2 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-blue-200">
                            <x-icon name="target" class="h-4.5 w-4.5" />
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-wide text-blue-200">Kutiladigan natija</span>
                    </div>
                    <p class="max-w-2xl text-sm leading-relaxed text-blue-50">Foydalanuvchi PIRLS dasturida o'qish savodxonligi qanday baholanishini tushunadi, matn asosida turli darajadagi savollar tuzishni o'rganadi, o'quvchi javobini dalil va mezon asosida baholash ko'nikmasiga ega bo'ladi.</p>
                </div>
                <img src="{{ asset('images/nazariya/pirls/nishon-maqsad.png') }}" alt="" class="hidden h-20 w-20 shrink-0 object-contain opacity-95 sm:block">
            </div>
        </div>

        {{-- ============ NAV BUTTONS ============ --}}
        <div class="mt-6 flex justify-between">
            <a href="{{ route('nazariya.show', 'tushuncha') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'pisa') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-blue-700">
                Keyingi: PISA va funksional o'qish
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
