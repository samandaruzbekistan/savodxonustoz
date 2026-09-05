@extends('layouts.app')
@section('title', "O'qish savodxonligi tushunchasi")
@section('content')
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'tushuncha'])

    <div class="min-w-0 flex-1">

        {{-- ══════════════════════ HERO ══════════════════════ --}}
        <section class="relative mb-8 overflow-hidden rounded-[28px] bg-gradient-to-br from-indigo-950 via-indigo-900 to-violet-900">
            <div class="pointer-events-none absolute inset-0 text-white opacity-10">
                <x-decor.dots id="tushuncha-hero-dots" />
            </div>
            <div class="su-blob pointer-events-none absolute -left-20 -top-20 h-72 w-72 rounded-full bg-indigo-400/20 blur-3xl"></div>
            <div class="su-blob su-delay-2 pointer-events-none absolute -bottom-24 right-0 h-80 w-80 rounded-full bg-violet-400/20 blur-3xl"></div>

            <div class="relative grid gap-8 px-6 py-9 sm:px-10 sm:py-11 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:py-14">
                <div class="su-reveal" data-reveal="left">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1.5 text-[11px] font-semibold uppercase tracking-wider text-indigo-100 ring-1 ring-inset ring-white/25 backdrop-blur">
                        <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">1</span>
                        Nazariya · 1-bo'lim
                    </span>

                    <h1 class="mt-4 text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl">
                        O'qish savodxonligi <span class="text-indigo-200">tushunchasi</span>
                    </h1>

                    <p class="mt-3 max-w-xl text-sm leading-relaxed text-indigo-100 sm:text-[15px]">
                        Ushbu bo'limda o'qish savodxonligi tushunchasi, uning mazmuni, ahamiyati va tarkibiy ko'nikmalari yoritiladi.
                    </p>

                    <div class="mt-6 grid grid-cols-2 gap-3 sm:max-w-lg">
                        @foreach ([
                            ["Matnni tushunish — o'qishning maqsadi", 'bulb'],
                            ["Fikrlash va tahlil ko'nikmalari", 'compass'],
                            ["Har bir fanga bog'liq zamin", 'layers'],
                            ["Bo'lajak o'qituvchi uchun asos", 'cap'],
                        ] as [$label, $icon])
                            <div class="flex items-center gap-2 rounded-xl bg-white/10 px-3 py-2 ring-1 ring-inset ring-white/10 backdrop-blur">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-white/15">
                                    <x-icon :name="$icon" class="h-3.5 w-3.5 text-white" stroke="2.2" />
                                </span>
                                <span class="text-[11px] font-medium leading-tight text-indigo-50">{{ $label }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="su-reveal relative hidden lg:block" data-reveal="right">
                    <div class="su-blob absolute inset-6 rounded-[2rem] bg-white/10 blur-2xl"></div>
                    <img src="{{ asset('images/nazariya/tushuncha/teacher_girl_reading.png') }}" alt="Kitob o'qiyotgan qiz"
                         class="su-float-slow relative mx-auto h-64 w-auto drop-shadow-2xl">

                    <div class="rounded-2xl rounded-bl-sm bg-white px-4 py-3 shadow-lg absolute left-0 top-2 -rotate-2">
                        <p class="text-[12px] font-bold text-indigo-900">"O'qish — bu faqat so'zlarni o'qish emas,<br>balki dunyoni anglashdir."</p>
                    </div>

                    <div class="su-float rounded-2xl rounded-br-sm bg-white px-3.5 py-2.5 shadow-lg absolute right-2 bottom-2 rotate-2">
                        <p class="flex items-center gap-1.5 text-[11px] font-bold text-indigo-900">
                            <x-icon name="heart" class="h-3.5 w-3.5 text-rose-500" stroke="2.2" />
                            Har bir bola o'qiy oladi!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════════════════ TA'RIFI / AHAMIYATI / MAQSAD ══════════════════════ --}}
        <div class="su-stagger mb-8 grid grid-cols-1 gap-4 md:grid-cols-3">
            @foreach ([
                [
                    'title' => "Ta'rifi",
                    'icon' => 'open_book.png',
                    'tone' => 'indigo',
                    'text' => "O'qish savodxonligi — bu o'quvchining matnni faqat tovushlab o'qishi emas, balki o'qilgan matn mazmunini anglash, undagi asosiy fikrni ajratish, ma'lumotlarni tahlil qilish, xulosa chiqarish va matndan hayotiy vaziyatlarda foydalana olish qobiliyatidir.",
                ],
                [
                    'title' => 'Ahamiyati',
                    'icon' => 'growth_chart.png',
                    'tone' => 'emerald',
                    'text' => "Boshlang'ich sinfda o'qish savodxonligi bolaning keyingi ta'lim bosqichlaridagi muvaffaqiyatini belgilovchi asosiy omillardan biridir. Chunki barcha fanlarni o'zlashtirish matnni tushunish va topshiriq shartini to'g'ri talqin qilishga bog'liq.",
                ],
                [
                    'title' => 'Maqsad',
                    'icon' => 'target_goal.png',
                    'tone' => 'amber',
                    'text' => "O'qish savodxonligi o'quvchining fikrlash, tushunish, izohlash va muloqotga kirishish qobiliyatini rivojlantiruvchi murakkab pedagogik jarayondir. Maqsad — har bir bolani mustaqil va ongli o'quvchi sifatida shakllantirish.",
                ],
            ] as $card)
                @php
                    $tones = [
                        'indigo' => ['bg' => 'from-indigo-50 to-indigo-100/60', 'ring' => 'hover:border-indigo-200 hover:shadow-indigo-100', 'accent' => 'text-indigo-700'],
                        'emerald' => ['bg' => 'from-emerald-50 to-emerald-100/60', 'ring' => 'hover:border-emerald-200 hover:shadow-emerald-100', 'accent' => 'text-emerald-700'],
                        'amber' => ['bg' => 'from-amber-50 to-amber-100/60', 'ring' => 'hover:border-amber-200 hover:shadow-amber-100', 'accent' => 'text-amber-700'],
                    ][$card['tone']];
                @endphp
                <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-gradient-to-br {{ $tones['bg'] }} p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg {{ $tones['ring'] }}">
                    <div class="pointer-events-none absolute -right-6 -top-8 h-24 w-24 rounded-full bg-white/40 blur-xl"></div>
                    <div class="relative flex items-start justify-between gap-3">
                        <h3 class="text-sm font-bold {{ $tones['accent'] }}">{{ $card['title'] }}</h3>
                        <img src="{{ asset('images/nazariya/tushuncha/'.$card['icon']) }}" alt=""
                             class="h-11 w-11 shrink-0 object-contain drop-shadow-sm transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <p class="relative mt-3 text-xs leading-relaxed text-slate-600">{{ $card['text'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- ══════════════════════ TARKIBIY KO'NIKMALAR ══════════════════════ --}}
        <section class="su-reveal mb-8 overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-sm">
            <div class="flex flex-col items-center gap-4 bg-gradient-to-br from-indigo-50 via-white to-violet-50 px-6 py-6 text-center sm:flex-row sm:text-left">
                <img src="{{ asset('images/nazariya/tushuncha/puzzle_pieces.png') }}" alt="Tarkibiy ko'nikmalar"
                     class="su-float-slow h-16 w-16 shrink-0 object-contain drop-shadow-md">
                <div>
                    <h2 class="text-lg font-extrabold text-slate-800">O'qish savodxonligining tarkibiy ko'nikmalari</h2>
                    <p class="mt-1 text-xs text-slate-500">O'qish savodxonligi bir nechta o'zaro bog'liq ko'nikmalarni o'z ichiga oladi</p>
                </div>
            </div>

            <div class="su-stagger grid grid-cols-1 gap-3 p-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['icon' => 'book', 'title' => "Matnni to'g'ri va ravon o'qish", 'desc' => "So'zlarni to'g'ri talaffuz qilib, sur'atli o'qish", 'tone' => 'indigo'],
                    ['icon' => 'search', 'title' => 'Matndan aniq axborotni topish', 'desc' => 'Matnda berilgan faktlarni tez aniqlash', 'tone' => 'sky'],
                    ['icon' => 'compass', 'title' => 'Asosiy fikrni ajratish', 'desc' => "Matnning markaziy g'oyasini belgilash", 'tone' => 'violet'],
                    ['icon' => 'layers', 'title' => "Sabab-oqibat bog'lanishlarini tushunish", 'desc' => "Voqealar orasidagi mantiqiy bog'liqlik", 'tone' => 'emerald'],
                    ['icon' => 'bulb', 'title' => "Yashirin ma'noni anglash", 'desc' => "Satr ortidagi fikrni his qilish", 'tone' => 'amber'],
                    ['icon' => 'flag', 'title' => 'Xulosa chiqarish', 'desc' => "O'qilganlar asosida mustaqil natija chiqarish", 'tone' => 'rose'],
                    ['icon' => 'heart', 'title' => 'Matnga nisbatan shaxsiy munosabat bildirish', 'desc' => "O'z fikri va his-tuyg'usini ifodalash", 'tone' => 'pink'],
                    ['icon' => 'clipboard', 'title' => 'Javobni matndan dalil bilan asoslash', 'desc' => "Fikrni matndagi jumlalar bilan tasdiqlash", 'tone' => 'cyan'],
                ] as $i => $skill)
                    @php
                        $tones = [
                            'indigo' => ['chip' => 'bg-indigo-600', 'icon' => 'bg-indigo-50 text-indigo-600', 'ring' => 'hover:border-indigo-200 hover:bg-indigo-50/40'],
                            'sky' => ['chip' => 'bg-sky-600', 'icon' => 'bg-sky-50 text-sky-600', 'ring' => 'hover:border-sky-200 hover:bg-sky-50/40'],
                            'violet' => ['chip' => 'bg-violet-600', 'icon' => 'bg-violet-50 text-violet-600', 'ring' => 'hover:border-violet-200 hover:bg-violet-50/40'],
                            'emerald' => ['chip' => 'bg-emerald-600', 'icon' => 'bg-emerald-50 text-emerald-600', 'ring' => 'hover:border-emerald-200 hover:bg-emerald-50/40'],
                            'amber' => ['chip' => 'bg-amber-600', 'icon' => 'bg-amber-50 text-amber-600', 'ring' => 'hover:border-amber-200 hover:bg-amber-50/40'],
                            'rose' => ['chip' => 'bg-rose-600', 'icon' => 'bg-rose-50 text-rose-600', 'ring' => 'hover:border-rose-200 hover:bg-rose-50/40'],
                            'pink' => ['chip' => 'bg-pink-600', 'icon' => 'bg-pink-50 text-pink-600', 'ring' => 'hover:border-pink-200 hover:bg-pink-50/40'],
                            'cyan' => ['chip' => 'bg-cyan-600', 'icon' => 'bg-cyan-50 text-cyan-600', 'ring' => 'hover:border-cyan-200 hover:bg-cyan-50/40'],
                        ][$skill['tone']];
                    @endphp
                    <div class="group flex flex-col gap-2.5 rounded-2xl border border-slate-200 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-sm {{ $tones['ring'] }}">
                        <div class="flex items-center gap-2.5">
                            <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full {{ $tones['chip'] }} text-[11px] font-bold text-white">{{ $i + 1 }}</span>
                            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl {{ $tones['icon'] }}">
                                <x-icon :name="$skill['icon']" class="h-4.5 w-4.5" stroke="1.8" />
                            </span>
                        </div>
                        <p class="text-xs font-bold leading-snug text-slate-800">{{ $skill['title'] }}</p>
                        <p class="text-[11px] leading-snug text-slate-500">{{ $skill['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- ══════════════════════ METODIK AHAMIYAT ══════════════════════ --}}
        <section class="su-reveal mb-8 overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-[38%_1fr]">
                <div class="relative flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-50 via-sky-50 to-indigo-100 p-8">
                    <div class="pointer-events-none absolute -left-8 -top-8 h-32 w-32 rounded-full bg-blue-200/40 blur-2xl"></div>
                    <div class="pointer-events-none absolute -bottom-10 -right-6 h-36 w-36 rounded-full bg-indigo-200/40 blur-2xl"></div>
                    <img src="{{ asset('images/nazariya/tushuncha/teacher_with_students.png') }}" alt="O'qituvchi darsda o'quvchilar bilan"
                         class="relative h-48 w-auto object-contain drop-shadow-lg">
                </div>
                <div class="p-6 sm:p-7">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" stroke="1.8" />
                        </span>
                        <h2 class="text-base font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h2>
                    </div>

                    <ul class="mb-4 grid gap-2 sm:grid-cols-2">
                        @foreach ([
                            "Alohida ko'nikma emas, balki intellektual rivojlanishning bir qismi",
                            "Matn tanlashda savodxonlik darajasini hisobga olish",
                            "Savol tuzishda fikrlashga undovchi yondashuv",
                            "Javobni tahlil qilishda barcha ko'nikmalarni baholash",
                        ] as $item)
                            <li class="flex items-start gap-2 rounded-xl bg-slate-50 p-2.5 text-xs leading-relaxed text-slate-600">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" stroke="2.5" />
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>

                    <div class="rounded-xl border-l-4 border-blue-400 bg-blue-50 p-3.5">
                        <p class="text-xs italic leading-relaxed text-blue-900">"Savodxon o'qituvchi — yangi avlod qalblariga yo'l ochadi!"</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════════════════ TALABA NATIJALARI ══════════════════════ --}}
        <section class="su-reveal mb-8 overflow-hidden rounded-[24px] border border-emerald-200 bg-gradient-to-br from-emerald-50 via-white to-white shadow-sm">
            <div class="grid grid-cols-1 gap-4 p-6 sm:p-7 lg:grid-cols-[1fr_auto] lg:items-center">
                <div>
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                            <x-icon name="sparkle" class="h-4.5 w-4.5" stroke="1.6" />
                        </span>
                        <h2 class="text-base font-bold text-slate-800">Bu sahifa talabalarga quyidagilarni anglashga yordam beradi</h2>
                    </div>
                    <ul class="grid gap-2 sm:grid-cols-2">
                        @foreach ([
                            "o'qish savodxonligi faqat tez o'qish emasligini tushunish",
                            "matnni tushunish va fikrlash o'rtasidagi bog'liqlikni anglash",
                            "har bir savolga dalil bilan javob berish",
                            "mustaqil xulosa chiqarish",
                            "matn bilan ishlash strategiyalarini qo'llash",
                        ] as $item)
                            <li class="flex items-start gap-2 text-xs leading-relaxed text-slate-600">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-500" stroke="2.5" />
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <img src="{{ asset('images/nazariya/tushuncha/checklist_pencil.png') }}" alt="Natijalar ro'yxati"
                     class="su-float mx-auto hidden h-24 w-24 object-contain drop-shadow-md lg:block">
            </div>
        </section>

        {{-- ══════════════════════ AMALIY MISOLLAR ══════════════════════ --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Amaliy misollar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="su-stagger grid grid-cols-1 gap-4 md:grid-cols-[1fr_1fr_auto] md:items-stretch">
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-indigo-50 text-indigo-600">
                            <x-icon name="compass" class="h-4 w-4" stroke="1.8" />
                        </span>
                        <h4 class="text-xs font-bold uppercase text-slate-700">1-misol. Oddiy o'qish va o'qish savodxonligi farqi</h4>
                    </div>
                    <div class="mb-3 rounded-lg border-l-4 border-indigo-400 bg-slate-50 p-3 text-xs italic leading-relaxed text-slate-600">
                        <strong class="not-italic text-slate-800">Matn:</strong> "Aziza daraxt tagida yotgan qushchani ko'rib qoldi. U qushchani ehtiyotlab olib, uyasiga qo'ydi."
                    </div>
                    <div class="space-y-2">
                        <div class="rounded-lg bg-slate-50 p-2.5 text-xs">
                            <span class="font-semibold text-slate-600">Oddiy savol:</span>
                            <span class="text-slate-500"> Aziza nimani ko'rib qoldi?</span>
                        </div>
                        <div class="rounded-lg border border-indigo-200 bg-indigo-50 p-2.5 text-xs">
                            <span class="font-semibold text-indigo-700">O'qish savodxonligiga yo'naltirilgan savol:</span>
                            <span class="text-indigo-700"> Azizaning harakatidan uning qanday fazilatlarga ega ekanini bilish mumkin?</span>
                        </div>
                        <p class="flex items-start gap-1.5 text-xs italic text-slate-400">
                            <x-icon name="star" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-indigo-400" />
                            Bu savol o'quvchini matndagi voqeani qayta aytishga emas, balki qahramon xarakterini anglashga yo'naltiradi.
                        </p>
                    </div>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-emerald-50 text-emerald-600">
                            <x-icon name="compass" class="h-4 w-4" stroke="1.8" />
                        </span>
                        <h4 class="text-xs font-bold uppercase text-slate-700">2-misol. Matndan xulosa chiqarish</h4>
                    </div>
                    <div class="space-y-2">
                        <div class="rounded-lg bg-slate-50 p-2.5 text-xs">
                            <span class="font-semibold text-slate-600">Savol:</span>
                            <span class="text-slate-500"> Nima uchun Aziza qushchani yerda qoldirmadi?</span>
                        </div>
                        <div class="rounded-lg border border-emerald-200 bg-emerald-50 p-2.5 text-xs">
                            <p class="mb-1 font-semibold text-emerald-700">Kutiladigan javob:</p>
                            <p class="text-emerald-700">Chunki u qushchaga achindi, unga yordam bermoqchi bo'ldi. Bu uning mehribonligini ko'rsatadi.</p>
                        </div>
                        <div class="mt-3 rounded-lg border border-amber-200 bg-amber-50 p-3">
                            <p class="text-xs font-medium text-amber-800">Muhim: O'quvchi matn asosida fakt topishi + o'z fikrini asoslashi kerak.</p>
                        </div>
                    </div>
                </div>
                <div class="relative hidden overflow-hidden rounded-2xl border border-slate-200 bg-gradient-to-br from-sky-50 to-blue-100 md:flex md:w-40 md:items-center md:justify-center">
                    <img src="{{ asset('images/nazariya/tushuncha/blue_bird.png') }}" alt="Qushcha" class="su-float h-24 w-24 object-contain drop-shadow-md">
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
            <div class="grid grid-cols-1 gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm md:grid-cols-[1fr_180px]">
                <div class="su-stagger grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        "O'qish savodxonligi oddiy o'qishdan nimasi bilan farq qiladi?",
                        "Boshlang'ich sinf o'quvchisi matnni tushunganini qanday aniqlash mumkin?",
                        "Quyidagi savollardan qaysi biri o'qish savodxonligini rivojlantirishga ko'proq xizmat qiladi? a) Qahramonning ismi nima? b) Qahramonning qarori sizga yoqdimi? Nega?",
                        "O'zingiz kichik matn tanlang va unga uch xil savol tuzing: aniq javobli, xulosa chiqarishga oid, baholashga oid.",
                        "\"O'qish savodxonligi — hayotiy zarurat\" mavzusida 5–6 gapdan iborat fikr yozing.",
                    ] as $i => $q)
                        <div class="flex gap-3 rounded-xl border border-slate-200 p-3.5 transition-all duration-300 hover:-translate-y-0.5 hover:border-indigo-200 hover:shadow-sm">
                            <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-indigo-50 text-xs font-bold text-indigo-600">{{ $i + 1 }}</span>
                            <p class="text-xs leading-relaxed text-slate-600">{{ $q }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="hidden items-center justify-center rounded-xl bg-gradient-to-br from-indigo-50 to-violet-100 md:flex">
                    <img src="{{ asset('images/nazariya/tushuncha/student_thinking_question.png') }}" alt="O'ylayotgan o'quvchi" class="su-float-slow h-28 w-28 object-contain drop-shadow-md">
                </div>
            </div>
        </div>

        {{-- ══════════════════════ TAVSIYA ETILGAN MATERIALLAR (REAL PDF PREVIEW) ══════════════════════ --}}
        @if (($featuredResources ?? collect())->isNotEmpty())
            <div class="mb-8">
                <div class="mb-4 flex items-center gap-2">
                    <span class="h-px flex-1 bg-slate-200"></span>
                    <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Tavsiya etilgan darsliklar</h2>
                    <span class="h-px flex-1 bg-slate-200"></span>
                </div>
                <p class="mb-4 -mt-2 text-center text-xs text-slate-400">Mavzuga oid rasmiy darsliklarni to'liq ko'ring yoki yuklab oling</p>

                <div class="su-stagger grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($featuredResources as $resource)
                        @php
                            $bytes = (int) $resource->file_size;
                            $size = $bytes >= 1048576
                                ? number_format($bytes / 1048576, 1).' MB'
                                : number_format(max($bytes, 0) / 1024, 0).' KB';
                        @endphp
                        <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-xl">
                            <a href="{{ $resource->fileUrl() }}" target="_blank" rel="noopener"
                               class="relative aspect-[4/5] w-full shrink-0 overflow-hidden bg-slate-100"
                               data-pdf-preview data-pdf-url="{{ $resource->fileUrl() }}">
                                @if ($cover = $resource->coverUrl())
                                    <img src="{{ $cover }}" alt="{{ $resource->title }}" loading="lazy"
                                         class="pdf-fallback-img absolute inset-0 h-full w-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                                @else
                                    <div class="absolute inset-0 grid place-items-center bg-gradient-to-br from-indigo-100 to-violet-100">
                                        <x-icon name="doc" class="h-16 w-16 text-indigo-300" stroke="1.2" />
                                    </div>
                                @endif
                                <canvas class="pdf-canvas absolute inset-0 h-full w-full object-cover object-top opacity-0 transition-opacity duration-500"></canvas>
                                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent"></div>

                                <span class="absolute left-3 top-3 inline-flex items-center rounded-md bg-white/95 px-2 py-1 text-[10px] font-bold uppercase tracking-wide text-red-600 shadow-sm">
                                    PDF
                                </span>
                                <span class="absolute right-3 top-3 grid h-9 w-9 place-items-center rounded-full bg-white/95 text-indigo-600 opacity-0 shadow-md transition-opacity duration-300 group-hover:opacity-100">
                                    <x-icon name="search" class="h-4 w-4" stroke="2" />
                                </span>
                            </a>

                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="min-h-[2.5rem] text-sm font-bold leading-snug text-slate-800 line-clamp-2">{{ $resource->title }}</h3>

                                <div class="mt-2 flex items-center gap-3 text-[11px] text-slate-400">
                                    <span class="inline-flex items-center gap-1"><x-icon name="doc" class="h-3.5 w-3.5" /> {{ $size }}</span>
                                    <span>&middot;</span>
                                    <span class="inline-flex items-center gap-1"><x-icon name="download" class="h-3.5 w-3.5" /> {{ $resource->download_count }}</span>
                                </div>

                                <div class="mt-3 flex flex-1 items-end gap-2">
                                    <a href="{{ $resource->fileUrl() }}" target="_blank" rel="noopener"
                                       class="inline-flex flex-1 items-center justify-center gap-1.5 rounded-lg border border-slate-200 px-3 py-2 text-xs font-semibold text-slate-600 transition-colors hover:border-indigo-300 hover:text-indigo-700">
                                        <x-icon name="search" class="h-3.5 w-3.5" /> Ko'rish
                                    </a>
                                    <a href="{{ route('resources.download', $resource->slug) }}"
                                       class="inline-flex flex-1 items-center justify-center gap-1.5 rounded-lg bg-indigo-600 px-3 py-2 text-xs font-semibold text-white transition-colors hover:bg-indigo-700">
                                        <x-icon name="download" class="h-3.5 w-3.5" /> Yuklab olish
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            @push('scripts')
                <script type="module">
                    import * as pdfjsLib from 'https://cdn.jsdelivr.net/npm/pdfjs-dist@4.0.379/legacy/build/pdf.min.mjs';

                    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdn.jsdelivr.net/npm/pdfjs-dist@4.0.379/legacy/build/pdf.worker.min.mjs';

                    const renderPreview = async (container) => {
                        const url = container.dataset.pdfUrl;
                        const canvas = container.querySelector('.pdf-canvas');
                        const fallback = container.querySelector('.pdf-fallback-img');
                        if (! url || ! canvas) {
                            return;
                        }

                        try {
                            const pdf = await pdfjsLib.getDocument({ url }).promise;
                            const page = await pdf.getPage(1);
                            const baseViewport = page.getViewport({ scale: 1 });
                            const dpr = Math.min(window.devicePixelRatio || 1, 2);
                            const scale = (container.clientWidth * dpr * 1.4) / baseViewport.width;
                            const viewport = page.getViewport({ scale });

                            canvas.width = viewport.width;
                            canvas.height = viewport.height;

                            await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;

                            canvas.classList.remove('opacity-0');
                            canvas.classList.add('opacity-100');
                            fallback?.classList.add('opacity-0');
                        } catch (error) {
                            // PDF could not be rendered client-side — the generated cover stays visible.
                        }
                    };

                    const containers = document.querySelectorAll('[data-pdf-preview]');

                    if ('IntersectionObserver' in window) {
                        const observer = new IntersectionObserver((entries, obs) => {
                            entries.forEach((entry) => {
                                if (entry.isIntersecting) {
                                    renderPreview(entry.target);
                                    obs.unobserve(entry.target);
                                }
                            });
                        }, { rootMargin: '300px 0px' });

                        containers.forEach((container) => observer.observe(container));
                    } else {
                        containers.forEach(renderPreview);
                    }
                </script>
            @endpush
        @endif

        {{-- ══════════════════════ KUTILADIGAN NATIJA ══════════════════════ --}}
        <section class="relative overflow-hidden rounded-[24px] bg-gradient-to-br from-indigo-950 via-indigo-900 to-violet-900 shadow-sm">
            <div class="pointer-events-none absolute inset-0 text-white opacity-10">
                <x-decor.dots id="tushuncha-outro-dots" />
            </div>
            <div class="su-blob pointer-events-none absolute -right-14 -top-14 h-48 w-48 rounded-full bg-indigo-400/20 blur-3xl"></div>

            <div class="relative grid grid-cols-1 items-center gap-6 p-6 sm:p-8 lg:grid-cols-[1fr_auto]">
                <div class="max-w-2xl">
                    <div class="mb-2 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-indigo-200">
                            <x-icon name="target" class="h-4.5 w-4.5" stroke="1.8" />
                        </span>
                        <span class="text-xs font-semibold uppercase tracking-wide text-indigo-200">Kutiladigan natija</span>
                    </div>
                    <p class="text-sm leading-relaxed text-indigo-50">Ushbu sahifani o'rgangan foydalanuvchi o'qish savodxonligi tushunchasini to'g'ri anglaydi, uni oddiy o'qish malakasidan farqlaydi, boshlang'ich sinfda matn bilan ishlashning chuqurroq metodik maqsadini tushunadi hamda o'quvchini fikrlashga undovchi savollar tuzishga tayyorlanadi.</p>
                    <p class="mt-3 text-xs italic text-indigo-300">"O'qish savodxonligi — bilim eshigini ochadigan kalitdir. Uni rivojlantirish — kelajakni yoritish demakdir."</p>
                </div>
                <img src="{{ asset('images/nazariya/tushuncha/mountain_flag.png') }}" alt="" class="su-float-slow hidden h-28 w-28 object-contain drop-shadow-xl sm:block">
            </div>
        </section>

        {{-- Nav buttons --}}
        <div class="mt-6 flex justify-end">
            <a href="{{ route('nazariya.show', 'pirls') }}" class="group inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-indigo-700">
                Keyingi: PIRLS dasturida o'qish savodxonligi
                <x-icon name="arrow-right" class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-0.5" />
            </a>
        </div>

    </div>
</div>
@endsection
