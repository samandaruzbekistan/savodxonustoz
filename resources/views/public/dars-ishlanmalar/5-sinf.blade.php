@extends('layouts.app')

@section('title', "5-sinf uchun dars ishlanmalari — O'qish savodxonligi")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.dars-ishlanmalar._sidebar', ['activeSlug' => '5-sinf'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="g5" width="36" height="36" patternUnits="userSpaceOnUse"><polygon points="18,2 34,34 2,34" fill="none" stroke="white" stroke-width="1"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#g5)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center text-white font-extrabold text-4xl">5</div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">5-sinf</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">Tanqidiy o'qish</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">5-sinf uchun dars ishlanmalari</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">Matn hajmi: 350–500 so'z &middot; 4+ darajali savollar &middot; Argumentatsiya</p>
                </div>
                <div class="hidden md:block shrink-0">
                    <img src="{{ asset('images/grades/5-sinf.jpg') }}" alt="5-sinf" class="h-32 w-48 object-cover rounded-xl shadow-lg opacity-90 border-2 border-white/30">
                </div>
            </div>
        </div>

        <div class="mb-6 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <p class="text-slate-700 leading-relaxed text-sm">
                5-sinfda o'qish savodxonligi yangi bosqichga ko'tariladi: o'quvchilar muallif pozitsiyasini aniqlash, matnni
                tanqidiy baholash va o'z fikrlarini argumentlar bilan asoslashni o'rganadi. Turli janr va uslubdagi matnlar
                bilan ishlash ko'nikmasi rivojlanadi.
            </p>
            <p class="text-slate-700 leading-relaxed text-sm mt-3">
                Bu bosqichda badiiy matn bilan birga publitsistik va ilmiy-ommabop matnlar ham qo'llaniladi. O'quvchilar ikki
                matnni solishtirish, ziddiyatli fikrlarni tahlil qilish va o'z nuqtai nazarini mantiqiy tushuntirish ko'nikmalarini
                egallaydi.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-5 mb-5">
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Matn tanlash mezonlari</h2>
                </div>
                <ul class="space-y-2">
                    @foreach (["matn hajmi 350–500 so'z bo'lishi","muallif pozitsiyasi aniq ifodalangan bo'lishi","matnda ziddiyatli yoki muhokamali fikr bo'lishi","tanqidiy baholash imkoniyati bo'lishi","ikki nuqtai nazar ifodalangan bo'lishi","PIRLS yuqori darajasi uchun mos bo'lishi"] as $i)
                        <li class="flex items-start gap-2 text-sm text-slate-700"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0"></span>{{ $i }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Dars maqsadi</h2>
                </div>
                <ul class="space-y-2">
                    @foreach (["muallif pozitsiyasini matndan topish","tanqidiy fikr bildirish va asoslash","ikki matn yoki fikrni solishtirish","yashirin ma'noni aniqlash va izohlash","argumentatsiya ko'nikmalarini rivojlantirish","o'z fikrini 3–5 gapli qisqa insho shaklida yozish"] as $i)
                        <li class="flex items-start gap-2 text-sm text-slate-700"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0"></span>{{ $i }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-4">
                <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">Tavsiya etiladigan metodlar</h2>
            </div>
            <div class="flex flex-wrap gap-2">
                @foreach (['"Tanqidiy ko\'z bilan o\'qi"', '"Muallif pozitsiyasi"', '"Debat"', '"Ikki tomonlama jurnal"', '"Fikr va dalil"', '"Solishtirma tahlil"', '"Munozara o\'yini"', '"Argumentatsiya zanjiri"', '"Nazorat savollari"'] as $m)
                    <span class="rounded-full bg-blue-50 border border-blue-200 px-3 py-1.5 text-xs font-semibold text-blue-700">{{ $m }}</span>
                @endforeach
            </div>
        </div>

        <div class="mb-5 rounded-2xl border-2 border-sky-200 bg-sky-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-sky-200 bg-sky-100">
                <svg class="h-5 w-5 text-sky-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                <h2 class="text-sm font-bold text-sky-900">Namunaviy matn</h2>
                <span class="ml-auto rounded-full bg-sky-200 px-2.5 py-0.5 text-xs font-semibold text-sky-800">~200 so'z</span>
            </div>
            <div class="px-6 py-5">
                <h3 class="text-base font-bold text-slate-800 mb-3">"Kitob yoki ekran?"</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Bugungi kunda bolalar kuniga o'rtacha 4–5 soat ekran oldida o'tkazadi. Bu raqam yildan yilga oshib bormoqda.
                    Ba'zi olimlar ekran vaqtining oshishi o'qish ko'nikmasini zaiflashtiradi, deyishadi. Ularning fikricha,
                    kitob o'qish miyani faolroq ishlashga majbur qiladi: xayol yuritish, voqeani tasavvur qilish va fikr
                    izchilligini saqlash kerak bo'ladi. Ekranda esa tez-tez almashuvchi tasvir va qisqa videolar diqqatni
                    uzoq ushlab turishga imkon bermaydi.
                </p>
                <p class="text-sm text-slate-700 leading-relaxed mt-3">
                    Ammo boshqa mutaxassislar raqamli vositalar ham o'qishga ijobiy ta'sir qilishi mumkin, deyishadi.
                    Audio kitoblar, interaktiv matnlar va elektron kitoblar ko'plab bolalarni kitobga jalb qilmoqda.
                    Muhimi — nima o'qilishida, qancha o'qilishida emas. O'z-o'zini nazorat qilish ko'nikmasiga ega bola
                    har qanday formatda chuqur o'qiy oladi.
                </p>
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                <h2 class="text-sm font-bold text-slate-800">Savollar</h2>
            </div>
            <div class="p-5 space-y-4">
                @foreach ([
                    ['daraja' => '1-daraja', 'title' => 'Aniq axborotni topish', 'bg' => 'bg-emerald-100', 'text' => 'text-emerald-800', 'border' => 'border-emerald-200',
                     'questions' => ["Bolalar kuniga o'rtacha qancha vaqt ekran oldida o'tkazadi?","Olimlar kitob o'qishning qanday afzalliklarini sanashadi?"]],
                    ['daraja' => '2-daraja', 'title' => 'Xulosa va tahlil', 'bg' => 'bg-sky-100', 'text' => 'text-sky-800', 'border' => 'border-sky-200',
                     'questions' => ["Ikkala toifadagi mutaxassislar qaysi masalada kelishmaydi?","Muallif oxirgi gapda nima demoqchi?"]],
                    ['daraja' => '3-daraja', 'title' => 'Talqin va muallif pozitsiyasi', 'bg' => 'bg-amber-100', 'text' => 'text-amber-800', 'border' => 'border-amber-200',
                     'questions' => ["Muallif kitob yoki ekranning qay birini ma'qullaydi? Matndan dalil keltiring.","'O'z-o'zini nazorat qilish' nima degani va nima uchun muhim?"]],
                    ['daraja' => '4-daraja', 'title' => 'Baholash va argumentatsiya', 'bg' => 'bg-rose-100', 'text' => 'text-rose-800', 'border' => 'border-rose-200',
                     'questions' => ["Siz qaysi fikrga qo'shilasiz: kitob yaxshimi yoki ekran? 3 ta dalil keltiring.","Matnda keltirilgan fikrlardan qaysi biri sizni ko'proq ishontirdi va nima uchun?"]],
                ] as $level)
                    <div class="rounded-xl border {{ $level['border'] }} overflow-hidden">
                        <div class="{{ $level['bg'] }} px-4 py-2.5"><span class="{{ $level['text'] }} text-xs font-bold">{{ $level['daraja'] }}: {{ $level['title'] }}</span></div>
                        <ul class="divide-y divide-slate-100 bg-white">
                            @foreach ($level['questions'] as $qi => $q)
                                <li class="flex items-start gap-3 px-4 py-3">
                                    <span class="{{ $level['bg'] }} {{ $level['text'] }} h-5 w-5 rounded-full text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">{{ $qi + 1 }}</span>
                                    <span class="text-sm text-slate-700">{{ $q }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        @include('public.dars-ishlanmalar._files', ['grade' => '5-sinf'])

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('dars-ishlanmalar.show', '4-sinf') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                4-sinf
            </a>
            <a href="{{ route('dars-ishlanmalar.index') }}" class="flex-1 text-center text-xs text-slate-500 hover:text-blue-600 transition-colors">Barcha sinflar</a>
        </div>

    </div>
</div>
@endsection
