@extends('layouts.app')

@section('title', "101 o'qish kursi")

@section('content')
    <x-breadcrumbs :items="[['label' => '101 o\'qish kursi', 'url' => null]]" />

    @php
        $categoryMeta = [
            'ona-tili-va-oqish-savodxonligi' => ['icon' => 'book', 'color' => 'bg-emerald-100 text-emerald-700', 'ring' => 'border-emerald-200'],
            'oqish-kitobi' => ['icon' => 'library', 'color' => 'bg-indigo-100 text-indigo-700', 'ring' => 'border-indigo-200'],
        ];
    @endphp

    {{-- Hero --}}
    <div class="mb-8 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 45%, #0369a1 100%);">
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="reading-course-grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#reading-course-grid)"/>
            </svg>
        </div>
        <div class="relative px-8 py-8 flex gap-6 items-center">
            <div class="flex-1 min-w-0">
                <div class="inline-flex items-center gap-2 rounded-full bg-white/20 px-3 py-1 mb-4">
                    <span class="h-2 w-2 rounded-full bg-cyan-300 animate-pulse"></span>
                    <span class="text-xs font-semibold text-white/90">1-4-sinflar uchun</span>
                </div>
                <h1 class="text-3xl font-extrabold tracking-tight text-white leading-tight">101 o'qish kursi</h1>
                <p class="mt-3 text-slate-200 leading-relaxed max-w-xl text-sm">
                    Ona tili va o'qish savodxonligi hamda o'qish kitobi darsliklari to'plami. Kurs materiallari
                    hozircha to'ldirilmoqda — matn, audio va topshiriqlar keyingi bosqichda qo'shiladi.
                </p>
                <div class="mt-5 flex flex-wrap gap-2">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                        <x-icon name="doc" class="h-3.5 w-3.5" /> {{ $counts['total'] }} ta darslik
                    </span>
                    @foreach ($categories as $category)
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                            <x-icon :name="$categoryMeta[$category->slug]['icon'] ?? 'doc'" class="h-3.5 w-3.5" /> {{ $counts[$category->slug] ?? 0 }} {{ $category->name }}
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="hidden md:flex shrink-0 items-center justify-center">
                <div class="h-32 w-32 rounded-full bg-white/10 border-2 border-white/20 flex items-center justify-center">
                    <div class="h-24 w-24 rounded-full bg-white/15 border border-white/25 flex items-center justify-center">
                        <x-icon name="library" class="h-14 w-14 text-white" stroke="1.2" />
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-8 bg-slate-50" style="clip-path: ellipse(60% 100% at 50% 100%); opacity: 0.15;"></div>
    </div>

    {{-- Fairy tales & audio promo --}}
    <a href="{{ route('fairy-tales.index') }}"
       class="mb-6 flex items-center gap-4 rounded-2xl border border-emerald-200 bg-emerald-50 p-5 transition hover:shadow-md">
        <span class="grid h-12 w-12 shrink-0 place-items-center rounded-xl bg-emerald-100 text-emerald-700">
            <x-icon name="play" class="h-6 w-6" />
        </span>
        <div class="flex-1 min-w-0">
            <h2 class="font-bold text-slate-800">Ertaklar va audiolar</h2>
            <p class="text-sm text-slate-500">1-4-sinflar uchun 40 ta audio ertak — matni, yangi so'zlari va topshiriqlari bilan birga tinglang.</p>
        </div>
        <x-icon name="doc" class="h-5 w-5 shrink-0 text-emerald-600" />
    </a>

    {{-- Subject filter --}}
    <div class="mb-4 flex flex-wrap items-center gap-2">
        <a href="{{ route('reading-course.index', request()->except(['category', 'page'])) }}"
           class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-xs font-semibold transition-colors
               {{ ! request('category') ? 'bg-slate-800 text-white' : 'bg-white border border-slate-200 text-slate-600 hover:border-slate-300' }}">
            Barchasi
            <span class="rounded-full bg-black/10 px-1.5 py-0.5 text-[10px]">{{ $counts['total'] }}</span>
        </a>
        @foreach ($categories as $category)
            <a href="{{ route('reading-course.index', request()->except('page') + ['category' => $category->slug]) }}"
               class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-xs font-semibold transition-colors
                   {{ request('category') === $category->slug ? 'bg-slate-800 text-white' : 'bg-white border border-slate-200 text-slate-600 hover:border-slate-300' }}">
                <x-icon :name="$categoryMeta[$category->slug]['icon'] ?? 'doc'" class="h-3.5 w-3.5" />
                {{ $category->name }}
                <span class="rounded-full bg-black/10 px-1.5 py-0.5 text-[10px]">{{ $counts[$category->slug] ?? 0 }}</span>
            </a>
        @endforeach
    </div>

    {{-- Grade filter --}}
    <div class="mb-6 flex flex-wrap items-center gap-2">
        <a href="{{ route('reading-course.index', request()->except(['sinf', 'page'])) }}"
           class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 text-xs font-medium transition-colors
               {{ ! request('sinf') ? 'bg-sky-600 text-white' : 'bg-white border border-slate-200 text-slate-500 hover:border-slate-300' }}">
            Barcha sinflar
        </a>
        @foreach ($grades as $grade)
            <a href="{{ route('reading-course.index', request()->except('page') + ['sinf' => $grade]) }}"
               class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 text-xs font-medium transition-colors
                   {{ (int) request('sinf') === $grade ? 'bg-sky-600 text-white' : 'bg-white border border-slate-200 text-slate-500 hover:border-slate-300' }}">
                {{ $grade }}-sinf
                <span class="rounded-full bg-black/10 px-1.5 py-0.5 text-[10px]">{{ $gradeCounts[$grade] ?? 0 }}</span>
            </a>
        @endforeach
    </div>

    <form method="GET" class="mb-6 flex flex-wrap items-center gap-3">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('sinf'))
            <input type="hidden" name="sinf" value="{{ request('sinf') }}">
        @endif
        <div class="relative flex-1 min-w-[200px]">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Darslik nomi bo'yicha qidirish..."
                   class="w-full rounded-lg border border-slate-300 py-2 pl-9 pr-3 text-sm focus:border-indigo-500 focus:ring-indigo-500">
            <span class="pointer-events-none absolute left-2.5 top-2.5 text-slate-400"><x-icon name="search" class="h-4 w-4" /></span>
        </div>
        <button class="rounded-lg bg-slate-800 px-4 py-2 text-sm font-medium text-white hover:bg-slate-900">Qidirish</button>
    </form>

    @if ($textbooks->isEmpty())
        <x-ui.empty-state title="Darsliklar topilmadi" icon="doc">Filtrlarni o'zgartiring yoki keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($textbooks as $textbook)
                @php
                    $meta = $categoryMeta[$textbook->category?->slug] ?? ['icon' => 'doc', 'color' => 'bg-slate-100 text-slate-600', 'ring' => 'border-slate-200'];
                    $bytes = (int) $textbook->file_size;
                    $size = $bytes >= 1048576
                        ? number_format($bytes / 1048576, 1).' MB'
                        : number_format(max($bytes, 0) / 1024, 0).' KB';
                @endphp
                <div class="flex flex-col rounded-2xl border {{ $meta['ring'] }} bg-white p-5 transition hover:shadow-md">
                    <div class="mb-3 flex items-center justify-between">
                        <span class="grid h-11 w-11 place-items-center rounded-xl {{ $meta['color'] }}">
                            <x-icon :name="$meta['icon']" class="h-5 w-5" />
                        </span>
                        <x-resource.file-badge :extension="$textbook->extension" />
                    </div>

                    @if ($textbook->category)
                        <span class="mb-2 inline-block w-fit rounded-md {{ $meta['color'] }} px-2 py-0.5 text-[11px] font-semibold uppercase tracking-wide">
                            {{ $textbook->category->name }}
                        </span>
                    @endif

                    <h3 class="font-semibold text-slate-800 leading-snug">{{ $textbook->title }}</h3>
                    @if ($textbook->description)
                        <p class="mt-1 line-clamp-2 text-sm text-slate-500">{{ $textbook->description }}</p>
                    @endif

                    <div class="mt-3 flex items-center gap-3 text-xs text-slate-400">
                        <span>{{ $size }}</span>
                        <span>·</span>
                        <span class="inline-flex items-center gap-1"><x-icon name="download" class="h-3.5 w-3.5" /> {{ $textbook->download_count }}</span>
                    </div>

                    <a href="{{ route('resources.download', $textbook->slug) }}"
                       class="mt-4 inline-flex items-center justify-center gap-2 rounded-lg bg-slate-800 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-900">
                        <x-icon name="download" class="h-4 w-4" /> Yuklab olish
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-6">{{ $textbooks->links() }}</div>
    @endif
@endsection
