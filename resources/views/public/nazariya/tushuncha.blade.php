@extends('layouts.app')
@section('title', "O'qish savodxonligi tushunchasi")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'tushuncha'])

    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-indigo-100 text-indigo-700">1</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Nazariya • 1-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">O'qish savodxonligi tushunchasi</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Ushbu bo'limda o'qish savodxonligi tushunchasi, uning mazmuni, ahamiyati va tarkibiy ko'nikmalar yoritiladi.</p>
        </div>

        {{-- 3 intro boxes --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
            <div class="rounded-xl border border-indigo-300 bg-indigo-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-indigo-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-indigo-900">O'QISH SAVODXONLIGINING TA'RIFI</h3>
                </div>
                <p class="text-xs text-indigo-800 leading-relaxed">O'qish savodxonligi — bu o'quvchining matnni faqat tovushlab yoki ichida o'qishi emas, balki o'qilgan matn mazmunini anglash, undagi asosiy fikrni ajratish, ma'lumotlarni tahlil qilish, xulosa chiqarish, o'z munosabatini bildirish va matndan hayotiy vaziyatlarda foydalana olish qobiliyatidir.</p>
            </div>
            <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-emerald-900">AHAMIYATI</h3>
                </div>
                <p class="text-xs text-emerald-800 leading-relaxed">Boshlang'ich sinfda o'qish savodxonligi bolaning keyingi ta'lim bosqichlaridagi muvaffaqiyatini belgilovchi asosiy omillardan biridir. Chunki o'quvchi ona tili, matematika, tabiiy fanlar, tarix yoki boshqa fanlarni o'zlashtirishda ham matnni tushunish, savolni anglash, topshiriq shartini to'g'ri talqin qilish va javobini asoslashga ehtiyoj sezadi.</p>
            </div>
            <div class="rounded-xl border border-orange-300 bg-orange-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-orange-500">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-orange-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-orange-800 leading-relaxed">O'qish savodxonligi o'quvchining fikrlash, tushunish, izohlash va muloqotga kirishish qobiliyatini rivojlantiruvchi murakkab pedagogik jarayondir. Bo'lajak o'qituvchi bu jarayonni har bir fan va har bir darsda matn bilan ishlash madaniyatini shakllantirish orqali ta'minlashi lozim.</p>
            </div>
        </div>

        {{-- Ko'nikmalar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">
                O'QISH SAVODXONLIGINING TARKIBIY KO'NIKMALARI
            </div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">
                @foreach ([
                    ['n'=>1,'title'=>"Matnni to'g'ri va ravon o'qish",'color'=>'indigo'],
                    ['n'=>2,'title'=>'Matndan aniq axborotni topish','color'=>'blue'],
                    ['n'=>3,'title'=>"Asosiy fikrni ajratish",'color'=>'violet'],
                    ['n'=>4,'title'=>"Sabab-oqibat bog'lanishlarini tushunish",'color'=>'purple'],
                    ['n'=>5,'title'=>"Yashirin ma'noni anglash",'color'=>'cyan'],
                    ['n'=>6,'title'=>'Xulosa chiqarish','color'=>'teal'],
                    ['n'=>7,'title'=>'Matnga nisbatan shaxsiy munosabat bildirish','color'=>'emerald'],
                    ['n'=>8,'title'=>'Javobni matndan dalil bilan asoslash','color'=>'green'],
                ] as $k)
                    <div class="flex items-start gap-2 rounded-xl border border-indigo-200 bg-indigo-50 p-3">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-xs font-bold text-white">{{ $k['n'] }}</span>
                        <p class="text-xs text-indigo-900 leading-snug font-medium">{{ $k['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metodik ahamiyati + Bu sahifa --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-blue-300 bg-blue-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-700">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-blue-900">BO'LAJAK O'QITUVCHI UCHUN METODIK AHAMIYATI</h3>
                </div>
                <p class="text-xs text-blue-800 leading-relaxed mb-3">Bo'lajak boshlang'ich sinf o'qituvchisi o'qish savodxonligini rivojlantirishni alohida ko'nikma sifatida emas, balki o'quvchining umumiy intellektual rivojlanishi bilan bog'liq jarayon sifatida ko'rishi kerak. U matn tanlash, savol tuzish, baholash va o'quvchi javobini tahlil qilishda o'qish savodxonligining barcha tarkibiy qismlarini hisobga olishi zarur.</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-sm font-bold text-slate-800 mb-3">BU SAHIFA TALABALARGA QUYIDAGILARNI ANGLASHGA YORDAM BERADI:</h3>
                <ul class="space-y-2.5">
                    @foreach ([
                        "o'qish savodxonligi faqat tez o'qish emas",
                        "matnni tushunish o'quvchining tafakkuri bilan bog'liq",
                        "har bir savol o'quvchini fikrlashga undashi kerak",
                        "o'qituvchi o'quvchini tayyor javobga emas, mustaqil izlanishga yo'naltirishi lozim",
                    ] as $item)
                        <li class="flex items-start gap-2 text-xs text-slate-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Amaliy misollar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MISOLLAR</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-indigo-200 bg-white p-4 shadow-sm">
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="h-5 w-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                        <h4 class="text-xs font-bold text-slate-800 uppercase">1-MISOL. ODDIY O'QISH VA O'QISH SAVODXONLIGI FARQI</h4>
                    </div>
                    <div class="rounded-lg bg-slate-50 p-3 mb-3 text-xs text-slate-700 italic border-l-3 border-indigo-400">
                        <strong>Matn:</strong> "Aziza daraxt tagida yotgan qushchani ko'rib qoldi. U qushchani ehtiyotlab olib, uyasiga qo'ydi."
                    </div>
                    <div class="space-y-2">
                        <div class="rounded-lg bg-slate-100 p-2.5 text-xs">
                            <span class="font-semibold text-slate-600">Oddiy savol:</span>
                            <span class="text-slate-700"> Aziza nimani ko'rib qoldi?</span>
                        </div>
                        <div class="rounded-lg bg-indigo-50 p-2.5 text-xs border border-indigo-200">
                            <span class="font-semibold text-indigo-700">O'qish savodxonligiga yo'naltirilgan savol:</span>
                            <span class="text-indigo-800"> Azizaning harakatidan uning qanday fazilatga ega ekanini bilish mumkin?</span>
                        </div>
                        <p class="text-xs text-slate-500 italic flex items-start gap-1">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            Bu savol o'quvchini matndagi voqeani qayta aytishga emas, balki qahramon xarakterini anglashga yo'naltiradi.
                        </p>
                    </div>
                </div>
                <div class="rounded-xl border border-emerald-200 bg-white p-4 shadow-sm">
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                        <h4 class="text-xs font-bold text-slate-800 uppercase">2-MISOL. MATNDAN XULOSA CHIQARISH</h4>
                    </div>
                    <div class="space-y-2">
                        <div class="rounded-lg bg-slate-50 p-2.5 text-xs">
                            <span class="font-semibold text-slate-600">Savol:</span>
                            <span class="text-slate-700"> Nima uchun Aziza qushchani yerda qoldirmadi?</span>
                        </div>
                        <div class="rounded-lg bg-emerald-50 p-2.5 text-xs border border-emerald-200">
                            <p class="font-semibold text-emerald-700 mb-1">Kutiladigan javob:</p>
                            <p class="text-emerald-800">Chunki u qushchaga achindi, unga yordam bermoqchi bo'ldi. Bu uning mehribonligini ko'rsatadi.</p>
                        </div>
                        <div class="mt-3 rounded-lg bg-amber-50 border border-amber-200 p-3">
                            <p class="text-xs text-amber-800 font-medium">Muhim: O'quvchi matn asosida fakt topishi + o'z fikrini asoslashi kerak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SAVOL-TOPSHIRIQLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"O'qish savodxonligi oddiy o'qishdan nimasi bilan farq qiladi?"],
                    ['n'=>2,'q'=>"Boshlang'ich sinf o'quvchisi matnni tushunganini qanday aniqlash mumkin?"],
                    ['n'=>3,'q'=>"Quyidagi savollardan qaysi biri o'qish savodxonligini rivojlantirishga ko'proq xizmat qiladi? a) Qahramonning ismi nima? b) Qahramonning qarori sizga yoqdimi? Nega?"],
                    ['n'=>4,'q'=>"O'zingiz kichik matn tanlang va unga uch xil savol tuzing: aniq javobli, xulosa chiqarishga oid, baholashga oid."],
                    ['n'=>5,'q'=>"\"O'qish savodxonligi — hayotiy zarurat\" mavzusida 5–6 gapdan iborat fikr yozing."],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-indigo-100 text-xs font-bold text-indigo-700">{{ $t['n'] }}</span>
                        <p class="text-xs text-slate-700 leading-relaxed">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl bg-gradient-to-r from-indigo-900 to-indigo-700 p-5 text-white">
            <p class="text-xs font-semibold text-indigo-300 uppercase tracking-wide mb-2">Kutiladigan natija</p>
            <p class="text-sm leading-relaxed">Ushbu sahifani o'rgangan foydalanuvchi o'qish savodxonligi tushunchasini to'g'ri anglaydi, uni oddiy o'qish malakasidan farqlaydi, boshlang'ich sinfda matn bilan ishlashning chuqurroq metodik maqsadini tushunadi hamda o'quvchini fikrlashga undovchi savollar tuzishga tayyorlanadi.</p>
            <p class="mt-3 text-xs text-indigo-300 italic">"O'qish savodxonligi — bilim eshigini ochadigan kalitdir. Uni rivojlantirish — kelajakni yoritish demakdir."</p>
        </div>

        {{-- Nav buttons --}}
        <div class="mt-4 flex justify-end">
            <a href="{{ route('nazariya.show', 'pirls') }}" class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700 transition-colors">
                Keyingi: PIRLS dasturida o'qish savodxonligi
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
