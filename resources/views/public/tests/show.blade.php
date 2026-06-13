@extends('layouts.app')

@section('title', $test->title)

@section('content')
    <x-breadcrumbs :items="[['label' => 'Testlar', 'url' => route('tests.index')], ['label' => $test->title, 'url' => null]]" />

    <div class="mx-auto max-w-3xl">
        <header class="mb-6 rounded-2xl border border-slate-200 bg-white p-6">
            <h1 class="text-2xl font-bold text-slate-800">{{ $test->title }}</h1>
            @if ($test->description)<p class="mt-2 text-slate-500">{{ $test->description }}</p>@endif
            @if ($test->instructions)
                <div class="mt-4 rounded-xl border-l-4 border-emerald-500 bg-emerald-50 p-4 text-sm text-slate-700">{{ $test->instructions }}</div>
            @endif
            <p class="mt-4 text-sm text-slate-400">{{ $test->questions->count() }} ta savol · {{ $test->questions->sum('points') }} ball</p>
        </header>

        @if ($test->questions->isEmpty())
            <x-ui.empty-state title="Savollar yo'q" icon="clipboard">Bu testga hali savollar qo'shilmagan.</x-ui.empty-state>
        @else
            <form method="POST" action="{{ route('tests.submit', $test->slug) }}" class="space-y-5">
                @csrf
                @foreach ($test->questions as $index => $question)
                    <div class="rounded-2xl border border-slate-200 bg-white p-6">
                        <div class="mb-3 flex items-start gap-3">
                            <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700">{{ $index + 1 }}</span>
                            <p class="font-medium text-slate-800">{{ $question->prompt }}</p>
                        </div>

                        <div class="ml-10 space-y-2">
                            @switch($question->type->value)
                                @case('mcq')
                                @case('true_false')
                                    @foreach ($question->options as $option)
                                        <label class="flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">
                                            <input type="radio" name="answers[{{ $question->id }}][option]" value="{{ $option->id }}" class="text-emerald-600 focus:ring-emerald-500">
                                            {{ $option->label }}
                                        </label>
                                    @endforeach
                                    @break

                                @case('multiple')
                                    @foreach ($question->options as $option)
                                        <label class="flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">
                                            <input type="checkbox" name="answers[{{ $question->id }}][options][]" value="{{ $option->id }}" class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                            {{ $option->label }}
                                        </label>
                                    @endforeach
                                    @break

                                @case('ordering')
                                    @php $count = $question->options->count(); @endphp
                                    @foreach ($question->options as $option)
                                        <div class="flex items-center gap-3 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                            <select name="answers[{{ $question->id }}][positions][{{ $option->id }}]" class="w-20 rounded-lg border border-slate-300 px-2 py-1 text-sm">
                                                <option value="">—</option>
                                                @for ($p = 1; $p <= $count; $p++)
                                                    <option value="{{ $p }}">{{ $p }}</option>
                                                @endfor
                                            </select>
                                            {{ $option->label }}
                                        </div>
                                    @endforeach
                                    @break

                                @case('matching')
                                    @php $rights = $question->options->pluck('match_right')->filter()->shuffle(); @endphp
                                    @foreach ($question->options as $option)
                                        <div class="flex items-center gap-3 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                            <span class="min-w-[120px] font-medium">{{ $option->match_left }}</span>
                                            <span class="text-slate-400">→</span>
                                            <select name="answers[{{ $question->id }}][pairs][{{ $option->id }}]" class="flex-1 rounded-lg border border-slate-300 px-2 py-1 text-sm">
                                                <option value="">— tanlang —</option>
                                                @foreach ($rights as $right)
                                                    <option value="{{ $right }}">{{ $right }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endforeach
                                    @break

                                @case('open')
                                    <textarea name="answers[{{ $question->id }}][text]" rows="3" placeholder="Javobingizni yozing..."
                                              class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-emerald-500 focus:ring-emerald-500"></textarea>
                                    <p class="text-xs text-slate-400">Ochiq savol o'qituvchi tomonidan baholanadi.</p>
                                    @break
                            @endswitch
                        </div>
                    </div>
                @endforeach

                <div class="flex items-center justify-end gap-3">
                    <a href="{{ route('tests.index') }}" class="text-sm text-slate-500 hover:text-slate-700">Bekor qilish</a>
                    <button type="submit" class="rounded-lg bg-emerald-600 px-6 py-2.5 text-sm font-semibold text-white hover:bg-emerald-700">Testni yakunlash</button>
                </div>
            </form>
        @endif
    </div>
@endsection
