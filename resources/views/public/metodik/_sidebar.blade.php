@php
    $navItems = [
        ['slug' => 'matn-ishlash',        'label' => 'Matn bilan ishlash metodikasi'],
        ['slug' => 'savol-tuzish',         'label' => 'Savol tuzish metodikasi'],
        ['slug' => 'pirls-topshiriq',      'label' => "PIRLS topshiriqlarini yaratish"],
        ['slug' => 'javob-baholash',       'label' => "O'quvchi javobini baholash"],
        ['slug' => 'ravon-rivojlantirish', 'label' => "Ravon o'qishni rivojlantirish"],
        ['slug' => 'lugat-ishlash',        'label' => "Lug'at ustida ishlash"],
    ];
    $current = $activeSlug ?? null;
@endphp

<aside class="hidden w-64 shrink-0 lg:block">
    <div class="sticky top-20 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
        <a href="{{ route('metodik.index') }}" class="flex items-center gap-2.5 bg-gradient-to-br from-emerald-600 to-teal-600 px-4 py-4">
            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/></svg>
            </span>
            <span class="text-sm font-bold leading-tight text-white">Metodik modul</span>
        </a>
        <nav class="bg-white divide-y divide-slate-100">
            @foreach ($navItems as $item)
                <a href="{{ route('metodik.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                       {{ $current === $item['slug']
                           ? 'bg-emerald-50 text-emerald-700 border-l-2 border-emerald-500'
                           : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-700' }}">
                    <span class="leading-snug">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
        <div class="bg-slate-50 divide-y divide-slate-100 border-t border-slate-200">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-emerald-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                Metodikalar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-emerald-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                Savollaringiz bormi?
            </a>
        </div>
    </div>
</aside>
