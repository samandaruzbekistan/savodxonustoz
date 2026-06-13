@extends('layouts.app')

@section('title', 'Resurslar')

@section('content')
    <x-breadcrumbs :items="[['label' => 'Resurslar', 'url' => null]]" />

    <header class="mb-8 flex items-start gap-5 rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-6">
        <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-sky-100 text-sky-600">
            <x-icon name="download" class="h-7 w-7" />
        </span>
        <div>
            <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">Resurs markazi</h1>
            <p class="mt-2 max-w-3xl text-slate-500">Darslar uchun metodik qo'llanmalar, ishlanmalar va materiallarni yuklab oling.</p>
        </div>
    </header>

    <form method="GET" class="mb-6 flex flex-wrap items-center gap-3">
        <div class="relative flex-1 min-w-[200px]">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Resurs qidirish..."
                   class="w-full rounded-lg border border-slate-300 py-2 pl-9 pr-3 text-sm focus:border-indigo-500 focus:ring-indigo-500">
            <span class="pointer-events-none absolute left-2.5 top-2.5 text-slate-400"><x-icon name="search" class="h-4 w-4" /></span>
        </div>
        <select name="category" onchange="this.form.submit()" class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
            <option value="">Barcha kategoriyalar</option>
            @foreach ($categories as $category)
                <option value="{{ $category->slug }}" @selected(request('category') === $category->slug)>{{ $category->name }}</option>
            @endforeach
        </select>
        <select name="extension" onchange="this.form.submit()" class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
            <option value="">Barcha turlar</option>
            @foreach ($extensions as $value => $label)
                <option value="{{ $value }}" @selected(request('extension') === $value)>{{ $label }}</option>
            @endforeach
        </select>
        <select name="sort" onchange="this.form.submit()" class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
            <option value="newest" @selected(request('sort') !== 'most_downloaded')>Eng yangi</option>
            <option value="most_downloaded" @selected(request('sort') === 'most_downloaded')>Ko'p yuklangan</option>
        </select>
        <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">Qidirish</button>
    </form>

    @if ($resources->isEmpty())
        <x-ui.empty-state title="Resurslar topilmadi" icon="download">Filtrlarni o'zgartiring yoki keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($resources as $resource)
                <x-resource.card :resource="$resource" />
            @endforeach
        </div>
        <div class="mt-6">{{ $resources->links() }}</div>
    @endif
@endsection
