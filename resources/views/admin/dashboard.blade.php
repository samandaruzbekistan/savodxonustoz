@extends('layouts.admin')

@section('title', 'Boshqaruv paneli')

@section('content')
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @php
            $cards = [
                ['label' => 'Jami kontent', 'value' => $stats['contents'], 'color' => 'bg-indigo-600'],
                ['label' => 'Nashr etilgan', 'value' => $stats['published'], 'color' => 'bg-green-600'],
                ['label' => 'Qoralama', 'value' => $stats['drafts'], 'color' => 'bg-amber-500'],
                ['label' => 'Kategoriyalar', 'value' => $stats['categories'], 'color' => 'bg-sky-600'],
            ];
        @endphp
        @foreach ($cards as $card)
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-slate-500">{{ $card['label'] }}</span>
                    <span class="h-2.5 w-2.5 rounded-full {{ $card['color'] }}"></span>
                </div>
                <p class="mt-2 text-3xl font-bold text-slate-800">{{ $card['value'] }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-6 rounded-xl border border-slate-200 bg-white">
        <div class="flex items-center justify-between border-b border-slate-200 px-5 py-3">
            <h2 class="font-semibold text-slate-700">So'nggi kontent</h2>
            <a href="{{ route('admin.contents.create') }}" class="rounded-lg bg-indigo-600 px-3 py-1.5 text-sm font-medium text-white hover:bg-indigo-700">+ Yangi kontent</a>
        </div>
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                <tr>
                    <th class="px-5 py-3">Sarlavha</th>
                    <th class="px-5 py-3">Turi</th>
                    <th class="px-5 py-3">Kategoriya</th>
                    <th class="px-5 py-3">Holati</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($recent as $item)
                    <tr class="hover:bg-slate-50">
                        <td class="px-5 py-3"><a href="{{ route('admin.contents.edit', $item) }}" class="font-medium text-indigo-700 hover:underline">{{ $item->title }}</a></td>
                        <td class="px-5 py-3 text-slate-600">{{ $item->type->label() }}</td>
                        <td class="px-5 py-3 text-slate-600">{{ $item->category?->name ?? '—' }}</td>
                        <td class="px-5 py-3 text-slate-600">{{ $item->status->label() }}</td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-5 py-6 text-center text-slate-400">Hozircha kontent yo'q.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
