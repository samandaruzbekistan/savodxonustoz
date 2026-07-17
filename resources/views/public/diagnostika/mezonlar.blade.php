@extends('layouts.app')

@section('title', "0–3 ballik baholash mezonlari — Diagnostika va baholash")

@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.diagnostika._sidebar', ['activeSlug' => 'mezonlar'])

    <div class="min-w-0 flex-1">

        <div class="mb-6 rounded-2xl overflow-hidden relative" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 45%, #38bdf8 100%);">
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="dp2" width="28" height="28" patternUnits="userSpaceOnUse"><rect x="12" y="12" width="4" height="4" fill="white" rx="1"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#dp2)"/>
                </svg>
            </div>
            <div class="relative px-7 py-6 flex items-center gap-5">
                <div class="h-16 w-16 shrink-0 rounded-2xl bg-white/20 border-2 border-white/30 flex items-center justify-center">
                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">2-bo'lim</span>
                        <span class="rounded-full bg-white/25 px-3 py-0.5 text-xs font-semibold text-white">Rubrika</span>
                    </div>
                    <h1 class="text-2xl font-extrabold text-white leading-tight">0–3 ballik baholash mezonlari</h1>
                    <p class="mt-1.5 text-sky-100 text-sm">PIRLS tipidagi ochiq savollar uchun &middot; Javob sifatini aniqlash</p>
                </div>
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-sky-200 bg-sky-50 px-6 py-5">
            <h2 class="text-sm font-bold text-sky-900 mb-2">Baholash maqsadi</h2>
            <p class="text-sm text-slate-700 leading-relaxed">
                0–3 ballik baholash mezoni o'quvchining javob sifatini aniqlashga yordam beradi. Bu tizimda baholash faqat
                javobning bor yoki yo'qligiga emas, balki uning mazmuni, aniqligi, dalil bilan asoslanganligi va xulosa
                darajasiga qarab amalga oshiriladi.
            </p>
            <p class="text-sm text-slate-700 leading-relaxed mt-3">
                Bu mezon o'qituvchiga o'quvchining fikrlash jarayonini ko'rish imkonini beradi. 0–3 ballik rubrika
                to'liq javob, qisman javob va asossiz javob o'rtasidagi farqni aniq ajratishga xizmat qiladi.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-5 mb-5">
            {{-- Umumiy rubrika --}}
            <div class="rounded-2xl border border-slate-200 bg-white overflow-hidden">
                <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                    <h2 class="text-sm font-bold text-slate-800">Umumiy rubrika</h2>
                </div>
                <div class="divide-y divide-slate-100">
                    @foreach([
                        ['ball'=>'3 ball','bg'=>'bg-emerald-50','badge'=>'bg-emerald-100 text-emerald-800','border'=>'border-emerald-200',
                         'desc'=>"Javob to'liq, aniq va matnga mos. O'quvchi fikrini dalil bilan asoslaydi, xulosa chiqaradi."],
                        ['ball'=>'2 ball','bg'=>'bg-sky-50','badge'=>'bg-sky-100 text-sky-800','border'=>'border-sky-200',
                         'desc'=>"Javob asosan to'g'ri, lekin dalil yoki izoh yetarli emas. Fikr tushunarli, ammo to'liq rivojlantirilmagan."],
                        ['ball'=>'1 ball','bg'=>'bg-amber-50','badge'=>'bg-amber-100 text-amber-800','border'=>'border-amber-200',
                         'desc'=>"Javob qisman to'g'ri, yuzaki yoki noaniq. Matnga bog'lanish sust."],
                        ['ball'=>'0 ball','bg'=>'bg-rose-50','badge'=>'bg-rose-100 text-rose-800','border'=>'border-rose-200',
                         'desc'=>"Javob noto'g'ri, savolga mos emas yoki berilmagan."],
                    ] as $r)
                        <div class="{{ $r['bg'] }} px-4 py-3 flex items-start gap-3">
                            <span class="{{ $r['badge'] }} text-xs font-bold px-2 py-1 rounded-lg shrink-0 border {{ $r['border'] }}">{{ $r['ball'] }}</span>
                            <p class="text-xs text-slate-700 leading-relaxed">{{ $r['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Indikatorlar --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-5">
                <div class="flex items-center gap-2.5 mb-4">
                    <h2 class="text-sm font-bold text-slate-800">Baholash indikatorlari</h2>
                </div>
                <ul class="space-y-2">
                    @foreach([
                        'Javob savolga mosligi',
                        "Matn mazmuniga tayanganligi",
                        "Dalil mavjudligi",
                        "Xulosa aniqligi",
                        "Fikrning mantiqiyligi",
                        "Javobning to'liqligi",
                        "Mustaqil munosabat bildirish",
                    ] as $item)
                        <li class="flex items-center gap-2 text-sm text-slate-700">
                            <span class="h-1.5 w-1.5 rounded-full bg-blue-400 shrink-0"></span>{{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Topshiriq + Javob namunalari --}}
        <div class="mb-5 rounded-2xl border-2 border-sky-200 bg-sky-50 overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-sky-200 bg-sky-100">
                <svg class="h-5 w-5 text-sky-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                <h2 class="text-sm font-bold text-sky-900">Topshiriq namunasi</h2>
            </div>
            <div class="px-6 py-5">
                <div class="mb-4 p-4 bg-white rounded-xl border border-sky-100">
                    <p class="text-xs font-semibold text-slate-500 mb-1.5">Matn parchasi:</p>
                    <p class="text-sm text-slate-700 leading-relaxed">
                        Aziz sinfdoshining kitobi yirtilganini ko'rib qoldi. U yelim va qog'oz olib, kitobning yirtilgan
                        joyini ehtiyotlab yopishtirdi. Sinfdoshi unga rahmat aytdi.
                    </p>
                    <p class="text-xs font-semibold text-slate-600 mt-3 mb-1">Savol:</p>
                    <p class="text-sm text-slate-800 font-medium">Azizning harakati uning qanday bola ekanini ko'rsatadi? Javobingizni matndan dalil bilan asoslang.</p>
                </div>

                <h3 class="text-xs font-bold text-slate-700 mb-3">Javoblarni baholash namunasi:</h3>
                <div class="space-y-2">
                    @foreach([
                        ['javob'=>'Aziz yaxshi bola.','ball'=>'1 ball','bg'=>'bg-amber-50','badge'=>'bg-amber-100 text-amber-800','izoh'=>'Fikr bor, lekin dalil va izoh yetarli emas.'],
                        ['javob'=>"Aziz mehribon bola, chunki u sinfdoshining kitobini tuzatdi.",'ball'=>'2 ball','bg'=>'bg-sky-50','badge'=>'bg-sky-100 text-sky-800','izoh'=>"Javob to'g'ri, dalil bor, lekin xulosa kengaytirilmagan."],
                        ['javob'=>"Aziz e'tiborli va yordamga tayyor bola. Matnda u sinfdoshining yirtilgan kitobini yelimlab bergani aytilgan. Bu uning boshqalarga befarq emasligini ko'rsatadi.",'ball'=>'3 ball','bg'=>'bg-emerald-50','badge'=>'bg-emerald-100 text-emerald-800','izoh'=>"Javob to'liq, dalil va xulosa mavjud."],
                        ['javob'=>"Aziz kitob o'qidi.",'ball'=>'0 ball','bg'=>'bg-rose-50','badge'=>'bg-rose-100 text-rose-800','izoh'=>'Javob savolga mos emas.'],
                    ] as $jv)
                        <div class="{{ $jv['bg'] }} rounded-xl p-3 flex items-start gap-3">
                            <span class="{{ $jv['badge'] }} text-xs font-bold px-2 py-1 rounded-lg shrink-0 whitespace-nowrap">{{ $jv['ball'] }}</span>
                            <div>
                                <p class="text-xs text-slate-800 italic mb-1">"{{ $jv['javob'] }}"</p>
                                <p class="text-xs text-slate-500">{{ $jv['izoh'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Ko'nikma tahlili jadvali --}}
        <div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
            <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-slate-100 bg-slate-50">
                <h2 class="text-sm font-bold text-slate-800">Ko'nikma tahlili jadvali</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-xs">
                    <thead><tr class="bg-blue-50 border-b border-blue-100">
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Ko'nikma</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">Maks. ball</th>
                        <th class="text-center px-3 py-3 font-semibold text-slate-700">O'quvchi balli</th>
                        <th class="text-left px-4 py-3 font-semibold text-slate-700">Tahlil</th>
                    </tr></thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ['Aniq axborotni topish','3','3','Ko\'nikma yaxshi shakllangan'],
                            ['Xulosa chiqarish','3','2','Dalil qo\'shish kerak'],
                            ['Talqin qilish','3','1',"Asosiy g'oyani topishda qiynalmoqda"],
                            ['Baholash','3','2','Fikr bor, lekin izohni kengaytirish kerak'],
                            ['Dalil keltirish','3','1','Matnga qaytish ko\'nikmasi sust'],
                        ] as [$k,$max,$ball,$tahlil])
                            <tr class="hover:bg-slate-50">
                                <td class="px-4 py-2.5 font-medium text-slate-700">{{ $k }}</td>
                                <td class="text-center px-3 py-2.5 text-slate-500">{{ $max }}</td>
                                <td class="text-center px-3 py-2.5"><span class="font-bold text-blue-600">{{ $ball }}</span></td>
                                <td class="px-4 py-2.5 text-slate-600">{{ $tahlil }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-blue-200 bg-white p-5">
            <div class="flex items-center gap-2.5 mb-3">
                <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                </div>
                <h2 class="text-sm font-bold text-slate-800">O'qituvchi uchun tavsiya</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed mb-2">
                Rubrika o'quvchiga topshiriqdan oldin tushuntirilishi kerak. Shunda o'quvchi qanday javob yuqori baholanishini biladi.
            </p>
            <div class="space-y-1.5 mt-3">
                @foreach([
                    '"Fikring to\'g\'ri, endi matndan dalil qo\'sh."',
                    '"Javobing yaxshi, lekin nima uchun shunday deb o\'ylaganingni yoz."',
                    '"Sen asosiy fikrni topding, endi uni kengroq izohla."',
                ] as $t)
                    <div class="flex items-start gap-2 text-sm text-slate-600 bg-blue-50 rounded-lg px-3 py-2">
                        <span class="text-blue-400 shrink-0">›</span>{{ $t }}
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="h-4 w-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h2 class="text-sm font-bold text-emerald-800">Kutiladigan natija</h2>
            </div>
            <p class="text-sm text-slate-700 leading-relaxed">
                O'qituvchi o'quvchi javobini subyektiv emas, aniq mezon asosida baholaydi. O'quvchi esa to'liq javob berish,
                fikrini asoslash va matndan dalil keltirishga o'rganadi. Bo'lajak o'qituvchida baholash savodxonligi shakllanadi.
            </p>
        </div>

        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4">
            <a href="{{ route('diagnostika.show', 'diagnostikasi') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <svg class="h-4 w-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                Diagnostika
            </a>
            <span class="flex-1 text-center text-xs text-slate-400">2 / 5</span>
            <a href="{{ route('diagnostika.show', 'testlar') }}" class="flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                Testlar banki
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>

    </div>
</div>
@endsection
