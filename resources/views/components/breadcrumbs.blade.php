@props(['items' => []])

<nav class="mb-4 flex flex-wrap items-center gap-1 text-sm text-slate-500">
    <a href="{{ route('home') }}" class="hover:text-indigo-700">Bosh sahifa</a>
    @foreach ($items as $item)
        <span class="text-slate-300">/</span>
        @if (! empty($item['url']))
            <a href="{{ $item['url'] }}" class="hover:text-indigo-700">{{ $item['label'] }}</a>
        @else
            <span class="font-medium text-slate-700">{{ $item['label'] }}</span>
        @endif
    @endforeach
</nav>
