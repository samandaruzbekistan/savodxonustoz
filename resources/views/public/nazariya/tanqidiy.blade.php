@extends('layouts.app')
@section('title', "Tanqidiy o'qish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'tanqidiy'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-pink-100 text-pink-700">6</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Nazariya • 6-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Tanqidiy o'qish</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Tanqidiy o'qish tushunchasi, fakt va fikrni farqlash, dalil topish, baholash va o'z munosabatini asoslash ko'nikmalari yoritiladi.</p>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-6">
            <div class="rounded-xl border border-pink-300 bg-pink-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-pink-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-pink-900">SAHIFANING MAQSADI</h3>
                </div>
                <p class="text-xs text-pink-800 leading-relaxed">Ushbu sahifaning maqsadi tanqidiy o'qish tushunchasini izohlash, uni matnni tushunishning yuqori darajasi sifatida ko'rsatish va boshlang'ich sinf o'quvchilarida tanqidiy fikrlashni rivojlantirish usullarini yoritishdir.</p>
            </div>
            <div class="rounded-xl border border-rose-300 bg-rose-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="h-5 w-5 text-rose-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    <h3 class="text-sm font-bold text-rose-900">TANQIDIY O'QISH NIMA?</h3>
                </div>
                <p class="text-xs text-rose-800 leading-relaxed">Tanqidiy o'qish — bu matnni shunchaki qabul qilish emas, balki <strong>ustida o'ylash, savol berish, dalil izlash, muallif fikrini tushunish, baholash va o'z munosabatini asoslash</strong> demakdir. Boshlang'ich sinfda bu ko'nikma asta-sekin shakllanadi va o'quvchini mustaqil fikrlovchi shaxsga aylantiradi.</p>
            </div>
        </div>

        {{-- Ko'nikmalar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">TANQIDIY O'QISH KO'NIKMALARI</div>
            <div class="grid grid-cols-2 gap-2 sm:grid-cols-4">
                @foreach ([
                    ['icon'=>'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z','label'=>"Fakt va fikrni farqlash",'color'=>'border-pink-300 bg-pink-100 text-pink-900'],
                    ['icon'=>'M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776','label'=>"Asosiy g'oya va dalillarni aniqlash",'color'=>'border-rose-300 bg-rose-100 text-rose-900'],
                    ['icon'=>'M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z','label'=>"Qahramon harakatiga baho berish",'color'=>'border-orange-300 bg-orange-100 text-orange-900'],
                    ['icon'=>'M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244','label'=>"Sabab-oqibat munosabatini aniqlash",'color'=>'border-amber-300 bg-amber-100 text-amber-900'],
                    ['icon'=>'M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z','label'=>"O'z fikrini asoslash",'color'=>'border-violet-300 bg-violet-100 text-violet-900'],
                    ['icon'=>'M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418','label'=>"Boshqa fikrni hurmat qilish",'color'=>'border-teal-300 bg-teal-100 text-teal-900'],
                    ['icon'=>'M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286z','label'=>"Muallif maqsadi va nuqtai nazarini baholash",'color'=>'border-indigo-300 bg-indigo-100 text-indigo-900'],
                    ['icon'=>'M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L9.568 3z M6 6h.008v.008H6V6z','label'=>"Matn turini va janrini aniqlash",'color'=>'border-cyan-300 bg-cyan-100 text-cyan-900'],
                ] as $k)
                    <div class="flex items-start gap-2 rounded-lg border p-3 {{ $k['color'] }}">
                        <svg class="mt-0.5 h-4 w-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $k['icon'] }}"/></svg>
                        <span class="text-xs leading-snug">{{ $k['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metodik + Amaliy --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-pink-300 bg-pink-100 p-5">
                <h3 class="text-sm font-bold text-pink-900 mb-3">BO'LAJAK O'QITUVCHI UCHUN METODIK AHAMIYATI</h3>
                <p class="text-xs text-pink-800 leading-relaxed mb-3">Bo'lajak o'qituvchi tanqidiy o'qishni o'quvchiga sevdirolishi uchun avvalo o'zi tanqidiy fikrlovchi bo'lishi kerak. Sinfda «Nima uchun?», «Kim aytdi?», «Bu to'g'rimi?» kabi savollarni odatiy hol qilish zarur.</p>
                <p class="text-xs font-semibold text-pink-900 mb-2">Bu sahifa talabalarning quyidagi ko'nikmalarini rivojlantiradi:</p>
                <ul class="space-y-1">
                    @foreach (["Matnni tahlil qilish va baholash ko'nikmasi","O'quvchilarga tanqidiy savol berishni o'rgatish usullari","Darsda bahsli muhit yaratish metodikasi","Fakt va fikr o'rtasidagi farqni o'rgatish","O'z munosabatini asoslashni tarbiyalash"] as $m)
                        <li class="flex items-start gap-1.5 text-xs text-pink-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-pink-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $m }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-sm font-bold text-slate-800 mb-3">AMALIY MISOL — Tanqidiy savol turlari</h3>
                <div class="rounded-lg bg-amber-100 border border-amber-300 p-3 mb-3 text-xs text-amber-900 leading-relaxed italic">
                    "Ali maktabga ketayotib yo'lda pul topib oldi. U o'sha pulni o'z xohishiga sarfladi. Kechqurun Alining onasi bu haqda bilib qoldi va jahl bilan gapirdi: «Topilgan pulni o'zingga olmaydilar!»"
                </div>
                <div class="space-y-1.5">
                    @foreach ([
                        ['type'=>'Fakt savol','color'=>'bg-blue-100 text-blue-700','q'=>"Ali nima topib oldi?"],
                        ['type'=>"Fikr/baholash savol",'color'=>'bg-rose-100 text-rose-700','q'=>"Ali to'g'ri ish qildimi? Nima uchun?"],
                        ['type'=>'Sabab-oqibat savol','color'=>'bg-amber-100 text-amber-700','q'=>"Onasi nima uchun jahl qildi?"],
                        ['type'=>"Munosabat savol",'color'=>'bg-violet-100 text-violet-700','q'=>"Siz Alining o'rnida bo'lsangiz nima qilardingiz?"],
                        ['type'=>"Dalil savol",'color'=>'bg-emerald-100 text-emerald-700','q'=>"Matnda Alining onasi haqligi ko'rsatilganmi?"],
                    ] as $q)
                        <div class="flex items-start gap-2 text-xs">
                            <span class="inline-block shrink-0 rounded px-1.5 py-0.5 text-[10px] font-semibold {{ $q['color'] }}">{{ $q['type'] }}</span>
                            <span class="text-slate-700">{{ $q['q'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Fakt vs Fikr --}}
        <div class="mb-6 rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
            <h3 class="text-sm font-bold text-slate-800 mb-3 text-center">FAKT VA FIKR — FARQNI TUSHUNISH</h3>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                <div class="rounded-lg bg-blue-100 border border-blue-300 p-3">
                    <p class="text-xs font-bold text-blue-800 mb-1">FAKT</p>
                    <p class="text-xs text-blue-700 mb-2">Tekshirib bo'ladigan, haqiqatga asoslangan ma'lumot</p>
                    <p class="text-xs italic text-blue-600">"Ali maktabga borayotganda yo'lda pul topdi" → Bu fakt: matnda yozilgan.</p>
                </div>
                <div class="rounded-lg bg-rose-100 border border-rose-300 p-3">
                    <p class="text-xs font-bold text-rose-800 mb-1">FIKR</p>
                    <p class="text-xs text-rose-700 mb-2">Shaxsiy munosabat, baholash yoki talqin</p>
                    <p class="text-xs italic text-rose-600">"Ali yaxshi ish qilmadi" → Bu fikr: har kim boshqacha baholashi mumkin.</p>
                </div>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SAVOL-TOPSHIRIQLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"Tanqidiy o'qish va matnni tushunish o'rtasida qanday farq bor?"],
                    ['n'=>2,'q'=>"Boshlang'ich sinf o'quvchisiga fakt va fikrni farqlashni qanday o'rgatasiz?"],
                    ['n'=>3,'q'=>"Ali haqidagi matn bo'yicha qo'shimcha 2 ta tanqidiy savol tuzing."],
                    ['n'=>4,'q'=>"O'quvchi muallif fikrini tanqid qilsa, siz o'qituvchi sifatida qanday yo'l tutasiz?"],
                    ['n'=>5,'q'=>"Darsda tanqidiy muhit yaratish uchun qanday metodlardan foydalanasiz?"],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-pink-100 text-xs font-bold text-pink-700">{{ $t['n'] }}</span>
                        <p class="text-xs text-slate-700 leading-relaxed">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rounded-2xl bg-gradient-to-r from-pink-900 to-rose-700 p-5 text-white">
            <p class="text-xs font-semibold text-pink-300 uppercase tracking-wide mb-2">Kutiladigan natija</p>
            <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 text-center text-xs">
                @foreach (["Foydalanuvchi tanqidiy o'qishni matnni passiv qabul qilishdan farqlay oladi","Fakt va fikrni aniq farqlashni o'rganadi","O'quvchilar uchun tanqidiy savollar tuza oladi","Matnda dalillarni izlab topish ko'nikmasi shakllanadi","O'quvchining fikrlarini hurmat qilgan holda yo'naltira oladi","Boshlang'ich sinfda tanqidiy fikrlash muhitini yaratish usullarini o'zlashtiradi"] as $n)
                    <div class="rounded-lg bg-white/10 p-2">{{ $n }}</div>
                @endforeach
            </div>
        </div>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('nazariya.show', 'ravon-oqish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'metakognitiv') }}" class="inline-flex items-center gap-2 rounded-xl bg-pink-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-pink-700 transition-colors">
                Keyingi: Metakognitiv strategiyalar
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
