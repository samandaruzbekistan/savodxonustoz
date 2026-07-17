@extends('layouts.app')
@section('title', "Ikkinchi til sifatida o'zbek tili — Barcha o'quvchilarga yordam berish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'ikkinchi-til-oquvchilari'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-emerald-100 text-emerald-700">3</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Barcha o'quvchilarga yordam berish • 3-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Ikkinchi til sifatida o'zbek tilini o'rganayotgan o'quvchilar</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Ayrim o'quvchilar uchun o'zbek tili ona tili bo'lmasligi mumkin. Ular ko'pincha matnni o'qiy oladi, lekin ayrim so'zlarni tushunmagani uchun umumiy mazmunni to'liq anglamaydi.</p>
        </div>

        {{-- Muammo tavsifi --}}
        <div class="mb-6 rounded-xl border border-emerald-300 bg-emerald-100 p-5">
            <div class="flex items-center gap-2 mb-3">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </span>
                <h3 class="text-sm font-bold text-emerald-900">MUAMMO TAVSIFI</h3>
            </div>
            <p class="text-xs text-emerald-800 leading-relaxed">Ular ko'pincha so'z ma'nosini tushunishda, gap mazmunini anglashda, savolga to'liq javob berishda va o'z fikrini o'zbek tilida ifodalashda qiynalishi mumkin. Shu sababli til qo'llab-quvvatlovi, rasmli materiallar, sodda gaplar va lug'at ishlari muhim ahamiyatga ega.</p>
        </div>

        {{-- Metodik yechim --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">METODIK YECHIM</div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">
                @foreach([
                    ['icon'=>'🖼️','label'=>"Rasmli lug'at",'sub'=>"Yangi so'z rasm bilan"],
                    ['icon'=>'📝','label'=>"Oldindan so'zlar bilan tanishtirish",'sub'=>"Matndan oldin so'z tushuntirish"],
                    ['icon'=>'✂️','label'=>'Sodda gaplar bilan izohlash', 'sub'=>'Murakkab jumlalar soddalashtiriladi'],
                    ['icon'=>'🎧','label'=>'Audio va takroriy tinglash','sub'=>'Talaffuzni eshitish va takrorlash'],
                    ['icon'=>'🤝','label'=>'Juftlikda ishlash','sub'=>'Tilni yaxshi biladigan o\'quvchi bilan'],
                    ['icon'=>'💬','label'=>'Gap boshlovchi iboralar','sub'=>'Javobni boshlash uchun tayyor ibora'],
                ] as $m)
                    <div class="rounded-xl border border-slate-200 bg-white p-4 text-center">
                        <div class="text-2xl mb-1">{{ $m['icon'] }}</div>
                        <p class="text-xs font-bold text-slate-700">{{ $m['label'] }}</p>
                        <p class="text-xs text-slate-400 mt-0.5">{{ $m['sub'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Gap boshlovchi iboralar --}}
        <div class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 p-5">
            <p class="text-xs font-bold text-emerald-900 mb-2">Gap boshlovchi iboralar namunasi</p>
            <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 text-xs text-emerald-800 italic">
                <p>"Menimcha, ..."</p>
                <p>"Matnda aytilishicha, ..."</p>
                <p>"Qahramon ... qilgan, chunki ..."</p>
                <p>"Men bu fikrga qo'shilaman, chunki ..."</p>
            </div>
        </div>

        {{-- Amaliy mashqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MASHQLAR</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-blue-200 bg-blue-50 p-5">
                    <p class="text-xs font-bold text-blue-900 mb-2">1-mashq. "So'z va rasm"</p>
                    <p class="text-xs text-blue-800 leading-relaxed mb-2">O'quvchi so'zlarni rasmlar bilan moslashtiradi:</p>
                    <p class="text-xs text-blue-700 italic">ko'chat • qushcha • daftar • kutubxona • g'amxo'r</p>
                </div>
                <div class="rounded-xl border border-violet-200 bg-violet-50 p-5">
                    <p class="text-xs font-bold text-violet-900 mb-2">2-mashq. "Gapni davom ettir"</p>
                    <ul class="space-y-1.5 text-xs text-violet-800">
                        <li>• Bola qushchaga yordam berdi, chunki ...</li>
                        <li>• Menimcha, qahramon mehribon, chunki ...</li>
                        <li>• Matnda ... haqida aytilgan.</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-amber-200 bg-amber-50 p-5">
                    <p class="text-xs font-bold text-amber-900 mb-2">3-mashq. "Ikki tilda tushunish"</p>
                    <p class="text-xs text-amber-800 leading-relaxed">Zarur bo'lsa, o'qituvchi yangi so'zning qisqa izohini tanish til bilan bog'lab tushuntiradi. Lekin asosiy javob o'zbek tilida berishga yo'naltiriladi.</p>
                </div>
                <div class="rounded-xl border border-rose-200 bg-rose-50 p-5">
                    <p class="text-xs font-bold text-rose-900 mb-2">4-mashq. "Kalit so'zlardan hikoya"</p>
                    <p class="text-xs text-rose-800 leading-relaxed mb-2">4 ta kalit so'z: bola, qush, suv, yordam.</p>
                    <p class="text-xs text-rose-700">O'quvchi shu so'zlar yordamida 2–3 gap tuzadi.</p>
                </div>
            </div>
        </div>

        {{-- O'qituvchi harakati --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">O'QITUVCHI HARAKATI</div>
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                    @foreach([
                        'Matnni oldindan soddalashtirib tushuntiradi',
                        "Yangi so'zlar ro'yxatini beradi",
                        'Rasm, jadval, mimika, harakatlardan foydalanadi',
                        'Javob berishga ko\'proq vaqt beradi',
                        "O'quvchining qisqa javobini kengaytirishga yordam beradi",
                        'Talaffuz xatolarini muloyim tuzatadi',
                        'O\'quvchini guruh muhokamasiga jalb qiladi',
                    ] as $a)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $a }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Ota-ona bilan hamkorlik --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">OTA-ONA BILAN HAMKORLIK</div>
            <div class="rounded-xl border border-rose-200 bg-rose-50 p-5">
                <ul class="space-y-1.5 text-xs text-rose-800">
                    <li>• Uyda o'zbekcha qisqa matnlarni birga o'qish</li>
                    <li>• Yangi so'zlarni rasm bilan o'rganish</li>
                    <li>• Har kuni 5 ta yangi so'zdan gap tuzish</li>
                    <li>• Audio matnlarni tinglash</li>
                    <li>• Bola o'zbekcha gapirganda xatosi uchun tanqid qilmaslik</li>
                    <li>• Uyda "bugun o'rgangan so'zim" daftarini yuritish</li>
                </ul>
            </div>
        </div>

        {{-- Baholash --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BAHOLASH</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
                <table class="w-full text-xs">
                    <thead class="bg-slate-100 text-slate-700 font-semibold">
                        <tr>
                            <th class="px-4 py-3 text-left">Ko'rsatkich</th>
                            <th class="px-4 py-3 text-left">Baholash</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ["So'z ma'nosini tushunish", 'Rasm yoki kontekst orqali tushuntira oladi'],
                            ['Matn mazmunini anglash', 'Asosiy voqeani ayta oladi'],
                            ['Savolga javob berish', 'Qisqa, lekin mazmunli javob beradi'],
                            ['Gap tuzish', "Yangi so'z bilan sodda gap tuzadi"],
                            ['Fikr bildirish', 'Tayyor iboralar yordamida munosabat bildiradi'],
                        ] as $row)
                            <tr class="bg-white hover:bg-slate-50">
                                <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-emerald-200 bg-gradient-to-r from-emerald-50 to-teal-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-emerald-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-emerald-800 leading-relaxed">O'quvchi o'zbek tilidagi matnlarni tushunishga, yangi so'zlarni kontekstda anglashga, savollarga sodda, lekin mazmunli javob berishga o'rganadi. Uning o'zbek tilida o'qish va fikr bildirishga bo'lgan ishonchi ortadi.</p>
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
