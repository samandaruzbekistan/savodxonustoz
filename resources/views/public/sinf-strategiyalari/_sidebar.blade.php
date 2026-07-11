@php
    $navItems = [
        ['slug' => 'matn-tanlash',                'label' => "Sinfda matnlarni tanlash"],
        ['slug' => 'foydalanish-strategiyalari',  'label' => "Matnlardan foydalanish strategiyalari"],
        ['slug' => 'matn-turlari',                'label' => "Matn turlari"],
        ['slug' => 'decodable-books',             'label' => "Decodable Books'dan foydalanish"],
        ['slug' => 'sinf-kutubxonalari',          'label' => "Sinf kutubxonalari"],
        ['slug' => 'matn-xususiyatlari',          'label' => "Matn xususiyatlarini o'qitish"],
        ['slug' => 'matn-turlarini-tushunish',    'label' => "Matn turlarini tushunish"],
    ];
    $current = $activeSlug ?? null;
@endphp

<aside class="hidden w-64 shrink-0 lg:block">
    <div class="sticky top-20 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
        <a href="{{ route('sinf-strategiyalari.index') }}" class="flex items-center gap-2.5 bg-gradient-to-br from-blue-600 to-indigo-600 px-4 py-4">
            <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 00-.491 6.347A48.62 48.62 0 0112 20.904a48.62 48.62 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.636 50.636 0 00-2.658-.813A59.906 59.906 0 0112 3.493a59.903 59.903 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                </svg>
            </span>
            <span class="text-sm font-bold leading-tight text-white">Sinf strategiyalari</span>
        </a>
        <nav class="bg-white divide-y divide-slate-100">
            @foreach ($navItems as $item)
                <a href="{{ route('sinf-strategiyalari.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                       {{ $current === $item['slug']
                           ? 'bg-blue-50 text-blue-700 border-l-2 border-blue-500'
                           : 'text-slate-700 hover:bg-blue-50 hover:text-blue-700' }}">
                    <span class="leading-snug">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
        <div class="bg-amber-50 border-t border-amber-200 p-4">
            <div class="flex items-start gap-2">
                <svg class="h-4 w-4 shrink-0 mt-0.5 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                </svg>
                <div>
                    <p class="text-xs font-bold text-amber-800 mb-1">Eslatma</p>
                    <p class="text-xs text-amber-700 leading-relaxed">Har bir bo'limda nazariy izoh, amaliy tavsiya, darsda qo'llash usuli va kutiladigan natija berilgan.</p>
                </div>
            </div>
        </div>
        <div class="bg-white divide-y divide-slate-100 border-t border-slate-200">
            <a href="{{ route('resources.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                Materiallar yuklab olish
            </a>
            <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                Savollaringiz bormi?
            </a>
        </div>
    </div>
</aside>
