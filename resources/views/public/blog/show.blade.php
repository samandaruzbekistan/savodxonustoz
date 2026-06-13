@extends('layouts.app')

@section('title', $content->title)

@section('content')
    <x-breadcrumbs :items="[['label' => 'Blog', 'url' => route('blog.index')], ['label' => $content->title, 'url' => null]]" />

    <article class="mx-auto max-w-3xl">
        <span class="inline-flex items-center gap-1.5 rounded-full bg-rose-100 px-2.5 py-0.5 text-xs font-semibold text-rose-700">
            <x-icon :name="$content->type->icon()" class="h-3.5 w-3.5" />
            {{ $content->type->label() }}
        </span>

        <h1 class="mt-3 text-3xl font-bold leading-tight text-slate-800 sm:text-4xl">{{ $content->title }}</h1>

        <div class="mt-4 flex flex-wrap items-center gap-4 text-sm text-slate-400">
            @if ($content->author)
                <span class="flex items-center gap-1.5"><x-icon name="users" class="h-4 w-4" /> {{ $content->author->name }}</span>
            @endif
            @if ($content->published_at)
                <span class="flex items-center gap-1.5"><x-icon name="news" class="h-4 w-4" /> {{ $content->published_at->translatedFormat('d M Y') }}</span>
            @endif
            <span class="flex items-center gap-1.5"><x-icon name="globe" class="h-4 w-4" /> {{ $content->view_count }} marta o'qilgan</span>
        </div>

        @if ($content->cover_image)
            <img src="{{ \Illuminate\Support\Facades\Storage::url($content->cover_image) }}" alt="" class="mt-6 w-full rounded-2xl object-cover">
        @endif

        @if ($content->excerpt)
            <p class="mt-6 text-lg font-medium text-slate-600">{{ $content->excerpt }}</p>
        @endif

        @if ($content->body)
            <div class="prose-content mt-6 max-w-none text-slate-700">{!! $content->body !!}</div>
        @endif

        @if ($content->tags->isNotEmpty())
            <div class="mt-8 flex flex-wrap gap-2">
                @foreach ($content->tags as $tag)
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600">#{{ $tag->name }}</span>
                @endforeach
            </div>
        @endif
    </article>

    @if ($related->isNotEmpty())
        <section class="mx-auto mt-12 max-w-5xl border-t border-slate-200 pt-8">
            <h2 class="mb-5 text-lg font-semibold text-slate-800">O'xshash yozuvlar</h2>
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($related as $post)
                    <x-blog.card :post="$post" />
                @endforeach
            </div>
        </section>
    @endif
@endsection
