<?php

namespace App\Services;

use App\Enums\QuestionType;
use App\Models\Question;
use App\Models\Test;
use App\Models\TestAttempt;
use App\Models\User;
use Illuminate\Support\Facades\DB;

/**
 * Scores a submitted test attempt and persists per-question results.
 *
 * Auto-gradable types (mcq, true_false, multiple, ordering, matching)
 * are scored immediately. Open questions are stored without a verdict
 * (is_correct = null) and award no points until a teacher reviews them.
 */
class TestGrader
{
    /**
     * Grade a submission and persist the attempt with its answers.
     *
     * @param  array<int, array<string, mixed>>  $answers  keyed by question id
     */
    public function grade(Test $test, User $user, array $answers): TestAttempt
    {
        $test->loadMissing('questions.options');

        return DB::transaction(function () use ($test, $user, $answers) {
            $attempt = $test->attempts()->create([
                'user_id' => $user->id,
                'score' => 0,
                'max_score' => 0,
                'started_at' => now(),
                'submitted_at' => now(),
            ]);

            $score = 0.0;
            $maxScore = 0.0;

            foreach ($test->questions as $question) {
                $given = $answers[$question->id] ?? [];
                [$awarded, $isCorrect] = $this->evaluate($question, is_array($given) ? $given : []);

                $score += $awarded;
                $maxScore += $question->points;

                $attempt->answers()->create([
                    'question_id' => $question->id,
                    'answer' => $given ?: null,
                    'is_correct' => $isCorrect,
                    'awarded_points' => $awarded,
                ]);
            }

            $attempt->update(['score' => $score, 'max_score' => $maxScore]);

            return $attempt;
        });
    }

    /**
     * @param  array<string, mixed>  $answer
     * @return array{0: float, 1: bool|null}
     */
    private function evaluate(Question $question, array $answer): array
    {
        $correct = match ($question->type) {
            QuestionType::MultipleChoice, QuestionType::TrueFalse => $this->gradeSingleChoice($question, $answer),
            QuestionType::MultipleAnswers => $this->gradeMultipleAnswers($question, $answer),
            QuestionType::Ordering => $this->gradeOrdering($question, $answer),
            QuestionType::Matching => $this->gradeMatching($question, $answer),
            QuestionType::Open => null,
        };

        if ($correct === null) {
            return [0.0, null];
        }

        return [$correct ? (float) $question->points : 0.0, $correct];
    }

    /**
     * @param  array<string, mixed>  $answer
     */
    private function gradeSingleChoice(Question $question, array $answer): bool
    {
        $selected = $answer['option'] ?? null;

        if ($selected === null) {
            return false;
        }

        $correctId = $question->options->firstWhere('is_correct', true)?->id;

        return $correctId !== null && (int) $selected === (int) $correctId;
    }

    /**
     * @param  array<string, mixed>  $answer
     */
    private function gradeMultipleAnswers(Question $question, array $answer): bool
    {
        $selected = collect($answer['options'] ?? [])->map(fn ($id) => (int) $id)->sort()->values();
        $correct = $question->options->where('is_correct', true)->pluck('id')->map(fn ($id) => (int) $id)->sort()->values();

        return $correct->isNotEmpty() && $selected->all() === $correct->all();
    }

    /**
     * @param  array<string, mixed>  $answer
     */
    private function gradeOrdering(Question $question, array $answer): bool
    {
        $positions = $answer['positions'] ?? [];

        if (! is_array($positions) || count($positions) === 0) {
            return false;
        }

        foreach ($question->options as $option) {
            $given = $positions[$option->id] ?? null;

            if ($given === null || (int) $given !== (int) $option->correct_position) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param  array<string, mixed>  $answer
     */
    private function gradeMatching(Question $question, array $answer): bool
    {
        $pairs = $answer['pairs'] ?? [];

        if (! is_array($pairs) || count($pairs) === 0) {
            return false;
        }

        foreach ($question->options as $option) {
            $given = $pairs[$option->id] ?? null;

            if ($given === null || trim((string) $given) !== trim((string) $option->match_right)) {
                return false;
            }
        }

        return true;
    }
}
