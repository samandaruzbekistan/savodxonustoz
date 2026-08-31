@extends('layouts.app')

@section('title', 'Ertaklar va audiolar')

@section('content')
    <x-breadcrumbs :items="[['label' => '101 o\'qish kursi', 'url' => route('reading-course.index')], ['label' => 'Ertaklar va audiolar', 'url' => null]]" />

    @php
        $navItems = [
            ['label' => "Ertaklar va audiolar", 'icon' => 'book', 'color' => 'bg-emerald-100 text-emerald-700', 'href' => route('reading-course.index'), 'active' => true],
            ['label' => "Darsliklar (PDF)", 'icon' => 'library', 'color' => 'bg-sky-100 text-sky-600', 'href' => route('reading-course.textbooks')],
            ['label' => "Yutuqlaring", 'icon' => 'star', 'color' => 'bg-amber-100 text-amber-600', 'href' => '#yutuqlarim'],
            ['label' => "Sevimlilar", 'icon' => 'heart', 'color' => 'bg-rose-100 text-rose-600', 'soon' => true],
            ['label' => "Sozlamalar", 'icon' => 'settings', 'color' => 'bg-slate-100 text-slate-500', 'soon' => true],
        ];
    @endphp

    <div class="grid gap-5 lg:grid-cols-[240px_1fr_300px]">
        <x-reading-course.nav-sidebar :items="$navItems" tip="Har kuni kamida bitta ertak bilan ishlang va o'z natijangizni yaxshilang." />

        <div class="min-w-0">
            {{-- Hero --}}
            <div class="mb-8 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 45%, #0369a1 100%);">
                <div class="relative px-8 py-8 flex gap-6 items-center">
                    <div class="flex-1 min-w-0">
                        <div class="inline-flex items-center gap-2 rounded-full bg-white/20 px-3 py-1 mb-4">
                            <span class="h-2 w-2 rounded-full bg-cyan-300 animate-pulse"></span>
                            <span class="text-xs font-semibold text-white/90">1-4-sinflar uchun</span>
                        </div>
                        <h1 class="text-3xl font-extrabold tracking-tight text-white leading-tight">Ertaklar va audiolar</h1>
                        <p class="mt-3 text-slate-200 leading-relaxed max-w-xl text-sm">
                            Har bir ertak matni, yangi so'zlari va topshiriqlari bilan birga, ovoz bilan o'qib berilgan audiosi ham mavjud.
                        </p>
                        <div class="mt-5 flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-white/20 border border-white/30 px-3 py-1 text-xs font-semibold text-white">
                                <x-icon name="book" class="h-3.5 w-3.5" /> {{ $counts['total'] }} ta ertak
                            </span>
                        </div>
                    </div>
                    <div class="hidden md:flex shrink-0 items-center justify-center">
                        <img src="{{ asset('images/ertaklar-va-audiolar/ertaklar-va-audiolar.png') }}"
                             alt="" class="h-64 w-64 object-contain drop-shadow-2xl">
                    </div>
                </div>
            </div>

            {{-- Grade filter --}}
            <div class="mb-6 flex flex-wrap items-center gap-2">
                <a href="{{ route('fairy-tales.index', request()->except(['sinf', 'page'])) }}"
                   class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-xs font-semibold transition-colors
                       {{ ! request('sinf') ? 'bg-slate-800 text-white' : 'bg-white border border-slate-200 text-slate-600 hover:border-slate-300' }}">
                    Barchasi
                    <span class="rounded-full bg-black/10 px-1.5 py-0.5 text-[10px]">{{ $counts['total'] }}</span>
                </a>
                @foreach ($grades as $grade)
                    @php $gradeNum = (int) $grade->slug; @endphp
                    <a href="{{ route('fairy-tales.index', request()->except('page') + ['sinf' => $gradeNum]) }}"
                       class="inline-flex items-center gap-1.5 rounded-full px-4 py-2 text-xs font-semibold transition-colors
                           {{ (int) request('sinf') === $gradeNum ? 'bg-slate-800 text-white' : 'bg-white border border-slate-200 text-slate-600 hover:border-slate-300' }}">
                        {{ $grade->name }}
                        <span class="rounded-full bg-black/10 px-1.5 py-0.5 text-[10px]">{{ $counts[$grade->slug] ?? 0 }}</span>
                    </a>
                @endforeach
            </div>

            <form method="GET" class="mb-6 flex flex-wrap items-center gap-3">
                @if (request('sinf'))
                    <input type="hidden" name="sinf" value="{{ request('sinf') }}">
                @endif
                <div class="relative flex-1 min-w-[200px]">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Ertak nomi bo'yicha qidirish..."
                           class="w-full rounded-lg border border-slate-300 py-2 pl-9 pr-3 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <span class="pointer-events-none absolute left-2.5 top-2.5 text-slate-400"><x-icon name="search" class="h-4 w-4" /></span>
                </div>
                <button class="rounded-lg bg-slate-800 px-4 py-2 text-sm font-medium text-white hover:bg-slate-900">Qidirish</button>
            </form>

            @if ($tales->isEmpty())
                <x-ui.empty-state title="Ertaklar topilmadi" icon="book">Filtrlarni o'zgartiring yoki keyinroq qayting.</x-ui.empty-state>
            @else
                <div class="su-stagger grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($tales as $tale)
                        <x-fairy-tale.card :tale="$tale" />
                    @endforeach
                </div>
                <div class="mt-6">{{ $tales->links() }}</div>
            @endif
        </div>

        <x-reading-course.progress-sidebar
            :achievements="$achievements"
            :total-ertaklar="$totalErtaklar"
            tip="Yangi so'zlarni ovoz chiqarib takrorlang — shunda ular tezroq esda qoladi." />
    </div>
@endsection
