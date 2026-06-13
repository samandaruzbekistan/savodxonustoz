{{-- Hand-drawn flat "reading / open book" illustration for the hero. Designed to sit on the indigo→violet gradient. --}}
<svg viewBox="0 0 440 340" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'h-auto w-full', 'aria-hidden' => 'true']) }}>
    {{-- soft background blobs --}}
    <circle cx="330" cy="90" r="80" fill="#ffffff" opacity="0.08" />
    <circle cx="120" cy="250" r="60" fill="#ffffff" opacity="0.06" />

    {{-- glow behind the idea bulb --}}
    <circle cx="220" cy="78" r="34" fill="#ffffff" opacity="0.14" />

    {{-- idea / sun --}}
    <circle cx="220" cy="78" r="20" fill="#FDE68A" />
    <g stroke="#FDE68A" stroke-width="3.5" stroke-linecap="round" opacity="0.9">
        <path d="M220 40v-12" /><path d="M220 128v12" />
        <path d="M258 78h12" /><path d="M170 78h12" />
        <path d="M247 51l8-8" /><path d="M185 105l-8 8" />
        <path d="M247 105l8 8" /><path d="M185 51l-8-8" />
    </g>

    {{-- open book --}}
    <path d="M70 170c45-26 100-26 150 6 50-32 105-32 150-6v118c-45-22-100-22-150 6-50-28-105-28-150-6z" fill="#ffffff" />
    <path d="M220 176v118" stroke="#C7D2FE" stroke-width="3" />
    {{-- left page lines --}}
    <g stroke="#C7D2FE" stroke-width="4" stroke-linecap="round">
        <path d="M100 200h95" /><path d="M100 222h95" /><path d="M100 244h80" />
    </g>
    {{-- right page lines --}}
    <g stroke="#DDD6FE" stroke-width="4" stroke-linecap="round">
        <path d="M245 206h95" /><path d="M245 228h95" /><path d="M245 250h78" />
    </g>

    {{-- floating page --}}
    <rect x="288" y="116" width="78" height="58" rx="8" transform="rotate(10 288 116)" fill="#ffffff" opacity="0.92" />
    <g stroke="#C4B5FD" stroke-width="3.5" stroke-linecap="round" transform="rotate(10 288 116)">
        <path d="M300 134h54" /><path d="M300 148h54" /><path d="M300 162h36" />
    </g>

    {{-- sparkles --}}
    <path d="M96 120l4 11 11 4-11 4-4 11-4-11-11-4 11-4z" fill="#ffffff" opacity="0.9" />
    <path d="M360 270l3 8 8 3-8 3-3 8-3-8-8-3 8-3z" fill="#ffffff" opacity="0.8" />
</svg>
