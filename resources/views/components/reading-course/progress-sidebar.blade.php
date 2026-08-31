@props([
    'achievements' => null,
    'totalErtaklar' => 0,
    'latestAttempt' => null,
    'quiz' => null,
    'tip' => null,
    'tipHref' => '#',
    'tipLabel' => 'Mashq qilish',
])

<aside {{ $attributes->merge(['class' => 'space-y-4 lg:sticky lg:top-24 lg:self-start']) }}>
    <div id="yutuqlarim" class="scroll-mt-24 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <h3 class="flex items-center gap-2 text-sm font-bold text-slate-800">
            <x-icon name="target" class="h-4 w-4 text-emerald-600" /> Mening yutuqlarim
        </h3>

        @php
            $read = $achievements['read'] ?? 0;
            $average = $achievements['average'] ?? 0;
            $best = $achievements['best'] ?? 0;
            $pct = $totalErtaklar ? (int) round(($read / $totalErtaklar) * 100) : 0;
        @endphp

        <div class="mt-4 flex flex-col items-center">
            <div class="relative grid h-28 w-28 place-items-center rounded-full"
                 style="background: conic-gradient(#10b981 {{ $pct * 3.6 }}deg, #e2e8f0 0deg);">
                <div class="grid h-[88px] w-[88px] place-items-center rounded-full bg-white text-xl font-extrabold text-slate-800">
                    {{ $pct }}%
                </div>
            </div>
            <p class="mt-3 text-sm font-bold text-slate-800">Jami progress</p>
            <p class="text-xs text-slate-400">{{ $read }}/{{ $totalErtaklar }} matn</p>
        </div>

        <dl class="mt-5 space-y-3 border-t border-slate-100 pt-4">
            <div class="flex items-center justify-between text-sm">
                <dt class="flex items-center gap-2 text-slate-500"><x-icon name="book" class="h-4 w-4 text-sky-500" /> O'qilgan matnlar</dt>
                <dd class="font-bold text-slate-800">{{ $read }}</dd>
            </div>
            <div class="flex items-center justify-between text-sm">
                <dt class="flex items-center gap-2 text-slate-500"><x-icon name="star" class="h-4 w-4 text-amber-500" /> O'rtacha ball</dt>
                <dd class="font-bold text-slate-800">{{ $average }}%</dd>
            </div>
            <div class="flex items-center justify-between text-sm">
                <dt class="flex items-center gap-2 text-slate-500"><x-icon name="trophy" class="h-4 w-4 text-violet-500" /> Eng yaxshi natija</dt>
                <dd class="font-bold text-slate-800">{{ $best }}%</dd>
            </div>
        </dl>

        @auth
            @unless ($achievements)
                <p class="mt-4 text-xs text-slate-400">Progressingizni ko'rish uchun kamida bitta ertak testini yeching.</p>
            @endunless
        @else
            <a href="{{ route('login') }}" class="mt-4 flex items-center justify-center gap-1.5 rounded-lg border border-slate-200 py-2 text-xs font-semibold text-blue-600 hover:bg-slate-50">
                Tizimga kiring va progressni saqlang <x-icon name="arrow-right" class="h-3.5 w-3.5" />
            </a>
        @endauth
    </div>

    @if ($quiz || $latestAttempt)
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <h3 class="flex items-center gap-2 text-sm font-bold text-slate-800">
                <x-icon name="chart" class="h-4 w-4 text-violet-600" /> So'nggi natijam
            </h3>

            @php
                $attemptPct = $latestAttempt?->percentage ?? 0;
                $correct = $latestAttempt ? $latestAttempt->answers->where('is_correct', true)->count() : 0;
                $incorrect = $latestAttempt ? $latestAttempt->answers->count() - $correct : 0;
                $scoreLabel = $latestAttempt ? (int) $latestAttempt->score.'/'.(int) $latestAttempt->max_score : '—';
            @endphp
            <div class="mt-4 flex items-center gap-4">
                <div class="relative grid h-20 w-20 shrink-0 place-items-center rounded-full"
                     style="background: conic-gradient(#10b981 {{ $attemptPct * 3.6 }}deg, #f43f5e {{ $attemptPct * 3.6 }}deg 360deg);">
                    <div class="grid h-14 w-14 place-items-center rounded-full bg-white text-xs font-extrabold text-slate-800">
                        {{ $scoreLabel }}
                    </div>
                </div>
                <div class="space-y-1 text-xs">
                    <p class="flex items-center gap-1.5 font-semibold text-emerald-700"><span class="h-2 w-2 rounded-full bg-emerald-500"></span> To'g'ri javoblar {{ $correct }}</p>
                    <p class="flex items-center gap-1.5 font-semibold text-rose-600"><span class="h-2 w-2 rounded-full bg-rose-500"></span> Noto'g'ri javoblar {{ $incorrect }}</p>
                    <p class="font-semibold text-slate-500">Foiz {{ $attemptPct }}%</p>
                </div>
            </div>

            @if ($latestAttempt)
                <a href="{{ route('tests.result', $latestAttempt->id) }}"
                   class="mt-4 block rounded-lg bg-blue-600 py-2 text-center text-sm font-semibold text-white transition hover:bg-blue-700">
                    Batafsil natija
                </a>
            @elseif ($quiz)
                <p class="mt-3 text-xs text-slate-400">Bu ertak bo'yicha hali test topshirmagansiz.</p>
                <a href="{{ route('tests.show', $quiz->slug) }}"
                   class="mt-2 block rounded-lg bg-blue-600 py-2 text-center text-sm font-semibold text-white transition hover:bg-blue-700">
                    Testni boshlash
                </a>
            @endif
        </div>
    @else
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <h3 class="flex items-center gap-2 text-sm font-bold text-slate-800">
                <x-icon name="clipboard" class="h-4 w-4 text-violet-600" /> Bilimingizni sinang
            </h3>
            <p class="mt-2 text-xs leading-relaxed text-slate-500">O'qigan ertaklaringiz bo'yicha testlarni yeching va natijangizni kuzating.</p>
            <a href="{{ route('tests.index') }}"
               class="mt-4 block rounded-lg bg-blue-600 py-2 text-center text-sm font-semibold text-white transition hover:bg-blue-700">
                Barcha testlar
            </a>
        </div>
    @endif

    @if ($tip)
        <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5">
            <h3 class="flex items-center gap-2 text-sm font-bold text-amber-900">
                <x-icon name="bulb" class="h-4 w-4" /> Tavsiya
            </h3>
            <p class="mt-2 text-sm leading-relaxed text-amber-800">{{ $tip }}</p>
            <a href="{{ $tipHref }}" class="mt-4 block rounded-lg bg-blue-600 py-2 text-center text-sm font-semibold text-white transition hover:bg-blue-700">
                {{ $tipLabel }}
            </a>
        </div>
    @endif
</aside>
