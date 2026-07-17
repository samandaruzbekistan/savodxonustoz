@extends('layouts.app')

@section('title', "Testlar banki — Diagnostika va baholash")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.diagnostika._sidebar', ['activeSlug' => 'testlar'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="dp3" width="24" height="24" patternUnits="userSpaceOnUse"><line x1="0" y1="12" x2="24" y2="12" stroke="white" stroke-width="0.8"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#dp3)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">3-bo'lim</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">PIRLS tipidagi testlar</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">Testlar banki</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">9 turdagi topshiriq &middot; 1–4-sinf &middot; Darajali baholash</p>
                </div>
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <h2 class="text-sm font-bold text-sky-900 mb-2">Baholash maqsadi</h2>
            <p class="text-sm text-slate-700 leading-relaxed">
                Testlar banki o'qituvchi va bo'lajak o'qituvchiga o'quvchilarning o'qish savodxonligi darajasini muntazam
                tekshirish imkonini beradi. Unda sinflar bo'yicha badiiy, axborot va hayotiy matnlar asosida savollar tuziladi.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-5 mb-5">
            {{-- Topshiriq turlari --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <h2 class="text-sm font-bold text-slate-800 mb-3">Topshiriq turlari</h2>
                <div class="space-y-2">
                    @foreach([
                        ['Variantli savollar','Aniq axborotni topish'],
                        ['Qisqa javobli savollar','Tushunishni aniqlash'],
                        ['Ochiq javobli savollar','Xulosa va talqin'],
                        ['Moslashtirish','Aloqalarni anglash'],
                        ["Voqealar ketma-ketligini belgilash","Izchillikni tushunish"],
                        ["To'g'ri / noto'g'ri topshiriqlar","Faktlarni tekshirish"],
                        ['Matndan dalil topish','Asoslash ko\'nikmasini baholash'],
                        ["Jadvalni to'ldirish","Ma'lumotni tizimlashtirish"],
                        ['Xulosa yozish','Umumlashtirish ko\'nikmasini baholash'],
                    ] as [$tur,$maq])
                        <div class="flex items-center gap-2.5 text-xs">
                            <svg class="h-3.5 w-3.5 text-blue-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span class="font-semibold text-slate-700">{{ $tur }}</span>
                            <span class="text-slate-400">—</span>
                            <span class="text-slate-500">{{ $maq }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Ko'nikma-topshiriq --}}
            <div class="rounded-2xl border border-slate-200 bg-white overflow-hidden">
                <div class="px-4 py-3 border-b border-slate-100 bg-slate-50">
                    <h2 class="text-sm font-bold text-slate-800">Ko'nikma — Topshiriq turi</h2>
                </div>
                <table class="w-full text-xs">
                    <thead><tr class="bg-blue-50 border-b border-blue-100">
                        <th class="text-left px-3 py-2 font-semibold text-slate-600">Ko'nikma</th>
                        <th class="text-left px-3 py-2 font-semibold text-slate-600">Topshiriq turi</th>
                    </tr></thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ['Aniq axborot','Variantli, qisqa javob'],
                            ['Voqealar ketma-ketligi','Raqamlash, tartiblash'],
                            ['Xulosa chiqarish','Ochiq javob'],
                            ['Talqin qilish',"Asosiy g'oyani aniqlash"],
                            ['Baholash','Munosabat bildirish'],
                            ['Dalil topish','Matndan gap ko\'chirish'],
                            ["Lug'atni tushunish","So'z ma'nosini aniqlash"],
                        ] as [$k,$t])
                            <tr><td class="px-3 py-2 text-slate-700 font-medium">{{ $k }}</td><td class="px-3 py-2 text-slate-500">{{ $t }}</td></tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Topshiriq namunasi --}}
        <div class="mb-5 rounded-2xl border-2 border-sky-200 bg-sky-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-sky-200 bg-sky-100">
                <svg class="h-5 w-5 text-sky-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                <h2 class="text-sm font-bold text-sky-900">Namunaviy test — "Kichik bog'bon"</h2>
            </div>
            <div class="px-6 py-5">
                <p class="text-sm text-slate-700 leading-relaxed mb-5 p-4 bg-white rounded-xl border border-sky-100">
                    Javohir bobosining bog'iga tez-tez borardi. U yerda olma, o'rik va gilos daraxtlari bor edi. Bir kuni
                    bobosi unga kichik ko'chat berdi. Javohir ko'chatni yerga ekdi va har kuni suv quydi. Bir necha haftadan
                    keyin ko'chatda yangi barglar paydo bo'ldi. Javohir juda quvondi.
                </p>
                <div class="space-y-4">
                    @foreach([
                        ['num'=>'1','tip'=>'Variantli','badge'=>'bg-emerald-100 text-emerald-700',
                         'q'=>"Javohir qayerga tez-tez borardi?",'opts'=>['A) Do\'konga','B) Bobosining bog\'iga ✓','C) Maktab hovlisiga','D) Kutubxonaga']],
                        ['num'=>'2','tip'=>'Variantli','badge'=>'bg-emerald-100 text-emerald-700',
                         'q'=>"Bobosi Javohirga nima berdi?",'opts'=>['A) Kitob','B) Ko\'chat ✓','C) Qalam','D) Savat']],
                        ['num'=>'3','tip'=>'Qisqa javob','badge'=>'bg-sky-100 text-sky-700',
                         'q'=>"Javohir ko'chatga qanday g'amxo'rlik qildi?",'opts'=>[]],
                        ['num'=>'4','tip'=>'Ochiq javob','badge'=>'bg-amber-100 text-amber-700',
                         'q'=>"Nima uchun Javohir quvondi? Javobingizni matn asosida yozing.",'opts'=>[]],
                        ['num'=>'5','tip'=>'Umumlashtirish','badge'=>'bg-rose-100 text-rose-700',
                         'q'=>"Bu matndan qanday xulosa chiqarish mumkin?",'opts'=>["A) Daraxtlar o'z-o'zidan o'sadi","B) Mehnat va g'amxo'rlik natija beradi ✓","C) Bog'da faqat olma bo'ladi","D) Ko'chatga suv kerak emas"]],
                    ] as $q)
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="h-5 w-5 rounded-full bg-blue-100 text-blue-700 text-xs font-bold flex items-center justify-center shrink-0">{{ $q['num'] }}</span>
                                <span class="{{ $q['badge'] }} text-xs font-semibold px-2 py-0.5 rounded">{{ $q['tip'] }}</span>
                                <span class="text-sm text-slate-800">{{ $q['q'] }}</span>
                            </div>
                            @if(count($q['opts']))
                                <div class="grid grid-cols-2 gap-1 ml-7">
                                    @foreach($q['opts'] as $opt)
                                        <span class="text-xs text-slate-600 bg-white border border-slate-200 rounded px-2 py-1">{{ $opt }}</span>
                                    @endforeach
                                </div>
                            @else
                                <div class="ml-7 border border-dashed border-slate-300 rounded-lg h-10 bg-white"></div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Natija tahlili --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                <h2 class="text-sm font-bold text-slate-800">Natija tahlili jadvali</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-xs">
                    <thead><tr class="bg-blue-50 border-b border-blue-100">
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Savol</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Ko'nikma</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Ball</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Tahlil</th>
                    </tr></thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ['1','Aniq axborot','1','Topa oldi'],
                            ['2','Aniq axborot','1','Topa oldi'],
                            ['3','Tushunish','1','Qisman javob berdi'],
                            ['4','Xulosa','0','Sababni tushuntira olmadi'],
                            ['5','Umumlashtirish','1',"To'g'ri tanladi"],
                        ] as [$n,$k,$b,$t])
                            <tr><td class="text-center px-3 py-2.5 font-bold text-blue-600">{{ $n }}</td><td class="px-4 py-2.5 text-slate-700">{{ $k }}</td><td class="text-center px-3 py-2.5 font-bold {{ $b==='0'?'text-rose-500':'text-emerald-600' }}">{{ $b }}</td><td class="px-4 py-2.5 text-slate-500">{{ $t }}</td></tr>
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
                <h2 class="text-sm font-bold text-slate-800">O'qituvchi uchun tavsiya</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed">
                Testlar bankidan foydalanishda faqat umumiy ballni hisoblash bilan cheklanmang. Har bir savol qaysi ko'nikmani
                tekshirayotganini belgilang. 1–2-savollar aniq axborotni topishni, 3-savol tushunishni, 4-savol xulosa
                chiqarishni, 5-savol umumlashtirishni baholaydi.
            </p>
        </div>

        <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="h-4 w-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h2 class="text-sm font-bold text-emerald-800">Kutiladigan natija</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed">
                Testlar banki orqali o'qituvchi o'quvchilarni muntazam baholaydi, har bir o'quvchining qaysi ko'nikmasi
                rivojlangan yoki sustligini aniqlaydi. Bo'lajak o'qituvchi esa PIRLS tipidagi matnli testlarni tuzish
                va tahlil qilishni o'rganadi.
            </p>
        </div>

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('diagnostika.show', 'mezonlar') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                Baholash mezonlari
            </a>
            <span class="flex-1 text-center text-xs text-slate-400">3 / 5</span>
            <a href="{{ route('diagnostika.show', 'savol-javob') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                Savol-javob
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
