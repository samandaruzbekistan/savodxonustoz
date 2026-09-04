@extends('layouts.app')
@section('title', 'Matnni tushunish nazariyasi')
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'matn-tushunish'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-gradient-to-br from-violet-950 via-violet-900 to-purple-900 p-7 shadow-sm sm:p-9">
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-white/5"></div>
            <div class="pointer-events-none absolute -bottom-20 left-1/3 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative z-10 max-w-xl">
                <span class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white ring-1 ring-white/25 backdrop-blur-sm">
                    <span class="grid h-4 w-4 place-items-center rounded-full bg-white/20 text-[10px]">4</span>
                    Nazariya · 4-bo'lim
                </span>
                <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Matnni tushunish nazariyasi</h1>
                <p class="mt-3 leading-relaxed text-violet-100">Matnni tushunish jarayonining bosqichlari, o'qishdan oldin – davomida – keyin ishlash strategiyalari va savol turlari yoritiladi.</p>
            </div>
            <img src="{{ asset('images/nazariya/section_04.png') }}" alt="Matnni tushunish" class="pointer-events-none absolute right-6 bottom-0 hidden h-36 w-36 object-contain opacity-90 md:block lg:h-40 lg:w-40">
        </div>

        {{-- 2 intro cards --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-violet-50 text-violet-600">
                        <x-icon name="target" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Sahifaning maqsadi</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Ushbu sahifaning maqsadi matnni tushunish jarayonining bosqichlarini izohlash, o'quvchilarda mazmunni anglash, tahlil qilish va xulosa chiqarish ko'nikmalarini rivojlantirishning metodik asoslarini ko'rsatishdan iborat.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="mb-3 flex items-center gap-2.5">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-indigo-50 text-indigo-600">
                        <x-icon name="bulb" class="h-5 w-5" />
                    </span>
                    <h3 class="text-sm font-bold text-slate-800">Matnni tushunish nima?</h3>
                </div>
                <p class="text-xs leading-relaxed text-slate-500">Matnni tushunish — bu o'quvchining yozilgan so'zlarni o'qishi bilangina yakunlanmaydigan, balki matndagi ma'no, bog'lanish, g'oya, obraz va axborotni anglashga qaratilgan murakkab aqliy jarayondir. O'quvchi matnni tushunishi uchun so'z ma'nosini bilishi, gaplar o'rtasidagi bog'lanishni anglay olishi, voqealar ketma-ketligini ko'ra olishi va muallif aytmoqchi bo'lgan fikrini sezishi kerak.</p>
            </div>
        </div>

        {{-- 5 bosqich --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Matnni tushunish bosqichlari</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-5">
                @foreach ([
                    ['n'=>1,'title'=>"So'z darajasida tushunish",'desc'=>"O'quvchi matndagi so'zlarning ma'nosini anglaydi.",'tint'=>'bg-indigo-50 text-indigo-600'],
                    ['n'=>2,'title'=>'Gap darajasida tushunish','desc'=>"Gapdagi fikrini tushunadi.",'tint'=>'bg-blue-50 text-blue-600'],
                    ['n'=>3,'title'=>'Matn darajasida tushunish','desc'=>"Voqealar, fikrlar va qismlar o'rtasidagi bog'lanishni anglaydi.",'tint'=>'bg-violet-50 text-violet-600'],
                    ['n'=>4,'title'=>'Xulosa darajasida tushunish','desc'=>"Matndagi bevosita aytilmagan ma'noni topadi.",'tint'=>'bg-purple-50 text-purple-600'],
                    ['n'=>5,'title'=>'Baholash darajasida tushunish','desc'=>"Matnga munosabat bildiradi, fikrini asoslaydi.",'tint'=>'bg-pink-50 text-pink-600'],
                ] as $b)
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="mb-2.5 inline-flex h-7 w-7 items-center justify-center rounded-lg text-xs font-bold {{ $b['tint'] }}">{{ $b['n'] }}</span>
                        <p class="mb-1.5 text-xs font-bold text-slate-800">{{ $b['title'] }}</p>
                        <p class="text-xs leading-relaxed text-slate-500">{{ $b['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- O'qishdan oldin/davomida/keyin --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Boshlang'ich sinfda matnni tushunish faoliyatlari</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                            <x-icon name="compass" class="h-4.5 w-4.5" />
                        </span>
                        <h4 class="text-sm font-bold text-slate-800">O'qishdan oldin</h4>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (['Matn mavzusi bilan tanishtirish','Sarlavha asosida taxmin qilish',"Yangi so'zlar ustida ishlash"] as $i)
                            <li class="flex items-start gap-1.5 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-500" stroke="2.5" />
                                {{ $i }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                            <x-icon name="sparkle" class="h-4.5 w-4.5" />
                        </span>
                        <h4 class="text-sm font-bold text-slate-800">O'qish jarayonida</h4>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (['Savollarga javob izlash','Muhim joylarni belgilash',"Tushunmagan so'zlarni aniqlash"] as $i)
                            <li class="flex items-start gap-1.5 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" stroke="2.5" />
                                {{ $i }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-violet-50 text-violet-600">
                            <x-icon name="clipboard" class="h-4.5 w-4.5" />
                        </span>
                        <h4 class="text-sm font-bold text-slate-800">O'qishdan keyin</h4>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (['Matn mazmunini muhokama qilish','Xulosa chiqarish','Savollar tuzish',"O'quvchi o'z munosabatini bildirish"] as $i)
                            <li class="flex items-start gap-1.5 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-500" stroke="2.5" />
                                {{ $i }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- Metodik + Amaliy misol --}}
        <div class="mb-8 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                <img src="{{ asset('images/nazariya/section_08.png') }}" alt="Bo'lajak o'qituvchi" class="h-32 w-full object-cover">
                <div class="p-5">
                    <div class="mb-3 flex items-center gap-2.5">
                        <span class="grid h-9 w-9 shrink-0 place-items-center rounded-xl bg-blue-50 text-blue-600">
                            <x-icon name="cap" class="h-4.5 w-4.5" />
                        </span>
                        <h3 class="text-sm font-bold text-slate-800">Bo'lajak o'qituvchi uchun metodik ahamiyati</h3>
                    </div>
                    <p class="mb-3 text-xs leading-relaxed text-slate-500">Bo'lajak o'qituvchi matnni tushunish jarayonini bosqichma-bosqich tashkil qila olishi kerak. U o'quvchidan faqat matnni qayta hikoya qilishni emas, balki matndan ma'no izlash, savol berish, dalil topish va xulosa chiqarishni talab qilishi lozim.</p>
                    <p class="mb-2 text-xs font-semibold text-slate-700">Bu sahifa bo'lajak o'qituvchiga quyidagi ko'nikmalarni beradi:</p>
                    <ul class="space-y-1.5">
                        @foreach (["matnni o'qishdan oldin tayyorgarlik ko'rish","murakkab so'zlarni tushuntirish","matn mazmuniga yo'naltiruvchi savollar tuzish","o'quvchini xulosa chiqarishga o'rgatish","matn asosida fikr bildirishni tashkil etish"] as $k)
                            <li class="flex items-start gap-1.5 text-xs text-slate-500">
                                <x-icon name="check" class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" stroke="2.5" />
                                {{ $k }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="mb-3 text-sm font-bold text-slate-800">Amaliy misollar — Matn sarlavhasi: "Kichik bog'bon"</h3>
                <div class="space-y-3">
                    <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-3 text-xs">
                        <p class="mb-1 font-semibold text-emerald-700">O'qishdan oldingi savollar:</p>
                        <ul class="space-y-0.5 text-emerald-700">
                            <li>• Sizningcha, matn nima haqida bo'lishi mumkin?</li>
                            <li>• Bog'bon kim?</li>
                            <li>• Bolalar bog'bon bo'lishi mumkinmi?</li>
                        </ul>
                    </div>
                    <div class="rounded-xl border border-blue-200 bg-blue-50 p-3 text-xs">
                        <p class="mb-1 font-semibold text-blue-700">O'qish jarayonidagi savollar:</p>
                        <ul class="space-y-0.5 text-blue-700">
                            <li>• Qahramon nima ish qildi?</li>
                            <li>• U qanday qiyinchilikka duch keldi?</li>
                            <li>• Qaysi gap matnning asosiy fikrini bildiradi?</li>
                        </ul>
                    </div>
                    <div class="rounded-xl border border-violet-200 bg-violet-50 p-3 text-xs">
                        <p class="mb-1 font-semibold text-violet-700">O'qishdan keyingi savollar:</p>
                        <ul class="space-y-0.5 text-violet-700">
                            <li>• Matndan qanday xulosa chiqardingiz?</li>
                            <li>• Qahramonning qaysi harakati sizga yoqdi?</li>
                            <li>• Siz ham shunday ish qilganmisiz?</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-8">
            <div class="mb-4 flex items-center gap-2">
                <span class="h-px flex-1 bg-slate-200"></span>
                <h2 class="shrink-0 text-xs font-bold uppercase tracking-wide text-slate-400">Savol-topshiriqlar</h2>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"Matnni tushunish qanday bosqichlardan iborat?"],
                    ['n'=>2,'q'=>"O'qishdan oldin beriladigan savollarga 3 ta misol yozing."],
                    ['n'=>3,'q'=>"O'qish jarayonida o'quvchini faol ushlab turish uchun qanday topshiriqlar berish mumkin?"],
                    ['n'=>4,'q'=>"Bitta kichik matn tanlang va unga o'qishdan oldin, o'qish davomida va o'qishdan keyingi savollar tuzing."],
                    ['n'=>5,'q'=>"\"Matnni tushunmadim\" degan o'quvchiga qanday yordam berasiz?"],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-violet-50 text-xs font-bold text-violet-600">{{ $t['n'] }}</span>
                        <p class="text-xs leading-relaxed text-slate-600">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-violet-950 via-violet-900 to-purple-900 p-6 text-white shadow-sm">
            <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full bg-white/5"></div>
            <div class="relative mb-3 flex items-center gap-2.5">
                <span class="grid h-9 w-9 place-items-center rounded-xl bg-white/10 text-violet-200">
                    <x-icon name="target" class="h-4.5 w-4.5" />
                </span>
                <span class="text-xs font-semibold uppercase tracking-wide text-violet-200">Kutiladigan natija</span>
            </div>
            <div class="relative grid grid-cols-2 gap-2.5 sm:grid-cols-5">
                @foreach (['Matnni tushunish jarayonining bosqichlarini biladi',"O'qish darsini mazmunli tashkil etish yo'llarini o'rganadi","O'quvchini matndan fikr topishga o'rgatadi","Xulosa chiqarish ko'nikmasini rivojlantiradi","O'z javobini asoslashga yo'naltira oladi"] as $n)
                    <div class="rounded-xl bg-white/10 p-2.5 text-center text-xs leading-snug text-violet-50">{{ $n }}</div>
                @endforeach
            </div>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('nazariya.show', 'pisa') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 transition-colors hover:bg-slate-50">
                <x-icon name="arrow-right" class="h-4 w-4 rotate-180" />
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'ravon-oqish') }}" class="inline-flex items-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-violet-700">
                Keyingi: Ravon o'qish
                <x-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>
    </div>
</div>
@endsection
