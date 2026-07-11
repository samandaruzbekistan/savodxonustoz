@extends('layouts.app')
@section('title', 'Matnni tushunish nazariyasi')
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'matn-tushunish'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-violet-100 text-violet-700">4</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Nazariya • 4-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Matnni tushunish nazariyasi</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Matnni tushunish jarayonining bosqichlari, o'qishdan oldin – davomida – keyin ishlash strategiyalari va savol turlari yoritiladi.</p>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 mb-6">
            <div class="rounded-xl border border-violet-300 bg-violet-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-violet-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-violet-900">SAHIFANING MAQSADI</h3>
                </div>
                <p class="text-xs text-violet-800 leading-relaxed">Ushbu sahifaning maqsadi matnni tushunish jarayonining bosqichlarini izohlash, o'quvchilarda mazmunni anglash, tahlil qilish va xulosa chiqarish ko'nikmalarini rivojlantirishning metodik asoslarini ko'rsatishdan iborat.</p>
            </div>
            <div class="rounded-xl border border-indigo-300 bg-indigo-100 p-4">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="h-5 w-5 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                    <h3 class="text-sm font-bold text-indigo-900">MATNNI TUSHUNISH NIMA?</h3>
                </div>
                <p class="text-xs text-indigo-800 leading-relaxed">Matnni tushunish — bu o'quvchining yozilgan so'zlarni o'qishi bilangina yakunlanmaydigan, balki matndagi ma'no, bog'lanish, g'oya, obraz va axborotni anglashga qaratilgan murakkab aqliy jarayondir. O'quvchi matnni tushunishi uchun so'z ma'nosini bilishi, gaplar o'rtasidagi bog'lanishni anglay olishi, voqealar ketma-ketligini ko'ra olishi va muallif aytmoqchi bo'lgan fikrini sezishi kerak.</p>
            </div>
        </div>

        {{-- 5 bosqich --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">MATNNI TUSHUNISH BOSQICHLARI</div>
            <div class="flex gap-2 overflow-x-auto pb-2">
                @foreach ([
                    ['n'=>1,'title'=>"SO'Z DARAJASIDA TUSHUNISH",'desc'=>"O'quvchi matndagi so'zlarning ma'nosini anglaydi.",'color'=>'bg-indigo-100 border-indigo-300 text-indigo-900'],
                    ['n'=>2,'title'=>'GAP DARAJASIDA TUSHUNISH','desc'=>"Gapdagi fikrini tushunadi.",'color'=>'bg-blue-100 border-blue-300 text-blue-900'],
                    ['n'=>3,'title'=>'MATN DARAJASIDA TUSHUNISH','desc'=>"Voqealar, fikrlar va qismlar o'rtasidagi bog'lanishni anglaydi.",'color'=>'bg-violet-100 border-violet-300 text-violet-900'],
                    ['n'=>4,'title'=>'XULOSA DARAJASIDA TUSHUNISH','desc'=>"Matndagi bevosita aytilmagan ma'noni topadi.",'color'=>'bg-purple-100 border-purple-300 text-purple-900'],
                    ['n'=>5,'title'=>'BAHOLASH DARAJASIDA TUSHUNISH','desc'=>"Matnga munosabat bildiradi, fikrini asoslaydi.",'color'=>'bg-pink-100 border-pink-300 text-pink-900'],
                ] as $b)
                    <div class="min-w-[160px] flex-1 rounded-xl border p-3 {{ $b['color'] }}">
                        <div class="flex items-center gap-1.5 mb-2">
                            <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/60 text-xs font-bold">{{ $b['n'] }}</span>
                        </div>
                        <p class="text-xs font-bold mb-1.5">{{ $b['title'] }}</p>
                        <p class="text-xs opacity-80">{{ $b['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- O'qishdan oldin/davomida/keyin --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BOSHLANG'ICH SINFDA MATNNI TUSHUNISH FAOLIYATLARI</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="rounded-xl border border-emerald-200 bg-emerald-100 p-4">
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="h-5 w-5 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                        <h4 class="text-sm font-bold text-emerald-900">O'QISHDAN OLDIN</h4>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (['Matn mavzusi bilan tanishtirish','Sarlavha asosida taxmin qilish',"Yangi so'zlar ustida ishlash"] as $i)
                            <li class="flex items-start gap-1.5 text-xs text-emerald-800">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                {{ $i }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="rounded-xl border border-blue-200 bg-blue-100 p-4">
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"/></svg>
                        <h4 class="text-sm font-bold text-blue-900">O'QISH JARAYONIDA</h4>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (['Savollarga javob izlash','Muhim joylarni belgilash',"Tushunmagan so'zlarni aniqlash"] as $i)
                            <li class="flex items-start gap-1.5 text-xs text-blue-800">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                {{ $i }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="rounded-xl border border-violet-200 bg-violet-100 p-4">
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="h-5 w-5 text-violet-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>
                        <h4 class="text-sm font-bold text-violet-900">O'QISHDAN KEYIN</h4>
                    </div>
                    <ul class="space-y-1.5">
                        @foreach (['Matn mazmunini muhokama qilish','Xulosa chiqarish','Savollar tuzish',"O'quvchi o'z munosabatini bildirish"] as $i)
                            <li class="flex items-start gap-1.5 text-xs text-violet-800">
                                <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-violet-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                                {{ $i }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- Metodik + Amaliy misol --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-blue-300 bg-blue-100 p-5">
                <h3 class="text-sm font-bold text-blue-900 mb-3">BO'LAJAK O'QITUVCHI UCHUN METODIK AHAMIYATI</h3>
                <p class="text-xs text-blue-800 leading-relaxed mb-3">Bo'lajak o'qituvchi matnni tushunish jarayonini bosqichma-bosqich tashkil qila olishi kerak. U o'quvchidan faqat matnni qayta hikoya qilishni emas, balki matndan ma'no izlash, savol berish, dalil topish va xulosa chiqarishni talab qilishi lozim.</p>
                <p class="text-xs font-semibold text-blue-900 mb-2">Bu sahifa bo'lajak o'qituvchiga quyidagi ko'nikmalarni beradi:</p>
                <ul class="space-y-1">
                    @foreach (["matnni o'qishdan oldin tayyorgarlik ko'rish","murakkab so'zlarni tushuntirish","matn mazmuniga yo'naltiruvchi savollar tuzish","o'quvchini xulosa chiqarishga o'rgatish","matn asosida fikr bildirishni tashkil etish"] as $k)
                        <li class="flex items-start gap-1.5 text-xs text-blue-800">
                            <svg class="mt-0.5 h-3.5 w-3.5 shrink-0 text-blue-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            {{ $k }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <h3 class="text-sm font-bold text-slate-800 mb-2">AMALIY MISOLLAR — Matn sarlavhasi: "Kichik bog'bon"</h3>
                <div class="space-y-3">
                    <div class="rounded-lg bg-emerald-100 border border-emerald-300 p-3 text-xs">
                        <p class="font-semibold text-emerald-700 mb-1">O'qishdan oldingi savollar:</p>
                        <ul class="space-y-0.5 text-emerald-800">
                            <li>• Sizningcha, matn nima haqida bo'lishi mumkin?</li>
                            <li>• Bog'bon kim?</li>
                            <li>• Bolalar bog'bon bo'lishi mumkinmi?</li>
                        </ul>
                    </div>
                    <div class="rounded-lg bg-blue-100 border border-blue-300 p-3 text-xs">
                        <p class="font-semibold text-blue-700 mb-1">O'qish jarayonidagi savollar:</p>
                        <ul class="space-y-0.5 text-blue-800">
                            <li>• Qahramon nima ish qildi?</li>
                            <li>• U qanday qiyinchilikka duch keldi?</li>
                            <li>• Qaysi gap matnning asosiy fikrini bildiradi?</li>
                        </ul>
                    </div>
                    <div class="rounded-lg bg-violet-100 border border-violet-300 p-3 text-xs">
                        <p class="font-semibold text-violet-700 mb-1">O'qishdan keyingi savollar:</p>
                        <ul class="space-y-0.5 text-violet-800">
                            <li>• Matndan qanday xulosa chiqardingiz?</li>
                            <li>• Qahramonning qaysi harakati sizga yoqdi?</li>
                            <li>• Siz ham shunday ish qilganmisiz?</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SAVOL-TOPSHIRIQLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"Matnni tushunish qanday bosqichlardan iborat?"],
                    ['n'=>2,'q'=>"O'qishdan oldin beriladigan savollarga 3 ta misol yozing."],
                    ['n'=>3,'q'=>"O'qish jarayonida o'quvchini faol ushlab turish uchun qanday topshiriqlar berish mumkin?"],
                    ['n'=>4,'q'=>"Bitta kichik matn tanlang va unga o'qishdan oldin, o'qish davomida va o'qishdan keyingi savollar tuzing."],
                    ['n'=>5,'q'=>"\"Matnni tushunmadim\" degan o'quvchiga qanday yordam berasiz?"],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-violet-100 text-xs font-bold text-violet-700">{{ $t['n'] }}</span>
                        <p class="text-xs text-slate-700 leading-relaxed">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rounded-2xl bg-gradient-to-r from-violet-900 to-purple-700 p-5 text-white">
            <p class="text-xs font-semibold text-violet-300 uppercase tracking-wide mb-2">Kutiladigan natija</p>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-5 text-center">
                @foreach (['Matnni tushunish jarayonining bosqichlarini biladi',"O'qish darsini mazmunli tashkil etish yo'llarini o'rganadi","O'quvchini matndan fikr topishga o'rgatadi","Xulosa chiqarish ko'nikmasini rivojlantiradi","O'z javobini asoslashga yo'naltira oladi"] as $n)
                    <div class="rounded-lg bg-white/10 p-2 text-xs">{{ $n }}</div>
                @endforeach
            </div>
        </div>

        <div class="mt-4 flex justify-between">
            <a href="{{ route('nazariya.show', 'pisa') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi
            </a>
            <a href="{{ route('nazariya.show', 'ravon-oqish') }}" class="inline-flex items-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-violet-700 transition-colors">
                Keyingi: Ravon o'qish
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
