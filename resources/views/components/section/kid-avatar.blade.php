@props([
    'hair' => '#4b2e1a',
    'shirt' => '#3b82f6',
    'skin' => '#f3c9a0',
    'class' => 'h-16 w-16',
])

<svg class="{{ $class }}" viewBox="0 0 80 80" fill="none">
    <path d="M12 80 Q12 52 40 52 Q68 52 68 80 Z" fill="{{ $shirt }}"/>
    <circle cx="40" cy="36" r="20" fill="{{ $skin }}"/>
    <path d="M17 34 Q40 4 63 34 Q63 13 40 9 Q17 13 17 34 Z" fill="{{ $hair }}"/>
    <circle cx="32" cy="38" r="2.3" fill="#1f2937"/>
    <circle cx="48" cy="38" r="2.3" fill="#1f2937"/>
    <circle cx="26" cy="46" r="3" fill="#fb7185" opacity="0.45"/>
    <circle cx="54" cy="46" r="3" fill="#fb7185" opacity="0.45"/>
    <path d="M31 47 Q40 55 49 47" stroke="#1f2937" stroke-width="2.4" fill="none" stroke-linecap="round"/>
</svg>
