@extends('layouts.app')
@section('title', "Sinfda matnlarni tanlash — Sinf strategiyalari")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'matn-tanlash'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-blue-100 text-blue-700">1</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Sinf strategiyalari • 1-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Sinfda matnlarni tanlash</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Boshlang'ich sinfda o'qish savodxonligini rivojlantirish avvalo to'g'ri matn tanlashdan boshlanadi. Matn o'quvchining yoshiga, lug'at boyligiga, hayotiy tajribasiga va o'qish darajasiga mos bo'lishi kerak.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-blue-300 bg-blue-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-blue-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-blue-800 leading-relaxed">O'qituvchiga sinf darajasiga mos matn tanlash, matnni metodik tahlil qilish va o'qish savodxonligini rivojlantirishga xizmat qiladigan savollar hamda topshiriqlar ishlab chiqish ko'nikmasini shakllantirish.</p>
            </div>
            <div class="rounded-xl border border-indigo-300 bg-indigo-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-indigo-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-indigo-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-indigo-800 leading-relaxed mb-2">Yaxshi tanlangan matn o'quvchini o'qishga qiziqtiradi, uni fikrlashga undaydi, savol berishga, xulosa chiqarishga va o'z munosabatini bildirishga imkon yaratadi.</p>
                <p class="text-xs text-indigo-800 leading-relaxed">Aksincha, juda sodda matn o'quvchini rivojlantirmaydi, haddan tashqari murakkab matn esa uni charchatadi va o'qishga bo'lgan qiziqishini susaytiradi.</p>
            </div>
        </div>

        {{-- Mezonlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">MATN TANLASHDA HISOBGA OLINADIGAN MEZONLAR</div>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-4">
                @foreach ([
                    ['icon'=>'📏','label'=>'Sinf darajasi','sub'=>'Yoshga moslik'],
                    ['icon'=>'📖','label'=>'Matn hajmi','sub'=>'Qisqa yoki uzun'],
                    ['icon'=>'🔤','label'=>"So'zlar murakkabligi",'sub'=>'Tushunarliligi'],
                    ['icon'=>'❤️','label'=>'Mavzuning yaqinligi','sub'=>'Bolaga tanishligi'],
                    ['icon'=>'🎓','label'=>'Bilish qiymati','sub'=>'Nima o\'rgatadi'],
                    ['icon'=>'❓','label'=>'Savol tuzish imkoniyati','sub'=>'PIRLS savollari'],
                    ['icon'=>'🎨','label'=>'Matn xarakteri','sub'=>'Badiiy / axborot'],
                    ['icon'=>'🖼️','label'=>'Rasm va jadval','sub'=>'Qo\'shimcha boyitilgan'],
                ] as $m)
                    <div class="rounded-xl border border-slate-200 bg-white p-4 text-center">
                        <div class="text-2xl mb-1">{{ $m['icon'] }}</div>
                        <p class="text-xs font-bold text-slate-700">{{ $m['label'] }}</p>
                        <p class="text-xs text-slate-400 mt-0.5">{{ $m['sub'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Amaliy tavsiya --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">AMALIY TAVSIYA — MATNNI DARSGA KIRITISHDAN OLDIN</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"Bu matn qaysi sinf o'quvchisiga mos?",'color'=>'border-blue-300 bg-blue-50 text-blue-900'],
                    ['n'=>2,'q'=>"Matnda o'quvchi tushunmaydigan so'zlar ko'p emasmi?",'color'=>'border-violet-300 bg-violet-50 text-violet-900'],
                    ['n'=>3,'q'=>'Matn asosida xulosa chiqarish mumkinmi?','color'=>'border-emerald-300 bg-emerald-50 text-emerald-900'],
                    ['n'=>4,'q'=>'Matnda qahramon, voqea, axborot yoki muammo bormi?','color'=>'border-amber-300 bg-amber-50 text-amber-900'],
                    ['n'=>5,'q'=>"O'quvchi bu matn orqali qanday ko'nikmani rivojlantiradi?",'color'=>'border-orange-300 bg-orange-50 text-orange-900'],
                    ['n'=>6,'q'=>"Matn asosida PIRLS tipidagi savollar tuzish mumkinmi?",'color'=>'border-rose-300 bg-rose-50 text-rose-900'],
                ] as $s)
                    <div class="rounded-xl border p-4 {{ $s['color'] }}">
                        <div class="flex items-start gap-3">
                            <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-white/60 text-sm font-bold">{{ $s['n'] }}</span>
                            <p class="text-xs leading-relaxed pt-1">{{ $s['q'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Jadval --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">DARSDA QO'LLASH USULI — MATN TAHLIL JADVALI</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
                <table class="w-full text-xs">
                    <thead class="bg-slate-100 text-slate-700 font-semibold">
                        <tr>
                            <th class="px-4 py-3 text-left">Mezon</th>
                            <th class="px-4 py-3 text-left">Tahlil savoli</th>
                            <th class="px-4 py-3 text-left">O'qituvchi izohi (namuna)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ([
                            ['Yoshga moslik', 'Matn qaysi sinfga mos?', '2-sinf'],
                            ['Matn turi', 'Badiiy yoki axborot matnimi?', 'Badiiy matn'],
                            ["Asosiy g'oya", 'Matn nimani o\'rgatadi?', 'Mehribonlik'],
                            ["Yangi so'zlar", 'Qaysi so\'zlar tushuntiriladi?', "G'amxo'r, ehtiyotkor"],
                            ['Savol imkoniyati', 'Qanday savollar tuziladi?', 'Aniq, xulosa, baholash'],
                            ['Baholash', 'Qaysi mezon bilan baholanadi?', '0–3 ballik rubrika'],
                        ] as $row)
                            <tr class="bg-white hover:bg-slate-50">
                                <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                                <td class="px-4 py-3 text-slate-500 italic">{{ $row[2] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Namuna --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BOSHLANG'ICH SINFGA MOS NAMUNA</div>
            <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <p class="text-xs font-bold text-emerald-900 mb-3">Matn: "Kichik qushcha"</p>
                        <div class="space-y-2">
                            @foreach ([
                                ['Sinf', '2-sinf'],
                                ['Matn turi', 'Badiiy-tarbiyaviy'],
                                ["Asosiy g'oya", 'Tabiatga mehr va yordam'],
                            ] as $r)
                                <div class="flex gap-2 text-xs">
                                    <span class="font-semibold text-emerald-800 w-28 shrink-0">{{ $r[0] }}:</span>
                                    <span class="text-emerald-700">{{ $r[1] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-emerald-900 mb-3">Savollar:</p>
                        <ol class="space-y-1.5 text-xs text-emerald-800">
                            <li class="flex gap-2"><span class="font-bold shrink-0">1.</span><span>Bola nimani ko'rib qoldi?</span></li>
                            <li class="flex gap-2"><span class="font-bold shrink-0">2.</span><span>Qushcha qanday holatda edi?</span></li>
                            <li class="flex gap-2"><span class="font-bold shrink-0">3.</span><span>Bola unga qanday yordam berdi?</span></li>
                            <li class="flex gap-2"><span class="font-bold shrink-0">4.</span><span>Bolaning harakati uning qanday bola ekanini ko'rsatadi?</span></li>
                            <li class="flex gap-2"><span class="font-bold shrink-0">5.</span><span>Siz ham shunday vaziyatda nima qilardingiz?</span></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-blue-200 bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-blue-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-blue-800 leading-relaxed mb-2">O'qituvchi sinf darajasiga mos matn tanlaydi, matnni metodik tahlil qiladi va o'qish savodxonligini rivojlantirishga xizmat qiladigan savollar hamda topshiriqlar ishlab chiqadi.</p>
                    <p class="text-xs text-blue-700 leading-relaxed">O'quvchilar esa o'z yoshiga mos, qiziqarli va tushunarli matnlar orqali o'qishga faol jalb etiladi.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.show', 'foydalanish-strategiyalari') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
