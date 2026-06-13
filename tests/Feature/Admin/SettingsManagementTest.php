<?php

use App\Enums\UserRole;
use App\Models\Setting;
use App\Models\User;
use App\Support\Settings;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

beforeEach(function () {
    $this->admin = User::factory()->create(['role' => UserRole::Admin]);
    $this->student = User::factory()->create(['role' => UserRole::Student]);
});

it('redirects guests from settings to login', function () {
    get(route('admin.settings.index'))->assertRedirect(route('login'));
});

it('forbids non-admins from settings', function () {
    actingAs($this->student)->get(route('admin.settings.index'))->assertForbidden();
});

it('lets an admin view the settings form', function () {
    actingAs($this->admin)->get(route('admin.settings.index'))
        ->assertOk()
        ->assertSee('Sayt nomi');
});

it('persists submitted settings and busts the cache', function () {
    actingAs($this->admin)->put(route('admin.settings.update'), [
        'site_name' => 'Yangi Nom',
        'contact_email' => 'hello@savodxonustoz.uz',
        'social_telegram' => 'https://t.me/savodxon',
    ])->assertRedirect(route('admin.settings.index'));

    expect(Setting::firstWhere('key', 'site_name')->value)->toBe('Yangi Nom');
    expect(app(Settings::class)->get('site_name'))->toBe('Yangi Nom');
});

it('validates setting field rules', function () {
    actingAs($this->admin)->put(route('admin.settings.update'), [
        'site_name' => '',
        'contact_email' => 'not-an-email',
        'social_telegram' => 'not-a-url',
    ])->assertSessionHasErrors(['site_name', 'contact_email', 'social_telegram']);
});
