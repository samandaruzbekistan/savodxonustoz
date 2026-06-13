<?php

namespace App\Http\Controllers\Admin;

use App\Enums\QuestionType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QuestionRequest;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuestionController extends Controller
{
    public function index(Test $test): View
    {
        $test->load(['questions.options']);

        return view('admin.tests.questions.index', compact('test'));
    }

    public function create(Test $test): View
    {
        return view('admin.tests.questions.create', [
            'test' => $test,
            'question' => new Question(['type' => QuestionType::MultipleChoice, 'points' => 1]),
            'types' => $this->typeOptions(),
        ]);
    }

    public function store(QuestionRequest $request, Test $test): RedirectResponse
    {
        $question = $test->questions()->create($this->payload($request, $test));

        $this->syncOptions($question, $request);

        return redirect()->route('admin.tests.questions.index', $test)
            ->with('success', 'Savol qo\'shildi.');
    }

    public function edit(Test $test, Question $question): View
    {
        abort_unless($question->test_id === $test->id, 404);

        $question->load('options');

        return view('admin.tests.questions.edit', [
            'test' => $test,
            'question' => $question,
            'types' => $this->typeOptions(),
        ]);
    }

    public function update(QuestionRequest $request, Test $test, Question $question): RedirectResponse
    {
        abort_unless($question->test_id === $test->id, 404);

        $question->update($this->payload($request, $test));

        $this->syncOptions($question, $request);

        return redirect()->route('admin.tests.questions.index', $test)
            ->with('success', 'Savol yangilandi.');
    }

    public function destroy(Test $test, Question $question): RedirectResponse
    {
        abort_unless($question->test_id === $test->id, 404);

        $question->delete();

        return redirect()->route('admin.tests.questions.index', $test)
            ->with('success', 'Savol o\'chirildi.');
    }

    /**
     * @return array<string, mixed>
     */
    private function payload(QuestionRequest $request, Test $test): array
    {
        return [
            'type' => $request->input('type'),
            'prompt' => $request->input('prompt'),
            'explanation' => $request->input('explanation'),
            'points' => (int) $request->input('points', 1),
            'sort_order' => (int) $request->input('sort_order', $test->questions()->count()),
        ];
    }

    private function syncOptions(Question $question, QuestionRequest $request): void
    {
        $question->options()->delete();

        $type = QuestionType::from($request->input('type'));

        if ($type === QuestionType::Open) {
            return;
        }

        $rows = $request->input('options', []);
        $correctIndex = $request->input('correct_index');

        foreach (array_values($rows) as $i => $row) {
            $label = trim((string) ($row['label'] ?? ''));
            $matchLeft = trim((string) ($row['match_left'] ?? ''));
            $matchRight = trim((string) ($row['match_right'] ?? ''));

            if ($label === '' && $matchLeft === '') {
                continue;
            }

            $question->options()->create([
                'label' => $label !== '' ? $label : null,
                'is_correct' => match ($type) {
                    QuestionType::MultipleChoice, QuestionType::TrueFalse => (string) $correctIndex === (string) $i,
                    QuestionType::MultipleAnswers => ! empty($row['is_correct']),
                    default => false,
                },
                'match_left' => $type === QuestionType::Matching ? ($matchLeft ?: null) : null,
                'match_right' => $type === QuestionType::Matching ? ($matchRight ?: null) : null,
                'correct_position' => $type === QuestionType::Ordering ? (int) ($row['correct_position'] ?? 0) : null,
                'sort_order' => $i,
            ]);
        }
    }

    /**
     * @return array<string, string>
     */
    private function typeOptions(): array
    {
        return collect(QuestionType::cases())
            ->mapWithKeys(fn (QuestionType $t) => [$t->value => $t->label()])
            ->all();
    }
}
