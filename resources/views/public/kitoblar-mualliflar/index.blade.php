@extends('layouts.app')

@section('title', "Kitoblar va mualliflar")

@section('content')
    <x-breadcrumbs :items="[['label' => 'Kitoblar va mualliflar', 'url' => null]]" />

    {{-- Hero --}}
    <div class="relative mb-10 grid gap-8 overflow-hidden lg:grid-cols-[1fr_auto] lg:items-center">
        <div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Kitoblar va mualliflar</h1>
            <p class="mt-3 max-w-xl text-slate-500">1–4-sinflar uchun kitob tavsiyalari, o'zbek va jahon bolalar adabiyoti.</p>

            <div class="mt-6 flex flex-wrap gap-6">
                @foreach ([
                    ['icon' => 'book', 'title' => 'Tanlangan kitoblar', 'desc' => 'Sifatli va foydali manbalar'],
                    ['icon' => 'star', 'title' => 'Yoshga mos tavsiyalar', 'desc' => '1–4-sinf o\'quvchilari uchun'],
                    ['icon' => 'heart', 'title' => 'Oson va qulay', 'desc' => 'Tez topish va foydalanish'],
                ] as $feature)
                    <div class="flex items-center gap-3">
                        <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl border border-slate-200 bg-white text-indigo-600">
                            <x-icon :name="$feature['icon']" class="h-5 w-5" stroke="1.6" />
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-slate-800">{{ $feature['title'] }}</p>
                            <p class="text-xs text-slate-400">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="relative mx-auto grid h-64 w-64 shrink-0 place-items-center sm:h-72 sm:w-72">
            <span class="absolute h-52 w-52 rounded-full bg-violet-100/70"></span>
            <img src="{{ asset('images/sections/kitoblar-mualliflar/hero.png') }}" alt="Kitoblar" class="relative h-full w-full object-contain">
        </div>
    </div>

    {{-- Sub-sections --}}
    @php
        $cards = [
            ['n' => '01', 'img' => 'card-1.png', 'title' => "1-sinf uchun tavsiya etiladigan kitoblar", 'desc' => "Qisqa, rasmli va sodda kitoblar.", 'chip' => 'bg-violet-100 text-violet-700', 'btn' => 'border-violet-200 text-violet-700', 'card' => 'bg-violet-50/40 hover:border-violet-300'],
            ['n' => '02', 'img' => 'card-2.png', 'title' => "2-sinf uchun tavsiya etiladigan kitoblar", 'desc' => "Qiziqarli voqeali va tarbiyaviy kitoblar.", 'chip' => 'bg-emerald-100 text-emerald-700', 'btn' => 'border-emerald-200 text-emerald-700', 'card' => 'bg-emerald-50/40 hover:border-emerald-300'],
            ['n' => '03', 'img' => 'card-3.png', 'title' => "3-sinf uchun tavsiya etiladigan kitoblar", 'desc' => "Mazmunan boy, tahlilga imkon beradigan kitoblar.", 'chip' => 'bg-amber-100 text-amber-700', 'btn' => 'border-amber-200 text-amber-700', 'card' => 'bg-amber-50/40 hover:border-amber-300'],
            ['n' => '04', 'img' => 'card-4.png', 'title' => "4-sinf uchun tavsiya etiladigan kitoblar", 'desc' => "Chuqur mazmunli, PIRLS tipidagi matnlar.", 'chip' => 'bg-blue-100 text-blue-700', 'btn' => 'border-blue-200 text-blue-700', 'card' => 'bg-blue-50/40 hover:border-blue-300'],
            ['n' => '05', 'img' => 'card-5.png', 'title' => "O'zbek bolalar adabiyoti mualliflari", 'desc' => "Milliy qadriyat va ona tiliga hurmatni shakllantiruvchi asarlar.", 'chip' => 'bg-rose-100 text-rose-700', 'btn' => 'border-rose-200 text-rose-700', 'card' => 'bg-rose-50/40 hover:border-rose-300'],
            ['n' => '06', 'img' => 'card-6.png', 'title' => "Jahon bolalar adabiyoti", 'desc' => "O'quvchining dunyoqarashini kengaytiruvchi tarjima asarlar.", 'chip' => 'bg-violet-100 text-violet-700', 'btn' => 'border-violet-200 text-violet-700', 'card' => 'bg-violet-50/30 hover:border-violet-300'],
            ['n' => '07', 'img' => 'card-7.png', 'title' => "Haftaning muallifi", 'desc' => "Har hafta bitta yozuvchi yoki shoir bilan tanishtiruvchi rubrika.", 'chip' => 'bg-teal-100 text-teal-700', 'btn' => 'border-teal-200 text-teal-700', 'card' => 'bg-teal-50/40 hover:border-teal-300'],
        ];
    @endphp

    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($cards as $card)
            <div class="group relative flex flex-col overflow-hidden rounded-2xl border border-slate-200 {{ $card['card'] }} transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="relative">
                    <span class="absolute left-4 top-4 rounded-lg px-2.5 py-1 text-xs font-bold {{ $card['chip'] }}">{{ $card['n'] }}</span>
                    <img src="{{ asset('images/sections/kitoblar-mualliflar/'.$card['img']) }}" alt="{{ $card['title'] }}" class="h-[100px] w-full object-cover">
                </div>
                <div class="flex flex-1 flex-col p-5">
                    <h3 class="font-bold leading-snug text-slate-800">{{ $card['title'] }}</h3>
                    <p class="mt-1.5 flex-1 text-sm leading-relaxed text-slate-500">{{ $card['desc'] }}</p>
                    <span class="mt-4 inline-flex w-fit cursor-not-allowed items-center gap-1.5 rounded-full border bg-white px-3.5 py-1.5 text-sm font-medium opacity-70 {{ $card['btn'] }}" title="Tez orada">
                        Ko'rish <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
