@extends('layouts.app')
@section('title', "Matnlardan foydalanish strategiyalari — Sinf strategiyalari")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'foydalanish-strategiyalari'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-violet-100 text-violet-700">2</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Sinf strategiyalari • 2-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Matnlardan foydalanish strategiyalari</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Matndan foydalanish strategiyasi — o'qituvchining matnni dars jarayonida qanday maqsadda, qanday bosqichda va qanday metodlar orqali qo'llashini belgilovchi metodik yo'ldir.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-violet-300 bg-violet-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-violet-800 leading-relaxed">O'qituvchiga matnni darsning uch bosqichida izchil qo'llash metodikasini o'rgatish: o'qishdan oldin tayyorgarlik, o'qish jarayonida kuzatish va tushunish, o'qishdan keyin mustahkamlash va baholash.</p>
            </div>
            <div class="rounded-xl border border-purple-300 bg-purple-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-purple-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-purple-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-purple-800 leading-relaxed">Matn faqat o'qish uchun emas, balki tushunish, muhokama qilish, xulosa chiqarish, baholash va ijodiy fikrlash uchun ishlatiladi. Samarali darsda matn bilan ishlash uch bosqichda tashkil etiladi.</p>
            </div>
        </div>

        {{-- Uch bosqich --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">UCH BOSQICHLI STRATEGIYA</div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                @foreach ([
                    ['n'=>1,'title'=>"O'QISHDAN OLDIN",'color'=>'border-violet-300 bg-violet-100 text-violet-900','ic'=>'bg-violet-600',
                     'teacher'=>["Sarlavha, rasm, yangi so'zlar bilan ishlaydi","O'quvchini mavzuga tayyorlaydi","Taxmin savollarini beradi"],
                     'student'=>["Taxmin qiladi","Mavzu haqida fikr bildiradi","Oldingi bilimlarni eslatadi"]],
                    ['n'=>2,'title'=>"O'QISH JARAYONIDA",'color'=>'border-blue-300 bg-blue-100 text-blue-900','ic'=>'bg-blue-600',
                     'teacher'=>["Savollar beradi","Muhim joylarni belgilatadi","Kuzatuvchi topshiriqlar beradi"],
                     'student'=>["Matnni o'qiydi","Javob izlaydi","Noma'lum so'zlarni aniqlaydi"]],
                    ['n'=>3,'title'=>"O'QISHDAN KEYIN",'color'=>'border-emerald-300 bg-emerald-100 text-emerald-900','ic'=>'bg-emerald-600',
                     'teacher'=>["Xulosa, baholash savollarini beradi","Dalil topishni so'raydi","Ijodiy topshiriq beradi"],
                     'student'=>["Fikr bildiradi","Dalil topadi","Xulosa chiqaradi"]],
                ] as $s)
                    <div class="rounded-xl border p-4 {{ $s['color'] }}">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="grid h-7 w-7 place-items-center rounded-full {{ $s['ic'] }} text-white text-sm font-bold shrink-0">{{ $s['n'] }}</span>
                            <h4 class="text-xs font-bold">{{ $s['title'] }}</h4>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <p class="text-xs font-semibold opacity-70 mb-1">O'qituvchi:</p>
                                <ul class="space-y-1">
                                    @foreach ($s['teacher'] as $t)
                                        <li class="flex items-start gap-1.5 text-xs"><svg class="mt-0.5 h-3 w-3 shrink-0 opacity-50" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>{{ $t }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <p class="text-xs font-semibold opacity-70 mb-1">O'quvchi:</p>
                                <ul class="space-y-1">
                                    @foreach ($s['student'] as $t)
                                        <li class="flex items-start gap-1.5 text-xs"><svg class="mt-0.5 h-3 w-3 shrink-0 opacity-50" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>{{ $t }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Namuna --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BOSHLANG'ICH SINFGA MOS NAMUNA — "YO'QOLGAN DAFTAR"</div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                @foreach ([
                    ['title'=>"O'qishdan oldin",'color'=>'border-violet-200 bg-violet-50','items'=>[
                        "Daftar nima uchun kerak?",
                        "Siz hech daftaringizni unutganmisiz?",
                        "Sarlavhaga qarab matn nima haqida bo'lishi mumkin?",
                    ]],
                    ['title'=>"O'qish jarayonida",'color'=>'border-blue-200 bg-blue-50','items'=>[
                        "Qahramon qanday muammoga duch keldi?",
                        "Kim unga yordam berdi?",
                        "Qaysi joyda voqea o'zgardi?",
                    ]],
                    ['title'=>"O'qishdan keyin",'color'=>'border-emerald-200 bg-emerald-50','items'=>[
                        "Matndan qanday xulosa chiqarish mumkin?",
                        "Do'stlikni bildiruvchi gapni toping.",
                        "Qahramon o'rnida siz nima qilardingiz?",
                    ]],
                ] as $stage)
                    <div class="rounded-xl border p-4 {{ $stage['color'] }}">
                        <p class="text-xs font-bold text-slate-800 mb-3">{{ $stage['title'] }}</p>
                        <ul class="space-y-2">
                            @foreach ($stage['items'] as $item)
                                <li class="flex items-start gap-1.5 text-xs text-slate-700">
                                    <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-slate-400" fill="currentColor" viewBox="0 0 6 6"><circle cx="3" cy="3" r="2"/></svg>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-violet-200 bg-gradient-to-r from-violet-50 to-purple-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-violet-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-violet-800 leading-relaxed mb-2">O'quvchi matn bilan ongli ishlaydi, savollarga matn asosida javob beradi, o'z fikrini asoslaydi va o'qiganidan xulosa chiqaradi.</p>
                    <p class="text-xs text-violet-700 leading-relaxed">O'qituvchi esa matndan darsning asosiy metodik vositasi sifatida samarali foydalanadi.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.show', 'matn-turlari') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-violet-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
