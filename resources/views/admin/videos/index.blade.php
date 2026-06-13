@extends('layouts.admin')

@section('title', 'Videolar')

@section('content')
    <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-lg font-semibold text-slate-700">Videolar</h2>
        <a href="{{ route('admin.videos.create') }}" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">+ Yangi video</a>
    </div>

    <form method="GET" class="mb-4 flex flex-wrap gap-3">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Qidirish..." class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
        <select name="category" onchange="this.form.submit()" class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
            <option value="">Barcha kategoriyalar</option>
            @foreach ($categories as $id => $name)
                <option value="{{ $id }}" @selected((string) request('category') === (string) $id)>{{ $name }}</option>
            @endforeach
        </select>
        <select name="status" onchange="this.form.submit()" class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
            <option value="">Barcha holatlar</option>
            @foreach ($statuses as $value => $label)
                <option value="{{ $value }}" @selected(request('status') === $value)>{{ $label }}</option>
            @endforeach
        </select>
        <button class="rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">Filtr</button>
    </form>

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                <tr>
                    <th class="px-5 py-3">Video</th>
                    <th class="px-5 py-3">Kategoriya</th>
                    <th class="px-5 py-3">Ko'rishlar</th>
                    <th class="px-5 py-3">Holati</th>
                    <th class="px-5 py-3 text-right">Amallar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($videos as $item)
                    <tr class="hover:bg-slate-50">
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-3">
                                <img src="{{ $item->thumbnail_url }}" alt="" class="h-10 w-16 rounded object-cover bg-slate-100" loading="lazy">
                                <span class="font-medium text-slate-800">{{ $item->title }}</span>
                            </div>
                        </td>
                        <td class="px-5 py-3 text-slate-600">{{ $item->category?->name ?? '—' }}</td>
                        <td class="px-5 py-3 text-slate-600">{{ $item->view_count }}</td>
                        <td class="px-5 py-3">
                            <span class="rounded-full px-2 py-0.5 text-xs font-medium {{ $item->status->value === 'published' ? 'bg-green-100 text-green-700' : 'bg-slate-100 text-slate-600' }}">{{ $item->status->label() }}</span>
                        </td>
                        <td class="px-5 py-3">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.videos.edit', $item) }}" class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 hover:bg-slate-200">Tahrirlash</a>
                                <form method="POST" action="{{ route('admin.videos.destroy', $item) }}" onsubmit="return confirm('O\'chirilsinmi?')">
                                    @csrf @method('DELETE')
                                    <button class="rounded-lg bg-red-50 px-3 py-1.5 text-xs font-medium text-red-700 hover:bg-red-100">O'chirish</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-5 py-6 text-center text-slate-400">Videolar yo'q.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $videos->links() }}</div>
@endsection
