@props(['label' => null, 'name', 'options' => [], 'selected' => null, 'placeholder' => null, 'required' => false])

<div class="space-y-1">
    @if ($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-slate-700">
            {{ $label }} @if ($required)<span class="text-red-500">*</span>@endif
        </label>
    @endif
    <select name="{{ $name }}" id="{{ $name }}" @if ($required) required @endif
            {{ $attributes->merge(['class' => 'block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-indigo-500']) }}>
        @if ($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif
        @foreach ($options as $optValue => $optLabel)
            <option value="{{ $optValue }}" @selected((string) old($name, $selected) === (string) $optValue)>{{ $optLabel }}</option>
        @endforeach
    </select>
    @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
