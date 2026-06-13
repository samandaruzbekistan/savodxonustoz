@extends('layouts.app')

@section('title', 'Aloqa')

@section('content')
    <x-breadcrumbs :items="[['label' => 'Aloqa', 'url' => null]]" />

    <div class="grid gap-8 lg:grid-cols-[1fr_320px]">
        <div>
            <header class="mb-6">
                <h1 class="text-2xl font-bold text-slate-800 sm:text-3xl">Biz bilan bog'laning</h1>
                <p class="mt-2 text-slate-500">Savol, taklif yoki hamkorlik bo'yicha xabaringizni qoldiring — tez orada javob beramiz.</p>
            </header>

            @if (session('success'))
                <x-alert type="success" class="mb-6">{{ session('success') }}</x-alert>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="space-y-5 rounded-2xl border border-slate-200 bg-white p-6">
                @csrf
                <div class="grid gap-5 sm:grid-cols-2">
                    <x-form.input name="name" label="Ismingiz" required />
                    <x-form.input name="email" type="email" label="E-pochta" required />
                </div>
                <x-form.input name="subject" label="Mavzu" />
                <x-form.textarea name="message" label="Xabar" :rows="6" required />
                <div>
                    <button type="submit" class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-6 py-2.5 text-sm font-medium text-white hover:bg-indigo-700">
                        <x-icon name="mail" class="h-4 w-4" /> Yuborish
                    </button>
                </div>
            </form>
        </div>

        <aside class="space-y-4">
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <h2 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-500">Aloqa</h2>
                <ul class="space-y-3 text-sm text-slate-600">
                    <li class="flex items-center gap-2"><x-icon name="mail" class="h-4 w-4 text-indigo-500" /> info@savodxonustoz.uz</li>
                    <li class="flex items-center gap-2"><x-icon name="globe" class="h-4 w-4 text-indigo-500" /> savodxonustoz.uz</li>
                </ul>
            </div>
            <div class="rounded-2xl border border-indigo-100 bg-indigo-50/60 p-5">
                <p class="text-sm text-slate-600">Tez-tez beriladigan savollarga javoblarni <a href="{{ route('faq') }}" class="font-medium text-indigo-700 hover:underline">Savol-javob</a> bo'limidan toping.</p>
            </div>
        </aside>
    </div>
@endsection
