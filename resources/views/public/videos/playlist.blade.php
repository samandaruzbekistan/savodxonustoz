@extends('layouts.app')

@section('title', $playlist->title)

@section('content')
    <x-breadcrumbs :items="[['label' => 'Videolar', 'url' => route('videos.index')], ['label' => $playlist->title, 'url' => null]]" />

    <header class="mb-8 flex items-start gap-5 rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-6">
        <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-rose-100 text-rose-600">
            <x-icon name="play" class="h-7 w-7" />
        </span>
        <div>
            <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">{{ $playlist->title }}</h1>
            @if ($playlist->description)
                <p class="mt-2 max-w-3xl text-slate-500">{{ $playlist->description }}</p>
            @endif
            <p class="mt-1 text-sm text-slate-400">{{ $playlist->videos->count() }} ta video</p>
        </div>
    </header>

    @if ($playlist->videos->isEmpty())
        <x-ui.empty-state title="Pleylist bo'sh" icon="play">Bu pleylistda hozircha video yo'q.</x-ui.empty-state>
    @else
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($playlist->videos as $video)
                <x-video.card :video="$video" />
            @endforeach
        </div>
    @endif
@endsection
