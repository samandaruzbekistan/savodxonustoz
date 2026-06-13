@extends('layouts.app')

@section('title', config('app.name')." — O'qish savodxonligi platformasi")

@php
    $statColors = [
        'indigo' => 'bg-indigo-50 text-indigo-600',
        'violet' => 'bg-violet-50 text-violet-600',
        'sky' => 'bg-sky-50 text-sky-600',
        'rose' => 'bg-rose-50 text-rose-600',
    ];
    $catMeta = [
        'nazariya' => ['icon' => 'book', 'wrap' => 'bg-indigo-50 text-indigo-600'],
        'metodik-modul' => ['icon' => 'cap', 'wrap' => 'bg-violet-50 text-violet-600'],
        'xalqaro-tajriba' => ['icon' => 'globe', 'wrap' => 'bg-teal-50 text-teal-600'],
    ];
    $firstSection = $sections->first();
@endphp

@section('content')
    {{-- HERO --}}
    <section class="relative mb-14 overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-600 via-indigo-600 to-violet-700 text-white">
        <div class="pointer-events-none absolute inset-0 text-white opacity-10">
            <x-decor.dots id="hero-dots" />
        </div>
        <div class="relative grid items-center gap-8 px-6 py-14 sm:px-12 lg:grid-cols-2">
            <div>
                <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide">
                    <x-icon name="sparkle" class="h-4 w-4" /> Metodik platforma
                </span>
                <h1 class="mt-4 text-3xl font-bold leading-tight sm:text-4xl">Bo'lajak boshlang'ich sinf o'qituvchilari uchun o'qish savodxonligi platformasi</h1>
                <p class="mt-4 max-w-xl text-indigo-100">Nazariya, metodika, PIRLS va PISA yondashuvlari, amaliy misollar va topshiriqlar — barchasi bir joyda.</p>
                <div class="mt-7 flex flex-wrap gap-3">
                    @if ($firstSection)
                        <a href="{{ route('sections.show', $firstSection->slug) }}" class="inline-flex items-center gap-2 rounded-lg bg-white px-5 py-2.5 text-sm font-semibold text-indigo-700 transition hover:bg-indigo-50">
                            Nazariyani o'rganish <x-icon name="arrow-right" class="h-4 w-4" />
                        </a>
                    @endif
                    <a href="#bolimlar" class="inline-flex items-center gap-2 rounded-lg bg-white/10 px-5 py-2.5 text-sm font-semibold text-white ring-1 ring-inset ring-white/30 transition hover:bg-white/20">
                        Bo'limlar bilan tanishish
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <x-decor.reading class="mx-auto max-w-md" />
            </div>
        </div>
    </section>

    {{-- STATISTICS --}}
    <section class="mb-14 grid grid-cols-2 gap-4 lg:grid-cols-4">
        @foreach ($stats as $stat)
            <div class="flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5">
                <span class="grid h-12 w-12 shrink-0 place-items-center rounded-xl {{ $statColors[$stat['color']] ?? $statColors['indigo'] }}">
                    <x-icon :name="$stat['icon']" class="h-6 w-6" />
                </span>
                <div>
                    <p class="text-2xl font-bold text-slate-800">{{ $stat['value'] }}</p>
                    <p class="text-sm text-slate-500">{{ $stat['label'] }}</p>
                </div>
            </div>
        @endforeach
    </section>

    {{-- POPULAR CATEGORIES --}}
    @if ($sections->isNotEmpty())
        <section id="bolimlar" class="mb-14 scroll-mt-20">
            <h2 class="mb-5 text-xl font-bold text-slate-800">Bo'limlar</h2>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($sections as $section)
                    @php $meta = $catMeta[$section->slug] ?? ['icon' => 'folder', 'wrap' => 'bg-slate-100 text-slate-500']; @endphp
                    <a href="{{ route('sections.show', $section->slug) }}" class="group flex gap-4 rounded-2xl border border-slate-200 bg-white p-6 transition hover:-translate-y-0.5 hover:border-indigo-300 hover:shadow-md">
                        <span class="grid h-12 w-12 shrink-0 place-items-center rounded-xl {{ $meta['wrap'] }}">
                            <x-icon :name="$meta['icon']" class="h-6 w-6" />
                        </span>
                        <div>
                            <h3 class="font-semibold text-slate-800 group-hover:text-indigo-700">{{ $section->name }}</h3>
                            @if ($section->description)
                                <p class="mt-1 line-clamp-2 text-sm text-slate-500">{{ $section->description }}</p>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif

    {{-- FEATURED --}}
    @if ($featured->isNotEmpty())
        <section class="mb-14">
            <h2 class="mb-5 text-xl font-bold text-slate-800">Tavsiya etiladi</h2>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($featured as $item)
                    <x-content.card :item="$item" />
                @endforeach
            </div>
        </section>
    @endif

    {{-- LATEST --}}
    <section class="mb-14">
        <h2 class="mb-5 text-xl font-bold text-slate-800">So'nggi materiallar</h2>
        @if ($recent->isEmpty())
            <x-ui.empty-state title="Hozircha material yo'q" icon="book">Tez orada yangi materiallar qo'shiladi.</x-ui.empty-state>
        @else
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
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
        <div class="relative flex flex-col items-start gap-6 sm:flex-row sm:items-center sm:justify-between">
            <div class="max-w-xl">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide">
                    <x-icon name="sparkle" class="h-4 w-4" /> AI yordamchi
                </span>
                <h2 class="mt-3 text-2xl font-bold">PIRLS topshiriqlari va rubrikalarni soniyalarda yarating</h2>
                <p class="mt-2 text-violet-100">Matn kiriting — AI yordamchi savol, rubrika va metodik tavsiyalar tayyorlab beradi.</p>
            </div>
            @if (\Illuminate\Support\Facades\Route::has('ai.index'))
                <a href="{{ route('ai.index') }}" class="inline-flex shrink-0 items-center gap-2 rounded-lg bg-white px-5 py-2.5 text-sm font-semibold text-violet-700 transition hover:bg-violet-50">
                    AI yordamchini ochish <x-icon name="arrow-right" class="h-4 w-4" />
                </a>
            @else
                <span class="inline-flex shrink-0 items-center gap-2 rounded-lg bg-white/15 px-5 py-2.5 text-sm font-semibold text-white ring-1 ring-inset ring-white/30">
                    Tez orada
                </span>
            @endif
        </div>
    </section>
@endsection
