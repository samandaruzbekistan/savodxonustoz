@csrf

@php
    $existing = old('options');
    if ($existing === null && $question->exists) {
        $existing = $question->options->map(fn ($o) => [
            'label' => $o->label,
            'is_correct' => (bool) $o->is_correct,
            'match_left' => $o->match_left,
            'match_right' => $o->match_right,
            'correct_position' => $o->correct_position,
        ])->values()->all();
    }
    $existing = $existing ?: [];

    $correctIndex = old('correct_index');
    if ($correctIndex === null && $question->exists) {
        $found = $question->options->values()->search(fn ($o) => $o->is_correct);
        $correctIndex = $found === false ? null : (string) $found;
    }
@endphp

<div class="mb-4">
    <a href="{{ route('admin.tests.questions.index', $test) }}" class="text-sm text-slate-500 hover:text-indigo-700">← {{ $test->title }} savollari</a>
</div>

<div
    x-data="{
        type: @js(old('type', $question->type?->value ?? 'mcq')),
        rows: @js($existing),
        correctIndex: @js($correctIndex),
        init() { if (this.type !== 'open' && this.rows.length === 0) { this.add(); this.add(); } },
        add() { this.rows.push({ label: '', is_correct: false, match_left: '', match_right: '', correct_position: '' }); },
        remove(i) { this.rows.splice(i, 1); },
        get showOptions() { return this.type !== 'open'; },
        get isSingle() { return this.type === 'mcq' || this.type === 'true_false'; },
        get isMultiple() { return this.type === 'multiple'; },
        get isOrdering() { return this.type === 'ordering'; },
        get isMatching() { return this.type === 'matching'; },
    }"
    class="grid gap-6 lg:grid-cols-3"
>
    <div class="space-y-5 lg:col-span-2">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <x-form.textarea label="Savol matni" name="prompt" :value="$question->prompt" rows="2" required />
            <x-form.textarea label="Izoh (javobdan keyin ko'rsatiladi)" name="explanation" :value="$question->explanation" rows="2" />
        </div>

        {{-- Options builder --}}
        <div x-show="showOptions" class="space-y-3 rounded-xl border border-slate-200 bg-white p-6">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-500">Variantlar</h3>
                <button type="button" @click="add()" class="rounded-lg bg-indigo-50 px-3 py-1.5 text-xs font-medium text-indigo-700 hover:bg-indigo-100">+ Variant</button>
            </div>

            <p class="text-xs text-slate-400" x-show="isSingle">To'g'ri javobni belgilang (bittadan).</p>
            <p class="text-xs text-slate-400" x-show="isMultiple">To'g'ri javoblarni belgilang (bir nechta).</p>
            <p class="text-xs text-slate-400" x-show="isOrdering">Har bir variantning to'g'ri tartib raqamini kiriting.</p>
            <p class="text-xs text-slate-400" x-show="isMatching">Chap va o'ng moslikni kiriting.</p>

            <template x-for="(row, i) in rows" :key="i">
                <div class="flex items-start gap-2 rounded-lg border border-slate-200 p-3">
                    {{-- Single choice (radio) --}}
                    <div x-show="isSingle" class="pt-2">
                        <input type="radio" name="correct_index" :value="String(i)" x-model="correctIndex" class="text-indigo-600 focus:ring-indigo-500">
                    </div>
                    {{-- Multiple (checkbox) --}}
                    <div x-show="isMultiple" class="pt-2">
                        <input type="checkbox" :name="`options[${i}][is_correct]`" value="1" x-model="row.is_correct" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    </div>

                    <div class="flex-1 space-y-2">
                        {{-- Label (all except matching) --}}
                        <input x-show="!isMatching" type="text" :name="`options[${i}][label]`" x-model="row.label" placeholder="Variant matni"
                               class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                        {{-- Matching pair --}}
                        <div x-show="isMatching" class="flex items-center gap-2">
                            <input type="text" :name="`options[${i}][match_left]`" x-model="row.match_left" placeholder="Chap (savol)"
                                   class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <span class="text-slate-400">→</span>
                            <input type="text" :name="`options[${i}][match_right]`" x-model="row.match_right" placeholder="O'ng (javob)"
                                   class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        {{-- Ordering position --}}
                        <div x-show="isOrdering" class="flex items-center gap-2">
                            <label class="text-xs text-slate-500">To'g'ri tartib:</label>
                            <input type="number" min="1" :name="`options[${i}][correct_position]`" x-model="row.correct_position"
                                   class="w-20 rounded-lg border border-slate-300 px-2 py-1 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                    </div>

                    <button type="button" @click="remove(i)" class="pt-1 text-slate-400 hover:text-red-500">&times;</button>
                </div>
            </template>

            @error('options')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
        </div>
    </div>

    <div class="space-y-5">
        <div class="space-y-5 rounded-xl border border-slate-200 bg-white p-6">
            <div class="space-y-1">
                <label for="type" class="block text-sm font-medium text-slate-700">Savol turi <span class="text-red-500">*</span></label>
                <select name="type" id="type" x-model="type" class="block w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-indigo-500">
                    @foreach ($types as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
                @error('type')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
            </div>

            <x-form.input label="Ball" name="points" type="number" :value="$question->points ?? 1" required />
        </div>

        <div class="flex items-center gap-3">
            <button class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Saqlash</button>
            <a href="{{ route('admin.tests.questions.index', $test) }}" class="text-sm text-slate-500 hover:text-slate-700">Bekor qilish</a>
        </div>
    </div>
</div>
