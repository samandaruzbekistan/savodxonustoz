@extends('layouts.admin')

@section('title', 'Aloqa xabarlari')

@section('content')
    <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-lg font-semibold text-slate-700">Aloqa xabarlari</h2>
        @if ($unreadCount > 0)
            <span class="rounded-full bg-rose-100 px-3 py-1 text-xs font-semibold text-rose-700">{{ $unreadCount }} ta o'qilmagan</span>
        @endif
    </div>

    <div class="mb-4 flex gap-2">
        <a href="{{ route('admin.messages.index') }}" class="rounded-lg px-3 py-1.5 text-sm font-medium {{ request('filter') !== 'unread' ? 'bg-indigo-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">Barchasi</a>
        <a href="{{ route('admin.messages.index', ['filter' => 'unread']) }}" class="rounded-lg px-3 py-1.5 text-sm font-medium {{ request('filter') === 'unread' ? 'bg-indigo-600 text-white' : 'bg-slate-100 text-slate-600 hover:bg-slate-200' }}">O'qilmagan</a>
    </div>

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                <tr>
                    <th class="px-5 py-3">Yuboruvchi</th>
                    <th class="px-5 py-3">Mavzu</th>
                    <th class="px-5 py-3">Sana</th>
                    <th class="px-5 py-3 text-right">Amallar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($messages as $message)
                    <tr class="{{ $message->is_read ? '' : 'bg-indigo-50/40' }}">
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-2">
                                @unless ($message->is_read)<span class="h-2 w-2 shrink-0 rounded-full bg-rose-500" title="O'qilmagan"></span>@endunless
                                <div>
                                    <p class="font-medium text-slate-800">{{ $message->name }}</p>
                                    <p class="text-xs text-slate-400">{{ $message->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-3 text-slate-600">{{ $message->subject ?: '—' }}</td>
                        <td class="px-5 py-3 text-slate-500">{{ $message->created_at->translatedFormat('d M Y, H:i') }}</td>
                        <td class="px-5 py-3">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.messages.show', $message) }}" class="rounded-md bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 hover:bg-slate-200">Ko'rish</a>
                                <form method="POST" action="{{ route('admin.messages.destroy', $message) }}" onsubmit="return confirm('Xabar o\'chirilsinmi?')">
                                    @csrf @method('DELETE')
                                    <button class="rounded-md bg-red-50 px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-100">O'chirish</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-5 py-10 text-center text-slate-400">Hozircha xabarlar yo'q.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $messages->links() }}</div>
@endsection
