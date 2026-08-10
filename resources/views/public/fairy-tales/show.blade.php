@extends('layouts.app')

@section('title', $tale->title)

@section('content')
    <x-breadcrumbs :items="[
        ['label' => '101 o\'qish kursi', 'url' => route('reading-course.index')],
        ['label' => 'Ertaklar va audiolar', 'url' => route('fairy-tales.index')],
        ['label' => $tale->title, 'url' => null],
    ]" />

    <div class="mx-auto max-w-4xl" x-data="fairyTalePlayer()">
        {{-- Matn oynasi header: prev/next + position --}}
        <div class="mb-5 flex items-center justify-between gap-3 rounded-2xl border border-slate-200 bg-white px-4 py-3">
            @if ($previous)
                <a href="{{ route('fairy-tales.show', $previous->slug) }}"
                   class="inline-flex items-center gap-1.5 rounded-lg px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50">
                    <x-icon name="arrow-right" class="h-4 w-4 rotate-180" /> Oldingi
                </a>
            @else
                <span class="inline-flex items-center gap-1.5 rounded-lg px-3 py-2 text-sm font-medium text-slate-300">
                    <x-icon name="arrow-right" class="h-4 w-4 rotate-180" /> Oldingi
                </span>
            @endif

            @if ($position && $total)
                <span class="text-xs font-semibold uppercase tracking-wide text-slate-400">Ertak {{ $position }} / {{ $total }}</span>
            @endif

            @if ($next)
                <a href="{{ route('fairy-tales.show', $next->slug) }}"
                   class="inline-flex items-center gap-1.5 rounded-lg px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50">
                    Keyingi <x-icon name="arrow-right" class="h-4 w-4" />
                </a>
            @else
                <span class="inline-flex items-center gap-1.5 rounded-lg px-3 py-2 text-sm font-medium text-slate-300">
                    Keyingi <x-icon name="arrow-right" class="h-4 w-4" />
                </span>
            @endif
        </div>

        <div class="rounded-3xl border border-slate-200 bg-white p-6 sm:p-8">
            <div class="mb-4 flex flex-wrap items-center gap-2">
                @if ($tale->category)
                    <span class="inline-block rounded-md bg-emerald-100 px-2.5 py-1 text-xs font-semibold uppercase tracking-wide text-emerald-700">
                        {{ $tale->category->name }}
                    </span>
                @endif
            </div>

            <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-900">{{ $tale->title }}</h1>

            <div class="mt-6 grid gap-6 md:grid-cols-[1fr_240px]">
                <div class="order-2 md:order-1">
                    {{-- Audio player --}}
                    @if (! empty($tale->meta['audio_path'] ?? null))
                        <div class="rounded-2xl border border-sky-200 bg-sky-50 p-4">
                            <audio x-ref="audio" preload="metadata" class="hidden"
                                   src="{{ asset('storage/'.$tale->meta['audio_path']) }}"
                                   @loadedmetadata="duration = $refs.audio.duration"
                                   @timeupdate="currentTime = $refs.audio.currentTime"
                                   @ended="playing = false"></audio>

                            <div class="flex items-center gap-3">
                                <button type="button" @click="toggle()"
                                        class="grid h-11 w-11 shrink-0 place-items-center rounded-full bg-sky-600 text-white shadow-sm transition hover:bg-sky-700">
                                    <svg x-show="!playing" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                                    <svg x-show="playing" x-cloak class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M6 5h4v14H6zm8 0h4v14h-4z"/></svg>
                                </button>

                                <div class="min-w-0 flex-1">
                                    <input type="range" min="0" :max="duration || 0" x-model.number="currentTime"
                                           @input="$refs.audio.currentTime = currentTime"
                                           class="w-full accent-sky-600">
                                    <div class="mt-1 flex justify-between text-xs font-medium text-slate-500">
                                        <span x-text="formatTime(currentTime)"></span>
                                        <span x-text="formatTime(duration)"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 flex flex-wrap items-center gap-2">
                                <button type="button" @click="replay()"
                                        class="inline-flex items-center gap-1.5 rounded-lg border border-sky-200 bg-white px-3 py-1.5 text-xs font-semibold text-sky-700 hover:bg-sky-100">
                                    ↺ Qayta tinglash
                                </button>
                                <button type="button" @click="setRate(0.75)"
                                        :class="rate === 0.75 ? 'bg-sky-600 text-white border-sky-600' : 'bg-white text-sky-700 border-sky-200 hover:bg-sky-100'"
                                        class="rounded-lg border px-3 py-1.5 text-xs font-semibold">
                                    Sekin (0.75x)
                                </button>
                                <div class="ml-auto flex items-center gap-1 rounded-lg border border-sky-200 bg-white p-1">
                                    <template x-for="speed in [0.75, 1, 1.25, 1.5]" :key="speed">
                                        <button type="button" @click="setRate(speed)"
                                                :class="rate === speed ? 'bg-sky-600 text-white' : 'text-slate-500 hover:bg-sky-50'"
                                                class="rounded-md px-2.5 py-1 text-xs font-bold transition" x-text="speed + 'x'"></button>
                                    </template>
                                </div>
                            </div>
                        </div>
                    @endif

                    <article class="prose prose-slate mt-6 max-w-none prose-p:leading-relaxed">
                        {!! $tale->body !!}
                    </article>

                    @if ($tasks)
                        @php
                            $wordPalette = [
                                'bg-emerald-50 text-emerald-700 ring-emerald-200',
                                'bg-sky-50 text-sky-700 ring-sky-200',
                                'bg-amber-50 text-amber-700 ring-amber-200',
                                'bg-rose-50 text-rose-700 ring-rose-200',
                                'bg-violet-50 text-violet-700 ring-violet-200',
                            ];

                            $tabs = [];
                            if (! empty($tasks['comprehension'])) {
                                $tabs['comprehension'] = $tasks['tier'] === 'a' ? "Savollarga javob bering" : "Muhokama savollari";
                            }
                            if (! empty($tasks['mcq'])) {
                                $tabs['mcq'] = 'Test savollari';
                            }
                            if (! empty($tasks['fill_blank']['sentences'] ?? [])) {
                                $tabs['fill_blank'] = "Bo'sh joyni to'ldiring";
                            }
                            if (! empty($tasks['true_false'])) {
                                $tabs['true_false'] = "Ha yoki Yo'q";
                            }
                            if (! empty($tasks['oral']) || ! empty($tasks['creative'])) {
                                $tabs['oral'] = "Og'zaki va ijodiy";
                            }
                        @endphp

                        @if (! empty($tasks['new_words']))
                            <div class="mt-8 rounded-2xl border border-amber-200 bg-amber-50/60 p-5">
                                <h3 class="mb-3 flex items-center gap-2 font-bold text-amber-900">
                                    <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-amber-100 text-amber-600">
                                        <x-icon name="sparkle" class="h-4 w-4" />
                                    </span>
                                    Yangi so'zlar
                                </h3>
                                <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-3 md:grid-cols-4">
                                    @foreach ($tasks['new_words'] as $i => $word)
                                        <div class="flex items-center justify-center rounded-xl px-3 py-2.5 text-center text-sm font-bold ring-1 ring-inset {{ $wordPalette[$i % count($wordPalette)] }}">
                                            {{ $word }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @if (count($tabs))
                            <div class="mt-6 overflow-hidden rounded-2xl border border-violet-200 bg-white" x-data="{ tab: '{{ array_key_first($tabs) }}' }">
                                <div class="flex flex-wrap gap-1.5 border-b border-slate-100 bg-slate-50 p-2">
                                    @foreach ($tabs as $key => $label)
                                        <button type="button" @click="tab = '{{ $key }}'"
                                                :class="tab === '{{ $key }}' ? 'bg-violet-600 text-white shadow-sm' : 'text-slate-600 hover:bg-white'"
                                                class="rounded-lg px-3 py-1.5 text-xs font-semibold transition">
                                            {{ $loop->iteration }}. {{ $label }}
                                        </button>
                                    @endforeach
                                </div>

                                <div class="p-5">
                                    {{-- Comprehension --}}
                                    @if (! empty($tasks['comprehension']))
                                        <div x-show="tab === 'comprehension'" x-cloak class="space-y-2.5">
                                            @foreach ($tasks['comprehension'] as $qa)
                                                @if ($qa['a'])
                                                    <div class="rounded-xl border border-slate-200 p-3" x-data="{ open: false }">
                                                        <button type="button" @click="open = !open" class="flex w-full items-center justify-between gap-3 text-left">
                                                            <span class="text-sm font-medium text-slate-800">{{ $loop->iteration }}. {{ $qa['q'] }}</span>
                                                            <x-icon name="chevron-down" class="h-4 w-4 shrink-0 text-slate-400 transition" x-bind:class="open ? 'rotate-180' : ''" />
                                                        </button>
                                                        <p x-show="open" x-cloak class="mt-2 flex items-start gap-1.5 text-sm font-semibold text-emerald-700">
                                                            <x-icon name="check" class="mt-0.5 h-4 w-4 shrink-0" /> {{ $qa['a'] }}
                                                        </p>
                                                    </div>
                                                @else
                                                    <div class="rounded-xl border border-slate-200 p-3 text-sm font-medium text-slate-800">
                                                        {{ $loop->iteration }}. {{ $qa['q'] }}
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif

                                    {{-- MCQ --}}
                                    @if (! empty($tasks['mcq']))
                                        <div x-show="tab === 'mcq'" x-cloak class="space-y-4">
                                            @foreach ($tasks['mcq'] as $q)
                                                <div @if ($q['correct']) x-data="{ picked: null, correct: '{{ $q['correct'] }}' }" @endif>
                                                    <p class="mb-2 text-sm font-semibold text-slate-800">{{ $loop->iteration }}. {{ $q['q'] }}</p>
                                                    <div class="grid gap-2 sm:grid-cols-2">
                                                        @if ($q['correct'])
                                                            @foreach ($q['options'] as $opt)
                                                                <button type="button" @click="picked = '{{ $opt['letter'] }}'"
                                                                        x-bind:class="(picked && '{{ $opt['letter'] }}' === correct) ? 'border-emerald-400 bg-emerald-50 text-emerald-800' : (picked === '{{ $opt['letter'] }}') ? 'border-rose-300 bg-rose-50 text-rose-700' : 'border-slate-200 hover:border-violet-300'"
                                                                        class="flex items-center gap-2 rounded-xl border-2 px-3 py-2 text-left text-sm font-medium transition">
                                                                    <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-slate-100 text-xs font-bold">{{ $opt['letter'] }}</span>
                                                                    {{ $opt['text'] }}
                                                                </button>
                                                            @endforeach
                                                        @else
                                                            @foreach ($q['options'] as $opt)
                                                                <div class="flex items-center gap-2 rounded-xl border-2 border-slate-200 px-3 py-2 text-sm text-slate-600">
                                                                    <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-slate-100 text-xs font-bold">{{ $opt['letter'] }}</span>
                                                                    {{ $opt['text'] }}
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    {{-- Fill blank --}}
                                    @if (! empty($tasks['fill_blank']['sentences'] ?? []))
                                        <div x-show="tab === 'fill_blank'" x-cloak x-data="{ show: false }">
                                            <div class="mb-3 flex flex-wrap gap-2">
                                                @foreach ($tasks['fill_blank']['words'] as $w)
                                                    <span class="rounded-full bg-violet-100 px-3 py-1 text-xs font-semibold text-violet-700">{{ $w }}</span>
                                                @endforeach
                                            </div>
                                            <ol class="list-inside list-decimal space-y-2 text-sm text-slate-700">
                                                @foreach ($tasks['fill_blank']['sentences'] as $i => $sentence)
                                                    <li>
                                                        {{ str_replace('__________', '_____', $sentence) }}
                                                        <template x-if="show"><span class="ml-1 font-semibold text-emerald-700">→ {{ $tasks['fill_blank']['answers'][$i] ?? '' }}</span></template>
                                                    </li>
                                                @endforeach
                                            </ol>
                                            <button type="button" @click="show = !show" class="mt-3 text-xs font-semibold text-violet-600 hover:underline" x-text="show ? 'Javoblarni yashirish' : 'Javoblarni ko‘rsatish'"></button>
                                        </div>
                                    @endif

                                    {{-- True / false --}}
                                    @if (! empty($tasks['true_false']))
                                        <div x-show="tab === 'true_false'" x-cloak x-data="{ show: false }">
                                            <ul class="space-y-2">
                                                @foreach ($tasks['true_false'] as $tf)
                                                    <li class="flex items-center justify-between gap-3 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-700">
                                                        <span>{{ $loop->iteration }}. {{ $tf['statement'] }}</span>
                                                        <span x-show="show" x-cloak
                                                              @class([
                                                                  'shrink-0 rounded-full px-2.5 py-1 text-xs font-bold',
                                                                  'bg-emerald-100 text-emerald-700' => $tf['answer'],
                                                                  'bg-rose-100 text-rose-700' => ! $tf['answer'],
                                                              ])>
                                                            {{ $tf['answer'] ? 'Ha' : "Yo'q" }}
                                                        </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <button type="button" @click="show = !show" class="mt-3 text-xs font-semibold text-violet-600 hover:underline" x-text="show ? 'Javoblarni yashirish' : 'Javoblarni ko‘rsatish'"></button>
                                        </div>
                                    @endif

                                    {{-- Oral & creative --}}
                                    @if (! empty($tasks['oral']) || ! empty($tasks['creative']))
                                        <div x-show="tab === 'oral'" x-cloak class="space-y-5">
                                            @if (! empty($tasks['oral']))
                                                <div>
                                                    <h4 class="mb-2 text-xs font-bold uppercase tracking-wide text-slate-400">Og'zaki topshiriq</h4>
                                                    <ul class="space-y-1.5">
                                                        @foreach ($tasks['oral'] as $prompt)
                                                            <li class="flex items-start gap-1.5 text-sm text-slate-700">
                                                                <x-icon name="dot" class="mt-1 h-2.5 w-2.5 shrink-0 text-slate-300" />
                                                                {{ $prompt }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            @if (! empty($tasks['creative']))
                                                <div x-data="{ show: false }">
                                                    <h4 class="mb-2 text-xs font-bold uppercase tracking-wide text-slate-400">Ijodiy topshiriq</h4>
                                                    <p class="text-sm text-slate-700">{{ $tasks['creative']['prompt'] }}</p>
                                                    <p x-show="show" x-cloak class="mt-2 rounded-lg bg-emerald-50 px-3 py-2 text-sm text-emerald-700">
                                                        <span class="font-semibold">Namuna:</span> {{ $tasks['creative']['sample'] }}
                                                    </p>
                                                    <button type="button" @click="show = !show" class="mt-2 text-xs font-semibold text-violet-600 hover:underline" x-text="show ? 'Namunani yashirish' : 'Namunani ko‘rsatish'"></button>
                                                </div>
                                            @endif

                                            @if (! empty($tasks['drawing_task']))
                                                <div class="flex items-center gap-3 rounded-xl bg-sky-50 px-4 py-3 text-sm font-medium text-sky-800">
                                                    <x-icon name="star" class="h-5 w-5 shrink-0 text-sky-500" />
                                                    {{ $tasks['drawing_task'] }} — qahramonlarni rasm qilib chizing yoki bo'yang!
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endif

                    @if ($quiz)
                        <div class="mt-8 flex items-center gap-4 rounded-2xl border border-violet-200 bg-violet-50 p-4">
                            <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-violet-100 text-violet-600">
                                <x-icon name="clipboard" class="h-5 w-5" />
                            </span>
                            <div class="min-w-0 flex-1">
                                <h3 class="font-bold text-slate-800">Bilimingizni sinang</h3>
                                <p class="text-sm text-slate-500">Ertakni qanchalik tushunganingizni {{ $quiz->questions_count }} ta savol bilan tekshiring.</p>
                            </div>
                            <a href="{{ route('tests.show', $quiz->slug) }}"
                               class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-violet-600 px-4 py-2.5 text-sm font-bold text-white transition hover:bg-violet-700">
                                Testni boshlash <x-icon name="arrow-right" class="h-4 w-4" />
                            </a>
                        </div>
                    @endif
                </div>

                @if ($tale->cover_image)
                    <div class="order-1 md:order-2">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($tale->cover_image) }}"
                             alt="{{ $tale->title }}" loading="lazy"
                             class="aspect-[4/5] w-full rounded-2xl object-cover shadow-sm md:sticky md:top-24">
                    </div>
                @endif
            </div>
        </div>

        @if ($related->isNotEmpty())
            <div class="mt-10 border-t border-slate-200 pt-6">
                <h2 class="mb-4 text-lg font-bold text-slate-800">Shu sinf uchun boshqa ertaklar</h2>
                <div class="grid gap-3 sm:grid-cols-2">
                    @foreach ($related as $item)
                        <a href="{{ route('fairy-tales.show', $item->slug) }}"
                           class="flex items-center gap-3 rounded-xl border border-slate-200 bg-white p-3 hover:border-emerald-300 hover:shadow-sm transition">
                            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-lg bg-emerald-100 text-emerald-700">
                                <x-icon name="book" class="h-4 w-4" />
                            </span>
                            <span class="text-sm font-medium text-slate-700">{{ $item->title }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="mt-8">
            <a href="{{ route('fairy-tales.index') }}" class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-4 py-2.5 text-sm font-medium text-slate-700 hover:border-blue-300 hover:text-blue-700 transition-colors">
                <x-icon name="doc" class="h-4 w-4 rotate-180" /> Barcha ertaklarga qaytish
            </a>
        </div>
    </div>

    @push('scripts')
        <script>
            function fairyTalePlayer() {
                return {
                    playing: false,
                    duration: 0,
                    currentTime: 0,
                    rate: 1,
                    toggle() {
                        if (this.playing) {
                            this.$refs.audio.pause();
                        } else {
                            this.$refs.audio.play();
                        }
                        this.playing = !this.playing;
                    },
                    replay() {
                        this.$refs.audio.currentTime = 0;
                        this.currentTime = 0;
                        this.$refs.audio.play();
                        this.playing = true;
                    },
                    setRate(speed) {
                        this.rate = speed;
                        this.$refs.audio.playbackRate = speed;
                    },
                    formatTime(seconds) {
                        if (!seconds || isNaN(seconds)) {
                            return '0:00';
                        }
                        const m = Math.floor(seconds / 60);
                        const s = Math.floor(seconds % 60).toString().padStart(2, '0');
                        return `${m}:${s}`;
                    },
                };
            }
        </script>
    @endpush
@endsection
