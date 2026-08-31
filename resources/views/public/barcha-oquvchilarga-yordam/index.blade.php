@extends('layouts.app')
@section('title', "Barcha o'quvchilarga yordam berish — O'qish savodxonligini rivojlantirish")
@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.barcha-oquvchilarga-yordam._sidebar')

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative bg-gradient-to-br from-blue-600 to-indigo-700 px-6 py-7">
            <div class="pointer-events-none absolute -right-10 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -right-24 bottom-0 h-48 w-48 rounded-full bg-white/5"></div>
            <div class="relative flex items-center gap-8">
                <div class="flex-1">
                    <h1 class="text-3xl font-extrabold tracking-tight text-white">Har bir bola muhim!</h1>
                    <p class="mt-2 text-blue-100 leading-relaxed max-w-lg text-sm">
                        Differensial va inklyuziv yondashuv asosida har bir o'quvchining ehtiyoji, imkoniyati va rivojlanish sur'atini hisobga olib, o'qish savodxonligini rivojlantirish bo'yicha amaliy-metodik ko'rsatmalar.
                    </p>
                    <div class="mt-5 grid grid-cols-2 gap-x-4 gap-y-2 sm:grid-cols-4 max-w-xl">
                        @foreach([
                            ["Har bir o'quvchiga mos yondashuv", 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z'],
                            ["Qo'llab-quvvatlovchi muhit", 'M9 12.75L11.25 15 15 9.75m6 3a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['Rivojlanishni kuzatish', 'M2.25 18L9 11.25l4.306 4.306a11.95 11.95 0 015.814-5.518l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.94'],
                            ["Hamkorlik va rag'bat", 'M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z'],
                        ] as [$label, $icon])
                            <div class="flex items-center gap-2">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-white/15">
                                    <svg class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/></svg>
                                </span>
                                <span class="text-[11px] leading-tight font-medium text-blue-50">{{ $label }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="hidden lg:block relative shrink-0 w-56">
                    <div class="flex items-end justify-center gap-3 mb-3">
                        <x-section.kid-avatar hair="#3f2a1a" shirt="#f97316" class="h-16 w-16 drop-shadow" />
                        <x-section.kid-avatar hair="#1f2937" shirt="#10b981" class="h-20 w-20 drop-shadow" />
                        <x-section.kid-avatar hair="#5b3a29" shirt="#ec4899" class="h-16 w-16 drop-shadow" />
                    </div>
                    <div class="space-y-2">
                        <div class="rounded-xl rounded-tl-sm bg-white px-3 py-2 shadow-md -rotate-2 w-fit ml-2">
                            <p class="text-[11px] font-bold text-indigo-900">Har bir bola — muhim!</p>
                        </div>
                        <div class="rounded-xl rounded-tr-sm bg-white px-3 py-2 shadow-md rotate-2 w-fit ml-auto mr-2">
                            <p class="text-[11px] font-bold text-indigo-900">Har bir qadam — muvaffaqiyat!</p>
                        </div>
                    </div>
                </div>
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
                    'hair'  => '#3f2a1a', 'shirt' => '#3b82f6',
                    'badge' => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25',
                ],
                [
                    'num'   => 2,
                    'slug'  => 'differensial-topshiriqlar',
                    'color' => 'violet',
                    'title' => "Differensial topshiriqlar",
                    'desc'  => "Bir matn asosida oson, o'rta va murakkab darajadagi topshiriqlar orqali har bir o'quvchiga mos yondashuv.",
                    'points'=> ['Uch darajali topshiriq', 'Neytral daraja nomlari', 'Individual baholash', "0-3 ballik rubrika"],
                    'hair'  => '#1f2937', 'shirt' => '#8b5cf6',
                    'badge' => null,
                    'badgeBars' => true,
                ],
                [
                    'num'   => 3,
                    'slug'  => 'ikkinchi-til-oquvchilari',
                    'color' => 'emerald',
                    'title' => "Ikkinchi til sifatida o'zbek tilini o'rganayotgan o'quvchilar",
                    'desc'  => "O'zbek tili ona tili bo'lmagan o'quvchilar uchun til qo'llab-quvvatlovi, rasmli lug'at va sodda gaplar bilan ishlash.",
                    'points'=> ["Rasmli lug'at", 'Oldindan so\'z tanishtirish', 'Gap boshlovchi iboralar', 'Juftlikda ishlash'],
                    'hair'  => '#1f2937', 'shirt' => '#10b981',
                    'badge' => 'M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z',
                ],
                [
                    'num'   => 4,
                    'slug'  => 'iqtidorli-oquvchilar',
                    'color' => 'amber',
                    'title' => "Iqtidorli o'quvchilar bilan ishlash",
                    'desc'  => "Tez va chuqur tushunadigan o'quvchilar uchun murakkabroq, ijodiy va tahliliy topshiriqlar.",
                    'points'=> ['Murakkabroq matnlar', 'Matnlarni solishtirish', 'PIRLS savoli tuzish', 'Mustaqil kitob taqdimoti'],
                    'hair'  => '#5b3a29', 'shirt' => '#f59e0b',
                    'badge' => 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.562.562 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z',
                ],
                [
                    'num'   => 5,
                    'slug'  => 'individual-oqish-xaritasi',
                    'color' => 'rose',
                    'title' => "Individual o'qish xaritasi",
                    'desc'  => "Har bir o'quvchining o'qish savodxonligi bo'yicha rivojlanishini kuzatish va mos yordam rejalashtirish.",
                    'points'=> ['Haftalik o\'qish kuzatuvi', 'Rivojlanish grafigi', 'Ota-onaga aniq tavsiya', '4 darajali baholash'],
                    'hair'  => '#3f2a1a', 'shirt' => '#f43f5e',
                    'badge' => null,
                    'badgeChart' => true,
                ],
            ];

            $colorMap = [
                'blue'    => ['badge' => 'bg-blue-100 text-blue-700',     'btn' => 'border-blue-200 text-blue-700 hover:bg-blue-50',     'icon' => 'bg-blue-50',    'accent' => 'text-blue-600'],
                'violet'  => ['badge' => 'bg-violet-100 text-violet-700', 'btn' => 'border-violet-200 text-violet-700 hover:bg-violet-50', 'icon' => 'bg-violet-50', 'accent' => 'text-violet-600'],
                'emerald' => ['badge' => 'bg-emerald-100 text-emerald-700','btn' => 'border-emerald-200 text-emerald-700 hover:bg-emerald-50','icon' => 'bg-emerald-50', 'accent' => 'text-emerald-600'],
                'amber'   => ['badge' => 'bg-amber-100 text-amber-700',   'btn' => 'border-amber-200 text-amber-700 hover:bg-amber-50',   'icon' => 'bg-amber-50',   'accent' => 'text-amber-600'],
                'rose'    => ['badge' => 'bg-rose-100 text-rose-700',     'btn' => 'border-rose-200 text-rose-700 hover:bg-rose-50',     'icon' => 'bg-rose-50',    'accent' => 'text-rose-600'],
            ];
        @endphp

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-6">
            @foreach ($cards as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <div class="h-28 relative flex items-center justify-center overflow-hidden {{ $c['icon'] }}">
                        <div class="absolute -right-6 -top-6 h-20 w-20 rounded-full bg-white/50"></div>
                        <div class="absolute -left-8 -bottom-8 h-20 w-20 rounded-full bg-white/40"></div>
                        <x-section.kid-avatar :hair="$card['hair']" :shirt="$card['shirt']" class="relative h-20 w-20 drop-shadow" />
                        <span class="absolute bottom-2.5 right-3 grid h-7 w-7 place-items-center rounded-full bg-white shadow">
                            @if ($card['badge'])
                                <svg class="h-3.5 w-3.5 {{ $c['accent'] }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['badge'] }}"/></svg>
                            @elseif (!empty($card['badgeBars']))
                                <svg class="h-3.5 w-3.5 {{ $c['accent'] }}" fill="none" viewBox="0 0 16 16"><rect x="1" y="9" width="3" height="6" rx="0.75" fill="currentColor" opacity="0.45"/><rect x="6.5" y="5" width="3" height="10" rx="0.75" fill="currentColor" opacity="0.7"/><rect x="12" y="1" width="3" height="14" rx="0.75" fill="currentColor"/></svg>
                            @elseif (!empty($card['badgeChart']))
                                <svg class="h-3.5 w-3.5 {{ $c['accent'] }}" fill="none" viewBox="0 0 16 16"><path d="M1 13 L5.5 8.5 L9 11 L15 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            @endif
                        </span>
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
