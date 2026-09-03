@extends('layouts.app')
@section('title', "Barcha o'quvchilarga yordam berish — O'qish savodxonligini rivojlantirish")
@section('content')
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">

    @include('public.barcha-oquvchilarga-yordam._sidebar')

    <div class="min-w-0 flex-1">

        {{-- ══════════════════════ HERO ══════════════════════ --}}
        <section class="relative mb-8 overflow-hidden rounded-[28px] bg-gradient-to-br from-blue-600 via-blue-600 to-indigo-700">
            <div class="pointer-events-none absolute inset-0 text-white opacity-10">
                <x-decor.dots id="yordam-hero-dots" />
            </div>
            <div class="su-blob pointer-events-none absolute -left-20 -top-20 h-64 w-64 rounded-full bg-cyan-300/20 blur-3xl"></div>
            <div class="su-blob su-delay-2 pointer-events-none absolute -bottom-24 right-0 h-72 w-72 rounded-full bg-fuchsia-300/20 blur-3xl"></div>

            <div class="relative grid gap-8 px-6 py-9 sm:px-10 sm:py-11 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:py-12">
                <div class="su-reveal" data-reveal="left">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3.5 py-1.5 text-[11px] font-semibold uppercase tracking-wider text-blue-50 ring-1 ring-inset ring-white/25 backdrop-blur">
                        <x-icon name="heart" class="h-3.5 w-3.5" stroke="2.2" />
                        Inklyuziv ta'lim yondashuvi
                    </span>

                    <h1 class="mt-4 text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl">Har bir bola muhim!</h1>

                    <p class="mt-3 max-w-lg text-sm leading-relaxed text-blue-100 sm:text-[15px]">
                        Differensial va inklyuziv yondashuv asosida har bir o'quvchining ehtiyoji, imkoniyati va rivojlanish sur'atini hisobga olib, o'qish savodxonligini rivojlantirish bo'yicha amaliy-metodik ko'rsatmalar.
                    </p>

                    <div class="mt-6 grid grid-cols-2 gap-3 sm:max-w-lg">
                        @foreach([
                            ["Har bir o'quvchiga mos yondashuv", 'target'],
                            ["Qo'llab-quvvatlovchi muhit", 'check'],
                            ['Rivojlanishni kuzatish', 'chart'],
                            ["Hamkorlik va rag'bat", 'heart'],
                        ] as [$label, $icon])
                            <div class="flex items-center gap-2 rounded-xl bg-white/10 px-3 py-2 ring-1 ring-inset ring-white/10 backdrop-blur">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-white/15">
                                    <x-icon :name="$icon" class="h-3.5 w-3.5 text-white" stroke="2.2" />
                                </span>
                                <span class="text-[11px] font-medium leading-tight text-blue-50">{{ $label }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="su-reveal relative hidden lg:block" data-reveal="right">
                    <div class="su-blob absolute inset-6 rounded-[2rem] bg-white/10 blur-2xl"></div>
                    <img src="{{ asset('images/sections/barcha-oquvchilarga-yordam/hero-teacher-students.png') }}" alt="O'qituvchi va o'quvchilar"
                         class="su-float-slow relative mx-auto h-64 w-auto drop-shadow-2xl">

                    <div class="rounded-2xl rounded-bl-sm bg-white px-3.5 py-2.5 shadow-lg absolute left-0 top-2 -rotate-2">
                        <p class="text-[11px] font-bold text-indigo-900">Har bir bola — muhim!</p>
                    </div>
                    <div class="su-float rounded-2xl rounded-br-sm bg-white px-3.5 py-2.5 shadow-lg absolute right-0 bottom-4 rotate-2">
                        <p class="text-[11px] font-bold text-indigo-900">Har bir qadam — muvaffaqiyat!</p>
                    </div>
                </div>
            </div>
        </section>

        @php
            $cards = [
                [
                    'num'   => 1,
                    'slug'  => 'oqishda-qiynalayotganlar',
                    'color' => 'blue',
                    'title' => "O'qishda qiynalayotgan o'quvchilar",
                    'desc'  => "Matnni o'qish yoki tushunishda qiynalayotgan o'quvchilarga mos metodik yordam, ko'proq vaqt va rag'bat berish yo'llari.",
                    'points'=> ["Matnni qismlarga bo'lish", "Audio bilan qo'llab-quvvatlash", "Qayta o'qish mashqlari", "Juftlikda o'qish"],
                    'image' => 'classroom-reading-support.png',
                ],
                [
                    'num'   => 2,
                    'slug'  => 'differensial-topshiriqlar',
                    'color' => 'violet',
                    'title' => "Differensial topshiriqlar",
                    'desc'  => "Bir matn asosida oson, o'rta va murakkab darajadagi topshiriqlar orqali har bir o'quvchiga mos yondashuv.",
                    'points'=> ['Uch darajali topshiriq', 'Neytral daraja nomlari', 'Individual baholash', "0-3 ballik rubrika"],
                    'image' => 'differential-tasks-checklist.png',
                ],
                [
                    'num'   => 3,
                    'slug'  => 'ikkinchi-til-oquvchilari',
                    'color' => 'emerald',
                    'title' => "Ikkinchi til sifatida o'zbek tilini o'rganayotgan o'quvchilar",
                    'desc'  => "O'zbek tili ona tili bo'lmagan o'quvchilar uchun til qo'llab-quvvatlovi, rasmli lug'at va sodda gaplar bilan ishlash.",
                    'points'=> ["Rasmli lug'at", "Oldindan so'z tanishtirish", 'Gap boshlovchi iboralar', 'Juftlikda ishlash'],
                    'image' => 'uzbek-language-globe-learning.png',
                ],
                [
                    'num'   => 4,
                    'slug'  => 'iqtidorli-oquvchilar',
                    'color' => 'amber',
                    'title' => "Iqtidorli o'quvchilar bilan ishlash",
                    'desc'  => "Tez va chuqur tushunadigan o'quvchilar uchun murakkabroq, ijodiy va tahliliy topshiriqlar.",
                    'points'=> ['Murakkabroq matnlar', 'Matnlarni solishtirish', 'PIRLS savoli tuzish', 'Mustaqil kitob taqdimoti'],
                    'image' => 'talented-student-reading.png',
                ],
                [
                    'num'   => 5,
                    'slug'  => 'individual-oqish-xaritasi',
                    'color' => 'rose',
                    'title' => "Individual o'qish xaritasi",
                    'desc'  => "Har bir o'quvchining o'qish savodxonligi bo'yicha rivojlanishini kuzatish va mos yordam rejalashtirish.",
                    'points'=> ["Haftalik o'qish kuzatuvi", 'Rivojlanish grafigi', 'Ota-onaga aniq tavsiya', '4 darajali baholash'],
                    'image' => 'individual-learning-map.png',
                ],
            ];

            $mainCards = array_slice($cards, 0, 3);
            $wideCards = array_slice($cards, 3);
        @endphp

        {{-- ══════════════════════ RESOURCE CARDS ══════════════════════ --}}
        <div class="su-stagger grid grid-cols-1 items-stretch gap-6 sm:grid-cols-2 lg:grid-cols-3 mb-6">
            @foreach ($mainCards as $card)
                <x-section.resource-card
                    :num="$card['num']"
                    :title="$card['title']"
                    :desc="$card['desc']"
                    :points="$card['points']"
                    :image="$card['image']"
                    :color="$card['color']"
                    :href="route('barcha-oquvchilarga-yordam.show', $card['slug'])" />
            @endforeach
        </div>

        <div class="su-stagger grid grid-cols-1 items-stretch gap-6 lg:grid-cols-2 mb-8">
            @foreach ($wideCards as $card)
                <x-section.resource-card
                    layout="horizontal"
                    :num="$card['num']"
                    :title="$card['title']"
                    :desc="$card['desc']"
                    :points="$card['points']"
                    :image="$card['image']"
                    :color="$card['color']"
                    :href="route('barcha-oquvchilarga-yordam.show', $card['slug'])" />
            @endforeach
        </div>

        {{-- ══════════════════════ BENEFIT / FEATURE CARDS ══════════════════════ --}}
        @php
            $benefits = [
                [
                    'label' => "Har bir bola o'qishini o'rganishi mumkin",
                    'sub'   => "To'g'ri metodika va sabr bilan har bir bola muvaffaqiyatga erishadi.",
                    'image' => 'teacher-student-guidance.png',
                    'panel' => 'from-blue-50 to-sky-100',
                    'blob'  => 'bg-blue-200/40',
                ],
                [
                    'label' => "Har bir o'quvchiga mos yondashuv zarur",
                    'sub'   => "Bir xil usul emas, ehtiyojga qarab moslashtirilgan yordam kerak.",
                    'image' => 'assessment-development.png',
                    'panel' => 'from-emerald-50 to-teal-100',
                    'blob'  => 'bg-emerald-200/40',
                ],
                [
                    'label' => 'Baholash rivojlantirish uchun xizmat qiladi',
                    'sub'   => "Baholash — nazorat emas, keyingi qadamni belgilash vositasi.",
                    'image' => 'parent-teacher-student-collaboration.png',
                    'panel' => 'from-amber-50 to-orange-100',
                    'blob'  => 'bg-amber-200/40',
                ],
                [
                    'label' => "Ota-ona, o'qituvchi va o'quvchi hamkorligi",
                    'sub'   => "Uch tomon birgalikda ishlaganda natija barqaror bo'ladi.",
                    'image' => 'education-asset-10.png',
                    'panel' => 'from-rose-50 to-pink-100',
                    'blob'  => 'bg-rose-200/40',
                ],
            ];
        @endphp

        <div class="su-stagger grid grid-cols-2 gap-4 sm:grid-cols-4 mb-8">
            @foreach ($benefits as $b)
                <div class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                    <div class="relative flex h-32 items-center justify-center overflow-hidden bg-gradient-to-br {{ $b['panel'] }} sm:h-36">
                        <div class="pointer-events-none absolute -right-6 -top-6 h-20 w-20 rounded-full {{ $b['blob'] }} blur-xl"></div>
                        <div class="pointer-events-none absolute -bottom-8 -left-6 h-20 w-20 rounded-full {{ $b['blob'] }} blur-xl"></div>
                        <img src="{{ asset('images/sections/barcha-oquvchilarga-yordam/'.$b['image']) }}" alt=""
                             class="relative h-24 w-auto object-contain drop-shadow transition-transform duration-300 ease-out group-hover:scale-105 sm:h-28">
                    </div>
                    <div class="p-3.5 text-center sm:p-4">
                        <p class="text-[12px] font-bold leading-snug text-slate-700 sm:text-[13px]">{{ $b['label'] }}</p>
                        <p class="mt-1 text-[10.5px] leading-snug text-slate-400 sm:text-[11px]">{{ $b['sub'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- ══════════════════════ CTA ══════════════════════ --}}
        <div class="relative overflow-hidden rounded-[24px] border border-blue-200 bg-gradient-to-r from-blue-50 via-indigo-50 to-blue-50 px-6 py-6 sm:px-8">
            <img src="{{ asset('images/sections/barcha-oquvchilarga-yordam/education-asset-11.png') }}" alt=""
                 class="su-float-slow pointer-events-none absolute -left-3 bottom-0 hidden h-24 w-auto opacity-90 sm:block">
            <img src="{{ asset('images/sections/barcha-oquvchilarga-yordam/education-asset-12.png') }}" alt=""
                 class="su-float pointer-events-none absolute -right-2 -top-4 hidden h-28 w-auto opacity-90 lg:block">

            <div class="relative flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between sm:pl-24 lg:pr-28">
                <div>
                    <p class="text-sm font-bold leading-snug text-blue-900 sm:text-base">Sinfdagi har bir o'quvchi bir xil tezlikda va bir xil usulda o'qimaydi.</p>
                    <p class="mt-1.5 text-xs leading-relaxed text-blue-700 sm:text-[13px]">O'qituvchi har bir o'quvchining imkoniyati, ehtiyoji va rivojlanish sur'atini hisobga olgan holda o'qish savodxonligini rivojlantirishi kerak.</p>
                </div>
                <a href="{{ route('barcha-oquvchilarga-yordam.show', 'oqishda-qiynalayotganlar') }}"
                   class="su-lift shrink-0 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition-colors hover:bg-blue-700">
                    Boshlash
                    <x-icon name="arrow-right" class="h-4 w-4" stroke="2.2" />
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
