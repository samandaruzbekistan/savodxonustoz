@extends('layouts.app')
@section('title', "PIRLS dasturida o'qish savodxonligi")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'pirls'])

    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl shadow-sm">
            <img src="{{ asset('images/nazariya/pirls/hero.jpg') }}" alt="Bolalar kitob o'qimoqda" class="h-64 w-full object-cover sm:h-72" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/95 via-blue-900/70 to-blue-900/10"></div>
            <div class="absolute inset-0 flex flex-col justify-center px-7 sm:px-10">
                <div class="mb-3 flex items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">2</span>
                        Nazariya · 2-bo'lim
                    </span>
                </div>
                <h1 class="max-w-2xl text-3xl font-extrabold tracking-tight text-white sm:text-4xl">PIRLS dasturida o'qish savodxonligi</h1>
                <p class="mt-3 max-w-xl text-sm leading-relaxed text-blue-100">PIRLS xalqaro tadqiqoti orqali o'qish savodxonligini baholash yondashuvlari, matn turlari va savol darajalari yoritiladi.</p>
            </div>
        </div>

        {{-- 3 intro cards --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-3">
            @foreach ([
                ['letter'=>'A','title'=>"PIRLS NIMA?",'icon'=>'compass','tint'=>'bg-blue-50 text-blue-600','text'=>"PIRLS — boshlang'ich sinf o'quvchilarining o'qish savodxonligini xalqaro miqyosda baholashga qaratilgan tadqiqotdir. Unda asosan 4-sinf o'quvchilarining matnni o'qish, tushunish, talqin qilish va baholash ko'nikmalari o'rganiladi."],
                ['letter'=>'B','title'=>"PIRLSda O'QISH SAVODXONLIGI",'icon'=>'sparkle','tint'=>'bg-emerald-50 text-emerald-600','text'=>"PIRLS dasturida o'qish savodxonligi o'quvchining o'qilganidan ma'no chiqarishi, o'qilgan axborotdan foydalanishi, matn mazmuni ustida fikr yuritishi va o'z fikrini asoslay olishi bilan belgilanadi."],
                ['letter'=>'C','title'=>"ASOSIY G'OYA",'icon'=>'bulb','tint'=>'bg-amber-50 text-amber-600','text'=>"Bu yondashuv boshlang'ich ta'limda o'qish darslarini faqat ifodali o'qish yoki qayta hikoya qilish bilan cheklamasdan, tahliliy va ijodiy fikrlash bilan bog'liq holda tashkil etish zarurligini ko'rsatadi."],
            ] as $i)
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl {{ $i['tint'] }}">
                            <x-icon :name="$i['icon']" class="h-5 w-5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">{{ $i['letter'] }}. {{ $i['title'] }}</h3>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-500">{{ $i['text'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Ikki maqsad --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">PIRLS matnlarining ikki asosiy maqsadi</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-2 flex items-center gap-2.5">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-br from-violet-500 to-purple-600 text-xs font-bold text-white shadow-sm">1</span>
                        <h4 class="text-sm font-bold text-slate-800">Adabiy tajriba orttirish</h4>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-500">Badiiy matnlar, hikoya, ertak va voqeali matnlar orqali o'quvchining obraz, voqea, qahramon va g'oyani anglash ko'nikmasi rivojlanadi.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-2 flex items-center gap-2.5">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-br from-sky-500 to-blue-600 text-xs font-bold text-white shadow-sm">2</span>
                        <h4 class="text-sm font-bold text-slate-800">Axborot olish va undan foydalanish</h4>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-500">Ilmiy-ommabop, tushuntiruvchi va ma'lumot beruvchi matnlar orqali faktlarni topish, solishtirish, umumlashtirish va axborotdan foydalanish ko'nikmasi shakllanadi.</p>
                </div>
            </div>
        </div>

        {{-- 4 daraja --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">PIRLS topshiriqlari qaysi fikrlash darajalarini baholaydi?</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-2 gap-3 md:grid-cols-4">
                @foreach ([
                    ['n'=>1,'title'=>'Matndan aniq axborotni topish','tint'=>'bg-blue-50 text-blue-600'],
                    ['n'=>2,'title'=>'Bevosita xulosa chiqarish','tint'=>'bg-emerald-50 text-emerald-600'],
                    ['n'=>3,'title'=>"G'oya va axborotni talqin qilish",'tint'=>'bg-violet-50 text-violet-600'],
                    ['n'=>4,'title'=>"Matn mazmuni, tili va tuzilishini baholash",'tint'=>'bg-orange-50 text-orange-600'],
                ] as $d)
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="mb-2.5 inline-flex h-7 w-7 items-center justify-center rounded-lg text-xs font-bold {{ $d['tint'] }}">{{ $d['n'] }}</span>
                        <p class="text-xs font-medium leading-snug text-slate-700">{{ $d['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metodik + Ko'nikmalar --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-3">
            <div class="overflow-hidden rounded-2xl shadow-sm md:row-span-2">
                <img src="{{ asset('images/nazariya/pirls/methodic.jpg') }}" alt="Bola kutubxonada o'qimoqda" class="h-full min-h-[220px] w-full object-cover" loading="lazy">
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                        <x-icon name="cap" class="h-4.5 w-4.5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">PIRLS yondashuvi bo'lajak o'qituvchiga matn bilan ishlashni tizimli tashkil etishni o'rgatadi. Talaba matn tanlash, savol tuzish, javobni baholash va o'quvchi fikrini rivojlantirishda PIRLS mezonlaridan foydalanishni o'rganadi.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                        <x-icon name="target" class="h-4.5 w-4.5" />
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

        {{-- Amaliy misol --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy misol</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                <div class="mb-5 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="overflow-hidden rounded-xl sm:col-span-1">
                        <img src="{{ asset('images/nazariya/pirls/example.jpg') }}" alt="Bolalar matn o'qimoqda" class="h-40 w-full object-cover sm:h-32" loading="lazy">
                    </div>
                    <div class="flex items-center rounded-xl border-l-4 border-blue-400 bg-slate-50 p-4 text-xs italic leading-relaxed text-slate-600 sm:col-span-2">
                        <p><strong class="not-italic text-slate-800">Matn parchasi:</strong> "Bahor keldi. Daraxtlar kurtak chiqardi. Bolalar maktab hovlisiga gul ko'chatlari ekishdi. Dilorom eng kichik ko'chatni ehtiyotlab sug'ordi."</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
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
                            <p class="text-xs leading-relaxed text-slate-500">{{ $m['q'] }}</p>
                        </div>
                    @endforeach
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
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"PIRLS dasturida o'qish savodxonligi qanday ko'nikmalar orqali baholanadi?"],
                    ['n'=>2,'q'=>"Badiiy matn va axborot matni uchun savollar qanday farqlanishi mumkin?"],
                    ['n'=>3,'q'=>"Quyidagi savol qaysi darajaga mansub: \"Kim bunday qaror qildi?\""],
                    ['n'=>4,'q'=>"Kichik bir matn tanlang va unga PIRLSga mos 4 xil savol tuzing."],
                    ['n'=>5,'q'=>"0–2 ballik baholash mezoni ishlab chiqing."],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-50 text-xs font-bold text-blue-600">{{ $t['n'] }}</span>
                        <p class="text-xs leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-blue-950 via-blue-900 to-indigo-900 p-6 text-white shadow-sm">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-14 right-24 h-32 w-32 rounded-full bg-white/5"></div>
            <div class="relative mb-2 flex items-center gap-2.5">
                <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-blue-200">
                    <x-icon name="target" class="h-4.5 w-4.5" />
                </span>
                <span class="text-xs font-semibold uppercase tracking-wide text-blue-200">Kutiladigan natija</span>
            </div>
            <p class="relative text-sm leading-relaxed text-blue-50">Foydalanuvchi PIRLS dasturida o'qish savodxonligi qanday baholanishini tushunadi, matn asosida turli darajadagi savollar tuzishni o'rganadi, o'quvchi javobini dalil va mezon asosida baholash ko'nikmasiga ega bo'ladi.</p>
        </div>

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
