@extends('layouts.app')

@section('title', "4-sinf uchun dars ishlanmalari — O'qish savodxonligi")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.dars-ishlanmalar._sidebar', ['activeSlug' => '4-sinf'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="grid4" width="32" height="32" patternUnits="userSpaceOnUse">
                            <path d="M 32 0 L 0 0 0 32" fill="none" stroke="white" stroke-width="1"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#grid4)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center text-white font-extrabold text-4xl shadow-sm">4</div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">4-sinf</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">PIRLS tayyorligi</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">4-sinf uchun dars ishlanmalari</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">Matn hajmi: 250–350 so'z &middot; 4 darajali savollar &middot; 0–3 ballik baholash</p>
                </div>
                <div class="hidden md:block shrink-0">
                    <img src="{{ asset('images/grades/4-sinf.jpg') }}" alt="4-sinf" class="h-32 w-48 object-cover rounded-xl shadow-lg opacity-90 border-2 border-white/30">
                </div>
                <div class="hidden shrink-0">
                    @foreach ([['Talqin', '#fef3c7', '#92400e'], ['Dalil', '#fef3c7', '#92400e'], ['PIRLS', '#fef3c7', '#92400e']] as [$t, $bg, $tc])
                        <span class="rounded-lg px-3 py-1 text-xs font-semibold" style="background: {{ $bg }}; color: {{ $tc }};">{{ $t }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Intro text --}}
        <div class="mb-6 rounded-2xl border border-amber-200 bg-amber-50 px-6 py-5">
            <p class="text-slate-700 leading-relaxed text-sm">
                4-sinfda o'qish savodxonligini rivojlantirish PIRLS talablariga yaqinlashadi. Bu bosqichda o'quvchilar nafaqat
                matnni o'qiydi va tushunadi, balki undagi yashirin ma'noni anglaydi, muallif fikrini talqin qiladi, matnning
                asosiy g'oyasini aniqlaydi, ikki xil ma'lumotni solishtiradi va o'z fikrini dalil bilan asoslaydi.
            </p>
            <p class="text-slate-700 leading-relaxed text-sm mt-3">
                4-sinf darslarida badiiy va axborot matnlari muvozanatli qo'llanishi kerak. O'quvchilar ochiq javobli savollar,
                jadval to'ldirish, matndan dalil topish, qahramon harakatini baholash va matn asosida yozma fikr bildirishga o'rgatiladi.
            </p>
        </div>

        {{-- Matn tanlash + Dars maqsadi --}}
        <div class="grid grid-cols-2 gap-5 mb-5">
            {{-- Matn tanlash --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-amber-100 flex items-center justify-center">
                        <svg class="h-4.5 w-4.5 text-amber-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Matn tanlash mezonlari</h2>
                </div>
                <ul class="space-y-2">
                    @foreach ([
                        "matn hajmi 250–350 so'z atrofida bo'lishi",
                        "matnda aniq va yashirin ma'no bo'lishi",
                        "savollarni 4 darajada tuzish imkoniyati bo'lishi",
                        "qahramon, voqea, muammo, yechim yoki axborot aniq ifodalangan bo'lishi",
                        "matn asosida baholash va dalillash topshiriqlari tuzish mumkin bo'lishi",
                        "PIRLS tipidagi savollar uchun mos bo'lishi",
                    ] as $item)
                        <li class="flex items-start gap-2 text-sm text-slate-700">
                            <span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-amber-400 shrink-0"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Dars maqsadi --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                        <svg class="h-4.5 w-4.5 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Dars maqsadi</h2>
                </div>
                <ul class="space-y-2">
                    @foreach ([
                        "matndan aniq axborotni topish",
                        "xulosa chiqarish",
                        "matn g'oyasini talqin qilish",
                        "qahramon harakatiga baho berish",
                        "o'z fikrini matndan dalil bilan asoslash",
                        "ochiq javobli savollarga to'liq javob yozish",
                        "PIRLS tipidagi topshiriqlarni bajarish",
                    ] as $item)
                        <li class="flex items-start gap-2 text-sm text-slate-700">
                            <span class="mt-1.5 h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Tavsiya etiladigan metodlar --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-4">
                <div class="h-8 w-8 rounded-lg bg-violet-100 flex items-center justify-center">
                    <svg class="h-4.5 w-4.5 text-violet-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/>
                    </svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">Tavsiya etiladigan metodlar</h2>
            </div>
            <div class="flex flex-wrap gap-2">
                @foreach ([
                    '"PIRLS savoli konstruktori"',
                    '"Dalil top"',
                    '"Matn detektivi"',
                    '"Qahramon kundaligi"',
                    '"Ikki fikr — bir dalil"',
                    '"Muallifga savol"',
                    '"Xulosa xaritasi"',
                    '"Baholayman va asoslayman"',
                    '"Savol zanjiri"',
                ] as $m)
                    <span class="rounded-full bg-violet-50 border border-violet-200 px-3 py-1.5 text-xs font-semibold text-violet-700">{{ $m }}</span>
                @endforeach
            </div>
        </div>

        {{-- Darsda qo'llash tartibi --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-4">
                <div class="h-8 w-8 rounded-lg bg-emerald-100 flex items-center justify-center">
                    <svg class="h-4.5 w-4.5 text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                    </svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">Darsda qo'llash tartibi</h2>
            </div>
            <ol class="space-y-3">
                @foreach ([
                    "O'qituvchi matn mavzusini e'lon qiladi.",
                    "O'quvchilar sarlavha asosida taxmin qiladilar.",
                    "Matn mustaqil o'qiladi.",
                    "O'quvchilar matndan muhim joylarni belgilaydilar.",
                    "Savollar 4 darajada beriladi: aniq axborot, xulosa, talqin, baholash.",
                    "O'quvchilar javoblarini matndan dalil bilan asoslaydilar.",
                    "Ochiq javoblar 0–3 ballik mezon asosida baholanadi.",
                    "O'quvchilar o'z javoblarini qayta ko'rib chiqadilar.",
                    "Yakunda \"Men bugun nimani tushundim?\" refleksiyasi o'tkaziladi.",
                ] as $i => $step)
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 h-6 w-6 shrink-0 rounded-full bg-amber-100 text-amber-700 text-xs font-bold flex items-center justify-center">{{ $i + 1 }}</span>
                        <span class="text-sm text-slate-700 leading-relaxed">{{ $step }}</span>
                    </li>
                @endforeach
            </ol>
        </div>

        {{-- Namunaviy matn --}}
        <div class="mb-5 rounded-2xl border-2 border-amber-200 bg-amber-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-amber-200 bg-amber-100">
                <svg class="h-5 w-5 text-amber-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                </svg>
                <h2 class="text-sm font-bold text-amber-900">Namunaviy matn</h2>
                <span class="ml-auto rounded-full bg-amber-200 px-2.5 py-0.5 text-xs font-semibold text-amber-800">~120 so'z</span>
            </div>
            <div class="px-6 py-5">
                <h3 class="text-base font-bold text-slate-800 mb-3">"Kutubxonadagi kashfiyot"</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Madina maktab kutubxonasiga tez-tez borardi. Bir kuni u eski javonda chang bosib yotgan kitobni ko'rib qoldi.
                    Kitobning muqovasi eskirgan, sahifalari sarg'aygan edi. Madina uni ochib qarasa, unda qadimiy shaharlar,
                    olimlar va sayohatchilar haqida qiziqarli hikoyalar bor ekan. U kitobni uyiga olib ketdi va har kuni bir
                    bo'limdan o'qiy boshladi. Bir hafta o'tgach, Madina sinfdoshlariga o'qiganlari haqida gapirib berdi.
                    Shundan keyin sinfdagi boshqa bolalar ham kutubxonadan kitob olishga qiziqa boshladilar.
                    O'qituvchi Madinaga qarab: "Ba'zan bitta kitob butun sinfda yangi qiziqish uyg'otadi", dedi.
                </p>
            </div>
        </div>

        {{-- Savollar --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                <svg class="h-5 w-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                </svg>
                <h2 class="text-sm font-bold text-slate-800">Savollar</h2>
            </div>
            <div class="p-5 space-y-5">
                @foreach ([
                    ['daraja' => '1-daraja', 'title' => 'Aniq axborotni topish', 'bg' => 'bg-emerald-100', 'text' => 'text-emerald-800', 'border' => 'border-emerald-200',
                     'questions' => [
                         'Madina qayerga tez-tez borardi?',
                         'U eski kitobni qayerdan topdi?',
                         'Kitobda nimalar haqida hikoyalar bor edi?',
                     ]],
                    ['daraja' => '2-daraja', 'title' => 'Xulosa chiqarish', 'bg' => 'bg-sky-100', 'text' => 'text-sky-800', 'border' => 'border-sky-200',
                     'questions' => [
                         'Nima uchun Madina kitobni uyiga olib ketdi?',
                         'Madinaning sinfdoshlariga gapirib berishi qanday natija berdi?',
                     ]],
                    ['daraja' => '3-daraja', 'title' => 'Talqin qilish', 'bg' => 'bg-amber-100', 'text' => 'text-amber-800', 'border' => 'border-amber-200',
                     'questions' => [
                         'O\'qituvchining "Ba\'zan bitta kitob butun sinfda yangi qiziqish uyg\'otadi" degan gapini qanday tushunasiz?',
                         'Matnning asosiy g\'oyasi nima?',
                     ]],
                    ['daraja' => '4-daraja', 'title' => 'Baholash va asoslash', 'bg' => 'bg-rose-100', 'text' => 'text-rose-800', 'border' => 'border-rose-200',
                     'questions' => [
                         'Siz Madinaning ishini foydali deb hisoblaysizmi? Javobingizni matndan dalil bilan asoslang.',
                         'Sizningcha, sinfda kitobxonlikni oshirish uchun yana qanday ishlar qilish mumkin?',
                     ]],
                ] as $level)
                    <div class="rounded-xl border {{ $level['border'] }} overflow-hidden">
                        <div class="{{ $level['bg'] }} px-4 py-2.5 flex items-center gap-2">
                            <span class="{{ $level['text'] }} text-xs font-bold">{{ $level['daraja'] }}:</span>
                            <span class="{{ $level['text'] }} text-xs font-semibold">{{ $level['title'] }}</span>
                        </div>
                        <ul class="divide-y divide-slate-100 bg-white">
                            @foreach ($level['questions'] as $qi => $q)
                                <li class="flex items-start gap-3 px-4 py-3">
                                    <span class="{{ $level['bg'] }} {{ $level['text'] }} h-5 w-5 rounded-full text-xs font-bold flex items-center justify-center shrink-0 mt-0.5">{{ $qi + 1 }}</span>
                                    <span class="text-sm text-slate-700 leading-relaxed">{{ $q }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Baholash jadvali --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                <svg class="h-5 w-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75"/>
                </svg>
                <h2 class="text-sm font-bold text-slate-800">Baholash</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-slate-100">
                            <th class="text-left px-5 py-3 text-xs font-semibold text-slate-500 w-24">Ball</th>
                            <th class="text-left px-5 py-3 text-xs font-semibold text-slate-500">Baholash mezoni</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ([
                            ['ball' => '3 ball', 'text' => "Javob to'liq, matndan dalil keltirilgan, xulosa aniq va asosli.", 'bg' => 'bg-emerald-50', 'badge' => 'bg-emerald-100 text-emerald-800'],
                            ['ball' => '2 ball', 'text' => "Javob to'g'ri, lekin dalil yoki izoh yetarli emas.",              'bg' => 'bg-sky-50',     'badge' => 'bg-sky-100 text-sky-800'],
                            ['ball' => '1 ball', 'text' => "Javob qisman mos, fikr yuzaki.",                                  'bg' => 'bg-amber-50',   'badge' => 'bg-amber-100 text-amber-800'],
                            ['ball' => '0 ball', 'text' => "Javob noto'g'ri yoki matnga aloqador emas.",                      'bg' => 'bg-slate-50',   'badge' => 'bg-slate-200 text-slate-700'],
                        ] as $row)
                            <tr class="{{ $row['bg'] }}">
                                <td class="px-5 py-3">
                                    <span class="rounded-full {{ $row['badge'] }} px-2.5 py-0.5 text-xs font-bold">{{ $row['ball'] }}</span>
                                </td>
                                <td class="px-5 py-3 text-slate-700">{{ $row['text'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Uyga vazifa + Kutiladigan natija --}}
        <div class="grid grid-cols-2 gap-5 mb-5">
            {{-- Uyga vazifa --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-sky-100 flex items-center justify-center">
                        <svg class="h-4.5 w-4.5 text-sky-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-sm font-bold text-slate-800">Uyga vazifa</h2>
                        <p class="text-xs text-slate-500">"Men tavsiya qiladigan kitob" mavzusida yozma ish</p>
                    </div>
                </div>
                <ol class="space-y-2">
                    @foreach ([
                        "O'zingiz yoqtirgan kitob nomini yozing.",
                        "U nima haqida ekanini qisqacha tushuntiring.",
                        "Nima uchun do'stlaringizga tavsiya qilishingizni yozing.",
                        "Kitobdan olgan bitta xulosangizni ayting.",
                    ] as $i => $item)
                        <li class="flex items-start gap-2.5 text-sm text-slate-700">
                            <span class="h-5 w-5 shrink-0 rounded-full bg-sky-100 text-sky-700 text-xs font-bold flex items-center justify-center mt-0.5">{{ $i + 1 }}</span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ol>
            </div>

            {{-- Kutiladigan natija --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-emerald-100 flex items-center justify-center">
                        <svg class="h-4.5 w-4.5 text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Kutiladigan natija</h2>
                </div>
                <p class="text-sm text-slate-700 leading-relaxed">
                    O'quvchi matnni chuqur tushunadi, PIRLS tipidagi savollarga javob beradi, o'z fikrini matndan dalil bilan
                    asoslaydi, matnning asosiy g'oyasini talqin qiladi. Bo'lajak o'qituvchi esa 4-sinfda o'qish savodxonligini
                    baholash va rivojlantirishga qaratilgan darsni loyihalashni o'rganadi.
                </p>
            </div>
        </div>

        @include('public.dars-ishlanmalar._files', ['grade' => '4-sinf'])

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('dars-ishlanmalar.show', '3-sinf') }}"
               class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
                3-sinf
            </a>
            <a href="{{ route('dars-ishlanmalar.index') }}" class="flex-1 text-center text-xs text-slate-500 hover:text-blue-600 transition-colors">
                Barcha sinflar
            </a>
            <a href="{{ route('dars-ishlanmalar.show', '5-sinf') }}"
               class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                5-sinf
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</div>
@endsection
