@props(['images', 'name'])

<div class="mb-6 grid grid-cols-3 gap-3">
    <div class="h-36 overflow-hidden rounded-2xl shadow-sm ring-1 ring-slate-200">
        <img src="{{ asset('images/'.$images[0]) }}" alt="{{ $name }}" loading="lazy" class="h-full w-full object-cover">
    </div>
    <div class="-mt-4 h-44 overflow-hidden rounded-2xl shadow-md ring-2 ring-white">
        <img src="{{ asset('images/'.$images[1]) }}" alt="{{ $name }}" loading="lazy" class="h-full w-full object-cover">
    </div>
    <div class="h-36 overflow-hidden rounded-2xl shadow-sm ring-1 ring-slate-200">
        <img src="{{ asset('images/'.$images[2]) }}" alt="{{ $name }}" loading="lazy" class="h-full w-full object-cover">
    </div>
</div>
