@extends('layouts.app')
@section('title', "Sinf strategiyalari — O'qish savodxonligini rivojlantirish")
@section('content')
<div class="flex gap-6 -mt-2">

    @include('public.sinf-strategiyalari._sidebar')

    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Sinf strategiyalari</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">
                Bu bo'lim boshlang'ich sinf o'qituvchilari va bo'lajak o'qituvchilar uchun matn bilan ishlashni dars jarayonida to'g'ri tashkil etishga qaratilgan amaliy-metodik bo'limdir. Matn tanlash, foydalanish, turlarini farqlash, decodable books, sinf kutubxonasi va matn xususiyatlarini o'rgatish bo'yicha aniq ko'rsatmalar beriladi.
            </p>
        </div>

        @php
            $cards = [
                [
                    'num'   => 1,
                    'slug'  => 'matn-tanlash',
                    'color' => 'blue',
                    'title' => "Sinfda matnlarni tanlash",
                    'desc'  => "Yoshga mos, qiziqarli va didaktik jihatdan to'g'ri matn tanlash metodikasi va mezonlari.",
                    'points'=> ["Sinf darajasiga moslik", "Matnni metodik tahlil", "Savol tuzish imkoniyati", "Boshlang'ich sinf namunalari"],
                    'svg'   => '<svg viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full"><rect width="120" height="90" rx="12" fill="#EFF6FF"/><rect x="15" y="18" width="55" height="7" rx="3.5" fill="#93C5FD"/><rect x="15" y="30" width="90" height="5" rx="2.5" fill="#BFDBFE"/><rect x="15" y="40" width="75" height="5" rx="2.5" fill="#BFDBFE"/><rect x="15" y="50" width="85" height="5" rx="2.5" fill="#BFDBFE"/><rect x="15" y="60" width="60" height="5" rx="2.5" fill="#BFDBFE"/><circle cx="95" cy="35" r="18" fill="#DBEAFE"/><text x="95" y="40" text-anchor="middle" font-size="16" fill="#2563EB">📚</text></svg>',
                ],
                [
                    'num'   => 2,
                    'slug'  => 'foydalanish-strategiyalari',
                    'color' => 'violet',
                    'title' => "Matnlardan foydalanish strategiyalari",
                    'desc'  => "O'qishdan oldin, jarayonida va keyin matn bilan ishlashning uch bosqichli metodikasi.",
                    'points'=> ["Uch bosqichli strategiya", "Amaliy faoliyatlar", "Metodlar va usullar", "Darsda qo'llash tartibi"],
                    'svg'   => '<svg viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full"><rect width="120" height="90" rx="12" fill="#F5F3FF"/><rect x="10" y="20" width="30" height="50" rx="6" fill="#DDD6FE"/><rect x="10" y="20" width="30" height="14" rx="6" fill="#8B5CF6"/><text x="25" y="31" text-anchor="middle" font-size="9" fill="white" font-weight="bold">1</text><rect x="45" y="20" width="30" height="50" rx="6" fill="#DDD6FE"/><rect x="45" y="20" width="30" height="14" rx="6" fill="#7C3AED"/><text x="60" y="31" text-anchor="middle" font-size="9" fill="white" font-weight="bold">2</text><rect x="80" y="20" width="30" height="50" rx="6" fill="#DDD6FE"/><rect x="80" y="20" width="30" height="14" rx="6" fill="#6D28D9"/><text x="95" y="31" text-anchor="middle" font-size="9" fill="white" font-weight="bold">3</text></svg>',
                ],
                [
                    'num'   => 3,
                    'slug'  => 'matn-turlari',
                    'color' => 'emerald',
                    'title' => "Matn turlari",
                    'desc'  => "Badiiy, axborot, hayotiy va rasmli matn turlarini sinf darajasiga mos o'rgatish usullari.",
                    'points'=> ["6 xil matn turi", "Sinf darajasiga moslik", "Darsda qo'llash namunasi", "Funksional savodxonlik"],
                    'svg'   => '<svg viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full"><rect width="120" height="90" rx="12" fill="#ECFDF5"/><rect x="10" y="15" width="46" height="28" rx="5" fill="#A7F3D0"/><rect x="14" y="20" width="28" height="4" rx="2" fill="#059669"/><rect x="14" y="28" width="36" height="3" rx="1.5" fill="#6EE7B7"/><rect x="14" y="34" width="30" height="3" rx="1.5" fill="#6EE7B7"/><rect x="64" y="15" width="46" height="28" rx="5" fill="#BBF7D0"/><rect x="68" y="20" width="28" height="4" rx="2" fill="#10B981"/><rect x="68" y="28" width="36" height="3" rx="1.5" fill="#6EE7B7"/><rect x="68" y="34" width="24" height="3" rx="1.5" fill="#6EE7B7"/><rect x="10" y="50" width="46" height="28" rx="5" fill="#D1FAE5"/><rect x="14" y="55" width="28" height="4" rx="2" fill="#34D399"/><rect x="14" y="63" width="36" height="3" rx="1.5" fill="#6EE7B7"/><rect x="64" y="50" width="46" height="28" rx="5" fill="#A7F3D0"/><rect x="68" y="55" width="28" height="4" rx="2" fill="#059669"/><rect x="68" y="63" width="30" height="3" rx="1.5" fill="#6EE7B7"/></svg>',
                ],
                [
                    'num'   => 4,
                    'slug'  => 'decodable-books',
                    'color' => 'orange',
                    'title' => "Decodable Books'dan foydalanish",
                    'desc'  => "O'rganilgan harf-tovush mosliklariga asoslangan maxsus kitoblar orqali o'qish malakasini mustahkamlash.",
                    'points'=> ["Kitob tanlash mezonlari", "Dars algoritmi", "Mustaqil o'qish bosqichlari", "Muvaffaqiyat hissi"],
                    'svg'   => '<svg viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full"><rect width="120" height="90" rx="12" fill="#FFF7ED"/><rect x="20" y="12" width="36" height="50" rx="4" fill="#FDBA74"/><rect x="20" y="12" width="36" height="8" rx="4" fill="#EA580C"/><rect x="25" y="25" width="26" height="3" rx="1.5" fill="#FED7AA"/><rect x="25" y="31" width="20" height="3" rx="1.5" fill="#FED7AA"/><rect x="25" y="37" width="24" height="3" rx="1.5" fill="#FED7AA"/><rect x="25" y="43" width="18" height="3" rx="1.5" fill="#FED7AA"/><rect x="62" y="18" width="36" height="50" rx="4" fill="#FCA5A5" transform="rotate(8 62 18)"/><rect x="62" y="18" width="36" height="8" rx="4" fill="#DC2626" transform="rotate(8 62 18)"/><circle cx="90" cy="70" r="12" fill="#FEF3C7"/><text x="90" y="75" text-anchor="middle" font-size="14" fill="#D97706">★</text></svg>',
                ],
                [
                    'num'   => 5,
                    'slug'  => 'sinf-kutubxonalari',
                    'color' => 'teal',
                    'title' => "Sinf kutubxonalari",
                    'desc'  => "Sinfda o'qish muhitini yaratish, kitoblarni tashkil etish va mustaqil o'qish odatini shakllantirish.",
                    'points'=> ["Kutubxona tashkil etish", "Haftaning kitobi", "Kitobxonlik kundaligi", "O'qish motivatsiyasi"],
                    'svg'   => '<svg viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full"><rect width="120" height="90" rx="12" fill="#F0FDFA"/><rect x="8" y="55" width="104" height="6" rx="3" fill="#99F6E4"/><rect x="12" y="22" width="14" height="33" rx="3" fill="#2DD4BF"/><rect x="30" y="28" width="14" height="27" rx="3" fill="#0D9488"/><rect x="48" y="18" width="14" height="37" rx="3" fill="#14B8A6"/><rect x="66" y="25" width="14" height="30" rx="3" fill="#5EEAD4"/><rect x="84" y="30" width="14" height="25" rx="3" fill="#2DD4BF"/><rect x="100" y="22" width="10" height="33" rx="3" fill="#0D9488"/><rect x="12" y="22" width="14" height="5" rx="2" fill="#0F766E"/><rect x="30" y="28" width="14" height="5" rx="2" fill="#134E4A"/><rect x="48" y="18" width="14" height="5" rx="2" fill="#0F766E"/><rect x="66" y="25" width="14" height="5" rx="2" fill="#134E4A"/><rect x="84" y="30" width="14" height="5" rx="2" fill="#0F766E"/></svg>',
                ],
                [
                    'num'   => 6,
                    'slug'  => 'matn-xususiyatlari',
                    'color' => 'indigo',
                    'title' => "Matn xususiyatlarini o'qitish",
                    'desc'  => "Sarlavha, asosiy g'oya, kalit so'zlar, rasm va jadvallarni tizimli tushunishga o'rgatish metodikasi.",
                    'points'=> ["11 ta matn xususiyati", "Ajratish va tahlil", "Jadval usuli", "Kalit so'zlar bilan ishlash"],
                    'svg'   => '<svg viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full"><rect width="120" height="90" rx="12" fill="#EEF2FF"/><rect x="12" y="14" width="96" height="62" rx="6" fill="white" stroke="#C7D2FE" stroke-width="1.5"/><rect x="18" y="20" width="50" height="6" rx="3" fill="#818CF8"/><rect x="18" y="31" width="84" height="3" rx="1.5" fill="#E0E7FF"/><rect x="18" y="38" width="70" height="3" rx="1.5" fill="#E0E7FF"/><rect x="18" y="45" width="78" height="3" rx="1.5" fill="#E0E7FF"/><rect x="76" y="55" width="22" height="14" rx="3" fill="#EDE9FE"/><rect x="76" y="55" width="22" height="5" rx="3" fill="#6366F1"/><circle cx="25" cy="63" r="6" fill="#EEF2FF" stroke="#818CF8" stroke-width="1.5"/><text x="25" y="67" text-anchor="middle" font-size="8" fill="#4F46E5">✓</text></svg>',
                ],
                [
                    'num'   => 7,
                    'slug'  => 'matn-turlarini-tushunish',
                    'color' => 'rose',
                    'title' => "Matn turlarini tushunish",
                    'desc'  => "O'quvchiga har xil matn turiga mos o'qish usulini tanlash va kerakli axborotni topishni o'rgatish.",
                    'points'=> ["Turli matnni farqlash", "Mos o'qish strategiyasi", "Hayotiy savodxonlik", "\"Matn turini top\" metodi"],
                    'svg'   => '<svg viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full"><rect width="120" height="90" rx="12" fill="#FFF1F2"/><rect x="10" y="18" width="44" height="30" rx="5" fill="#FECDD3"/><rect x="10" y="18" width="44" height="9" rx="5" fill="#F43F5E"/><text x="32" y="27" text-anchor="middle" font-size="7" fill="white" font-weight="bold">Hikoya</text><rect x="14" y="32" width="32" height="3" rx="1.5" fill="#FDA4AF"/><rect x="14" y="38" width="26" height="3" rx="1.5" fill="#FDA4AF"/><rect x="66" y="18" width="44" height="30" rx="5" fill="#FECDD3"/><rect x="66" y="18" width="44" height="9" rx="5" fill="#E11D48"/><text x="88" y="27" text-anchor="middle" font-size="7" fill="white" font-weight="bold">E\'lon</text><rect x="70" y="32" width="32" height="3" rx="1.5" fill="#FDA4AF"/><rect x="70" y="38" width="26" height="3" rx="1.5" fill="#FDA4AF"/><rect x="10" y="54" width="100" height="24" rx="5" fill="#FFE4E6"/><rect x="10" y="54" width="100" height="9" rx="5" fill="#FB7185"/><text x="60" y="63" text-anchor="middle" font-size="7" fill="white" font-weight="bold">Jadval</text><rect x="14" y="67" width="88" height="3" rx="1.5" fill="#FECDD3"/><rect x="14" y="73" width="70" height="3" rx="1.5" fill="#FECDD3"/></svg>',
                ],
            ];

            $colorMap = [
                'blue'    => ['badge' => 'bg-blue-100 text-blue-700',     'btn' => 'border-blue-200 text-blue-700 hover:bg-blue-50',     'ring' => 'ring-blue-100'],
                'violet'  => ['badge' => 'bg-violet-100 text-violet-700', 'btn' => 'border-violet-200 text-violet-700 hover:bg-violet-50', 'ring' => 'ring-violet-100'],
                'emerald' => ['badge' => 'bg-emerald-100 text-emerald-700','btn' => 'border-emerald-200 text-emerald-700 hover:bg-emerald-50','ring' => 'ring-emerald-100'],
                'orange'  => ['badge' => 'bg-orange-100 text-orange-700', 'btn' => 'border-orange-200 text-orange-700 hover:bg-orange-50', 'ring' => 'ring-orange-100'],
                'teal'    => ['badge' => 'bg-teal-100 text-teal-700',     'btn' => 'border-teal-200 text-teal-700 hover:bg-teal-50',     'ring' => 'ring-teal-100'],
                'indigo'  => ['badge' => 'bg-indigo-100 text-indigo-700', 'btn' => 'border-indigo-200 text-indigo-700 hover:bg-indigo-50', 'ring' => 'ring-indigo-100'],
                'rose'    => ['badge' => 'bg-rose-100 text-rose-700',     'btn' => 'border-rose-200 text-rose-700 hover:bg-rose-50',     'ring' => 'ring-rose-100'],
            ];
        @endphp

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-6">
            @foreach ($cards as $card)
                @php $c = $colorMap[$card['color']]; @endphp
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <div class="h-36 p-3">
                        {!! $card['svg'] !!}
                    </div>
                    <div class="flex flex-col flex-1 p-5 pt-0">
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
                        <a href="{{ route('sinf-strategiyalari.show', $card['slug']) }}"
                           class="inline-flex items-center gap-1 rounded-lg border px-3 py-1.5 text-xs font-semibold transition {{ $c['btn'] }}">
                            Batafsil
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="rounded-2xl border border-blue-200 bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-bold text-blue-900 mb-1">O'quvchilarda o'qish savodxonligini rivojlantirish uchun sinfda boy, ongli va tizimli o'qish muhitini yarating.</p>
                    <p class="text-xs text-blue-700">Har bir bo'limda nazariy izoh, amaliy tavsiya, darsda qo'llash usuli, boshlang'ich sinf namunalari va kutiladigan natijalar berilgan.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.show', 'matn-tanlash') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                    Boshlash
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
