@extends('layouts.app')
@section('title', "Matn turlarini tushunish — Sinf strategiyalari")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'matn-turlarini-tushunish'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-rose-100 text-rose-700">7</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Sinf strategiyalari • 7-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Matn turlarini tushunish</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Matn turlarini tushunish o'quvchining har bir matnga mos o'qish usulini tanlay olishidir. O'quvchi matn turini tushunsa, uni to'g'ri o'qiydi va kerakli axborotni tezroq topadi.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-rose-300 bg-rose-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-rose-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-rose-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-rose-800 leading-relaxed">O'quvchiga badiiy, axborot, hayotiy, jadval va rasmli matnlarni farqlashni, har bir matndan kerakli axborotni topishni va unga mos savollar tuzishni o'rgatish.</p>
            </div>
            <div class="rounded-xl border border-pink-300 bg-pink-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-pink-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-pink-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-pink-800 leading-relaxed">Badiiy matnda qahramon, voqea va his-tuyg'u muhim. Axborot matnida fakt, tushuncha va dalillar. E'londa vaqt, joy va shartlar. Jadvalda sonlar, ustunlar va bog'lanishlar tahlil qilinadi.</p>
            </div>
        </div>

        {{-- O'qish strategiyalari --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">HAR XIL MATNNI TURLICHA O'QISH</div>
            <div class="space-y-3">
                @foreach ([
                    ['🎭','Hikoyani o\'qiganda',['Qahramon kim?','Nima bo\'ldi?','Nima uchun?'],'border-blue-200 bg-blue-50'],
                    ['📰','Axborot matnini o\'qiganda',['Qanday fakt bor?','Nimani bilib oldim?'],'border-emerald-200 bg-emerald-50'],
                    ['📋',"E'lonni o\'qiganda",['Qachon?','Qayerda?','Kimlar uchun?'],'border-violet-200 bg-violet-50'],
                    ['📊','Jadvalni o\'qiganda',['Eng ko\'p nima?','Qaysi ma\'lumot farq qiladi?'],'border-orange-200 bg-orange-50'],
                    ['📝',"Yo'riqnomani o'qiganda",['Birinchi nima qilinadi?','Keyin nima?'],'border-teal-200 bg-teal-50'],
                ] as [$icon, $title, $questions, $color])
                    <div class="rounded-xl border p-4 {{ $color }}">
                        <div class="flex items-start gap-4">
                            <span class="text-2xl shrink-0">{{ $icon }}</span>
                            <div class="flex-1">
                                <p class="text-xs font-bold text-slate-800 mb-2">{{ $title }}</p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($questions as $q)
                                        <span class="inline-flex items-center rounded-full bg-white/60 border border-white px-2.5 py-0.5 text-xs text-slate-700">{{ $q }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metod --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">"MATN TURINI TOP" METODI</div>
            <div class="space-y-3">
                @foreach ([
                    [1,"O'qituvchi 3 xil matn beradi: hikoya, e'lon, jadval",'bg-rose-600'],
                    [2,"O'quvchilar har bir matnni ko'rib chiqadi",'bg-pink-600'],
                    [3,"Matn turini aniqlaydi",'bg-rose-500'],
                    [4,"Har bir matn uchun qanday savollar berish mumkinligini yozadi",'bg-rose-600'],
                    [5,"Xulosa: 'Har xil matn har xil o'qiladi.'",'bg-rose-700'],
                ] as [$n, $step, $ic])
                    <div class="flex items-center gap-4 rounded-xl border border-rose-100 bg-rose-50 p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full {{ $ic }} text-white text-sm font-bold">{{ $n }}</span>
                        <p class="text-xs text-rose-900 font-medium">{{ $step }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Namunalar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BOSHLANG'ICH SINFGA MOS NAMUNA</div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="rounded-xl border border-blue-200 bg-blue-50 p-4">
                    <p class="text-xs font-bold text-blue-900 mb-2">1-matn: Hikoya</p>
                    <div class="rounded-lg bg-white border border-blue-100 p-3 mb-3">
                        <p class="text-xs text-slate-700 italic">"Ali yo'lda kichik kuchukchani ko'rib qoldi. U kuchukchaga suv berdi."</p>
                    </div>
                    <ul class="space-y-1.5 text-xs text-blue-800">
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>Ali nimani ko'rdi?</li>
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>U nima qildi?</li>
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>Ali qanday bola?</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-violet-200 bg-violet-50 p-4">
                    <p class="text-xs font-bold text-violet-900 mb-2">2-matn: E'lon</p>
                    <div class="rounded-lg bg-white border border-violet-100 p-3 mb-3">
                        <p class="text-xs text-slate-700 italic">"Payshanba kuni soat 11:00 da maktab hovlisida sport musobaqasi bo'lib o'tadi."</p>
                    </div>
                    <ul class="space-y-1.5 text-xs text-violet-800">
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>Musobaqa qachon bo'ladi?</li>
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>Qayerda o'tkaziladi?</li>
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>Yana qanday ma'lumot kerak?</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-4">
                    <p class="text-xs font-bold text-emerald-900 mb-2">3-matn: Jadval</p>
                    <div class="rounded-lg bg-white border border-emerald-100 overflow-hidden mb-3">
                        <table class="w-full text-xs">
                            <thead class="bg-emerald-100">
                                <tr><th class="px-2 py-1 text-left font-semibold text-emerald-800">O'quvchi</th><th class="px-2 py-1 text-right font-semibold text-emerald-800">Kitob</th></tr>
                            </thead>
                            <tbody class="divide-y divide-emerald-50">
                                <tr><td class="px-2 py-1 text-slate-700">Aziz</td><td class="px-2 py-1 text-right text-slate-700">3</td></tr>
                                <tr><td class="px-2 py-1 text-slate-700">Malika</td><td class="px-2 py-1 text-right text-slate-700">5</td></tr>
                                <tr><td class="px-2 py-1 text-slate-700">Sardor</td><td class="px-2 py-1 text-right text-slate-700">4</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="space-y-1.5 text-xs text-emerald-800">
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>Kim eng ko'p kitob o'qigan?</li>
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>Aziz nechta kitob o'qigan?</li>
                        <li class="flex items-start gap-1.5"><svg class="h-3 w-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>Sardor Malikadan nechta kam?</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Bo'lim yakuni --}}
        <div class="mb-4 rounded-2xl border border-rose-200 bg-gradient-to-r from-rose-50 to-pink-50 px-6 py-5">
            <p class="text-sm font-bold text-rose-900 mb-2">Kutiladigan natija</p>
            <p class="text-xs text-rose-800 leading-relaxed mb-3">O'quvchi badiiy, axborot, hayotiy, jadval va rasmli matnlarni farqlaydi. Har bir matndan kerakli axborotni topadi va unga mos savollar tuza oladi. O'qituvchi esa darsda turli matnlar orqali o'quvchining o'qish savodxonligini kengroq rivojlantiradi.</p>
        </div>

        <div class="rounded-2xl border border-blue-200 bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-bold text-blue-900 mb-1">Sinf strategiyalari bo'limini yakunladingiz!</p>
                    <p class="text-xs text-blue-700">Barcha 7 ta bo'limni o'rganib chiqdingiz. Bosh sahifaga qaytib boshqa bo'limlarni ham ko'ring.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.index') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                    Bo'lim boshi
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
