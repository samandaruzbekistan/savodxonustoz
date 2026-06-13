@php
    $groups = collect(config('navigation.admin'))
        ->map(function ($group) {
            $group['items'] = collect($group['items'])
                ->filter(fn ($item) => \Illuminate\Support\Facades\Route::has($item['route']))
                ->all();

            return $group;
        })
        ->filter(fn ($group) => count($group['items']) > 0);
@endphp

<aside class="fixed inset-y-0 left-0 z-40 w-64 -translate-x-full transform border-r border-slate-200 bg-white transition-transform lg:static lg:translate-x-0"
       :class="sidebar ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">
    <div class="flex h-16 items-center gap-2 border-b border-slate-200 px-5">
        <span class="grid h-9 w-9 place-items-center rounded-lg bg-indigo-600 text-sm font-bold text-white">SU</span>
        <span class="font-bold text-slate-800">{{ config('app.name') }}</span>
    </div>

    <nav class="space-y-4 p-3">
        @foreach ($groups as $group)
            <div class="space-y-1">
                @if ($group['heading'])
                    <p class="px-3 pb-1 text-xs font-semibold uppercase tracking-wide text-slate-400">{{ $group['heading'] }}</p>
                @endif
                @foreach ($group['items'] as $item)
                    <a href="{{ route($item['route']) }}"
                       class="block rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs($item['match']) ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>
        @endforeach

        <a href="{{ route('home') }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-500 hover:bg-slate-100">← Saytga qaytish</a>
    </nav>
</aside>
<div x-show="sidebar" x-cloak @click="sidebar = false" class="fixed inset-0 z-30 bg-black/30 lg:hidden"></div>
