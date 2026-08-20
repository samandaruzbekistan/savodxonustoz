@extends('layouts.app')

@section('title', $tale->title)

@section('content')
    <x-breadcrumbs :items="[
        ['label' => '101 o\'qish kursi', 'url' => route('reading-course.index')],
        ['label' => 'Ertaklar va audiolar', 'url' => route('fairy-tales.index')],
        ['label' => $tale->title, 'url' => null],
    ]" />

    @php
        $habitTips = [
            "Har kuni kamida bitta ertak bilan ishlang va o'z natijangizni yaxshilang.",
            "Yangi so'zlarni ovoz chiqarib takrorlang — shunda ular tezroq esda qoladi.",
            "Matnni tinglagandan so'ng, uni o'z so'zlaringiz bilan qayta gapirib bering.",
        ];
        $habitTip = $habitTips[$tale->id % count($habitTips)];

        $taskTips = [
            "Savollarga javob berishdan oldin matnni yana bir bor diqqat bilan o'qing.",
            "Javobingizni matndagi jumlalarga tayangan holda asoslang.",
            "Noma'lum so'zlarni 'Yangi so'zlar' bo'limidan tekshirib oling.",
        ];
        $taskTip = $taskTips[$tale->id % count($taskTips)];

        $navItems = [
            ['label' => "Kurs haqida", 'icon' => 'book', 'color' => 'bg-sky-100 text-sky-600', 'href' => route('reading-course.index')],
            ['label' => "Matnlar darajasi", 'icon' => 'layers', 'color' => 'bg-teal-100 text-teal-600', 'href' => route('fairy-tales.index')],
            ['label' => "Matnlar ro'yxati", 'icon' => 'clipboard', 'color' => 'bg-indigo-100 text-indigo-600', 'href' => route('fairy-tales.index'), 'active' => true],
            ['label' => "Audio bilan ishlash", 'icon' => 'play', 'color' => 'bg-sky-100 text-sky-600', 'href' => '#audio'],
            ['label' => "Topshiriqlar", 'icon' => 'chart', 'color' => 'bg-violet-100 text-violet-600', 'href' => '#topshiriqlar'],
            ['label' => "Natijam", 'icon' => 'target', 'color' => 'bg-emerald-100 text-emerald-600', 'href' => $quiz ? route('tests.show', $quiz->slug) : null],
            ['label' => "Yutuqlaring", 'icon' => 'star', 'color' => 'bg-amber-100 text-amber-600', 'href' => '#yutuqlarim'],
            ['label' => "Sevimlilar", 'icon' => 'heart', 'color' => 'bg-rose-100 text-rose-600', 'soon' => true],
            ['label' => "Sozlamalar", 'icon' => 'settings', 'color' => 'bg-slate-100 text-slate-500', 'soon' => true],
        ];

        $wordPalette = ['bg-emerald-100 text-emerald-600', 'bg-sky-100 text-sky-600', 'bg-amber-100 text-amber-600', 'bg-rose-100 text-rose-600', 'bg-violet-100 text-violet-600'];
    @endphp

    <div class="grid gap-5 lg:grid-cols-[240px_1fr_300px]" x-data="fairyTalePlayer()">
        {{-- Left: course nav --}}
        <aside class="space-y-4 lg:sticky lg:top-24 lg:self-start">
            <div class="rounded-2xl bg-gradient-to-br from-sky-500 to-blue-600 p-5 text-white shadow-sm">
                <span class="grid h-11 w-11 place-items-center rounded-xl bg-white/20">
                    <x-icon name="library" class="h-5 w-5" />
                </span>
                <h2 class="mt-3 text-sm font-bold">101 o'qish kursi</h2>
                <p class="mt-1 text-xs leading-relaxed text-sky-100">Ertaklar bilan o'qishni zavqli tarzda o'rganing va natijangizni kuzating.</p>
            </div>

            <nav class="rounded-2xl border border-slate-200 bg-white p-2 shadow-sm">
                @foreach ($navItems as $item)
                    @if (! empty($item['soon']))
                        <span class="flex items-center justify-between gap-2 rounded-xl px-2.5 py-2 text-sm text-slate-300">
                            <span class="flex items-center gap-2.5">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-slate-50"><x-icon :name="$item['icon']" class="h-3.5 w-3.5" /></span>
                                {{ $item['label'] }}
                            </span>
                            <span class="rounded-full bg-slate-100 px-1.5 py-0.5 text-[9px] font-semibold uppercase">Tez orada</span>
                        </span>
                    @elseif ($item['href'])
                        <a href="{{ $item['href'] }}"
                           class="flex items-center gap-2.5 rounded-xl px-2.5 py-2 text-sm font-semibold transition
                               {{ ! empty($item['active']) ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }}">
                            <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg {{ $item['color'] }}"><x-icon :name="$item['icon']" class="h-3.5 w-3.5" /></span>
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="flex items-center gap-2.5 rounded-xl px-2.5 py-2 text-sm font-medium text-slate-300">
                            <span class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-slate-50"><x-icon :name="$item['icon']" class="h-3.5 w-3.5" /></span>
                            {{ $item['label'] }}
                        </span>
                    @endif
                @endforeach
            </nav>

            <div class="rounded-2xl border border-amber-200 bg-amber-50 p-4">
                <h3 class="mb-1.5 flex items-center gap-1.5 text-xs font-bold text-amber-900">
                    <x-icon name="star" class="h-3.5 w-3.5" /> Maslahat
                </h3>
                <p class="text-xs leading-relaxed text-amber-800">{{ $habitTip }}</p>
            </div>
        </aside>

        {{-- Center: matn oynasi --}}
        <div class="min-w-0">
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
                <h2 class="text-lg font-bold text-slate-800">Matn oynasi</h2>

                <div class="mt-4 flex items-center justify-between gap-3 border-b border-slate-100 pb-4">
                    @if ($previous)
                        <a href="{{ route('fairy-tales.show', $previous->slug) }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-slate-500 hover:text-slate-800">
                            <x-icon name="arrow-right" class="h-4 w-4 rotate-180" /> Oldingi
                        </a>
                    @else
                        <span class="inline-flex items-center gap-1.5 text-sm font-medium text-slate-300">
                            <x-icon name="arrow-right" class="h-4 w-4 rotate-180" /> Oldingi
                        </span>
                    @endif

                    @if ($position && $total)
                        <span class="text-xs font-semibold uppercase tracking-wide text-slate-400">Ertak {{ $position }} / {{ $total }}</span>
                    @endif

                    @if ($next)
                        <a href="{{ route('fairy-tales.show', $next->slug) }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-slate-500 hover:text-slate-800">
                            Keyingi <x-icon name="arrow-right" class="h-4 w-4" />
                        </a>
                    @else
                        <span class="inline-flex items-center gap-1.5 text-sm font-medium text-slate-300">
                            Keyingi <x-icon name="arrow-right" class="h-4 w-4" />
                        </span>
                    @endif
                </div>

                <div class="mt-5 flex flex-wrap items-start justify-between gap-3">
                    <div>
                        <div class="mb-2 flex flex-wrap items-center gap-2">
                            @if ($tale->category)
                                <span class="inline-block rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-bold text-emerald-700">{{ $tale->category->name }}</span>
                            @endif
                        </div>
                        <h1 class="text-2xl font-extrabold leading-tight tracking-tight text-slate-900">{{ $tale->title }}</h1>
                    </div>

                    <button type="button"
                            x-data="{ liked: localStorage.getItem('fav-ertak-{{ $tale->slug }}') === '1' }"
                            @click="liked = !liked; localStorage.setItem('fav-ertak-{{ $tale->slug }}', liked ? '1' : '0')"
                            class="inline-flex shrink-0 items-center gap-1.5 rounded-full border px-3.5 py-2 text-xs font-semibold transition"
                            :class="liked ? 'border-rose-200 bg-rose-50 text-rose-600' : 'border-slate-200 text-slate-500 hover:border-rose-200 hover:text-rose-500'">
                        <x-icon name="heart" class="h-3.5 w-3.5" x-bind:fill="liked ? 'currentColor' : 'none'" />
                        Sevimlarga qo'shish
                    </button>
                </div>

                <div class="mt-5 grid gap-6 md:grid-cols-[1fr_220px]">
                    <div class="order-2 md:order-1">
                        {{-- Audio player --}}
                        @if (! empty($tale->meta['audio_path'] ?? null))
                            <div id="audio" class="scroll-mt-24 rounded-2xl border border-sky-100 bg-sky-50 p-4">
                                <audio x-ref="audio" preload="metadata" class="hidden"
                                       src="{{ asset('storage/'.$tale->meta['audio_path']) }}"
                                       @loadedmetadata="duration = $refs.audio.duration"
                                       @timeupdate="currentTime = $refs.audio.currentTime"
                                       @ended="playing = false"></audio>

                                <div class="flex items-center gap-3">
                                    <button type="button" @click="toggle()"
                                            class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-sky-600 text-white shadow-sm transition hover:bg-sky-700">
                                        <svg x-show="!playing" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                                        <svg x-show="playing" x-cloak class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M6 5h4v14H6zm8 0h4v14h-4z"/></svg>
                                    </button>

                                    <div class="min-w-0 flex-1">
                                        <div class="group relative h-2 w-full cursor-pointer rounded-full bg-sky-200" @click="seek($event)">
                                            <div class="absolute inset-y-0 left-0 rounded-full bg-sky-600" :style="`width: ${duration ? (currentTime / duration * 100) : 0}%`"></div>
                                            <div class="absolute top-1/2 h-3.5 w-3.5 -translate-y-1/2 -translate-x-1/2 rounded-full border-2 border-sky-600 bg-white shadow transition group-hover:scale-110"
                                                 :style="`left: ${duration ? (currentTime / duration * 100) : 0}%`"></div>
                                        </div>
                                    </div>

                                    <button type="button" @click="cycleRate()"
                                            class="inline-flex shrink-0 items-center gap-1 rounded-lg border border-sky-200 bg-white px-2 py-1 text-xs font-bold text-sky-700">
                                        <x-icon name="play" class="h-3 w-3" /> <span x-text="rate + 'x'"></span>
                                    </button>
                                </div>
                                <div class="mt-1 flex justify-between text-xs font-medium text-slate-500">
                                    <span x-text="formatTime(currentTime)"></span>
                                    <span x-text="formatTime(duration)"></span>
                                </div>

                                <div class="mt-3 grid grid-cols-3 gap-2">
                                    <button type="button" @click="replay()"
                                            class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-sky-200 bg-white px-2 py-2 text-xs font-semibold text-sky-700 hover:bg-sky-100">
                                        ↺ Qayta tinglash
                                    </button>
                                    <button type="button" @click="setRate(rate === 0.75 ? 1 : 0.75)"
                                            :class="rate === 0.75 ? 'bg-sky-600 text-white border-sky-600' : 'bg-white text-sky-700 border-sky-200 hover:bg-sky-100'"
                                            class="inline-flex items-center justify-center gap-1.5 rounded-lg border px-2 py-2 text-xs font-semibold">
                                        🐢 Sekin tinglash
                                    </button>
                                    <button type="button" onclick="document.getElementById('matn-body').scrollIntoView({behavior: 'smooth', block: 'center'})"
                                            class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-sky-200 bg-white px-2 py-2 text-xs font-semibold text-sky-700 hover:bg-sky-100">
                                        <x-icon name="doc" class="h-3.5 w-3.5" /> Matnni o'qish
                                    </button>
                                </div>
                            </div>
                        @endif

                        <article id="matn-body" class="prose prose-slate mt-6 max-w-none scroll-mt-24 prose-p:leading-relaxed">
                            {!! $tale->body !!}
                        </article>
                    </div>

                    @if ($tale->cover_image)
                        <div class="order-1 md:order-2">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($tale->cover_image) }}"
                                 alt="{{ $tale->title }}" loading="lazy"
                                 class="aspect-square w-full rounded-2xl object-cover shadow-sm md:sticky md:top-24">
                        </div>
                    @endif
                </div>

                @if ($tasks)
                    @php
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

                        $taskCount = count($tasks['comprehension'] ?? [])
                            + count($tasks['mcq'] ?? [])
                            + count($tasks['fill_blank']['sentences'] ?? [])
                            + count($tasks['true_false'] ?? [])
                            + (! empty($tasks['oral']) ? count($tasks['oral']) : 0)
                            + (! empty($tasks['creative']) ? 1 : 0);
                    @endphp

                    @if (! empty($tasks['new_words']))
                        <div id="yangi-sozlar" class="mt-8 scroll-mt-24">
                            <h3 class="mb-3 text-base font-bold text-slate-800">Yangi so'zlar</h3>
                            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-5">
                                @foreach ($tasks['new_words'] as $i => $word)
                                    @php $wordImage = $tasks['new_word_images'][$word] ?? null; @endphp
                                    <div class="flex flex-col items-center gap-2 rounded-2xl border border-slate-100 bg-slate-50 p-3 text-center">
                                        @if ($wordImage)
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($wordImage) }}"
                                                 alt="{{ $word }}" loading="lazy"
                                                 class="h-14 w-14 shrink-0 rounded-full object-cover ring-2 ring-white shadow-sm">
                                        @else
                                            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-full {{ $wordPalette[$i % count($wordPalette)] }}">
                                                <x-icon name="sparkle" class="h-4 w-4" />
                                            </span>
                                        @endif
                                        <span class="text-sm font-bold text-slate-800">{{ $word }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if (count($tabs))
                        <div id="topshiriqlar" class="mt-8 scroll-mt-24" x-data="{ tab: '{{ array_key_first($tabs) }}' }">
                            <div class="mb-3 flex flex-wrap items-center justify-between gap-2">
                                <h3 class="text-base font-bold text-slate-800">Topshiriqlar</h3>
                                <span class="text-xs font-medium text-slate-400">Barcha topshiriqlar: {{ $taskCount }}</span>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                @foreach ($tabs as $key => $label)
                                    <button type="button" @click="tab = '{{ $key }}'"
                                            :class="tab === '{{ $key }}' ? 'bg-blue-600 text-white shadow-sm' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'"
                                            class="rounded-full px-3.5 py-1.5 text-xs font-semibold transition">
                                        {{ $loop->iteration }}. {{ $label }}
                                    </button>
                                @endforeach
                            </div>

                            <div class="mt-4 rounded-2xl border border-slate-200 p-5">
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
                                    <div x-show="tab === 'mcq'" x-cloak class="space-y-5">
                                        @foreach ($tasks['mcq'] as $q)
                                            <div @if ($q['correct']) x-data="{ picked: null, correct: '{{ $q['correct'] }}' }" @endif>
                                                <p class="mb-2 text-sm font-semibold text-slate-800">{{ $loop->iteration }}. {{ $q['q'] }}</p>
                                                <div class="grid gap-2.5 sm:grid-cols-2">
                                                    @if ($q['correct'])
                                                        @foreach ($q['options'] as $opt)
                                                            <button type="button" @click="picked = '{{ $opt['letter'] }}'"
                                                                    x-bind:class="(picked && '{{ $opt['letter'] }}' === correct) ? 'border-emerald-400 bg-emerald-50 text-emerald-800' : (picked === '{{ $opt['letter'] }}') ? 'border-rose-300 bg-rose-50 text-rose-700' : 'border-slate-200 hover:border-blue-300'"
                                                                    class="relative flex items-center gap-2 rounded-xl border-2 px-3 py-2.5 text-left text-sm font-medium transition">
                                                                <span class="grid h-6 w-6 shrink-0 place-items-center rounded-full bg-slate-100 text-xs font-bold">{{ $opt['letter'] }}</span>
                                                                {{ $opt['text'] }}
                                                                <x-icon name="check" x-show="picked && '{{ $opt['letter'] }}' === correct" x-cloak class="ml-auto h-4 w-4 shrink-0 text-emerald-600" />
                                                            </button>
                                                        @endforeach
                                                    @else
                                                        @foreach ($q['options'] as $opt)
                                                            <div class="flex items-center gap-2 rounded-xl border-2 border-slate-200 px-3 py-2.5 text-sm text-slate-600">
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
                                        <button type="button" @click="show = !show" class="mt-3 text-xs font-semibold text-blue-600 hover:underline" x-text="show ? 'Javoblarni yashirish' : 'Javoblarni ko‘rsatish'"></button>
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
                                        <button type="button" @click="show = !show" class="mt-3 text-xs font-semibold text-blue-600 hover:underline" x-text="show ? 'Javoblarni yashirish' : 'Javoblarni ko‘rsatish'"></button>
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
                                                <button type="button" @click="show = !show" class="mt-2 text-xs font-semibold text-blue-600 hover:underline" x-text="show ? 'Namunani yashirish' : 'Namunani ko‘rsatish'"></button>
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

        {{-- Right: achievements & tips --}}
        <aside class="space-y-4 lg:sticky lg:top-24 lg:self-start">
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
                @else
                    <p class="mt-3 text-xs text-slate-400">Bu ertak uchun test hali mavjud emas.</p>
                @endif
            </div>

            <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5">
                <h3 class="flex items-center gap-2 text-sm font-bold text-amber-900">
                    <x-icon name="bulb" class="h-4 w-4" /> Tavsiya
                </h3>
                <p class="mt-2 text-sm leading-relaxed text-amber-800">{{ $taskTip }}</p>
                <a href="#topshiriqlar" class="mt-4 block rounded-lg bg-blue-600 py-2 text-center text-sm font-semibold text-white transition hover:bg-blue-700">
                    Mashq qilish
                </a>
            </div>
        </aside>
    </div>

    {{-- Quick links --}}
    <div class="mt-10 grid gap-3 border-t border-slate-200 pt-8 sm:grid-cols-2 lg:grid-cols-5">
        <a href="{{ route('fairy-tales.index') }}" class="rounded-xl border border-slate-200 bg-white p-4 hover:border-sky-300 hover:shadow-sm transition">
            <span class="grid h-9 w-9 place-items-center rounded-lg bg-sky-100 text-sky-700"><x-icon name="book" class="h-4 w-4" /></span>
            <p class="mt-3 text-sm font-bold text-slate-800">{{ $totalErtaklar }} ta qiziqarli ertak</p>
            <p class="text-xs text-slate-400">1-4-sinflar uchun maxsus</p>
        </a>
        <a href="#audio" class="rounded-xl border border-slate-200 bg-white p-4 hover:border-sky-300 hover:shadow-sm transition">
            <span class="grid h-9 w-9 place-items-center rounded-lg bg-emerald-100 text-emerald-700"><x-icon name="play" class="h-4 w-4" /></span>
            <p class="mt-3 text-sm font-bold text-slate-800">Audio bilan o'qish</p>
            <p class="text-xs text-slate-400">Tinglab tushunish ko'nikmasi</p>
        </a>
        <a href="#yangi-sozlar" class="rounded-xl border border-slate-200 bg-white p-4 hover:border-sky-300 hover:shadow-sm transition">
            <span class="grid h-9 w-9 place-items-center rounded-lg bg-amber-100 text-amber-700"><x-icon name="sparkle" class="h-4 w-4" /></span>
            <p class="mt-3 text-sm font-bold text-slate-800">Yangi so'zlar</p>
            <p class="text-xs text-slate-400">Lug'at boyligini oshiring</p>
        </a>
        <a href="{{ route('tests.index') }}" class="rounded-xl border border-slate-200 bg-white p-4 hover:border-sky-300 hover:shadow-sm transition">
            <span class="grid h-9 w-9 place-items-center rounded-lg bg-violet-100 text-violet-700"><x-icon name="clipboard" class="h-4 w-4" /></span>
            <p class="mt-3 text-sm font-bold text-slate-800">Barcha testlar</p>
            <p class="text-xs text-slate-400">Bilimingizni sinab ko'ring</p>
        </a>
        <a href="{{ $latestAttempt ? route('tests.result', $latestAttempt->id) : route('tests.index') }}" class="rounded-xl border border-slate-200 bg-white p-4 hover:border-sky-300 hover:shadow-sm transition">
            <span class="grid h-9 w-9 place-items-center rounded-lg bg-rose-100 text-rose-700"><x-icon name="chart" class="h-4 w-4" /></span>
            <p class="mt-3 text-sm font-bold text-slate-800">Natijalaringiz</p>
            <p class="text-xs text-slate-400">O'sishingizni kuzating</p>
        </a>
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
                    cycleRate() {
                        const speeds = [0.75, 1, 1.25, 1.5];
                        const next = speeds[(speeds.indexOf(this.rate) + 1) % speeds.length];
                        this.setRate(next);
                    },
                    seek(event) {
                        if (!this.duration) {
                            return;
                        }
                        const rect = event.currentTarget.getBoundingClientRect();
                        const ratio = Math.min(Math.max((event.clientX - rect.left) / rect.width, 0), 1);
                        this.currentTime = ratio * this.duration;
                        this.$refs.audio.currentTime = this.currentTime;
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
