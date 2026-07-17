@extends('layouts.app')

@section('title', $tale->title)

@section('content')
    <x-breadcrumbs :items="[
        ['label' => '101 o\'qish kursi', 'url' => route('reading-course.index')],
        ['label' => 'Ertaklar va audiolar', 'url' => route('fairy-tales.index')],
        ['label' => $tale->title, 'url' => null],
    ]" />

    <div class="mx-auto max-w-3xl">
        <div class="mb-6 flex items-center gap-3">
            @if ($tale->category)
                <span class="inline-block rounded-md bg-emerald-100 text-emerald-700 px-2.5 py-1 text-xs font-semibold uppercase tracking-wide">
                    {{ $tale->category->name }}
                </span>
            @endif
        </div>

        <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 leading-tight">{{ $tale->title }}</h1>

        @if (! empty($tale->meta['audio_path'] ?? null))
            <div class="mt-5 rounded-2xl border border-sky-200 bg-sky-50 p-4">
                <div class="mb-2 flex items-center gap-2 text-sm font-semibold text-sky-800">
                    <x-icon name="play" class="h-4 w-4" /> Ertakni tinglang
                </div>
                <audio controls preload="none" class="w-full" src="{{ asset('storage/'.$tale->meta['audio_path']) }}">
                    Brauzeringiz audio elementini qo'llab-quvvatlamaydi.
                </audio>
            </div>
        @endif

        <article class="prose prose-slate mt-8 max-w-none prose-p:leading-relaxed">
            {!! $tale->body !!}
        </article>

        @if ($related->isNotEmpty())
            <div class="mt-10 border-t border-slate-200 pt-6">
                <h2 class="mb-4 text-lg font-bold text-slate-800">Shu sinf uchun boshqa ertaklar</h2>
                <div class="grid gap-3 sm:grid-cols-2">
                    @foreach ($related as $item)
                        <a href="{{ route('fairy-tales.show', $item->slug) }}"
                           class="flex items-center gap-3 rounded-xl border border-slate-200 bg-white p-3 hover:border-emerald-300 hover:shadow-sm transition">
                            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-lg bg-emerald-100 text-emerald-700">
                                <x-icon name="book" class="h-4 w-4" />
                            </span>
                            <span class="text-sm font-medium text-slate-700">{{ $item->title }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="mt-8">
            <a href="{{ route('fairy-tales.index') }}" class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <x-icon name="doc" class="h-4 w-4 rotate-180" /> Barcha ertaklarga qaytish
            </a>
        </div>
    </div>
@endsection
