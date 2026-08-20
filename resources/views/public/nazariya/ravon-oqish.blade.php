@extends('layouts.app')
@section('title', "Ravon o'qish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'ravon-oqish'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-emerald-950 via-emerald-900 to-teal-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-xl">
                <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">5</span>
                    Nazariya · 5-bo'lim
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Ravon o'qish</h1>
                <p class="mt-3 leading-relaxed text-emerald-100">Ravon o'qish tushunchasi, uning uch asosiy tarkibiy qismi — aniqlik, tezlik, ifodalilik — va rivojlantirish usullari yoritiladi.</p>
            </div>
            <img src="{{ asset('images/nazariya/section_05.png') }}" alt="Ravon o'qish" class="pointer-events-none absolute right-6 bottom-0 hidden h-36 w-36 object-contain opacity-90 md:block lg:h-40 lg:w-40">
        </div>

        {{-- 2 intro cards --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                        <x-icon name="compass" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Sahifaning maqsadi</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Ushbu sahifaning maqsadi ravon o'qish tushunchasini izohlash, uning o'qish savodxonligi bilan bog'liqligini ko'rsatish va boshlang'ich sinf o'quvchilarida ravon o'qishni rivojlantirish usullarini yoritishdan iborat.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-teal-50 text-teal-600">
                        <x-icon name="book" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Ravon o'qish nima?</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Ravon o'qish — bu matnni to'g'ri, me'yorida, ifodali va tushungan holda o'qish qobiliyatidir. Ravon o'qish faqat tez o'qish degani emas. Agar o'quvchi juda tez o'qisa-yu, mazmunni tushunmasa, bu haqiqiy ravon o'qish hisoblanmaydi. <strong class="text-slate-700">Ravon o'qish matnni tushunishga bevosita ta'sir qiladi.</strong> Shuning uchun boshlang'ich sinfda ravon o'qishni rivojlantirish o'qish savodxonligining muhim sharti hisoblanadi.</p>
            </div>
        </div>

        {{-- 3 tarkibiy qism --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[220px_1fr]">
                <div class="hidden items-center justify-center bg-emerald-50 p-4 md:flex">
                    <img src="{{ asset('images/nazariya/ravon-oqish/tarkibiy.png') }}" alt="Ravon o'qish tarkibiy qismlari" class="h-full max-h-40 w-full object-contain">
                </div>
                <div class="p-5">
                    <h2 class="mb-4 text-xs font-bold uppercase tracking-wide text-slate-400">Ravon o'qish uch asosiy tarkibiy qismdan iborat</h2>
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                        @foreach ([
                            ['n'=>1,'title'=>'Aniqlik','desc'=>"So'zlarni xatosiz o'qish.",'tint'=>'bg-emerald-50 text-emerald-600'],
                            ['n'=>2,'title'=>'Tezlik','desc'=>"Yoshiga mos sur'atda o'qish.",'tint'=>'bg-blue-50 text-blue-600'],
                            ['n'=>3,'title'=>'Ifodalilik','desc'=>"Tinish belgilari, ohang va mazmunga mos o'qish.",'tint'=>'bg-orange-50 text-orange-600'],
                        ] as $q)
                            <div class="rounded-xl border border-slate-200 p-4 text-center transition hover:border-emerald-200 hover:bg-emerald-50/50">
                                <span class="mx-auto mb-2 inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold {{ $q['tint'] }}">{{ $q['n'] }}</span>
                                <h4 class="mb-1 text-sm font-bold text-slate-800">{{ $q['title'] }}</h4>
                                <p class="text-xs text-slate-500">{{ $q['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Rivojlantirish usullari + Metodik --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="{{ asset('images/nazariya/ravon-oqish/usullar.jpg') }}" alt="Rivojlantirish usullari" class="h-32 w-full object-cover">
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                            <x-icon name="sparkle" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Ravon o'qishni rivojlantirish usullari</h3>
                    </div>
                    <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                        @foreach (["takroriy o'qish","juftlikda o'qish","o'qituvchi ortidan o'qish","audio bilan birga o'qish","rollarga bo'lib o'qish","ifodali o'qish musobaqasi","o'z ovozini yozib eshitish","qisqa matnni vaqt bilan o'qish"] as $u)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-500" stroke="2.5" />
                                {{ $u }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="{{ asset('images/nazariya/ravon-oqish/metodik.png') }}" alt="Metodik ahamiyati" class="h-32 w-full object-cover">
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h3>
                    </div>
                    <p class="mb-3 text-xs leading-relaxed text-slate-500">Bo'lajak o'qituvchi ravon o'qishni baholashda faqat tezlikka e'tibor bermasligi kerak. U o'quvchining so'zlarni to'g'ri o'qishini, ohangni saqlaganini, tinish belgilariga rioya qilishi va o'qiganini tushunishini birgalikda kuzatishi lozim.</p>
                    <p class="mb-2 text-xs font-semibold text-slate-700">Metodik jihatdan bu sahifa talabalarga quyidagilarni o'rgatadi:</p>
                    <ul class="space-y-2">
                        @foreach (["ravon o'qish mezonlarini aniqlash","o'quvchining o'qishdagi xatolarini tahlil qilish","ravon o'qishga oid mashqlar tanlash","o'qish tezligi va tushunish o'rtasidagi muvozanatni saqlash","individual yondashuvni qo'llash"] as $k)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" stroke="2.5" />
                                {{ $k }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- 3 mashq --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy misollar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach ([
                    ['n'=>1,'icon'=>'compass','tint'=>'bg-emerald-50 text-emerald-600','title'=>"Mashq 1. Takroriy o'qish",'text'=>"O'quvchi 5–6 gapdan iborat matnni birinchi marta o'qiydi. O'qituvchi xatolarni belgilaydi. Keyin o'quvchi shu matnni ikkinchi va uchinchi marta o'qiydi. Har safar o'qish aniqligi va ifodaliligi yaxshilanadi."],
                    ['n'=>2,'icon'=>'play','tint'=>'bg-blue-50 text-blue-600','title'=>"Mashq 2. Audio bilan o'qish",'text'=>"O'quvchi avval matn audiosini tinglaydi. So'ng audio bilan birga o'qiydi. Keyin mustaqil o'qib, o'z ovozini yozadi va solishtiradi."],
                    ['n'=>3,'icon'=>'users','tint'=>'bg-orange-50 text-orange-600','title'=>"Mashq 3. Rollarga bo'lib o'qish",'text'=>"Dialogli matn tanlanadi. O'quvchilar qahramonlarga bo'linib o'qiydi. Bu usul ifodali o'qish va matn mazmunini tushunishga yordam beradi."],
                ] as $m)
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="mb-2 flex items-center gap-2.5">
                            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg {{ $m['tint'] }}">
                                <x-icon :name="$m['icon']" class="h-4 w-4" />
                            </span>
                            <h4 class="text-xs font-bold uppercase text-slate-700">{{ $m['title'] }}</h4>
                        </div>
                        <p class="text-xs leading-relaxed text-slate-500">{{ $m['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Savol-topshiriqlar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm md:grid-cols-[1fr_180px]">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['n'=>1,'q'=>"Ravon o'qishning uch asosiy tarkibiy qismini ayting."],
                        ['n'=>2,'q'=>"Tez o'qish va ravon o'qish o'rtasida qanday farq bor?"],
                        ['n'=>3,'q'=>"2-sinf o'quvchilari uchun ravon o'qishni rivojlantiruvchi 3 ta mashq tuzing."],
                        ['n'=>4,'q'=>"O'quvchi matnni tez o'qiydi, lekin tushunmaydi. Siz qanday metodik yordam berasiz?"],
                        ['n'=>5,'q'=>"Audio bilan o'qish mashg'ulotining tartibini yozing."],
                    ] as $t)
                        <div class="flex gap-3 rounded-xl border border-slate-200 p-3.5 transition hover:-translate-y-0.5 hover:shadow-sm">
                            <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-xs font-bold text-emerald-700">{{ $t['n'] }}</span>
                            <p class="text-xs leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="hidden items-center justify-center overflow-hidden rounded-xl bg-slate-50 md:flex">
                    <img src="{{ asset('images/nazariya/ravon-oqish/savollar.jpg') }}" alt="Savol-topshiriqlar" class="h-full w-full object-cover">
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-emerald-950 via-emerald-900 to-teal-900 p-6 text-white shadow-sm">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-emerald-200">
                        <x-icon name="target" class="h-4.5 w-4.5" />
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-wide text-emerald-200">Kutiladigan natija</span>
                </div>
                <div class="grid grid-cols-1 gap-2 text-xs sm:grid-cols-2 lg:grid-cols-3">
                    @foreach (["Foydalanuvchi ravon o'qishning mazmunini to'g'ri tushunadi","U ravon o'qishni tez o'qish bilan aralashtirmaydi","Boshlang'ich sinf o'quvchilariga to'g'ri o'qishni rivojlantirish usullarini qo'llay oladi","O'quvchilarni ifodali va mazmunli o'qishga yo'naltira oladi","O'qish savodxonligini oshirishga xizmat qiladigan metodlarni amaliyotda qo'llaydi","O'quvchilarning o'qish tezligi, aniqligi va tushunish darajasi bosqichma-bosqich rivojlanadi"] as $n)
                        <div class="rounded-lg bg-white/10 p-2.5 leading-relaxed text-emerald-50">{{ $n }}</div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Nav buttons --}}
        <div class="mt-6 flex justify-between">
            <a href="{{ route('nazariya.show', 'matn-tushunish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'tanqidiy') }}" class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-emerald-700">
                Keyingi: Tanqidiy o'qish
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
