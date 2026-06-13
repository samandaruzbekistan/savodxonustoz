@props(['id' => 'decor-dots'])

{{-- Subtle dot-grid pattern overlay. Color follows parent text color; set opacity on the wrapper. --}}
<svg {{ $attributes->merge(['class' => 'h-full w-full', 'aria-hidden' => 'true']) }} preserveAspectRatio="xMidYMid slice">
    <defs>
        <pattern id="{{ $id }}" width="22" height="22" patternUnits="userSpaceOnUse">
            <circle cx="2" cy="2" r="1.5" fill="currentColor" />
        </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#{{ $id }})" />
</svg>
