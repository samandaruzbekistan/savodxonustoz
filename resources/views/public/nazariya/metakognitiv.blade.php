@extends('layouts.app')
@section('title', 'Metakognitiv strategiyalar')
@section('content')
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'metakognitiv'])

    <div class="min-w-0 flex-1">

        {{-- ══════════════════════ HERO ══════════════════════ --}}
        <section class="relative mb-8 overflow-hidden rounded-[28px] bg-gradient-to-br from-violet-950 via-purple-900 to-fuchsia-900">
            <div class="pointer-events-none absolute inset-0 text-white opacity-10">
                <x-decor.dots id="metakognitiv-hero-dots" />
            </div>
            <div class="su-blob pointer-events-none absolute -left-20 -top-20 h-72 w-72 rounded-full bg-violet-400/20 blur-3xl"></div>
            <div class="su-blob su-delay-2 pointer-events-none absolute -bottom-24 right-0 h-80 w-80 rounded-full bg-fuchsia-400/20 blur-3xl"></div>

            <div class="relative grid gap-8 px-6 py-9 sm:px-10 sm:py-11 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:py-14">
                <div class="su-reveal" data-reveal="left">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1.5 text-[11px] font-semibold uppercase tracking-wider text-violet-100 ring-1 ring-inset ring-white/25 backdrop-blur">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">7</span>
                        Nazariya · 7-bo'lim
                    </span>

                    <h1 class="mt-4 text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl">
                        Metakognitiv <span class="text-violet-200">strategiyalar</span>
                    </h1>

                    <p class="mt-3 max-w-xl text-sm leading-relaxed text-violet-100 sm:text-[15px]">
                        Metakognitsiya tushunchasi va o'qish jarayonida o'z o'qishini anglash, nazorat qilish hamda samarali strategiyalardan foydalanish ko'nikmalari yoritiladi.
                    </p>

                    <div class="mt-6 grid grid-cols-2 gap-3 sm:max-w-lg">
                        @foreach ([
                            ['O\'z fikrlashini anglash', 'bulb'],
                            ['O\'qishni nazorat qilish', 'compass'],
                            ['Mos strategiya tanlash', 'layers'],
                            ['Natijani baholash', 'check'],
                        ] as [$label, $icon])
                            <div class="flex items-center gap-2 rounded-xl bg-white/10 px-3 py-2 ring-1 ring-inset ring-white/10 backdrop-blur">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-white/15">
                                    <x-icon :name="$icon" class="h-3.5 w-3.5 text-white" stroke="2.2" />
                                </span>
                                <span class="text-[11px] font-medium leading-tight text-violet-50">{{ $label }}</span>
                            </div>
                        @endforeach
                    </div>

                    <a href="#asosiy-strategiyalar" class="group mt-6 inline-flex items-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-bold text-violet-900 shadow-lg transition hover:bg-violet-50">
                        Strategiyalarni ko'rish
                        <x-icon name="arrow-right" class="h-4 w-4 rotate-90 transition-transform duration-200 group-hover:translate-y-0.5" />
                    </a>
                </div>

                <div class="su-reveal relative hidden lg:block" data-reveal="right">
                    <div class="su-blob absolute inset-6 rounded-[2rem] bg-white/10 blur-2xl"></div>
                    <img src="{{ asset("images/nazariya/metakognitiv/01_bola_kitob_o'qish.png") }}" alt="O'ylab kitob o'qiyotgan o'quvchi"
                         class="su-float-slow relative mx-auto h-64 w-auto drop-shadow-2xl">

                    <div class="flex items-center gap-2.5 rounded-2xl rounded-bl-sm bg-white px-3.5 py-2.5 shadow-lg absolute left-0 top-4 -rotate-2">
                        <img src="{{ asset('images/nazariya/metakognitiv/03_nishon_maqsad.png') }}" alt="" class="h-9 w-9 shrink-0 object-contain">
                        <p class="text-[11px] font-bold leading-tight text-violet-900">Aniq maqsad<br>bilan o'qish</p>
                    </div>

                    <div class="su-float rounded-2xl rounded-br-sm bg-white px-3.5 py-2.5 shadow-lg absolute right-0 bottom-2 rotate-2">
                        <p class="text-[11px] font-bold text-violet-900">O'ylayman · So'rayman · Tekshiraman</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════════════════ METAKOGNITSIYA NIMA? / AHAMIYATI ══════════════════════ --}}
        <div class="su-stagger mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="relative flex h-40 items-center justify-center overflow-hidden bg-gradient-to-br from-pink-50 to-rose-100">
                    <img src="{{ asset('images/nazariya/metakognitiv/02_miya_metakognitsiya.png') }}" alt="Metakognitsiya — miya faoliyati"
                         class="h-28 w-28 object-contain drop-shadow-md transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="p-5">
                    <h3 class="mb-2 text-base font-bold text-slate-800">Metakognitsiya nima?</h3>
                    <p class="text-xs leading-relaxed text-slate-500">Metakognitsiya — bu <strong class="text-slate-700">o'z fikrlash jarayonini anglash va boshqarish</strong> qobiliyatidir. O'qish kontekstida bu o'quvchining o'z o'qishini nazorat qilishi, tushunmaganini sezishi va kerakli strategiyani tanlashi demakdir.</p>
                    <a href="#asosiy-strategiyalar" class="group/link mt-3 inline-flex items-center gap-1 text-xs font-semibold text-rose-600">
                        Strategiyalarni ko'rish
                        <x-icon name="arrow-right" class="h-3.5 w-3.5 transition-transform duration-200 group-hover/link:translate-x-0.5" />
                    </a>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="relative flex h-40 items-center justify-center overflow-hidden bg-gradient-to-br from-violet-50 to-purple-100">
                    <img src="{{ asset('images/nazariya/metakognitiv/09_savol_javob_bubble.png') }}" alt="O'z-o'ziga savol berish"
                         class="h-28 w-28 object-contain drop-shadow-md transition-transform duration-500 group-hover:scale-110">
                </div>
                <div class="p-5">
                    <h3 class="mb-2 text-base font-bold text-slate-800">O'qishda ahamiyati</h3>
                    <p class="text-xs leading-relaxed text-slate-500">Metakognitiv strategiyalarni qo'llaydigan o'quvchi matnni faqat o'qib o'tmaydi — u <strong class="text-slate-700">tushundim yoki tushunmadim</strong> deb o'ziga savol beradi, qayta o'qiydi, asosiy g'oyani ajratadi va o'z o'qishini baholaydi.</p>
                    <a href="#metodik-ahamiyat" class="group/link mt-3 inline-flex items-center gap-1 text-xs font-semibold text-violet-600">
                        Nega muhim
                        <x-icon name="arrow-right" class="h-3.5 w-3.5 transition-transform duration-200 group-hover/link:translate-x-0.5" />
                    </a>
                </div>
            </div>
        </div>

        {{-- ══════════════════════ ASOSIY STRATEGIYALAR ══════════════════════ --}}
        <div id="asosiy-strategiyalar" class="mb-8 scroll-mt-24">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Asosiy strategiyalar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <p class="mb-4 -mt-2 text-center text-xs text-slate-400">Samarali o'qish uchun 6 ta muhim strategiya</p>

            <div class="su-stagger grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n' => 1, 'img' => '06_reja_daftari.png', 'title' => "O'qishdan oldin: KWL jadvali", 'desc' => "K — nima bilaman, W — nima bilmoqchiman, L — nima bildim. Bu jadval o'quvchini matn bilan tanishishdan oldin yo'naltiradi.", 'tint' => 'bg-indigo-600', 'accent' => 'text-indigo-600'],
                    ['n' => 2, 'img' => '08_sticky_note_savollar.png', 'title' => "O'qish jarayonida: fikr belgilash", 'desc' => "O'quvchi matnni o'qirkan, nima yangi, nima qiziq, nimani tushunmadim deb belgi qo'yadi (✓, ?, !).", 'tint' => 'bg-emerald-600', 'accent' => 'text-emerald-600'],
                    ['n' => 3, 'img' => '15_qiz_yozish.png', 'title' => "O'qishdan keyin: qayta hikoya", 'desc' => "O'quvchi o'qiganini o'z so'zlari bilan aytib beradi. Bu matnni tushunganini va eslab qolganini tekshiradi.", 'tint' => 'bg-orange-600', 'accent' => 'text-orange-600'],
                    ['n' => 4, 'img' => "13_savol_va_g'oya.png", 'title' => 'Savollar tuzish strategiyasi', 'desc' => "O'quvchi matn bo'yicha o'zi savol tuzadi. Bu matnni chuqur o'ylagan holda o'qishga majbur qiladi.", 'tint' => 'bg-cyan-600', 'accent' => 'text-cyan-600'],
                    ['n' => 5, 'img' => '14_lampochka_kitob.png', 'title' => 'Xulosa chiqarish', 'desc' => "O'quvchi matnning asosiy mazmunini 2–3 gapda ifodalaydi. Bu tanlov va umumlashtirish ko'nikmalarini rivojlantiradi.", 'tint' => 'bg-violet-600', 'accent' => 'text-violet-600'],
                    ['n' => 6, 'img' => '12_checklist_monitoring.png', 'title' => 'Monitoring — kuzatib borish', 'desc' => "O'quvchi o'qish jarayonida o'ziga: «Buni tushundimmi?» deb savol beradi va kerak bo'lsa qayta o'qiydi.", 'tint' => 'bg-rose-600', 'accent' => 'text-rose-600'],
                ] as $s)
                    <div class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="relative h-44 w-full shrink-0 overflow-hidden sm:h-48">
                            <img src="{{ asset('images/nazariya/metakognitiv/'.$s['img']) }}" alt="{{ $s['title'] }}"
                                 class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/45 via-black/0 to-transparent"></div>
                            <span class="absolute left-3 top-3 grid h-8 w-8 place-items-center rounded-full {{ $s['tint'] }} text-xs font-extrabold text-white shadow-md">
                                {{ sprintf('%02d', $s['n']) }}
                            </span>
                        </div>
                        <div class="flex flex-1 flex-col p-4">
                            <h4 class="mb-1.5 text-sm font-bold leading-snug text-slate-800">{{ $s['title'] }}</h4>
                            <p class="mb-3 flex-1 text-xs leading-relaxed text-slate-500">{{ $s['desc'] }}</p>
                            <a href="#amaliy-misol" class="group/link inline-flex items-center gap-1 text-xs font-semibold {{ $s['accent'] }}">
                                Amalda ko'rish
                                <x-icon name="arrow-right" class="h-3.5 w-3.5 transition-transform duration-200 group-hover/link:translate-x-0.5" />
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ══════════════════════ METODIK AHAMIYAT ══════════════════════ --}}
        <section id="metodik-ahamiyat" class="su-reveal mb-8 scroll-mt-24 overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-[38%_1fr]">
                <div class="relative flex items-center justify-center overflow-hidden bg-gradient-to-br from-violet-50 via-purple-50 to-fuchsia-100 p-8">
                    <div class="pointer-events-none absolute -left-8 -top-8 h-32 w-32 rounded-full bg-violet-200/40 blur-2xl"></div>
                    <div class="pointer-events-none absolute -bottom-10 -right-6 h-36 w-36 rounded-full bg-fuchsia-200/40 blur-2xl"></div>

                    <img src="{{ asset("images/nazariya/metakognitiv/17_o'qituvchi_thumbsup.png") }}" alt="Bo'lajak o'qituvchi"
                         class="relative h-48 w-auto object-contain drop-shadow-lg">

                    <div class="absolute right-4 top-6 rotate-6 rounded-xl bg-white p-1.5 shadow-md ring-4 ring-white/50">
                        <img src="{{ asset('images/nazariya/metakognitiv/18_diplom_va_kepka.png') }}" alt="" class="h-12 w-12 object-contain">
                    </div>
                    <div class="su-float absolute bottom-6 left-6 -rotate-6 rounded-xl bg-white p-1.5 shadow-md ring-4 ring-white/50">
                        <img src="{{ asset("images/nazariya/metakognitiv/19_yashil_xona_o'simligi.png") }}" alt="" class="h-10 w-10 object-contain">
                    </div>
                </div>
                <div class="p-6 sm:p-7">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-violet-50 text-violet-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" stroke="1.8" />
                        </span>
                        <h2 class="text-base font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h2>
                    </div>
                    <p class="mb-4 text-xs leading-relaxed text-slate-500">Bo'lajak boshlang'ich sinf o'qituvchisi o'quvchilarga faqat matnni tushuntirib emas, balki ularning o'z fikrlash jarayonini kuzatishga o'rgatishi zarur. Metakognitiv savollar orqali o'qituvchi o'quvchilar o'zlari uchun strategiya tanlaydi va uzoq muddatda mustaqil o'quvchiga aylanadi.</p>

                    <ul class="mb-4 grid gap-2 sm:grid-cols-1">
                        @foreach ([
                            "o'quvchini o'z-o'zini nazorat qilishga o'rgatish",
                            "tushunmagan joyini aniqlashga yordam beruvchi savollar berish",
                            "o'qishdan oldin, jarayonida va keyin qo'llash mumkin bo'lgan usullardan foydalanish",
                        ] as $item)
                            <li class="flex items-start gap-2 rounded-xl bg-slate-50 p-2.5 text-xs leading-relaxed text-slate-600">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-500" stroke="2.5" />
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>

                    <div class="rounded-xl border-l-4 border-violet-400 bg-violet-50 p-3.5">
                        <p class="text-xs italic leading-relaxed text-violet-900">"O'zini kuzatib o'qigan o'quvchi — mustaqil fikrlaydigan shaxs bo'lib voyaga yetadi!"</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════════════════ AMALIY MISOL ══════════════════════ --}}
        <div id="amaliy-misol" class="mb-8 scroll-mt-24">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy misol</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>

            <div class="su-reveal overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="grid grid-cols-1 lg:grid-cols-[34%_1fr]">
                    <div class="relative flex items-center justify-center overflow-hidden bg-gradient-to-br from-pink-50 via-rose-50 to-violet-100 p-8">
                        <div class="pointer-events-none absolute -right-8 -top-6 h-32 w-32 rounded-full bg-pink-200/40 blur-2xl"></div>
                        <div class="pointer-events-none absolute -bottom-10 -left-8 h-36 w-36 rounded-full bg-violet-200/40 blur-2xl"></div>

                        <img src="{{ asset("images/nazariya/metakognitiv/07_o'quvchi_fikr_belgilash.png") }}" alt="O'quvchi matnni o'ylab o'qimoqda"
                             class="relative h-52 w-auto object-contain drop-shadow-lg">

                        <div class="su-float absolute bottom-5 right-3 rotate-3 rounded-xl bg-white p-1.5 shadow-md ring-4 ring-white/50">
                            <img src="{{ asset("images/nazariya/metakognitiv/05_qiz_kitob_o'qish.png") }}" alt="" class="h-16 w-16 rounded-lg object-cover">
                        </div>
                    </div>

                    <div class="p-6 sm:p-7">
                        <div class="mb-5 flex items-start gap-2.5 rounded-xl border-l-4 border-pink-400 bg-slate-50 p-4 text-xs italic leading-relaxed text-slate-600">
                            <x-icon name="sparkle" class="mt-0.5 h-4 w-4 shrink-0 text-pink-500" />
                            <p><strong class="not-italic text-slate-800">Vaziyat:</strong> O'quvchi matnni o'qib chiqdi, lekin savolga javob berolmadi. O'qituvchi unga metakognitiv savollar orqali yordam beradi.</p>
                        </div>
                        <div class="su-stagger grid grid-cols-1 gap-3 sm:grid-cols-2">
                            @foreach ([
                                ['n' => 1, 'type' => 'Anglash', 'icon' => 'bulb', 'q' => "Matnni o'qiyotganda qaysi joyda tushunish qiyinlashdi?", 'tint' => 'bg-pink-50 text-pink-600'],
                                ['n' => 2, 'type' => 'Nazorat qilish', 'icon' => 'target', 'q' => "Shu joyni qayta o'qib chiqsang, ma'no ochilarmikan?", 'tint' => 'bg-violet-50 text-violet-600'],
                                ['n' => 3, 'type' => 'Strategiya tanlash', 'icon' => 'compass', 'q' => "Tushunmagan so'zni kontekst orqali taxmin qilib ko'r-chi?", 'tint' => 'bg-blue-50 text-blue-600'],
                                ['n' => 4, 'type' => 'Baholash', 'icon' => 'check', 'q' => "Endi matnni o'z so'zlaring bilan qayta hikoya qilib bera olasanmi?", 'tint' => 'bg-emerald-50 text-emerald-600'],
                            ] as $m)
                                <div class="rounded-xl border border-slate-200 p-3.5 transition-all duration-300 hover:-translate-y-0.5 hover:border-slate-300 hover:bg-slate-50/60 hover:shadow-sm">
                                    <div class="mb-1.5 flex items-center gap-2">
                                        <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg {{ $m['tint'] }}">
                                            <x-icon :name="$m['icon']" class="h-3.5 w-3.5" stroke="2" />
                                        </span>
                                        <span class="text-xs font-semibold text-slate-700">{{ $m['n'] }}. {{ $m['type'] }}</span>
                                    </div>
                                    <p class="text-xs leading-relaxed text-slate-500">{{ $m['q'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ══════════════════════ SAVOL-TOPSHIRIQLAR ══════════════════════ --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Savol-topshiriqlar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <p class="mb-4 -mt-2 text-center text-xs text-slate-400">O'z bilimingizni sinab ko'ring</p>

            <div class="grid grid-cols-1 gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6 md:grid-cols-[1fr_200px]">
                <div class="su-stagger grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        "Metakognitsiya tushunchasini o'z so'zlaringiz bilan izohlang.",
                        "KWL jadvali 3-sinf o'quvchisi uchun qanday tushuntiriladi?",
                        "O'quvchi matnni o'qidi, lekin tushunmadi. Qanday metakognitiv strategiyani tavsiya qilasiz?",
                        "Fikr belgilash usulini darsga qanday kiritasiz?",
                        "Metakognitiv strategiyalar tanqidiy o'qish bilan qanday bog'liq?",
                    ] as $i => $q)
                        <div class="group flex gap-3 rounded-xl border border-slate-200 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-violet-200 hover:bg-violet-50/40 hover:shadow-sm">
                            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full bg-gradient-to-br from-violet-500 to-fuchsia-600 text-xs font-bold text-white shadow-sm">
                                {{ sprintf('%02d', $i + 1) }}
                            </span>
                            <p class="pt-1 text-xs leading-relaxed text-slate-600">{{ $q }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="relative hidden items-center justify-center overflow-hidden rounded-xl bg-gradient-to-br from-violet-50 to-fuchsia-100 md:flex">
                    <img src="{{ asset("images/nazariya/metakognitiv/11_bola_noutbukda_o'qish.png") }}" alt="Topshiriq ustida ishlash" class="su-float-slow h-32 w-32 object-contain drop-shadow-md">
                    <div class="absolute -bottom-2 -right-2 rotate-6 rounded-xl bg-white p-1.5 shadow-md ring-2 ring-white">
                        <img src="{{ asset("images/nazariya/metakognitiv/10_kitoblar_va_o'simlik.png") }}" alt="" class="h-12 w-12 object-contain">
                    </div>
                </div>
            </div>
        </div>

        {{-- ══════════════════════ KUTILADIGAN NATIJA ══════════════════════ --}}
        <section class="su-reveal relative overflow-hidden rounded-[24px] bg-gradient-to-br from-violet-950 via-purple-900 to-fuchsia-900 shadow-sm">
            <div class="pointer-events-none absolute inset-0 text-white opacity-10">
                <x-decor.dots id="metakognitiv-outro-dots" />
            </div>
            <div class="su-blob pointer-events-none absolute -right-14 -top-14 h-48 w-48 rounded-full bg-fuchsia-400/20 blur-3xl"></div>

            <div class="relative grid grid-cols-1 items-center gap-6 p-6 sm:p-8 lg:grid-cols-[1fr_auto]">
                <div class="max-w-2xl">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-violet-200">
                            <x-icon name="target" class="h-4.5 w-4.5" stroke="1.8" />
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-wide text-violet-200">Kutiladigan natija</span>
                    </div>
                    <div class="grid grid-cols-1 gap-2 text-xs sm:grid-cols-2">
                        @foreach ([
                            "Foydalanuvchi metakognitsiya tushunchasini aniq izohlaydi",
                            "O'qishdan oldin, jarayonida va keyin qo'llaniladigan strategiyalarni farqlaydi",
                            "O'quvchilar uchun metakognitiv savol va topshiriqlar tuza oladi",
                            "KWL jadvali va fikr belgilash usullarini darsga tatbiq eta oladi",
                            "O'quvchining o'z-o'zini nazorat qilishiga yordam bera oladi",
                            "Metakognitiv yondashuv orqali matnni tushunishni chuqurlashtiradi",
                        ] as $n)
                            <div class="flex items-start gap-2 rounded-lg bg-white/10 p-2.5">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-200" stroke="2.5" />
                                {{ $n }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="relative mx-auto hidden h-40 w-40 shrink-0 lg:block">
                    <img src="{{ asset('images/nazariya/metakognitiv/16_bilim_amaliyot_progress_kitoblar.png') }}" alt="Bilim, amaliyot, natija"
                         class="su-float-slow relative z-10 h-full w-full object-contain drop-shadow-2xl">
                    <img src="{{ asset('images/nazariya/metakognitiv/04_trophy_yutuq.png') }}" alt=""
                         class="su-float absolute -bottom-3 -left-6 h-16 w-16 -rotate-6 object-contain drop-shadow-xl">
                </div>
            </div>
        </section>

        {{-- Nav buttons --}}
        <div class="mt-6 flex justify-start">
            <a href="{{ route('nazariya.show', 'tanqidiy') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi: Tanqidiy o'qish
            </a>
        </div>
    </div>
</div>
@endsection
