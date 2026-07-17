@extends('layouts.app')
@section('title', "Matn yuklash oynasi — PIRLS konstruktori")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.pirls-konstruktor._sidebar', ['activeSlug' => 'matn-yuklash'])
    <div class="min-w-0 flex-1">

        {{-- Header --}}
        <div class="mb-6 flex flex-wrap items-start justify-between gap-3">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-blue-100 text-blue-700">1</span>
                    <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">PIRLS topshiriqlari konstruktori • 1-bo'lim</span>
                </div>
                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Matn yuklash oynasi</h1>
                <p class="mt-2 text-slate-600 leading-relaxed max-w-2xl">Saytga joylashga tayyor matn</p>
            </div>
            <div class="flex shrink-0 gap-2">
                <span id="word-count-badge" class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 border border-blue-200 px-3 py-1.5 text-xs font-semibold text-blue-700">
                    So'zlar soni: <span id="word-count">68</span>
                </span>
                <span id="char-count-badge" class="inline-flex items-center gap-1.5 rounded-full bg-indigo-50 border border-indigo-200 px-3 py-1.5 text-xs font-semibold text-indigo-700">
                    Belgilar soni: <span id="char-count">375</span>
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            {{-- Main form column --}}
            <div class="lg:col-span-2 space-y-5">

                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center justify-between mb-3">
                        <label class="flex items-center gap-2 text-sm font-bold text-slate-800">
                            <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">1</span>
                            Matn kiriting
                        </label>
                    </div>
                    <textarea id="text-input" rows="6"
                              class="w-full rounded-xl border border-slate-300 p-3.5 text-sm text-slate-700 leading-relaxed focus:border-blue-500 focus:ring-blue-500"
                              placeholder="Badiiy yoki axborot matnini shu yerga joylashtiring...">Jasur maktab kutubxonasidan qushlar haqida kitob oldi. U kitobdan laylaklar bahorda o'z uyalariga qaytishini bildi. Ertasi kuni Jasur hovlidagi daraxtga qarab, qushlar uchun kichik uya yasashga qaror qildi.</textarea>
                    <p class="mt-2 flex items-center gap-1.5 text-xs font-medium text-emerald-600">
                        <x-icon name="check" class="h-3.5 w-3.5" stroke="2.5" />
                        Tavsiya etilgan uzunlikda (50–150 so'z)
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <label class="flex items-center gap-2 text-sm font-bold text-slate-800 mb-3">
                            <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">2</span>
                            Matn turi
                        </label>
                        <select class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm text-slate-700 focus:border-blue-500 focus:ring-blue-500">
                            <option>Badiiy matn</option>
                            <option>Axborot matni</option>
                        </select>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <label class="flex items-center gap-2 text-sm font-bold text-slate-800 mb-3">
                            <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">3</span>
                            Sinf darajasi
                        </label>
                        <select class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm text-slate-700 focus:border-blue-500 focus:ring-blue-500">
                            <option>1-sinf</option>
                            <option selected>2-sinf</option>
                            <option>3-sinf</option>
                            <option>4-sinf</option>
                        </select>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <label class="flex items-center gap-2 text-sm font-bold text-slate-800 mb-3">
                        <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">4</span>
                        Matnning asosiy mavzusi
                    </label>
                    <input type="text" placeholder="Qushlar, tabiat, oila, sahar..."
                           class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm text-slate-700 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <label class="flex items-center gap-2 text-sm font-bold text-slate-800 mb-3">
                            <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">5</span>
                            O'qish maqsadi
                        </label>
                        <select class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-sm text-slate-700 focus:border-blue-500 focus:ring-blue-500">
                            <option>Adabiy tajriba orttirish</option>
                            <option>Axborot olish</option>
                        </select>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <label class="flex items-center gap-2 text-sm font-bold text-slate-800 mb-3">
                            <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-blue-100 text-blue-700 font-bold text-[10px]">6</span>
                            Savollar soni
                        </label>
                        <div class="flex items-center justify-between rounded-lg border border-slate-300 px-3 py-1.5">
                            <button type="button" id="q-minus" class="grid h-7 w-7 place-items-center rounded-md text-slate-500 hover:bg-slate-100 font-bold">−</button>
                            <span class="text-sm font-semibold text-slate-700"><span id="q-count">4</span> ta savol</span>
                            <button type="button" id="q-plus" class="grid h-7 w-7 place-items-center rounded-md text-slate-500 hover:bg-slate-100 font-bold">+</button>
                        </div>
                    </div>
                </div>

                <button type="button" class="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-3.5 text-sm font-bold text-white hover:bg-blue-700 transition-colors">
                    Savollar yaratish
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>

                {{-- Compliance check --}}
                <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Matning topshiriq yaratishga moslik tekshiruvi</h3>
                    </div>
                    <div class="divide-y divide-slate-100">
                        @foreach ([
                            ['label' => 'Matn sinf darajasiga mos', 'value' => 'Mos'],
                            ['label' => 'Matnda aniq axborot mavjud', 'value' => 'Mavjud'],
                            ['label' => "Matnda xulosa chiqarish imkoniyati bor", 'value' => 'Bor'],
                            ['label' => 'Matn savol tuzishga qulay', 'value' => 'Qulay'],
                            ['label' => "Matn tarbiyaviy yoki bilish qiymatiga ega", 'value' => 'Ega'],
                        ] as $row)
                            <div class="flex items-center justify-between px-4 py-2.5">
                                <span class="text-xs text-slate-700">{{ $row['label'] }}</span>
                                <span class="inline-flex items-center gap-1 rounded-md bg-emerald-100 px-2 py-0.5 text-[11px] font-semibold text-emerald-700">
                                    <x-icon name="check" class="h-3 w-3" stroke="3" />
                                    {{ $row['value'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Right column --}}
            <div class="space-y-5">
                <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-600">
                            <x-icon name="bulb" class="h-4 w-4 text-white" stroke="1.8" />
                        </span>
                        <h3 class="text-sm font-bold text-emerald-900">Matn tanlash bo'yicha maslahatlar</h3>
                    </div>
                    <ul class="space-y-2">
                        @foreach ([
                            "Matn boshlang'ich sinf o'quvchilarining yoshiga mos bo'lishi",
                            "Matn mazmuni tarbiyaviy, bilish va fikrlash imkoniyatiga ega bo'lishi",
                            "Matnda aniq axborot, voqea, sabab-oqibat, qahramon harakati yoki muallif fikri mavjud bo'lishi",
                            "Matn asosida turli darajadagi savollar tuzish imkoniyati bo'lishi",
                            "Matn hajmi o'quvchining sinf darajasiga mos tanlanishi",
                        ] as $tip)
                            <li class="flex items-start gap-2 text-xs text-emerald-800">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-500" stroke="2.5" />
                                {{ $tip }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="rounded-xl border border-blue-200 bg-blue-50 p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-600">
                            <x-icon name="doc" class="h-4 w-4 text-white" stroke="1.8" />
                        </span>
                        <h3 class="text-sm font-bold text-blue-900">Matn turlari</h3>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <p class="text-xs font-bold text-blue-900">Badiiy matnlar</p>
                            <p class="text-xs text-blue-800 leading-relaxed">Hikoya, ertak, rivoyat, voqeali matnlar. Qahramon, voqea, xarakter, muammo, yechim va g'oya tahlil qilinadi.</p>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-blue-900">Axborot matnlari</p>
                            <p class="text-xs text-blue-800 leading-relaxed">Tabiat, tarix, fan, kasb, hayvonot, texnologiya, sog'lom turmush yoki hayotiy ma'lumotlarga oid matnlar.</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <div class="bg-slate-800 px-4 py-2.5">
                        <h3 class="text-sm font-bold text-white uppercase tracking-wide">Keyingi bosqichlar</h3>
                    </div>
                    <div class="divide-y divide-slate-100">
                        @foreach ([
                            'Literal tushunish savollari',
                            'Xulosa chiqarish savollari',
                            'Talqin qilish savollari',
                            'Baholash savollari',
                            'Javob kaliti yaratish',
                            "Pdf, Word yuklab olish",
                        ] as $i => $step)
                            <div class="flex items-center justify-between gap-2 px-4 py-2.5">
                                <span class="flex items-center gap-2.5">
                                    <span class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-400 font-bold text-[10px]">{{ $i + 2 }}</span>
                                    <span class="text-xs text-slate-500">{{ $step }}</span>
                                </span>
                                <span class="shrink-0 rounded-full bg-slate-100 px-2 py-0.5 text-[10px] font-medium text-slate-400">Tez orada</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Metodik izoh --}}
        <div class="mt-6 rounded-xl border border-amber-300 bg-amber-100 p-5">
            <div class="flex items-center gap-2 mb-3">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                    <x-icon name="bulb" class="h-4 w-4 text-white" stroke="1.8" />
                </span>
                <h3 class="text-sm font-bold text-amber-900">Metodik izoh</h3>
            </div>
            <p class="text-xs text-amber-900 leading-relaxed">Matn yuklash bosqichi bo'lajak o'qituvchining matn tanlash kompetensiyasini rivojlantiradi. Chunki o'qish savodxonligini shakllantirishda har qanday matn emas, balki maqsadga muvofiq tanlangan matn muhim ahamiyatga ega. Yaxshi tanlangan matn o'quvchini o'qishga qiziqtiradi, savollarga javob izlashga undaydi, xulosa chiqarish va fikr bildirish imkonini beradi.</p>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-800 to-blue-900 p-5 text-white">
            <div class="flex items-center gap-2 mb-3">
                <x-icon name="sparkle" class="h-4 w-4 text-blue-300" />
                <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide">Kutiladigan natija</p>
            </div>
            <p class="text-xs text-slate-200 leading-relaxed">Foydalanuvchi PIRLS tipidagi topshiriq yaratish uchun mos matn tanlashni o'rganadi, matn turini farqlaydi, sinf darajasiga moslashtiradi va keyingi bosqichlarda savollar yaratishga tayyor material hosil qiladi.</p>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="{{ route('pirls-konstruktor.index') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Konstruktorga qaytish
            </a>
            <span class="inline-flex items-center gap-2 rounded-xl bg-slate-100 px-4 py-2.5 text-sm font-semibold text-slate-400">
                Keyingi: Literal tushunish savollari
                <span class="rounded-full bg-slate-200 px-2 py-0.5 text-[10px] font-medium text-slate-500">Tez orada</span>
            </span>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const textarea = document.getElementById('text-input');
        const wordCount = document.getElementById('word-count');
        const charCount = document.getElementById('char-count');

        function updateCounts() {
            const value = textarea.value.trim();
            const words = value === '' ? 0 : value.split(/\s+/).length;
            wordCount.textContent = words;
            charCount.textContent = textarea.value.length;
        }

        textarea.addEventListener('input', updateCounts);
        updateCounts();

        const qCount = document.getElementById('q-count');
        const qMinus = document.getElementById('q-minus');
        const qPlus = document.getElementById('q-plus');
        let questions = 4;

        qMinus.addEventListener('click', function () {
            questions = Math.max(1, questions - 1);
            qCount.textContent = questions;
        });

        qPlus.addEventListener('click', function () {
            questions = Math.min(10, questions + 1);
            qCount.textContent = questions;
        });
    })();
</script>
@endpush
@endsection
