@extends('layouts.app')
@section('title', "Matn turlari — Sinf strategiyalari")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'matn-turlari'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-emerald-100 text-emerald-700">3</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Sinf strategiyalari • 3-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Matn turlari</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">O'qish savodxonligini rivojlantirishda turli matn turlaridan foydalanish muhim. Boshlang'ich sinfda matn turlarini farqlash o'quvchining funksional savodxonligini rivojlantiradi.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-emerald-300 bg-emerald-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-emerald-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-emerald-800 leading-relaxed">O'quvchiga turli matn turlarini farqlashni, har bir matnga mos o'qish strategiyasini qo'llashni va matndan hayotiy vaziyatda foydalanish ko'nikmasini egallashni o'rgatish.</p>
            </div>
            <div class="rounded-xl border border-teal-300 bg-teal-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-teal-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-teal-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-teal-800 leading-relaxed">O'quvchi hayotda faqat hikoya yoki ertak o'qimaydi. U e'lon, jadval, yo'riqnoma, xat, retsept, xarita, rasmli matn va boshqa ko'plab matn turlariga duch keladi. Ularni farqlash funksional savodxonlikni rivojlantiradi.</p>
            </div>
        </div>

        {{-- Matn turlari jadvali --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">ASOSIY MATN TURLARI</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
                <table class="w-full text-xs">
                    <thead class="bg-slate-100 text-slate-700 font-semibold">
                        <tr>
                            <th class="px-4 py-3 text-left">Matn turi</th>
                            <th class="px-4 py-3 text-left">Xususiyati</th>
                            <th class="px-4 py-3 text-left">Darsdagi vazifasi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ([
                            ['🎭','Badiiy matn','Qahramon, voqea, obraz mavjud','Tushunish, his qilish, xulosa chiqarish'],
                            ['📰','Axborot matni','Fakt va ma\'lumot beradi','Bilim olish, ma\'lumot ajratish'],
                            ['📋','Hayotiy matn',"E'lon, xat, taklifnoma, yo'riqnoma",'Funksional savodxonlikni rivojlantirish'],
                            ['🔬','Ilmiy-ommabop matn','Tabiat, fan, texnologiya haqida','Bilish qiziqishini oshirish'],
                            ['📊','Jadval va diagramma','Ma\'lumot tartibli beriladi','Solishtirish va tahlil qilish'],
                            ['🖼️','Rasmli matn','Rasm va yozuv birga keladi','Vizual tushunishni rivojlantirish'],
                        ] as $row)
                            <tr class="bg-white hover:bg-slate-50">
                                <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }} {{ $row[1] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[2] }}</td>
                                <td class="px-4 py-3 text-slate-500">{{ $row[3] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Sinf darajasiga kiritish --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SINF DARAJASIGA QARAB MATN TURLARINI KIRITISH</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['1-sinf','border-blue-300 bg-blue-50 text-blue-900','bg-blue-600',['Rasmli matn','Qisqa hikoya','Sodda gaplar']],
                    ['2-sinf','border-violet-300 bg-violet-50 text-violet-900','bg-violet-600',['Ertak','Hikoya','Qisqa e\'lon']],
                    ['3-sinf','border-emerald-300 bg-emerald-50 text-emerald-900','bg-emerald-600',["Axborot matni","Jadval","Yo'riqnoma"]],
                    ['4-sinf','border-orange-300 bg-orange-50 text-orange-900','bg-orange-600',['PIRLS badiiy matn','Axborot matnlari','Ikki manbali matn']],
                ] as [$sinf, $color, $ic, $items])
                    <div class="rounded-xl border p-4 {{ $color }}">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="grid h-7 w-7 place-items-center rounded-full {{ $ic }} text-white text-xs font-bold shrink-0">{{ substr($sinf, 0, 1) }}</span>
                            <h4 class="text-xs font-bold">{{ $sinf }}</h4>
                        </div>
                        <ul class="space-y-1.5">
                            @foreach ($items as $item)
                                <li class="flex items-start gap-1.5 text-xs">
                                    <svg class="mt-0.5 h-3 w-3 shrink-0 opacity-60" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Namuna mavzu --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">DARSDA QO'LLASH — MAVZU: "QUSHLAR"</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Badiiy matn','border-blue-200 bg-blue-50','"Yaralangan qushcha"'],
                    ['Axborot matni','border-emerald-200 bg-emerald-50','"Qushlar bahorda qaytadi"'],
                    ['Jadval','border-violet-200 bg-violet-50','"Qushlarning oziqlanishi"'],
                    ['Rasmli matn','border-orange-200 bg-orange-50','Qush tanasi qismlari'],
                    ["E'lon",'border-rose-200 bg-rose-50','"Qushlar kuni tadbiri"'],
                    ['Ilmiy matn','border-teal-200 bg-teal-50','"Qushlar qanday uchadi?"'],
                ] as [$type, $color, $example])
                    <div class="rounded-xl border p-4 {{ $color }}">
                        <p class="text-xs font-bold text-slate-800 mb-1">{{ $type }}</p>
                        <p class="text-xs text-slate-600 italic">{{ $example }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- E'lon namuna --}}
        <div class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 p-5">
            <p class="text-xs font-bold text-emerald-900 mb-3">Namuna — E'lon matni (hayotiy matn):</p>
            <div class="rounded-lg bg-white border border-emerald-200 p-4 mb-4">
                <p class="text-xs text-slate-700 italic leading-relaxed">"Juma kuni soat 10:00 da maktab kutubxonasida 'Eng yaxshi kitobxon' tanlovi bo'lib o'tadi. Ishtirokchilar o'zlari yoqtirgan kitob haqida 3 daqiqa gapirib beradilar."</p>
            </div>
            <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">
                @foreach ([
                    "1. Tanlov qachon bo'ladi?",
                    "2. Tanlov qayerda o'tkaziladi?",
                    "3. Ishtirokchi nima haqida gapirishi kerak?",
                    "4. Siz qaysi kitob haqida gapirgan bo'lardingiz?",
                ] as $q)
                    <div class="flex items-start gap-2 text-xs text-emerald-800">
                        <svg class="h-3.5 w-3.5 shrink-0 mt-0.5 text-emerald-500" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                        {{ $q }}
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-emerald-200 bg-gradient-to-r from-emerald-50 to-teal-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-emerald-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-emerald-800 leading-relaxed">O'quvchi matn turlarini farqlaydi, har bir matnga mos o'qish strategiyasini qo'llaydi va matndan hayotiy vaziyatda foydalanish ko'nikmasini egallaydi.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.show', 'decodable-books') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-emerald-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
