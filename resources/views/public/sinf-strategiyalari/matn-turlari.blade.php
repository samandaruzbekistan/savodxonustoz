@extends('layouts.app')
@section('title', "Matn turlari — Sinf strategiyalari")
@section('content')

@php
    $asset = fn (string $file) => asset("images/sections/sinf-strategiyalari/matn-turlari/{$file}");

    $colorMap = [
        'blue'    => ['tile' => 'bg-blue-50 ring-blue-100',       'badge' => 'bg-blue-600',    'text' => 'text-blue-700',    'border' => 'border-blue-200 bg-blue-50'],
        'violet'  => ['tile' => 'bg-violet-50 ring-violet-100',   'badge' => 'bg-violet-600',  'text' => 'text-violet-700',  'border' => 'border-violet-200 bg-violet-50'],
        'emerald' => ['tile' => 'bg-emerald-50 ring-emerald-100', 'badge' => 'bg-emerald-600', 'text' => 'text-emerald-700', 'border' => 'border-emerald-200 bg-emerald-50'],
        'amber'   => ['tile' => 'bg-amber-50 ring-amber-100',     'badge' => 'bg-amber-500',   'text' => 'text-amber-700',   'border' => 'border-amber-200 bg-amber-50'],
        'rose'    => ['tile' => 'bg-rose-50 ring-rose-100',       'badge' => 'bg-rose-600',    'text' => 'text-rose-700',    'border' => 'border-rose-200 bg-rose-50'],
        'orange'  => ['tile' => 'bg-orange-50 ring-orange-100',   'badge' => 'bg-orange-600',  'text' => 'text-orange-700',  'border' => 'border-orange-200 bg-orange-50'],
        'teal'    => ['tile' => 'bg-teal-50 ring-teal-100',       'badge' => 'bg-teal-600',    'text' => 'text-teal-700',    'border' => 'border-teal-200 bg-teal-50'],
    ];

    $textTypes = [
        ['icon' => '04_open_book.png',     'title' => 'Badiiy matn',        'color' => 'blue',    'trait' => 'Qahramon, voqea, obraz mavjud',        'task' => 'Tushunish, his qilish, xulosa chiqarish'],
        ['icon' => '31_green_document.png','title' => 'Axborot matni',      'color' => 'emerald', 'trait' => "Fakt va ma'lumot beradi",               'task' => "Bilim olish, ma'lumot ajratish"],
        ['icon' => '35_pencil_document.png','title'=> 'Hayotiy matn',       'color' => 'amber',   'trait' => "E'lon, xat, taklifnoma, yo'riqnoma",    'task' => 'Funksional savodxonlikni rivojlantirish'],
        ['icon' => '07_science_flask.png', 'title' => 'Ilmiy-ommabop matn', 'color' => 'violet',  'trait' => 'Tabiat, fan, texnologiya haqida',       'task' => 'Bilish qiziqishini oshirish'],
        ['icon' => '08_bar_chart.png',     'title' => 'Jadval va diagramma','color' => 'teal',    'trait' => 'Ma\'lumot tartibli beriladi',           'task' => 'Solishtirish va tahlil qilish'],
        ['icon' => '09_picture_frame.png', 'title' => 'Rasmli matn',        'color' => 'rose',    'trait' => 'Rasm va yozuv birga keladi',            'task' => 'Vizual tushunishni rivojlantirish'],
    ];

    $grades = [
        ['n' => '1', 'sinf' => '1-sinf', 'color' => 'blue',    'image' => '10_student_boy_reading.png',        'items' => ['Rasmli matn', 'Qisqa hikoya', 'Sodda gaplar']],
        ['n' => '2', 'sinf' => '2-sinf', 'color' => 'violet',  'image' => '11_student_girl_reading.png',       'items' => ['Ertak', 'Hikoya', "Qisqa e'lon"]],
        ['n' => '3', 'sinf' => '3-sinf', 'color' => 'emerald', 'image' => '12_student_boy_glasses_reading.png','items' => ['Axborot matni', 'Jadval', "Yo'riqnoma"]],
        ['n' => '4', 'sinf' => '4-sinf', 'color' => 'orange',  'image' => '13_student_girl_orange_reading.png','items' => ['PIRLS badiiy matn', 'Axborot matnlari', 'Ikki manbali matn']],
    ];

    $birdSamples = [
        ['type' => 'Badiiy matn',    'color' => 'blue',    'image' => '15_bird_branch.png',      'example' => '"Yaralangan qushcha"'],
        ['type' => 'Axborot matni',  'color' => 'emerald', 'image' => '16_flying_birds.png',     'example' => '"Qushlar bahorda qaytadi"'],
        ['type' => 'Jadval',         'color' => 'violet',  'image' => '17_bird_life_cycle.png',  'example' => '"Qushlarning oziqlanishi"'],
        ['type' => 'Rasmli matn',    'color' => 'rose',    'image' => '18_blue_bird.png',        'example' => 'Qush tanasi qismlari'],
        ['type' => "E'lon",         'color' => 'orange',  'image' => '19_birds_day_calendar.png','example' => '"Qushlar kuni tadbiri"'],
        ['type' => 'Ilmiy matn',     'color' => 'teal',    'image' => '20_flying_white_bird.png','example' => '"Qushlar qanday uchadi?"'],
    ];

    $questions = [
        "Tanlov qachon bo'ladi?",
        "Tanlov qayerda o'tkaziladi?",
        "Ishtirokchi nima haqida gapirishi kerak?",
        "Siz qaysi kitob haqida gapirgan bo'lardingiz?",
    ];
@endphp

<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'matn-turlari'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl border border-emerald-100 bg-gradient-to-br from-emerald-50 via-white to-teal-50">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-emerald-100/60 blur-2xl"></div>
            <div class="pointer-events-none absolute -bottom-10 left-1/3 h-40 w-40 rounded-full bg-teal-100/60 blur-2xl"></div>

            <div class="relative grid grid-cols-1 items-center gap-6 px-6 py-8 sm:px-8 sm:py-10 lg:grid-cols-[1.2fr_0.8fr]">
                <div>
                    <div class="mb-3 flex items-center gap-2">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-emerald-600 text-xs font-bold text-white shadow-sm">3</span>
                        <span class="text-[11px] font-bold uppercase tracking-wide text-emerald-700">Sinf strategiyalari &middot; 3-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Matn turlari</h1>
                    <p class="mt-3 max-w-xl leading-relaxed text-slate-600">O'qish savodxonligini rivojlantirishda turli matn turlaridan foydalanish muhim. Boshlang'ich sinfda matn turlarini farqlash o'quvchining funksional savodxonligini rivojlantiradi.</p>
                    <div class="mt-5 flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-emerald-200 bg-white px-3.5 py-2 text-xs font-semibold text-emerald-700 shadow-sm">
                            6 xil matn turi
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-500">
                            1–4 sinf bo'yicha taqsimot
                        </span>
                    </div>
                </div>

                <div class="relative mx-auto hidden w-full max-w-xs sm:block">
                    <div class="pointer-events-none absolute -right-2 top-1 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('26_graduation_cap_diploma.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <div class="pointer-events-none absolute -left-3 bottom-10 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('30_purple_book.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <img src="{{ $asset('01_books_stationery.png') }}" alt="Matn turlari" class="mx-auto w-full max-w-[250px] object-contain drop-shadow-sm">
                </div>
            </div>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-emerald-100 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-emerald-100">
                        <img src="{{ $asset('02_target_goal.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Maqsad</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">O'quvchiga turli matn turlarini farqlashni, har bir matnga mos o'qish strategiyasini qo'llashni va matndan hayotiy vaziyatda foydalanish ko'nikmasini egallashni o'rgatish.</p>
            </div>
            <div class="rounded-2xl border border-teal-100 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-teal-100">
                        <img src="{{ $asset('03_lightbulb_theory.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">O'quvchi hayotda faqat hikoya yoki ertak o'qimaydi. U e'lon, jadval, yo'riqnoma, xat, retsept, xarita, rasmli matn va boshqa ko'plab matn turlariga duch keladi. Ularni farqlash funksional savodxonlikni rivojlantiradi.</p>
            </div>
        </div>

        {{-- Asosiy matn turlari --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('05_checklist.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Turkumlash</p>
                    <h2 class="text-lg font-bold text-slate-900">Asosiy matn turlari</h2>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-slate-50 text-slate-500">
                            <tr>
                                <th class="px-4 py-3 text-left font-bold">Matn turi</th>
                                <th class="px-4 py-3 text-left font-bold">Xususiyati</th>
                                <th class="px-4 py-3 text-left font-bold">Darsdagi vazifasi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($textTypes as $row)
                                @php $c = $colorMap[$row['color']]; @endphp
                                <tr class="bg-white transition-colors hover:bg-slate-50">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center gap-3">
                                            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl ring-1 {{ $c['tile'] }}">
                                                <img src="{{ $asset($row['icon']) }}" alt="" class="h-5.5 w-5.5 object-contain">
                                            </span>
                                            <span class="font-semibold text-slate-800">{{ $row['title'] }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-slate-600">{{ $row['trait'] }}</td>
                                    <td class="px-4 py-3 text-slate-500">{{ $row['task'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Sinf darajasiga qarab kiritish --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('27_globe_books.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Bosqichma-bosqich</p>
                    <h2 class="text-lg font-bold text-slate-900">Sinf darajasiga qarab matn turlarini kiritish</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($grades as $g)
                    @php $c = $colorMap[$g['color']]; @endphp
                    <div class="group overflow-hidden rounded-2xl border {{ $c['border'] }} shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="relative flex h-32 items-end justify-center overflow-hidden bg-white/60">
                            <span class="absolute left-3 top-3 z-10 grid h-7 w-7 place-items-center rounded-full {{ $c['badge'] }} text-xs font-bold text-white shadow">{{ $g['n'] }}</span>
                            <img src="{{ $asset($g['image']) }}" alt="{{ $g['sinf'] }}" class="h-32 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                        </div>
                        <div class="bg-white p-4">
                            <h4 class="mb-2 text-sm font-bold {{ $c['text'] }}">{{ $g['sinf'] }}</h4>
                            <ul class="space-y-1.5">
                                @foreach ($g['items'] as $item)
                                    <li class="flex items-start gap-1.5 text-xs text-slate-600">
                                        <svg class="mt-0.5 h-3 w-3 shrink-0 {{ $c['text'] }}" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Darsda qo'llash — Qushlar --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('16_flying_birds.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Amaliy namuna</p>
                    <h2 class="text-lg font-bold text-slate-900">Darsda qo'llash — mavzu: "Qushlar"</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($birdSamples as $b)
                    @php $c = $colorMap[$b['color']]; @endphp
                    <div class="group overflow-hidden rounded-2xl border {{ $c['border'] }} shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex h-28 items-center justify-center overflow-hidden bg-white/70">
                            <img src="{{ $asset($b['image']) }}" alt="{{ $b['type'] }}" class="h-24 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                        </div>
                        <div class="bg-white p-4">
                            <p class="text-xs font-bold {{ $c['text'] }}">{{ $b['type'] }}</p>
                            <p class="mt-1 text-xs italic text-slate-500">{{ $b['example'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Namuna — E'lon matni --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-600 text-white shadow-sm">
                    <img src="{{ $asset('28_question_help.png') }}" alt="" class="h-5.5 w-5.5 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Hayotiy matn</p>
                    <h2 class="text-lg font-bold text-slate-900">Namuna — e'lon matni</h2>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-white p-6 shadow-sm">
                <img src="{{ $asset('21_alarm_clock_books.png') }}" alt="" class="pointer-events-none absolute -right-4 -bottom-4 h-28 w-28 object-contain opacity-90 sm:h-32 sm:w-32">
                <div class="relative">
                    <div class="mb-5 rounded-xl border border-emerald-200 bg-white p-4">
                        <p class="text-sm italic leading-relaxed text-slate-700">"Juma kuni soat 10:00 da maktab kutubxonasida 'Eng yaxshi kitobxon' tanlovi bo'lib o'tadi. Ishtirokchilar o'zlari yoqtirgan kitob haqida 3 daqiqa gapirib beradilar."</p>
                    </div>
                    <div class="grid max-w-2xl grid-cols-1 gap-2.5 sm:grid-cols-2">
                        @foreach ($questions as $i => $q)
                            <div class="flex items-start gap-2.5 text-sm text-emerald-800">
                                <span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-emerald-600 text-[10px] font-bold text-white">{{ $i + 1 }}</span>
                                {{ $q }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-emerald-600 via-emerald-600 to-teal-700 px-6 py-8 sm:px-10 sm:py-9">
            <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full bg-white/10"></div>
            <div class="pointer-events-none absolute -bottom-16 left-10 h-40 w-40 rounded-full bg-white/10"></div>

            <div class="relative flex flex-col items-center gap-6 sm:flex-row sm:justify-between">
                <div class="max-w-lg text-center sm:text-left">
                    <p class="mb-2 text-xs font-bold uppercase tracking-wide text-emerald-100">Kutiladigan natija</p>
                    <p class="text-lg font-bold leading-snug text-white sm:text-xl">
                        O'quvchi matn turlarini farqlaydi, har bir matnga mos o'qish strategiyasini qo'llaydi va matndan hayotiy vaziyatda foydalanish ko'nikmasini egallaydi.
                    </p>
                </div>
                <img src="{{ $asset('14_trophy.png') }}" alt="" class="h-32 w-32 shrink-0 object-contain sm:h-36 sm:w-36">
            </div>
        </div>

        {{-- Navigatsiya --}}
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ route('sinf-strategiyalari.show', 'foydalanish-strategiyalari') }}"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-600 shadow-sm transition hover:bg-slate-50">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi bo'lim
            </a>
            <a href="{{ route('sinf-strategiyalari.show', 'sinf-kutubxonalari') }}"
               class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-700">
                Keyingi bo'lim
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
