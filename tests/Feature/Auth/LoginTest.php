<?php

use App\Enums\UserRole;
use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('renders the login screen', function () {
    get(route('login'))->assertOk()->assertSee('Tizimga kirish');
});

it('authenticates an admin and redirects to the dashboard', function () {
    $admin = User::factory()->create([
        'role' => UserRole::Admin,
        'password' => bcrypt('secret123'),
    ]);

    post(route('login.store'), [
        'email' => $admin->email,
        'password' => 'secret123',
    ])->assertRedirect(route('admin.dashboard'));

    $this->assertAuthenticatedAs($admin);
});

it('rejects invalid credentials', function () {
    $user = User::factory()->create(['password' => bcrypt('secret123')]);

    post(route('login.store'), [
        'email' => $user->email,
        'password' => 'wrong-password',
    ])->assertSessionHasErrors('email');

    $this->assertGuest();
});
