<?php

use App\Models\Test;
use App\Models\TestAttempt;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

it('lists published tests and hides drafts', function () {
    $published = Test::factory()->create(['title' => 'Ochiq test']);
    $draft = Test::factory()->draft()->create(['title' => 'Yopiq test']);

    get(route('tests.index'))
        ->assertOk()
        ->assertSee($published->title)
        ->assertDontSee($draft->title);
});

it('requires authentication to take a test', function () {
    $test = Test::factory()->create();

    get(route('tests.show', $test->slug))->assertRedirect(route('login'));
});

it('lets an authenticated user take a published test', function () {
    $test = Test::factory()->create();

    actingAs(User::factory()->create())
        ->get(route('tests.show', $test->slug))
        ->assertOk()
        ->assertSee($test->title);
});

it('returns 404 for a draft test', function () {
    $test = Test::factory()->draft()->create();

    actingAs(User::factory()->create())
        ->get(route('tests.show', $test->slug))
        ->assertNotFound();
});

it('grades a submission and records an attempt', function () {
    $user = User::factory()->create();
    $test = Test::factory()->create();
    $q = $test->questions()->create(['type' => 'mcq', 'prompt' => 'Savol?', 'points' => 1, 'sort_order' => 1]);
    $right = $q->options()->create(['label' => 'To\'g\'ri', 'is_correct' => true]);
    $q->options()->create(['label' => 'Xato', 'is_correct' => false]);

    $response = actingAs($user)->post(route('tests.submit', $test->slug), [
        'answers' => [$q->id => ['option' => $right->id]],
    ]);

    $attempt = TestAttempt::firstWhere('user_id', $user->id);

    $response->assertRedirect(route('tests.result', $attempt));

    expect((float) $attempt->score)->toBe(1.0)
        ->and($attempt->answers)->toHaveCount(1);
});

it('forbids viewing another user attempt result', function () {
    $owner = User::factory()->create();
    $other = User::factory()->create();
    $attempt = TestAttempt::factory()->for($owner)->create();

    actingAs($other)->get(route('tests.result', $attempt))->assertForbidden();
});

it('lets the owner view their result', function () {
    $owner = User::factory()->create();
    $attempt = TestAttempt::factory()->for($owner)->create();

    actingAs($owner)->get(route('tests.result', $attempt))->assertOk();
});
