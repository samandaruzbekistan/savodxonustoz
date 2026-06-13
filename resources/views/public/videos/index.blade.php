@extends('layouts.app')

@section('title', 'Videolar')

@section('content')
    <x-breadcrumbs :items="[['label' => 'Videolar', 'url' => null]]" />

    <header class="mb-8 flex items-start gap-5 rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-6">
        <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-rose-100 text-rose-600">
            <x-icon name="play" class="h-7 w-7" />
        </span>
        <div>
            <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">Video kutubxona</h1>
            <p class="mt-2 max-w-3xl text-slate-500">O'qish savodxonligi bo'yicha video darslar, metodik tavsiyalar va amaliy mashg'ulotlar.</p>
        </div>
    </header>

    @if ($playlists->isNotEmpty())
        <section class="mb-8">
            <h2 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-400">Pleylistlar</h2>
            <div class="flex gap-3 overflow-x-auto pb-2">
                @foreach ($playlists as $playlist)
                    <x-video.playlist-card :playlist="$playlist" />
                @endforeach
            </div>
        </section>
    @endif

    <form method="GET" class="mb-6 flex flex-wrap items-center gap-3">
        <div class="relative min-w-[200px] flex-1">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Video qidirish..."
                   class="w-full rounded-lg border border-slate-300 py-2 pl-9 pr-3 text-sm focus:border-indigo-500 focus:ring-indigo-500">
            <span class="pointer-events-none absolute left-2.5 top-2.5 text-slate-400"><x-icon name="search" class="h-4 w-4" /></span>
        </div>
        <select name="category" onchange="this.form.submit()" class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
            <option value="">Barcha kategoriyalar</option>
            @foreach ($categories as $category)
                <option value="{{ $category->slug }}" @selected(request('category') === $category->slug)>{{ $category->name }}</option>
            @endforeach
        </select>
        <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">Qidirish</button>
    </form>

    @if ($videos->isEmpty())
        <x-ui.empty-state title="Videolar topilmadi" icon="play">Filtrlarni o'zgartiring yoki keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($videos as $video)
                <x-video.card :video="$video" />
            @endforeach
        </div>
        <div class="mt-6">{{ $videos->links() }}</div>
    @endif
@endsection
