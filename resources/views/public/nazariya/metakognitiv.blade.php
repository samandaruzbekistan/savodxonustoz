@extends('layouts.app')
@section('title', 'Metakognitiv strategiyalar')
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.nazariya._sidebar', ['activeSlug' => 'metakognitiv'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-pink-100 text-pink-700">7</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Nazariya • 7-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Metakognitiv strategiyalar</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Metakognitsiya tushunchasi va o'qish jarayonida o'z o'qishini anglash, nazorat qilish hamda samarali strategiyalardan foydalanish ko'nikmalari yoritiladi.</p>
        </div>

        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-pink-300 bg-pink-100 p-5">
                <div class="flex items-center gap-2 mb-2">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-pink-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-pink-900">METAKOGNITSIYA NIMA?</h3>
                </div>
                <p class="text-xs text-pink-800 leading-relaxed">Metakognitsiya — bu <strong>o'z fikrlash jarayonini anglash va boshqarish</strong> qobiliyatidir. O'qish kontekstida bu o'quvchining o'z o'qishini nazorat qilishi, tushunmaganini sezishi va kerakli strategiyani tanlashi demakdir.</p>
            </div>
            <div class="rounded-xl border border-violet-300 bg-violet-100 p-5">
                <div class="flex items-center gap-2 mb-2">
                    <svg class="h-5 w-5 text-violet-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    <h3 class="text-sm font-bold text-violet-900">O'QISHDA AHAMIYATI</h3>
                </div>
                <p class="text-xs text-violet-800 leading-relaxed">Metakognitiv strategiyalarni qo'llaydigan o'quvchi matnni faqat o'qib o'tmaydi — u <strong>tushundim yoki tushunmadim</strong> deb o'ziga savol beradi, qayta o'qiydi, asosiy g'oyani ajratadi va o'z o'qishini baholaydi.</p>
            </div>
        </div>

        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">ASOSIY STRATEGIYALAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['title'=>"O'qishdan oldin: KWL jadvali",'desc'=>"K — nima bilaman, W — nima bilmoqchiman, L — nima bildim. Bu jadval o'quvchini matn bilan tanishishdan oldin yo'naltiradi.",'color'=>'border-indigo-300 bg-indigo-100 text-indigo-900','bc'=>'bg-indigo-600'],
                    ['title'=>"O'qish jarayonida: fikr belgilash",'desc'=>"O'quvchi matnni o'qirkan, nima yangi, nima qiziq, nimani tushunmadim deb belgi qo'yadi (✓, ?, !).",'color'=>'border-emerald-300 bg-emerald-100 text-emerald-900','bc'=>'bg-emerald-600'],
                    ['title'=>"O'qishdan keyin: qayta hikoya",'desc'=>"O'quvchi o'qiganini o'z so'zlari bilan aytib beradi. Bu matnni tushunganini va eslab qolganini tekshiradi.",'color'=>'border-orange-300 bg-orange-100 text-orange-900','bc'=>'bg-orange-500'],
                    ['title'=>"Savollar tuzish strategiyasi",'desc'=>"O'quvchi matn bo'yicha o'zi savol tuzadi. Bu matnni chuqur o'ylagan holda o'qishga majbur qiladi.",'color'=>'border-cyan-300 bg-cyan-100 text-cyan-900','bc'=>'bg-cyan-600'],
                    ['title'=>"Xulosa chiqarish",'desc'=>"O'quvchi matnning asosiy mazmunini 2–3 gapda ifodalaydi. Bu tanlov va umumlashtirish ko'nikmalarini rivojlantiradi.",'color'=>'border-violet-300 bg-violet-100 text-violet-900','bc'=>'bg-violet-600'],
                    ['title'=>"Monitoring — kuzatib borish",'desc'=>"O'quvchi o'qish jarayonida o'ziga: «Buni tushundimmi?» deb savol beradi va kerak bo'lsa qayta o'qiydi.",'color'=>'border-rose-300 bg-rose-100 text-rose-900','bc'=>'bg-rose-600'],
                ] as $s)
                    <div class="rounded-xl border p-4 {{ $s['color'] }}">
                        <h4 class="text-xs font-bold mb-1.5">{{ $s['title'] }}</h4>
                        <p class="text-xs leading-relaxed">{{ $s['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Savol-topshiriqlar --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">SAVOL-TOPSHIRIQLAR</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['n'=>1,'q'=>"Metakognitsiya tushunchasini o'z so'zlaringiz bilan izohlang."],
                    ['n'=>2,'q'=>"KWL jadvalini 3-sinf o'quvchisi uchun qanday tushuntirasiz?"],
                    ['n'=>3,'q'=>"O'quvchi matnni o'qidi lekin tushunmadi. Qanday metakognitiv strategiyani tavsiya qilasiz?"],
                    ['n'=>4,'q'=>"Fikr belgilash usulini darsga qanday kiritasiz?"],
                    ['n'=>5,'q'=>"Metakognitiv strategiyalar tanqidiy o'qish bilan qanday bog'liq?"],
                ] as $t)
                    <div class="flex gap-3 rounded-xl border border-slate-200 bg-white p-3.5 shadow-sm">
                        <span class="inline-flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-slate-100 text-xs font-bold text-slate-700">{{ $t['n'] }}</span>
                        <p class="text-xs text-slate-700 leading-relaxed">{{ $t['q'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="rounded-2xl bg-gradient-to-r from-slate-800 to-slate-600 p-5 text-white">
            <p class="text-xs font-semibold text-slate-300 uppercase tracking-wide mb-2">Kutiladigan natija</p>
            <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 text-center text-xs">
                @foreach (["Foydalanuvchi metakognitsiya tushunchasini aniq izohlaydi","O'qishdan oldin, jarayonida va keyin qo'llaniladigan strategiyalarni farqlaydi","O'quvchilar uchun metakognitiv savol va topshiriqlar tuza oladi","KWL jadvali va fikr belgilash usulini darsga tatbiq eta oladi","O'quvchining o'z o'qishini nazorat qilishiga yordam bera oladi","Metakognitiv yondashuv orqali matnni tushunishni chuqurlashtiradi"] as $n)
                    <div class="rounded-lg bg-white/10 p-2">{{ $n }}</div>
                @endforeach
            </div>
        </div>

        <div class="mt-4 flex justify-start">
            <a href="{{ route('nazariya.show', 'tanqidiy') }}" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                Oldingi: Tanqidiy o'qish
            </a>
        </div>
    </div>
</div>
@endsection
