@extends('layouts.app')

@section('title', "O'quvchi portfeli — Diagnostika va baholash")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.diagnostika._sidebar', ['activeSlug' => 'portfolio'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="dp5" width="32" height="32" patternUnits="userSpaceOnUse"><path d="M 32 0 L 0 0 0 32" fill="none" stroke="white" stroke-width="0.8"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#dp5)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">5-bo'lim</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">Rivojlanish xaritasi</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">O'quvchi portfeli</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">12 qismli tarkib &middot; 8 indikator &middot; Muntazam kuzatuv</p>
                </div>
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <h2 class="text-sm font-bold text-sky-900 mb-2">Baholash maqsadi</h2>
            <p class="text-sm text-slate-700 leading-relaxed">
                O'quvchi portfeli — bu o'quvchining o'qish savodxonligi bo'yicha individual rivojlanish xaritasidir.
                Portfel orqali o'qituvchi o'quvchining dastlabki holati, oraliq yutuqlari va yakuniy natijalarini kuzatadi.
            </p>
            <p class="text-sm text-slate-700 leading-relaxed mt-3">
                Portfel oddiy hujjatlar to'plami emas, balki o'quvchining o'qishdagi o'sishini ko'rsatadigan diagnostik
                vositadir. Unda o'quvchining qaysi matnlarni o'qigani, qanday savollarga javob bergani, qaysi topshiriqlarda
                qiynalgani va qanday tavsiyalar olgani ko'rinadi.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-5 mb-5">
            {{-- Portfel tarkibi --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <h2 class="text-sm font-bold text-slate-800 mb-4">Portfel tarkibi (12 qism)</h2>
                <ol class="space-y-2">
                    @foreach([
                        "O'quvchi haqida umumiy ma'lumot",
                        "Dastlabki diagnostika natijasi",
                        "O'qigan matnlari ro'yxati",
                        "Test natijalari",
                        "Ochiq javobli topshiriqlar",
                        "Matndan dalil topish mashqlari",
                        "Ravon o'qish kuzatuvlari",
                        "Audio yozuvlar",
                        "O'qituvchi izohlari",
                        "Ota-ona fikri",
                        "O'quvchining o'z refleksiyasi",
                        "Yakuniy rivojlanish xulosasi",
                    ] as $i => $item)
                        <li class="flex items-start gap-2.5 text-xs text-slate-700">
                            <span class="h-5 w-5 rounded-full bg-blue-100 text-blue-700 font-bold flex items-center justify-center shrink-0 text-xs">{{ $i+1 }}</span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ol>
            </div>

            <div class="space-y-4">
                {{-- Indikatorlar --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5">
                    <h2 class="text-sm font-bold text-slate-800 mb-3">Baholash indikatorlari</h2>
                    <div class="space-y-2">
                        @foreach([
                            ["Ravon o'qish","Audio yozuv, o'qish kuzatuvi"],
                            ['Matnni tushunish','Savol-javob natijalari'],
                            ['Xulosa chiqarish','Ochiq javoblar'],
                            ['Dalil keltirish','Matndan gap topish'],
                            ['Fikr bildirish','Yozma javoblar'],
                            ["Lug'at boyligi","Yangi so'zlar ro'yxati"],
                            ["Mustaqil o'qish","O'qigan kitoblar ro'yxati"],
                            ['Refleksiya','"Men nimani o\'rgandim?" yozuvlari'],
                        ] as [$ind,$port])
                            <div class="flex items-start gap-2 text-xs">
                                <span class="h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0 mt-1.5"></span>
                                <span class="font-semibold text-slate-700">{{ $ind }}</span><span class="text-slate-400 mx-1">—</span><span class="text-slate-500">{{ $port }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Darajalar --}}
                <div class="rounded-2xl border border-slate-200 bg-white overflow-hidden">
                    <div class="px-4 py-3 border-b border-slate-100 bg-slate-50"><h2 class="text-xs font-bold text-slate-700">Portfel tahlili darajalari</h2></div>
                    @foreach([
                        ['Yuqori','bg-emerald-50','bg-emerald-100 text-emerald-800',"Muntazam o'qiydi, topshiriqlar to'liq, javoblar dalilli."],
                        ["O'rta",'bg-sky-50','bg-sky-100 text-sky-800',"Topshiriqlarni bajaradi, lekin dalil yetishmaydi."],
                        ['Past','bg-amber-50','bg-amber-100 text-amber-800',"Tushunish va asoslashda yordamga muhtoj."],
                        ["Boshlang'ich",'bg-rose-50','bg-rose-100 text-rose-800',"Ko'p topshiriqlarni mustaqil bajara olmaydi."],
                    ] as [$d,$row,$badge,$desc])
                        <div class="{{ $row }} px-4 py-2 flex items-center gap-2.5 border-b border-slate-100 last:border-0">
                            <span class="{{ $badge }} text-xs font-bold px-1.5 py-0.5 rounded shrink-0">{{ $d }}</span>
                            <span class="text-xs text-slate-600">{{ $desc }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Portfel namunasi --}}
        <div class="mb-5 rounded-2xl border-2 border-sky-200 bg-sky-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-sky-200 bg-sky-100">
                <svg class="h-5 w-5 text-sky-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                <h2 class="text-sm font-bold text-sky-900">Portfel sahifasi namunasi</h2>
            </div>
            <div class="px-6 py-5">
                <div class="grid grid-cols-3 gap-3 mb-4 p-4 bg-white rounded-xl border border-sky-100">
                    <div><span class="text-xs text-slate-500">O'quvchi F.I.:</span><div class="border-b border-slate-300 mt-1 pb-1 text-xs text-slate-400 italic">___________</div></div>
                    <div><span class="text-xs text-slate-500">Sinf:</span><div class="border-b border-slate-300 mt-1 pb-1 text-xs text-slate-400 italic">___________</div></div>
                    <div><span class="text-xs text-slate-500">Oy:</span><div class="border-b border-slate-300 mt-1 pb-1 text-xs text-slate-400 italic">___________</div></div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-xs bg-white rounded-xl overflow-hidden border border-sky-100">
                        <thead><tr class="bg-blue-50 border-b border-blue-100">
                            <th class="text-left px-3 py-2 font-semibold text-slate-600">Ko'rsatkich</th>
                            <th class="text-left px-3 py-2 font-semibold text-slate-600">Natija</th>
                            <th class="text-left px-3 py-2 font-semibold text-slate-600">Izoh</th>
                        </tr></thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach([
                                ["O'qigan matni",'"Kichik bog\'bon"',"Matnni qiziqib o'qidi"],
                                ['Aniq savollarga javob','4/4','Yaxshi'],
                                ['Xulosa savollari','2/3','Sababni izohlash kerak'],
                                ['Dalil topish','1/3','Matnga qaytish ustida ishlash zarur'],
                                ["Yangi so'zlar","5 ta","3 tasini gapda qo'lladi"],
                                ["O'qituvchi tavsiyasi",'"Javobingga dalil qo\'sh."','Keyingi darsda "Dalil top" metodi qo\'llanadi'],
                            ] as [$k,$n,$i])
                                <tr><td class="px-3 py-2 text-slate-700">{{ $k }}</td><td class="px-3 py-2 font-medium text-blue-600">{{ $n }}</td><td class="px-3 py-2 text-slate-500">{{ $i }}</td></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Oylik tahlil savollari --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-4">
                <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">Oylik tahlil savollari</h2>
            </div>
            <div class="grid grid-cols-2 gap-2">
                @foreach([
                    "O'quvchi qaysi ko'nikmada o'sdi?",
                    "Qaysi topshiriqlarda hali qiynalmoqda?",
                    "U matndan dalil topa olyaptimi?",
                    "Xulosa chiqarish darajasi qanday?",
                    "Mustaqil o'qish faolligi oshdimi?",
                    "Keyingi oy uchun qanday metodik yordam kerak?",
                ] as $sq)
                    <div class="flex items-start gap-2 text-xs text-slate-700 bg-slate-50 rounded-lg px-3 py-2.5 border border-slate-200">
                        <span class="text-blue-400 shrink-0 font-bold mt-0.5">?</span>{{ $sq }}
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-blue-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-3">
                <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">O'qituvchi uchun tavsiya</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed mb-2">
                Portfelni faqat chorak oxirida to'ldirmang. Har hafta yoki har ikki haftada o'quvchining bitta ishini portfelga kiriting.
            </p>
            <p class="text-sm text-slate-700 leading-relaxed">
                Portfelga o'quvchining eng yaxshi ishlari bilan birga, avval qiynalgan, keyin yaxshilangan ishlari ham
                kiritilishi kerak. Chunki portfelning asosiy vazifasi faqat yutuqni emas, rivojlanish jarayonini ko'rsatishdir.
            </p>
        </div>

        <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="h-4 w-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h2 class="text-sm font-bold text-emerald-800">Kutiladigan natija</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed">
                O'qituvchi har bir o'quvchining o'qish savodxonligi bo'yicha rivojlanishini muntazam kuzatadi. O'quvchi o'z
                yutuqlarini ko'radi, qaysi jihatda ishlashi kerakligini anglaydi. Bo'lajak o'qituvchi esa individual
                baholash, portfel yuritish va natijaga asoslangan metodik rejalashtirish ko'nikmasiga ega bo'ladi.
            </p>
        </div>

        @php $file = "5. O'quvchi portfeli.docx"; $fp = public_path("files/diagnostika/{$file}"); @endphp
        @if(file_exists($fp))
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="px-5 py-3.5 border-b border-slate-100 bg-slate-50 flex items-center gap-2.5">
                <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                <h2 class="text-sm font-bold text-slate-800">Yuklab olish</h2>
            </div>
            <div class="px-5 py-3.5 flex items-center gap-4">
                <div class="h-9 w-9 rounded-lg bg-blue-100 border border-blue-200 flex items-center justify-center shrink-0">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                </div>
                <div class="flex-1"><p class="text-sm font-medium text-slate-800">O'quvchi portfeli</p><p class="text-xs text-slate-500">DOCX &middot; {{ round(filesize($fp)/1024) }} KB</p></div>
                <a href="{{ asset('files/diagnostika/'.rawurlencode($file)) }}" download="{{ $file }}" class="flex items-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-blue-300 hover:text-blue-700 hover:bg-blue-50 transition-colors">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                    Yuklab olish
                </a>
            </div>
        </div>
        @endif

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('diagnostika.show', 'savol-javob') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                Savol-javob
            </a>
            <span class="flex-1 text-center text-xs text-slate-400">5 / 5</span>
            <a href="{{ route('diagnostika.index') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                Bo'lim boshiga
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
