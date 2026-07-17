@extends('layouts.app')
@section('title', "O'qishda qiynalayotgan o'quvchilar — Barcha o'quvchilarga yordam berish")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.barcha-oquvchilarga-yordam._sidebar', ['activeSlug' => 'oqishda-qiynalayotganlar'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-blue-100 text-blue-700">1</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Barcha o'quvchilarga yordam berish • 1-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">O'qishda qiynalayotgan o'quvchilar</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Boshlang'ich sinflarda ayrim o'quvchilar matnni o'qishda yoki tushunishda qiynalishi mumkin. Bunday o'quvchi dangasa yoki qobiliyatsiz emas — unga faqat mos metodik yordam, ko'proq vaqt va rag'bat kerak bo'ladi.</p>
        </div>

        {{-- Muammo tavsifi --}}
        <div class="mb-6 rounded-xl border border-blue-300 bg-blue-100 p-5">
            <div class="flex items-center gap-2 mb-3">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-600">
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </span>
                <h3 class="text-sm font-bold text-blue-900">MUAMMO TAVSIFI</h3>
            </div>
            <p class="text-xs text-blue-800 leading-relaxed">Bu holat turli sabablar bilan bog'liq bo'ladi: tovush-harf munosabatini yaxshi o'zlashtirmaganlik, bo'g'inlab o'qishda qiyinchilik, lug'at boyligining kamligi, diqqatning tez chalg'ishi, ravon o'qish malakasining yetarli shakllanmagani yoki o'qishga qiziqish pastligi. Bunday o'quvchilar ko'pincha matnni sekin o'qiydi, ayrim so'zlarni noto'g'ri talaffuz qiladi, gap mazmunini tushunmay qoladi, savollarga qisqa yoki noaniq javob beradi.</p>
        </div>

        {{-- Metodik yechim --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">METODIK YECHIM</div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">
                @foreach([
                    ['icon'=>'✂️','label'=>"Matnni qismlarga bo'lib berish",'sub'=>'Uzoq matn charchatadi'],
                    ['icon'=>'🎧','label'=>'Audio bilan qo\'llab-quvvatlash','sub'=>'Avval tinglash, keyin o\'qish'],
                    ['icon'=>'🖼️','label'=>'Rasm va kalit so\'zlar','sub'=>'Mazmunni tushunishga yordam'],
                    ['icon'=>'🔁','label'=>'Qayta o\'qish mashqlari','sub'=>'2-3 marta o\'qish'],
                    ['icon'=>'🤝','label'=>'Juftlikda o\'qish','sub'=>'Kuchli o\'quvchi yordami'],
                    ['icon'=>'❓','label'=>'Sodda savollardan boshlash','sub'=>'"Kim?", "Nima?" dan boshlab'],
                ] as $m)
                    <div class="rounded-xl border border-slate-200 bg-white p-4 text-center">
                        <div class="text-2xl mb-1">{{ $m['icon'] }}</div>
                        <p class="text-xs font-bold text-slate-700">{{ $m['label'] }}</p>
                        <p class="text-xs text-slate-400 mt-0.5">{{ $m['sub'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Amaliy mashqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY MASHQLAR</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-xl border border-blue-200 bg-blue-50 p-5">
                    <p class="text-xs font-bold text-blue-900 mb-2">1-mashq. "Bir gapdan boshlaymiz"</p>
                    <p class="text-xs text-blue-800 leading-relaxed mb-3">O'quvchiga butun matn emas, avval bitta gap beriladi. U gapni o'qiydi, so'ng mazmunini aytadi.</p>
                    <p class="text-xs text-blue-700 italic mb-2">Namuna: "Ali kichik mushukchaga suv berdi."</p>
                    <ul class="space-y-1 text-xs text-blue-800">
                        <li>• Kim suv berdi?</li>
                        <li>• Ali kimga yordam berdi?</li>
                        <li>• Ali qanday bola?</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-violet-200 bg-violet-50 p-5">
                    <p class="text-xs font-bold text-violet-900 mb-2">2-mashq. "Audio bilan o'qi"</p>
                    <ol class="space-y-1.5 text-xs text-violet-800">
                        <li>1. O'quvchi matn audiosini tinglaydi.</li>
                        <li>2. Ikkinchi marta audio bilan birga o'qiydi.</li>
                        <li>3. Uchinchi marta mustaqil o'qiydi.</li>
                        <li>4. O'qituvchi 2–3 ta sodda savol beradi.</li>
                    </ol>
                </div>
                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                    <p class="text-xs font-bold text-emerald-900 mb-2">3-mashq. "Kalit so'zni top"</p>
                    <p class="text-xs text-emerald-800 leading-relaxed mb-2">Matndan 3–5 ta asosiy so'z ajratiladi. O'quvchi shu so'zlar asosida matn nima haqida ekanini aytadi.</p>
                    <p class="text-xs text-emerald-700 italic">Masalan: qushcha, sovuq, yordam, uyacha, mehribon.</p>
                </div>
                <div class="rounded-xl border border-amber-200 bg-amber-50 p-5">
                    <p class="text-xs font-bold text-amber-900 mb-2">4-mashq. "Bo'g'inlab o'qi"</p>
                    <p class="text-xs text-amber-800 leading-relaxed mb-2">Qiyin so'zlar bo'g'inlarga ajratiladi:</p>
                    <p class="text-xs text-amber-700 italic">g'am-xo'r-lik • meh-nat-se-var • ku-tub-xo-na • ta-bi-at</p>
                </div>
            </div>
        </div>

        {{-- O'qituvchi harakati --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">O'QITUVCHI HARAKATI</div>
            <div class="rounded-xl border border-slate-200 bg-white p-5">
                <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2 mb-4">
                    @foreach([
                        "O'quvchini sinf oldida uyaltirmaslik",
                        'Xatosini keskin tanqid qilmaslik',
                        'Qisqa va aniq topshiriq berish',
                        "O'quvchini kichik yutuqlari uchun rag'batlantirish",
                        "Bir xil matnni qayta o'qishga imkon berish",
                        "Matnni rasm, audio va so'z kartochkalari bilan qo'llab-quvvatlash",
                        'Individual rivojlanish jadvalini yuritish',
                    ] as $a)
                        <li class="flex items-start gap-2 text-xs text-slate-600">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $a }}
                        </li>
                    @endforeach
                </ul>
                <div class="rounded-lg bg-slate-50 p-4 space-y-1.5">
                    <p class="text-xs text-slate-600 italic">"Bugun kechagidan yaxshiroq o'qiding."</p>
                    <p class="text-xs text-slate-600 italic">"Bu so'zni to'g'ri o'qiding, endi gapni yana bir marta o'qib ko'ramiz."</p>
                    <p class="text-xs text-slate-600 italic">"Javobing yaxshi, endi matndan dalil topishga harakat qilamiz."</p>
                </div>
            </div>
        </div>

        {{-- Ota-ona bilan hamkorlik --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">OTA-ONA BILAN HAMKORLIK</div>
            <div class="rounded-xl border border-rose-200 bg-rose-50 p-5">
                <ul class="grid grid-cols-1 gap-2 sm:grid-cols-2 mb-3">
                    @foreach([
                        'Bolani har kuni 10–15 daqiqa ovoz chiqarib o\'qitish',
                        'Bola xato qilganda darhol urishmaslik',
                        'Matnni birga tinglash',
                        '"Nima haqida o\'qiding?" deb savol berish',
                        'Uyda kichik kitob burchagi yaratish',
                        'Bolaga oson va qiziqarli kitob tanlash',
                        'Har kuni kichik yutuqni maqtash',
                    ] as $o)
                        <li class="flex items-start gap-2 text-xs text-rose-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-rose-400" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                            {{ $o }}
                        </li>
                    @endforeach
                </ul>
                <p class="text-xs text-rose-700 italic">"Bola sekin o'qisa, uni shoshirmang. Avval to'g'ri va tushunib o'qishga yordam bering. Tezlik keyin asta-sekin shakllanadi."</p>
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
                            <th class="px-4 py-3 text-left">Boshlang'ich daraja</th>
                            <th class="px-4 py-3 text-left">Rivojlanayotgan daraja</th>
                            <th class="px-4 py-3 text-left">Barqaror daraja</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ["So'zlarni o'qish", "Ko'p yordam bilan o'qiydi", 'Ayrim so\'zlarda qiynaladi', "Ko'pchilik so'zlarni mustaqil o'qiydi"],
                            ['Matnni tushunish', 'Juda qisqa javob beradi', 'Asosiy mazmunni qisman tushunadi', 'Sodda savollarga javob beradi'],
                            ['Ravonlik', 'Juda sekin o\'qiydi', 'Takroriy o\'qishda yaxshilanadi', 'Me\'yorida o\'qiy boshlaydi'],
                            ['Dalil topish', 'Yordam bilan topadi', 'Yo\'naltirish orqali topadi', 'Oddiy dalilni mustaqil topadi'],
                        ] as $row)
                            <tr class="bg-white hover:bg-slate-50">
                                <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[2] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[3] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-blue-200 bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-blue-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-blue-800 leading-relaxed">O'quvchining o'qishga bo'lgan ishonchi ortadi, ravon o'qish malakasi asta-sekin rivojlanadi, matnni tushunish darajasi yaxshilanadi va savollarga javob berishda faolroq bo'ladi.</p>
                </div>
                <a href="{{ route('barcha-oquvchilarga-yordam.show', 'differensial-topshiriqlar') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
