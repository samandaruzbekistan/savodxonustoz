@extends('layouts.admin')

@section('title', 'Testlar')

@section('content')
    <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
        <h2 class="text-lg font-semibold text-slate-700">Testlar</h2>
        <a href="{{ route('admin.tests.create') }}" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">+ Yangi test</a>
    </div>

    <form method="GET" class="mb-4 flex flex-wrap gap-3">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Qidirish..." class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
        <select name="status" onchange="this.form.submit()" class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
            <option value="">Barcha holatlar</option>
            <option value="published" @selected(request('status') === 'published')>Nashr etilgan</option>
            <option value="draft" @selected(request('status') === 'draft')>Qoralama</option>
        </select>
        <button class="rounded-lg bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">Filtr</button>
    </form>

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                <tr>
                    <th class="px-5 py-3">Sarlavha</th>
                    <th class="px-5 py-3">Savollar</th>
                    <th class="px-5 py-3">Urinishlar</th>
                    <th class="px-5 py-3">Holat</th>
                    <th class="px-5 py-3 text-right">Amallar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($tests as $test)
                    <tr>
                        <td class="px-5 py-3">
                            <p class="font-medium text-slate-800">{{ $test->title }}</p>
                            @if ($test->category)<p class="text-xs text-slate-400">{{ $test->category->name }}</p>@endif
                        </td>
                        <td class="px-5 py-3 text-slate-600">{{ $test->questions_count }}</td>
                        <td class="px-5 py-3 text-slate-600">{{ $test->attempts_count }}</td>
                        <td class="px-5 py-3">
                            @if ($test->is_published)
                                <span class="rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-700">Nashr etilgan</span>
                            @else
                                <span class="rounded-full bg-slate-100 px-2.5 py-0.5 text-xs font-medium text-slate-600">Qoralama</span>
                            @endif
                        </td>
                        <td class="px-5 py-3">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.tests.questions.index', $test) }}" class="rounded-md bg-indigo-50 px-3 py-1.5 text-xs font-medium text-indigo-700 hover:bg-indigo-100">Savollar</a>
                                <a href="{{ route('admin.tests.edit', $test) }}" class="rounded-md bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 hover:bg-slate-200">Tahrir</a>
                                <form method="POST" action="{{ route('admin.tests.destroy', $test) }}" onsubmit="return confirm('Test o\'chirilsinmi?')">
                                    @csrf @method('DELETE')
                                    <button class="rounded-md bg-red-50 px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-100">O'chirish</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-5 py-10 text-center text-slate-400">Hozircha testlar yo'q.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $tests->links() }}</div>
@endsection
