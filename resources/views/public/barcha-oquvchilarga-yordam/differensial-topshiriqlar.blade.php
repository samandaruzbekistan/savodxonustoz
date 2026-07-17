@extends('layouts.app')
@section('title', "Differensial topshiriqlar — Barcha o'quvchilarga yordam berish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'differensial-topshiriqlar'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-violet-100 text-violet-700">2</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Barcha o'quvchilarga yordam berish • 2-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Differensial topshiriqlar</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Bir sinfda o'quvchilarning o'qish darajasi bir xil bo'lmaydi. Differensial yondashuv — bu bir xil mavzu yoki matn asosida o'quvchilarga turli darajadagi topshiriqlar berishdir.</p>
        </div>

        {{-- Muammo tavsifi --}}
        <div class="mb-6 rounded-xl border border-violet-300 bg-violet-100 p-5">
            <div class="flex items-center gap-2 mb-3">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </span>
                <h3 class="text-sm font-bold text-violet-900">MUAMMO TAVSIFI</h3>
            </div>
            <p class="text-xs text-violet-800 leading-relaxed">Agar barcha o'quvchilarga bir xil topshiriq berilsa, kuchli o'quvchilar zerikishi, qiynalayotgan o'quvchilar esa muvaffaqiyatsizlik hissini boshdan kechirishi mumkin.</p>
        </div>

        {{-- Metodik yechim: uch daraja --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">UCH DARAJALI TOPSHIRIQ TIZIMI</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-4">
                    <p class="text-xs font-bold text-emerald-900 mb-1">Oson daraja</p>
                    <p class="text-xs text-emerald-700">Matndan aniq javob topish.</p>
                </div>
                <div class="rounded-xl border border-amber-200 bg-amber-50 p-4">
                    <p class="text-xs font-bold text-amber-900 mb-1">O'rta daraja</p>
                    <p class="text-xs text-amber-700">Sababni tushuntirish, qahramon harakatini izohlash.</p>
                </div>
                <div class="rounded-xl border border-rose-200 bg-rose-50 p-4">
                    <p class="text-xs font-bold text-rose-900 mb-1">Murakkab daraja</p>
                    <p class="text-xs text-rose-700">Xulosa chiqarish, baholash, dalil bilan asoslash, ijodiy javob.</p>
                </div>
            </div>
        </div>

        {{-- Amaliy mashqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MASHQ — MATN: "KICHIK BOG'BON"</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                    <p class="text-xs font-bold text-emerald-900 mb-2">Oson daraja</p>
                    <ol class="space-y-1.5 text-xs text-emerald-800">
                        <li>1. Qahramon kim?</li>
                        <li>2. U nima ekdi?</li>
                        <li>3. Ko'chatga nima quydi?</li>
                    </ol>
                </div>
                <div class="rounded-xl border border-amber-200 bg-amber-50 p-5">
                    <p class="text-xs font-bold text-amber-900 mb-2">O'rta daraja</p>
                    <ol class="space-y-1.5 text-xs text-amber-800">
                        <li>1. Qahramon ko'chatga qanday g'amxo'rlik qildi?</li>
                        <li>2. Nima uchun ko'chatda yangi barglar paydo bo'ldi?</li>
                        <li>3. Qahramonning harakati uning qanday bola ekanini ko'rsatadi?</li>
                    </ol>
                </div>
                <div class="rounded-xl border border-rose-200 bg-rose-50 p-5">
                    <p class="text-xs font-bold text-rose-900 mb-2">Murakkab daraja</p>
                    <ol class="space-y-1.5 text-xs text-rose-800">
                        <li>1. Matnning asosiy g'oyasi nima?</li>
                        <li>2. Siz qahramonning ishini foydali deb hisoblaysizmi? Nega?</li>
                        <li>3. Javobingizni matndan dalil bilan asoslang.</li>
                        <li>4. "Men ham tabiatga yordam beraman" mavzusida 4 gap yozing.</li>
                    </ol>
                </div>
            </div>
        </div>

        {{-- O'qituvchi harakati --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">O'QITUVCHI HARAKATI</div>
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <p class="text-xs text-slate-600 leading-relaxed mb-3">O'qituvchi differensial topshiriqlarni berishda o'quvchilarni "kuchli", "sust" deb ajratib qo'ymasligi kerak. Topshiriqlarni "1-daraja", "2-daraja", "3-daraja" yoki "Yulduzcha", "Oycha", "Quyoshcha" kabi neytral nomlar bilan berish mumkin.</p>
                <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach([
                        "O'quvchilarning o'qish darajasini aniqlaydi",
                        'Matn asosida uch darajali topshiriq tayyorlaydi',
                        "O'quvchiga mos darajadagi vazifani beradi",
                        'Bajarilgan ishni individual baholaydi',
                        "O'quvchini keyingi darajaga o'tishga rag'batlantiradi",
                    ] as $a)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $a }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Ota-ona bilan hamkorlik --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">OTA-ONA BILAN HAMKORLIK</div>
            <div class="rounded-xl border border-rose-200 bg-rose-50 p-5">
                <p class="text-xs text-rose-700 italic mb-3">"Farzandingiz matndan aniq javoblarni yaxshi topmoqda. Endi u bilan 'Nega?', 'Qanday bilding?' kabi savollar ustida ko'proq ishlash tavsiya etiladi."</p>
                <p class="text-xs font-bold text-rose-900 mb-2">Uyga vazifa ham differensial bo'lishi mumkin:</p>
                <ul class="space-y-1.5 text-xs text-rose-800">
                    <li>• Oson: matndan 3 ta so'z topish</li>
                    <li>• O'rta: matn mazmunini 3 gap bilan aytish</li>
                    <li>• Murakkab: matndan xulosa yozish</li>
                </ul>
            </div>
        </div>

        {{-- Baholash --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BAHOLASH — 0–3 BALLIK RUBRIKA</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
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
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-violet-200 bg-gradient-to-r from-violet-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-violet-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-violet-800 leading-relaxed">Har bir o'quvchi o'z darajasiga mos topshiriq bajaradi. O'quvchilar o'z imkoniyatiga qarab rivojlanadi, qiyinchilikdan qo'rqmaydi, kuchli o'quvchilar esa murakkabroq topshiriqlar orqali yanada o'sadi.</p>
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
