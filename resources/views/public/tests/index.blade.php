@extends('layouts.app')

@section('title', 'Testlar')

@section('content')
    <x-breadcrumbs :items="[['label' => 'Testlar', 'url' => null]]" />

    <header class="mb-8 flex items-start gap-5 rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-emerald-50/40 p-6">
        <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-emerald-100 text-emerald-600">
            <x-icon name="clipboard" class="h-7 w-7" />
        </span>
        <div>
            <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">Testlar va diagnostika</h1>
            <p class="mt-2 max-w-3xl text-slate-500">O'qish savodxonligi bo'yicha bilimingizni sinab ko'ring — PIRLS uslubidagi savollar bilan.</p>
        </div>
    </header>

    <form method="GET" class="mb-6 flex flex-wrap items-center gap-3">
        <div class="relative min-w-[200px] flex-1">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Test qidirish..."
                   class="w-full rounded-lg border border-slate-300 py-2 pl-9 pr-3 text-sm focus:border-emerald-500 focus:ring-emerald-500">
            <span class="pointer-events-none absolute left-2.5 top-2.5 text-slate-400"><x-icon name="search" class="h-4 w-4" /></span>
        </div>
        <select name="category" onchange="this.form.submit()" class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
            <option value="">Barcha kategoriyalar</option>
            @foreach ($categories as $category)
                <option value="{{ $category->slug }}" @selected(request('category') === $category->slug)>{{ $category->name }}</option>
            @endforeach
        </select>
        <button class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-700">Qidirish</button>
    </form>

    @if ($tests->isEmpty())
        <x-ui.empty-state title="Testlar topilmadi" icon="clipboard">Hozircha test qo'shilmagan. Keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($tests as $test)
                <a href="{{ route('tests.show', $test->slug) }}" class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-5 transition hover:-translate-y-0.5 hover:border-emerald-300 hover:shadow-md">
                    <div class="mb-2 flex items-center gap-2">
                        <span class="grid h-10 w-10 place-items-center rounded-xl bg-emerald-50 text-emerald-600"><x-icon name="clipboard" class="h-5 w-5" /></span>
                        @if ($test->category)<span class="text-xs font-medium uppercase tracking-wide text-emerald-600">{{ $test->category->name }}</span>@endif
                    </div>
                    <h3 class="font-semibold text-slate-800 group-hover:text-emerald-700">{{ $test->title }}</h3>
                    @if ($test->description)<p class="mt-1 line-clamp-2 text-sm text-slate-500">{{ $test->description }}</p>@endif
                    <div class="mt-auto flex items-center gap-3 pt-4 text-xs text-slate-400">
                        <span class="flex items-center gap-1"><x-icon name="help" class="h-3.5 w-3.5" /> {{ $test->questions_count }} ta savol</span>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="mt-8">{{ $tests->links() }}</div>
    @endif
@endsection
