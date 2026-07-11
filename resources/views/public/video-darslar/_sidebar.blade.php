@php
    $cats = [
        ['id' => 'all',      'label' => 'Barcha videolar',                'icon' => 'M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z'],
        ['id' => 'asoslar',  'label' => "O'qish savodxonligi asoslari",   'icon' => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'],
        ['id' => 'fonetik',  'label' => 'Fonetik usullar',                'icon' => 'M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z'],
        ['id' => 'pirls',    'label' => 'PIRLS savollari',                'icon' => 'M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z'],
        ['id' => 'baholash', 'label' => 'Baholash metodlari',             'icon' => 'M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75'],
        ['id' => 'metodik',  'label' => 'Dars metodikasi',                'icon' => 'M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5'],
    ];
@endphp

<aside class="hidden w-64 shrink-0 lg:block">
    <div class="sticky top-20 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">

        {{-- Header --}}
        <a href="{{ route('video-darslar.index') }}"
           class="flex items-center gap-2.5 px-4 py-4"
           style="background: linear-gradient(135deg, #7c3aed 0%, #4f46e5 50%, #2563eb 100%);">
            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z"/>
                </svg>
            </span>
            <span class="text-sm font-bold leading-tight text-white">Video darslar</span>
        </a>

        {{-- Category nav --}}
        <nav class="bg-white divide-y divide-slate-100">
            @foreach ($cats as $cat)
                <a href="#{{ $cat['id'] }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm font-medium text-slate-700 hover:bg-violet-50 hover:text-violet-700 transition-colors">
                    <span class="grid h-6 w-6 shrink-0 place-items-center rounded-md bg-slate-100 text-slate-500">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $cat['icon'] }}"/>
                        </svg>
                    </span>
                    <span class="leading-snug text-xs">{{ $cat['label'] }}</span>
                    <svg class="ml-auto h-3.5 w-3.5 shrink-0 text-slate-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </a>
            @endforeach
        </nav>

        {{-- Tip box --}}
        <div class="bg-violet-50 border-t border-violet-100 p-4">
            <div class="flex items-center gap-2 mb-2">
                <span class="grid h-5 w-5 place-items-center rounded-full bg-violet-200 text-violet-700">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 00-6 6c0 2.03 1.011 3.824 2.555 4.906C7.122 13.546 7.5 14.244 7.5 15h5c0-.756.378-1.454.945-2.094C14.989 11.824 16 10.03 16 8a6 6 0 00-6-6z"/>
                        <path d="M7.5 16.5a.5.5 0 000 1h5a.5.5 0 000-1h-5zM8 18.5a.5.5 0 000 1h4a.5.5 0 000-1H8z"/>
                    </svg>
                </span>
                <span class="text-xs font-bold text-violet-800">Foydali maslahat</span>
            </div>
            <p class="text-xs text-violet-700 leading-relaxed">
                Har bir videoni tomosha qilgach, savol-javob qismini o'qing. Video sinfingizda qo'llashga harakat qiling.
            </p>
        </div>

        {{-- CTA --}}
        <div class="bg-white border-t border-slate-200 divide-y divide-slate-100">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-violet-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                </svg>
                Qo'llanmalar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-violet-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                </svg>
                Biz bilan bog'laning
            </a>
        </div>
    </div>
</aside>
