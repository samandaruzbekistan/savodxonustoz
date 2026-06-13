@props(['color' => 'slate'])

@php
    $colors = [
        'slate' => 'bg-slate-100 text-slate-600',
        'indigo' => 'bg-indigo-50 text-indigo-700',
        'violet' => 'bg-violet-50 text-violet-700',
        'green' => 'bg-green-100 text-green-700',
        'amber' => 'bg-amber-100 text-amber-700',
        'red' => 'bg-red-100 text-red-700',
        'sky' => 'bg-sky-100 text-sky-700',
        'teal' => 'bg-teal-100 text-teal-700',
        'rose' => 'bg-rose-100 text-rose-700',
    ];
    $tone = $colors[$color] ?? $colors['slate'];
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium $tone"]) }}>{{ $slot }}</span>
