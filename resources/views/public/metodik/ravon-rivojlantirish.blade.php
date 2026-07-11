@extends('layouts.app')
@section('title', "Ravon o'qishni rivojlantirish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.metodik._sidebar', ['activeSlug' => 'ravon-rivojlantirish'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-teal-100 text-teal-700">5</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Metodik modul • 5-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Ravon o'qishni rivojlantirish</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Bo'lajak boshlang'ich sinf o'qituvchilariga o'quvchilarda to'g'ri, me'yorida, ifodali va tushungan holda o'qish ko'nikmasini rivojlantirish metodikasini o'rgatish.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-teal-300 bg-teal-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-teal-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-teal-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-teal-800 leading-relaxed">Ushbu sahifaning maqsadi bo'lajak boshlang'ich sinf o'qituvchilariga o'quvchilarda to'g'ri, me'yorida, ifodali va tushungan holda o'qish ko'nikmasini rivojlantirish metodikasini o'rgatishdan iborat.</p>
            </div>
            <div class="rounded-xl border border-cyan-300 bg-cyan-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-cyan-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-cyan-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-cyan-800 leading-relaxed mb-2">Ravon o'qish — o'qish savodxonligining muhim tarkibiy qismi. O'quvchi matnni to'g'ri va ifodali o'qiy olmasa, uning mazmunini chuqur anglashda qiyinchilik tug'iladi. Biroq ravon o'qishni faqat tezlik bilan baholash noto'g'ri.</p>
                <p class="text-xs text-cyan-800 leading-relaxed">Ravon o'qish aniqlik, tezlik, ifodalilik va tushunishni birlashtiradi.</p>
            </div>
        </div>

        {{-- Ravonlik ko'rsatkichlari + mashg'ulot tuzilmasi --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-3">
            <div class="md:col-span-2 rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                <div class="bg-teal-600 px-4 py-2.5">
                    <h3 class="text-sm font-bold text-white">Ravon o'qish mashg'uloti</h3>
                </div>
                <div class="divide-y divide-slate-100">
                    @foreach ([
                        ['label' => 'Matn',          'value' => "2-sinf uchun 80–100 so'z matn"],
                        ['label' => 'Usul',           'value' => 'Echo reading'],
                        ['label' => 'Mashq varaqi',   'value' => "Talaffuzi qiyin so'zlar ro'yxati"],
                        ['label' => 'Baholash',       'value' => "4 mezon: aniqlik, tezlik, ifodalilik, tushunish"],
                        ['label' => "Rag'batlantirish", 'value' => '"Bugun kechagidan ancha ravon o\'qiding!"'],
                    ] as $row)
                        <div class="flex items-start gap-3 px-4 py-2.5">
                            <span class="w-28 shrink-0 text-xs font-semibold text-slate-500">{{ $row['label'] }}</span>
                            <span class="text-xs text-slate-700">{{ $row['value'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="rounded-xl border border-teal-200 bg-teal-50 p-4">
                <h3 class="text-sm font-bold text-teal-900 mb-3">Ravonlik ko'rsatkichlari</h3>
                <div class="space-y-2.5">
                    @foreach ([
                        ['title' => 'Aniqlik',      'desc' => "So'zlarni xatosiz o'qish"],
                        ['title' => 'Tezlik',        'desc' => "Yoshiga mos sur'at"],
                        ['title' => 'Ifodalilik',    'desc' => "Mazmuniga mos ohang"],
                        ['title' => 'Tushunish',     'desc' => "O'qilganni anglab yetish"],
                        ['title' => 'Tinish belgilari', 'desc' => "Vergul, nuqta, undov"],
                    ] as $k)
                        <div class="flex items-start gap-2">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-teal-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <div>
                                <p class="text-xs font-semibold text-teal-900">{{ $k['title'] }}</p>
                                <p class="text-xs text-teal-700">{{ $k['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Amaliy metodlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY METODLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"Takroriy o'qish",'desc'=>"O'quvchi bir matnni bir necha marta o'qiydi. Har safar aniqlik, ifodalilik va tushunish yaxshilanadi.",'color'=>'border-teal-300 bg-teal-100','ic'=>'bg-teal-600','tc'=>'text-teal-900'],
                    ['n'=>2,'title'=>"Juftlikda o'qish",'desc'=>"Kuchliroq o'quvchi sustroq o'quvchi bilan birga o'qiydi. Bu hamkorlikni kuchaytiradi.",'color'=>'border-cyan-300 bg-cyan-100','ic'=>'bg-cyan-600','tc'=>'text-cyan-900'],
                    ['n'=>3,'title'=>'Echo reading','desc'=>"O'qituvchi bir gapni ifodali o'qiydi, o'quvchilar takrorlaydi. Ohang va intonatsiya o'rganiladi.",'color'=>'border-sky-300 bg-sky-100','ic'=>'bg-sky-600','tc'=>'text-sky-900'],
                    ['n'=>4,'title'=>"Audio bilan o'qish",'desc'=>"O'quvchi matn audiosini tinglaydi, so'ng unga qo'shilib o'qiydi. Quloq va til birga ishlaydi.",'color'=>'border-blue-300 bg-blue-100','ic'=>'bg-blue-600','tc'=>'text-blue-900'],
                    ['n'=>5,'title'=>"Rollarga bo'lib o'qish",'desc'=>"Dialogli matnlar qahramonlarga bo'linib o'qiladi. Ifodalilik va irodalilik rivojlanadi.",'color'=>'border-emerald-300 bg-emerald-100','ic'=>'bg-emerald-600','tc'=>'text-emerald-900'],
                    ['n'=>6,'title'=>"O'z ovozini yozib tahlil qilish",'desc'=>"O'quvchi o'z o'qishini yozib oladi va qayta eshitib, xatolarini aniqlaydi.",'color'=>'border-violet-300 bg-violet-100','ic'=>'bg-violet-600','tc'=>'text-violet-900'],
                ] as $m)
                    <div class="rounded-xl border p-4 {{ $m['color'] }}">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full {{ $m['ic'] }} text-white text-xs font-bold">{{ $m['n'] }}</span>
                            <h4 class="text-xs font-bold {{ $m['tc'] }}">{{ $m['title'] }}</h4>
                        </div>
                        <p class="text-xs leading-relaxed {{ $m['tc'] }} opacity-90">{{ $m['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Darsda qo'llash + Talabalar uchun mashq --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                <div class="bg-slate-800 px-4 py-2.5">
                    <h3 class="text-sm font-bold text-white uppercase tracking-wide">Darsda qo'llash tartibi</h3>
                </div>
                <ol class="divide-y divide-slate-100">
                    @foreach ([
                        "O'quvchilarga qisqa matn beriladi",
                        "O'qituvchi matnni namunali o'qib beradi",
                        "O'quvchilar matnni ichida o'qiydi",
                        "Keyin navbat bilan ovoz chiqarib o'qiydi",
                        "Xatolar muloyim tuzatiladi",
                        "Matn qayta o'qiladi",
                        "O'qishdan keyin mazmuniy savollar beriladi",
                        "Natija ravonlik mezoni asosida baholanadi",
                    ] as $i => $step)
                        <li class="flex items-start gap-3 px-4 py-2.5">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-teal-100 text-teal-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            <span class="text-xs text-slate-700">{{ $step }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="rounded-xl border border-teal-200 bg-teal-50 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-teal-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-teal-900">Talabalar uchun mashq</h3>
                </div>
                <ol class="space-y-2">
                    @foreach ([
                        "2-sinf uchun 80–100 so'zli matn tanlang",
                        "Ravon o'qish mashg'uloti rejasini tuzing",
                        "Matnni o'qishdan oldin talaffuzi qiyin so'zlarni ajrating",
                        "Echo reading usulini qo'llash tartibini yozing",
                        "Ravon o'qishni baholash uchun 4 mezon belgilang",
                        "O'quvchiga beriladigan rag'batlantiruvchi izoh yozing",
                    ] as $i => $task)
                        <li class="flex items-start gap-2 text-xs text-teal-800">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-teal-200 text-teal-700 font-bold text-[10px]">{{ $i+1 }}</span>
                            {{ $task }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        {{-- O'qituvchi uchun tavsiya --}}
        <div class="mb-6 rounded-xl border border-amber-300 bg-amber-100 p-5">
            <div class="flex items-center gap-2 mb-3">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126z"/></svg>
                </span>
                <h3 class="text-sm font-bold text-amber-900">O'qituvchi uchun tavsiya</h3>
            </div>
            <p class="text-xs text-amber-900 leading-relaxed mb-2">Ravon o'qishda o'quvchini boshqalar oldida keskin tanqid qilmang. Xatoni to'g'rilash jarayoni bolaning o'qishga bo'lgan ishonchini sindirmasligi kerak.</p>
            <p class="text-xs text-amber-900 leading-relaxed">Har bir kichik yutuqni ko'rsatish foydali: <span class="font-semibold">"Bugun kechagidan ancha ravon o'qiding"</span>, <span class="font-semibold">"Tinish belgilariga yaxshi e'tibor berding"</span> kabi izohlar o'quvchini ruhlantiradi va yangi sa'y-harakatga chorlaydi.</p>
        </div>

        {{-- Namunaviy topshiriq --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">NAMUNAVIY TOPSHIRIQ</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-teal-300 bg-teal-50 p-5">
                    <p class="text-xs font-bold text-teal-800 mb-3">Mashq: "Uch marta o'qi"</p>
                    <ol class="space-y-3">
                        @foreach ([
                            ["Birinchi o'qish", "so'zlarni to'g'ri o'qishga e'tibor beriladi"],
                            ["Ikkinchi o'qish", "tinish belgilariga rioya qilinadi"],
                            ["Uchinchi o'qish", "ifodali va mazmunli o'qishga harakat qilinadi"],
                        ] as $i => $r)
                            <li class="flex items-start gap-3">
                                <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-teal-600 text-white font-bold text-[10px]">{{ $i+1 }}</span>
                                <div>
                                    <span class="text-xs font-semibold text-teal-900">{{ $r[0] }}</span>
                                    <span class="text-xs text-teal-700"> — {{ $r[1] }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                    <p class="text-xs font-bold text-slate-700 mb-3">Baholash mezoni:</p>
                    <ul class="space-y-2">
                        @foreach ([
                            "So'zlarni to'g'ri o'qidi",
                            "Tinish belgilariga rioya qildi",
                            "Ovoz ohangi matnga mos bo'ldi",
                            "O'qiganini tushuntirib berdi",
                        ] as $crit)
                            <li class="flex items-start gap-2 text-xs text-slate-700">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-teal-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                {{ $crit }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija + Dissertatsiya --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl bg-gradient-to-br from-slate-800 to-teal-900 p-5 text-white">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="h-4 w-4 text-teal-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                    <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
                </div>
                <ul class="space-y-2">
                    @foreach ([
                        "Ravon o'qishni rivojlantirish metodlarini biladi",
                        "O'quvchilarning o'qish aniqligi, ifodaliligi va tushunishini kuzata oladi",
                        "Ravon o'qish mashg'ulotlarini rejalashtiradi va o'tkazadi",
                    ] as $n)
                        <li class="flex items-start gap-2 text-xs text-slate-200">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-teal-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
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
                <p class="text-xs text-amber-900 leading-relaxed">Mazkur sahifa dissertatsiyada bo'lajak o'qituvchilarning ravon o'qish metodikasiga oid amaliy tayyorgarligini ko'rsatuvchi vosita sifatida asoslanadi. Ravon o'qishni rivojlantirish metodlari talabalarda o'quvchi o'qishini kuzatish, tuzatish va rag'batlantirish ko'nikmalarini shakllantiradi.</p>
            </div>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('metodik.show', 'javob-baholash') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: O'quvchi javobini baholash
            </a>
            <a href="{{ route('metodik.show', 'lugat-ishlash') }}" class="inline-flex items-center gap-2 rounded-xl bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-teal-700 transition-colors">
                Keyingi: Lug'at ustida ishlash
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
