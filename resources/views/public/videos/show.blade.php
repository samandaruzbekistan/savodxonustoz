@extends('layouts.app')

@section('title', $video->title)

@section('content')
    <x-breadcrumbs :items="[['label' => 'Videolar', 'url' => route('videos.index')], ['label' => $video->title, 'url' => null]]" />

    <div class="grid gap-8 lg:grid-cols-[1fr_320px]">
        <div>
            <x-video.embed :video="$video" />

            <h1 class="mt-5 text-2xl font-bold text-slate-800">{{ $video->title }}</h1>
            <p class="mt-1 text-sm text-slate-400">{{ $video->view_count }} marta ko'rilgan @if ($video->category) · {{ $video->category->name }}@endif</p>

            @if ($video->description)
                <div class="prose-content mt-5 max-w-none text-slate-700">{!! nl2br(e($video->description)) !!}</div>
            @endif

            @if ($video->tags->isNotEmpty())
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($video->tags as $tag)
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600">#{{ $tag->name }}</span>
                    @endforeach
                </div>
            @endif

            @if ($video->playlists->isNotEmpty())
                <div class="mt-6">
                    <h2 class="mb-2 text-sm font-semibold uppercase tracking-wide text-slate-400">Pleylistlar</h2>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($video->playlists as $playlist)
                            <a href="{{ route('playlists.show', $playlist->slug) }}" class="rounded-full border border-slate-200 bg-white px-4 py-1.5 text-sm font-medium text-slate-600 hover:border-rose-300 hover:text-rose-700">{{ $playlist->title }}</a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        @if ($related->isNotEmpty())
            <aside>
                <h2 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-400">O'xshash videolar</h2>
                <div class="space-y-4">
                    @foreach ($related as $item)
                        <x-video.card :video="$item" />
                    @endforeach
                </div>
            </aside>
        @endif
    </div>
@endsection
