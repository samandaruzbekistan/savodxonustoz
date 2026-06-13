@extends('layouts.app')

@section('title', config('app.name')." — O'qish savodxonligi platformasi")

@php
    $statColors = [
        'indigo' => 'bg-indigo-50 text-indigo-600',
        'violet' => 'bg-violet-50 text-violet-600',
        'sky' => 'bg-sky-50 text-sky-600',
        'rose' => 'bg-rose-50 text-rose-600',
    ];
    $firstSection = $sections->first();
    $features = [
        ['icon' => 'book', 'color' => 'bg-indigo-50 text-indigo-600', 'title' => 'Nazariy asos', 'text' => "PIRLS, PISA, matnni tushunish, ravon va tanqidiy o'qish."],
        ['icon' => 'cap', 'color' => 'bg-violet-50 text-violet-600', 'title' => 'Amaliy metodika', 'text' => "Matn bilan ishlash, savol tuzish, baholash va lug'at."],
        ['icon' => 'globe', 'color' => 'bg-teal-50 text-teal-600', 'title' => 'Xalqaro tajriba', 'text' => "Jahonning 7 yetakchi davlati tajribasi va xulosalar."],
        ['icon' => 'clipboard', 'color' => 'bg-emerald-50 text-emerald-600', 'title' => 'Testlar va baholash', 'text' => "PIRLS tipidagi savollar va avtomatik baholash."],
    ];
@endphp

@section('content')
    {{-- HERO --}}
    <section class="relative mb-8 overflow-hidden rounded-[2rem] bg-gradient-to-br from-indigo-700 via-indigo-600 to-violet-700 text-white">
        <div class="pointer-events-none absolute inset-0 text-white opacity-10">
            <x-decor.dots id="hero-dots" />
        </div>
        <div class="pointer-events-none absolute -left-16 -top-16 h-64 w-64 rounded-full bg-white/10 blur-2xl"></div>
        <div class="pointer-events-none absolute -bottom-20 right-10 h-72 w-72 rounded-full bg-fuchsia-400/20 blur-3xl"></div>

        <div class="relative grid items-center gap-8 px-6 py-12 sm:px-12 lg:grid-cols-[1.15fr_1fr] lg:py-16">
            <div>
                <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3.5 py-1.5 text-xs font-semibold uppercase tracking-wider ring-1 ring-inset ring-white/20">
                    <x-icon name="sparkle" class="h-4 w-4" /> Metodik-raqamli platforma
                </span>
                <h1 class="mt-5 text-3xl font-extrabold leading-[1.1] tracking-tight sm:text-4xl lg:text-[2.75rem]">
                    O'qish savodxonligini rivojlantirishning to'liq metodik platformasi
                </h1>
                <p class="mt-5 max-w-xl text-lg leading-relaxed text-indigo-100">
                    Bo'lajak boshlang'ich sinf o'qituvchilari uchun nazariya, metodika, xalqaro tajriba, resurslar, video darslar va PIRLS tipidagi testlar — barchasi bir joyda.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    @if ($firstSection)
                        <a href="{{ route('sections.show', $firstSection->slug) }}" class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-indigo-700 shadow-lg shadow-indigo-900/20 transition hover:-translate-y-0.5 hover:bg-indigo-50">
                            Nazariyani o'rganish <x-icon name="arrow-right" class="h-4 w-4" />
                        </a>
                    @endif
                    <a href="#bolimlar" class="inline-flex items-center gap-2 rounded-xl bg-white/10 px-5 py-3 text-sm font-bold text-white ring-1 ring-inset ring-white/30 transition hover:bg-white/20">
                        <x-icon name="layers" class="h-4 w-4" /> Barcha bo'limlar
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <x-decor.reading class="mx-auto max-w-md drop-shadow-2xl" />
            </div>
        </div>
    </section>

    {{-- STATISTICS --}}
    <section class="mb-14 grid grid-cols-2 gap-4 lg:grid-cols-4">
        @foreach ($stats as $stat)
            <div class="flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-indigo-200 hover:shadow-sm">
                <span class="grid h-12 w-12 shrink-0 place-items-center rounded-xl {{ $statColors[$stat['color']] ?? $statColors['indigo'] }}">
                    <x-icon :name="$stat['icon']" class="h-6 w-6" />
                </span>
                <div>
                    <p class="text-2xl font-extrabold text-slate-800">{{ $stat['value'] }}</p>
                    <p class="text-sm text-slate-500">{{ $stat['label'] }}</p>
                </div>
            </div>
        @endforeach
    </section>

    {{-- SECTIONS --}}
    @if ($sections->isNotEmpty())
        <section id="bolimlar" class="mb-16 scroll-mt-24">
            <div class="mb-6">
                <span class="text-sm font-semibold uppercase tracking-wider text-indigo-600">Platforma bo'limlari</span>
                <h2 class="mt-1 text-2xl font-bold text-slate-800">Nimani o'rganasiz?</h2>
            </div>
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($sections as $section)
                    <x-section.tile :category="$section" />
                @endforeach
            </div>
        </section>
    @endif

    {{-- FEATURES STRIP --}}
    <section class="mb-16 rounded-3xl border border-slate-200 bg-white p-6 sm:p-8">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($features as $f)
                <div class="flex flex-col gap-3">
                    <span class="grid h-12 w-12 place-items-center rounded-xl {{ $f['color'] }}">
                        <x-icon :name="$f['icon']" class="h-6 w-6" />
                    </span>
                    <h3 class="font-semibold text-slate-800">{{ $f['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-slate-500">{{ $f['text'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- FEATURED --}}
    @if ($featured->isNotEmpty())
        <section class="mb-16">
            <div class="mb-6 flex items-center gap-2">
                <x-icon name="star" class="h-5 w-5 text-amber-500" />
                <h2 class="text-2xl font-bold text-slate-800">Tavsiya etiladi</h2>
            </div>
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($featured as $item)
                    <x-content.card :item="$item" />
                @endforeach
            </div>
        </section>
    @endif

    {{-- LATEST --}}
    <section class="mb-16">
        <div class="mb-6 flex items-center justify-between">
            <h2 class="text-2xl font-bold text-slate-800">So'nggi materiallar</h2>
        </div>
        @if ($recent->isEmpty())
            <x-ui.empty-state title="Hozircha material yo'q" icon="book">Tez orada yangi materiallar qo'shiladi.</x-ui.empty-state>
        @else
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($recent as $item)
                    <x-content.card :item="$item" />
                @endforeach
            </div>
        @endif
    </section>

    {{-- AI CTA --}}
    <section class="relative mb-4 overflow-hidden rounded-3xl bg-gradient-to-br from-violet-600 to-fuchsia-600 px-6 py-12 text-white sm:px-12">
        <div class="pointer-events-none absolute inset-0 text-white opacity-10">
            <x-decor.dots id="ai-dots" />
        </div>
        <div class="pointer-events-none absolute -right-10 -top-10 h-56 w-56 rounded-full bg-white/10 blur-2xl"></div>
        <div class="relative flex flex-col items-start gap-6 sm:flex-row sm:items-center sm:justify-between">
            <div class="max-w-xl">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide ring-1 ring-inset ring-white/20">
                    <x-icon name="sparkle" class="h-4 w-4" /> AI yordamchi
                </span>
                <h2 class="mt-3 text-2xl font-bold">PIRLS topshiriqlari va rubrikalarni soniyalarda yarating</h2>
                <p class="mt-2 text-violet-100">Matn kiriting — AI yordamchi savol, rubrika va metodik tavsiyalar tayyorlab beradi.</p>
            </div>
            @if (\Illuminate\Support\Facades\Route::has('ai.index'))
                <a href="{{ route('ai.index') }}" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-violet-700 shadow-lg transition hover:-translate-y-0.5 hover:bg-violet-50">
                    AI yordamchini ochish <x-icon name="arrow-right" class="h-4 w-4" />
                </a>
            @else
                <span class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-white/15 px-5 py-3 text-sm font-bold text-white ring-1 ring-inset ring-white/30">
                    Tez orada
                </span>
            @endif
        </div>
    </section>
@endsection
