@extends('layouts.app')

@section('title', "3-sinf uchun dars ishlanmalari — O'qish savodxonligi")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.dars-ishlanmalar._sidebar', ['activeSlug' => '3-sinf'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="g3" width="30" height="30" patternUnits="userSpaceOnUse"><line x1="0" y1="15" x2="30" y2="15" stroke="white" stroke-width="1"/><line x1="15" y1="0" x2="15" y2="30" stroke="white" stroke-width="1"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#g3)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center text-white font-extrabold text-4xl">3</div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">3-sinf</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">Chuqurroq tahlil</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">3-sinf uchun dars ishlanmalari</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">Matn hajmi: 150–250 so'z &middot; 3 darajali savollar &middot; Matn xaritasi</p>
                </div>
                <div class="hidden md:block shrink-0">
                    <img src="{{ asset('images/grades/3-sinf.jpg') }}" alt="3-sinf" class="h-32 w-48 object-cover rounded-xl shadow-lg opacity-90 border-2 border-white/30">
                </div>
            </div>
        </div>

        <div class="mb-6 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <p class="text-slate-700 leading-relaxed text-sm">
                3-sinfda o'quvchilar matnni nafaqat o'qish, balki uni tahlil qilishni o'rganadi. Qahramon kimligini, nima qilganini
                va nima uchun bunday qilganini tushuntirish ko'nikmalari rivojlanadi. O'quvchilar asosiy g'oyani topish va
                muallif nima aytmoqchi bo'lganini tushunishga o'rgana boshlaydi.
            </p>
            <p class="text-slate-700 leading-relaxed text-sm mt-3">
                Bu bosqichda badiiy va axborot matnlari muvozanatli qo'llaniladi. O'quvchilar matn xaritasini tuzish,
                KVL jadvalini to'ldirish va qahramon harakatlarini solishtirish kabi faol o'qish strategiyalarini o'rganadi.
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
                        "matn hajmi 150–250 so'z atrofida bo'lishi",
                        "matnda qahramon va aniq voqea bo'lishi",
                        "qahramon muammosi va yechimi ko'rsatilishi",
                        "asosiy g'oyani topish imkoniyati bo'lishi",
                        "3 darajada savol tuzish mumkin bo'lishi",
                        "axborot matni uchun mavzu aniq va qiziqarli bo'lishi",
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
                        "matndan aniq axborot va qahramon harakatini topish",
                        "asosiy g'oyani bir gapda ifodalash",
                        "qahramon muammosi va yechimini tushuntirish",
                        "matndan xulosa chiqarishni o'rganish",
                        "muallif nima aytmoqchi ekanini taxmin qilish",
                        "ijodiy topshiriqni mustaqil bajarish",
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
                @foreach (['"Matn detektivi"', '"Dalil top"', '"Savol zanjiri"', '"Qahramon kundaligi"', '"Sabab va natija"', '"Matn xaritasi"', '"Besh barmoq xulosasi"', '"PIRLS savoli konstruktori"ning boshlang\'ich shakli'] as $m)
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
                    "Sarlavhani o'qib, matn haqida taxmin qilinadi.",
                    "Yangi so'zlar lug'at ishi orqali tushuntiriladi.",
                    "Matn o'qituvchi tomonidan namunali o'qiladi.",
                    "O'quvchilar matnni navbat bilan o'qiydilar.",
                    '"Matn detektivi" metodi: o\'quvchilar matndan aniq javob qidiradilar.',
                    '"Sabab va natija" jadvali to\'ldiriladi.',
                    "Qahramon motivatsiyasi muhokama qilinadi.",
                    '"Besh barmoq xulosasi" orqali matnning asosiy g\'oyasi aniqlanadi.',
                    "Uyga vazifa beriladi va ko'tarilgan savollar yakun qilinadi.",
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
                <span class="ml-auto rounded-full bg-sky-200 px-2.5 py-0.5 text-xs font-semibold text-sky-800">~120 so'z</span>
            </div>
            <div class="px-6 py-5">
                <h3 class="text-base font-bold text-slate-800 mb-3">"Kichik ixtirochi"</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Sardor eski qutilar, qog'ozlar va plastik qopqoqlardan kichik shamol tegirmoni yasadi. U buni maktabda
                    o'qigan "energiya" haqidagi maqoladan ilhom oldi. Dastlab tegirmon aylanmadi. Sardor sabr bilan qanotlarni
                    rostlab, yon tomonlarini tuzatdi. Nihoyat, tegirmon shabadada sekin-sekin aylanib ketdi. Otasi bu ishni
                    ko'rib, juda xursand bo'ldi. "Aql bilan harakat qilsang, keraksiz narsadan ham foydali narsa yasash
                    mumkin", dedi. Sardor esa endi yanada kattaroq ixtiro qilish haqida o'ylay boshladi.
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
                     'questions' => ["Sardor nimalardan tegirmon yasadi?", "Tegirmon dastlab nima uchun aylanmadi?", "Otasi bu ishni ko'rib qanday munosabat bildirdi?"]],
                    ['daraja' => '2-daraja', 'title' => 'Xulosa chiqarish', 'bg' => 'bg-sky-100', 'text' => 'text-sky-800', 'border' => 'border-sky-200',
                     'questions' => ["Sardor qayerdan ilhom oldi va bu unga qanday yordam berdi?", "Sardor nimani muvaffaqiyatga erishgach his qildi, deb o'ylaysiz?"]],
                    ['daraja' => '3-daraja', 'title' => "G'oya va ijodiy fikr", 'bg' => 'bg-amber-100', 'text' => 'text-amber-800', 'border' => 'border-amber-200',
                     'questions' => ["Otasining gapi asosiy g'oyani ifodalaydi. Bu g'oya nima?"]],
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
                    <h2 class="text-sm font-bold text-slate-800">Uyga vazifa — "Men ham ixtirochiman"</h2>
                </div>
                <ul class="space-y-2">
                    @foreach ([
                        "Uyda keraksiz predmetlardan biror foydali narsa yasang.",
                        "Yashagan narsangizni rasm orqali tasvirlab keling.",
                        "Nima ishlatganingiz va qanday qilganingizni 3–5 gapda yozing.",
                        "Keyingi darsda o'z ixtiroyingiz haqida 1 daqiqa gapirib bering.",
                    ] as $item)
                        <li class="flex items-start gap-2 text-sm text-slate-700">
                            <span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-sky-400 shrink-0"></span>{{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Kutiladigan natija</h2>
                </div>
                <p class="text-sm text-slate-700 leading-relaxed">
                    O'quvchi matnni o'qib, qahramon harakatini tushunadi, asosiy g'oyani topadi va ijodiy topshiriqni mustaqil bajaradi.
                    Bo'lajak o'qituvchi esa 3-sinfda matn tahlilini qanday tashkil qilishni amaliy o'rganadi.
                </p>
            </div>
        </div>

        @include('public.dars-ishlanmalar._files', ['grade' => '3-sinf'])

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('dars-ishlanmalar.show', '2-sinf') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                2-sinf
            </a>
            <a href="{{ route('dars-ishlanmalar.index') }}" class="flex-1 text-center text-xs text-slate-500 hover:text-blue-600 transition-colors">Barcha sinflar</a>
            <a href="{{ route('dars-ishlanmalar.show', '4-sinf') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                4-sinf
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
