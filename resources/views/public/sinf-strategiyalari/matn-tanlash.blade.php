@extends('layouts.app')
@section('title', "Sinfda matnlarni tanlash — Sinf strategiyalari")
@section('content')

@php
    $asset = fn (string $file) => asset("images/sections/sinf-strategiyalari/matn-tanlash/{$file}");

    $colorMap = [
        'blue'    => ['tile' => 'bg-blue-50 ring-blue-100',       'badge' => 'bg-blue-600',    'text' => 'text-blue-700'],
        'violet'  => ['tile' => 'bg-violet-50 ring-violet-100',   'badge' => 'bg-violet-600',  'text' => 'text-violet-700'],
        'emerald' => ['tile' => 'bg-emerald-50 ring-emerald-100', 'badge' => 'bg-emerald-600', 'text' => 'text-emerald-700'],
        'amber'   => ['tile' => 'bg-amber-50 ring-amber-100',     'badge' => 'bg-amber-500',   'text' => 'text-amber-700'],
        'rose'    => ['tile' => 'bg-rose-50 ring-rose-100',       'badge' => 'bg-rose-600',    'text' => 'text-rose-700'],
        'indigo'  => ['tile' => 'bg-indigo-50 ring-indigo-100',   'badge' => 'bg-indigo-600',  'text' => 'text-indigo-700'],
        'teal'    => ['tile' => 'bg-teal-50 ring-teal-100',       'badge' => 'bg-teal-600',    'text' => 'text-teal-700'],
        'orange'  => ['tile' => 'bg-orange-50 ring-orange-100',   'badge' => 'bg-orange-600',  'text' => 'text-orange-700'],
    ];

    $criteria = [
        ['icon' => 'graduation-cap-books.png',  'label' => 'Sinf darajasi',            'sub' => 'Yoshga moslik',           'color' => 'blue'],
        ['icon' => 'open-book-magnifier.png',   'label' => 'Matn hajmi',               'sub' => 'Qisqa yoki uzun',         'color' => 'violet'],
        ['icon' => 'abc-blocks.png',            'label' => "So'zlar murakkabligi",     'sub' => 'Tushunarliligi',          'color' => 'emerald'],
        ['icon' => 'heart-hands.png',           'label' => 'Mavzuning yaqinligi',      'sub' => 'Bolaga tanishligi',       'color' => 'rose'],
        ['icon' => 'lightbulb.png',             'label' => 'Bilish qiymati',           'sub' => "Nima o'rgatadi",          'color' => 'amber'],
        ['icon' => 'question-bubbles.png',      'label' => 'Savol tuzish imkoniyati',  'sub' => 'PIRLS savollari',         'color' => 'indigo'],
        ['icon' => 'open-book-lightbulb.png',   'label' => 'Matn xarakteri',           'sub' => 'Badiiy / axborot',        'color' => 'teal'],
        ['icon' => 'document-magnifier.png',    'label' => 'Rasm va jadval',           'sub' => "O'qishni boyitgan",       'color' => 'orange'],
    ];

    $steps = [
        ['n' => 1, 'icon' => 'thinking-boy.png',           'q' => "Bu matn qaysi sinf o'quvchisiga mos?",                          'color' => 'blue'],
        ['n' => 2, 'icon' => 'document-magnifier.png',     'q' => "Matnda o'quvchi tushunmaydigan so'zlar ko'p emasmi?",           'color' => 'violet'],
        ['n' => 3, 'icon' => 'checklist-pencil.png',       'q' => 'Matn asosida xulosa chiqarish mumkinmi?',                       'color' => 'emerald'],
        ['n' => 4, 'icon' => 'two-children-discussion.png','q' => 'Matnda qahramon, voqea, axborot yoki muammo bormi?',            'color' => 'amber'],
        ['n' => 5, 'icon' => 'growth-chart.png',           'q' => "O'quvchi bu matn orqali qanday ko'nikmani rivojlantiradi?",     'color' => 'orange'],
        ['n' => 6, 'icon' => 'girl-with-lightbulb.png',    'q' => "Matn asosida PIRLS tipidagi savollar tuzish mumkinmi?",         'color' => 'rose'],
    ];

    $tableRows = [
        ['Yoshga moslik',    'Matn qaysi sinfga mos?',            '2-sinf'],
        ['Matn turi',        'Badiiy yoki axborot matnimi?',      'Badiiy matn'],
        ["Asosiy g'oya",     "Matn nimani o'rgatadi?",             'Mehribonlik'],
        ["Yangi so'zlar",    "Qaysi so'zlar tushuntiriladi?",      "G'amxo'r, ehtiyotkor"],
        ['Savol imkoniyati', 'Qanday savollar tuziladi?',          'Aniq, xulosa, baholash'],
        ['Baholash',         'Qaysi mezon bilan baholanadi?',      '0–3 ballik rubrika'],
    ];
@endphp

<div class="flex gap-6 -mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'matn-tanlash'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl border border-blue-100 bg-gradient-to-br from-blue-50 via-white to-indigo-50">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-blue-100/60 blur-2xl"></div>
            <div class="pointer-events-none absolute -bottom-10 left-1/3 h-40 w-40 rounded-full bg-indigo-100/50 blur-2xl"></div>

            <div class="relative grid grid-cols-1 items-center gap-6 px-6 py-8 sm:px-8 sm:py-10 lg:grid-cols-[1.2fr_0.8fr]">
                <div>
                    <div class="mb-3 flex items-center gap-2">
                        <span class="grid h-7 w-7 place-items-center rounded-full bg-blue-600 text-xs font-bold text-white shadow-sm">1</span>
                        <span class="text-[11px] font-bold uppercase tracking-wide text-blue-700">Sinf strategiyalari &middot; 1-bo'lim</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Sinfda matnlarni tanlash</h1>
                    <p class="mt-3 max-w-xl leading-relaxed text-slate-600">
                        Boshlang'ich sinfda o'qish savodxonligini rivojlantirish avvalo to'g'ri matn tanlashdan boshlanadi. Matn o'quvchining yoshiga, lug'at boyligiga, hayotiy tajribasiga va o'qish darajasiga mos bo'lishi kerak.
                    </p>
                    <div class="mt-5 flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-blue-200 bg-white px-3.5 py-2 text-xs font-semibold text-blue-700 shadow-sm">
                            8 ta mezon
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-xl border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-500">
                            6 ta amaliy qadam
                        </span>
                    </div>
                </div>

                <div class="relative mx-auto hidden w-full max-w-xs sm:block">
                    <div class="pointer-events-none absolute -right-2 top-1 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('target.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <div class="pointer-events-none absolute -left-3 bottom-10 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-md ring-1 ring-slate-100">
                        <img src="{{ $asset('checklist-pencil.png') }}" alt="" class="h-7 w-7 object-contain">
                    </div>
                    <img src="{{ $asset('teacher-with-books.png') }}" alt="Matn tanlash" class="mx-auto w-full max-w-[240px] object-contain drop-shadow-sm">
                </div>
            </div>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-blue-100 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-600 shadow-sm">
                        <svg class="h-4.5 w-4.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Maqsad</h3>
                </div>
                <p class="text-sm leading-relaxed text-slate-600">O'qituvchiga sinf darajasiga mos matn tanlash, matnni metodik tahlil qilish va o'qish savodxonligini rivojlantirishga xizmat qiladigan savollar hamda topshiriqlar ishlab chiqish ko'nikmasini shakllantirish.</p>
            </div>
            <div class="rounded-2xl border border-indigo-100 bg-white p-5 shadow-sm">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-indigo-600 shadow-sm">
                        <svg class="h-4.5 w-4.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold uppercase tracking-wide text-slate-800">Nazariy izoh</h3>
                </div>
                <p class="mb-2 text-sm leading-relaxed text-slate-600">Yaxshi tanlangan matn o'quvchini o'qishga qiziqtiradi, uni fikrlashga undaydi, savol berishga, xulosa chiqarishga va o'z munosabatini bildirishga imkon yaratadi.</p>
                <p class="text-sm leading-relaxed text-slate-600">Aksincha, juda sodda matn o'quvchini rivojlantirmaydi, haddan tashqari murakkab matn esa uni charchatadi va o'qishga bo'lgan qiziqishini susaytiradi.</p>
            </div>
        </div>

        {{-- Mezonlar --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-slate-900 text-white shadow-sm">
                    <svg class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.75h-.152c-3.196 0-6.1-1.248-8.25-3.286z"/></svg>
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Amaliy mezonlar</p>
                    <h2 class="text-lg font-bold text-slate-900">Matn tanlashda hisobga olinadigan mezonlar</h2>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">
                @foreach ($criteria as $m)
                    @php $c = $colorMap[$m['color']]; @endphp
                    <div class="group rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="mx-auto mb-2.5 grid h-16 w-16 place-items-center rounded-2xl ring-1 {{ $c['tile'] }}">
                            <img src="{{ $asset($m['icon']) }}" alt="" class="h-10 w-10 object-contain transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <p class="text-xs font-bold leading-snug text-slate-800">{{ $m['label'] }}</p>
                        <p class="mt-0.5 text-[11px] text-slate-400">{{ $m['sub'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Amaliy tavsiya --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-violet-600 text-white shadow-sm">
                    <svg class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z"/></svg>
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Tekshiruv ro'yxati</p>
                    <h2 class="text-lg font-bold text-slate-900">Amaliy tavsiya — matnni darsga kiritishdan oldin</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($steps as $s)
                    @php $c = $colorMap[$s['color']]; @endphp
                    <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex items-start gap-3.5">
                            <div class="relative shrink-0">
                                <div class="grid h-14 w-14 place-items-center rounded-2xl ring-1 {{ $c['tile'] }}">
                                    <img src="{{ $asset($s['icon']) }}" alt="" class="h-9 w-9 object-contain transition-transform duration-300 group-hover:scale-110">
                                </div>
                                <span class="absolute -right-1.5 -top-1.5 grid h-5 w-5 place-items-center rounded-full {{ $c['badge'] }} text-[10px] font-bold text-white shadow">{{ $s['n'] }}</span>
                            </div>
                            <p class="pt-2 text-xs leading-relaxed text-slate-700">{{ $s['q'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Jadval --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-600 text-white shadow-sm">
                    <svg class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Metodik qo'llanma</p>
                    <h2 class="text-lg font-bold text-slate-900">Darsda qo'llash usuli — matn tahlil jadvali</h2>
                </div>
            </div>
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-emerald-50 text-emerald-800">
                            <tr>
                                <th class="px-4 py-3 text-left font-bold">Mezon</th>
                                <th class="px-4 py-3 text-left font-bold">Tahlil savoli</th>
                                <th class="px-4 py-3 text-left font-bold">O'qituvchi izohi (namuna)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($tableRows as $row)
                                <tr class="bg-white transition-colors hover:bg-slate-50">
                                    <td class="px-4 py-3 font-semibold text-slate-800">{{ $row[0] }}</td>
                                    <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                                    <td class="px-4 py-3 italic text-slate-400">{{ $row[2] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Namuna --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-orange-500 text-white shadow-sm">
                    <svg class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Amaliy namuna</p>
                    <h2 class="text-lg font-bold text-slate-900">Boshlang'ich sinfga mos namuna</h2>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-white p-6 shadow-sm">
                <img src="{{ $asset('boy-reading-green-book.png') }}" alt="" class="pointer-events-none absolute -right-4 -bottom-4 h-28 w-28 object-contain opacity-90 sm:h-32 sm:w-32">
                <div class="relative grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <p class="mb-3 text-sm font-bold text-emerald-900">Matn: "Kichik qushcha"</p>
                        <div class="space-y-2">
                            @foreach ([
                                ['Sinf', '2-sinf'],
                                ['Matn turi', 'Badiiy-tarbiyaviy'],
                                ["Asosiy g'oya", 'Tabiatga mehr va yordam'],
                            ] as $r)
                                <div class="flex gap-2 text-sm">
                                    <span class="w-28 shrink-0 font-semibold text-emerald-800">{{ $r[0] }}:</span>
                                    <span class="text-emerald-700">{{ $r[1] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <p class="mb-3 text-sm font-bold text-emerald-900">Savollar:</p>
                        <ol class="space-y-1.5 text-sm text-emerald-800">
                            <li class="flex gap-2"><span class="shrink-0 font-bold">1.</span><span>Bola nimani ko'rib qoldi?</span></li>
                            <li class="flex gap-2"><span class="shrink-0 font-bold">2.</span><span>Qushcha qanday holatda edi?</span></li>
                            <li class="flex gap-2"><span class="shrink-0 font-bold">3.</span><span>Bola unga qanday yordam berdi?</span></li>
                            <li class="flex gap-2"><span class="shrink-0 font-bold">4.</span><span>Bolaning harakati uning qanday bola ekanini ko'rsatadi?</span></li>
                            <li class="flex gap-2"><span class="shrink-0 font-bold">5.</span><span>Siz ham shunday vaziyatda nima qilardingiz?</span></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-blue-600 via-blue-600 to-indigo-700 px-6 py-8 sm:px-10 sm:py-9">
            <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full bg-white/10"></div>
            <div class="pointer-events-none absolute -bottom-16 left-10 h-40 w-40 rounded-full bg-white/10"></div>

            <div class="relative flex flex-col items-center gap-6 sm:flex-row sm:justify-between">
                <div class="max-w-lg text-center sm:text-left">
                    <p class="mb-2 text-xs font-bold uppercase tracking-wide text-blue-100">Kutiladigan natija</p>
                    <p class="text-lg font-bold leading-snug text-white sm:text-xl">
                        O'qituvchi sinf darajasiga mos matn tanlaydi, metodik tahlil qiladi va o'qish savodxonligini rivojlantiradigan savollar ishlab chiqadi.
                    </p>
                    <p class="mt-2 text-sm leading-relaxed text-blue-100">
                        O'quvchilar esa o'z yoshiga mos, qiziqarli va tushunarli matnlar orqali o'qishga faol jalb etiladi.
                    </p>
                    <a href="{{ route('sinf-strategiyalari.show', 'foydalanish-strategiyalari') }}"
                       class="mt-5 inline-flex items-center gap-2 rounded-xl bg-white px-5 py-2.5 text-sm font-bold text-blue-700 shadow-sm transition hover:bg-blue-50">
                        Keyingi bo'lim
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
                <img src="{{ $asset('trophy-books.png') }}" alt="" class="h-32 w-32 shrink-0 object-contain sm:h-36 sm:w-36">
            </div>
        </div>

    </div>
</div>
@endsection
