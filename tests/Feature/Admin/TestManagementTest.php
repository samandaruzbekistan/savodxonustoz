<?php

use App\Enums\QuestionType;
use App\Enums\UserRole;
use App\Models\Question;
use App\Models\Test;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

beforeEach(function () {
    $this->admin = User::factory()->create(['role' => UserRole::Admin]);
    $this->student = User::factory()->create(['role' => UserRole::Student]);
});

it('redirects guests from admin tests to login', function () {
    get(route('admin.tests.index'))->assertRedirect(route('login'));
});

it('forbids non-admins from admin tests', function () {
    actingAs($this->student)->get(route('admin.tests.index'))->assertForbidden();
});

it('lets an admin create a test', function () {
    actingAs($this->admin)->post(route('admin.tests.store'), [
        'title' => 'Yangi diagnostika',
        'pass_percent' => 70,
        'is_published' => '1',
    ])->assertRedirect();

    $test = Test::firstWhere('slug', 'yangi-diagnostika');

    expect($test)->not->toBeNull()
        ->and($test->is_published)->toBeTrue()
        ->and($test->settings['pass_percent'])->toBe(70);
});

it('creates a multiple choice question with options and a correct answer', function () {
    $test = Test::factory()->create();

    actingAs($this->admin)->post(route('admin.tests.questions.store', $test), [
        'type' => QuestionType::MultipleChoice->value,
        'prompt' => 'Poytaxt qaysi shahar?',
        'points' => 1,
        'correct_index' => '1',
        'options' => [
            ['label' => 'Samarqand'],
            ['label' => 'Toshkent'],
        ],
    ])->assertRedirect(route('admin.tests.questions.index', $test));

    $question = Question::firstWhere('prompt', 'Poytaxt qaysi shahar?');

    expect($question->options)->toHaveCount(2)
        ->and($question->options->firstWhere('label', 'Toshkent')->is_correct)->toBeTrue()
        ->and($question->options->firstWhere('label', 'Samarqand')->is_correct)->toBeFalse();
});

it('soft deletes a test', function () {
    $test = Test::factory()->create();

    actingAs($this->admin)->delete(route('admin.tests.destroy', $test))
        ->assertRedirect(route('admin.tests.index'));

    $this->assertSoftDeleted($test);
});
