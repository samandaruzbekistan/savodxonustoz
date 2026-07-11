@extends('layouts.app')
@section('title', "Decodable Books'dan foydalanish — Sinf strategiyalari")
@section('content')
<div class="flex gap-6 -mt-2">
    @include('public.sinf-strategiyalari._sidebar', ['activeSlug' => 'decodable-books'])
    <div class="min-w-0 flex-1">

        <div class="mb-6">
            <div class="flex items-center gap-3 mb-2">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold bg-orange-100 text-orange-700">4</span>
                <span class="text-xs text-slate-500 uppercase tracking-wide font-medium">Sinf strategiyalari • 4-bo'lim</span>
            </div>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Decodable Books'dan foydalanish</h1>
            <p class="mt-2 text-slate-600 leading-relaxed max-w-3xl">Decodable Books — o'quvchi avval o'rgangan harf-tovush mosliklari, bo'g'inlar va sodda so'zlar asosida o'qiy oladigan maxsus kitobchalardir. Ayniqsa 1–2-sinflarda o'qishni endi o'rganayotgan bolalar uchun muhim.</p>
        </div>

        {{-- Maqsad + Nazariy izoh --}}
        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="rounded-xl border border-orange-300 bg-orange-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-orange-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-orange-900">MAQSAD</h3>
                </div>
                <p class="text-xs text-orange-800 leading-relaxed">O'quvchilarda dastlabki o'qish malakasini mustahkamlash, bo'g'inlab o'qishdan ravon o'qishga o'tishni ta'minlash va o'qishga nisbatan ishonch hamda qiziqishni oshirish.</p>
            </div>
            <div class="rounded-xl border border-amber-300 bg-amber-100 p-5">
                <div class="flex items-center gap-2 mb-3">
                    <span class="grid h-8 w-8 place-items-center rounded-lg bg-amber-600">
                        <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    </span>
                    <h3 class="text-sm font-bold text-amber-900">NAZARIY IZOH</h3>
                </div>
                <p class="text-xs text-amber-800 leading-relaxed">Decodable books o'quvchiga "men o'qiy olaman" degan ishonch beradi. Chunki undagi so'zlar bola hali o'rganmagan murakkab tovush va harf birikmalariga asoslanmaydi. Bu esa o'qishdagi qiyinchilikni kamaytiradi.</p>
            </div>
        </div>

        {{-- Kitob tanlash mezonlari --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">DECODABLE BOOKS TANLASHDA E'TIBOR BERISH KERAK</div>
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['✅',"O'quvchi o'rgangan harflarga moslik","Matnda faqat tanish harflar bo'lishi"],
                    ['🔁','Takrorlanuvchi so'zlar',"Bir xil so'zlar ko'p uchraydi"],
                    ['📝','Qisqa va sodda gaplar',"Har bir gap tushunarli bo'lishi"],
                    ['🖼️','Rasmning yordami',"Rasm matnni tushunishga yordam berishi"],
                    ['⭐','Muvaffaqiyat hissi',"Bola o'qiy olgani uchun quvonishi"],
                    ['❓','Sodda savollar',"Har bir kitobdan keyin 2–3 ta savol"],
                ] as [$icon, $title, $desc])
                    <div class="rounded-xl border border-orange-200 bg-orange-50 p-4">
                        <div class="flex items-start gap-3">
                            <span class="text-2xl shrink-0">{{ $icon }}</span>
                            <div>
                                <p class="text-xs font-bold text-orange-900 mb-0.5">{{ $title }}</p>
                                <p class="text-xs text-orange-700">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Dars algoritmi --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">DARS ALGORITMI</div>
            <div class="space-y-3">
                @foreach ([
                    [1,'Harf-tovushlarni eslatish',"O'qituvchi yangi yoki avval o'rganilgan harf-tovushlarni eslatadi",'bg-orange-600'],
                    [2,'Asosiy so'zlarni ko'rsatish',"Decodable matndagi asosiy so'zlar ko'rsatiladi",'bg-amber-600'],
                    [3,'Bo'g'inlab o'qish',"O'quvchilar so'zlarni bo'g'inlab o'qiydi",'bg-yellow-600'],
                    [4,'Namunali o'qish',"O'qituvchi kitobchani namunali o'qib beradi",'bg-orange-500'],
                    [5,'Juftlikda o'qish',"O'quvchilar matnni juftlikda o'qiydi",'bg-amber-500'],
                    [6,'Mustaqil o'qish',"Har bir o'quvchi 1–2 gapni mustaqil o'qiydi",'bg-orange-600'],
                    [7,'Savol-javob',"Matn bo'yicha sodda savollar beriladi",'bg-amber-600'],
                    [8,'O'z-o'zini baholash',"O'quvchilar o'zini baholaydi: 'Men bugun o'qiy oldim.'",'bg-orange-700'],
                ] as [$n, $title, $desc, $ic])
                    <div class="flex items-start gap-4 rounded-xl border border-orange-100 bg-orange-50 p-4">
                        <span class="grid h-8 w-8 shrink-0 place-items-center rounded-full {{ $ic }} text-white text-sm font-bold">{{ $n }}</span>
                        <div>
                            <p class="text-xs font-bold text-orange-900">{{ $title }}</p>
                            <p class="text-xs text-orange-700 mt-0.5">{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Namuna matn --}}
        <div class="mb-6">
            <div class="mb-4 rounded-lg bg-slate-800 px-4 py-2.5 text-center text-sm font-bold text-white uppercase tracking-wide">BOSHLANG'ICH SINFGA MOS NAMUNA</div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="rounded-xl border border-amber-200 bg-amber-50 p-5">
                    <p class="text-xs font-bold text-amber-900 mb-3">Decodable matn namunasi:</p>
                    <div class="rounded-lg bg-white border border-amber-200 p-4 mb-3 space-y-1">
                        @foreach (["Ali olma oldi.", "Ona olma yuvdi.", "Ali olmani yedi.", "Ona kuldi."] as $line)
                            <p class="text-sm text-slate-700 font-medium">{{ $line }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="rounded-xl border border-orange-200 bg-orange-50 p-5">
                    <p class="text-xs font-bold text-orange-900 mb-3">Savollar:</p>
                    <ol class="space-y-2 text-xs text-orange-800">
                        <li class="flex gap-2"><span class="font-bold shrink-0">1.</span>Kim olma oldi?</li>
                        <li class="flex gap-2"><span class="font-bold shrink-0">2.</span>Ona nima qildi?</li>
                        <li class="flex gap-2"><span class="font-bold shrink-0">3.</span>Ali nimani yedi?</li>
                        <li class="flex gap-2"><span class="font-bold shrink-0">4.</span>Matnda nechta odam bor?</li>
                    </ol>
                </div>
            </div>
        </div>

        {{-- Kutiladigan natija --}}
        <div class="rounded-2xl border border-orange-200 bg-gradient-to-r from-orange-50 to-amber-50 px-6 py-5">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex-1">
                    <p class="text-sm font-bold text-orange-900 mb-2">Kutiladigan natija</p>
                    <p class="text-xs text-orange-800 leading-relaxed">O'quvchi o'rgangan tovush-harf bilimlariga tayangan holda mustaqil o'qiydi, bo'g'inlab o'qishdan ravon o'qishga o'tadi, o'qishga nisbatan ishonchi va qiziqishi ortadi.</p>
                </div>
                <a href="{{ route('sinf-strategiyalari.show', 'sinf-kutubxonalari') }}" class="shrink-0 inline-flex items-center gap-2 rounded-xl bg-orange-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-orange-700 transition-colors">
                    Keyingi bo'lim
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
