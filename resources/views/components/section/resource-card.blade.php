@props([
    'num',
    'title',
    'desc',
    'points' => [],
    'image',
    'href',
    'color' => 'blue',
    'layout' => 'vertical',
])

@php
    // Literal Tailwind classes per accent — kept as full strings so the CSS scanner picks them up.
    $map = [
        'blue' => [
            'panel' => 'from-blue-50 via-sky-50 to-blue-100',
            'blob' => 'bg-blue-200/40',
            'text' => 'text-blue-700',
            'chip' => 'bg-blue-600',
            'dot' => 'text-blue-500',
            'btn' => 'border-blue-200 text-blue-700 hover:border-blue-300 hover:bg-blue-50',
            'shadow' => 'hover:shadow-blue-100',
        ],
        'violet' => [
            'panel' => 'from-violet-50 via-fuchsia-50 to-violet-100',
            'blob' => 'bg-violet-200/40',
            'text' => 'text-violet-700',
            'chip' => 'bg-violet-600',
            'dot' => 'text-violet-500',
            'btn' => 'border-violet-200 text-violet-700 hover:border-violet-300 hover:bg-violet-50',
            'shadow' => 'hover:shadow-violet-100',
        ],
        'emerald' => [
            'panel' => 'from-emerald-50 via-teal-50 to-emerald-100',
            'blob' => 'bg-emerald-200/40',
            'text' => 'text-emerald-700',
            'chip' => 'bg-emerald-600',
            'dot' => 'text-emerald-500',
            'btn' => 'border-emerald-200 text-emerald-700 hover:border-emerald-300 hover:bg-emerald-50',
            'shadow' => 'hover:shadow-emerald-100',
        ],
        'amber' => [
            'panel' => 'from-amber-50 via-orange-50 to-amber-100',
            'blob' => 'bg-amber-200/40',
            'text' => 'text-amber-700',
            'chip' => 'bg-amber-600',
            'dot' => 'text-amber-500',
            'btn' => 'border-amber-200 text-amber-700 hover:border-amber-300 hover:bg-amber-50',
            'shadow' => 'hover:shadow-amber-100',
        ],
        'rose' => [
            'panel' => 'from-rose-50 via-pink-50 to-rose-100',
            'blob' => 'bg-rose-200/40',
            'text' => 'text-rose-700',
            'chip' => 'bg-rose-600',
            'dot' => 'text-rose-500',
            'btn' => 'border-rose-200 text-rose-700 hover:border-rose-300 hover:bg-rose-50',
            'shadow' => 'hover:shadow-rose-100',
        ],
    ];
    $c = $map[$color] ?? $map['blue'];
    $horizontal = $layout === 'horizontal';
@endphp

<article class="group flex h-full {{ $horizontal ? 'flex-col sm:flex-row' : 'flex-col' }} overflow-hidden rounded-[22px] border border-slate-200 bg-white shadow-sm transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-xl {{ $c['shadow'] }}">
    {{-- Preview / illustration --}}
    <div class="relative {{ $horizontal ? 'h-52 sm:h-auto sm:w-[42%]' : 'h-48' }} shrink-0 overflow-hidden bg-gradient-to-br {{ $c['panel'] }}">
        <div class="pointer-events-none absolute -right-8 -top-10 h-28 w-28 rounded-full {{ $c['blob'] }} blur-2xl"></div>
        <div class="pointer-events-none absolute -bottom-10 -left-8 h-32 w-32 rounded-full {{ $c['blob'] }} blur-2xl"></div>

        <img src="{{ asset('images/sections/barcha-oquvchilarga-yordam/'.$image) }}" alt="{{ $title }}" loading="lazy"
             class="absolute inset-0 m-auto h-[76%] w-auto object-contain drop-shadow-lg transition-transform duration-300 ease-out group-hover:scale-[1.05]">

        <span class="absolute right-3 top-3 inline-flex items-center gap-1 rounded-full bg-white/95 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide {{ $c['text'] }} shadow-sm backdrop-blur">
            <x-icon name="doc" class="h-3 w-3" stroke="2" />
            Qo'llanma
        </span>
    </div>

    {{-- Content --}}
    <div class="flex flex-1 flex-col p-6">
        <div class="mb-2.5 flex items-center gap-2">
            <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full {{ $c['chip'] }} text-[11px] font-bold text-white">{{ $num }}</span>
            <span class="text-[11px] font-semibold uppercase tracking-wide text-slate-400">{{ $num }}-bo'lim</span>
        </div>
        <h3 class="mb-1.5 text-[15px] font-bold leading-snug text-slate-800">{{ $title }}</h3>
        <p class="mb-3.5 text-[13px] leading-relaxed text-slate-500">{{ $desc }}</p>

        <ul class="mb-5 flex-1 space-y-1.5">
            @foreach ($points as $point)
                <li class="flex items-start gap-2 text-[13px] leading-snug text-slate-600">
                    <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 {{ $c['dot'] }}" stroke="2.5" />
                    {{ $point }}
                </li>
            @endforeach
        </ul>

        <a href="{{ $href }}"
           class="inline-flex w-fit items-center gap-1.5 rounded-xl border px-4 py-2 text-[13px] font-semibold transition-colors {{ $c['btn'] }}">
            Batafsil
            <x-icon name="arrow-right" class="h-3.5 w-3.5 transition group-hover:translate-x-0.5" stroke="2.5" />
        </a>
    </div>
</article>
