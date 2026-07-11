@extends('layouts.app')

@section('title', "2-sinf uchun dars ishlanmalari — O'qish savodxonligi")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.dars-ishlanmalar._sidebar', ['activeSlug' => '2-sinf'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="g2" width="32" height="32" patternUnits="userSpaceOnUse"><path d="M 32 0 L 0 0 0 32" fill="none" stroke="white" stroke-width="1"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#g2)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center text-white font-extrabold text-4xl">2</div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">2-sinf</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">Matnni tushunish</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">2-sinf uchun dars ishlanmalari</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">Matn hajmi: 80–120 so'z &middot; 3 darajali savollar &middot; Voqealar ketma-ketligi</p>
                </div>
                <div class="hidden md:block shrink-0">
                    <img src="{{ asset('images/grades/2-sinf.jpg') }}" alt="2-sinf" class="h-32 w-48 object-cover rounded-xl shadow-lg opacity-90 border-2 border-white/30">
                </div>
            </div>
        </div>

        <div class="mb-6 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <p class="text-slate-700 leading-relaxed text-sm">
                2-sinfda o'qish savodxonligini rivojlantirish jarayoni matnni to'g'ri o'qish, voqealar ketma-ketligini tushunish,
                qahramonlarni aniqlash, oddiy xulosa chiqarish va matndan kerakli ma'lumotni topish ko'nikmalarini shakllantirishga qaratiladi.
            </p>
            <p class="text-slate-700 leading-relaxed text-sm mt-3">
                Bu bosqichda o'quvchilar qisqa badiiy matnlar, ertaklar, bolalar hayotiga oid hikoyalar va sodda axborot matnlari
                bilan ishlashlari mumkin.
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
                    @foreach ([
                        "matn hajmi 80–120 so'z atrofida bo'lishi",
                        "voqea aniq va izchil berilishi",
                        "qahramon harakati tushunarli bo'lishi",
                        "tarbiyaviy g'oya sezilib turishi",
                        "yangi so'zlar 5–7 tadan oshmasligi",
                        "matn asosida savol, rasm, jadval yoki ketma-ketlik topshiriqlari tuzish mumkin bo'lishi",
                    ] as $item)
                        <li class="flex items-start gap-2 text-sm text-slate-700"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0"></span>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-sky-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Dars maqsadi</h2>
                </div>
                <ul class="space-y-2">
                    @foreach ([
                        "matnni ongli va ravon o'qishga o'rgatish",
                        "voqealar ketma-ketligini aniqlash",
                        "qahramon xatti-harakatini tushunish",
                        "sodda xulosa chiqarish",
                        "matndan aniq javob topish",
                        "yangi so'zlarni nutqda qo'llash",
                    ] as $item)
                        <li class="flex items-start gap-2 text-sm text-slate-700"><span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-sky-400 shrink-0"></span>{{ $item }}</li>
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
                @foreach (['"Matn detektivi"', '"Voqealar zanjiri"', '"Savol zanjiri"', '"Qahramonni top"', '"Dalil top"ning sodda shakli', '"Rasmli reja"', '"Men o\'qidim — men tushundim"', '"So\'z xaritasi"'] as $m)
                    <span class="rounded-full bg-blue-50 border border-blue-200 px-3 py-1.5 text-xs font-semibold text-blue-700">{{ $m }}</span>
                @endforeach
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-4">
                <div class="h-8 w-8 rounded-lg bg-sky-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">Darsda qo'llash tartibi</h2>
            </div>
            <ol class="space-y-3">
                @foreach ([
                    "O'qituvchi matn mavzusini e'lon qiladi.",
                    "Sarlavha asosida o'quvchilardan taxmin so'raladi.",
                    "Yangi so'zlar tushuntiriladi.",
                    "Matn o'qituvchi tomonidan namunali o'qiladi.",
                    "O'quvchilar matnni navbat bilan o'qiydilar.",
                    "Voqealar ketma-ketligi aniqlanadi.",
                    '"Matn detektivi" metodi orqali o\'quvchilar matndan aniq javob topadilar.',
                    '"Dalil top" orqali javob matndan asoslanadi.',
                    "Dars yakunida xulosa chiqariladi.",
                ] as $i => $step)
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 h-6 w-6 shrink-0 rounded-full bg-blue-100 text-blue-700 text-xs font-bold flex items-center justify-center">{{ $i + 1 }}</span>
                        <span class="text-sm text-slate-700 leading-relaxed">{{ $step }}</span>
                    </li>
                @endforeach
            </ol>
        </div>

        <div class="mb-5 rounded-2xl border-2 border-sky-200 bg-sky-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-sky-200 bg-sky-100">
                <svg class="h-5 w-5 text-sky-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                <h2 class="text-sm font-bold text-sky-900">Namunaviy matn</h2>
                <span class="ml-auto rounded-full bg-sky-200 px-2.5 py-0.5 text-xs font-semibold text-sky-800">~80 so'z</span>
            </div>
            <div class="px-6 py-5">
                <h3 class="text-base font-bold text-slate-800 mb-3">"Yo'qolgan daftar"</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Nodira maktabga kelgach, daftarini topa olmadi. U juda xafa bo'ldi. Sinfdoshi Mohira uning yoniga kelib:
                    "Xafa bo'lma, men senga varaqlarimdan beraman", dedi. Darsdan keyin Nodira daftarini sumkasining boshqa
                    bo'limidan topib oldi. U Mohiraga rahmat aytdi.
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
                     'questions' => ["Nodira nimani topa olmadi?", "Nodira o'zini qanday his qildi?", "Mohira Nodiraga qanday yordam bermoqchi bo'ldi?"]],
                    ['daraja' => '2-daraja', 'title' => 'Voqealar va xulosa', 'bg' => 'bg-sky-100', 'text' => 'text-sky-800', 'border' => 'border-sky-200',
                     'questions' => ["Nodira daftarini qayerdan topdi?", "Mohiraning harakati uning qanday qiz ekanini ko'rsatadi?"]],
                    ['daraja' => '3-daraja', 'title' => 'Fikr bildirish', 'bg' => 'bg-amber-100', 'text' => 'text-amber-800', 'border' => 'border-amber-200',
                     'questions' => ["Bu hikoyadan qanday xulosa chiqarish mumkin?"]],
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

        <div class="grid grid-cols-2 gap-5 mb-5">
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-sky-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                    </div>
                    <div>
                        <h2 class="text-sm font-bold text-slate-800">Uyga vazifa</h2>
                        <p class="text-xs text-slate-500">"Do'stlik" mavzusida jadval to'ldirish</p>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-xs border border-slate-200 rounded-lg overflow-hidden">
                        <thead><tr class="bg-blue-50">
                            <th class="text-left px-3 py-2 text-slate-600">Qahramon</th>
                            <th class="text-left px-3 py-2 text-slate-600">Nima qildi?</th>
                            <th class="text-left px-3 py-2 text-slate-600">Natija</th>
                        </tr></thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr><td class="px-3 py-2 text-slate-500 italic">Nodira</td><td class="px-3 py-2"></td><td class="px-3 py-2"></td></tr>
                            <tr><td class="px-3 py-2 text-slate-500 italic">Mohira</td><td class="px-3 py-2"></td><td class="px-3 py-2"></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Kutiladigan natija</h2>
                </div>
                <p class="text-sm text-slate-700 leading-relaxed">
                    O'quvchi matnni o'qiydi, voqealar ketma-ketligini tushunadi, qahramon harakatiga sodda baho beradi va
                    xulosa chiqaradi. Bo'lajak o'qituvchi esa 2-sinfda o'qish savodxonligini rivojlantirishga qaratilgan
                    savollar va metodlarni darsga kiritishni o'rganadi.
                </p>
            </div>
        </div>

        @include('public.dars-ishlanmalar._files', ['grade' => '2-sinf'])

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('dars-ishlanmalar.show', '1-sinf') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                1-sinf
            </a>
            <a href="{{ route('dars-ishlanmalar.index') }}" class="flex-1 text-center text-xs text-slate-500 hover:text-blue-600 transition-colors">Barcha sinflar</a>
            <a href="{{ route('dars-ishlanmalar.show', '3-sinf') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                3-sinf
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
