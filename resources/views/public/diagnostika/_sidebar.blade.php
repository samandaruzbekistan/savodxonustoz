<aside class="w-64 shrink-0">
    <div class="sticky top-6 rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
        <div class="px-4 py-4" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="flex items-center gap-2.5 mb-1">
                <div class="h-7 w-7 rounded-lg bg-white/20 flex items-center justify-center">
                    <svg class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <span class="text-white font-bold text-xs">Diagnostika va baholash</span>
            </div>
            <p class="text-sky-100 text-xs leading-relaxed">O'quvchi natijasini aniqlash va tahlil qilish</p>
        </div>

        <nav class="bg-white divide-y divide-slate-100">
            @php
                $items = [
                    ['slug' => 'diagnostikasi',    'label' => "O'qish savodxonligi diagnostikasi", 'num' => '1'],
                    ['slug' => 'mezonlar',          'label' => '0–3 ballik baholash mezonlari',      'num' => '2'],
                    ['slug' => 'testlar',           'label' => 'Testlar banki',                       'num' => '3'],
                    ['slug' => 'savol-javob',       'label' => 'Matn asosida savol-javob',            'num' => '4'],
                    ['slug' => 'portfolio',         'label' => "O'quvchi portfeli",                   'num' => '5'],
                ];
            @endphp
            @foreach($items as $item)
                @php $active = ($activeSlug ?? '') === $item['slug']; @endphp
                <a href="{{ route('diagnostika.show', $item['slug']) }}"
                   class="flex items-center gap-3 px-4 py-3 text-sm transition-colors {{ $active ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">
                    <span class="h-6 w-6 shrink-0 rounded-full text-xs font-bold flex items-center justify-center {{ $active ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-500' }}">{{ $item['num'] }}</span>
                    <span class="leading-snug">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>

        <div class="bg-white border-t border-slate-100 px-4 py-3">
            <a href="{{ route('diagnostika.index') }}" class="flex items-center gap-2 text-xs text-slate-500 hover:text-blue-600 transition-colors">
                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                Bo'lim asosiy sahifasi
            </a>
        </div>
    </div>
</aside>
