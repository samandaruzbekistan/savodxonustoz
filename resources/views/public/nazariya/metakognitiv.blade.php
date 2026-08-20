@extends('layouts.app')
@section('title', 'Metakognitiv strategiyalar')
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'metakognitiv'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl shadow-sm">
            <img src="{{ asset('images/nazariya/metakognitiv/hero.jpg') }}" alt="Bola fikrlash jarayonida" class="h-64 w-full object-cover object-[75%_center] sm:h-72" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-r from-pink-950 via-pink-950/90 to-pink-950/50"></div>
            <div class="absolute inset-0 flex flex-col justify-center px-7 sm:px-10">
                <span class="mb-3 inline-flex w-fit items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">7</span>
                    Nazariya · 7-bo'lim
                </span>
                <h1 class="max-w-2xl text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Metakognitiv strategiyalar</h1>
                <p class="mt-3 max-w-xl text-sm leading-relaxed text-pink-100">Metakognitsiya tushunchasi va o'qish jarayonida o'z o'qishini anglash, nazorat qilish hamda samarali strategiyalardan foydalanish ko'nikmalari yoritiladi.</p>
            </div>
        </div>

        {{-- 2 intro cards --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-pink-50 text-pink-600">
                        <x-icon name="bulb" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Metakognitsiya nima?</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Metakognitsiya — bu <strong class="text-slate-700">o'z fikrlash jarayonini anglash va boshqarish</strong> qobiliyatidir. O'qish kontekstida bu o'quvchining o'z o'qishini nazorat qilishi, tushunmaganini sezishi va kerakli strategiyani tanlashi demakdir.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-violet-50 text-violet-600">
                        <x-icon name="sparkle" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">O'qishda ahamiyati</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Metakognitiv strategiyalarni qo'llaydigan o'quvchi matnni faqat o'qib o'tmaydi — u <strong class="text-slate-700">tushundim yoki tushunmadim</strong> deb o'ziga savol beradi, qayta o'qiydi, asosiy g'oyani ajratadi va o'z o'qishini baholaydi.</p>
            </div>
        </div>

        {{-- Asosiy strategiyalar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Asosiy strategiyalar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"O'qishdan oldin: KWL jadvali",'desc'=>"K — nima bilaman, W — nima bilmoqchiman, L — nima bildim. Bu jadval o'quvchini matn bilan tanishishdan oldin yo'naltiradi.",'tint'=>'bg-indigo-50 text-indigo-600'],
                    ['n'=>2,'title'=>"O'qish jarayonida: fikr belgilash",'desc'=>"O'quvchi matnni o'qirkan, nima yangi, nima qiziq, nimani tushunmadim deb belgi qo'yadi (✓, ?, !).",'tint'=>'bg-emerald-50 text-emerald-600'],
                    ['n'=>3,'title'=>"O'qishdan keyin: qayta hikoya",'desc'=>"O'quvchi o'qiganini o'z so'zlari bilan aytib beradi. Bu matnni tushunganini va eslab qolganini tekshiradi.",'tint'=>'bg-orange-50 text-orange-600'],
                    ['n'=>4,'title'=>"Savollar tuzish strategiyasi",'desc'=>"O'quvchi matn bo'yicha o'zi savol tuzadi. Bu matnni chuqur o'ylagan holda o'qishga majbur qiladi.",'tint'=>'bg-cyan-50 text-cyan-600'],
                    ['n'=>5,'title'=>"Xulosa chiqarish",'desc'=>"O'quvchi matnning asosiy mazmunini 2–3 gapda ifodalaydi. Bu tanlov va umumlashtirish ko'nikmalarini rivojlantiradi.",'tint'=>'bg-violet-50 text-violet-600'],
                    ['n'=>6,'title'=>"Monitoring — kuzatib borish",'desc'=>"O'quvchi o'qish jarayonida o'ziga: «Buni tushundimmi?» deb savol beradi va kerak bo'lsa qayta o'qiydi.",'tint'=>'bg-rose-50 text-rose-600'],
                ] as $s)
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="mb-2.5 inline-flex h-7 w-7 items-center justify-center rounded-lg text-xs font-bold {{ $s['tint'] }}">{{ $s['n'] }}</span>
                        <h4 class="mb-1.5 text-xs font-bold text-slate-800">{{ $s['title'] }}</h4>
                        <p class="text-xs leading-relaxed text-slate-500">{{ $s['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metodik ahamiyati --}}
        <div class="mb-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-[240px_1fr]">
                <img src="{{ asset('images/nazariya/metakognitiv/methodic.jpg') }}" alt="O'qituvchi o'quvchiga individual yordam bermoqda" class="hidden h-full w-full object-cover md:block" loading="lazy">
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h3>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-500">Bo'lajak boshlang'ich sinf o'qituvchisi o'quvchilarga faqat matnni tushuntirish emas, balki ularning o'z fikrlash jarayonini kuzatishga o'rgatishi zarur. Metakognitiv savollar orqali o'qituvchi o'quvchining tushunish darajasini aniqlaydi va unga mos strategiya tanlaydi.</p>
                    <ul class="mt-3 space-y-1.5">
                        @foreach (["o'quvchini o'z-o'zini nazorat qilishga o'rgatish","tushunmagan joyni aniqlashga yordam beruvchi savollar berish","o'qishdan oldin, jarayonida va keyin qo'llash mumkin bo'lgan usullardan foydalanish"] as $item)
                            <li class="flex items-start gap-2 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" stroke="2.5" />
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- Amaliy misol --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy misol</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                <div class="mb-5 grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div class="overflow-hidden rounded-xl sm:col-span-1">
                        <img src="{{ asset('images/nazariya/metakognitiv/amaliy-misol.jpg') }}" alt="Qiz kitob o'qimoqda" class="h-40 w-full object-cover sm:h-32" loading="lazy">
                    </div>
                    <div class="flex items-center rounded-xl border-l-4 border-pink-400 bg-slate-50 p-4 text-xs italic leading-relaxed text-slate-600 sm:col-span-2">
                        <p><strong class="not-italic text-slate-800">Vaziyat:</strong> O'quvchi matnni o'qib chiqdi, lekin savolga javob berolmadi. O'qituvchi unga metakognitiv savollar orqali yordam beradi.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['n'=>1,'type'=>'Anglash','q'=>"Matnni o'qiyotganda qaysi joyda tushunish qiyinlashdi?",'tint'=>'bg-pink-50 text-pink-600'],
                        ['n'=>2,'type'=>'Nazorat qilish','q'=>"Shu joyni qayta o'qib chiqsang, ma'no ochilarmikan?",'tint'=>'bg-violet-50 text-violet-600'],
                        ['n'=>3,'type'=>'Strategiya tanlash','q'=>"Tushunmagan so'zni kontekst orqali taxmin qilib ko'r-chi?",'tint'=>'bg-blue-50 text-blue-600'],
                        ['n'=>4,'type'=>'Baholash','q'=>"Endi matnni o'z so'zlaring bilan qayta hikoya qilib bera olasanmi?",'tint'=>'bg-emerald-50 text-emerald-600'],
                    ] as $m)
                        <div class="rounded-xl border border-slate-200 p-3.5 transition hover:border-slate-300 hover:bg-slate-50/60">
                            <div class="mb-1.5 flex items-center gap-2">
                                <span class="inline-flex h-6 w-6 items-center justify-center rounded-lg text-xs font-bold {{ $m['tint'] }}">{{ $m['n'] }}</span>
                                <span class="text-xs font-semibold text-slate-700">{{ $m['type'] }}</span>
                            </div>
                            <p class="text-xs leading-relaxed text-slate-500">{{ $m['q'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Savol-topshiriqlar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"Metakognitsiya tushunchasini o'z so'zlaringiz bilan izohlang."],
                    ['n'=>2,'q'=>"KWL jadvalini 3-sinf o'quvchisi uchun qanday tushuntirasiz?"],
                    ['n'=>3,'q'=>"O'quvchi matnni o'qidi lekin tushunmadi. Qanday metakognitiv strategiyani tavsiya qilasiz?"],
                    ['n'=>4,'q'=>"Fikr belgilash usulini darsga qanday kiritasiz?"],
                    ['n'=>5,'q'=>"Metakognitiv strategiyalar tanqidiy o'qish bilan qanday bog'liq?"],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-pink-50 text-xs font-bold text-pink-600">{{ $t['n'] }}</span>
                        <p class="text-xs leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-pink-950 via-pink-900 to-violet-900 p-6 text-white shadow-sm">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-14 right-24 h-32 w-32 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-2xl">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-pink-200">
                        <x-icon name="target" class="h-4.5 w-4.5" />
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-wide text-pink-200">Kutiladigan natija</span>
                </div>
                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 text-xs">
                    @foreach (["Foydalanuvchi metakognitsiya tushunchasini aniq izohlaydi","O'qishdan oldin, jarayonida va keyin qo'llaniladigan strategiyalarni farqlaydi","O'quvchilar uchun metakognitiv savol va topshiriqlar tuza oladi","KWL jadvali va fikr belgilash usulini darsga tatbiq eta oladi","O'quvchining o'z o'qishini nazorat qilishiga yordam bera oladi","Metakognitiv yondashuv orqali matnni tushunishni chuqurlashtiradi"] as $n)
                        <div class="flex items-start gap-2 rounded-lg bg-white/10 p-2.5">
                            <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-pink-200" stroke="2.5" />
                            {{ $n }}
                        </div>
                    @endforeach
                </div>
            </div>
            <img src="{{ asset('images/nazariya/metakognitiv/natija.png') }}" alt="Metakognitsiya" class="pointer-events-none absolute -right-2 top-1/2 hidden h-28 w-28 -translate-y-1/2 object-contain opacity-90 lg:block">
        </div>

        <div class="mt-6 flex justify-start">
            <a href="{{ route('nazariya.show', 'tanqidiy') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi: Tanqidiy o'qish
            </a>
        </div>
    </div>
</div>
@endsection
