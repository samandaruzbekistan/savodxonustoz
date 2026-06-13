@props(['post'])

@php
    // Literal class maps so Tailwind's scanner keeps these utilities.
    $styles = [
        'blog' => ['badge' => 'bg-rose-100 text-rose-700', 'grad' => 'from-rose-50 to-rose-100', 'glyph' => 'text-rose-200'],
        'news' => ['badge' => 'bg-amber-100 text-amber-700', 'grad' => 'from-amber-50 to-amber-100', 'glyph' => 'text-amber-200'],
    ];
    $s = $styles[$post->type->value] ?? $styles['blog'];
@endphp

<a href="{{ route('blog.show', $post->slug) }}" {{ $attributes->merge(['class' => 'group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white transition hover:-translate-y-0.5 hover:border-rose-300 hover:shadow-md']) }}>
    @if ($post->cover_image)
        <div class="relative h-44 w-full overflow-hidden">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($post->cover_image) }}" alt="" loading="lazy" class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
        </div>
    @else
        <div class="relative flex h-44 w-full items-center justify-center overflow-hidden bg-gradient-to-br {{ $s['grad'] }}">
            <x-icon :name="$post->type->icon()" class="h-20 w-20 {{ $s['glyph'] }}" stroke="1.2" />
        </div>
    @endif

    <div class="flex flex-1 flex-col p-5">
        <div class="mb-2 flex items-center gap-2">
            <span class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-0.5 text-xs font-semibold {{ $s['badge'] }}">
                <x-icon :name="$post->type->icon()" class="h-3.5 w-3.5" />
                {{ $post->type->label() }}
            </span>
            @if ($post->published_at)
                <span class="text-xs text-slate-400">{{ $post->published_at->translatedFormat('d M Y') }}</span>
            @endif
        </div>

        <h3 class="font-semibold text-slate-800 group-hover:text-rose-700">{{ $post->title }}</h3>

        @if ($post->excerpt)
            <p class="mt-1 line-clamp-2 text-sm text-slate-500">{{ $post->excerpt }}</p>
        @endif

        <div class="mt-auto flex items-center gap-3 pt-4 text-xs text-slate-400">
            @if ($post->author)
                <span class="flex items-center gap-1"><x-icon name="users" class="h-3.5 w-3.5" /> {{ $post->author->name }}</span>
            @endif
            <span class="flex items-center gap-1"><x-icon name="arrow-right" class="h-3.5 w-3.5" /> Batafsil</span>
        </div>
    </div>
</a>
