@extends('layouts.app')

@section('title', 'Ilmiy maqolalar')

@section('content')
    <x-breadcrumbs :items="[['label' => 'Ilmiy maqolalar', 'url' => null]]" />

    @php
        $categoryMeta = [
            'xalqaro-ilmiy-maqolalar' => [
                'icon' => 'globe',
                'tag' => 'bg-violet-50 text-violet-700',
                'chip' => 'bg-violet-600/95 text-white',
                'stat' => 'bg-violet-100 text-violet-600',
            ],
            'respublika-ilmiy-maqolalar' => [
                'icon' => 'flag',
                'tag' => 'bg-sky-50 text-sky-700',
                'chip' => 'bg-sky-600/95 text-white',
                'stat' => 'bg-sky-100 text-sky-600',
            ],
            'jurnal-ilmiy-maqolalar' => [
                'icon' => 'book',
                'tag' => 'bg-amber-50 text-amber-700',
                'chip' => 'bg-amber-600/95 text-white',
                'stat' => 'bg-amber-100 text-amber-600',
            ],
        ];
        $defaultMeta = [
            'icon' => 'doc',
            'tag' => 'bg-slate-100 text-slate-600',
            'chip' => 'bg-slate-700/95 text-white',
            'stat' => 'bg-slate-100 text-slate-600',
        ];

        // Each of the 12 supplied photos is paired to a thematically matching
        // category pool, then deterministically assigned per article so a
        // given resource always shows the same cover across page loads.
        $imagePools = [
            'xalqaro-ilmiy-maqolalar' => [
                '01_globus_va_xalqaro_bayroqlar.png',
                '04_xalqaro_konferensiya_zali.png',
                '05_global_aloqa_xaritasi.png',
                '06_xalqaro_bayroqlar_toplami.png',
                '10_seminar_tinglovchilari.png',
            ],
            'respublika-ilmiy-maqolalar' => [
                '04_xalqaro_konferensiya_zali.png',
                '10_seminar_tinglovchilari.png',
                '03_kitoblar_va_qalamlar.png',
                '09_kitobga_yozayotgan_qol.png',
            ],
            'jurnal-ilmiy-maqolalar' => [
                '02_laptop_analitika_dashboard.png',
                '03_kitoblar_va_qalamlar.png',
                '07_laptopda_ishlash.png',
                '08_ochiq_kitob_va_kongilak.png',
                '09_kitobga_yozayotgan_qol.png',
                '11_ochiq_kitoblar_toplami.png',
                '12_kompyuter_data_dashboard.png',
            ],
        ];
        $fallbackPool = array_merge(...array_values($imagePools));

        $coverFor = function ($article) use ($imagePools, $fallbackPool) {
            $pool = $imagePools[$article->category?->slug] ?? $fallbackPool;

            return asset('images/ilmiy-maqolalar/'.$pool[$article->id % count($pool)]);
        };
    @endphp

    {{-- Hero --}}
    <section class="relative mb-8 overflow-hidden rounded-3xl border border-violet-100 bg-gradient-to-br from-violet-50 via-white to-sky-50 p-8 sm:p-10">
        <div class="relative z-10 flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
            <div class="max-w-2xl">
                <span class="mb-4 inline-flex items-center gap-1.5 rounded-full bg-violet-600/10 px-3 py-1 text-xs font-semibold text-violet-700 ring-1 ring-violet-600/20">
                    <span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span>
                    Ilmiy-tadqiqot faoliyati
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Ilmiy maqolalar</h1>
                <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                    O'qish savodxonligini rivojlantirish yo'nalishida chop etilgan xalqaro va respublika
                    ilmiy-amaliy konferensiya materiallari hamda ilmiy jurnal maqolalari to'plami.
                </p>

                <div class="mt-6 flex flex-wrap items-center gap-x-6 gap-y-2 text-xs font-medium text-slate-500">
                    <span class="inline-flex items-center gap-1.5"><x-icon name="check" class="h-4 w-4 text-violet-600" stroke="2" /> Ishonchli manba</span>
                    <span class="inline-flex items-center gap-1.5"><x-icon name="sparkle" class="h-4 w-4 text-violet-600" /> Doimiy yangilanib boradi</span>
                    <span class="inline-flex items-center gap-1.5"><x-icon name="download" class="h-4 w-4 text-violet-600" stroke="2" /> Oson yuklab olish</span>
                </div>
            </div>

            <div class="hidden shrink-0 items-center justify-center lg:flex">
                <div class="relative grid h-32 w-32 place-items-center rounded-3xl bg-white shadow-sm ring-1 ring-violet-100">
                    <x-icon name="library" class="h-14 w-14 text-violet-600" stroke="1.2" />
                    <span class="absolute -right-3 -top-3 grid h-10 w-10 place-items-center rounded-full bg-sky-500 text-white shadow-lg ring-4 ring-white">
                        <x-icon name="globe" class="h-4.5 w-4.5" stroke="2" />
                    </span>
                    <span class="absolute -bottom-3 -left-3 grid h-9 w-9 place-items-center rounded-full bg-amber-500 text-white shadow-lg ring-4 ring-white">
                        <x-icon name="star" class="h-4 w-4" stroke="2" />
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- Stat cards --}}
    <div class="mb-8 grid grid-cols-2 gap-3 sm:grid-cols-4">
        <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
            <div class="mb-2 grid h-9 w-9 place-items-center rounded-xl bg-violet-100 text-violet-600">
                <x-icon name="library" class="h-4.5 w-4.5" />
            </div>
            <p class="text-2xl font-extrabold text-slate-900">{{ $counts['total'] }}</p>
            <p class="text-xs font-semibold text-slate-700">Jami maqola</p>
            <p class="mt-0.5 text-[11px] text-slate-400">Barcha to'plamdagi maqolalar</p>
        </div>
        @foreach ($categories as $category)
            @php $meta = $categoryMeta[$category->slug] ?? $defaultMeta; @endphp
            <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                <div class="mb-2 grid h-9 w-9 place-items-center rounded-xl {{ $meta['stat'] }}">
                    <x-icon :name="$meta['icon']" class="h-4.5 w-4.5" />
                </div>
                <p class="text-2xl font-extrabold text-slate-900">{{ $counts[$category->slug] ?? 0 }}</p>
                <p class="text-xs font-semibold text-slate-700">{{ $category->name }}</p>
                <p class="mt-0.5 text-[11px] text-slate-400">
                    @if ($category->slug === 'xalqaro-ilmiy-maqolalar')
                        Xalqaro miqyosdagi nufuzli anjumanlar
                    @elseif ($category->slug === 'respublika-ilmiy-maqolalar')
                        Respublika ilmiy-amaliy anjumanlar
                    @else
                        Ilmiy jurnallarda chop etilgan maqolalar
                    @endif
                </p>
            </div>
        @endforeach
    </div>

    {{-- Filters + search --}}
    <div class="mb-8 rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
        <div class="mb-4 flex flex-wrap gap-2">
            <a href="{{ route('articles.index', request()->except(['category', 'page'])) }}"
               class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-xs font-semibold transition-colors
                   {{ ! request('category') ? 'bg-violet-600 text-white' : 'border border-slate-200 bg-white text-slate-600 hover:border-violet-200 hover:text-violet-700' }}">
                Barchasi
                <span class="rounded-full bg-black/10 px-1.5 py-0.5 text-[10px]">{{ $counts['total'] }}</span>
            </a>
            @foreach ($categories as $category)
                <a href="{{ route('articles.index', request()->except('page') + ['category' => $category->slug]) }}"
                   class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-xs font-semibold transition-colors
                       {{ request('category') === $category->slug ? 'bg-violet-600 text-white' : 'border border-slate-200 bg-white text-slate-600 hover:border-violet-200 hover:text-violet-700' }}">
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
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Maqola yoki jurnal nomi bo'yicha qidiring..."
                       class="w-full rounded-xl border border-slate-200 py-2.5 pl-9 pr-3 text-sm focus:border-violet-400 focus:outline-none focus:ring-1 focus:ring-violet-300">
                <span class="pointer-events-none absolute left-3 top-3 text-slate-400"><x-icon name="search" class="h-4 w-4" /></span>
            </div>
            <select name="sort" onchange="this.form.submit()" class="rounded-xl border border-slate-200 px-3 py-2.5 text-sm text-slate-600 focus:border-violet-400 focus:outline-none focus:ring-1 focus:ring-violet-300">
                <option value="newest" @selected(request('sort') !== 'most_downloaded')>Eng yangi</option>
                <option value="most_downloaded" @selected(request('sort') === 'most_downloaded')>Ko'p yuklangan</option>
            </select>
            <button class="rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-violet-700">Qidirish</button>
        </form>
    </div>

    @if ($articles->isEmpty())
        <x-ui.empty-state title="Maqolalar topilmadi" icon="doc">Filtrlarni o'zgartiring yoki keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($articles as $article)
                @php
                    $meta = $categoryMeta[$article->category?->slug] ?? $defaultMeta;
                    $bytes = (int) $article->file_size;
                    $size = $bytes >= 1048576
                        ? number_format($bytes / 1048576, 1).' MB'
                        : number_format(max($bytes, 0) / 1024, 0).' KB';
                    $year = $article->published_at?->format('Y');
                @endphp
                <article class="group flex h-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative aspect-[4/3] w-full shrink-0 overflow-hidden bg-slate-100" data-pdf-preview data-pdf-url="{{ $article->fileUrl() }}">
                        <img src="{{ $coverFor($article) }}" alt="" loading="lazy"
                             class="pdf-fallback-img absolute inset-0 h-full w-full object-cover object-top transition-opacity duration-500">
                        <canvas class="pdf-canvas absolute inset-0 h-full w-full object-cover object-top opacity-0 transition-opacity duration-500"></canvas>
                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/15 via-transparent to-transparent"></div>

                        <span class="absolute left-3 top-3 inline-flex items-center rounded-md bg-white/95 px-2 py-1 text-[10px] font-bold uppercase tracking-wide text-red-600 shadow-sm">
                            PDF
                        </span>
                        @if ($year)
                            <span class="absolute right-3 top-3 inline-flex items-center rounded-full {{ $meta['chip'] }} px-2.5 py-1 text-[10px] font-semibold shadow-sm">
                                {{ $year }}
                            </span>
                        @endif
                    </div>

                    <div class="flex flex-1 flex-col p-5">
                        @if ($article->category)
                            <span class="mb-2 inline-flex w-fit items-center gap-1 rounded-md {{ $meta['tag'] }} px-2 py-0.5 text-[11px] font-semibold uppercase tracking-wide">
                                {{ $article->category->name }}
                            </span>
                        @endif

                        <h3 class="min-h-[2.75rem] font-semibold leading-snug text-slate-900 line-clamp-2">{{ $article->title }}</h3>
                        @if ($article->description)
                            <p class="mt-1 line-clamp-1 text-sm text-slate-500">{{ $article->description }}</p>
                        @endif

                        <div class="mt-3 flex flex-1 items-end">
                            <div class="flex items-center gap-3 text-xs text-slate-400">
                                <span>{{ $size }}</span>
                                <span>&middot;</span>
                                <span class="inline-flex items-center gap-1"><x-icon name="download" class="h-3.5 w-3.5" /> {{ $article->download_count }}</span>
                            </div>
                        </div>

                        <a href="{{ route('resources.download', $article->slug) }}"
                           class="mt-4 inline-flex items-center justify-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-violet-700">
                            <x-icon name="download" class="h-4 w-4" /> Yuklab olish
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-6">{{ $articles->links() }}</div>

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
                        // PDF could not be rendered (e.g. unreachable file) — the asset image stays visible.
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
@endsection
