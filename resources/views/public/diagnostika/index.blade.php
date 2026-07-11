@extends('layouts.app')

@section('title', "Diagnostika va baholash — O'qish savodxonligi")

@section('content')

<div class="mb-8 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
    <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs><pattern id="dp" width="40" height="40" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1.5" fill="white"/></pattern></defs>
            <rect width="100%" height="100%" fill="url(#dp)"/>
        </svg>
    </div>
    <div class="relative px-8 py-8 flex items-center gap-6">
        <div class="hidden md:flex h-20 w-20 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 items-center justify-center">
            <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
            </svg>
        </div>
        <div class="flex-1">
            <div class="flex flex-wrap gap-2 mb-3">
                <span class="rounded-full bg-white/25 px-3 py-1 text-xs font-semibold text-white">Diagnostika</span>
                <span class="rounded-full bg-white/25 px-3 py-1 text-xs font-semibold text-white">Baholash</span>
                <span class="rounded-full bg-white/25 px-3 py-1 text-xs font-semibold text-white">PIRLS standartlari</span>
            </div>
            <h1 class="text-3xl font-extrabold text-white leading-tight">Diagnostika va baholash</h1>
            <p class="mt-2 text-sky-100 text-sm max-w-2xl leading-relaxed">
                Bu bo'limda boshlang'ich sinf o'quvchilarining o'qish savodxonligini aniqlash, baholash va rivojlanishini
                kuzatish uchun zarur bo'lgan diagnostik topshiriqlar, 0–3 ballik rubrikalar, testlar banki va portfel shakllari jamlangan.
            </p>
        </div>
    </div>
</div>

<div class="grid grid-cols-2 gap-5 mb-8">
    @php
        $sections = [
            ['slug' => 'diagnostikasi', 'num' => '1', 'title' => "O'qish savodxonligi diagnostikasi",
             'desc' => "O'quvchining matnni o'qish, tushunish, xulosa chiqarish va asoslash darajasini aniqlash.",
             'items' => ['8 ta baholash indikatori', 'Rubrika jadvali', 'Namunaviy matn va savollar', 'Natija tahlili jadvali'],
             'icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
            ['slug' => 'mezonlar', 'num' => '2', 'title' => '0–3 ballik baholash mezonlari',
             'desc' => "O'quvchi javobini aniq, adolatli va rivojlantiruvchi mezonlar asosida baholash tizimi.",
             'items' => ['0–3 ballik umumiy rubrika', 'Javob namunalari (0–3 ball)', 'Ko\'nikma tahlili jadvali', 'O\'qituvchi uchun tavsiyalar'],
             'icon' => 'M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z'],
            ['slug' => 'testlar', 'num' => '3', 'title' => 'Testlar banki',
             'desc' => "1–4-sinf o'quvchilari uchun PIRLS tipidagi matnli testlar va darajali topshiriqlar jamlanmasi.",
             'items' => ['9 turdagi topshiriq formatlari', 'Ko\'nikma–topshiriq turi jadvali', 'Namunaviy test (5 savol)', 'Natija tahlili mezonlari'],
             'icon' => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z'],
            ['slug' => 'savol-javob', 'num' => '4', 'title' => 'Matn asosida savol-javob',
             'desc' => "O'quvchining matn asosida og'zaki va yozma javob berish, dalil keltirish ko'nikmalarini baholash.",
             'items' => ['5 darajali savol tizimi', '6 ta baholash indikatori', 'Namunaviy matn va 6 savol', 'O\'qituvchi uchun yo\'naltiruvchi savollar'],
             'icon' => 'M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z'],
            ['slug' => 'portfolio', 'num' => '5', 'title' => "O'quvchi portfeli",
             'desc' => "O'quvchining o'qish savodxonligi bo'yicha rivojlanish dinamikasini muntazam kuzatish tizimi.",
             'items' => ['12 qismli portfel tarkibi', '8 ta kuzatuv indikatori', 'Portfel sahifasi namunasi', 'Oylik tahlil savollari'],
             'icon' => 'M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z'],
        ];
    @endphp
    @foreach($sections as $s)
        <a href="{{ route('diagnostika.show', $s['slug']) }}"
           class="group rounded-2xl border border-slate-200 bg-white p-5 hover:border-blue-300 hover:shadow-md transition-all">
            <div class="flex items-start gap-4 mb-4">
                <div class="h-12 w-12 shrink-0 rounded-xl bg-blue-100 border border-blue-200 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                    <svg class="h-6 w-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $s['icon'] }}"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="text-xs font-bold text-blue-500">{{ $s['num'] }}-bo'lim</span>
                    </div>
                    <h2 class="text-base font-bold text-slate-800 leading-snug group-hover:text-blue-700 transition-colors">{{ $s['title'] }}</h2>
                </div>
            </div>
            <p class="text-sm text-slate-600 leading-relaxed mb-4">{{ $s['desc'] }}</p>
            <ul class="space-y-1.5">
                @foreach($s['items'] as $item)
                    <li class="flex items-center gap-2 text-xs text-slate-600">
                        <svg class="h-3.5 w-3.5 text-blue-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
            <div class="mt-4 flex items-center gap-1 text-xs font-semibold text-blue-600 group-hover:gap-2 transition-all">
                Ko'rish
                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </div>
        </a>
    @endforeach
</div>

<div class="grid grid-cols-4 gap-4">
    @foreach([['Diagnostika turlari', '3', 'Boshlang\'ich / Oraliq / Yakuniy'],['Baholash darajalari','4','Boshlang\'ich → Yuqori'],['Ko\'nikma indikatorlari','8','O\'qish, tushunish, talqin...'],['Portfel qismlari','12','To\'liq rivojlanish xaritasi']] as [$label,$num,$sub])
        <div class="rounded-2xl border border-slate-200 bg-white px-5 py-4 text-center">
            <div class="text-3xl font-extrabold text-blue-600 mb-1">{{ $num }}</div>
            <div class="text-sm font-semibold text-slate-800">{{ $label }}</div>
            <div class="text-xs text-slate-500 mt-0.5">{{ $sub }}</div>
        </div>
    @endforeach
</div>

@endsection
