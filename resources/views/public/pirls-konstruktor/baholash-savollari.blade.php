@extends('layouts.app')
@section('title', "Baholash savollari — PIRLS konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.pirls-konstruktor._sidebar', ['activeSlug' => 'baholash-savollari'])
    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 flex flex-wrap items-start justify-between gap-3">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-blue-100 text-blue-700">5</span>
                    <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">PIRLS topshiriqlari konstruktori • 5-bo'lim</span>
                </div>
                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Baholash savollari</h1>
                <p class="mt-2 text-slate-600 leading-relaxed max-w-2xl">Saytga joylashga tayyor matn</p>
            </div>
            <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 border border-blue-200 px-3 py-1.5 text-xs font-semibold text-blue-700">
                <x-icon name="star" class="h-3.5 w-3.5" /> 4-daraja savollari
            </span>
        </div>

        <div class="mb-6 rounded-xl border border-blue-200 bg-blue-50 p-5">
            <p class="text-sm text-blue-900 leading-relaxed">Baholash savollari o'quvchining matnga nisbatan shaxsiy munosabatini bildirish, qahramon harakatini baholash, muallif fikriga qo'shilish yoki qo'shilmaslik, o'z fikrini dalil bilan asoslash ko'nikmalarini rivojlantiradi. O'quvchi faqat matn mazmunini tushunib qolmay, unga munosabat bildiradi.</p>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            {{-- Main column --}}
            <div class="lg:col-span-2 space-y-5">

                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="hidden sm:block shrink-0">
                            <svg width="96" height="88" viewBox="0 0 96 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="48" cy="44" r="44" class="fill-rose-50"/>
                                <circle cx="36" cy="32" r="8" class="fill-rose-300"/>
                                <path d="M22 62c1-9 7-14 14-14s13 5 14 14" class="stroke-rose-400" stroke-width="2.2" fill="none"/>
                                <rect x="56" y="46" width="16" height="12" rx="2" class="fill-amber-300"/>
                                <path d="M60 52h8" class="stroke-white" stroke-width="1.4"/>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <h3 class="mb-2 text-sm font-bold text-slate-800">Matn parchasi</h3>
                            <blockquote class="rounded-xl border-l-4 border-rose-400 bg-rose-50/60 px-4 py-3 text-sm italic text-slate-700 leading-relaxed">
                                "Sardor sinfdoshining ruchkasi sinib qolganini ko'rdi. U o'zining yagona ruchkasini sinfdoshiga berdi va o'zi qalam bilan yozdi."
                            </blockquote>
                        </div>
                    </div>
                </div>

                {{-- Interactive rozimisiz poll --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <h3 class="mb-3 text-sm font-bold text-slate-800">Siz Sardorning ishini to'g'ri deb hisoblaysizmi?</h3>
                    <div class="flex gap-3 mb-4">
                        <button type="button" id="vote-yes" class="vote-btn flex-1 rounded-xl border border-emerald-300 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700 hover:bg-emerald-100 transition-colors">
                            👍 Ha, to'g'ri
                        </button>
                        <button type="button" id="vote-no" class="vote-btn flex-1 rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-slate-100 transition-colors">
                            🤔 Boshqa fikrdaman
                        </button>
                    </div>
                    <div id="vote-result" class="hidden rounded-xl border border-dashed border-blue-300 bg-blue-50/60 p-4">
                        <p class="text-xs font-semibold text-blue-800 mb-1">Endi savolni chuqurlashtiring:</p>
                        <p id="vote-follow-up" class="text-sm text-blue-900"></p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Baholash savollari</h3>
                    </div>
                    <ol class="divide-y divide-slate-100">
                        @foreach ([
                            "Siz Sardorning ishini to'g'ri deb hisoblaysizmi? Nega?",
                            "Sardor o'rnida siz nima qilardingiz?",
                            "Bu voqea sizga qanday fazilat haqida o'ylashga yordam berdi?",
                            "Sardorning harakatini matndan dalil bilan asoslang.",
                            "Sizningcha, yordam berish har doim osonmi? Nega?",
                        ] as $i => $q)
                            <li class="flex items-start gap-3 px-4 py-2.5">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i + 1 }}</span>
                                <span class="text-xs text-slate-700">{{ $q }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                    <p class="text-xs font-bold text-emerald-800 mb-2">Kutiladigan javob namunasi</p>
                    <p class="text-xs text-emerald-900 leading-relaxed">Men Sardorning ishini to'g'ri deb hisoblayman, chunki u sinfdoshiga yordam berdi. Matnda u o'zining yagona ruchkasini bergani aytilgan. Bu uning mehribon va do'stiga e'tiborli bola ekanini ko'rsatadi.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Baholash mezoni</h3>
                    </div>
                    <table class="w-full text-xs">
                        <tbody class="divide-y divide-slate-100">
                            <tr><td class="px-4 py-2.5 font-bold text-emerald-600 w-16">3 ball</td><td class="px-4 py-2.5 text-slate-700">Fikrini aniq bildiradi, matndan dalil keltiradi, izoh va xulosa beradi.</td></tr>
                            <tr><td class="px-4 py-2.5 font-bold text-teal-500">2 ball</td><td class="px-4 py-2.5 text-slate-700">Fikr aniq, lekin dalil yoki izoh yetarli emas.</td></tr>
                            <tr><td class="px-4 py-2.5 font-bold text-amber-500">1 ball</td><td class="px-4 py-2.5 text-slate-700">Fikr bor, ammo yuzaki yoki matnga sust bog'langan.</td></tr>
                            <tr><td class="px-4 py-2.5 font-bold text-rose-500">0 ball</td><td class="px-4 py-2.5 text-slate-700">Javob savolga mos emas yoki asoslanmagan.</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Right column --}}
            <div class="space-y-5">
                <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Foydalanuvchi harakati</h3>
                    </div>
                    <ol class="divide-y divide-slate-100">
                        @foreach ([
                            "Matndan baholashga arziydigan voqea, qaror yoki fikrni tanlaydi",
                            "O'quvchining shaxsiy munosabatini aniqlovchi savol tuzadi",
                            '"Ha/yo\'q" bilan cheklanmaslik uchun "Nega?" yoki dalil talabini qo\'shadi',
                            "Baholash mezonini belgilaydi",
                            "To'liq, qisman va noto'g'ri javob variantlarini oldindan ko'rib chiqadi",
                        ] as $i => $step)
                            <li class="flex items-start gap-3 px-4 py-2.5">
                                <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">{{ $i + 1 }}</span>
                                <span class="text-xs text-slate-700">{{ $step }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="rounded-xl border border-amber-300 bg-amber-100 p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                            <x-icon name="bulb" class="h-4 w-4 text-white" stroke="1.8" />
                        </span>
                        <h3 class="text-sm font-bold text-amber-900">Metodik izoh</h3>
                    </div>
                    <p class="text-xs text-amber-900 leading-relaxed mb-2">Baholash savollari o'quvchining shaxsiy fikrini rivojlantiradi. O'qituvchi faqat "yoqdi"/"yoqmadi" javobini kutmasligi kerak — har bir munosabat dalil bilan asoslanishi lozim.</p>
                    <p class="text-xs text-amber-900 leading-relaxed">Bu savollar o'quvchini matn, shaxsiy tajriba va axloqiy qarashlar o'rtasida bog'lanish o'rnatishga o'rgatadi.</p>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-800 to-blue-900 p-5 text-white">
            <div class="flex items-center gap-2 mb-3">
                <x-icon name="sparkle" class="h-4 w-4 text-blue-300" />
                <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
            </div>
            <p class="text-xs text-slate-200 leading-relaxed">Foydalanuvchi o'quvchilarning mustaqil fikrlashi, baholash, dalil keltirish va o'z munosabatini ifodalash ko'nikmalarini rivojlantiruvchi savollar tuzishni o'rganadi. O'quvchilarda tanqidiy va axloqiy fikrlash kuchayadi.</p>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('pirls-konstruktor.show', 'talqin-qilish') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Talqin qilish savollari
            </a>
            <a href="{{ route('pirls-konstruktor.show', 'javob-kaliti') }}" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition-colors">
                Keyingi: Javob kaliti yaratish
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const yes = document.getElementById('vote-yes');
        const no = document.getElementById('vote-no');
        const result = document.getElementById('vote-result');
        const followUp = document.getElementById('vote-follow-up');

        function select(btn, message) {
            [yes, no].forEach(function (b) {
                b.classList.remove('ring-2', 'ring-offset-1');
            });
            btn.classList.add('ring-2', 'ring-offset-1');
            followUp.textContent = message;
            result.classList.remove('hidden');
        }

        yes.addEventListener('click', function () {
            select(yes, "Nega to'g'ri deb hisoblaysiz? Matndan dalil keltiring.");
        });
        no.addEventListener('click', function () {
            select(no, "Sardor o'rnida siz nima qilardingiz? Fikringizni asoslang.");
        });
    })();
</script>
@endpush
@endsection
