@extends('layouts.app')

@section('title', $content->title)

@section('content')
    <x-breadcrumbs :items="[...$ancestors, ['label' => $content->title, 'url' => null]]" />

    <article class="grid gap-8 lg:grid-cols-[1fr_280px]">
        <div>
            <span class="text-xs font-semibold uppercase tracking-wide text-indigo-600">{{ $content->type->label() }}</span>
            <h1 class="mt-1 text-2xl font-bold text-slate-800 sm:text-3xl">{{ $content->title }}</h1>

            @if ($content->cover_image)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($content->cover_image) }}" alt="" class="mt-5 w-full rounded-2xl object-cover">
            @endif

            @if ($content->meta['goal'] ?? false)
                <div class="mt-6 rounded-xl border-l-4 border-indigo-500 bg-indigo-50 p-4">
                    <h2 class="text-sm font-semibold uppercase tracking-wide text-indigo-700">Sahifaning maqsadi</h2>
                    <p class="mt-1 text-slate-700">{!! nl2br(e($content->meta['goal'])) !!}</p>
                </div>
            @endif

            @if ($content->body)
                <div class="prose-content mt-6 max-w-none text-slate-700">{!! $content->body !!}</div>
            @endif

            @php
                $blocks = [
                    'examples' => 'Amaliy misollar',
                    'tasks' => 'Savol-topshiriqlar',
                    'expected_result' => 'Kutiladigan natija',
                ];
            @endphp
            @foreach ($blocks as $key => $label)
                @if ($content->meta[$key] ?? false)
                    <section class="mt-6 rounded-xl border border-slate-200 bg-white p-5">
                        <h2 class="mb-2 text-lg font-semibold text-slate-800">{{ $label }}</h2>
                        <div class="text-slate-700">{!! nl2br(e($content->meta[$key])) !!}</div>
                    </section>
                @endif
            @endforeach

            @if ($content->tags->isNotEmpty())
                <div class="mt-8 flex flex-wrap gap-2">
                    @foreach ($content->tags as $tag)
                        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600">#{{ $tag->name }}</span>
                    @endforeach
                </div>
            @endif
        </div>

        @if ($content->children->isNotEmpty())
            <aside>
                <div class="sticky top-20 rounded-2xl border border-slate-200 bg-white p-5">
                    <h2 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-500">Ichki mavzular</h2>
                    <ul class="space-y-2">
                        @foreach ($content->children as $child)
                            <li>
                                <a href="{{ route('contents.show', $child->slug) }}" class="text-sm text-slate-600 hover:text-indigo-700">{{ $child->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        @endif
    </article>
@endsection
