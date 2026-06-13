<?php

use App\Enums\UserRole;
use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('shows the registration form', function () {
    get(route('register'))->assertOk()->assertSee("Ro'yxatdan o'tish");
});

it('registers a new student and logs them in', function () {
    post(route('register.store'), [
        'name' => 'Yangi Talaba',
        'email' => 'talaba@example.com',
        'password' => 'parol1234',
        'password_confirmation' => 'parol1234',
    ])->assertRedirect(route('home'));

    $user = User::firstWhere('email', 'talaba@example.com');

    expect($user)->not->toBeNull()
        ->and($user->role)->toBe(UserRole::Student);

    $this->assertAuthenticatedAs($user);
});

it('validates registration input', function () {
    post(route('register.store'), [
        'name' => '',
        'email' => 'bad',
        'password' => 'short',
        'password_confirmation' => 'mismatch',
    ])->assertSessionHasErrors(['name', 'email', 'password']);

    expect(User::count())->toBe(0);
});

it('rejects duplicate emails', function () {
    User::factory()->create(['email' => 'taken@example.com']);

    post(route('register.store'), [
        'name' => 'Test',
        'email' => 'taken@example.com',
        'password' => 'parol1234',
        'password_confirmation' => 'parol1234',
    ])->assertSessionHasErrors('email');
});
