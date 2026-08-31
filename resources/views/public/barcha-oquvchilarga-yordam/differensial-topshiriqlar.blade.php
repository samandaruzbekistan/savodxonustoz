@extends('layouts.app')
@section('title', "Differensial topshiriqlar — Barcha o'quvchilarga yordam berish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'differensial-topshiriqlar'])
    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative bg-gradient-to-br from-violet-600 to-indigo-700 px-6 py-6">
            <div class="relative flex items-center gap-6">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-white/20 text-white">2</span>
                        <span class="text-xs text-violet-100 uppercase tracking-wide font-medium">Barcha o'quvchilarga yordam berish • 2-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white">Differensial topshiriqlar</h1>
                    <p class="mt-2 text-violet-100 leading-relaxed max-w-lg text-sm">Bir sinfda o'quvchilarning o'qish darajasi bir xil bo'lmaydi. Differensial yondashuv — bu bir xil mavzu yoki matn asosida o'quvchilarga turli darajadagi topshiriqlar berishdir.</p>
                </div>
                <div class="hidden sm:block shrink-0">
                    <img src="{{ asset('images/sections/differensial-topshiriqlar/02_open_book_pencil.png') }}" alt="" class="h-36 w-auto drop-shadow-xl">
                </div>
            </div>
        </div>

        {{-- Muammo tavsifi --}}
        <div class="mb-6 rounded-xl border border-violet-300 bg-violet-100 p-5">
            <div class="flex items-center justify-between gap-4">
                <div class="min-w-0">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                            <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                        </span>
                        <h3 class="text-sm font-bold text-violet-900">MUAMMO TAVSIFI</h3>
                    </div>
                    <p class="text-xs text-violet-800 leading-relaxed">Agar barcha o'quvchilarga bir xil topshiriq berilsa, kuchli o'quvchilar zerikishi, qiynalayotgan o'quvchilar esa muvaffaqiyatsizlik hissini boshdan kechirishi mumkin.</p>
                </div>
                <img src="{{ asset('images/sections/differensial-topshiriqlar/03_checklist.png') }}" alt="" class="hidden sm:block h-24 w-auto shrink-0 object-contain">
            </div>
        </div>

        {{-- Metodik yechim: uch daraja --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">UCH DARAJALI TOPSHIRIQ TIZIMI</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                <div class="flex items-start justify-between gap-2 rounded-xl border border-emerald-200 bg-emerald-50 p-4">
                    <div class="min-w-0">
                        <div class="flex items-center gap-1.5 mb-1">
                            <img src="{{ asset('images/sections/differensial-topshiriqlar/11_happy.png') }}" alt="" class="h-5 w-5 object-contain">
                            <p class="text-xs font-bold text-emerald-900">Oson daraja</p>
                        </div>
                        <p class="text-xs text-emerald-700">Matndan aniq javob topish.</p>
                    </div>
                    <img src="{{ asset('images/sections/differensial-topshiriqlar/09_plant.png') }}" alt="" class="hidden sm:block h-14 w-auto shrink-0 object-contain">
                </div>
                <div class="flex items-start justify-between gap-2 rounded-xl border border-amber-200 bg-amber-50 p-4">
                    <div class="min-w-0">
                        <div class="flex items-center gap-1.5 mb-1">
                            <img src="{{ asset('images/sections/differensial-topshiriqlar/12_neutral.png') }}" alt="" class="h-5 w-5 object-contain">
                            <p class="text-xs font-bold text-amber-900">O'rta daraja</p>
                        </div>
                        <p class="text-xs text-amber-700">Sababni tushuntirish, qahramon harakatini izohlash.</p>
                    </div>
                    <img src="{{ asset('images/sections/differensial-topshiriqlar/06_graduation_books.png') }}" alt="" class="hidden sm:block h-14 w-auto shrink-0 object-contain">
                </div>
                <div class="flex items-start justify-between gap-2 rounded-xl border border-rose-200 bg-rose-50 p-4">
                    <div class="min-w-0">
                        <div class="flex items-center gap-1.5 mb-1">
                            <img src="{{ asset('images/sections/differensial-topshiriqlar/13_sad.png') }}" alt="" class="h-5 w-5 object-contain">
                            <p class="text-xs font-bold text-rose-900">Murakkab daraja</p>
                        </div>
                        <p class="text-xs text-rose-700">Xulosa chiqarish, baholash, dalil bilan asoslash, ijodiy javob.</p>
                    </div>
                    <img src="{{ asset('images/sections/differensial-topshiriqlar/07_target.png') }}" alt="" class="hidden sm:block h-14 w-auto shrink-0 object-contain">
                </div>
            </div>
        </div>

        {{-- Amaliy mashqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MASHQ — MATN: "KICHIK BOG'BON"</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="flex flex-col justify-between rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                    <div>
                        <p class="text-xs font-bold text-emerald-900 mb-2">Oson daraja</p>
                        <ol class="space-y-1.5 text-xs text-emerald-800">
                            <li>1. Qahramon kim?</li>
                            <li>2. U nima ekdi?</li>
                            <li>3. Ko'chatga nima quydi?</li>
                        </ol>
                    </div>
                    <img src="{{ asset('images/sections/differensial-topshiriqlar/09_plant.png') }}" alt="" class="mt-3 h-16 w-auto self-end object-contain">
                </div>
                <div class="flex flex-col justify-between rounded-xl border border-amber-200 bg-amber-50 p-5">
                    <div>
                        <p class="text-xs font-bold text-amber-900 mb-2">O'rta daraja</p>
                        <ol class="space-y-1.5 text-xs text-amber-800">
                            <li>1. Qahramon ko'chatga qanday g'amxo'rlik qildi?</li>
                            <li>2. Nima uchun ko'chatda yangi barglar paydo bo'ldi?</li>
                            <li>3. Qahramonning harakati uning qanday bola ekanini ko'rsatadi?</li>
                        </ol>
                    </div>
                    <img src="{{ asset('images/sections/differensial-topshiriqlar/08_watering_can.png') }}" alt="" class="mt-3 h-16 w-auto self-end object-contain">
                </div>
                <div class="flex flex-col justify-between rounded-xl border border-rose-200 bg-rose-50 p-5">
                    <div>
                        <p class="text-xs font-bold text-rose-900 mb-2">Murakkab daraja</p>
                        <ol class="space-y-1.5 text-xs text-rose-800">
                            <li>1. Matnning asosiy g'oyasi nima?</li>
                            <li>2. Siz qahramonning ishini foydali deb hisoblaysizmi? Nega?</li>
                            <li>3. Javobingizni matndan dalil bilan asoslang.</li>
                            <li>4. "Men ham tabiatga yordam beraman" mavzusida 4 gap yozing.</li>
                        </ol>
                    </div>
                    <img src="{{ asset('images/sections/differensial-topshiriqlar/tree.png') }}" alt="" class="mt-3 h-16 w-auto self-end object-contain">
                </div>
            </div>
        </div>

        {{-- O'qituvchi harakati --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">O'QITUVCHI HARAKATI</div>
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <p class="text-xs text-slate-600 leading-relaxed mb-4">O'qituvchi differensial topshiriqlarni berishda o'quvchilarni "kuchli", "sust" deb ajratib qo'ymasligi kerak. Topshiriqlarni "1-daraja", "2-daraja", "3-daraja" yoki "Yulduzcha", "Oycha", "Quyoshcha" kabi neytral nomlar bilan berish mumkin.</p>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-5">
                    @foreach([
                        ['icon' => '14_group.png', 'text' => "O'quvchilarni 3 ta darajaga ajratadi"],
                        ['icon' => '15_clipboard_icon.png', 'text' => "O'quvchiga mos darajadagi vazifani beradi"],
                        ['icon' => '16_chart.png', 'text' => 'Matn asosida uch darajali topshiriq tayyorlaydi'],
                        ['icon' => '17_chat.png', 'text' => 'Bajarilgan ishni individual baholaydi'],
                        ['icon' => '18_trophy.png', 'text' => "O'quvchini keyingi darajaga o'tishga rag'batlantiradi"],
                    ] as $a)
                        <div class="flex flex-col items-center text-center gap-2">
                            <img src="{{ asset('images/sections/differensial-topshiriqlar/'.$a['icon']) }}" alt="" class="h-9 w-9 object-contain">
                            <p class="text-[11px] leading-snug text-slate-600">{{ $a['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Ota-ona bilan hamkorlik --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">OTA-ONA BILAN HAMKORLIK</div>
            <div class="flex items-center gap-4 rounded-xl border border-rose-200 bg-rose-50 p-5">
                <img src="{{ asset('images/sections/differensial-topshiriqlar/handshake.png') }}" alt="" class="hidden sm:block h-16 w-auto shrink-0 object-contain">
                <div class="min-w-0 flex-1">
                    <p class="text-xs text-rose-700 italic mb-3">"Farzandingiz matndan aniq javoblarni yaxshi topmoqda. Endi u bilan 'Nega?', 'Qanday bilding?' kabi savollar ustida ko'proq ishlash tavsiya etiladi."</p>
                    <p class="text-xs font-bold text-rose-900 mb-2">Uyga vazifa ham differensial bo'lishi mumkin:</p>
                    <ul class="space-y-1.5 text-xs text-rose-800">
                        <li>✓ Oson: matndan 3 ta so'z topish</li>
                        <li>✓ O'rta: matn mazmunini 3 gap bilan aytish</li>
                        <li>✓ Murakkab: matndan xulosa yozish</li>
                    </ul>
                </div>
                <img src="{{ asset('images/sections/differensial-topshiriqlar/10_family_reading.png') }}" alt="" class="hidden md:block h-24 w-auto shrink-0 object-contain">
            </div>
        </div>

        {{-- Baholash --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BAHOLASH — 0–3 BALLIK RUBRIKA</div>
            <div class="flex items-center gap-4">
                <div class="min-w-0 flex-1 overflow-x-auto rounded-xl border border-slate-200">
                    <table class="w-full text-xs">
                        <thead class="bg-slate-100 text-slate-700 font-semibold">
                            <tr>
                                <th class="px-4 py-3 text-left">Ball</th>
                                <th class="px-4 py-3 text-left">Tavsif</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach([
                                ['3 ball', "Topshiriq to'liq, dalil va xulosa bilan bajarilgan"],
                                ['2 ball', 'Javob to\'g\'ri, lekin izoh yetarli emas'],
                                ['1 ball', 'Javob qisman to\'g\'ri'],
                                ['0 ball', 'Javob noto\'g\'ri yoki bajarilmagan'],
                            ] as $row)
                                <tr class="bg-white hover:bg-slate-50">
                                    <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }}</td>
                                    <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <img src="{{ asset('images/sections/differensial-topshiriqlar/34_trophy_large.png') }}" alt="" class="hidden md:block h-28 w-auto shrink-0 object-contain">
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-violet-200 bg-gradient-to-r from-violet-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex flex-1 items-start gap-3">
                    <img src="{{ asset('images/sections/differensial-topshiriqlar/18_trophy.png') }}" alt="" class="h-8 w-8 shrink-0 object-contain">
                    <div>
                        <p class="text-sm font-bold text-violet-900 mb-2">Kutiladigan natija</p>
                        <p class="text-xs text-violet-800 leading-relaxed">Har bir o'quvchi o'z darajasiga mos topshiriq bajaradi. O'quvchilar o'z imkoniyatiga qarab rivojlanadi, qiyinchilikdan qo'rqmaydi, kuchli o'quvchilar esa murakkabroq topshiriqlar orqali yanada o'sadi.</p>
                    </div>
                </div>
                <a href="{{ route('barcha-oquvchilarga-yordam.show', 'ikkinchi-til-oquvchilari') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-violet-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
