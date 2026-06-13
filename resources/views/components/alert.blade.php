@props(['type' => 'info'])

@php
    $styles = [
        'success' => 'bg-green-50 text-green-800 border-green-200',
        'error' => 'bg-red-50 text-red-800 border-red-200',
        'info' => 'bg-blue-50 text-blue-800 border-blue-200',
        'warning' => 'bg-amber-50 text-amber-800 border-amber-200',
    ][$type] ?? 'bg-slate-50 text-slate-800 border-slate-200';
@endphp

<div x-data="{ show: true }" x-show="show" {{ $attributes->merge(['class' => "rounded-lg border px-4 py-3 text-sm $styles"]) }}>
    <div class="flex items-start justify-between gap-3">
        <div>{{ $slot }}</div>
        <button type="button" @click="show = false" class="text-current/60 hover:text-current">&times;</button>
    </div>
</div>
