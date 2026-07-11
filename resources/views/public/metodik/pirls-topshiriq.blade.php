@extends('layouts.app')
@section('title', "PIRLS topshiriqlarini yaratish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'pirls-topshiriq'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-blue-100 text-blue-700">3</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Metodik modul • 3-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">PIRLS topshiriqlarini yaratish</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Bo'lajak boshlang'ich sinf o'qituvchilariga PIRLS tipidagi topshiriqlarni yaratish, savollarni o'qish maqsadlariga moslashtirish, javob kaliti va baholash mezonlarini ishlab chiqishni o'rgatish.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-blue-300 bg-blue-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-blue-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-blue-800 leading-relaxed">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga PIRLS tipidagi topshiriqlarni yaratish, savollarni o'qish maqsadlariga moslashtirish, javob kaliti va baholash mezonlarini ishlab chiqishni o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-xl border border-cyan-300 bg-cyan-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-cyan-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-cyan-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-cyan-800 leading-relaxed mb-2">PIRLS topshiriqlari o'quvchining matnni qanday o'qiyotgani va qanchalik chuqur tushunayotganini aniqlashga xizmat qiladi. Bunday topshiriqlar oddiy test emas. Ular o'quvchining matndan axborot topishi, xulosa chiqarishi, g'oyani talqin qilishi va matnga baho berishini aniqlaydi.</p>
                <p class="text-xs text-cyan-800 font-semibold">PIRLS tipidagi topshiriqlar 2 asosiy matn turiga asoslanadi:</p>
            </div>
        </div>

        {{-- 2 matn turi + 7 element --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="grid grid-cols-1 gap-3">
                <div class="rounded-xl border border-blue-300 bg-blue-100 p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-600 text-white text-xs font-bold">1</span>
                        <h4 class="text-xs font-bold text-blue-900">BADIIY MATNLAR</h4>
                    </div>
                    <p class="text-xs text-blue-800 leading-relaxed">Qahramon, voqea, muammo, yechim, kayfiyat va g'oya tahlil qilinadi.</p>
                </div>
                <div class="rounded-xl border border-teal-300 bg-teal-100 p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-teal-600 text-white text-xs font-bold">2</span>
                        <h4 class="text-xs font-bold text-teal-900">AXBOROT MATNLARI</h4>
                    </div>
                    <p class="text-xs text-teal-800 leading-relaxed">Fakt, tushuncha, jarayon, sabab-oqibat, taqqoslash va umumlashtirish aniqlanadi.</p>
                </div>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <h4 class="text-xs font-bold text-slate-800 mb-3">TOPSHIRIQ YARATISHDA QUYIDAGI ELEMENTLAR BO'LISHI KERAK:</h4>
                <div class="grid grid-cols-2 gap-2">
                    @foreach (["Matn","Savollar","Javob variantlari yoki ochiq javob","Javob kaliti","Baholash mezoni","Ko'nikma turi","Ball"] as $el)
                        <div class="flex items-center gap-1.5 rounded-lg bg-blue-50 border border-blue-200 px-2.5 py-2 text-xs font-medium text-blue-800">
                            <svg class="h-3 w-3 text-blue-500" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                            {{ $el }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY METODLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                <div class="rounded-xl border border-blue-300 bg-blue-100 p-4">
                    <h4 class="text-xs font-bold text-blue-900 mb-3">"4 DARAJALI SAVOL MODELI"</h4>
                    <p class="text-xs text-blue-800 mb-3">Har bir matnga kamida 4 xil savol tuziladi:</p>
                    <div class="space-y-2">
                        @foreach ([
                            ['n'=>1,'t'=>"Matndan aniq axborotni topish",'c'=>'bg-blue-200'],
                            ['n'=>2,'t'=>"Bevosita xulosa chiqarish",'c'=>'bg-cyan-200'],
                            ['n'=>3,'t'=>"G'oya va axborotni talqin qilish",'c'=>'bg-violet-200'],
                            ['n'=>4,'t'=>"Matn mazmuni yoki qahramon harakatini baholash",'c'=>'bg-emerald-200'],
                        ] as $d)
                            <div class="flex items-center gap-2 rounded-lg px-2.5 py-2 {{ $d['c'] }}">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-slate-800 text-white font-bold text-[10px]">{{ $d['n'] }}</span>
                                <span class="text-xs font-medium text-slate-700">{{ $d['t'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="rounded-xl border border-violet-300 bg-violet-100 p-4">
                        <h4 class="text-xs font-bold text-violet-900 mb-1">"SAVOL + DALIL" METODI</h4>
                        <p class="text-xs text-violet-800 leading-relaxed">O'quvchi javob bergandan keyin "Buni qaysi gapdan bildingiz?" savoli beriladi. O'quvchi matndan aniq dalil keltiradi.</p>
                    </div>
                    <div class="rounded-xl border border-teal-300 bg-teal-100 p-4">
                        <h4 class="text-xs font-bold text-teal-900 mb-1">"OCHIQ JAVOB" METODI</h4>
                        <p class="text-xs text-teal-800 leading-relaxed">O'quvchi bir yoki ikki gap bilan o'z fikrini yozadi. Bu o'quvchining haqiqiy tushunish darajasini ko'rsatadi.</p>
                    </div>
                    <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-4">
                        <h4 class="text-xs font-bold text-emerald-900 mb-1">"BAHOLASH RUBRIKASI" METODI</h4>
                        <p class="text-xs text-emerald-800 leading-relaxed">O'quvchi javobi 0, 1, 2 yoki 3 ball asosida belgilangan mezon bo'yicha baholanadi.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Darsda qo'llash + O'qituvchi tavsiya --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-sm font-bold text-slate-800 mb-3">DARSDA QO'LLASH TARTIBI</h3>
                <ol class="space-y-1.5">
                    @foreach ([
                        "O'qituvchi yoki talaba matn tanlaydi",
                        "Matn turi aniqlanadi",
                        "Matnning asosiy g'oyasi belgilanadi",
                        "Savollar 4 daraja bo'yicha tuziladi",
                        "Har bir savol uchun javob kaliti yoziladi",
                        "Ochiq savollar uchun baholash mezoni belgilanadi",
                        "Topshiriq o'quvchilarga beriladi",
                        "Javoblar tahlil qilinadi",
                        "Qaysi ko'nikma sust ekani aniqlanadi",
                    ] as $i => $step)
                        <li class="flex items-start gap-2 text-xs text-slate-700">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $step }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div>
                <div class="rounded-xl border border-cyan-300 bg-cyan-100 p-4 mb-3">
                    <h3 class="text-sm font-bold text-cyan-900 mb-2">TALABALAR UCHUN MASHQ</h3>
                    <ol class="space-y-1.5">
                        @foreach ([
                            "4-sinf o'quvchilari uchun 250–300 so'zli matn tanlang",
                            "Matn turini aniqlang",
                            "8 ta savol tuzing: 2 ta aniq, 2 ta xulosa, 2 ta talqin, 2 ta baholash",
                            "Har bir savolga javob kaliti yozing",
                            "2 ta savol uchun 0–3 ballik rubrika yarating",
                            "Topshiriqning qaysi o'qish ko'nikmasini rivojlantirishini izohlang",
                        ] as $i => $item)
                            <li class="flex items-start gap-1.5 text-xs text-cyan-800">
                                <span class="inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-cyan-600 text-white font-bold text-[9px]">{{ $i+1 }}</span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ol>
                </div>
                <div class="rounded-xl border border-amber-300 bg-amber-100 p-4">
                    <h3 class="text-sm font-bold text-amber-900 mb-2">O'QITUVCHI UCHUN TAVSIYA</h3>
                    <p class="text-xs text-amber-800 leading-relaxed">PIRLS topshiriqlarini yaratishda savollarni haddan tashqari murakkablashtirib yubormang. Boshlang'ich sinf o'quvchisi fikrlashi kerak, lekin savolni tushunmay qolmasligi lozim. <strong>Savol matn mazmuniga tayangan, aniq, yoshga mos va baholash mezoni bilan ta'minlangan bo'lishi kerak.</strong></p>
                </div>
            </div>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">NAMUNAVIY TOPSHIRIQ</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>
                    <div class="rounded-xl border border-slate-300 bg-slate-100 p-4 mb-3">
                        <p class="text-xs font-bold text-slate-700 mb-2">Matn parchasi:</p>
                        <p class="text-xs text-slate-700 leading-relaxed italic bg-white rounded-lg p-3 border border-slate-200">"Bahrom maktab kutubxonasidan qushlar haqida kitob oldi. U kitobdan laylaklar uzoq masofaga uchishini, ular bahorda yana o'z uyalariga qaytishini bildi. Ertasi kuni Bahrom hovlidagi daraxtga qarab, unda qushlar uchun kichik uya yasashni o'yladi."</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                        <p class="text-xs font-bold text-slate-700 mb-2">Baholash mezoni:</p>
                        <div class="overflow-hidden rounded-lg border border-slate-200">
                            <table class="w-full text-xs">
                                <thead><tr class="bg-slate-100 border-b border-slate-200">
                                    <th class="px-2 py-2 text-left font-bold text-slate-700">Ball</th>
                                    <th class="px-2 py-2 text-left font-bold text-slate-700">Tavsif</th>
                                </tr></thead>
                                <tbody class="divide-y divide-slate-100">
                                    @foreach ([
                                        ['3 ball','bg-emerald-100 text-emerald-700',"O'quvchi fikrini to'liq bildiradi, matndan dalil keltiradi, xulosa chiqaradi."],
                                        ['2 ball','bg-blue-100 text-blue-700',"Javob to'g'ri, lekin dalil yoki izoh yetarli emas."],
                                        ['1 ball','bg-amber-100 text-amber-700',"Javob qisman to'g'ri, fikr yuzaki."],
                                        ['0 ball','bg-red-100 text-red-700',"Javob noto'g'ri yoki matnga aloqador emas."],
                                    ] as $r)
                                        <tr>
                                            <td class="px-2 py-2"><span class="rounded-full px-2 py-0.5 text-[10px] font-bold {{ $r[1] }}">{{ $r[0] }}</span></td>
                                            <td class="px-2 py-2 text-slate-600">{{ $r[2] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl border border-blue-300 bg-blue-100 p-4">
                    <p class="text-xs font-bold text-blue-900 mb-3">PIRLS tipidagi savollar:</p>
                    <ol class="space-y-2">
                        @foreach ([
                            "Bahrom kutubxonadan qanday kitob oldi?",
                            "Bahrom laylaklar haqida nimalarni bildi?",
                            "Bahrom nima uchun qushlar uchun uya yasashni o'yladi?",
                            "Bahromning bu harakati uning tabiatga munosabatini qanday ko'rsatadi?",
                            "Siz Bahromning ishini foydali deb hisoblaysizmi? Javobingizni asoslang.",
                        ] as $i => $q)
                            <li class="flex items-start gap-2 text-xs text-blue-800">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-600 text-white font-bold text-[10px]">{{ $i+1 }}</span>
                                {{ $q }}
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl bg-gradient-to-br from-slate-800 to-blue-900 p-5 text-white">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="h-4 w-4 text-blue-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                    <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
                </div>
                <ul class="space-y-2">
                    @foreach ([
                        "Talaba PIRLS tipidagi topshiriqlarni mustaqil ishlab chiqadi",
                        "Matn asosida savollarni fikrlash darajalari bo'yicha tuzadi",
                        "Javob kaliti va baholash mezonlarini yaratadi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs text-slate-200">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $n }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-2xl border border-amber-300 bg-amber-50 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="h-4 w-4 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                    <p class="text-xs font-semibold text-amber-800 uppercase tracking-wide">Dissertatsiyadagi ilmiy ahamiyati</p>
                </div>
                <p class="text-xs text-amber-900 leading-relaxed">Bu sahifa dissertatsiyada bo'lajak o'qituvchilarning diagnostik-baholash va metodik loyihalash kompetensiyasini rivojlantirish vositasi sifatida asoslanadi. PIRLS topshiriqlarini yaratish orqali talaba xalqaro baholash mezonlarini amaliy dars jarayoniga moslashtirishni o'rganadi.</p>
            </div>
        </div>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('metodik.show', 'savol-tuzish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Savol tuzish
            </a>
            <a href="{{ route('metodik.show', 'javob-baholash') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                Keyingi: Javobni baholash
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
