@extends('layouts.app')

@section('title', 'Natija — '.$attempt->test->title)

@section('content')
    <x-breadcrumbs :items="[['label' => 'Testlar', 'url' => route('tests.index')], ['label' => $attempt->test->title, 'url' => route('tests.show', $attempt->test->slug)], ['label' => 'Natija', 'url' => null]]" />

    <div class="mx-auto max-w-3xl">
        {{-- Score summary --}}
        <div class="mb-6 rounded-2xl border border-slate-200 bg-white p-8 text-center">
            <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-full {{ $passed ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">
                <span class="text-2xl font-bold">{{ $attempt->percentage }}%</span>
            </div>
            <h1 class="mt-4 text-xl font-bold text-slate-800">{{ $passed ? 'Tabriklaymiz! Testdan o\'tdingiz' : 'Testdan o\'ta olmadingiz' }}</h1>
            <p class="mt-1 text-slate-500">
                {{ rtrim(rtrim(number_format((float) $attempt->score, 2), '0'), '.') }} / {{ rtrim(rtrim(number_format((float) $attempt->max_score, 2), '0'), '.') }} ball
                · o'tish chegarasi {{ $passPercent }}%
            </p>
            <div class="mt-5 flex items-center justify-center gap-3">
                <a href="{{ route('tests.show', $attempt->test->slug) }}" class="rounded-lg bg-emerald-600 px-5 py-2 text-sm font-medium text-white hover:bg-emerald-700">Qayta urinish</a>
                <a href="{{ route('tests.index') }}" class="rounded-lg bg-slate-100 px-5 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">Boshqa testlar</a>
            </div>
        </div>

        {{-- Per-question review --}}
        <div class="space-y-4">
            @foreach ($attempt->answers as $i => $answer)
                @php $q = $answer->question; @endphp
                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <div class="mb-3 flex items-start justify-between gap-3">
                        <p class="font-medium text-slate-800">{{ $i + 1 }}. {{ $q->prompt }}</p>
                        @if ($answer->is_correct === true)
                            <span class="shrink-0 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-700">To'g'ri</span>
                        @elseif ($answer->is_correct === false)
                            <span class="shrink-0 rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-700">Noto'g'ri</span>
                        @else
                            <span class="shrink-0 rounded-full bg-amber-100 px-2.5 py-0.5 text-xs font-medium text-amber-700">Tekshiruvda</span>
                        @endif
                    </div>

                    @if ($q->options->isNotEmpty())
                        <ul class="space-y-1 text-sm">
                            @foreach ($q->options as $option)
                                <li class="flex items-center gap-2 {{ $option->is_correct ? 'text-green-700' : 'text-slate-500' }}">
                                    @if ($option->is_correct)<span>✓</span>@else<span class="text-slate-300">•</span>@endif
                                    {{ $option->match_left ? $option->match_left.' → '.$option->match_right : $option->label }}
                                    @if ($option->correct_position)<span class="text-xs text-slate-400">(#{{ $option->correct_position }})</span>@endif
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @if ($q->type->value === 'open' && ! empty($answer->answer['text']))
                        <div class="mt-2 rounded-lg bg-slate-50 p-3 text-sm text-slate-600">
                            <span class="font-medium">Sizning javobingiz:</span> {{ $answer->answer['text'] }}
                        </div>
                    @endif

                    @if ($q->explanation)
                        <div class="mt-3 rounded-lg border-l-4 border-indigo-400 bg-indigo-50 p-3 text-sm text-slate-700">
                            <span class="font-medium text-indigo-700">Izoh:</span> {{ $q->explanation }}
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
