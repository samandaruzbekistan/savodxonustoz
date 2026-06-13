@extends('layouts.app')

@section('title', 'Savol-javob')

@section('content')
    <x-breadcrumbs :items="[['label' => 'Savol-javob', 'url' => null]]" />

    <header class="mb-8 flex items-start gap-5 rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-6">
        <span class="grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-indigo-100 text-indigo-600">
            <x-icon name="help" class="h-7 w-7" />
        </span>
        <div>
            <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">Ko'p so'raladigan savollar</h1>
            <p class="mt-2 max-w-3xl text-slate-500">Platforma va o'qish savodxonligi bo'yicha eng ko'p beriladigan savollarga javoblar.</p>
        </div>
    </header>

    @if ($faqs->isEmpty())
        <x-ui.empty-state title="Savollar topilmadi" icon="help">Hozircha savol-javoblar qo'shilmagan. Keyinroq qayting.</x-ui.empty-state>
    @else
        <div class="mx-auto max-w-3xl space-y-3">
            @foreach ($faqs as $faq)
                <div x-data="{ open: false }" class="overflow-hidden rounded-xl border border-slate-200 bg-white">
                    <button type="button" @click="open = !open"
                            class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left">
                        <span class="font-semibold text-slate-800">{{ $faq->title }}</span>
                        <span class="shrink-0 text-indigo-500 transition" :class="open ? 'rotate-45' : ''">
                            <x-icon name="dot" class="hidden h-5 w-5" />
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14" stroke-linecap="round"/></svg>
                        </span>
                    </button>
                    <div x-show="open" x-cloak x-transition.duration.200ms class="border-t border-slate-100 px-5 py-4 text-slate-600">
                        <div class="prose-content max-w-none">{!! $faq->body !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div class="mx-auto mt-10 max-w-3xl rounded-2xl border border-indigo-100 bg-indigo-50/60 p-6 text-center">
        <p class="text-slate-700">Savolingizga javob topa olmadingizmi?</p>
        <a href="{{ route('contact') }}" class="mt-3 inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-indigo-700">
            <x-icon name="mail" class="h-4 w-4" /> Biz bilan bog'laning
        </a>
    </div>
@endsection
