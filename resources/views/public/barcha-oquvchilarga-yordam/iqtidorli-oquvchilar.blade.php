@extends('layouts.app')
@section('title', "Iqtidorli o'quvchilar bilan ishlash — Barcha o'quvchilarga yordam berish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'iqtidorli-oquvchilar'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="mb-6 rounded-2xl overflow-hidden relative bg-white border border-slate-200 px-6 py-6">
            <div class="relative flex items-center gap-6">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-amber-100 text-amber-600">4</span>
                        <span class="text-xs text-amber-600 uppercase tracking-wide font-medium">Barcha o'quvchilarga yordam berish • 4-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Iqtidori o'quvchilar bilan ishlash</h1>
                    <p class="mt-2 text-slate-500 leading-relaxed max-w-lg text-sm">Sinfda ayrim o'quvchilar matnni tez o'qiydi, mazmunini chuqur tushunadi, savollarga keng javob beradi va ijodiy fikrlaydi.</p>
                    <p class="mt-2 text-slate-500 leading-relaxed max-w-lg text-sm">Bunday o'quvchilarga murakkabroq, ijodiy, tahliliy va mustaqil izlanishga yo'naltirilgan topshiriqlar zarur.</p>
                </div>
                <div class="hidden sm:block shrink-0">
                    <img src="{{ asset('images/sections/iqtidorli-oquvchilar/01_ikki_bola_kitob_oqiyapti.png') }}" alt="" class="h-44 w-auto object-contain">
                </div>
            </div>
        </div>

        {{-- Muammo tavsifi --}}
        <div class="mb-6 rounded-xl border border-amber-200 bg-amber-50 p-5">
            <div class="flex items-center justify-between gap-4">
                <div class="min-w-0">
                    <div class="flex items-center gap-3 mb-3">
                        <img src="{{ asset('images/sections/iqtidorli-oquvchilar/02_nishon_va_oq.png') }}" alt="" class="h-10 w-10 object-contain">
                        <h3 class="text-sm font-bold text-amber-700 tracking-wide">MUAMMO TAVSIFI</h3>
                    </div>
                    <p class="text-xs text-amber-800 leading-relaxed max-w-xl">Agar bunday o'quvchilarga faqat oddiy topshiriqlar berilsa, ular zerikib qolishi yoki o'z imkoniyatini to'liq namoyon qila olmasligi mumkin.</p>
                </div>
                <img src="{{ asset('images/sections/iqtidorli-oquvchilar/03_kitoblar_toplami.png') }}" alt="" class="hidden sm:block h-20 w-auto shrink-0 object-contain">
            </div>
        </div>

        {{-- Metodik yechim --}}
        <div class="mb-6">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-4 w-1 rounded bg-amber-500"></span>
                <h2 class="text-sm font-bold text-slate-800 tracking-wide">METODIK YECHIM</h2>
            </div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">
                @foreach([
                    ['icon' => '06_ochiq_kitob_va_lupa.png', 'label' => 'Murakkabroq matnlar berish', 'sub' => 'Uzunroq, mazmunan chuqurroq'],
                    ['icon' => '07_pazl_bolaklari.png', 'label' => 'Ikki matn solishtirish', 'sub' => "O'xshash va farqli tomonlar"],
                    ['icon' => '08_oltin_medal.png', 'label' => 'Muallif pozitsiyasini anglash', 'sub' => 'Nima demoqchi ekanini tahlil'],
                    ['icon' => '10_raketa.png', 'label' => 'Ijodiy yakun yozish', 'sub' => 'Matnga boshqa yakun'],
                    ['icon' => '15_mikrofon.png', 'label' => 'Mustaqil kitob taqdimoti', 'sub' => 'Sinfdoshlarga tavsiya'],
                    ['icon' => '19_savol_belgisi.png', 'label' => 'PIRLS savoli tuzish', 'sub' => "O'zi savol yaratadi"],
                ] as $m)
                    <div class="flex flex-col items-center gap-2 rounded-xl border border-slate-200 bg-white p-4 text-center">
                        <img src="{{ asset('images/sections/iqtidorli-oquvchilar/'.$m['icon']) }}" alt="" class="h-12 w-12 object-contain">
                        <div>
                            <p class="text-xs font-bold text-slate-800 leading-snug">{{ $m['label'] }}</p>
                            <p class="text-[11px] text-slate-400 mt-0.5 leading-snug">{{ $m['sub'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Amaliy mashqlar --}}
        <div class="mb-6">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-4 w-1 rounded bg-amber-500"></span>
                <h2 class="text-sm font-bold text-slate-800 tracking-wide">AMALIY MASHQLAR</h2>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col justify-between rounded-xl border border-blue-200 bg-blue-50 p-5">
                    <div>
                        <p class="text-xs font-bold text-blue-900 mb-2">1-mashq. "Matnga yangi yakun yoz"</p>
                        <p class="text-xs text-blue-800 leading-relaxed">O'quvchi matn yakunini o'zgartiradi va nima uchun shunday yakun tanlaganini izohlaydi.</p>
                    </div>
                    <img src="{{ asset('images/sections/iqtidorli-oquvchilar/04_kitoblar_qalam_va_osimlik.png') }}" alt="" class="mt-4 h-16 w-auto self-end object-contain">
                </div>
                <div class="rounded-xl border border-violet-200 bg-violet-50 p-5">
                    <p class="text-xs font-bold text-violet-900 mb-2">2-mashq. "Muallifga savol"</p>
                    <p class="text-xs text-violet-800 leading-relaxed mb-2">O'quvchi matn muallifiga 3 ta savol yozadi:</p>
                    <ul class="space-y-1 text-xs text-violet-800">
                        <li>• Nima uchun qahramon aynan shunday qaror qildi?</li>
                        <li>• Siz matnni boshqacha yakunlarmidingiz?</li>
                        <li>• Bu hikoya orqali qanday fikr bermoqchi bo'ldingiz?</li>
                    </ul>
                </div>
                <div class="flex flex-col justify-between rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                    <div>
                        <p class="text-xs font-bold text-emerald-900 mb-2">3-mashq. "Men savol tuzaman"</p>
                        <p class="text-xs text-emerald-800 leading-relaxed mb-2">O'quvchi matn bo'yicha 4 darajada savol tuzadi:</p>
                        <ul class="space-y-1 text-xs text-emerald-700">
                            <li>• aniq axborot</li>
                            <li>• xulosa</li>
                            <li>• talqin</li>
                            <li>• baholash</li>
                        </ul>
                    </div>
                    <img src="{{ asset('images/sections/iqtidorli-oquvchilar/13_xabar_bulutchalari.png') }}" alt="" class="mt-4 h-14 w-auto self-end object-contain">
                </div>
                <div class="flex flex-col justify-between rounded-xl border border-rose-200 bg-rose-50 p-5">
                    <div>
                        <p class="text-xs font-bold text-rose-900 mb-2">4-mashq. "Ikki matn — bir xulosa"</p>
                        <p class="text-xs text-rose-800 leading-relaxed">O'quvchi ikki matnni o'qib, umumiy g'oyani aniqlaydi.</p>
                    </div>
                    <img src="{{ asset('images/sections/iqtidorli-oquvchilar/03_kitoblar_toplami.png') }}" alt="" class="mt-4 h-16 w-auto self-end object-contain">
                </div>
            </div>
        </div>

        {{-- O'qituvchi harakati --}}
        <div class="mb-6">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-4 w-1 rounded bg-amber-500"></span>
                <h2 class="text-sm font-bold text-slate-800 tracking-wide">O'QITUVCHI HARAKATI</h2>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-7">
                    @foreach([
                        ['icon' => '10_raketa.png', 'text' => 'Ularga qo\'shimcha ijodiy topshiriq beradi'],
                        ['icon' => '17_kalendar.png', 'text' => "Mustaqil o'qish ro'yxatini tavsiya qiladi"],
                        ['icon' => '19_savol_belgisi.png', 'text' => 'Murakkab savollar beradi'],
                        ['icon' => '13_xabar_bulutchalari.png', 'text' => 'Sinf muhokamasida moderatorlik vazifasini topshiradi'],
                        ['icon' => '09_checklist_va_qalam.png', 'text' => "O'quvchini savol tuzishga jalb qiladi"],
                        ['icon' => '14_lampochka.png', 'text' => 'Uning fikrini asoslashni talab qiladi'],
                        ['icon' => '20_megafon.png', 'text' => "Faqat tez ishlagani uchun emas, fikrining chuqurligi uchun rag'batlantiradi"],
                    ] as $a)
                        <div class="flex flex-col items-center text-center gap-2">
                            <img src="{{ asset('images/sections/iqtidorli-oquvchilar/'.$a['icon']) }}" alt="" class="h-10 w-10 object-contain">
                            <p class="text-[11px] leading-snug text-slate-600">{{ $a['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Ota-ona bilan hamkorlik & Baholash --}}
        <div class="mb-6 grid grid-cols-1 gap-4 lg:grid-cols-2">
            <div class="rounded-xl border border-rose-200 bg-rose-50 p-5">
                <h3 class="text-sm font-bold text-rose-900 mb-3 tracking-wide">OTA-ONA BILAN HAMKORLIK</h3>
                <ul class="space-y-1.5 text-xs text-rose-800">
                    <li class="flex items-start gap-1.5"><span class="mt-0.5 text-rose-500">✓</span> Bolaga yoshiga mos, lekin mazmunan boy kitoblar tanlash</li>
                    <li class="flex items-start gap-1.5"><span class="mt-0.5 text-rose-500">✓</span> O'qigan kitobi haqida suhbatlashish</li>
                    <li class="flex items-start gap-1.5"><span class="mt-0.5 text-rose-500">✓</span> "Nima uchun?", "Siz qanday yakun yozardingiz?" kabi savollar berish</li>
                    <li class="flex items-start gap-1.5"><span class="mt-0.5 text-rose-500">✓</span> Bolaning mustaqil kitob taqdimotini qo'llab-quvvatlash</li>
                    <li class="flex items-start gap-1.5"><span class="mt-0.5 text-rose-500">✓</span> U bilan kutubxona yoki kitob do'koniga borish</li>
                    <li class="flex items-start gap-1.5"><span class="mt-0.5 text-rose-500">✓</span> Bolaning fikrini hurmat qilish</li>
                </ul>
                <img src="{{ asset('images/sections/iqtidorli-oquvchilar/16_oila_kitob_oqiyapti.png') }}" alt="" class="mt-3 h-24 w-auto ml-auto object-contain">
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <h3 class="text-sm font-bold text-slate-800 mb-3 tracking-wide">BAHOLASH</h3>
                <div class="overflow-x-auto rounded-lg border border-slate-200">
                    <table class="w-full text-xs">
                        <thead class="bg-slate-100 text-slate-700 font-semibold">
                            <tr>
                                <th class="px-4 py-3 text-left">Ko'rsatkich</th>
                                <th class="px-4 py-3 text-left">Baholash mezoni</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach([
                                ['Tahlil', "Matn g'oyasini chuqur anglaydi"],
                                ['Dalil', 'Fikrini matndan asoslaydi'],
                                ['Ijodkorlik', 'Yangi yakun, savol yoki fikr yaratadi'],
                                ['Mustaqillik', 'Topshiriqni mustaqil bajaradi'],
                                ['Taqdimot', "O'qiganini boshqalarga tushuntira oladi"],
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
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-amber-200 bg-gradient-to-r from-amber-50 to-orange-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex flex-1 items-start gap-3">
                    <img src="{{ asset('images/sections/iqtidorli-oquvchilar/11_kubok.png') }}" alt="" class="h-10 w-10 shrink-0 object-contain">
                    <div>
                        <p class="text-sm font-bold text-amber-900 mb-2">Kutiladigan natija</p>
                        <p class="text-xs text-amber-800 leading-relaxed">Iqtidorli o'quvchi chuqurroq fikrlaydi, mustaqil o'qiydi, savol tuzadi, matnga ijodiy munosabat bildiradi va o'z fikrini dalil bilan asoslaydi. Uning o'qishga bo'lgan qiziqishi yanada ortadi.</p>
                    </div>
                </div>
                <a href="{{ route('barcha-oquvchilarga-yordam.show', 'individual-oqish-xaritasi') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-amber-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-amber-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
