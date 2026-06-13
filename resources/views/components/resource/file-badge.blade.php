@props(['extension'])

@php
    $ext = $extension instanceof \App\Enums\ResourceExtension
        ? $extension
        : \App\Enums\ResourceExtension::tryFrom((string) $extension);

    // Literal class map so Tailwind detects the colors.
    $colors = [
        'pdf' => 'bg-red-100 text-red-700',
        'docx' => 'bg-sky-100 text-sky-700',
        'pptx' => 'bg-amber-100 text-amber-700',
        'xlsx' => 'bg-green-100 text-green-700',
        'zip' => 'bg-slate-200 text-slate-700',
    ];
    $value = $ext?->value ?? 'file';
    $tone = $colors[$value] ?? 'bg-slate-100 text-slate-600';
@endphp

<span title="{{ $ext?->label() }}" {{ $attributes->merge(['class' => "inline-flex items-center rounded-md px-2 py-0.5 text-xs font-bold uppercase $tone"]) }}>
    {{ $value }}
</span>
