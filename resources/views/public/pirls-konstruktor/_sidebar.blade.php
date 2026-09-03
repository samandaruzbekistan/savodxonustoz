@php
    $navItems = [
        ['slug' => 'matn-yuklash',         'label' => 'Matn yuklash oynasi',            'available' => true],
        ['slug' => 'literal-tushunish',    'label' => 'Literal tushunish savollari',    'available' => true],
        ['slug' => 'xulosa-chiqarish',     'label' => 'Xulosa chiqarish savollari',     'available' => true],
        ['slug' => 'talqin-qilish',        'label' => 'Talqin qilish savollari',        'available' => true],
        ['slug' => 'baholash-savollari',   'label' => 'Baholash savollari',             'available' => true],
        ['slug' => 'javob-kaliti',         'label' => 'Javob kaliti yaratish',          'available' => true],
        ['slug' => 'yuklab-olish',         'label' => "Pdf, Word yuklab olish",          'available' => true],
    ];
    $current = $activeSlug ?? null;
@endphp

<aside class="hidden w-64 shrink-0 lg:block">
    <div class="sticky top-20 space-y-4">
        <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-sm">
            <a href="{{ route('pirls-konstruktor.index') }}" class="flex items-center gap-2.5 bg-gradient-to-br from-blue-600 to-indigo-600 px-4 py-4">
                <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-white/20">
                    <x-icon name="target" class="h-5 w-5 text-white" stroke="1.6" />
                </span>
                <span class="text-sm font-bold leading-tight text-white">PIRLS konstruktori</span>
            </a>
            <nav class="bg-white divide-y divide-slate-100">
                @foreach ($navItems as $i => $item)
                    @if ($item['available'])
                        <a href="{{ route('pirls-konstruktor.show', $item['slug']) }}"
                           class="flex items-center gap-3 px-4 py-3 text-sm font-medium transition-colors
                               {{ $current === $item['slug']
                                   ? 'bg-blue-50 text-blue-700 border-l-2 border-blue-500'
                                   : 'text-slate-700 hover:bg-blue-50 hover:text-blue-700' }}">
                            <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i + 1 }}</span>
                            <span class="leading-snug">{{ $item['label'] }}</span>
                        </a>
                    @else
                        <span class="flex items-center justify-between gap-3 px-4 py-3 text-sm text-slate-350 opacity-60">
                            <span class="flex items-center gap-3">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-400 font-bold text-[10px]">{{ $i + 1 }}</span>
                                <span class="leading-snug text-slate-400">{{ $item['label'] }}</span>
                            </span>
                            <span class="shrink-0 rounded-full bg-slate-100 px-2 py-0.5 text-[10px] font-medium text-slate-400">Tez orada</span>
                        </span>
                    @endif
                @endforeach
            </nav>
            <div class="bg-slate-50 divide-y divide-slate-100 border-t border-slate-200">
                <a href="{{ route('metodik.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                    <x-icon name="cap" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                    Metodik modul
                </a>
                <a href="{{ route('contact') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-slate-600 hover:text-blue-700 transition-colors">
                    <x-icon name="help" class="h-4 w-4 shrink-0 text-slate-400" stroke="1.8" />
                    Savollaringiz bormi?
                </a>
            </div>
        </div>

        {{-- Eslatma --}}
        <div class="overflow-hidden rounded-2xl border border-amber-200 bg-amber-50">
            <div class="p-4">
                <div class="mb-2.5 flex items-center gap-2">
                    <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-amber-500">
                        <x-icon name="bulb" class="h-4 w-4 text-white" stroke="1.8" />
                    </span>
                    <h3 class="text-xs font-bold uppercase tracking-wide text-amber-800">Eslatma</h3>
                </div>
                <p class="text-xs leading-relaxed text-amber-900">
                    PIRLS konstruktori o'qituvchilarga matn va savollarni PIRLS metodikasiga mos ravishda yaratishda
                    metodik yordam beradi. Har bir bosqichda tegishli yo'riqnoma mavjud.
                </p>
            </div>
            <div class="flex justify-center border-t border-amber-100 bg-amber-100/60 py-3">
                <img src="{{ asset('images/sections/pirls-konstruktor/16_talim_shapkasi.png') }}" alt=""
                     class="h-14 w-14 object-contain drop-shadow-sm">
            </div>
        </div>
    </div>
</aside>
