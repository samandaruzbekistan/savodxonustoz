@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <x-breadcrumbs :items="[...$ancestors, ['label' => $category->name, 'url' => null]]" />

    <x-section.banner :category="$category" />

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
