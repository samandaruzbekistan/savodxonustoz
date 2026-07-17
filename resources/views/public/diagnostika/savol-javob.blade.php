@extends('layouts.app')

@section('title', "Matn asosida savol-javob — Diagnostika va baholash")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.diagnostika._sidebar', ['activeSlug' => 'savol-javob'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="dp4" width="36" height="36" patternUnits="userSpaceOnUse"><path d="M18 2 L34 18 L18 34 L2 18 Z" fill="none" stroke="white" stroke-width="0.8"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#dp4)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">4-bo'lim</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">Og'zaki va yozma javob</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">Matn asosida savol-javob</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">5 savol darajasi &middot; 6 indikator &middot; Dalil va xulosa</p>
                </div>
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <h2 class="text-sm font-bold text-sky-900 mb-2">Baholash maqsadi</h2>
            <p class="text-sm text-slate-700 leading-relaxed">
                Matn asosida savol-javob o'qish savodxonligini rivojlantirishning eng samarali usullaridan biridir.
                O'quvchi savolga javob berish jarayonida matnga qaytadi, kerakli ma'lumotni izlaydi, fikrini shakllantiradi
                va uni og'zaki yoki yozma tarzda ifodalaydi.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-5 mb-5">
            {{-- Savol darajalari --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <h2 class="text-sm font-bold text-slate-800 mb-4">Savol darajalari</h2>
                <div class="space-y-3">
                    @foreach([
                        ['Literal savollar','Matndan aniq axborotni topish','bg-emerald-100 text-emerald-800'],
                        ['Tushunishga oid savollar','Mazmunni izohlash','bg-sky-100 text-sky-800'],
                        ['Xulosa chiqarish savollari',"Yashirin ma'noni anglash",'bg-blue-100 text-blue-800'],
                        ['Talqin qilish savollari',"Asosiy g'oya va muallif fikrini tushuntirish",'bg-amber-100 text-amber-800'],
                        ['Baholash savollari','Shaxsiy munosabat bildirish va asoslash','bg-rose-100 text-rose-800'],
                    ] as [$daraja,$tavsif,$cls])
                        <div class="rounded-xl overflow-hidden border border-slate-200">
                            <div class="{{ $cls }} px-3 py-1.5 text-xs font-bold">{{ $daraja }}</div>
                            <p class="px-3 py-2 text-xs text-slate-600">{{ $tavsif }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Indikatorlar + Rubrika --}}
            <div class="space-y-4">
                <div class="rounded-2xl border border-slate-200 bg-white p-5">
                    <h2 class="text-sm font-bold text-slate-800 mb-3">Baholash indikatorlari</h2>
                    <div class="space-y-2">
                        @foreach([
                            ["Savolni tushunish","Savol mazmunini to'g'ri anglaydi"],
                            ["Matnga qaytish","Javob topish uchun matndan foydalanadi"],
                            ["Dalil keltirish","Javobini matndagi gap bilan asoslaydi"],
                            ["Xulosa chiqarish","Bevosita aytilmagan ma'noni anglaydi"],
                            ["Fikr bildirish","O'z munosabatini bildiradi"],
                            ["Nutq ravonligi","Javobini tushunarli ifodalaydi"],
                        ] as [$ind,$desc])
                            <div class="flex items-start gap-2 text-xs">
                                <span class="h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0 mt-1.5"></span>
                                <span class="font-semibold text-slate-700">{{ $ind }}</span><span class="text-slate-400 mx-1">—</span><span class="text-slate-500">{{ $desc }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white overflow-hidden">
                    <div class="px-4 py-3 border-b border-slate-100 bg-slate-50">
                        <h2 class="text-xs font-bold text-slate-700">Rubrika (0–3 ball)</h2>
                    </div>
                    @foreach([
                        ['3','bg-emerald-50','bg-emerald-100 text-emerald-800',"Javob to'liq, mantiqli, dalil bilan asoslangan."],
                        ['2','bg-sky-50','bg-sky-100 text-sky-800',"Javob to'g'ri, lekin dalil yetarli emas."],
                        ['1','bg-amber-50','bg-amber-100 text-amber-800',"Javob qisman to'g'ri, yuzaki."],
                        ['0','bg-rose-50','bg-rose-100 text-rose-800',"Javob noto'g'ri yoki berilmagan."],
                    ] as [$b,$row,$badge,$d])
                        <div class="{{ $row }} px-4 py-2.5 flex items-center gap-3 border-b border-slate-100 last:border-0">
                            <span class="{{ $badge }} text-xs font-bold px-2 py-0.5 rounded shrink-0">{{ $b }} ball</span>
                            <span class="text-xs text-slate-600">{{ $d }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Topshiriq namunasi --}}
        <div class="mb-5 rounded-2xl border-2 border-sky-200 bg-sky-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-sky-200 bg-sky-100">
                <svg class="h-5 w-5 text-sky-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                <h2 class="text-sm font-bold text-sky-900">Topshiriq namunasi — "Do'stning yordami"</h2>
            </div>
            <div class="px-6 py-5 grid grid-cols-2 gap-5">
                <div>
                    <p class="text-sm text-slate-700 leading-relaxed p-4 bg-white rounded-xl border border-sky-100">
                        Sardor rasm chizishni yaxshi ko'rardi. Bir kuni u rangli qalamlarini uyda unutib qoldirdi.
                        Darsda rasm chizish kerak edi. Uning do'sti Akmal qalamlarini ikkiga bo'lib, Sardorga ham berdi.
                        Dars oxirida Sardor chiroyli rasm chizdi va Akmalga minnatdorchilik bildirdi.
                    </p>
                </div>
                <div>
                    <h3 class="text-xs font-bold text-slate-700 mb-3">Savollar:</h3>
                    <ol class="space-y-2">
                        @foreach([
                            ['Sardor nimani yaxshi ko\'rardi?','Literal','bg-emerald-100 text-emerald-700'],
                            ['U darsga nimani unutib keldi?','Literal','bg-emerald-100 text-emerald-700'],
                            ['Akmal Sardorga qanday yordam berdi?','Tushunish','bg-sky-100 text-sky-700'],
                            ["Akmalning harakati uning qanday do'st ekanini ko'rsatadi?",'Talqin','bg-amber-100 text-amber-700'],
                            ["Siz Akmalning ishini to'g'ri deb hisoblaysizmi? Nega?",'Baholash','bg-rose-100 text-rose-700'],
                            ["Matndan do'stlikni bildiruvchi gapni toping.",'Dalil','bg-blue-100 text-blue-700'],
                        ] as $i => [$q,$tip,$cls])
                            <li class="flex items-start gap-2">
                                <span class="{{ $cls }} text-xs font-bold px-1.5 py-0.5 rounded shrink-0 mt-0.5">{{ $tip }}</span>
                                <span class="text-xs text-slate-700">{{ $q }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        {{-- Tahlil jadvali --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                <h2 class="text-sm font-bold text-slate-800">Savol-javobdan keyin tahlil jadvali</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-xs">
                    <thead><tr class="bg-blue-50 border-b border-blue-100">
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Savol turi</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">O'quvchi javobi</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Ball</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Keyingi metodik yordam</th>
                    </tr></thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ['Aniq axborot',"To'g'ri javob berdi",'1','Murakkabroq savol berish'],
                            ['Xulosa','Qisman javob berdi','1','"Nega?" savollari bilan ishlash'],
                            ['Baholash','Fikr bildirdi, dalil yo\'q','2','Dalil topish mashqi'],
                            ['Dalil','Matndan gap topa olmadi','0','Matn detektivi metodi'],
                        ] as [$tip,$jv,$b,$yordam])
                            <tr><td class="px-4 py-2.5 font-medium text-slate-700">{{ $tip }}</td><td class="px-4 py-2.5 text-slate-600">{{ $jv }}</td><td class="text-center px-3 py-2.5 font-bold {{ $b==='0'?'text-rose-500':'text-emerald-600' }}">{{ $b }}</td><td class="px-4 py-2.5 text-slate-500">{{ $yordam }}</td></tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-blue-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-3">
                <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">O'qituvchi uchun yo'naltiruvchi savollar</h2>
            </div>
            <p class="text-sm text-slate-600 mb-3">Savol-javob jarayonida o'quvchiga darhol to'g'ri javobni aytib bermang. Avval uni matnga qaytaring:</p>
            <div class="grid grid-cols-2 gap-2">
                @foreach(['"Bu javobni qaysi gapdan bilding?"','"Matnning qaysi qismida bu aytilgan?"','"Yana qanday dalil topish mumkin?"','"Fikringni bir gap bilan kengaytir."'] as $t)
                    <div class="flex items-center gap-2 text-sm text-slate-700 bg-blue-50 rounded-lg px-3 py-2.5">
                        <span class="text-blue-500 shrink-0">›</span>{{ $t }}
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="h-4 w-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h2 class="text-sm font-bold text-emerald-800">Kutiladigan natija</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed">
                O'quvchi savolni tushunadi, javobni matndan izlaydi, dalil topadi, xulosa chiqaradi va o'z fikrini asoslaydi.
                Bo'lajak o'qituvchi esa savol-javobni baholash va rivojlantirish vositasi sifatida qo'llashni o'rganadi.
            </p>
        </div>

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('diagnostika.show', 'testlar') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                Testlar banki
            </a>
            <span class="flex-1 text-center text-xs text-slate-400">4 / 5</span>
            <a href="{{ route('diagnostika.show', 'portfolio') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                O'quvchi portfeli
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
