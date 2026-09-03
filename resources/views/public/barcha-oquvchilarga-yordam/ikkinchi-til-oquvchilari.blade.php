@extends('layouts.app')
@section('title', "Ikkinchi til sifatida o'zbek tili — Barcha o'quvchilarga yordam berish")
@section('content')
@php
    $base = 'images/sections/barcha-oquvchilarga-yordam/ikkinchi-til-oquvchilari/';
    $iconBg = ['bg-indigo-50 ring-indigo-100', 'bg-sky-50 ring-sky-100', 'bg-emerald-50 ring-emerald-100', 'bg-amber-50 ring-amber-100', 'bg-violet-50 ring-violet-100', 'bg-rose-50 ring-rose-100'];
@endphp
<div class="flex flex-col gap-6 lg:flex-row lg:-mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'ikkinchi-til-oquvchilari'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="mb-6 rounded-3xl overflow-hidden relative bg-gradient-to-br from-emerald-600 via-emerald-600 to-teal-700 px-6 py-8 sm:px-10 sm:py-10">
            <div class="pointer-events-none absolute -right-10 -top-16 h-56 w-56 rounded-full bg-white/10 su-float-slow"></div>
            <div class="pointer-events-none absolute -bottom-16 left-1/3 h-40 w-40 rounded-full bg-white/5 su-float-slow"></div>
            <div class="relative flex flex-col items-start gap-8 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-white/20 text-white ring-1 ring-inset ring-white/25">3</span>
                        <span class="text-xs text-emerald-100 uppercase tracking-wide font-semibold">Barcha o'quvchilarga yordam berish • 3-bo'lim</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white leading-tight max-w-2xl">Ikkinchi til sifatida o'zbek tilini o'rganayotgan o'quvchilar</h1>
                    <p class="mt-3 text-emerald-50/90 leading-relaxed max-w-xl text-sm">Ayrim o'quvchilar uchun o'zbek tili ona tili bo'lmasligi mumkin. Ular ko'pincha matnni o'qiy oladi, lekin ayrim so'zlarni tushunmagani uchun umumiy mazmunni to'liq anglamaydi.</p>
                </div>
                <div class="relative hidden sm:block shrink-0">
                    <span class="absolute -left-6 -top-4 grid h-11 w-11 place-items-center rounded-2xl bg-white shadow-lg ring-1 ring-black/5 su-float-slow">
                        <img src="{{ asset($base.'26_maktab_sumkasi.png') }}" alt="" class="h-7 w-7 object-contain">
                    </span>
                    <span class="absolute -right-3 bottom-2 grid h-10 w-10 place-items-center rounded-2xl bg-white shadow-lg ring-1 ring-black/5 su-float-slow">
                        <img src="{{ asset($base.'28_onlayn_talim_noutbuk.png') }}" alt="" class="h-6 w-6 object-contain">
                    </span>
                    <img src="{{ asset($base.'08_oqish_va_goya.png') }}" alt="Ikkinchi til sifatida o'zbek tilini o'rganish" class="h-44 w-auto drop-shadow-2xl">
                </div>
            </div>
        </div>

        {{-- Muammo tavsifi --}}
        <div class="mb-6 rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-teal-50 p-5 sm:p-6 flex items-center justify-between gap-5">
            <div class="min-w-0">
                <div class="flex items-center gap-2.5 mb-3">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-emerald-600 shadow-sm shadow-emerald-600/30">
                        <svg class="h-4.5 w-4.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 10.5A6.5 6.5 0 114 10.5a6.5 6.5 0 0113 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-emerald-900 tracking-wide">MUAMMO TAVSIFI</h3>
                </div>
                <p class="text-xs sm:text-sm text-emerald-800 leading-relaxed">Ular ko'pincha so'z ma'nosini tushunishda, gap mazmunini anglashda, savolga to'liq javob berishda va o'z fikrini o'zbek tilida ifodalashda qiynalishi mumkin. Shu sababli til qo'llab-quvvatlovchi, rasmli materiallar, sodda gaplar va lug'at ishlari muhim ahamiyatga ega.</p>
            </div>
            <div class="hidden sm:grid h-24 w-24 shrink-0 place-items-center rounded-2xl bg-white/70 ring-1 ring-emerald-200/60">
                <img src="{{ asset($base.'02_matnni_tekshirish_lupa.png') }}" alt="" class="h-16 w-auto object-contain">
            </div>
        </div>

        {{-- Metodik yechim --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">METODIK YECHIM</div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach([
                    ['icon'=>'05_rasmlar_lugat.png','label'=>"Rasmli lug'at",'sub'=>"Yangi so'z rasm bilan"],
                    ['icon'=>'01_kitoblar_va_qalam.png','label'=>"Oldindan so'zlar bilan tanishtirish",'sub'=>"Matndan oldin so'z tushuntirish"],
                    ['icon'=>'14_natija_va_reja.png','label'=>'Sodda gaplar bilan izohlash', 'sub'=>'Murakkab jumlalar soddalashtiriladi'],
                    ['icon'=>'04_audio_va_tinglash.png','label'=>'Audio va takroriy tinglash','sub'=>'Talaffuzni eshitish va takrorlash'],
                    ['icon'=>'11_pazl_va_mantiq.png','label'=>'Juftlikda ishlash','sub'=>"Tilni yaxshi biladigan o'quvchi bilan"],
                    ['icon'=>'06_suhbat_va_muloqot.png','label'=>'Gap boshlovchi iboralar','sub'=>'Javobni boshlash uchun tayyor ibora'],
                ] as $i => $m)
                    <div class="group rounded-2xl border border-slate-200 bg-white p-5 text-center transition-all duration-200 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-lg hover:shadow-emerald-900/5">
                        <div class="mx-auto mb-3 grid h-24 w-24 place-items-center rounded-2xl {{ $iconBg[$i % count($iconBg)] }} ring-1 transition-transform duration-200 group-hover:scale-105">
                            <img src="{{ asset($base.$m['icon']) }}" alt="{{ $m['label'] }}" class="h-16 w-16 object-contain">
                        </div>
                        <p class="text-sm font-bold text-slate-800">{{ $m['label'] }}</p>
                        <p class="text-xs text-slate-400 mt-1">{{ $m['sub'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Gap boshlovchi iboralar --}}
        <div class="mb-6 rounded-2xl border border-emerald-200 bg-white p-5 sm:p-6">
            <div class="flex items-center gap-2.5 mb-4">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-100">
                    <svg class="h-4 w-4 text-emerald-700" fill="currentColor" viewBox="0 0 24 24"><path d="M7.17 6A5.17 5.17 0 002 11.17V18h6.83v-6.83H4.9A3.09 3.09 0 017.17 8.1V6zm10 0A5.17 5.17 0 0012 11.17V18h6.83v-6.83H14.9A3.09 3.09 0 0117.17 8.1V6z"/></svg>
                </span>
                <p class="text-sm font-bold text-emerald-900">Gap boshlovchi iboralar namunasi</p>
            </div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                @foreach([
                    ['text'=>'Menimcha, ...','tint'=>'bg-emerald-50 border-emerald-200 text-emerald-800'],
                    ['text'=>'Qahramon ... qilgan, chunki ...','tint'=>'bg-teal-50 border-teal-200 text-teal-800'],
                    ['text'=>'Matnda aytilishicha, ...','tint'=>'bg-sky-50 border-sky-200 text-sky-800'],
                    ['text'=>"Men bu fikrga qo'shilaman, chunki ...",'tint'=>'bg-amber-50 border-amber-200 text-amber-800'],
                ] as $phrase)
                    <div class="flex items-center gap-2 rounded-xl border px-4 py-3 text-xs sm:text-sm italic font-medium {{ $phrase['tint'] }}">
                        <span class="text-lg leading-none not-italic opacity-50">&ldquo;</span>
                        {{ $phrase['text'] }}
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Amaliy mashqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MASHQLAR</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-2xl border border-blue-200 bg-blue-50 p-5 flex items-start gap-4 transition-shadow hover:shadow-md">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs font-bold text-blue-900 mb-2 uppercase tracking-wide">1-mashq</p>
                        <p class="text-sm font-bold text-blue-900 mb-2">"So'z va rasm"</p>
                        <p class="text-xs text-blue-800 leading-relaxed mb-2">O'quvchi so'zlarni rasmlar bilan moslashtiradi:</p>
                        <p class="text-xs text-blue-700 italic">ko'chat • qushcha • daftar • kutubxona • g'amxo'r</p>
                    </div>
                    <div class="hidden sm:grid h-20 w-20 shrink-0 place-items-center rounded-xl bg-white/70 ring-1 ring-blue-200/70">
                        <img src="{{ asset($base.'21_checklist.png') }}" alt="" class="h-14 w-14 object-contain">
                    </div>
                </div>
                <div class="rounded-2xl border border-violet-200 bg-violet-50 p-5 flex items-start gap-4 transition-shadow hover:shadow-md">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs font-bold text-violet-900 mb-2 uppercase tracking-wide">2-mashq</p>
                        <p class="text-sm font-bold text-violet-900 mb-2">"Gapni davom ettir"</p>
                        <ul class="space-y-1.5 text-xs text-violet-800">
                            <li>• Bola qushchaga yordam berdi, chunki ...</li>
                            <li>• Menimcha, qahramon mehribon, chunki ...</li>
                            <li>• Matnda ... haqida aytilgan.</li>
                        </ul>
                    </div>
                    <div class="hidden sm:grid h-20 w-20 shrink-0 place-items-center rounded-xl bg-white/70 ring-1 ring-violet-200/70">
                        <img src="{{ asset($base.'03_topshiriqlar_royxati.png') }}" alt="" class="h-14 w-14 object-contain">
                    </div>
                </div>
                <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5 flex items-start gap-4 transition-shadow hover:shadow-md">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs font-bold text-amber-900 mb-2 uppercase tracking-wide">3-mashq</p>
                        <p class="text-sm font-bold text-amber-900 mb-2">"Ikki tilda tushunish"</p>
                        <p class="text-xs text-amber-800 leading-relaxed">Zarur bo'lsa, o'qituvchi yangi so'zning qisqa izohini tanish til bilan bog'lab tushuntiradi. Lekin asosiy javob o'zbek tilida berishga yo'naltiriladi.</p>
                    </div>
                    <div class="hidden sm:grid h-20 w-20 shrink-0 place-items-center rounded-xl bg-white/70 ring-1 ring-amber-200/70">
                        <img src="{{ asset($base.'10_ikki_tildagi_tarjima.png') }}" alt="" class="h-14 w-14 object-contain">
                    </div>
                </div>
                <div class="rounded-2xl border border-rose-200 bg-rose-50 p-5 flex items-start gap-4 transition-shadow hover:shadow-md">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs font-bold text-rose-900 mb-2 uppercase tracking-wide">4-mashq</p>
                        <p class="text-sm font-bold text-rose-900 mb-2">"Kalit so'zlardan hikoya"</p>
                        <p class="text-xs text-rose-800 leading-relaxed mb-2">4 ta kalit so'z: bola, qush, suv, yordam.</p>
                        <p class="text-xs text-rose-700">O'quvchi shu so'zlar yordamida 2–3 gap tuzadi.</p>
                    </div>
                    <div class="hidden sm:grid h-20 w-20 shrink-0 place-items-center rounded-xl bg-white/70 ring-1 ring-rose-200/70">
                        <img src="{{ asset($base.'16_yangi_goya_chiroq.png') }}" alt="" class="h-14 w-14 object-contain">
                    </div>
                </div>
            </div>
        </div>

        {{-- O'qituvchi harakati --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">O'QITUVCHI HARAKATI</div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6">
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                    @foreach([
                        ['icon'=>'15_oqituvchi_darsi.png','text'=>'Matnni oldindan soddalashtirib tushuntiradi'],
                        ['icon'=>'17_rivojlanish_grafigi.png','text'=>"O'quvchining qisqa javobini kengaytirishga yordam beradi"],
                        ['icon'=>'13_vaqtni_rejalashtirish.png','text'=>"Javob berishga ko'proq vaqt beradi"],
                        ['icon'=>'07_oquvchilar_guruhi.png','text'=>"O'quvchini guruh muhokamasiga jalb qiladi"],
                        ['icon'=>'09_globus_va_talim.png','text'=>'Rasm, jadval, mimika, harakatlardan foydalanadi'],
                        ['icon'=>'20_pdf_yuklab_olish.png','text'=>"Yangi so'zlar ro'yxatini beradi"],
                        ['icon'=>'12_kalendar_va_vaqt.png','text'=>'Talaffuz xatolarini muloyim tuzatadi'],
                    ] as $i => $a)
                        <div class="group flex flex-col items-center text-center gap-2.5 rounded-xl p-3 transition-colors hover:bg-slate-50">
                            <div class="grid h-16 w-16 place-items-center rounded-2xl {{ $iconBg[$i % count($iconBg)] }} ring-1 transition-transform duration-200 group-hover:scale-105">
                                <img src="{{ asset($base.$a['icon']) }}" alt="" class="h-10 w-10 object-contain">
                            </div>
                            <p class="text-[11px] sm:text-xs leading-snug text-slate-600">{{ $a['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Ota-ona bilan hamkorlik --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">OTA-ONA BILAN HAMKORLIK</div>
            <div class="rounded-2xl border border-rose-200 bg-rose-50 p-5 sm:p-6">
                <div class="flex items-center gap-4 mb-5">
                    <div class="hidden sm:grid h-16 w-16 shrink-0 place-items-center rounded-2xl bg-white ring-1 ring-rose-200 shadow-sm">
                        <img src="{{ asset($base.'23_ota_ona_va_oila.png') }}" alt="" class="h-11 w-11 object-contain">
                    </div>
                    <p class="text-xs sm:text-sm text-rose-800 leading-relaxed">Ota-onaning uydagi qo'llab-quvvatlashi o'quvchining o'zbek tilida ishonch bilan gapirishiga katta yordam beradi.</p>
                </div>
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach([
                        ['icon'=>'27_kitoblar_va_stol_chirogi.png','text'=>"Uyda o'zbekcha qisqa matnlarni birga o'qish"],
                        ['icon'=>'29_bilim_osishi.png','text'=>"Yangi so'zlarni rasm bilan o'rganish"],
                        ['icon'=>'24_maqsad_va_nishon.png','text'=>"Har kuni 5 ta yangi so'zdan gap tuzish"],
                        ['icon'=>'19_video_va_media.png','text'=>'Audio matnlarni tinglash'],
                        ['icon'=>'22_hamkorlik_qol_siqish.png','text'=>"Bola o'zbekcha gapirganda xatosi uchun tanqid qilmaslik"],
                        ['icon'=>'23_ota_ona_va_oila.png','text'=>"Uyda bugun o'rganilgan so'zlarni ishlatish"],
                    ] as $p)
                        <div class="flex items-center gap-3 rounded-xl bg-white p-3.5 ring-1 ring-rose-200/70">
                            <div class="grid h-11 w-11 shrink-0 place-items-center rounded-lg bg-rose-50">
                                <img src="{{ asset($base.$p['icon']) }}" alt="" class="h-7 w-7 object-contain">
                            </div>
                            <p class="text-xs text-rose-800 leading-snug">{{ $p['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Baholash --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BAHOLASH</div>
            <div class="rounded-2xl border border-slate-200 bg-white overflow-hidden">
                <div class="flex items-center gap-3 border-b border-slate-100 bg-slate-50/70 px-5 py-3.5">
                    <img src="{{ asset($base.'25_yulduzli_baho.png') }}" alt="" class="h-6 w-6 object-contain">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide">O'quvchi ko'rsatkichlari bo'yicha baholash mezonlari</p>
                </div>
                <ul class="divide-y divide-slate-100">
                    @foreach([
                        ["So'z ma'nosini tushunish", 'Rasm yoki kontekst orqali tushuntira oladi', 4],
                        ['Matn mazmunini anglash', 'Asosiy voqeani ayta oladi', 5],
                        ['Savolga javob berish', 'Qisqa, lekin mazmunli javob beradi', 4],
                        ['Gap tuzish', "Yangi so'z bilan sodda gap tuzadi", 3],
                        ['Fikr bildirish', 'Tayyor iboralar yordamida munosabat bildiradi', 4],
                    ] as $row)
                        <li class="flex flex-col gap-2 px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:gap-4">
                            <div class="min-w-0">
                                <p class="text-sm font-bold text-slate-800">{{ $row[0] }}</p>
                                <p class="text-xs text-slate-500 mt-0.5">{{ $row[1] }}</p>
                            </div>
                            <div class="flex shrink-0 items-center gap-0.5">
                                @for ($s = 1; $s <= 5; $s++)
                                    <svg class="h-4 w-4 {{ $s <= $row[2] ? 'text-amber-400' : 'text-slate-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.7-4.5 4.2 1.2 6-5.4-3-5.4 3 1.2-6-4.5-4.2 6.1-.7z"/></svg>
                                @endfor
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-emerald-200 bg-gradient-to-r from-emerald-50 to-teal-50 px-6 py-5 sm:px-8 sm:py-6">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-1 items-start gap-4">
                    <div class="hidden sm:grid h-14 w-14 shrink-0 place-items-center rounded-2xl bg-white ring-1 ring-emerald-200 shadow-sm">
                        <img src="{{ asset($base.'30_mukofot_medali.png') }}" alt="" class="h-9 w-9 object-contain">
                    </div>
                    <div>
                        <p class="text-sm font-bold text-emerald-900 mb-2">Kutiladigan natija</p>
                        <p class="text-xs sm:text-sm text-emerald-800 leading-relaxed">O'quvchi o'zbek tilidagi matnlarni tushunishga, yangi so'zlarni kontekstda anglashga, savollarga sodda, lekin mazmunli javob berishga o'rganadi. Uning o'zbek tilida o'qish va fikr bildirishga bo'lgan ishonchi ortadi.</p>
                    </div>
                </div>
                <a href="{{ route('barcha-oquvchilarga-yordam.show', 'iqtidorli-oquvchilar') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-emerald-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
