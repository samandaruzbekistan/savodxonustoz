@extends('layouts.admin')

@section('title', 'Savollar — '.$test->title)

@section('content')
    <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
        <div>
            <a href="{{ route('admin.tests.index') }}" class="text-sm text-slate-500 hover:text-indigo-700">← Testlar</a>
            <h2 class="text-lg font-semibold text-slate-700">{{ $test->title }} — savollar</h2>
            <p class="text-sm text-slate-400">{{ $test->questions->count() }} ta savol · {{ $test->questions->sum('points') }} ball</p>
        </div>
        <a href="{{ route('admin.tests.questions.create', $test) }}" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">+ Yangi savol</a>
    </div>

    @if ($test->questions->isEmpty())
        <div class="rounded-xl border border-dashed border-slate-300 bg-white p-10 text-center text-slate-400">
            Hali savol yo'q. "Yangi savol" tugmasi orqali qo'shing.
        </div>
    @else
        <div class="space-y-3">
            @foreach ($test->questions as $i => $question)
                <div class="rounded-xl border border-slate-200 bg-white p-5">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1">
                            <div class="mb-1 flex items-center gap-2 text-xs">
                                <span class="rounded-full bg-indigo-50 px-2 py-0.5 font-medium text-indigo-700">{{ $question->type->label() }}</span>
                                <span class="text-slate-400">{{ $question->points }} ball</span>
                            </div>
                            <p class="font-medium text-slate-800">{{ $i + 1 }}. {{ $question->prompt }}</p>
                            @if ($question->options->isNotEmpty())
                                <ul class="mt-2 space-y-1 text-sm text-slate-500">
                                    @foreach ($question->options as $option)
                                        <li class="flex items-center gap-2">
                                            @if ($option->is_correct)<span class="text-green-600">✓</span>@else<span class="text-slate-300">•</span>@endif
                                            {{ $option->match_left ? $option->match_left.' → '.$option->match_right : $option->label }}
                                            @if ($option->correct_position)<span class="text-xs text-slate-400">(#{{ $option->correct_position }})</span>@endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="flex shrink-0 items-center gap-2">
                            <a href="{{ route('admin.tests.questions.edit', [$test, $question]) }}" class="rounded-md bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700 hover:bg-slate-200">Tahrir</a>
                            <form method="POST" action="{{ route('admin.tests.questions.destroy', [$test, $question]) }}" onsubmit="return confirm('Savol o\'chirilsinmi?')">
                                @csrf @method('DELETE')
                                <button class="rounded-md bg-red-50 px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-100">O'chirish</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div class="mt-6">
        <a href="{{ route('admin.tests.edit', $test) }}" class="text-sm text-slate-500 hover:text-indigo-700">Test sozlamalarini tahrirlash →</a>
    </div>
@endsection
