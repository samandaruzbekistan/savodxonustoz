@extends('layouts.app')
@section('title', "PISA va funksional o'qish savodxonligi")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'pisa'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-cyan-100 text-cyan-700">3</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Nazariya • 3-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">PISA va funksional o'qish savodxonligi</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">PISA dasturining yondashuvi orqali funksional o'qish savodxonligi, hayotiy matn turlari va amaliy foydalanish ko'nikmalari yoritiladi.</p>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
            <div class="rounded-xl border border-cyan-300 bg-cyan-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-cyan-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-cyan-900">PISA NIMA?</h3>
                </div>
                <p class="text-xs text-cyan-800 leading-relaxed">PISA xalqaro baholash dasturi asosan 15 yoshli o'quvchilarning hayotiy vaziyatlarda bilimdan foydalanish qobiliyatini baholaydi. PISAda o'qish savodxonligi o'quvchining matnni tushunishi, undan foydalanishi, baholashi, mulohaza yuritishi va o'z maqsadlariga erishishda yozma axborotdan olish sifatida talqin qilinadi.</p>
            </div>
            <div class="rounded-xl border border-teal-300 bg-teal-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-teal-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-teal-900">BOSHLANG'ICH TA'LIMDAGI ASOSI</h3>
                </div>
                <p class="text-xs text-teal-800 leading-relaxed">PISA boshlang'ich sinf o'quvchilarini bevosita baholamasa-da, unda talab qilinadigan ko'nikmalarning asosi aynan boshlang'ich ta'limda shakllanadi. Agar bola 1–4-sinflarda topshiriq shartini tushunish, matndan axborotni topish, savolga asosli javob berish va o'qilgan ma'lumotni hayot bilan bog'lashga o'rgatilsa, yuqori sinflarda funksional savodxonlikka ega bo'lishi osonlashadi.</p>
            </div>
            <div class="rounded-xl border border-orange-300 bg-orange-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-orange-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-orange-900">FUNKSIONAL O'QISH SAVODXONLIGI</h3>
                </div>
                <p class="text-xs text-orange-800 leading-relaxed">Bu o'quvchining matnni faqat dars uchun emas, balki kundalik hayotda ham tushunib ishlatidir. Masalan, e'lonni o'qib kerakli vaqtni aniqlash, yo'riqnomani tushunish, jadvaldan ma'lumot olish, xaritadagi belgilarni anglash, mahsulot yorlig'idagi axborotni tahlil qilish — bularning barchasi funksional o'qish savodxonligiga kiradi.</p>
            </div>
        </div>

        {{-- Hayotiy matn turlari --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BOSHLANG'ICH SINFDA ISHLATILADIGAN HAYOTIY MATN TURLARI</div>
            <div class="grid grid-cols-2 gap-2 sm:grid-cols-5">
                @foreach (["E'lon","Jadval","Xarita","Yo'riqnoma","Taklifnoma","Xat","Retsept","Ro'yxat","Afisha","Qisqa ma'lumotnoma"] as $t)
                    <div class="flex items-center justify-center rounded-lg border border-teal-300 bg-teal-100 px-3 py-2.5 text-xs font-medium text-teal-900">{{ $t }}</div>
                @endforeach
            </div>
        </div>

        {{-- Metodik + Amaliy --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-cyan-300 bg-cyan-100 p-5">
                <h3 class="text-sm font-bold text-cyan-900 mb-3">BO'LAJAK O'QITUVCHI UCHUN METODIK AHAMIYATI</h3>
                <p class="text-xs text-cyan-800 leading-relaxed mb-3">Bo'lajak o'qituvchi PISA yondashuvini bilish orqali o'qish savodxonligini real hayot bilan bog'lashni o'rganadi. Bu uning darslarini amaliy, mazmunli va hayotiy qiladi.</p>
                <p class="text-xs font-semibold text-cyan-900 mb-2">Metodik ahamiyati quyidagilarda ko'rinadi:</p>
                <ul class="space-y-1">
                    @foreach (["o'quvchi matnni hayotiy vaziyatda qo'llashga o'rganadi","darsda turli matn turlaridan foydalaniladi","fanlararo integratsiya kuchayadi","o'quvchi savolga javobni matndan izlaydi","o'quvchi o'qigan ma'lumotiga tanqidiy yondashadi"] as $k)
                        <li class="flex items-start gap-1.5 text-xs text-cyan-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-cyan-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $k }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-sm font-bold text-slate-800 mb-3">AMALIY MISOLLAR — Hayotiy matn namunasi</h3>
                <div class="rounded-lg bg-amber-100 border border-amber-300 p-3 mb-3 text-xs text-amber-900 italic">
                    "E'lon: Shanba kuni soat 10:00 da maktab kutubxonasida 'Kitobxon bolalar' tanlovi bo'lib o'tadi. Ishtirokchilar o'zlari yoqtirgan kitob haqida 3 daqiqa davomida gapirib beradilar."
                </div>
                <p class="text-xs font-semibold text-slate-700 mb-2">Savollar:</p>
                <ol class="space-y-1">
                    @foreach (['Tanlov qayerda bo\'lib o\'tadi?','Tanlov qaysi kuni boshlanadi?','Ishtirokchi nima haqida gapirishi kerak?','Siz bu tanlovda qatnashsangiz, qaysi kitob haqida gapirar edingiz? Nega?',"E'londa yana qanday ma'lumot berilsa yaxshi bo'lardi?"] as $i => $s)
                        <li class="flex items-start gap-1.5 text-xs text-slate-700">
                            <span class="inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-cyan-100 text-cyan-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $s }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SAVOL-TOPSHIRIQLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"Funksional o'qish savodxonligi deganda nimani tushunasiz?"],
                    ['n'=>2,'q'=>"Boshlang'ich sinfda qaysi hayotiy matnlardan foydalanish zarurligini asoslang."],
                    ['n'=>3,'q'=>"E'lon, jadval yoki yo'riqnoma asosida 5 ta savol tuzing."],
                    ['n'=>4,'q'=>"O'quvchiga hayotiy vaziyat bering va shu vaziyatga mos matn tanlang."],
                    ['n'=>5,'q'=>"\"Matnni hayotda qo'llash\" mavzusida kichik topshiriq ishlab chiqing."],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-cyan-100 text-xs font-bold text-cyan-700">{{ $t['n'] }}</span>
                        <p class="text-xs text-slate-700 leading-relaxed">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rounded-2xl bg-gradient-to-r from-cyan-900 to-teal-700 p-5 text-white">
            <p class="text-xs font-semibold text-cyan-300 uppercase tracking-wide mb-2">Kutiladigan natija</p>
            <p class="text-sm leading-relaxed">Foydalanuvchi PISA yondashuvi orqali o'qish savodxonligining hayotiy mazmunini anglaydi. Boshlang'ich sinfda turli matn turlari bilan ishlash zarurligini tushunadi. O'quvchilarni real vaziyatlarda matndan o'rganish usullarini bilib oladi. Matn asosida turli darajadagi savollar tuzishni o'rganadi.</p>
            <p class="mt-3 text-xs text-cyan-300 italic">Eslatma: PISA yondashuvi o'qituvchini o'quvchini hayotga tayyorlashga yo'naltiradi, chunki bilim faqat darsda emas, hayotda foydali bo'lishi kerak!</p>
        </div>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('nazariya.show', 'pirls') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'matn-tushunish') }}" class="inline-flex items-center gap-2 rounded-xl bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-teal-700 transition-colors">
                Keyingi: Matnni tushunish
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
