@extends('layouts.app')

@section('title', 'Blog va yangiliklar')

@section('content')
    <x-breadcrumbs :items="[['label' => 'Blog', 'url' => null]]" />

    <header class="mb-8 flex items-start gap-5 rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-rose-50/40 p-6">
        <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-rose-100 text-rose-600">
            <x-icon name="news" class="h-7 w-7" />
        </span>
        <div>
            <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">Blog va yangiliklar</h1>
            <p class="mt-2 max-w-3xl text-slate-500">O'qish savodxonligi bo'yicha metodik maqolalar, tavsiyalar va platforma yangiliklari.</p>
        </div>
    </header>

    @php
        $tabs = [
            ['key' => null, 'label' => 'Barchasi'],
            ['key' => 'blog', 'label' => 'Maqolalar'],
            ['key' => 'news', 'label' => 'Yangiliklar'],
        ];
    @endphp
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <div class="flex flex-wrap gap-2">
            @foreach ($tabs as $tab)
                @php $active = ($activeType?->value) === $tab['key']; @endphp
                <a href="{{ route('blog.index', array_filter(['type' => $tab['key'], 'search' => request('search')])) }}"
                   class="rounded-full px-4 py-1.5 text-sm font-medium transition {{ $active ? 'bg-rose-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">
                    {{ $tab['label'] }}
                </a>
            @endforeach
        </div>
        <form method="GET" class="relative min-w-[200px]">
            @if ($activeType)<input type="hidden" name="type" value="{{ $activeType->value }}">@endif
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Maqola qidirish..."
                   class="w-full rounded-lg border border-slate-300 py-2 pl-9 pr-3 text-sm focus:border-rose-500 focus:ring-rose-500">
            <span class="pointer-events-none absolute left-2.5 top-2.5 text-slate-400"><x-icon name="search" class="h-4 w-4" /></span>
        </form>
    </div>

    @if ($featured && $posts->currentPage() === 1)
        <a href="{{ route('blog.show', $featured->slug) }}" class="group mb-8 grid overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:border-rose-300 hover:shadow-md md:grid-cols-2">
            @if ($featured->cover_image)
                <div class="relative h-56 overflow-hidden md:h-full">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($featured->cover_image) }}" alt="" class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                </div>
            @else
                <div class="flex h-56 items-center justify-center bg-gradient-to-br from-rose-50 to-rose-100 md:h-full">
                    <x-icon :name="$featured->type->icon()" class="h-24 w-24 text-rose-200" stroke="1.2" />
                </div>
            @endif
            <div class="flex flex-col justify-center p-6 sm:p-8">
                <span class="mb-2 inline-flex w-fit items-center gap-1.5 rounded-full bg-rose-100 px-2.5 py-0.5 text-xs font-semibold text-rose-700">
                    <x-icon name="sparkle" class="h-3.5 w-3.5" /> Tanlangan
                </span>
                <h2 class="text-xl font-bold text-slate-800 group-hover:text-rose-700 sm:text-2xl">{{ $featured->title }}</h2>
                @if ($featured->excerpt)
                    <p class="mt-2 text-slate-500">{{ $featured->excerpt }}</p>
                @endif
                @if ($featured->published_at)
                    <span class="mt-4 text-xs text-slate-400">{{ $featured->published_at->translatedFormat('d M Y') }}</span>
                @endif
            </div>
        </a>
    @endif

    @if ($posts->isEmpty())
        <x-ui.empty-state title="Maqolalar topilmadi" icon="news">Hozircha bu bo'limda yozuvlar yo'q. Keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <x-blog.card :post="$post" />
            @endforeach
        </div>
        <div class="mt-8">{{ $posts->links() }}</div>
    @endif
@endsection
