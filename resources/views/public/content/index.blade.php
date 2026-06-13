@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <x-breadcrumbs :items="[...$ancestors, ['label' => $category->name, 'url' => null]]" />

    @php
        $catMeta = [
            'nazariya' => ['icon' => 'book', 'wrap' => 'bg-indigo-100 text-indigo-600'],
            'metodik-modul' => ['icon' => 'cap', 'wrap' => 'bg-violet-100 text-violet-600'],
            'xalqaro-tajriba' => ['icon' => 'globe', 'wrap' => 'bg-teal-100 text-teal-600'],
        ];
        $meta = $catMeta[$category->slug] ?? ['icon' => 'folder', 'wrap' => 'bg-slate-100 text-slate-500'];
    @endphp
    <header class="mb-8 flex items-start gap-5 rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-6">
        <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl {{ $meta['wrap'] }}">
            <x-icon :name="$meta['icon']" class="h-7 w-7" />
        </span>
        <div>
            <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">{{ $category->name }}</h1>
            @if ($category->description)
                <p class="mt-2 max-w-3xl text-slate-500">{{ $category->description }}</p>
            @endif
        </div>
    </header>

    @if ($children->isNotEmpty())
        <div class="mb-8 flex flex-wrap gap-2">
            @foreach ($children as $child)
                <a href="{{ route('sections.show', $child->slug) }}" class="rounded-full border border-slate-200 bg-white px-4 py-1.5 text-sm font-medium text-slate-600 hover:border-indigo-300 hover:text-indigo-700">{{ $child->name }}</a>
            @endforeach
        </div>
    @endif

    @if ($contents->isEmpty())
        <x-ui.empty-state title="Bu bo'limda hozircha material yo'q" icon="folder">Boshqa bo'limlarni ko'rib chiqing yoki keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($contents as $item)
                <x-content.card :item="$item" />
            @endforeach
        </div>
        <div class="mt-6">{{ $contents->links() }}</div>
    @endif
@endsection
