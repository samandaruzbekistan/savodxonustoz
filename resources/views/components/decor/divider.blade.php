@props([
    'variant' => 'wave',
    'color' => 'text-white',
    'flip' => false,
])

{{--
    Decorative section divider. Sits at the top or bottom edge of a coloured
    band and cuts a soft organic shape into the adjacent section. `color`
    controls the fill (via currentColor), `flip` mirrors it vertically.
--}}
@php
    $paths = [
        'wave'  => 'M0 60C240 110 480 10 720 40s480 90 720 20V120H0Z',
        'curve' => 'M0 90C360 20 1080 20 1440 90V120H0Z',
        'tilt'  => 'M0 120 1440 20V120Z',
        'cloud' => 'M0 80c120 0 120-34 260-34s160 40 300 40 160-46 320-46 200 40 300 40 140-20 260-20V120H0Z',
    ];
    $d = $paths[$variant] ?? $paths['wave'];
@endphp

<div aria-hidden="true" {{ $attributes->merge(['class' => 'pointer-events-none block w-full leading-[0] '.$color]) }}>
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none" class="h-[40px] w-full sm:h-[64px] {{ $flip ? 'rotate-180' : '' }}" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="{{ $d }}" />
    </svg>
</div>
