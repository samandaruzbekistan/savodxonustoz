@extends('layouts.app')

@section('title', "O'qish savodxonligi diagnostikasi — Diagnostika va baholash")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.diagnostika._sidebar', ['activeSlug' => 'diagnostikasi'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="dp1" width="32" height="32" patternUnits="userSpaceOnUse"><circle cx="16" cy="16" r="1.5" fill="white"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#dp1)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">1-bo'lim</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">Diagnostika</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">O'qish savodxonligi diagnostikasi</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">8 indikator &middot; 4 daraja &middot; Boshlang'ich / Oraliq / Yakuniy</p>
                </div>
            </div>
        </div>

        {{-- Baholash maqsadi --}}
        <div class="mb-5 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <h2 class="text-sm font-bold text-sky-900 mb-2">Baholash maqsadi</h2>
            <p class="text-sm text-slate-700 leading-relaxed">
                O'qish savodxonligi diagnostikasi sahifasining maqsadi o'quvchining matnni o'qish, tushunish, axborot topish,
                xulosa chiqarish, talqin qilish, baholash va o'z fikrini dalil bilan asoslash darajasini aniqlashdan iborat.
            </p>
            <p class="text-sm text-slate-700 leading-relaxed mt-3">
                Diagnostika o'quvchini "yaxshi" yoki "yomon" deb ajratish uchun emas, balki uning qaysi ko'nikmasi shakllangan,
                qaysi jihatda metodik yordam zarurligini aniqlash uchun qo'llanadi. Diagnostika boshlang'ich, oraliq va yakuniy
                ko'rinishda tashkil etilishi mumkin.
            </p>
        </div>

        {{-- Indikatorlar + Darajalar --}}
        <div class="grid grid-cols-2 gap-5 mb-5">
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Baholash indikatorlari</h2>
                </div>
                <div class="space-y-2">
                    @foreach([
                        ['num'=>'1','label'=>"To'g'ri o'qish",'desc'=>"So'zlarni xatosiz, ravon o'qiy oladi"],
                        ['num'=>'2','label'=>'Literal tushunish','desc'=>'Matndan aniq axborotni topadi'],
                        ['num'=>'3','label'=>'Xulosa chiqarish','desc'=>"Bevosita aytilmagan ma'noni anglaydi"],
                        ['num'=>'4','label'=>'Talqin qilish','desc'=>"Asosiy g'oya va muallif fikrini izohlaydi"],
                        ['num'=>'5','label'=>'Baholash','desc'=>'Matnga munosabat bildiradi'],
                        ['num'=>'6','label'=>'Dalil keltirish','desc'=>'Javobini matndan asoslaydi'],
                        ['num'=>'7','label'=>"Lug'atni tushunish",'desc'=>"Yangi so'zlarni kontekstda anglaydi"],
                        ['num'=>'8','label'=>'Yozma javob','desc'=>"Fikrini mantiqli va tushunarli yozadi"],
                    ] as $ind)
                        <div class="flex items-start gap-3">
                            <span class="h-5 w-5 shrink-0 rounded-full bg-blue-100 text-blue-700 text-xs font-bold flex items-center justify-center mt-0.5">{{ $ind['num'] }}</span>
                            <div>
                                <span class="text-xs font-semibold text-slate-800">{{ $ind['label'] }}</span>
                                <span class="text-xs text-slate-500"> — {{ $ind['desc'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="h-8 w-8 rounded-lg bg-sky-100 flex items-center justify-center">
                        <svg class="h-4 w-4 text-sky-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    </div>
                    <h2 class="text-sm font-bold text-slate-800">Rubrika — darajalar</h2>
                </div>
                <div class="space-y-3">
                    @foreach([
                        ['daraja'=>'Yuqori daraja','bg'=>'bg-emerald-100','text'=>'text-emerald-800','border'=>'border-emerald-200',
                         'desc'=>"O'quvchi matnni to'liq tushunadi, xulosa chiqaradi, javobini dalil bilan asoslaydi, mustaqil fikr bildiradi."],
                        ['daraja'=>"O'rta daraja",'bg'=>'bg-sky-100','text'=>'text-sky-800','border'=>'border-sky-200',
                         'desc'=>"O'quvchi matn mazmunini asosan tushunadi, lekin xulosa yoki dalil keltirishda ayrim qiyinchiliklarga duch keladi."],
                        ['daraja'=>'Past daraja','bg'=>'bg-amber-100','text'=>'text-amber-800','border'=>'border-amber-200',
                         'desc'=>"O'quvchi matndan aniq axborotni qisman topadi, lekin yashirin ma'no, xulosa va asoslashda qiynaladi."],
                        ['daraja'=>"Boshlang'ich daraja",'bg'=>'bg-rose-100','text'=>'text-rose-800','border'=>'border-rose-200',
                         'desc'=>"O'quvchi matnni yuzaki tushunadi, savollarga javob berishda ko'p yordamga muhtoj bo'ladi."],
                    ] as $d)
                        <div class="rounded-xl border {{ $d['border'] }} overflow-hidden">
                            <div class="{{ $d['bg'] }} px-3 py-1.5">
                                <span class="{{ $d['text'] }} text-xs font-bold">{{ $d['daraja'] }}</span>
                            </div>
                            <p class="px-3 py-2 text-xs text-slate-600 leading-relaxed">{{ $d['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Topshiriq namunasi --}}
        <div class="mb-5 rounded-2xl border-2 border-sky-200 bg-sky-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-sky-200 bg-sky-100">
                <svg class="h-5 w-5 text-sky-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                <h2 class="text-sm font-bold text-sky-900">Topshiriq namunasi</h2>
            </div>
            <div class="px-6 py-5 grid grid-cols-2 gap-5">
                <div>
                    <h3 class="text-xs font-bold text-slate-700 mb-2">Matn: "Kutubxonadagi yangi kitob"</h3>
                    <p class="text-sm text-slate-700 leading-relaxed">
                        Malika maktab kutubxonasidan tabiat haqida yangi kitob oldi. Kitobda qushlar, daraxtlar va gullar haqida
                        qiziqarli ma'lumotlar bor edi. Malika kitobni o'qib, hovlisiga gul ekishga qaror qildi. Ertasi kuni
                        u onasi bilan birga kichik gul ko'chatlarini ekdi.
                    </p>
                </div>
                <div>
                    <h3 class="text-xs font-bold text-slate-700 mb-2">Savollar:</h3>
                    <ol class="space-y-2">
                        @foreach([
                            ['q'=>'Malika qayerdan kitob oldi?','d'=>'1-daraja','c'=>'bg-emerald-100 text-emerald-700'],
                            ['q'=>'Kitob nima haqida edi?','d'=>'1-daraja','c'=>'bg-emerald-100 text-emerald-700'],
                            ['q'=>"Malika kitobni o'qigandan keyin nima qilishga qaror qildi?",'d'=>'2-daraja','c'=>'bg-sky-100 text-sky-700'],
                            ['q'=>'Nima uchun Malika gul ekishga qiziqib qoldi?','d'=>'3-daraja','c'=>'bg-amber-100 text-amber-700'],
                            ['q'=>"Kitob o'qish insonni yangi ish qilishga undashi mumkinmi? Javobingizni asoslang.",'d'=>'4-daraja','c'=>'bg-rose-100 text-rose-700'],
                        ] as $i => $sq)
                            <li class="flex items-start gap-2.5">
                                <span class="{{ $sq['c'] }} text-xs font-bold px-1.5 py-0.5 rounded shrink-0 mt-0.5">{{ $sq['d'] }}</span>
                                <span class="text-xs text-slate-700">{{ $sq['q'] }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        {{-- Natija tahlili jadvali --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                <h2 class="text-sm font-bold text-slate-800">O'quvchi natijasini tahlil qilish jadvali</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-xs">
                    <thead><tr class="bg-blue-50 border-b border-blue-100">
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">O'quvchi F.I.</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Aniq axborot</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Xulosa</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Talqin</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Baholash</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Dalil</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Umumiy daraja</th>
                    </tr></thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr><td class="px-4 py-2.5 text-slate-500 italic">1-o'quvchi</td><td class="text-center px-3 py-2.5">2</td><td class="text-center px-3 py-2.5">1</td><td class="text-center px-3 py-2.5">0</td><td class="text-center px-3 py-2.5">1</td><td class="text-center px-3 py-2.5">1</td><td class="text-center px-3 py-2.5"><span class="rounded-full bg-amber-100 text-amber-700 px-2 py-0.5 font-semibold">O'rta</span></td></tr>
                        <tr class="bg-slate-50"><td class="px-4 py-2.5 text-slate-500 italic">2-o'quvchi</td><td class="text-center px-3 py-2.5">3</td><td class="text-center px-3 py-2.5">2</td><td class="text-center px-3 py-2.5">2</td><td class="text-center px-3 py-2.5">2</td><td class="text-center px-3 py-2.5">3</td><td class="text-center px-3 py-2.5"><span class="rounded-full bg-emerald-100 text-emerald-700 px-2 py-0.5 font-semibold">Yuqori</span></td></tr>
                        <tr><td class="px-4 py-2.5 text-slate-500 italic">3-o'quvchi</td><td class="text-center px-3 py-2.5">1</td><td class="text-center px-3 py-2.5">0</td><td class="text-center px-3 py-2.5">1</td><td class="text-center px-3 py-2.5">0</td><td class="text-center px-3 py-2.5">0</td><td class="text-center px-3 py-2.5"><span class="rounded-full bg-rose-100 text-rose-700 px-2 py-0.5 font-semibold">Past</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-5 rounded-2xl border border-blue-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-3">
                <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">O'qituvchi uchun tavsiya</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed mb-3">
                Diagnostika natijasini faqat ball bilan yakunlamang. Har bir o'quvchi bo'yicha qaysi ko'nikma yaxshi shakllangani
                va qaysi ko'nikma ustida ishlash kerakligini aniqlang.
            </p>
            <p class="text-sm text-slate-700 leading-relaxed">
                Masalan, o'quvchi aniq axborotni topa olsa, lekin xulosa chiqarishda qiynalsa, unga
                <span class="font-semibold text-blue-700">"Nima uchun?"</span>,
                <span class="font-semibold text-blue-700">"Qanday bildingiz?"</span>,
                <span class="font-semibold text-blue-700">"Qaysi gap buni ko'rsatadi?"</span>
                kabi savollar ko'proq berilishi kerak.
            </p>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="h-4 w-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h2 class="text-sm font-bold text-emerald-800">Kutiladigan natija</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed">
                O'qituvchi o'quvchining o'qish savodxonligi darajasini aniq ko'ra oladi. Bo'lajak o'qituvchi esa
                diagnostik topshiriq tuzish, natijani tahlil qilish va keyingi darsni shu natijaga mos rejalashtirish
                ko'nikmasiga ega bo'ladi.
            </p>
        </div>

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('diagnostika.index') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                Bo'lim
            </a>
            <span class="flex-1 text-center text-xs text-slate-400">1 / 5</span>
            <a href="{{ route('diagnostika.show', 'mezonlar') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                0–3 ballik mezonlar
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
