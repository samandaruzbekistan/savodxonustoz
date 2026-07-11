@extends('layouts.app')
@section('title', "Matn xususiyatlarini o'qitish — Sinf strategiyalari")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'matn-xususiyatlari'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-indigo-100 text-indigo-700">6</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Sinf strategiyalari • 6-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Matn xususiyatlarini o'qitish</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">O'quvchilarga matnning tuzilishi, sarlavhasi, muallif fikri, asosiy g'oyasi, qismlari, rasm, jadval, kalit so'zlar, xulosa va izohlarni anglashni o'rgatish metodikasi.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-indigo-300 bg-indigo-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-indigo-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-indigo-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-indigo-800 leading-relaxed">O'quvchini matn tuzilishini ko'ra olishga, sarlavha va asosiy g'oyani bog'lashga, kalit so'zlarni ajratishga, voqea rivojini tushunishga va matnni yaxlit mazmun sifatida anglashga o'rgatish.</p>
            </div>
            <div class="rounded-xl border border-violet-300 bg-violet-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-violet-800 leading-relaxed">O'quvchi matn xususiyatlarini bilsa, u matnni yaxshiroq tushunadi. Sarlavha matn mavzusini taxmin qilishga yordam beradi, rasm matn mazmunini ochadi, jadval ma'lumotni tartibli ko'rsatadi, kalit so'zlar esa asosiy mazmunni anglashga yordam beradi.</p>
            </div>
        </div>

        {{-- 11 ta xususiyat --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">MATNNING ASOSIY XUSUSIYATLARI</div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4">
                @foreach ([
                    ['📌','Sarlavha','Mavzuni bildiradi','indigo'],
                    ['▶️','Kirish qismi','Matn boshlanishi','blue'],
                    ['📄','Asosiy qism','Voqea rivojlanadi','violet'],
                    ['✅','Yakuniy qism','Xulosa va natija','emerald'],
                    ['👤','Qahramonlar','Kim ishtirok etadi','teal'],
                    ['📍','Joy va vaqt','Qayerda, qachon','orange'],
                    ['💡',"Asosiy g'oya",'Matn nimani o\'rgatadi','amber'],
                    ['🖼️','Rasm va izohlar','Vizual yordam','rose'],
                    ['📊','Jadval/diagramma','Ma\'lumot tartibli','cyan'],
                    ['🔑',"Kalit so'zlar",'Muhim so\'zlar','indigo'],
                    ['✍️','Muallif fikri','Yozuvchi niyati','violet'],
                ] as [$icon, $name, $desc, $color])
                    <div class="rounded-xl border border-{{ $color }}-200 bg-{{ $color }}-50 p-3 text-center">
                        <div class="text-xl mb-1">{{ $icon }}</div>
                        <p class="text-xs font-bold text-{{ $color }}-900">{{ $name }}</p>
                        <p class="text-xs text-{{ $color }}-600 mt-0.5">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metod --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">"MATNNI QISMLARGA AJRAT" METODI</div>
            <div class="space-y-3">
                @foreach ([
                    [1,"O'qituvchi matnni beradi",'bg-indigo-600'],
                    [2,"O'quvchilar sarlavhani o'qiydi va taxmin qiladi",'bg-violet-600'],
                    [3,"Matn kirish, asosiy va yakuniy qismlarga ajratiladi",'bg-blue-600'],
                    [4,"Har bir qismga savol tuziladi",'bg-emerald-600'],
                    [5,"Kalit so'zlar belgilanadi",'bg-teal-600'],
                    [6,"Matnning asosiy g'oyasi yoziladi",'bg-indigo-700'],
                ] as [$n, $step, $ic])
                    <div class="flex items-center gap-4 rounded-xl border border-indigo-100 bg-indigo-50 p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full {{ $ic }} text-white text-sm font-bold">{{ $n }}</span>
                        <p class="text-xs text-indigo-900 font-medium">{{ $step }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Namuna --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BOSHLANG'ICH SINFGA MOS NAMUNA — "KICHIK IXTIROCHI"</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
                <table class="w-full text-xs">
                    <thead class="bg-indigo-600 text-white font-semibold">
                        <tr>
                            <th class="px-4 py-3 text-left">Matn xususiyati</th>
                            <th class="px-4 py-3 text-left">O'quvchi javobi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ([
                            ['Sarlavha','Kichik ixtirochi'],
                            ['Qahramon','Sardor'],
                            ['Muammo','Tegirmon avval ishlamadi'],
                            ['Harakat','Qanotlarini qayta o\'lchadi'],
                            ['Natija','Tegirmon aylana boshladi'],
                            ["Asosiy g'oya",'Sabr va mehnat bilan natijaga erishiladi'],
                        ] as $row)
                            <tr class="bg-white hover:bg-indigo-50">
                                <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-indigo-200 bg-gradient-to-r from-indigo-50 to-violet-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-indigo-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-indigo-800 leading-relaxed">O'quvchi matn tuzilishini ko'ra oladi, sarlavha va asosiy g'oyani bog'laydi, kalit so'zlarni ajratadi, voqea rivojini tushunadi va matnni yaxlit mazmun sifatida anglaydi.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.show', 'matn-turlarini-tushunish') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
