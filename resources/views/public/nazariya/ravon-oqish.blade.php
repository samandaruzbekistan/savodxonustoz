@extends('layouts.app')
@section('title', "Ravon o'qish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'ravon-oqish'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-emerald-100 text-emerald-700">5</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Nazariya • 5-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Ravon o'qish</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Ravon o'qish tushunchasi, uning uch asosiy tarkibiy qismi — aniqlik, tezlik, ifodalilik — va rivojlantirish usullari yoritiladi.</p>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-6">
            <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-emerald-900">SAHIFANING MAQSADI</h3>
                </div>
                <p class="text-xs text-emerald-800 leading-relaxed">Ushbu sahifaning maqsadi ravon o'qish tushunchasini izohlash, uning o'qish savodxonligi bilan bog'liqligini ko'rsatish va boshlang'ich sinf o'quvchilarida ravon o'qishni rivojlantirish usullarini yoritishdan iborat.</p>
            </div>
            <div class="rounded-xl border border-teal-300 bg-teal-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="h-5 w-5 text-teal-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                    <h3 class="text-sm font-bold text-teal-900">RAVON O'QISH NIMA?</h3>
                </div>
                <p class="text-xs text-teal-800 leading-relaxed">Ravon o'qish — bu matnni to'g'ri, me'yorida, ifodali va tushungan holda o'qish qobiliyatidir. Ravon o'qish faqat tez o'qish degani emas. Agar o'quvchi juda tez o'qisa-yu, mazmunni tushunmasa, bu haqiqiy ravon o'qish hisoblanmaydi. <strong>Ravon o'qish matnni tushunishga bevosita ta'sir qiladi.</strong> Shuning uchun boshlang'ich sinfda ravon o'qishni rivojlantirish o'qish savodxonligining muhim sharti hisoblanadi.</p>
            </div>
        </div>

        {{-- 3 tarkibiy qism --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">RAVON O'QISH UCH ASOSIY TARKIBIY QISMDAN IBORAT</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>'ANIQLIK','desc'=>"So'zlarni xatosiz o'qish.",'color'=>'bg-emerald-100 border-emerald-300 text-emerald-900','badge'=>'bg-emerald-600'],
                    ['n'=>2,'title'=>'TEZLIK','desc'=>"Yoshiga mos sur'atda o'qish.",'color'=>'bg-blue-100 border-blue-300 text-blue-900','badge'=>'bg-blue-600'],
                    ['n'=>3,'title'=>'IFODALILIK','desc'=>"Tinish belgilari, ohang va mazmunga mos o'qish.",'color'=>'bg-orange-100 border-orange-300 text-orange-900','badge'=>'bg-orange-500'],
                ] as $q)
                    <div class="rounded-xl border p-5 text-center {{ $q['color'] }}">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold text-white mb-3 {{ $q['badge'] }}">{{ $q['n'] }}</span>
                        <h4 class="text-sm font-bold mb-1">{{ $q['title'] }}</h4>
                        <p class="text-xs">{{ $q['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Rivojlantirish usullari + Metodik --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-5">
                <h3 class="text-sm font-bold text-emerald-900 mb-3">RAVON O'QISHNI RIVOJLANTIRISH USULLARI</h3>
                <ul class="space-y-1.5">
                    @foreach (["takroriy o'qish","juftlikda o'qish","o'qituvchi ortidan o'qish","audio bilan birga o'qish","rollarga bo'lib o'qish","ifodali o'qish musobaqasi","o'z ovozini yozib eshitish","qisqa matnni vaqt bilan o'qish"] as $u)
                        <li class="flex items-start gap-2 text-xs text-emerald-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $u }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-xl border border-blue-300 bg-blue-100 p-5">
                <h3 class="text-sm font-bold text-blue-900 mb-3">BO'LAJAK O'QITUVCHI UCHUN METODIK AHAMIYATI</h3>
                <p class="text-xs text-blue-800 leading-relaxed mb-3">Bo'lajak o'qituvchi ravon o'qishni baholashda faqat tezlikka e'tibor bermasligi kerak. U o'quvchining so'zlarni to'g'ri o'qishini, ohangni saqlaganini, tinish belgilariga rioya qilishi va o'qiganini tushunishini birgalikda kuzatishi lozim.</p>
                <p class="text-xs font-semibold text-blue-900 mb-2">Metodik jihatdan bu sahifa talabalarga quyidagilarni o'rgatadi:</p>
                <ul class="space-y-1">
                    @foreach (["ravon o'qish mezonlarini aniqlash","o'quvchining o'qishdagi xatolarini tahlil qilish","ravon o'qishga oid mashqlar tanlash","o'qish tezligi va tushunish o'rtasidagi muvozanatni saqlash","individual yondashuvni qo'llash"] as $k)
                        <li class="flex items-start gap-1.5 text-xs text-blue-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $k }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- 3 mashq --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MISOLLAR</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="rounded-xl border border-emerald-300 bg-emerald-50 p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-emerald-100">
                            <svg class="h-4 w-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/></svg>
                        </span>
                        <h4 class="text-xs font-bold text-slate-800">MASHQ 1. TAKRORIY O'QISH</h4>
                    </div>
                    <p class="text-xs text-slate-700 leading-relaxed">O'quvchi 5–6 gapdan iborat matnni birinchi marta o'qiydi. O'qituvchi xatolarni belgilaydi. Keyin o'quvchi shu matnni ikkinchi va uchinchi marta o'qiydi. Har safar o'qish aniqligi va ifodaliligi yaxshilanadi.</p>
                </div>
                <div class="rounded-xl border border-blue-300 bg-blue-50 p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-blue-100">
                            <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z"/></svg>
                        </span>
                        <h4 class="text-xs font-bold text-slate-800">MASHQ 2. AUDIO BILAN O'QISH</h4>
                    </div>
                    <p class="text-xs text-slate-700 leading-relaxed">O'quvchi avval matn audiosini tinglaydi. So'ng audio bilan birga o'qiydi. Keyin mustaqil o'qib, o'z ovozini yozadi va solishtiradi.</p>
                </div>
                <div class="rounded-xl border border-orange-300 bg-orange-50 p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-orange-100">
                            <svg class="h-4 w-4 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                        </span>
                        <h4 class="text-xs font-bold text-slate-800">MASHQ 3. ROLLARGA BO'LIB O'QISH</h4>
                    </div>
                    <p class="text-xs text-slate-700 leading-relaxed">Dialogli matn tanlanadi. O'quvchilar qahramonlarga bo'linib o'qiydi. Bu usul ifodali o'qish va matn mazmunini tushunishga yordam beradi.</p>
                </div>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SAVOL-TOPSHIRIQLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"Ravon o'qishning uch asosiy tarkibiy qismini ayting."],
                    ['n'=>2,'q'=>"Tez o'qish va ravon o'qish o'rtasida qanday farq bor?"],
                    ['n'=>3,'q'=>"2-sinf o'quvchilari uchun ravon o'qishni rivojlantiruvchi 3 ta mashq tuzing."],
                    ['n'=>4,'q'=>"O'quvchi matnni tez o'qiydi, lekin tushunmaydi. Siz qanday metodik yordam berasiz?"],
                    ['n'=>5,'q'=>"Audio bilan o'qish mashg'ulotining tartibini yozing."],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-700">{{ $t['n'] }}</span>
                        <p class="text-xs text-slate-700 leading-relaxed">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rounded-2xl bg-gradient-to-r from-emerald-900 to-green-700 p-5 text-white">
            <p class="text-xs font-semibold text-emerald-300 uppercase tracking-wide mb-2">Kutiladigan natija</p>
            <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 text-center text-xs">
                @foreach (["Foydalanuvchi ravon o'qishning mazmunini to'g'ri tushunadi","U ravon o'qishni tez o'qish bilan aralashtirmaydi","Boshlang'ich sinf o'quvchilariga to'g'ri o'qishni rivojlantirish usullarini qo'llay oladi","O'quvchilarni ifodali va mazmunli o'qishga yo'naltira oladi","O'qish savodxonligini oshirishga xizmat qiladigan metodlarni amaliyotda qo'llaydi","O'quvchilarning o'qish tezligi, aniqligi va tushunish darajasi bosqichma-bosqich rivojlanadi"] as $n)
                    <div class="rounded-lg bg-white/10 p-2">{{ $n }}</div>
                @endforeach
            </div>
        </div>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('nazariya.show', 'matn-tushunish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'tanqidiy') }}" class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-emerald-700 transition-colors">
                Keyingi: Tanqidiy o'qish
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
