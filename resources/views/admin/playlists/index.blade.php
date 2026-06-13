@extends('layouts.admin')

@section('title', 'Pleylistlar')

@section('content')
    <div class="mb-4 flex items-center justify-between">
        <h2 class="text-lg font-semibold text-slate-700">Pleylistlar</h2>
        <a href="{{ route('admin.playlists.create') }}" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">+ Yangi pleylist</a>
    </div>

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                <tr>
                    <th class="px-5 py-3">Nomi</th>
                    <th class="px-5 py-3">Videolar</th>
                    <th class="px-5 py-3">Holati</th>
                    <th class="px-5 py-3 text-right">Amallar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($playlists as $item)
                    <tr class="hover:bg-slate-50">
                        <td class="px-5 py-3 font-medium text-slate-800">{{ $item->title }}</td>
                        <td class="px-5 py-3 text-slate-600">{{ $item->videos_count }}</td>
                        <td class="px-5 py-3">
                            <span class="rounded-full px-2 py-0.5 text-xs font-medium {{ $item->status->value === 'published' ? 'bg-green-100 text-green-700' : 'bg-slate-100 text-slate-600' }}">{{ $item->status->label() }}</span>
                        </td>
                        <td class="px-5 py-3">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.playlists.edit', $item) }}" class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 hover:bg-slate-200">Tahrirlash</a>
                                <form method="POST" action="{{ route('admin.playlists.destroy', $item) }}" onsubmit="return confirm('O\'chirilsinmi?')">
                                    @csrf @method('DELETE')
                                    <button class="rounded-lg bg-red-50 px-3 py-1.5 text-xs font-medium text-red-700 hover:bg-red-100">O'chirish</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-5 py-6 text-center text-slate-400">Pleylistlar yo'q.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $playlists->links() }}</div>
@endsection
