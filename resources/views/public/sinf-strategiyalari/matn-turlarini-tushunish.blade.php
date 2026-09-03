@extends('layouts.app')
@section('title', "Matn turlarini tushunish — Sinf strategiyalari")
@section('content')

@php
    $asset = fn (string $file) => asset("images/sections/sinf-strategiyalari/matn-turlarini-tushunish/{$file}");

    $colorMap = [
        'blue'    => ['tile' => 'bg-blue-50 ring-blue-100',       'badge' => 'bg-blue-600',    'text' => 'text-blue-700',    'border' => 'border-blue-200 bg-blue-50',       'chip' => 'bg-white/70 border-blue-200 text-blue-800'],
        'emerald' => ['tile' => 'bg-emerald-50 ring-emerald-100', 'badge' => 'bg-emerald-600', 'text' => 'text-emerald-700', 'border' => 'border-emerald-200 bg-emerald-50', 'chip' => 'bg-white/70 border-emerald-200 text-emerald-800'],
        'violet'  => ['tile' => 'bg-violet-50 ring-violet-100',   'badge' => 'bg-violet-600',  'text' => 'text-violet-700',  'border' => 'border-violet-200 bg-violet-50',   'chip' => 'bg-white/70 border-violet-200 text-violet-800'],
        'orange'  => ['tile' => 'bg-orange-50 ring-orange-100',   'badge' => 'bg-orange-600',  'text' => 'text-orange-700',  'border' => 'border-orange-200 bg-orange-50',   'chip' => 'bg-white/70 border-orange-200 text-orange-800'],
        'teal'    => ['tile' => 'bg-teal-50 ring-teal-100',       'badge' => 'bg-teal-600',    'text' => 'text-teal-700',    'border' => 'border-teal-200 bg-teal-50',       'chip' => 'bg-white/70 border-teal-200 text-teal-800'],
    ];

    $readingRows = [
        [
            'color'       => 'blue',
            'icon'        => 'students-reading.png',
            'title'       => "Hikoyani o'qiganda",
            'questions'   => ['Qahramon kim?', "Nima bo'ldi?", 'Nima uchun?'],
            'previewLabel'=> "SODIQ DO'ST",
            'previewType' => 'story',
            'previewImage'=> 'boy-reading-with-dog.png',
        ],
        [
            'color'       => 'emerald',
            'icon'        => 'cheetah-face.png',
            'title'       => "Axborot matnini o'qiganda",
            'questions'   => ['Qanday fakt bor?', 'Nimani bilib oldim?'],
            'previewLabel'=> 'YERPARDA HAQIDA',
            'previewType' => 'story',
            'previewImage'=> 'cheetah.png',
        ],
        [
            'color'       => 'violet',
            'icon'        => 'clock.png',
            'title'       => "E'lonni o'qiganda",
            'questions'   => ['Qachon?', 'Qayerda?', 'Kimlar uchun?'],
            'previewLabel'=> "E'LON!",
            'previewType' => 'alert',
            'previewImage'=> 'megaphone.png',
            'previewText' => "Ertaga, 10-may kuni soat 10:00 da maktab zalida \"Kitobxonlar kuni\" o'tkaziladi.",
        ],
        [
            'color'       => 'orange',
            'icon'        => 'bar-chart-pie-chart.png',
            'title'       => "Jadvalni o'qiganda",
            'questions'   => ['Eng ko\'p nima?', "Qaysi ma'lumot farq qiladi?"],
            'previewLabel'=> 'SEVIMLI SPORT TURLARI',
            'previewType' => 'table',
            'previewImage'=> 'sports-balls.png',
            'previewTable'=> [
                ['Futbol', 25],
                ['Basketbol', 18],
                ['Voleybol', 12],
                ['Shaxmat', 8],
            ],
        ],
        [
            'color'       => 'teal',
            'icon'        => 'map-location.png',
            'title'       => "Yo'riqnomani o'qiganda",
            'questions'   => ['Birinchi nima qilinadi?', 'Keyin nima?'],
            'previewLabel'=> "YO'L TOPISH YO'RIQNOMASI",
            'previewType' => 'route',
            'previewImage'=> 'map-route.png',
            'previewSteps'=> [
                "Boshlang'ich nuqtadan sharqqa yuring",
                "Ko'prikdan o'ting",
                "Chapga buriling",
                "Maktab oldida to'xtang",
            ],
        ],
    ];

    $steps = [
        ['n' => 1, 'icon' => 'step-1-book.png',     'title' => "O'qituvchi 3 xil matn beradi: hikoya, e'lon, jadval",         'color' => 'blue'],
        ['n' => 2, 'icon' => 'step-2-people.png',   'title' => "O'quvchilar har bir matnni ko'rib chiqadi",                  'color' => 'emerald'],
        ['n' => 3, 'icon' => 'step-3-search.png',   'title' => 'Matn turini aniqlaydi',                                      'color' => 'violet'],
        ['n' => 4, 'icon' => 'step-4-question.png', 'title' => "Har bir matn uchun qanday savollar berish mumkinligini yozadi", 'color' => 'orange'],
        ['n' => 5, 'icon' => 'step-5-pencil.png',   'title' => "Xulosa: \"Har xil matn har xil o'qiladi.\"",                'color' => 'teal'],
    ];

    $samples = [
        [
            'color'   => 'blue',
            'label'   => '1-matn: Hikoya',
            'image'   => 'boy-reading-with-dog.png',
            'text'    => "\"Ali yo'lda kichik kuchukchani ko'rib qoldi. U kuchukchaga suv berdi.\"",
            'questions' => ["Ali nimani ko'rdi?", 'U nima qildi?', 'Ali qanday bola?'],
        ],
        [
            'color'   => 'violet',
            'label'   => "2-matn: E'lon",
            'image'   => 'megaphone.png',
            'text'    => '"Payshanba kuni soat 11:00 da maktab hovlisida sport musobaqasi bo\'lib o\'tadi."',
            'questions' => ["Musobaqa qachon bo'ladi?", 'Qayerda o\'tkaziladi?', "Yana qanday ma'lumot kerak?"],
        ],
        [
            'color'   => 'emerald',
            'label'   => '3-matn: Jadval',
            'image'   => 'bar-chart-pie-chart.png',
            'table'   => [
                ['Aziz', 3],
                ['Malika', 5],
                ['Sardor', 4],
            ],
            'questions' => ["Kim eng ko'p kitob o'qigan?", "Aziz nechta kitob o'qigan?", 'Sardor Malikadan nechta kam?'],
        ],
    ];
@endphp

<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'matn-turlarini-tushunish'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl border border-rose-100 bg-gradient-to-br from-rose-50 via-white to-pink-50">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-rose-100/60 blur-2xl"></div>
            <div class="pointer-events-none absolute -bottom-10 left-1/3 h-40 w-40 rounded-full bg-pink-100/60 blur-2xl"></div>

            <div class="relative grid grid-cols-1 items-center gap-6 px-6 py-8 sm:px-8 sm:py-10 lg:grid-cols-[1.2fr_0.8fr]">
                <div>
                    <div class="mb-3 flex items-center gap-2">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-rose-600 text-xs font-bold text-white shadow-sm">7</span>
                        <span class="text-[11px] font-bold uppercase tracking-wide text-rose-700">Sinf strategiyalari &middot; 7-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Matn turlarini tushunish</h1>
                    <p class="mt-3 max-w-xl leading-relaxed text-slate-600">Matn turlarini tushunish o'quvchining har bir matnga mos o'qish usulini tanlay olishidir. O'quvchi matn turini tushunsa, uni to'g'ri o'qiydi va kerakli axborotni tezroq topadi.</p>
                    <div class="mt-5 flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-rose-200 bg-white px-3.5 py-2 text-xs font-semibold text-rose-700 shadow-sm">
                            5 xil matn holati
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-500">
                            Bo'limning yakuniy qismi
                        </span>
                    </div>
                </div>

                <div class="relative mx-auto hidden w-full max-w-xs sm:block">
                    <div class="pointer-events-none absolute -right-2 top-1 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('idea-lightbulb.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <div class="pointer-events-none absolute -left-3 bottom-10 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('graduation-cap-diploma.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <img src="{{ $asset('student-reading.png') }}" alt="Matn turlarini tushunish" class="mx-auto w-full max-w-[250px] object-contain drop-shadow-sm">
                </div>
            </div>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-rose-100 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-rose-100">
                        <img src="{{ $asset('target-arrow.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Maqsad</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">O'quvchiga badiiy, axborot, hayotiy, jadval va rasmli matnlarni farqlashni, har bir matndan kerakli axborotni topishni va unga mos savollar tuzishni o'rgatish.</p>
            </div>
            <div class="rounded-2xl border border-pink-100 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-pink-100">
                        <img src="{{ $asset('star.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">Badiiy matnda qahramon, voqea va his-tuyg'u muhim. Axborot matnida fakt, tushuncha va dalillar. E'londa vaqt, joy va shartlar. Jadvalda sonlar, ustunlar va bog'lanishlar tahlil qilinadi.</p>
            </div>
        </div>

        {{-- Har xil matnni turlicha o'qish --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('document-chart-pencil.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">O'qish strategiyasi</p>
                    <h2 class="text-lg font-bold text-slate-900">Har xil matnni turlicha o'qish</h2>
                </div>
            </div>

            <div class="space-y-4">
                @foreach ($readingRows as $row)
                    @php $c = $colorMap[$row['color']]; @endphp
                    <div class="overflow-hidden rounded-2xl border {{ $c['border'] }} shadow-sm transition-all duration-300 hover:shadow-md">
                        <div class="grid grid-cols-1 gap-0 md:grid-cols-[auto_1fr_auto]">
                            <div class="flex items-center justify-center bg-white/60 p-4 md:p-5">
                                <span class="grid h-16 w-16 shrink-0 place-items-center rounded-2xl bg-white ring-1 {{ $c['tile'] }}">
                                    <img src="{{ $asset($row['icon']) }}" alt="" class="h-10 w-10 object-contain">
                                </span>
                            </div>

                            <div class="flex flex-col justify-center p-4 md:p-5">
                                <p class="mb-2 text-sm font-bold {{ $c['text'] }}">{{ $row['title'] }}</p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($row['questions'] as $q)
                                        <span class="inline-flex items-center rounded-full border px-3 py-1 text-xs font-medium {{ $c['chip'] }}">{{ $q }}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="flex items-center bg-white p-4 md:w-72 md:p-5">
                                <div class="w-full rounded-xl border {{ $c['border'] }} p-3">
                                    <p class="mb-2 text-[11px] font-bold uppercase tracking-wide {{ $c['text'] }}">{{ $row['previewLabel'] }}</p>

                                    @if ($row['previewType'] === 'story')
                                        <div class="flex items-center gap-3">
                                            <img src="{{ $asset($row['previewImage']) }}" alt="{{ $row['previewLabel'] }}" class="h-14 w-14 shrink-0 rounded-lg object-cover">
                                            <div class="flex-1 space-y-1.5">
                                                <span class="block h-2 w-full rounded-full bg-slate-200"></span>
                                                <span class="block h-2 w-4/5 rounded-full bg-slate-200"></span>
                                                <span class="block h-2 w-3/5 rounded-full bg-slate-200"></span>
                                            </div>
                                        </div>
                                    @elseif ($row['previewType'] === 'alert')
                                        <div class="flex items-center gap-3">
                                            <img src="{{ $asset($row['previewImage']) }}" alt="{{ $row['previewLabel'] }}" class="h-12 w-12 shrink-0 object-contain">
                                            <p class="text-xs leading-snug text-slate-600">{{ $row['previewText'] }}</p>
                                        </div>
                                    @elseif ($row['previewType'] === 'table')
                                        <div class="overflow-hidden rounded-lg border {{ $c['border'] }}">
                                            <table class="w-full text-xs">
                                                <thead class="{{ $c['tile'] }}">
                                                    <tr>
                                                        <th class="px-2 py-1 text-left font-semibold {{ $c['text'] }}">Sport turi</th>
                                                        <th class="px-2 py-1 text-right font-semibold {{ $c['text'] }}">Soni</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-slate-100 bg-white">
                                                    @foreach ($row['previewTable'] as [$label, $value])
                                                        <tr>
                                                            <td class="px-2 py-1 text-slate-700">{{ $label }}</td>
                                                            <td class="px-2 py-1 text-right text-slate-700">{{ $value }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @elseif ($row['previewType'] === 'route')
                                        <div class="flex items-start gap-3">
                                            <img src="{{ $asset($row['previewImage']) }}" alt="{{ $row['previewLabel'] }}" class="h-14 w-14 shrink-0 rounded-lg object-cover">
                                            <ol class="flex-1 space-y-1 text-[11px] leading-snug text-slate-600">
                                                @foreach ($row['previewSteps'] as $i => $step)
                                                    <li class="flex items-start gap-1.5">
                                                        <span class="mt-px font-bold {{ $c['text'] }}">{{ $i + 1 }}.</span>
                                                        {{ $step }}
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Metod --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('search-magnifier.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Amaliy metod</p>
                    <h2 class="text-lg font-bold text-slate-900">"Matn turini top" metodi</h2>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-5">
                @foreach ($steps as $s)
                    @php $c = $colorMap[$s['color']]; @endphp
                    <div class="group flex flex-col items-center rounded-2xl border {{ $c['border'] }} p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="relative mb-3">
                            <span class="grid h-16 w-16 place-items-center rounded-2xl bg-white ring-1 {{ $c['tile'] }}">
                                <img src="{{ $asset($s['icon']) }}" alt="" class="h-9 w-9 object-contain transition-transform duration-300 group-hover:scale-110">
                            </span>
                            <span class="absolute -right-1.5 -top-1.5 grid h-6 w-6 place-items-center rounded-full {{ $c['badge'] }} text-[11px] font-bold text-white shadow">{{ $s['n'] }}</span>
                        </div>
                        <p class="text-xs font-medium leading-snug text-slate-700">{{ $s['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Boshlang'ich sinfga mos namuna --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-slate-200">
                    <img src="{{ $asset('checklist.png') }}" alt="" class="h-6 w-6 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Amaliy namuna</p>
                    <h2 class="text-lg font-bold text-slate-900">Boshlang'ich sinfga mos namuna</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                @foreach ($samples as $sample)
                    @php $c = $colorMap[$sample['color']]; @endphp
                    <div class="overflow-hidden rounded-2xl border {{ $c['border'] }} shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex h-28 items-center justify-center overflow-hidden bg-white/70">
                            <img src="{{ $asset($sample['image']) }}" alt="{{ $sample['label'] }}" class="h-20 w-20 object-contain">
                        </div>
                        <div class="bg-white p-4">
                            <p class="mb-2 text-xs font-bold {{ $c['text'] }}">{{ $sample['label'] }}</p>

                            @if (isset($sample['text']))
                                <div class="mb-3 rounded-lg border {{ $c['border'] }} p-3">
                                    <p class="text-xs italic leading-relaxed text-slate-600">{{ $sample['text'] }}</p>
                                </div>
                            @elseif (isset($sample['table']))
                                <div class="mb-3 overflow-hidden rounded-lg border {{ $c['border'] }}">
                                    <table class="w-full text-xs">
                                        <thead class="{{ $c['tile'] }}">
                                            <tr>
                                                <th class="px-2 py-1 text-left font-semibold {{ $c['text'] }}">O'quvchi</th>
                                                <th class="px-2 py-1 text-right font-semibold {{ $c['text'] }}">Kitob</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-slate-100 bg-white">
                                            @foreach ($sample['table'] as [$name, $count])
                                                <tr>
                                                    <td class="px-2 py-1 text-slate-700">{{ $name }}</td>
                                                    <td class="px-2 py-1 text-right text-slate-700">{{ $count }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                            <ul class="space-y-1.5 text-xs {{ $c['text'] }}">
                                @foreach ($sample['questions'] as $q)
                                    <li class="flex items-start gap-1.5">
                                        <svg class="mt-1 h-1.5 w-1.5 shrink-0" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                        {{ $q }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-rose-600 via-rose-600 to-pink-700 px-6 py-8 sm:px-10 sm:py-9">
            <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full bg-white/10"></div>
            <div class="pointer-events-none absolute -bottom-16 left-10 h-40 w-40 rounded-full bg-white/10"></div>

            <div class="relative flex flex-col items-center gap-6 sm:flex-row sm:justify-between">
                <div class="max-w-lg text-center sm:text-left">
                    <p class="mb-2 text-xs font-bold uppercase tracking-wide text-rose-100">Kutiladigan natija</p>
                    <p class="text-lg font-bold leading-snug text-white sm:text-xl">
                        O'quvchi badiiy, axborot, hayotiy, jadval va rasmli matnlarni farqlaydi. Har bir matndan kerakli axborotni topadi va unga mos savollar tuza oladi.
                    </p>
                </div>
                <img src="{{ $asset('growth-chart.png') }}" alt="" class="h-32 w-32 shrink-0 object-contain sm:h-36 sm:w-36">
            </div>
        </div>

        {{-- Bo'lim yakuni --}}
        <div class="rounded-2xl border border-blue-200 bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="mb-1 text-sm font-bold text-blue-900">Sinf strategiyalari bo'limini yakunladingiz!</p>
                    <p class="text-xs text-blue-700">Barcha 7 ta bo'limni o'rganib chiqdingiz. Bosh sahifaga qaytib boshqa bo'limlarni ham ko'ring.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.index') }}" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-blue-700">
                    Bo'lim boshi
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
