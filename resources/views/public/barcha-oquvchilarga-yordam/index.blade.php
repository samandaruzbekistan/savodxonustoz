@extends('layouts.app')
@section('title', "Barcha o'quvchilarga yordam berish — O'qish savodxonligini rivojlantirish")
@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.barcha-oquvchilarga-yordam._sidebar')

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative bg-gradient-to-br from-blue-600 to-indigo-600 px-6 py-7">
            <div class="relative">
                <h1 class="text-3xl font-extrabold tracking-tight text-white">Har bir bola muhim!</h1>
                <p class="mt-2 text-blue-100 leading-relaxed max-w-3xl text-sm">
                    Differensial va inklyuziv yondashuv asosida har bir o'quvchining ehtiyoji, imkoniyati va rivojlanish sur'atini hisobga olib, o'qish savodxonligini rivojlantirish bo'yicha amaliy-metodik ko'rsatmalar.
                </p>
            </div>
        </div>

        @php
            $cards = [
                [
                    'num'   => 1,
                    'slug'  => 'oqishda-qiynalayotganlar',
                    'color' => 'blue',
                    'title' => "O'qishda qiynalayotgan o'quvchilar",
                    'desc'  => "Matnni o'qish yoki tushunishda qiynalayotgan o'quvchilarga mos metodik yordam, ko'proq vaqt va rag'bat berish yo'llari.",
                    'points'=> ["Matnni qismlarga bo'lish", "Audio bilan qo'llab-quvvatlash", "Qayta o'qish mashqlari", "Juftlikda o'qish"],
                    'emoji' => '📖',
                ],
                [
                    'num'   => 2,
                    'slug'  => 'differensial-topshiriqlar',
                    'color' => 'violet',
                    'title' => "Differensial topshiriqlar",
                    'desc'  => "Bir matn asosida oson, o'rta va murakkab darajadagi topshiriqlar orqali har bir o'quvchiga mos yondashuv.",
                    'points'=> ['Uch darajali topshiriq', 'Neytral daraja nomlari', 'Individual baholash', "0-3 ballik rubrika"],
                    'emoji' => '🎯',
                ],
                [
                    'num'   => 3,
                    'slug'  => 'ikkinchi-til-oquvchilari',
                    'color' => 'emerald',
                    'title' => "Ikkinchi til sifatida o'zbek tilini o'rganayotgan o'quvchilar",
                    'desc'  => "O'zbek tili ona tili bo'lmagan o'quvchilar uchun til qo'llab-quvvatlovi, rasmli lug'at va sodda gaplar bilan ishlash.",
                    'points'=> ["Rasmli lug'at", 'Oldindan so\'z tanishtirish', 'Gap boshlovchi iboralar', 'Juftlikda ishlash'],
                    'emoji' => '🗣️',
                ],
                [
                    'num'   => 4,
                    'slug'  => 'iqtidorli-oquvchilar',
                    'color' => 'amber',
                    'title' => "Iqtidorli o'quvchilar bilan ishlash",
                    'desc'  => "Tez va chuqur tushunadigan o'quvchilar uchun murakkabroq, ijodiy va tahliliy topshiriqlar.",
                    'points'=> ['Murakkabroq matnlar', 'Matnlarni solishtirish', 'PIRLS savoli tuzish', 'Mustaqil kitob taqdimoti'],
                    'emoji' => '🌟',
                ],
                [
                    'num'   => 5,
                    'slug'  => 'individual-oqish-xaritasi',
                    'color' => 'rose',
                    'title' => "Individual o'qish xaritasi",
                    'desc'  => "Har bir o'quvchining o'qish savodxonligi bo'yicha rivojlanishini kuzatish va mos yordam rejalashtirish.",
                    'points'=> ['Haftalik o\'qish kuzatuvi', 'Rivojlanish grafigi', 'Ota-onaga aniq tavsiya', '4 darajali baholash'],
                    'emoji' => '🗺️',
                ],
            ];

            $colorMap = [
                'blue'    => ['badge' => 'bg-blue-100 text-blue-700',     'btn' => 'border-blue-200 text-blue-700 hover:bg-blue-50',     'icon' => 'bg-blue-50'],
                'violet'  => ['badge' => 'bg-violet-100 text-violet-700', 'btn' => 'border-violet-200 text-violet-700 hover:bg-violet-50', 'icon' => 'bg-violet-50'],
                'emerald' => ['badge' => 'bg-emerald-100 text-emerald-700','btn' => 'border-emerald-200 text-emerald-700 hover:bg-emerald-50','icon' => 'bg-emerald-50'],
                'amber'   => ['badge' => 'bg-amber-100 text-amber-700',   'btn' => 'border-amber-200 text-amber-700 hover:bg-amber-50',   'icon' => 'bg-amber-50'],
                'rose'    => ['badge' => 'bg-rose-100 text-rose-700',     'btn' => 'border-rose-200 text-rose-700 hover:bg-rose-50',     'icon' => 'bg-rose-50'],
            ];
        @endphp

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-6">
            @foreach ($cards as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <div class="h-24 flex items-center justify-center {{ $c['icon'] }}">
                        <span class="text-4xl">{{ $card['emoji'] }}</span>
                    </div>
                    <div class="flex flex-col flex-1 p-5 pt-4">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="inline-flex h-6 w-6 items-center justify-center rounded-full text-xs font-bold {{ $c['badge'] }}">{{ $card['num'] }}</span>
                        </div>
                        <h3 class="text-sm font-bold text-slate-800 leading-snug mb-1.5">{{ $card['title'] }}</h3>
                        <p class="text-xs text-slate-500 leading-relaxed mb-3">{{ $card['desc'] }}</p>
                        <ul class="flex-1 space-y-1.5 mb-4">
                            @foreach ($card['points'] as $point)
                                <li class="flex items-start gap-1.5 text-xs text-slate-600">
                                    <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-slate-400" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('barcha-oquvchilarga-yordam.show', $card['slug']) }}"
                           class="inline-flex items-center gap-1 rounded-lg border px-3 py-1.5 text-xs font-semibold transition {{ $c['btn'] }}">
                            Batafsil
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 mb-6">
            @foreach([
                ['label' => "Har bir bola o'qishni o'rganishi mumkin", 'icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
                ['label' => "Har bir o'quvchiga mos yondashuv zarur", 'icon' => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z'],
                ['label' => 'Baholash rivojlantirish uchun xizmat qiladi', 'icon' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                ['label' => "Ota-ona, o'qituvchi va o'quvchi hamkorligi", 'icon' => 'M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772'],
            ] as $p)
                <div class="rounded-2xl border border-slate-200 bg-white px-4 py-4 text-center">
                    <div class="mx-auto mb-2 grid h-9 w-9 place-items-center rounded-full bg-blue-100">
                        <svg class="h-4.5 w-4.5 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $p['icon'] }}"/></svg>
                    </div>
                    <p class="text-xs font-semibold text-slate-700 leading-snug">{{ $p['label'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="rounded-2xl border border-blue-200 bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-bold text-blue-900 mb-1">Sinfdagi har bir o'quvchi bir xil tezlikda va bir xil usulda o'qimaydi.</p>
                    <p class="text-xs text-blue-700">O'qituvchi har bir o'quvchining imkoniyati, ehtiyoji va rivojlanish sur'atini hisobga olgan holda o'qish savodxonligini rivojlantirishi kerak.</p>
                </div>
                <a href="{{ route('barcha-oquvchilarga-yordam.show', 'oqishda-qiynalayotganlar') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                    Boshlash
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
