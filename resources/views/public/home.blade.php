@extends('layouts.app')

@section('title', config('app.name')." — O'qish savodxonligi platformasi")

@php
    use Illuminate\Support\Facades\Route;

    $statColors = [
        'indigo' => ['wrap' => 'bg-indigo-100 text-indigo-600', 'num' => 'text-indigo-700'],
        'violet' => ['wrap' => 'bg-violet-100 text-violet-600', 'num' => 'text-violet-700'],
        'sky' => ['wrap' => 'bg-sky-100 text-sky-600', 'num' => 'text-sky-700'],
        'rose' => ['wrap' => 'bg-rose-100 text-rose-600', 'num' => 'text-rose-700'],
    ];
    $firstSection = $sections->first();

    // Varied feature cards — different accent, illustration glyph and span.
    $features = [
        ['icon' => 'book', 'grad' => 'from-indigo-500 to-indigo-600', 'soft' => 'bg-indigo-50', 'ring' => 'hover:ring-indigo-200', 'title' => 'Nazariy asos', 'text' => "PIRLS, PISA, matnni tushunish, ravon va tanqidiy o'qish bo'yicha ilmiy poydevor.", 'span' => 'lg:col-span-3'],
        ['icon' => 'cap', 'grad' => 'from-violet-500 to-violet-600', 'soft' => 'bg-violet-50', 'ring' => 'hover:ring-violet-200', 'title' => 'Amaliy metodika', 'text' => "Matn bilan ishlash, savol tuzish, baholash va lug'at metodikasi.", 'span' => 'lg:col-span-3'],
        ['icon' => 'globe', 'grad' => 'from-teal-500 to-emerald-600', 'soft' => 'bg-teal-50', 'ring' => 'hover:ring-teal-200', 'title' => 'Xalqaro tajriba', 'text' => "Jahonning 7 yetakchi davlati tajribasi.", 'span' => 'lg:col-span-2'],
        ['icon' => 'clipboard', 'grad' => 'from-sky-500 to-sky-600', 'soft' => 'bg-sky-50', 'ring' => 'hover:ring-sky-200', 'title' => 'Testlar va baholash', 'text' => "PIRLS tipidagi savollar va avtomatik baholash.", 'span' => 'lg:col-span-2'],
        ['icon' => 'sparkle', 'grad' => 'from-fuchsia-500 to-pink-600', 'soft' => 'bg-fuchsia-50', 'ring' => 'hover:ring-fuchsia-200', 'title' => 'AI yordamchi', 'text' => "Topshiriq va rubrikalarni soniyalarda.", 'span' => 'lg:col-span-2'],
    ];

    // Audience personas — benefit statements (not fabricated testimonials).
    $personas = [
        ['role' => "Boshlang'ich sinf o'qituvchisi", 'initials' => 'OʻQ', 'grad' => 'from-indigo-500 to-violet-500', 'text' => "Tayyor dars ishlanmalari, PIRLS topshiriqlari va baholash mezonlari — darsga tayyorgarlik vaqtini tejaydi."],
        ['role' => 'Ota-ona', 'initials' => 'OO', 'grad' => 'from-emerald-500 to-teal-500', 'text' => "Farzandingizning o'qish ko'nikmasini uy sharoitida qo'llab-quvvatlash bo'yicha amaliy maslahatlar va audio ertaklar."],
        ['role' => 'Maktab ma\'muri', 'initials' => 'MM', 'grad' => 'from-sky-500 to-indigo-500', 'text' => "O'qish savodxonligini diagnostika qilish va monitoring yuritish uchun yagona metodik tizim."],
        ['role' => 'Ta\'lim mutaxassisi', 'initials' => 'TM', 'grad' => 'from-rose-500 to-fuchsia-500', 'text' => "Ilmiy maqolalar, xalqaro tajriba va zamonaviy metodikalar — bir joyda, izlanish uchun tayyor."],
    ];

    $hasVideos = Route::has('videos.index');
    $hasAi = Route::has('ai.index');
    $hasBlog = Route::has('blog.index');
@endphp

@section('content')
    {{-- ══════════════════════ HERO ══════════════════════ --}}
    <section class="relative mb-6 overflow-hidden rounded-[2.25rem] bg-gradient-to-br from-indigo-700 via-indigo-600 to-violet-700 text-white">
        {{-- animated ambient background --}}
        <div class="pointer-events-none absolute inset-0 text-white opacity-10">
            <x-decor.dots id="hero-dots" />
        </div>
        <div class="su-blob pointer-events-none absolute -left-24 -top-24 h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl"></div>
        <div class="su-blob su-delay-2 pointer-events-none absolute -bottom-28 right-8 h-80 w-80 rounded-full bg-fuchsia-400/25 blur-3xl"></div>
        <div class="su-blob su-delay-1 pointer-events-none absolute right-1/3 top-10 h-52 w-52 rounded-full bg-violet-300/10 blur-2xl"></div>

        <div class="relative grid items-center gap-6 px-6 py-12 sm:px-12 lg:grid-cols-[1.1fr_1fr] lg:py-16">
            <div class="su-reveal" data-reveal="left">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-4 py-1.5 text-xs font-semibold uppercase tracking-wider ring-1 ring-inset ring-white/25 backdrop-blur">
                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-cyan-300 opacity-75"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-cyan-300"></span>
                    </span>
                    Metodik-raqamli platforma
                </span>

                <h1 class="mt-6 text-4xl font-extrabold leading-[1.08] tracking-tight sm:text-5xl lg:text-[3.25rem]">
                    O'qishni <span class="su-gradient-anim bg-gradient-to-r from-cyan-200 via-amber-200 to-fuchsia-200 bg-clip-text text-transparent">sehrga</span> aylantiramiz
                </h1>

                <p class="mt-5 max-w-xl text-lg leading-relaxed text-indigo-100">
                    Bo'lajak boshlang'ich sinf o'qituvchilari uchun nazariya, metodika, xalqaro tajriba,
                    resurslar, video darslar va PIRLS tipidagi testlar — barchasi bir joyda.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    @if ($firstSection)
                        <a href="{{ route('sections.show', $firstSection->slug) }}"
                           class="su-lift group inline-flex items-center gap-2 rounded-2xl bg-white px-6 py-3.5 text-sm font-bold text-indigo-700 shadow-xl shadow-indigo-900/30 hover:bg-indigo-50">
                            Nazariyani o'rganish
                            <x-icon name="arrow-right" class="h-4 w-4 transition group-hover:translate-x-0.5" />
                        </a>
                    @endif
                    <a href="#bolimlar"
                       class="inline-flex items-center gap-2 rounded-2xl bg-white/10 px-6 py-3.5 text-sm font-bold text-white ring-1 ring-inset ring-white/30 backdrop-blur transition hover:bg-white/20">
                        <x-icon name="layers" class="h-4 w-4" /> Barcha bo'limlar
                    </a>
                </div>

                {{-- trust badges --}}
                <div class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-indigo-100">
                    <span class="inline-flex items-center gap-2">
                        <x-icon name="check" class="h-4 w-4 text-cyan-300" /> PIRLS &amp; PISA asosida
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <x-icon name="check" class="h-4 w-4 text-cyan-300" /> 1–4-sinflar uchun
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <x-icon name="check" class="h-4 w-4 text-cyan-300" /> Bepul foydalanish
                    </span>
                </div>
            </div>

            <div class="su-reveal relative hidden lg:block" data-reveal="right">
                <img src="{{ asset('images/girl.png') }}"
                     alt=""
                     width="1536" height="1024"
                     fetchpriority="high" decoding="async"
                     class="su-float-slow mx-auto w-full max-w-2xl drop-shadow-2xl">
            </div>
        </div>

        <x-decor.divider variant="curve" color="text-slate-50" class="-mb-px" />
    </section>

    {{-- ══════════════════════ STATISTICS ══════════════════════ --}}
    <section class="mb-16">
        <div class="su-stagger grid grid-cols-2 gap-4 lg:grid-cols-4">
            @foreach ($stats as $stat)
                @php $c = $statColors[$stat['color']] ?? $statColors['indigo']; @endphp
                <div class="su-lift group relative flex items-center gap-4 overflow-hidden rounded-3xl border border-slate-100 bg-white p-5 shadow-sm shadow-slate-200/50 hover:shadow-lg">
                    <div class="pointer-events-none absolute -right-6 -top-6 h-20 w-20 rounded-full {{ $c['wrap'] }} opacity-40 blur-xl transition group-hover:opacity-70"></div>
                    <span class="relative grid h-14 w-14 shrink-0 place-items-center rounded-2xl {{ $c['wrap'] }}">
                        <x-icon :name="$stat['icon']" class="h-7 w-7" />
                    </span>
                    <div class="relative">
                        <p class="text-3xl font-extrabold {{ $c['num'] }}" data-count-to="{{ (int) $stat['value'] }}">0</p>
                        <p class="text-sm font-medium text-slate-500">{{ $stat['label'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ══════════════════════ SECTIONS ══════════════════════ --}}
    @if ($sections->isNotEmpty())
        <section id="bolimlar" class="mb-20 scroll-mt-24">
            <div class="su-reveal mb-8 text-center">
                <span class="text-sm font-bold uppercase tracking-wider text-indigo-600">Platforma bo'limlari</span>
                <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Nimani o'rganasiz?</h2>
                <p class="mx-auto mt-3 max-w-2xl text-slate-500">O'qish savodxonligini rivojlantirishning har bir bosqichi uchun tizimli materiallar.</p>
            </div>
            <div class="su-stagger grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($sections as $section)
                    <x-section.tile :category="$section" />
                @endforeach
            </div>
        </section>
    @endif

    {{-- ══════════════════════ FEATURES (bento) ══════════════════════ --}}
    <section class="relative mb-20 overflow-hidden rounded-[2rem] bg-gradient-to-br from-slate-50 to-indigo-50/60 p-6 ring-1 ring-slate-100 sm:p-10">
        <div class="su-blob pointer-events-none absolute -right-16 top-0 h-64 w-64 rounded-full bg-violet-200/40 blur-3xl"></div>
        <div class="su-reveal relative mb-8 max-w-2xl">
            <span class="text-sm font-bold uppercase tracking-wider text-violet-600">Nega Savodxon Ustoz?</span>
            <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900">Bir platformada — to'liq ekotizim</h2>
        </div>
        <div class="su-stagger relative grid gap-5 sm:grid-cols-2 lg:grid-cols-6">
            @foreach ($features as $f)
                <div class="su-lift group flex flex-col gap-4 rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-100 ring-inset transition hover:shadow-xl {{ $f['ring'] }} {{ $f['span'] }}">
                    <span class="grid h-14 w-14 place-items-center rounded-2xl bg-gradient-to-br {{ $f['grad'] }} text-white shadow-lg">
                        <x-icon :name="$f['icon']" class="h-7 w-7" stroke="1.6" />
                    </span>
                    <div>
                        <h3 class="text-lg font-bold text-slate-800">{{ $f['title'] }}</h3>
                        <p class="mt-1.5 text-sm leading-relaxed text-slate-500">{{ $f['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ══════════════════════ FEATURED ══════════════════════ --}}
    @if ($featured->isNotEmpty())
        <section class="mb-20">
            <div class="su-reveal mb-8 flex items-end justify-between gap-4">
                <div>
                    <span class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-wider text-amber-600">
                        <x-icon name="star" class="h-4 w-4" /> Tavsiya etiladi
                    </span>
                    <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900">Tanlangan materiallar</h2>
                </div>
            </div>
            <div class="su-stagger grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($featured as $item)
                    <x-content.card :item="$item" class="su-lift" />
                @endforeach
            </div>
        </section>
    @endif

    {{-- ══════════════════════ VIDEO PREVIEW ══════════════════════ --}}
    <section class="relative mb-20 overflow-hidden rounded-[2rem] bg-slate-900 text-white">
        <div class="pointer-events-none absolute inset-0 opacity-[0.07] text-white">
            <x-decor.dots id="video-dots" />
        </div>
        <div class="su-blob pointer-events-none absolute -left-20 bottom-0 h-72 w-72 rounded-full bg-indigo-500/30 blur-3xl"></div>
        <div class="su-blob su-delay-2 pointer-events-none absolute -right-16 -top-16 h-72 w-72 rounded-full bg-fuchsia-500/25 blur-3xl"></div>

        <div class="relative grid items-center gap-8 p-6 sm:p-12 lg:grid-cols-2">
            <div class="su-reveal" data-reveal="left">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3.5 py-1.5 text-xs font-semibold uppercase tracking-wide ring-1 ring-inset ring-white/20">
                    <x-icon name="play" class="h-4 w-4 text-rose-300" /> Video darslar
                </span>
                <h2 class="mt-4 text-3xl font-extrabold leading-tight sm:text-4xl">Ko'rgazmali dars tahlillari</h2>
                <p class="mt-4 max-w-md text-slate-300">
                    Tajribali metodistlarning jonli dars namunalari, matn bilan ishlash usullari va PIRLS
                    topshiriqlarini qo'llash bo'yicha video qo'llanmalar.
                </p>
                @if ($hasVideos)
                    <a href="{{ route('videos.index') }}"
                       class="su-lift mt-7 inline-flex items-center gap-2 rounded-2xl bg-white px-6 py-3.5 text-sm font-bold text-slate-900 shadow-xl hover:bg-slate-100">
                        <x-icon name="play" class="h-4 w-4" /> Videolarni ko'rish
                    </a>
                @else
                    <span class="mt-7 inline-flex items-center gap-2 rounded-2xl bg-white/10 px-6 py-3.5 text-sm font-bold text-white ring-1 ring-inset ring-white/25">
                        Tez orada
                    </span>
                @endif
            </div>

            {{-- thumbnail with glowing play button --}}
            <div class="su-reveal" data-reveal="right">
                <div class="su-lift group relative aspect-video overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-600 via-violet-600 to-fuchsia-600 shadow-2xl ring-1 ring-white/20">
                    <div class="pointer-events-none absolute inset-0 opacity-20 text-white"><x-decor.dots id="video-thumb-dots" /></div>
                    <x-decor.reading class="absolute inset-0 m-auto max-w-[62%] opacity-90" />
                    @if ($hasVideos)
                        <a href="{{ route('videos.index') }}" class="absolute inset-0 grid place-items-center" aria-label="Videolarni ko'rish">
                    @else
                        <div class="absolute inset-0 grid place-items-center">
                    @endif
                        <span class="su-pulse-ring relative grid h-20 w-20 place-items-center rounded-full bg-white/95 text-indigo-700 shadow-2xl transition group-hover:scale-110">
                            <x-icon name="play" class="h-9 w-9" />
                        </span>
                    @if ($hasVideos)
                        </a>
                    @else
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════ AUDIENCE PERSONAS ══════════════════════ --}}
    <section class="mb-20">
        <div class="su-reveal mb-8 text-center">
            <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">Kim uchun?</span>
            <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Har bir foydalanuvchi uchun</h2>
        </div>
        <div class="su-stagger grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($personas as $p)
                <div class="su-lift group relative flex flex-col rounded-3xl border border-slate-100 bg-white p-6 shadow-sm hover:shadow-xl">
                    <div class="mb-4 flex items-center gap-3">
                        <span class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br {{ $p['grad'] }} text-sm font-extrabold text-white shadow-md">
                            {{ $p['initials'] }}
                        </span>
                        <p class="text-sm font-bold leading-tight text-slate-800">{{ $p['role'] }}</p>
                    </div>
                    <div class="relative rounded-2xl bg-slate-50 p-4 text-sm leading-relaxed text-slate-600">
                        <span class="absolute -top-2 left-5 h-4 w-4 rotate-45 rounded-sm bg-slate-50"></span>
                        {{ $p['text'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ══════════════════════ LATEST ══════════════════════ --}}
    <section class="mb-20">
        <div class="su-reveal mb-8 flex items-end justify-between gap-4">
            <div>
                <span class="text-sm font-bold uppercase tracking-wider text-indigo-600">Yangilanib turadi</span>
                <h2 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900">So'nggi materiallar</h2>
            </div>
            @if ($hasBlog)
                <a href="{{ route('blog.index') }}" class="hidden shrink-0 items-center gap-1.5 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-600 transition hover:border-indigo-300 hover:text-indigo-700 sm:inline-flex">
                    Barchasi <x-icon name="arrow-right" class="h-4 w-4" />
                </a>
            @endif
        </div>
        @if ($recent->isEmpty())
            <x-ui.empty-state title="Hozircha material yo'q" icon="book">Tez orada yangi materiallar qo'shiladi.</x-ui.empty-state>
        @else
            <div class="su-stagger grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($recent as $item)
                    <x-content.card :item="$item" class="su-lift" />
                @endforeach
            </div>
        @endif
    </section>

    {{-- ══════════════════════ AI CTA ══════════════════════ --}}
    <section class="relative mb-4 overflow-hidden rounded-[2rem] bg-gradient-to-br from-violet-700 via-fuchsia-600 to-pink-600 px-6 py-14 text-white sm:px-12 sm:py-16">
        <div class="pointer-events-none absolute inset-0 text-white opacity-10">
            <x-decor.dots id="ai-dots" />
        </div>
        <div class="su-spin-slow pointer-events-none absolute -right-24 -top-24 h-80 w-80 rounded-full bg-gradient-to-br from-white/20 to-transparent blur-2xl"></div>
        <div class="su-blob pointer-events-none absolute -bottom-24 left-10 h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl"></div>

        <div class="su-reveal relative mx-auto flex max-w-4xl flex-col items-center gap-6 text-center">
            <span class="su-float inline-flex h-16 w-16 items-center justify-center rounded-2xl bg-white/15 ring-1 ring-inset ring-white/30 backdrop-blur">
                <x-icon name="sparkle" class="h-8 w-8" />
            </span>
            <div>
                <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide ring-1 ring-inset ring-white/25">
                    Sun'iy intellekt yordamchisi
                </span>
                <h2 class="mt-4 text-3xl font-extrabold sm:text-4xl">PIRLS topshiriqlarini soniyalarda yarating</h2>
                <p class="mx-auto mt-4 max-w-2xl text-lg text-violet-100">
                    Matn kiriting — AI yordamchi savol, rubrika va metodik tavsiyalarni avtomatik tayyorlab beradi.
                </p>
            </div>
            @if ($hasAi)
                <a href="{{ route('ai.index') }}"
                   class="su-lift group inline-flex items-center gap-2 rounded-2xl bg-white px-7 py-4 text-base font-bold text-violet-700 shadow-2xl hover:bg-violet-50">
                    AI yordamchini ochish
                    <x-icon name="arrow-right" class="h-5 w-5 transition group-hover:translate-x-0.5" />
                </a>
            @else
                <span class="inline-flex items-center gap-2 rounded-2xl bg-white/15 px-7 py-4 text-base font-bold text-white ring-1 ring-inset ring-white/30">
                    Tez orada
                </span>
            @endif
        </div>
    </section>
@endsection
