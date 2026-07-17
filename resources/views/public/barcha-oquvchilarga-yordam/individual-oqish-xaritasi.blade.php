@extends('layouts.app')
@section('title', "Individual o'qish xaritasi — Barcha o'quvchilarga yordam berish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'individual-oqish-xaritasi'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-rose-100 text-rose-700">5</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Barcha o'quvchilarga yordam berish • 5-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Individual o'qish xaritasi</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Har bir o'quvchining o'qishdagi rivojlanish yo'li turlicha. Individual o'qish xaritasi — bu har bir o'quvchining o'qish savodxonligi bo'yicha rivojlanishini kuzatish jadvalidir.</p>
        </div>

        {{-- Muammo tavsifi --}}
        <div class="mb-6 rounded-xl border border-rose-300 bg-rose-100 p-5">
            <div class="flex items-center gap-2 mb-3">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-rose-600">
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </span>
                <h3 class="text-sm font-bold text-rose-900">MUAMMO TAVSIFI</h3>
            </div>
            <p class="text-xs text-rose-800 leading-relaxed">Agar o'qituvchi har bir o'quvchining kuchli va sust tomonlarini alohida kuzatmasa, unga mos metodik yordam berish qiyinlashadi. Unda o'quvchining o'qish tezligi, tushunish darajasi, xulosa chiqarish, dalil topish, lug'at boyligi va mustaqil o'qish faolligi qayd etiladi.</p>
        </div>

        {{-- Xarita tarkibi --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">INDIVIDUAL O'QISH XARITASI TARKIBI</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
                <table class="w-full text-xs">
                    <thead class="bg-slate-100 text-slate-700 font-semibold">
                        <tr>
                            <th class="px-4 py-3 text-left">Bo'lim</th>
                            <th class="px-4 py-3 text-left">Mazmuni</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ["O'quvchi ma'lumoti", "F.I., sinf, o'quv yili"],
                            ["O'qish darajasi", "Boshlang'ich, o'rta, yuqori"],
                            ["Ravon o'qish", 'Tezlik, aniqlik, ifodalilik'],
                            ['Tushunish', 'Matn mazmunini anglash'],
                            ['Xulosa chiqarish', "Yashirin ma'noni anglash"],
                            ['Dalil topish', 'Javobni matndan asoslash'],
                            ["Lug'at", "Yangi so'zlarni tushunish"],
                            ["Mustaqil o'qish", "O'qigan kitoblari"],
                            ["O'qituvchi tavsiyasi", 'Keyingi metodik yordam'],
                            ['Ota-ona bilan ish', 'Uyda bajariladigan vazifa'],
                        ] as $row)
                            <tr class="bg-white hover:bg-slate-50">
                                <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Amaliy mashqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MASHQLAR</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-blue-200 bg-blue-50 p-5">
                    <p class="text-xs font-bold text-blue-900 mb-2">1-mashq. "Haftalik o'qish kuzatuvi"</p>
                    <p class="text-xs text-blue-800 leading-relaxed mb-2">O'quvchi har hafta bitta matn o'qiydi. O'qituvchi quyidagilarni belgilaydi:</p>
                    <ul class="space-y-1 text-xs text-blue-800">
                        <li>• Matnni o'qidi</li>
                        <li>• Savollarga javob berdi</li>
                        <li>• Dalil topdi</li>
                        <li>• Xulosa chiqardi</li>
                        <li>• Yangi so'zlarni ishlatdi</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-violet-200 bg-violet-50 p-5">
                    <p class="text-xs font-bold text-violet-900 mb-2">2-mashq. "Mening o'qish yo'lim"</p>
                    <ul class="space-y-1.5 text-xs text-violet-800">
                        <li>• Men qaysi matnni o'qidim?</li>
                        <li>• Menga nima yoqdi?</li>
                        <li>• Qaysi savol qiyin bo'ldi?</li>
                        <li>• Keyingi safar nimani yaxshilayman?</li>
                    </ul>
                </div>
            </div>
            <div class="mt-4 rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                <p class="text-xs font-bold text-emerald-900 mb-3">3-mashq. "Rivojlanish grafigi" — oylik natijalar</p>
                <div class="grid grid-cols-4 gap-3">
                    @foreach([['Sentabr','45%'],['Oktabr','58%'],['Noyabr','67%'],['Dekabr','75%']] as [$oy,$foiz])
                        <div class="rounded-lg bg-white border border-emerald-200 px-3 py-3 text-center">
                            <div class="text-xl font-extrabold text-emerald-600">{{ $foiz }}</div>
                            <div class="text-xs text-emerald-700 mt-0.5">{{ $oy }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- O'qituvchi harakati --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">O'QITUVCHI HARAKATI</div>
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach([
                        "Har oy o'quvchi natijasini qayd etadi",
                        "Qaysi ko'nikma rivojlanganini belgilaydi",
                        'Qaysi ko\'nikma ustida ishlash kerakligini yozadi',
                        'Ota-onaga qisqa tavsiya beradi',
                        'Keyingi darslar uchun individual topshiriq tanlaydi',
                        "O'quvchiga o'z rivojlanishini ko'rsatadi",
                    ] as $a)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-rose-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $a }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Ota-ona bilan hamkorlik --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">OTA-ONA BILAN HAMKORLIK</div>
            <div class="rounded-xl border border-rose-200 bg-rose-50 p-5 space-y-1.5">
                <p class="text-xs text-rose-800 italic">"Farzandingiz matndan aniq javoblarni yaxshi topmoqda."</p>
                <p class="text-xs text-rose-800 italic">"Xulosa chiqarish savollariga ko'proq e'tibor berish kerak."</p>
                <p class="text-xs text-rose-800 italic">"Uyda har kuni 10 daqiqa matn o'qib, 'Nega?' savollariga javob berishga mashq qiling."</p>
                <p class="text-xs text-rose-800 italic">"Yangi so'zlardan gap tuzish foydali bo'ladi."</p>
            </div>
        </div>

        {{-- Baholash --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BAHOLASH</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
                <table class="w-full text-xs">
                    <thead class="bg-slate-100 text-slate-700 font-semibold">
                        <tr>
                            <th class="px-4 py-3 text-left">Ko'nikma</th>
                            <th class="px-4 py-3 text-left">1-daraja</th>
                            <th class="px-4 py-3 text-left">2-daraja</th>
                            <th class="px-4 py-3 text-left">3-daraja</th>
                            <th class="px-4 py-3 text-left">4-daraja</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ['Aniq axborotni topish', 'Yordam bilan', 'Qisman mustaqil', 'Mustaqil', 'Tez va aniq'],
                            ['Xulosa chiqarish', 'Qiynaladi', "Yo'naltirish bilan", 'Mustaqil', 'Dalil bilan'],
                            ['Talqin qilish', 'Yuzaki', 'Qisman', 'Asosli', 'Chuqur'],
                            ['Baholash', 'Fikr bildirmaydi', 'Qisqa fikr', 'Asosli fikr', 'Dalilli va mustaqil'],
                            ["Lug'at", 'Kam tushunadi', 'Rasm bilan tushunadi', 'Kontekstda tushunadi', "Nutqda qo'llaydi"],
                        ] as $row)
                            <tr class="bg-white hover:bg-slate-50">
                                <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[2] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[3] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[4] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-rose-200 bg-gradient-to-r from-rose-50 to-pink-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-rose-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-rose-800 leading-relaxed">Individual o'qish xaritasi orqali har bir o'quvchining rivojlanish yo'li aniq ko'rinadi. O'qituvchi o'quvchiga mos topshiriq beradi, ota-ona aniq tavsiya oladi, o'quvchi esa o'z yutug'i va keyingi maqsadini anglaydi.</p>
                </div>
                <a href="{{ route('barcha-oquvchilarga-yordam.index') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-rose-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-rose-700 transition-colors">
                    Bo'lim sahifasiga qaytish
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
