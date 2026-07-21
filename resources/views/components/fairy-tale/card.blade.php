@props(['tale'])

@php
    use Illuminate\Support\Facades\Storage;

    // Per-grade visual identity. Literal Tailwind classes so the scanner keeps them.
    $palettes = [
        1 => ['grad' => 'from-emerald-400 via-teal-500 to-cyan-600', 'chip' => 'bg-emerald-100 text-emerald-700', 'glow' => 'text-emerald-600'],
        2 => ['grad' => 'from-sky-400 via-blue-500 to-indigo-600',   'chip' => 'bg-sky-100 text-sky-700',         'glow' => 'text-sky-600'],
        3 => ['grad' => 'from-violet-400 via-purple-500 to-fuchsia-600', 'chip' => 'bg-violet-100 text-violet-700', 'glow' => 'text-violet-600'],
        4 => ['grad' => 'from-amber-400 via-orange-500 to-rose-500', 'chip' => 'bg-amber-100 text-amber-700',     'glow' => 'text-amber-600'],
    ];

    $grade = (int) ($tale->meta['grade'] ?? 0);
    $p = $palettes[$grade] ?? $palettes[1];
@endphp

<a href="{{ route('fairy-tales.show', $tale->slug) }}"
   {{ $attributes->merge(['class' => 'group flex flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1.5 hover:border-transparent hover:shadow-xl']) }}>

    {{-- Cover: real illustration when one exists, otherwise a designed gradient scene --}}
    <div class="relative h-44 w-full overflow-hidden bg-gradient-to-br {{ $p['grad'] }}">
        @if ($tale->cover_image)
            <img src="{{ Storage::url($tale->cover_image) }}" alt="" loading="lazy"
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
        @else
            <div class="pointer-events-none absolute inset-0 text-white opacity-20">
                <x-decor.dots :id="'tale-'.$tale->id" />
            </div>
            {{-- soft light blooms --}}
            <div class="pointer-events-none absolute -left-8 -top-10 h-32 w-32 rounded-full bg-white/25 blur-2xl"></div>
            <div class="pointer-events-none absolute -bottom-12 right-0 h-36 w-36 rounded-full bg-white/20 blur-2xl"></div>

            {{-- open storybook motif --}}
            <div class="absolute inset-0 grid place-items-center">
                <x-icon name="book" class="h-24 w-24 text-white/90 drop-shadow-lg transition duration-500 group-hover:scale-110" stroke="1.1" />
            </div>

            {{-- little sparkles --}}
            <svg class="pointer-events-none absolute inset-0 h-full w-full" viewBox="0 0 320 176" fill="none" aria-hidden="true">
                <path d="M52 40l3 8 8 3-8 3-3 8-3-8-8-3 8-3z" fill="#fff" opacity=".85" />
                <path d="M268 118l2.5 6.5 6.5 2.5-6.5 2.5-2.5 6.5-2.5-6.5-6.5-2.5 6.5-2.5z" fill="#fff" opacity=".7" />
                <circle cx="248" cy="44" r="3" fill="#fff" opacity=".75" />
                <circle cx="70" cy="130" r="2.5" fill="#fff" opacity=".6" />
            </svg>
        @endif

        {{-- play affordance --}}
        <span class="absolute bottom-3 right-3 grid h-11 w-11 place-items-center rounded-full bg-white/95 {{ $p['glow'] }} shadow-lg transition duration-300 group-hover:scale-110">
            <x-icon name="play" class="h-5 w-5" />
        </span>

        {{-- grade chip --}}
        @if ($grade)
            <span class="absolute left-3 top-3 rounded-full bg-white/95 px-2.5 py-1 text-[11px] font-bold text-slate-700 shadow-sm">
                {{ $grade }}-sinf
            </span>
        @endif
    </div>

    <div class="flex flex-1 flex-col p-4">
        <h3 class="font-bold leading-snug text-slate-800 group-hover:text-indigo-700">{{ $tale->title }}</h3>

        <div class="mt-3 flex items-center gap-2 text-xs font-medium text-slate-400">
            <span class="inline-flex items-center gap-1 rounded-md {{ $p['chip'] }} px-2 py-1">
                <x-icon name="play" class="h-3 w-3" /> Audio
            </span>
            <span class="inline-flex items-center gap-1 rounded-md bg-slate-100 px-2 py-1 text-slate-500">
                <x-icon name="doc" class="h-3 w-3" /> Matn
            </span>
            <span class="inline-flex items-center gap-1 rounded-md bg-slate-100 px-2 py-1 text-slate-500">
                <x-icon name="clipboard" class="h-3 w-3" /> Topshiriq
            </span>
        </div>
    </div>
</a>
