@props([
    'items',
    'title' => "101 o'qish kursi",
    'tagline' => "Ertaklar bilan o'qishni zavqli tarzda o'rganing va natijangizni kuzating.",
    'tip' => null,
])

<aside {{ $attributes->merge(['class' => 'space-y-4 lg:sticky lg:top-24 lg:self-start']) }}>
    <div class="rounded-2xl bg-gradient-to-br from-sky-500 to-blue-600 p-5 text-white shadow-sm">
        <span class="grid h-11 w-11 place-items-center rounded-xl bg-white/20">
            <x-icon name="library" class="h-5 w-5" />
        </span>
        <h2 class="mt-3 text-sm font-bold">{{ $title }}</h2>
        <p class="mt-1 text-xs leading-relaxed text-sky-100">{{ $tagline }}</p>
    </div>

    <nav class="rounded-2xl border border-slate-200 bg-white p-2 shadow-sm">
        @foreach ($items as $item)
            @if (! empty($item['soon']))
                <span class="flex items-center justify-between gap-2 rounded-xl px-2.5 py-2 text-sm text-slate-300">
                    <span class="flex items-center gap-2.5">
                        <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-slate-50"><x-icon :name="$item['icon']" class="h-3.5 w-3.5" /></span>
                        {{ $item['label'] }}
                    </span>
                    <span class="rounded-full bg-slate-100 px-1.5 py-0.5 text-[9px] font-semibold uppercase">Tez orada</span>
                </span>
            @elseif ($item['href'])
                <a href="{{ $item['href'] }}"
                   class="flex items-center gap-2.5 rounded-xl px-2.5 py-2 text-sm font-semibold transition
                       {{ ! empty($item['active']) ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }}">
                    <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg {{ $item['color'] }}"><x-icon :name="$item['icon']" class="h-3.5 w-3.5" /></span>
                    {{ $item['label'] }}
                </a>
            @else
                <span class="flex items-center gap-2.5 rounded-xl px-2.5 py-2 text-sm font-medium text-slate-300">
                    <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-slate-50"><x-icon :name="$item['icon']" class="h-3.5 w-3.5" /></span>
                    {{ $item['label'] }}
                </span>
            @endif
        @endforeach
    </nav>

    @if ($tip)
        <div class="rounded-2xl border border-amber-200 bg-amber-50 p-4">
            <h3 class="mb-1.5 flex items-center gap-1.5 text-xs font-bold text-amber-900">
                <x-icon name="star" class="h-3.5 w-3.5" /> Maslahat
            </h3>
            <p class="text-xs leading-relaxed text-amber-800">{{ $tip }}</p>
        </div>
    @endif
</aside>
