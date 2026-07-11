@extends('layouts.app')
@section('title', "PIRLS dasturida o'qish savodxonligi")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'pirls'])

    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-blue-100 text-blue-700">2</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Nazariya • 2-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">PIRLS dasturida o'qish savodxonligi</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">PIRLS xalqaro tadqiqoti orqali o'qish savodxonligini baholash yondashuvlari, matn turlari va savol darajalari yoritiladi.</p>
        </div>

        {{-- 3 intro boxes --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
            <div class="rounded-xl border border-blue-300 bg-blue-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-blue-900">A. PIRLS NIMA?</h3>
                </div>
                <p class="text-xs text-blue-800 leading-relaxed">PIRLS — boshlang'ich sinf o'quvchilarining o'qish savodxonligini xalqaro miqyosda baholashga qaratilgan tadqiqotdir. Unda asosan 4-sinf o'quvchilarining matnni o'qish, tushunish, talqin qilish va baholash ko'nikmalari o'rganiladi.</p>
            </div>
            <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-emerald-900">B. PIRLSda O'QISH SAVODXONLIGI</h3>
                </div>
                <p class="text-xs text-emerald-800 leading-relaxed">PIRLS dasturida o'qish savodxonligi o'quvchining o'qilganidan ma'no chiqarishi, o'qilgan axborotdan foydalanishi, matn mazmuni ustida fikr yuritishi va o'z fikrini asoslay olishi bilan belgilanadi.</p>
            </div>
            <div class="rounded-xl border border-amber-300 bg-amber-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-amber-900">C. ASOSIY G'OYA</h3>
                </div>
                <p class="text-xs text-amber-800 leading-relaxed">Bu yondashuv boshlang'ich ta'limda o'qish darslarini faqat ifodali o'qish yoki qayta hikoya qilish bilan cheklamasdan, tahliliy va ijodiy fikrlash bilan bog'liq holda tashkil etish zarurligini ko'rsatadi.</p>
            </div>
        </div>

        {{-- Ikki maqsad --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">PIRLS MATNLARINING IKKI ASOSIY MAQSADI</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-purple-300 bg-purple-100 p-5">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-purple-600 text-xs font-bold text-white">1</span>
                        <h4 class="text-sm font-bold text-purple-900">Adabiy tajriba orttirish</h4>
                    </div>
                    <p class="text-xs text-purple-800 leading-relaxed">Badiiy matnlar, hikoya, ertak va voqeali matnlar orqali o'quvchining obraz, voqea, qahramon va g'oyani anglash ko'nikmasi rivojlanadi.</p>
                </div>
                <div class="rounded-xl border border-blue-300 bg-blue-100 p-5">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">2</span>
                        <h4 class="text-sm font-bold text-blue-900">Axborot olish va undan foydalanish</h4>
                    </div>
                    <p class="text-xs text-blue-800 leading-relaxed">Ilmiy-ommabop, tushuntiruvchi va ma'lumot beruvchi matnlar orqali faktlarni topish, solishtirish, umumlashtirish va axborotdan foydalanish ko'nikmasi shakllanadi.</p>
                </div>
            </div>
        </div>

        {{-- 4 daraja --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">PIRLS TOPSHIRIQLARI QAYSI FIKRLASH DARAJALARINI BAHOLAYDI?</div>
            <div class="grid grid-cols-2 gap-3 md:grid-cols-4">
                @foreach ([
                    ['n'=>1,'title'=>'Matndan aniq axborotni topish','color'=>'bg-blue-100 text-blue-700 border-blue-200'],
                    ['n'=>2,'title'=>'Bevosita xulosa chiqarish','color'=>'bg-emerald-100 text-emerald-700 border-emerald-200'],
                    ['n'=>3,'title'=>"G'oya va axborotni talqin qilish",'color'=>'bg-violet-100 text-violet-700 border-violet-200'],
                    ['n'=>4,'title'=>"Matn mazmuni, tili va tuzilishini baholash",'color'=>'bg-orange-100 text-orange-700 border-orange-200'],
                ] as $d)
                    <div class="rounded-xl border p-3 {{ $d['color'] }}">
                        <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/70 text-xs font-bold mb-2">{{ $d['n'] }}</span>
                        <p class="text-xs font-medium leading-snug">{{ $d['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metodik + Ko'nikmalar --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-blue-300 bg-blue-100 p-5">
                <h3 class="text-sm font-bold text-blue-900 mb-3">BO'LAJAK O'QITUVCHI UCHUN METODIK AHAMIYATI</h3>
                <p class="text-xs text-blue-800 leading-relaxed">PIRLS yondashuvi bo'lajak o'qituvchiga matn bilan ishlashni tizimli tashkil etishni o'rgatadi. Talaba matn tanlash, savol tuzish, javobni baholash va o'quvchi fikrini rivojlantirishda PIRLS mezonlaridan foydalanishni o'rganadi.</p>
            </div>
            <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-5">
                <h3 class="text-sm font-bold text-emerald-900 mb-3">SHAKLLANADIGAN METODIK KO'NIKMALAR</h3>
                <ul class="space-y-1.5">
                    @foreach (['badiiy va axborot matnlarini farqlash','matn maqsadiga mos savollar tuzish',"o'quvchi javobini dalil asosida baholash",'ochiq javobli savollar bilan ishlash',"xulosa chiqarish ko'nikmasini rivojlantirish",'baholash mezonlari asosida rivojlanishni kuzatish'] as $k)
                        <li class="flex items-start gap-2 text-xs text-emerald-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $k }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Amaliy misol --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MISOL</div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="mb-3 rounded-lg bg-slate-50 p-3 text-xs text-slate-700 italic border-l-4 border-blue-400">
                    <strong>Matn parchasi:</strong> "Bahor keldi. Daraxtlar kurtak chiqardi. Bolalar maktab hovlisiga gul ko'chatlari ekishdi. Dilorom eng kichik ko'chatni ehtiyotlab sug'ordi."
                </div>
                <div class="grid grid-cols-2 gap-3">
                    @foreach ([
                        ['n'=>1,'type'=>'Aniq axborotni topish','q'=>"Bolalar qayerga gul ko'chatlari ekishdi?",'color'=>'bg-blue-100 border-blue-300 text-blue-900'],
                        ['n'=>2,'type'=>'Xulosa chiqarish','q'=>"Diloromning ko'chatni ehtiyotlab sug'orishi uning qanday bola ekanini ko'rsatadi?",'color'=>'bg-emerald-100 border-emerald-300 text-emerald-900'],
                        ['n'=>3,'type'=>'Talqin qilish','q'=>"Matndagi bahor fasli qanday belgilar orqali tasvirlangan?",'color'=>'bg-violet-100 border-violet-300 text-violet-900'],
                        ['n'=>4,'type'=>'Baholash','q'=>"Siz bolalarning bu ishini foydali deb hisoblaysizmi? Fikringizni matndan dalil bilan asoslang.",'color'=>'bg-orange-100 border-orange-300 text-orange-900'],
                    ] as $m)
                        <div class="rounded-lg border p-3 {{ $m['color'] }}">
                            <div class="flex items-center gap-1.5 mb-1.5">
                                <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-white/80 text-xs font-bold">{{ $m['n'] }}</span>
                                <span class="text-xs font-semibold">{{ $m['type'] }}:</span>
                            </div>
                            <p class="text-xs">{{ $m['q'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SAVOL-TOPSHIRIQLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"PIRLS dasturida o'qish savodxonligi qanday ko'nikmalar orqali baholanadi?"],
                    ['n'=>2,'q'=>"Badiiy matn va axborot matni uchun savollar qanday farqlanishi mumkin?"],
                    ['n'=>3,'q'=>"Quyidagi savol qaysi darajaga mansub: \"Kim bunday qaror qildi?\""],
                    ['n'=>4,'q'=>"Kichik bir matn tanlang va unga PIRLSga mos 4 xil savol tuzing."],
                    ['n'=>5,'q'=>"0–2 ballik baholash mezoni ishlab chiqing."],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-100 text-xs font-bold text-blue-700">{{ $t['n'] }}</span>
                        <p class="text-xs text-slate-700 leading-relaxed">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl bg-gradient-to-r from-blue-900 to-blue-700 p-5 text-white">
            <div class="flex items-center gap-2 mb-2">
                <svg class="h-5 w-5 text-blue-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
                <span class="text-xs font-semibold text-blue-300 uppercase tracking-wide">Kutiladigan natija</span>
            </div>
            <p class="text-sm leading-relaxed">Foydalanuvchi PIRLS dasturida o'qish savodxonligi qanday baholanishini tushunadi, matn asosida turli darajadagi savollar tuzishni o'rganadi, o'quvchi javobini dalil va mezon asosida baholash ko'nikmasiga ega bo'ladi.</p>
        </div>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('nazariya.show', 'tushuncha') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'pisa') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                Keyingi: PISA va funksional o'qish
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
