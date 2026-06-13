<?php

use App\Enums\QuestionType;
use App\Models\Question;
use App\Models\Test;
use App\Models\User;
use App\Services\TestGrader;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->test = Test::factory()->create();
    $this->grader = app(TestGrader::class);
});

function makeQuestion(Test $test, QuestionType $type, int $points = 1): Question
{
    return Question::factory()->for($test)->type($type)->create(['points' => $points]);
}

it('grades a multiple choice question correctly', function () {
    $q = makeQuestion($this->test, QuestionType::MultipleChoice);
    $wrong = $q->options()->create(['label' => 'A', 'is_correct' => false]);
    $right = $q->options()->create(['label' => 'B', 'is_correct' => true]);

    $attempt = $this->grader->grade($this->test, $this->user, [
        $q->id => ['option' => $right->id],
    ]);

    expect((float) $attempt->score)->toBe(1.0)
        ->and((float) $attempt->max_score)->toBe(1.0)
        ->and($attempt->answers->first()->is_correct)->toBeTrue();
});

it('marks a wrong multiple choice answer as incorrect', function () {
    $q = makeQuestion($this->test, QuestionType::MultipleChoice);
    $wrong = $q->options()->create(['label' => 'A', 'is_correct' => false]);
    $q->options()->create(['label' => 'B', 'is_correct' => true]);

    $attempt = $this->grader->grade($this->test, $this->user, [
        $q->id => ['option' => $wrong->id],
    ]);

    expect((float) $attempt->score)->toBe(0.0)
        ->and($attempt->answers->first()->is_correct)->toBeFalse();
});

it('requires the exact set for multiple answers', function () {
    $q = makeQuestion($this->test, QuestionType::MultipleAnswers, 2);
    $a = $q->options()->create(['label' => 'A', 'is_correct' => true]);
    $b = $q->options()->create(['label' => 'B', 'is_correct' => true]);
    $c = $q->options()->create(['label' => 'C', 'is_correct' => false]);

    $full = $this->grader->grade($this->test, $this->user, [$q->id => ['options' => [$a->id, $b->id]]]);
    expect((float) $full->score)->toBe(2.0);

    $partial = $this->grader->grade($this->test, $this->user, [$q->id => ['options' => [$a->id]]]);
    expect((float) $partial->score)->toBe(0.0);

    $withWrong = $this->grader->grade($this->test, $this->user, [$q->id => ['options' => [$a->id, $b->id, $c->id]]]);
    expect((float) $withWrong->score)->toBe(0.0);
});

it('grades ordering by correct positions', function () {
    $q = makeQuestion($this->test, QuestionType::Ordering, 2);
    $o1 = $q->options()->create(['label' => 'First', 'correct_position' => 1]);
    $o2 = $q->options()->create(['label' => 'Second', 'correct_position' => 2]);

    $right = $this->grader->grade($this->test, $this->user, [
        $q->id => ['positions' => [$o1->id => 1, $o2->id => 2]],
    ]);
    expect((float) $right->score)->toBe(2.0);

    $wrong = $this->grader->grade($this->test, $this->user, [
        $q->id => ['positions' => [$o1->id => 2, $o2->id => 1]],
    ]);
    expect((float) $wrong->score)->toBe(0.0);
});

it('grades matching by right-hand value', function () {
    $q = makeQuestion($this->test, QuestionType::Matching, 2);
    $o1 = $q->options()->create(['match_left' => 'Cat', 'match_right' => 'Mushuk']);
    $o2 = $q->options()->create(['match_left' => 'Dog', 'match_right' => 'It']);

    $right = $this->grader->grade($this->test, $this->user, [
        $q->id => ['pairs' => [$o1->id => 'Mushuk', $o2->id => 'It']],
    ]);
    expect((float) $right->score)->toBe(2.0);

    $wrong = $this->grader->grade($this->test, $this->user, [
        $q->id => ['pairs' => [$o1->id => 'It', $o2->id => 'Mushuk']],
    ]);
    expect((float) $wrong->score)->toBe(0.0);
});

it('stores open questions ungraded but counts max score', function () {
    $q = makeQuestion($this->test, QuestionType::Open, 3);

    $attempt = $this->grader->grade($this->test, $this->user, [
        $q->id => ['text' => 'Mening javobim'],
    ]);

    expect((float) $attempt->score)->toBe(0.0)
        ->and((float) $attempt->max_score)->toBe(3.0)
        ->and($attempt->answers->first()->is_correct)->toBeNull();
});

it('computes the percentage accessor', function () {
    $q = makeQuestion($this->test, QuestionType::MultipleChoice, 4);
    $right = $q->options()->create(['label' => 'B', 'is_correct' => true]);

    $attempt = $this->grader->grade($this->test, $this->user, [$q->id => ['option' => $right->id]]);

    expect($attempt->percentage)->toBe(100);
});
