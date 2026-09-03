@extends('layouts.app')
@section('title', "Matnlardan foydalanish strategiyalari — Sinf strategiyalari")
@section('content')

@php
    $breadcrumbItems = [
        ['label' => 'Sinf strategiyalari', 'url' => route('sinf-strategiyalari.index')],
        ['label' => "Matnlardan foydalanish strategiyalari", 'url' => null],
    ];
@endphp
<x-breadcrumbs :items="$breadcrumbItems" />

<div class="flex flex-col gap-6 lg:flex-row">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'foydalanish-strategiyalari'])
    <div class="min-w-0 flex-1">

        {{-- Hero --}}
        <section class="relative mb-8 overflow-hidden rounded-3xl border border-violet-100 bg-gradient-to-br from-violet-50 via-white to-indigo-50 p-6 sm:p-9">
            <div class="relative z-10 flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-2xl">
                    <div class="mb-4 flex items-center gap-2">
                        <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-violet-600 text-xs font-bold text-white">2</span>
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-violet-600/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-violet-700 ring-1 ring-violet-600/20">
                            Sinf strategiyalari &middot; 2-bo'lim
                        </span>
                    </div>
                    <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-4xl">Matnlardan foydalanish strategiyalari</h1>
                    <p class="mt-3 max-w-xl text-sm leading-relaxed text-slate-600 sm:text-base">
                        Matndan foydalanish strategiyasi — o'qituvchining matnni dars jarayonida qanday maqsadda, qanday
                        bosqichda va qanday metodlar orqali qo'llashini belgilovchi metodik yo'ldir.
                    </p>

                    <div class="mt-6 flex flex-wrap items-center gap-x-6 gap-y-2 text-xs font-medium text-slate-500">
                        <span class="inline-flex items-center gap-1.5"><x-icon name="layers" class="h-4 w-4 text-violet-600" stroke="1.8" /> 3 bosqichli metodika</span>
                        <span class="inline-flex items-center gap-1.5"><x-icon name="check" class="h-4 w-4 text-violet-600" stroke="2" /> Har qanday matn turiga mos</span>
                        <span class="inline-flex items-center gap-1.5"><x-icon name="doc" class="h-4 w-4 text-violet-600" stroke="1.8" /> Amaliy namuna bilan</span>
                    </div>
                </div>

                <div class="relative shrink-0 self-center">
                    <div class="relative grid h-44 w-44 place-items-center rounded-[2rem] bg-white/70 shadow-sm ring-1 ring-violet-100 sm:h-52 sm:w-52">
                        <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/reading-strategy-hero.png') }}"
                             alt="O'qish strategiyasi" loading="lazy" class="h-32 w-32 object-contain sm:h-40 sm:w-40">
                    </div>
                    <span class="absolute -right-2 -top-2 grid h-11 w-11 place-items-center overflow-hidden rounded-2xl bg-white shadow-lg ring-4 ring-white">
                        <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/discussion-chat.png') }}" alt="" class="h-8 w-8 object-contain">
                    </span>
                    <span class="absolute -bottom-3 -left-3 grid h-12 w-12 place-items-center overflow-hidden rounded-2xl bg-white shadow-lg ring-4 ring-white">
                        <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/notes-document-pen.png') }}" alt="" class="h-9 w-9 object-contain">
                    </span>
                </div>
            </div>
            <span class="pointer-events-none absolute -right-10 -top-16 h-56 w-56 rounded-full bg-violet-200/20 blur-2xl"></span>
            <span class="pointer-events-none absolute -bottom-16 -left-10 h-48 w-48 rounded-full bg-indigo-200/20 blur-2xl"></span>
        </section>

        {{-- Maqsad / Nazariy izoh / Amaliy tavsiya --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-3">
            @foreach ([
                ['title' => 'MAQSAD', 'ring' => 'ring-violet-100', 'badge' => 'bg-violet-50', 'text' => 'text-violet-900',
                 'img' => 'strategy-goal-target.png',
                 'body' => "O'qituvchiga matnni darsning uch bosqichida izchil qo'llash metodikasini o'rgatish: o'qishdan oldin tayyorgarlik, o'qish jarayonida kuzatish va tushunish, o'qishdan keyin mustahkamlash va baholash."],
                ['title' => 'NAZARIY IZOH', 'ring' => 'ring-purple-100', 'badge' => 'bg-purple-50', 'text' => 'text-purple-900',
                 'img' => 'theory-explanation-document.png',
                 'body' => "Matn faqat o'qish uchun emas, balki tushunish, muhokama qilish, xulosa chiqarish, baholash va ijodiy fikrlash uchun ishlatiladi. Samarali darsda matn bilan ishlash uch bosqichda tashkil etiladi."],
                ['title' => "AMALIY TAVSIYA", 'ring' => 'ring-emerald-100', 'badge' => 'bg-emerald-50', 'text' => 'text-emerald-900',
                 'img' => 'checklist.png',
                 'body' => "Har bir bosqich uchun oldindan 3-4 ta savol tayyorlang. Savollar aniq, matnga asoslangan va o'quvchini fikrlashga undovchi bo'lsin — bu strategiyani samarali qo'llashning kaliti."],
            ] as $card)
                <div class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm ring-1 {{ $card['ring'] }} transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                    <div class="mb-3 flex items-center gap-3">
                        <span class="grid h-12 w-12 shrink-0 place-items-center overflow-hidden rounded-xl {{ $card['badge'] }}">
                            <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/'.$card['img']) }}" alt="" loading="lazy" class="h-9 w-9 object-contain transition-transform duration-300 group-hover:scale-110">
                        </span>
                        <h3 class="text-xs font-bold tracking-wide {{ $card['text'] }}">{{ $card['title'] }}</h3>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-600">{{ $card['body'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Maslahat --}}
        <div class="mb-8 flex items-center gap-4 rounded-2xl border border-amber-200 bg-amber-50/70 px-5 py-4">
            <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/learning-idea-lightbulb.png') }}" alt="" loading="lazy" class="h-11 w-11 shrink-0 object-contain">
            <p class="text-xs leading-relaxed text-amber-800 sm:text-sm">
                <span class="font-bold">Maslahat:</span> savollaringizni oldindan yozib qo'ying — dars davomida bosqichni
                o'tkazib yubormaslik va vaqtni tejash uchun bu juda foydali.
            </p>
        </div>

        {{-- Uch bosqich --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="h-px flex-1 bg-slate-200"></span>
                <span class="inline-flex items-center gap-2 rounded-full bg-slate-900 px-4 py-2 text-xs font-bold uppercase tracking-wide text-white">
                    <x-icon name="layers" class="h-3.5 w-3.5" stroke="2" /> Uch bosqichli strategiya
                </span>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"O'QISHDAN OLDIN",'accent'=>'violet','img'=>'student-reading-thinking.png',
                     'teacher'=>["Sarlavha, rasm, yangi so'zlar bilan ishlaydi","O'quvchini mavzuga tayyorlaydi","Taxmin savollarini beradi"],
                     'student'=>["Taxmin qiladi","Mavzu haqida fikr bildiradi","Oldingi bilimlarni eslatadi"]],
                    ['n'=>2,'title'=>"O'QISH JARAYONIDA",'accent'=>'blue','img'=>'student-reading-magnifier.png',
                     'teacher'=>["Savollar beradi","Muhim joylarni belgilatadi","Kuzatuvchi topshiriqlar beradi"],
                     'student'=>["Matnni o'qiydi","Javob izlaydi","Noma'lum so'zlarni aniqlaydi"]],
                    ['n'=>3,'title'=>"O'QISHDAN KEYIN",'accent'=>'emerald','img'=>'student-writing.png',
                     'teacher'=>["Xulosa, baholash savollarini beradi","Dalil topishni so'raydi","Ijodiy topshiriq beradi"],
                     'student'=>["Fikr bildiradi","Dalil topadi","Xulosa chiqaradi"]],
                ] as $s)
                    @php
                        $accentMap = [
                            'violet'  => ['ring' => 'ring-violet-100', 'chip' => 'bg-violet-600', 'soft' => 'bg-violet-50', 'text' => 'text-violet-900'],
                            'blue'    => ['ring' => 'ring-blue-100', 'chip' => 'bg-blue-600', 'soft' => 'bg-blue-50', 'text' => 'text-blue-900'],
                            'emerald' => ['ring' => 'ring-emerald-100', 'chip' => 'bg-emerald-600', 'soft' => 'bg-emerald-50', 'text' => 'text-emerald-900'],
                        ];
                        $a = $accentMap[$s['accent']];
                    @endphp
                    <div class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm ring-1 {{ $a['ring'] }} transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative flex items-center justify-center {{ $a['soft'] }} pt-5">
                            <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/'.$s['img']) }}"
                                 alt="{{ $s['title'] }}" loading="lazy"
                                 class="h-28 w-28 object-contain transition-transform duration-300 group-hover:scale-105 sm:h-32 sm:w-32">
                            <span class="absolute left-4 top-4 grid h-7 w-7 place-items-center rounded-full {{ $a['chip'] }} text-xs font-bold text-white shadow">{{ $s['n'] }}</span>
                        </div>
                        <div class="flex flex-1 flex-col p-4">
                            <h4 class="mb-3 text-xs font-bold tracking-wide {{ $a['text'] }}">{{ $s['title'] }}</h4>
                            <div class="space-y-3">
                                <div>
                                    <p class="mb-1 text-[11px] font-semibold uppercase tracking-wide text-slate-400">O'qituvchi</p>
                                    <ul class="space-y-1">
                                        @foreach ($s['teacher'] as $t)
                                            <li class="flex items-start gap-1.5 text-xs text-slate-600"><svg class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full {{ $a['chip'] }}"></svg>{{ $t }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div>
                                    <p class="mb-1 text-[11px] font-semibold uppercase tracking-wide text-slate-400">O'quvchi</p>
                                    <ul class="space-y-1">
                                        @foreach ($s['student'] as $t)
                                            <li class="flex items-start gap-1.5 text-xs text-slate-600"><svg class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-slate-300"></svg>{{ $t }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Namuna --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
                <span class="grid h-11 w-11 shrink-0 place-items-center overflow-hidden rounded-xl bg-white shadow-sm">
                    <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/reading-notebook-pen.png') }}" alt="" loading="lazy" class="h-8 w-8 object-contain">
                </span>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Boshlang'ich sinfga mos namuna</p>
                    <p class="text-sm font-bold text-slate-800">"Yo'qolgan daftar"</p>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                @foreach ([
                    ['title'=>"O'qishdan oldin",'color'=>'border-violet-200 bg-violet-50/60','dot'=>'bg-violet-500','items'=>[
                        "Daftar nima uchun kerak?",
                        "Siz hech daftaringizni unutganmisiz?",
                        "Sarlavhaga qarab matn nima haqida bo'lishi mumkin?",
                    ]],
                    ['title'=>"O'qish jarayonida",'color'=>'border-blue-200 bg-blue-50/60','dot'=>'bg-blue-500','items'=>[
                        "Qahramon qanday muammoga duch keldi?",
                        "Kim unga yordam berdi?",
                        "Qaysi joyda voqea o'zgardi?",
                    ]],
                    ['title'=>"O'qishdan keyin",'color'=>'border-emerald-200 bg-emerald-50/60','dot'=>'bg-emerald-500','items'=>[
                        "Matndan qanday xulosa chiqarish mumkin?",
                        "Do'stlikni bildiruvchi gapni toping.",
                        "Qahramon o'rnida siz nima qilardingiz?",
                    ]],
                ] as $stage)
                    <div class="rounded-2xl border p-4 {{ $stage['color'] }}">
                        <p class="mb-3 text-xs font-bold text-slate-800">{{ $stage['title'] }}</p>
                        <ul class="space-y-2">
                            @foreach ($stage['items'] as $item)
                                <li class="flex items-start gap-2 text-xs leading-relaxed text-slate-700">
                                    <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full {{ $stage['dot'] }}"></span>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Qanday foydalanish --}}
        <div class="mb-8">
            <div class="mb-5 flex items-center gap-3">
                <span class="h-px flex-1 bg-slate-200"></span>
                <span class="text-xs font-bold uppercase tracking-wide text-slate-400">Ushbu strategiyadan qanday foydalanish mumkin</span>
                <span class="h-px flex-1 bg-slate-200"></span>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>'Tanlang','img'=>'stacked-books.png','body'=>"Darsingizga mos matn va bosqichlarni tanlab oling."],
                    ['n'=>2,'title'=>"Ko'rib chiqing",'img'=>'online-learning-laptop.png','body'=>"Har bir bosqich uchun savollarni oldindan ko'zdan kechiring."],
                    ['n'=>3,'title'=>"Darsda qo'llang",'img'=>'graduation-cap-books.png','body'=>"Strategiyani izchil, uch bosqichda amalda qo'llang."],
                ] as $step)
                    <div class="relative rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm">
                        <span class="absolute left-4 top-4 grid h-6 w-6 place-items-center rounded-full bg-indigo-600 text-[11px] font-bold text-white">{{ $step['n'] }}</span>
                        <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/'.$step['img']) }}" alt="" loading="lazy" class="mx-auto mb-3 h-16 w-16 object-contain">
                        <p class="mb-1 text-sm font-bold text-slate-800">{{ $step['title'] }}</p>
                        <p class="text-xs leading-relaxed text-slate-500">{{ $step['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-violet-200 bg-gradient-to-r from-violet-50 to-purple-50 px-6 py-5">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex items-start gap-4">
                    <img src="{{ asset('images/sections/sinf-strategiyalari/foydalanish-strategiyalari/achievement-trophy.png') }}" alt="" loading="lazy" class="h-14 w-14 shrink-0 object-contain">
                    <div>
                        <p class="mb-1.5 text-sm font-bold text-violet-900">Kutiladigan natija</p>
                        <p class="text-xs leading-relaxed text-violet-800">O'quvchi matn bilan ongli ishlaydi, savollarga matn asosida javob beradi, o'z fikrini asoslaydi va o'qiganidan xulosa chiqaradi.</p>
                        <p class="mt-1.5 text-xs leading-relaxed text-violet-700">O'qituvchi esa matndan darsning asosiy metodik vositasi sifatida samarali foydalanadi.</p>
                    </div>
                </div>
                <a href="{{ route('sinf-strategiyalari.show', 'matn-turlari') }}" class="inline-flex shrink-0 items-center gap-2 self-start rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-violet-700 sm:self-auto">
                    Keyingi bo'lim
                    <x-icon name="arrow-right" class="h-4 w-4" stroke="2" />
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
