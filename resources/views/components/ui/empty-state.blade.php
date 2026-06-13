@props(['title' => null, 'icon' => 'inbox'])

<div {{ $attributes->merge(['class' => 'rounded-2xl border border-dashed border-slate-300 bg-white p-10 text-center']) }}>
    <div class="mx-auto mb-4 grid h-16 w-16 place-items-center rounded-full bg-slate-50 text-slate-300">
        <x-icon :name="$icon" class="h-8 w-8" stroke="1.4" />
    </div>
    @if ($title)
        <p class="font-semibold text-slate-700">{{ $title }}</p>
    @endif
    @if (trim($slot))
        <p class="mt-1 text-sm text-slate-500">{{ $slot }}</p>
    @endif
    @isset($action)
        <div class="mt-4 flex justify-center">{{ $action }}</div>
    @endisset
</div>
