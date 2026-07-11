@extends('layouts.app')

@section('title', "1-sinf uchun dars ishlanmalari — O'qish savodxonligi")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.dars-ishlanmalar._sidebar', ['activeSlug' => '1-sinf'])

    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="g1" width="32" height="32" patternUnits="userSpaceOnUse"><path d="M 32 0 L 0 0 0 32" fill="none" stroke="white" stroke-width="1"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#g1)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center text-white font-extrabold text-4xl shadow-sm">1</div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">1-sinf</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">Boshlang'ich savodxonlik</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">1-sinf uchun dars ishlanmalari</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">Matn hajmi: 4–8 gap &middot; 2 darajali savollar &middot; Og'zaki baholash</p>
                </div>
                <div class="hidden md:block shrink-0">
                    <img src="{{ asset('images/grades/1-sinf.jpg') }}"
                         alt="1-sinf o'quvchilari"
                         class="h-32 w-48 object-cover rounded-xl shadow-lg opacity-90 border-2 border-white/30">
                </div>
            </div>
        </div>

        {{-- Intro --}}
        <div class="mb-6 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <p class="text-slate-700 leading-relaxed text-sm">
                1-sinfda o'qish savodxonligini rivojlantirishning asosiy vazifasi — o'quvchida harf, tovush, bo'g'in, so'z va
                sodda gaplarni to'g'ri anglash, qisqa matnni tinglab tushunish, rasm asosida fikr bildirish va oddiy savollarga
                javob berish ko'nikmasini shakllantirishdir.
            </p>
            <p class="text-slate-700 leading-relaxed text-sm mt-3">
                Bu bosqichda o'quvchi hali murakkab matnlarni mustaqil tahlil qila olmaydi. Shuning uchun darslarda qisqa,
                sodda, rasmli, takroriy so'zlarga ega va hayotiy mazmundagi matnlardan foydalanish maqsadga muvofiq.
            </p>
        </div>

        {{-- 2-col: Matn tanlash + Dars maqsadi --}}
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
                        "matn hajmi 4–8 gapdan oshmasligi",
                        "gaplar qisqa va sodda bo'lishi",
                        "matnda bolaga tanish hayotiy vaziyat bo'lishi",
                        "rasm bilan qo'llab-quvvatlash imkoniyati bo'lishi",
                        "yangi so'zlar soni ko'p bo'lmasligi",
                        "matn tarbiyaviy mazmunga ega bo'lishi",
                        "qahramon, predmet yoki oddiy voqea aniq ifodalangan bo'lishi",
                    ] as $item)
                        <li class="flex items-start gap-2 text-sm text-slate-700">
                            <span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0"></span>{{ $item }}
                        </li>
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
                        "o'quvchilarni qisqa matnni tinglash va tushunishga o'rgatish",
                        "sodda savollarga javob berish ko'nikmasini shakllantirish",
                        "rasm va matn o'rtasidagi bog'lanishni anglatish",
                        "yangi so'zlarni to'g'ri talaffuz qilish",
                        "o'qishga qiziqish uyg'otish",
                        "matn asosida og'zaki fikr bildirishga o'rgatish",
                    ] as $item)
                        <li class="flex items-start gap-2 text-sm text-slate-700">
                            <span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-sky-400 shrink-0"></span>{{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Metodlar --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-4">
                <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">Tavsiya etiladigan metodlar</h2>
            </div>
            <div class="flex flex-wrap gap-2">
                @foreach (['"Rasmga qarab top"', '"Tingla va ayt"', '"Kim? Nima qildi?"', '"So\'z va rasmni moslashtir"', '"Matn detektivi"ning sodda shakli', '"Savol zanjiri"ning og\'zaki shakli', '"Men boshlayman, sen davom et"', '"Qahramonni top"'] as $m)
                    <span class="rounded-full bg-blue-50 border border-blue-200 px-3 py-1.5 text-xs font-semibold text-blue-700">{{ $m }}</span>
                @endforeach
            </div>
        </div>

        {{-- Qo'llash tartibi --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-4">
                <div class="h-8 w-8 rounded-lg bg-sky-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">Darsda qo'llash tartibi</h2>
            </div>
            <ol class="space-y-3">
                @foreach ([
                    "O'qituvchi matn mavzusiga mos rasm ko'rsatadi.",
                    "O'quvchilardan rasmda nimalar tasvirlangani so'raladi.",
                    "O'qituvchi qisqa matnni ifodali o'qib beradi.",
                    "O'quvchilar matnni tinglaydi.",
                    "Matndagi yangi so'zlar tushuntiriladi.",
                    "O'quvchilarga oddiy savollar beriladi.",
                    "Rasm va matn mazmuni bog'lanadi.",
                    "O'quvchilar matn asosida 1–2 gap aytadilar.",
                    "Dars yakunida kichik xulosa qilinadi.",
                ] as $i => $step)
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 h-6 w-6 shrink-0 rounded-full bg-blue-100 text-blue-700 text-xs font-bold flex items-center justify-center">{{ $i + 1 }}</span>
                        <span class="text-sm text-slate-700 leading-relaxed">{{ $step }}</span>
                    </li>
                @endforeach
            </ol>
        </div>

        {{-- Namunaviy matn --}}
        <div class="mb-5 rounded-2xl border-2 border-sky-200 bg-sky-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-sky-200 bg-sky-100">
                <svg class="h-5 w-5 text-sky-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                <h2 class="text-sm font-bold text-sky-900">Namunaviy matn</h2>
                <span class="ml-auto rounded-full bg-sky-200 px-2.5 py-0.5 text-xs font-semibold text-sky-800">~35 so'z</span>
            </div>
            <div class="px-6 py-5">
                <h3 class="text-base font-bold text-slate-800 mb-3">"Mehribon bola"</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Ali maktabga ketayotgan edi. Yo'lda kichik mushukchani ko'rib qoldi. Mushukcha sovuqdan titrardi.
                    Ali uni ehtiyotlab ko'tardi va uyining yonidagi issiq joyga qo'ydi. Mushukcha miyovlab, unga qaradi.
                </p>
            </div>
        </div>

        {{-- Savollar --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                <svg class="h-5 w-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                <h2 class="text-sm font-bold text-slate-800">Savollar</h2>
            </div>
            <div class="p-5 space-y-4">
                @foreach ([
                    ['daraja' => '1-daraja', 'title' => 'Aniq axborotni topish', 'bg' => 'bg-emerald-100', 'text' => 'text-emerald-800', 'border' => 'border-emerald-200',
                     'questions' => ["Ali qayerga ketayotgan edi?", "Ali yo'lda nimani ko'rib qoldi?", "Mushukcha qanday holatda edi?"]],
                    ['daraja' => '2-daraja', 'title' => "Xulosa va fikr bildirish", 'bg' => 'bg-sky-100', 'text' => 'text-sky-800', 'border' => 'border-sky-200',
                     'questions' => ["Ali mushukchaga qanday yordam berdi?", "Ali qanday bola ekan?"]],
                ] as $level)
                    <div class="rounded-xl border {{ $level['border'] }} overflow-hidden">
                        <div class="{{ $level['bg'] }} px-4 py-2.5">
                            <span class="{{ $level['text'] }} text-xs font-bold">{{ $level['daraja'] }}: {{ $level['title'] }}</span>
                        </div>
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

        {{-- Baholash --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-4">
                <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">Baholash</h2>
            </div>
            <p class="text-sm text-slate-600 mb-3">1-sinfda baholash og'zaki rag'batlantirish va kuzatish asosida amalga oshiriladi. O'qituvchi quyidagi iboralardan foydalanishi mumkin:</p>
            <ul class="space-y-2">
                @foreach ([
                    '"Javobing to\'g\'ri, sen matnni diqqat bilan tinglabsan."',
                    '"Ali qanday bola ekanini yaxshi aytding."',
                    '"Endi javobingni yana bitta gap bilan to\'ldirib ko\'r."',
                ] as $rag)
                    <li class="flex items-start gap-2.5 text-sm text-slate-700">
                        <span class="mt-1 h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0"></span>{{ $rag }}
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- 2-col: Uyga vazifa + Natija --}}
        <div class="grid grid-cols-2 gap-5 mb-5">
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-sky-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Uyga vazifa</h2>
                </div>
                <p class="text-xs text-slate-500 mb-3">Ota-onasi bilan kichik hikoya o'qish yoki tinglash, keyin:</p>
                <ol class="space-y-2">
                    @foreach (["Hikoyada kim bor edi?", "U nima qildi?", "Sizga qaysi joyi yoqdi?", "Hikoya asosida bitta rasm chizing."] as $i => $item)
                        <li class="flex items-start gap-2.5 text-sm text-slate-700">
                            <span class="h-5 w-5 shrink-0 rounded-full bg-sky-100 text-sky-700 text-xs font-bold flex items-center justify-center mt-0.5">{{ $i + 1 }}</span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Kutiladigan natija</h2>
                </div>
                <p class="text-sm text-slate-700 leading-relaxed">
                    O'quvchi qisqa matnni tinglab tushunadi, sodda savollarga javob beradi, rasm va matn o'rtasidagi
                    bog'lanishni anglaydi, qahramon harakatiga oddiy munosabat bildiradi. Bo'lajak o'qituvchi esa
                    1-sinfda o'qish savodxonligini rivojlantirishning boshlang'ich metodik usullarini o'zlashtiradi.
                </p>
            </div>
        </div>

        @include('public.dars-ishlanmalar._files', ['grade' => '1-sinf'])

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('dars-ishlanmalar.index') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                Barcha sinflar
            </a>
            <span class="flex-1"></span>
            <a href="{{ route('dars-ishlanmalar.show', '2-sinf') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                2-sinf
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
