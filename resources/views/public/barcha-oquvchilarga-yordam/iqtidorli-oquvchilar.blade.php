@extends('layouts.app')
@section('title', "Iqtidorli o'quvchilar bilan ishlash — Barcha o'quvchilarga yordam berish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'iqtidorli-oquvchilar'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-amber-100 text-amber-700">4</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Barcha o'quvchilarga yordam berish • 4-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Iqtidorli o'quvchilar bilan ishlash</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Sinfda ayrim o'quvchilar matnni tez o'qiydi, mazmunini chuqur tushunadi, savollarga keng javob beradi va ijodiy fikrlaydi. Bunday o'quvchilarga murakkabroq, ijodiy, tahliliy va mustaqil izlanishga yo'naltirilgan topshiriqlar zarur.</p>
        </div>

        {{-- Muammo tavsifi --}}
        <div class="mb-6 rounded-xl border border-amber-300 bg-amber-100 p-5">
            <div class="flex items-center gap-2 mb-3">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </span>
                <h3 class="text-sm font-bold text-amber-900">MUAMMO TAVSIFI</h3>
            </div>
            <p class="text-xs text-amber-800 leading-relaxed">Agar bunday o'quvchilarga faqat oddiy topshiriqlar berilsa, ular zerikib qolishi yoki o'z imkoniyatini to'liq namoyon qila olmasligi mumkin.</p>
        </div>

        {{-- Metodik yechim --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">METODIK YECHIM</div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">
                @foreach([
                    ['icon'=>'📚','label'=>'Murakkabroq matnlar berish','sub'=>'Uzunroq, mazmunan chuqurroq'],
                    ['icon'=>'⚖️','label'=>'Ikki matnni solishtirish','sub'=>"O'xshash va farqli tomonlar"],
                    ['icon'=>'🎭','label'=>'Muallif pozitsiyasini aniqlash','sub'=>'Nima demoqchi ekanini tahlil'],
                    ['icon'=>'✍️','label'=>'Ijodiy yakun yozish','sub'=>"Matnga boshqa yakun"],
                    ['icon'=>'🎤','label'=>'Mustaqil kitob taqdimoti','sub'=>'Sinfdoshlarga tavsiya'],
                    ['icon'=>'❓','label'=>'PIRLS savoli tuzish','sub'=>"O'zi savol yaratadi"],
                ] as $m)
                    <div class="rounded-xl border border-slate-200 bg-white p-4 text-center">
                        <div class="text-2xl mb-1">{{ $m['icon'] }}</div>
                        <p class="text-xs font-bold text-slate-700">{{ $m['label'] }}</p>
                        <p class="text-xs text-slate-400 mt-0.5">{{ $m['sub'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Amaliy mashqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MASHQLAR</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-blue-200 bg-blue-50 p-5">
                    <p class="text-xs font-bold text-blue-900 mb-2">1-mashq. "Matnga yangi yakun yoz"</p>
                    <p class="text-xs text-blue-800 leading-relaxed">O'quvchi matn yakunini o'zgartiradi va nima uchun shunday yakun tanlaganini izohlaydi.</p>
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
                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                    <p class="text-xs font-bold text-emerald-900 mb-2">3-mashq. "Men savol tuzaman"</p>
                    <p class="text-xs text-emerald-800 leading-relaxed mb-2">O'quvchi matn bo'yicha 4 darajada savol tuzadi:</p>
                    <p class="text-xs text-emerald-700">aniq axborot • xulosa • talqin • baholash</p>
                </div>
                <div class="rounded-xl border border-rose-200 bg-rose-50 p-5">
                    <p class="text-xs font-bold text-rose-900 mb-2">4-mashq. "Ikki matn — bir xulosa"</p>
                    <p class="text-xs text-rose-800 leading-relaxed">O'quvchi ikki matnni o'qib, umumiy g'oyani aniqlaydi.</p>
                </div>
            </div>
        </div>

        {{-- O'qituvchi harakati --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">O'QITUVCHI HARAKATI</div>
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach([
                        'Ularga qo\'shimcha ijodiy topshiriq beradi',
                        "Mustaqil o'qish ro'yxatini tavsiya qiladi",
                        'Murakkab savollar beradi',
                        'Sinf muhokamasida moderatorlik vazifasini topshiradi',
                        "O'quvchini savol tuzishga jalb qiladi",
                        'Uning fikrini asoslashni talab qiladi',
                        'Faqat tez ishlagani uchun emas, fikrining chuqurligi uchun rag\'batlantiradi',
                    ] as $a)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-amber-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
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
                <ul class="space-y-1.5 text-xs text-rose-800">
                    <li>• Bolaga yoshiga mos, lekin mazmunan boy kitoblar tanlash</li>
                    <li>• O'qigan kitobi haqida suhbatlashish</li>
                    <li>• "Nima uchun?", "Siz qanday yakun yozardingiz?" kabi savollar berish</li>
                    <li>• Bolaning mustaqil kitob taqdimotini qo'llab-quvvatlash</li>
                    <li>• U bilan kutubxona yoki kitob do'koniga borish</li>
                    <li>• Bolaning fikrini hurmat qilish</li>
                </ul>
            </div>
        </div>

        {{-- Baholash --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BAHOLASH</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
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

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-amber-200 bg-gradient-to-r from-amber-50 to-orange-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-amber-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-amber-800 leading-relaxed">Iqtidorli o'quvchi chuqurroq fikrlaydi, mustaqil o'qiydi, savol tuzadi, matnga ijodiy munosabat bildiradi va o'z fikrini dalil bilan asoslaydi. Uning o'qishga bo'lgan qiziqishi yanada ortadi.</p>
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
