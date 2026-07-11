@extends('layouts.app')
@section('title', 'Savol tuzish metodikasi')
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'savol-tuzish'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-violet-100 text-violet-700">2</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Metodik modul • 2-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Savol tuzish metodikasi</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Matn asosida turli darajadagi savollar tuzishni, savol orqali o'quvchini fikrlashga yo'naltirishni va o'qish savodxonligini baholashga xizmat qiladigan topshiriqlar yaratishni o'rgatish.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-violet-300 bg-violet-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-violet-800 leading-relaxed">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga matn asosida turli darajadagi savollar tuzishni, savol orqali o'quvchini fikrlashga yo'naltirishni va o'qish savodxonligini baholashga xizmat qiladigan topshiriqlar yaratishni o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-xl border border-pink-300 bg-pink-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-pink-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-pink-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-pink-800 leading-relaxed mb-2">Savol — dars jarayonining oddiy yordamchi vositasi emas, balki <strong>o'quvchining fikrlashini harakatga keltiruvchi metodik mexanizmdir.</strong> To'g'ri tuzilgan savol o'quvchini matnga qaytaradi, dalil izlashga undaydi, sabab-oqibatni tushuntirishga majbur qiladi va mustaqil xulosa chiqarishga yo'naltiradi.</p>
                <p class="text-xs text-pink-800 leading-relaxed">Boshlang'ich sinfda savollar quyidagi darajalarda tuzilishi maqsadga muvofiq.</p>
            </div>
        </div>

        {{-- 5 savol darajasi --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">5 TA SAVOL DARAJASI</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"ANIQ JAVOBLI SAVOLLAR",'desc'=>"Javob matnda ochiq berilgan bo'ladi. O'quvchi matnni sinchiklab o'qib to'g'ri javobni topadi.",'color'=>'border-indigo-300 bg-indigo-100 text-indigo-900'],
                    ['n'=>2,'title'=>"TUSHUNISHGA OID SAVOLLAR",'desc'=>"O'quvchi matn mazmunini izohlaydi va o'z so'zlari bilan tushuntiradi.",'color'=>'border-blue-300 bg-blue-100 text-blue-900'],
                    ['n'=>3,'title'=>"XULOSA CHIQARISHGA OID SAVOLLAR",'desc'=>"Javob matnda bevosita aytilmaydi, lekin mazmundan kelib chiqadi.",'color'=>'border-violet-300 bg-violet-100 text-violet-900'],
                    ['n'=>4,'title'=>"TALQIN QILISH SAVOLLARI",'desc'=>"O'quvchi muallif fikri, qahramon xarakteri yoki asosiy g'oyani izohlaydi.",'color'=>'border-pink-300 bg-pink-100 text-pink-900'],
                    ['n'=>5,'title'=>"BAHOLASH SAVOLLARI",'desc'=>"O'quvchi o'z munosabatini bildiradi va javobini aniq asoslaydi.",'color'=>'border-rose-300 bg-rose-100 text-rose-900'],
                ] as $t)
                    <div class="rounded-xl border p-4 {{ $t['color'] }}">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-800 text-white text-xs font-bold">{{ $t['n'] }}</span>
                            <h4 class="text-xs font-bold">{{ $t['title'] }}</h4>
                        </div>
                        <p class="text-xs leading-relaxed">{{ $t['desc'] }}</p>
                    </div>
                @endforeach
                <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-4">
                    <h4 class="text-xs font-bold text-emerald-900 mb-2">YAXSHI SAVOLNING BELGILARI</h4>
                    <ul class="space-y-1.5">
                        @foreach (["Aniq va tushunarli bo'ladi","Matn mazmuni bilan bog'liq bo'ladi","O'quvchini fikrlashga undaydi","Bitta maqsadga xizmat qiladi","Javobni dalil bilan asoslash imkonini beradi"] as $b)
                            <li class="flex items-start gap-1.5 text-xs text-emerald-800">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                {{ $b }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY METODLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                @foreach ([
                    ['title'=>'"Kim? Nima? Qachon? Qayerda?"','desc'=>"Bu savollar matndan aniq axborotni topishga yordam beradi. O'quvchi matnni sinchklab o'qib, faktlarni aniqlab, ularni to'g'ri tartibda bayon qilishni o'rganadi.",'color'=>'border-blue-300 bg-blue-100 text-blue-900'],
                    ['title'=>'"Nega? Qanday qilib?"','desc'=>"Bu savollar sabab-oqibatni tushunishga xizmat qiladi. O'quvchi savolga asoslangan mulohaza bildiradi va fikrlarini asoslaydi.",'color'=>'border-violet-300 bg-violet-100 text-violet-900'],
                    ['title'=>'"Qanday bildingiz?"','desc'=>"Bu savol o'quvchini javobini matndan dalil bilan asoslashga o'rgatadi. O'quvchi matndan aniq gap yoki iborani topib keltiradi.",'color'=>'border-pink-300 bg-pink-100 text-pink-900'],
                    ['title'=>'"Siz nima deb o\'ylaysiz?"','desc'=>"Bu savol o'quvchining shaxsiy munosabatini aniqlaydi. Savol ijodiy va mustaqil fikrlashni rag'batlantiradi.",'color'=>'border-rose-300 bg-rose-100 text-rose-900'],
                    ['title'=>'"Savolni o\'zing tuz"','desc'=>"O'quvchilar matn bo'yicha o'zlari savol tuzadilar. Bu usul ularning matnni ongli tushunganini ko'rsatadi va chuqur o'qishga undaydi.",'color'=>'border-amber-300 bg-amber-100 text-amber-900'],
                ] as $m)
                    <div class="rounded-xl border p-4 {{ $m['color'] }}">
                        <h4 class="text-xs font-bold mb-2">{{ $m['title'] }}</h4>
                        <p class="text-xs leading-relaxed">{{ $m['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Darsda qo'llash + Talabalar uchun mashq --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-sm font-bold text-slate-800 mb-3">DARSDA QO'LLASH TARTIBI</h3>
                <ol class="space-y-2">
                    @foreach ([
                        "Matn tanlanadi",
                        "Matnning asosiy g'oyasi aniqlanadi",
                        "Har bir g'oya yoki voqea bo'yicha savollar darajalarga ajratiladi",
                        "Avval sodda savollar, keyin murakkab savollar beriladi",
                        "O'quvchilardan javobni matndan dalil bilan asoslash talab qilinadi",
                        "Yakunda o'quvchilarning o'zi savol tuzadi",
                    ] as $i => $step)
                        <li class="flex items-start gap-2 text-xs text-slate-700">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-violet-100 text-violet-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $step }}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="rounded-xl border border-violet-300 bg-violet-100 p-5">
                <h3 class="text-sm font-bold text-violet-900 mb-3">TALABALAR UCHUN MASHQ</h3>
                <p class="text-xs text-violet-800 mb-3">Talabalarga quyidagi topshiriq beriladi:</p>
                <ol class="space-y-1.5">
                    @foreach ([
                        "3-sinf uchun badiiy matn tanlang",
                        "Matn bo'yicha 2 ta aniq javobli savol tuzing",
                        "2 ta xulosa chiqarishga oid savol tuzing",
                        "2 ta baholash savoli tuzing",
                        "Har bir savolga namunaviy javob yozing",
                        "Savollarning qaysi ko'nikmani rivojlantirishini izohlang",
                    ] as $i => $item)
                        <li class="flex items-start gap-1.5 text-xs text-violet-800">
                            <span class="inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-violet-600 text-white font-bold text-[9px]">{{ $i+1 }}</span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-6">
            <div class="rounded-xl border border-amber-300 bg-amber-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-amber-900">O'QITUVCHI UCHUN TAVSIYA</h3>
                </div>
                <p class="text-xs text-amber-800 leading-relaxed">Savol tuzishda bir xil shakldagi savollarni ko'paytirib yubormang. Dars davomida "Kim?", "Nima qildi?" kabi savollar zarur, lekin ular bilan cheklanib qolish o'quvchining chuqur fikrlashini rivojlantirmaydi. <strong>Har bir matnda kamida bitta "Nega?", bitta "Qanday bildingiz?", bitta "Siz qanday fikrdasiz?" savoli bo'lishi tavsiya etiladi.</strong></p>
            </div>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">NAMUNAVIY TOPSHIRIQ</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-slate-300 bg-slate-100 p-4">
                    <p class="text-xs font-bold text-slate-700 mb-2">Matn parchasi:</p>
                    <p class="text-xs text-slate-700 leading-relaxed italic bg-white rounded-lg p-3 border border-slate-200">"Malika buvisining eski sandig'idan kichik kitob topib oldi. Kitobning varaqlari sarg'aygan, lekin undagi ertaklar juda qiziqarli edi. Malika har kuni kechqurun buvisidan shu kitobdagi ertaklarni o'qib berishni so'radi."</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                    <p class="text-xs font-bold text-slate-700 mb-3">Savollar:</p>
                    <ol class="space-y-2">
                        @foreach ([
                            "Malika kitobni qayerdan topdi?",
                            "Kitob qanday holatda edi?",
                            "Nima uchun Malika har kuni buvisidan ertak o'qib berishni so'radi?",
                            "Sizningcha, eski kitoblar nima uchun qadrli bo'lishi mumkin?",
                            "Matndan Malikaning kitobga qiziqqanini ko'rsatuvchi gapni toping.",
                        ] as $i => $q)
                            <li class="flex items-start gap-1.5 text-xs text-slate-700">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-violet-100 text-violet-700 font-bold text-[10px]">{{ $i+1 }}</span>
                                {{ $q }}
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl bg-gradient-to-br from-slate-800 to-violet-900 p-5 text-white">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="h-4 w-4 text-violet-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                    <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
                </div>
                <ul class="space-y-2">
                    @foreach ([
                        "Matn asosida turli darajadagi savollar tuzishni o'rganadi",
                        "Savol orqali o'quvchining tushunish, tahlil qilish, xulosa chiqarish va baholash ko'nikmalarini rivojlantira oladi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs text-slate-200">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
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
                <p class="text-xs text-amber-900 leading-relaxed">Savol tuzish metodikasi dissertatsiyada bo'lajak o'qituvchilarning kognitiv-metodik tayyorgarligini rivojlantirish vositasi sifatida talqin qilinadi. Talaba savol tuzish orqali o'quvchi tafakkurini boshqarish, o'qish jarayonini faollashtirish va o'quv natijasini baholash imkoniyatiga ega bo'ladi.</p>
            </div>
        </div>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('metodik.show', 'matn-ishlash') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Matn bilan ishlash
            </a>
            <a href="{{ route('metodik.show', 'pirls-topshiriq') }}" class="inline-flex items-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-violet-700 transition-colors">
                Keyingi: PIRLS topshiriqlari
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
