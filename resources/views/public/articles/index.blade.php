@extends('layouts.app')

@section('title', 'Ilmiy maqolalar')

@section('content')
    <x-breadcrumbs :items="[['label' => 'Ilmiy maqolalar', 'url' => null]]" />

    @php
        $categoryMeta = [
            'xalqaro-ilmiy-maqolalar' => ['icon' => 'globe', 'color' => 'bg-sky-100 text-sky-700', 'accent' => 'from-sky-400 to-sky-500', 'tile' => 'bg-gradient-to-br from-sky-50 to-sky-100 text-sky-600'],
            'respublika-ilmiy-maqolalar' => ['icon' => 'star', 'color' => 'bg-amber-100 text-amber-700', 'accent' => 'from-amber-400 to-amber-500', 'tile' => 'bg-gradient-to-br from-amber-50 to-amber-100 text-amber-600'],
            'jurnal-ilmiy-maqolalar' => ['icon' => 'book', 'color' => 'bg-violet-100 text-violet-700', 'accent' => 'from-violet-400 to-violet-500', 'tile' => 'bg-gradient-to-br from-violet-50 to-violet-100 text-violet-600'],
        ];
        $defaultMeta = ['icon' => 'doc', 'color' => 'bg-slate-100 text-slate-600', 'accent' => 'from-slate-300 to-slate-400', 'tile' => 'bg-gradient-to-br from-slate-50 to-slate-100 text-slate-500'];
    @endphp

    {{-- Hero --}}
    <div class="relative mb-6 overflow-hidden rounded-3xl bg-gradient-to-br from-slate-950 via-slate-900 to-sky-900 p-7 shadow-sm sm:p-9">
        <div class="pointer-events-none absolute inset-0 opacity-[0.07]" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
        <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
        <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
        <div class="relative z-10 flex items-center gap-6">
            <div class="max-w-xl flex-1">
                <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="h-2 w-2 rounded-full bg-cyan-300 animate-pulse"></span>
                    Ilmiy-tadqiqot faoliyati
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Ilmiy maqolalar</h1>
                <p class="mt-3 max-w-xl text-sm leading-relaxed text-slate-300">
                    O'qish savodxonligini rivojlantirish yo'nalishida chop etilgan xalqaro va respublika
                    ilmiy-amaliy konferensiya materiallari hamda jurnal maqolalari to'plami.
                </p>
            </div>
            <div class="hidden shrink-0 items-center justify-center md:flex">
                <div class="relative grid h-32 w-32 place-items-center rounded-3xl bg-white/10 ring-1 ring-white/20 backdrop-blur-sm">
                    <x-icon name="library" class="h-14 w-14 text-white" stroke="1.2" />
                    <span class="absolute -right-2 -top-2 grid h-9 w-9 place-items-center rounded-full bg-sky-400 text-slate-950 shadow-lg ring-4 ring-slate-900">
                        <x-icon name="globe" class="h-4.5 w-4.5" stroke="2" />
                    </span>
                    <span class="absolute -bottom-2 -left-2 grid h-8 w-8 place-items-center rounded-full bg-amber-400 text-slate-950 shadow-lg ring-4 ring-slate-900">
                        <x-icon name="star" class="h-4 w-4" stroke="2" />
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{-- Stat cards --}}
    <div class="mb-8 grid grid-cols-2 gap-3 sm:grid-cols-4">
        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
            <div class="mb-2 grid h-9 w-9 place-items-center rounded-xl bg-slate-100 text-slate-600">
                <x-icon name="doc" class="h-4.5 w-4.5" />
            </div>
            <p class="text-xl font-extrabold text-slate-900">{{ $counts['total'] }}</p>
            <p class="text-xs text-slate-500">Jami maqola</p>
        </div>
        @foreach ($categories as $category)
            @php $meta = $categoryMeta[$category->slug] ?? ['icon' => 'doc', 'color' => 'bg-slate-100 text-slate-600']; @endphp
            <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                <div class="mb-2 grid h-9 w-9 place-items-center rounded-xl {{ $meta['color'] }}">
                    <x-icon :name="$meta['icon']" class="h-4.5 w-4.5" />
                </div>
                <p class="text-xl font-extrabold text-slate-900">{{ $counts[$category->slug] ?? 0 }}</p>
                <p class="text-xs text-slate-500">{{ $category->name }}</p>
            </div>
        @endforeach
    </div>

    {{-- Filters + search --}}
    <div class="mb-8 rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
        <div class="mb-4 flex flex-wrap gap-2">
            <a href="{{ route('articles.index', request()->except(['category', 'page'])) }}"
               class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-xs font-semibold transition-colors
                   {{ ! request('category') ? 'bg-slate-900 text-white' : 'border border-slate-200 bg-white text-slate-600 hover:border-slate-300' }}">
                Barchasi
                <span class="rounded-full bg-black/10 px-1.5 py-0.5 text-[10px]">{{ $counts['total'] }}</span>
            </a>
            @foreach ($categories as $category)
                <a href="{{ route('articles.index', request()->except('page') + ['category' => $category->slug]) }}"
                   class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-xs font-semibold transition-colors
                       {{ request('category') === $category->slug ? 'bg-slate-900 text-white' : 'border border-slate-200 bg-white text-slate-600 hover:border-slate-300' }}">
                    <x-icon :name="$categoryMeta[$category->slug]['icon'] ?? 'doc'" class="h-3.5 w-3.5" />
                    {{ $category->name }}
                    <span class="rounded-full bg-black/10 px-1.5 py-0.5 text-[10px]">{{ $counts[$category->slug] ?? 0 }}</span>
                </a>
            @endforeach
        </div>

        <form method="GET" class="flex flex-wrap items-center gap-3 border-t border-slate-100 pt-4">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="relative min-w-[200px] flex-1">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Maqola yoki jurnal nomi bo'yicha qidirish..."
                       class="w-full rounded-xl border border-slate-200 py-2.5 pl-9 pr-3 text-sm focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-300">
                <span class="pointer-events-none absolute left-3 top-3 text-slate-400"><x-icon name="search" class="h-4 w-4" /></span>
            </div>
            <select name="sort" onchange="this.form.submit()" class="rounded-xl border border-slate-200 px-3 py-2.5 text-sm text-slate-600 focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-300">
                <option value="newest" @selected(request('sort') !== 'most_downloaded')>Eng yangi</option>
                <option value="most_downloaded" @selected(request('sort') === 'most_downloaded')>Ko'p yuklangan</option>
            </select>
            <button class="rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-slate-800">Qidirish</button>
        </form>
    </div>

    @if ($articles->isEmpty())
        <x-ui.empty-state title="Maqolalar topilmadi" icon="doc">Filtrlarni o'zgartiring yoki keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($articles as $article)
                @php
                    $meta = $categoryMeta[$article->category?->slug] ?? $defaultMeta;
                    $bytes = (int) $article->file_size;
                    $size = $bytes >= 1048576
                        ? number_format($bytes / 1048576, 1).' MB'
                        : number_format(max($bytes, 0) / 1024, 0).' KB';
                @endphp
                <div class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                    <div class="h-1.5 w-full bg-gradient-to-r {{ $meta['accent'] }}"></div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="mb-3 flex items-center justify-between">
                            <span class="grid h-12 w-12 shrink-0 place-items-center rounded-xl {{ $meta['tile'] }} transition group-hover:scale-105">
                                <x-icon :name="$meta['icon']" class="h-5.5 w-5.5" />
                            </span>
                            <x-resource.file-badge :extension="$article->extension" />
                        </div>

                        @if ($article->category)
                            <span class="mb-2 inline-flex w-fit items-center gap-1 rounded-md {{ $meta['color'] }} px-2 py-0.5 text-[11px] font-semibold uppercase tracking-wide">
                                {{ $article->category->name }}
                            </span>
                        @endif

                        <h3 class="font-semibold leading-snug text-slate-800">{{ $article->title }}</h3>
                        @if ($article->description)
                            <p class="mt-1 line-clamp-2 text-sm text-slate-500">{{ $article->description }}</p>
                        @endif

                        <div class="mt-3 flex flex-1 items-end">
                            <div class="flex items-center gap-3 text-xs text-slate-400">
                                <span>{{ $size }}</span>
                                <span>·</span>
                                <span class="inline-flex items-center gap-1"><x-icon name="download" class="h-3.5 w-3.5" /> {{ $article->download_count }}</span>
                            </div>
                        </div>

                        <a href="{{ route('resources.download', $article->slug) }}"
                           class="mt-4 inline-flex items-center justify-center gap-2 rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-slate-800">
                            <x-icon name="download" class="h-4 w-4" /> Yuklab olish
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-6">{{ $articles->links() }}</div>
    @endif
@endsection
