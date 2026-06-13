@props(['item'])

@php
    // Domain palette — literal class strings so Tailwind detects them.
    $palette = [
        'theory' => ['eyebrow' => 'text-indigo-600', 'grad' => 'from-indigo-50 to-indigo-100', 'glyph' => 'text-indigo-200'],
        'methodology' => ['eyebrow' => 'text-violet-600', 'grad' => 'from-violet-50 to-violet-100', 'glyph' => 'text-violet-200'],
        'exercise' => ['eyebrow' => 'text-teal-600', 'grad' => 'from-teal-50 to-teal-100', 'glyph' => 'text-teal-200'],
        'example' => ['eyebrow' => 'text-amber-600', 'grad' => 'from-amber-50 to-amber-100', 'glyph' => 'text-amber-200'],
        'recommendation' => ['eyebrow' => 'text-violet-600', 'grad' => 'from-violet-50 to-violet-100', 'glyph' => 'text-violet-200'],
        'rubric' => ['eyebrow' => 'text-sky-600', 'grad' => 'from-sky-50 to-sky-100', 'glyph' => 'text-sky-200'],
        'assessment' => ['eyebrow' => 'text-sky-600', 'grad' => 'from-sky-50 to-sky-100', 'glyph' => 'text-sky-200'],
        'blog' => ['eyebrow' => 'text-rose-600', 'grad' => 'from-rose-50 to-rose-100', 'glyph' => 'text-rose-200'],
        'news' => ['eyebrow' => 'text-rose-600', 'grad' => 'from-rose-50 to-rose-100', 'glyph' => 'text-rose-200'],
        'faq' => ['eyebrow' => 'text-slate-600', 'grad' => 'from-slate-50 to-slate-100', 'glyph' => 'text-slate-300'],
        'page' => ['eyebrow' => 'text-slate-600', 'grad' => 'from-slate-50 to-slate-100', 'glyph' => 'text-slate-300'],
    ];
    $p = $palette[$item->type->value] ?? $palette['page'];
@endphp

<a href="{{ route('contents.show', $item->slug) }}" {{ $attributes->merge(['class' => 'group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:-translate-y-0.5 hover:border-indigo-300 hover:shadow-md']) }}>
    @if ($item->cover_image)
        <div class="relative h-36 w-full overflow-hidden">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($item->cover_image) }}" alt="" loading="lazy" class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
        </div>
    @else
        <div class="relative flex h-36 w-full items-center justify-center overflow-hidden bg-gradient-to-br {{ $p['grad'] }}">
            <x-icon :name="$item->type->icon()" class="h-20 w-20 {{ $p['glyph'] }}" stroke="1.2" />
        </div>
    @endif

    <div class="flex flex-1 flex-col p-4">
        <span class="mb-1 inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wide {{ $p['eyebrow'] }}">
            <x-icon :name="$item->type->icon()" class="h-3.5 w-3.5" />
            {{ $item->type->label() }}
        </span>
        <h3 class="font-semibold text-slate-800 group-hover:text-indigo-700">{{ $item->title }}</h3>
        @if ($item->excerpt)
            <p class="mt-1 line-clamp-2 text-sm text-slate-500">{{ $item->excerpt }}</p>
        @endif
    </div>
</a>
