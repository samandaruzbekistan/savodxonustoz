@extends('layouts.app')
@section('title', "Sinf kutubxonalari — Sinf strategiyalari")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'sinf-kutubxonalari'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-teal-100 text-teal-700">5</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Sinf strategiyalari • 5-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Sinf kutubxonalari</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Sinf kutubxonasi — o'quvchilar har kuni ko'radigan, foydalanadigan, kitob tanlaydigan va mustaqil o'qishga undaydigan kichik o'qish muhitidir. U sinfda kitobxonlik madaniyatini shakllantiruvchi pedagogik vositadir.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-teal-300 bg-teal-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-teal-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-teal-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-teal-800 leading-relaxed">O'quvchilarda mustaqil o'qish odatini shakllantirish, kitob tanlash madaniyatini rivojlantirish va o'quvchilarning qiziqishiga mos o'qish imkoniyatini yaratish.</p>
            </div>
            <div class="rounded-xl border border-cyan-300 bg-cyan-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-cyan-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-cyan-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-cyan-800 leading-relaxed">Sinf kutubxonasi o'quvchining mustaqil o'qish odatini shakllantiradi, kitob tanlash madaniyatini rivojlantiradi, o'quvchilarning qiziqishiga mos o'qish imkoniyatini yaratadi va o'qish motivatsiyasini kuchaytiradi.</p>
            </div>
        </div>

        {{-- Kutubxona tashkil etish --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SINF KUTUBXONASINI TASHKIL ETISHDA E'TIBOR BERISH KERAK</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['📚',"Sinf darajasiga moslik",'Kitoblar o\'quvchi yoshiga mos bo\'lishi'],
                    ['📰','Turli xillik','Badiiy va axborot kitoblari aralash bo\'lishi'],
                    ['🏷️','Mavzu bo\'yicha tartib','Kitoblar mavzular bo\'yicha ajratilishi'],
                    ['📋','"Men o\'qidim" jadvali','O\'quvchi o\'z o\'qishini kuzatishi'],
                    ['⭐','"Haftaning kitobi" burchagi','Har hafta yangi kitob namoyishi'],
                    ['📝','O\'quvchi tavsiyalari','O\'quvchi tavsiya qilgan kitoblar ro\'yxati'],
                    ['👨‍👩‍👧','Ota-onalar bilan hamkorlik','Kitob almashish va ulush qo\'shish'],
                ] as [$icon, $title, $desc])
                    <div class="rounded-xl border border-teal-200 bg-teal-50 p-4">
                        <div class="flex items-start gap-3">
                            <span class="text-2xl shrink-0">{{ $icon }}</span>
                            <div>
                                <p class="text-xs font-bold text-teal-900 mb-0.5">{{ $title }}</p>
                                <p class="text-xs text-teal-700">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Faoliyatlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SINF KUTUBXONASIDAN FOYDALANISH FAOLIYATLARI</div>
            <div class="space-y-3">
                @foreach ([
                    ['📖','Haftaning kitobi','Har hafta bitta kitob tanlanadi va sinfda muhokama qilinadi.','border-teal-200 bg-teal-50'],
                    ['👍','Men tavsiya qilaman',"O'quvchi o'qigan kitobini sinfdoshlariga tavsiya qiladi.",'border-cyan-200 bg-cyan-50'],
                    ['🕐','10 daqiqa mustaqil o\'qish','Har kuni yoki haftada bir necha marta 10 daqiqa jim o\'qish tashkil etiladi.','border-blue-200 bg-blue-50'],
                    ['📔','Kitobxonlik kundaligi','O\'quvchi o\'qigan kitobi haqida qisqa yozuv qiladi.','border-violet-200 bg-violet-50'],
                    ['🔄','Kitob almashish kuni','O\'quvchilar o\'z kitoblarini sinfdoshlari bilan almashadilar.','border-emerald-200 bg-emerald-50'],
                ] as [$icon, $title, $desc, $color])
                    <div class="flex items-start gap-4 rounded-xl border p-4 {{ $color }}">
                        <span class="text-2xl shrink-0">{{ $icon }}</span>
                        <div>
                            <p class="text-xs font-bold text-slate-800">{{ $title }}</p>
                            <p class="text-xs text-slate-600 mt-0.5">{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Jadval namuna --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">"MEN O'QIDIM" JADVALI NAMUNASI</div>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
                <table class="w-full text-xs">
                    <thead class="bg-teal-600 text-white font-semibold">
                        <tr>
                            <th class="px-4 py-3 text-left">O'quvchi ismi</th>
                            <th class="px-4 py-3 text-left">Kitob nomi</th>
                            <th class="px-4 py-3 text-left">Menga yoqqan qahramon</th>
                            <th class="px-4 py-3 text-left">Men olgan xulosa</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ([
                            ['Aziza','Zumrad va Qimmat','Zumrad','Yaxshilik doim qadrlanadi'],
                            ['Sardor','Kichik shahzoda','Shahzoda',"Do'stlik muhim"],
                            ['Malika','Ertaklar kitobi','Kenja botir','Jasorat kerak'],
                        ] as $row)
                            <tr class="bg-white hover:bg-teal-50">
                                <td class="px-4 py-3 font-medium text-slate-800">{{ $row[0] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[1] }}</td>
                                <td class="px-4 py-3 text-slate-600">{{ $row[2] }}</td>
                                <td class="px-4 py-3 text-slate-500 italic">{{ $row[3] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-teal-200 bg-gradient-to-r from-teal-50 to-cyan-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-teal-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-teal-800 leading-relaxed">O'quvchilarda mustaqil o'qish odati shakllanadi, kitobga qiziqish ortadi, o'qiganini tushuntirish va tavsiya qilish ko'nikmasi rivojlanadi. Sinfda kitobxonlik muhiti paydo bo'ladi.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.show', 'matn-xususiyatlari') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-teal-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-teal-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
