<?php

use App\Enums\UserRole;
use App\Models\ContactMessage;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

beforeEach(function () {
    $this->admin = User::factory()->create(['role' => UserRole::Admin]);
    $this->student = User::factory()->create(['role' => UserRole::Student]);
});

it('redirects guests from admin messages to login', function () {
    get(route('admin.messages.index'))->assertRedirect(route('login'));
});

it('forbids non-admins from admin messages', function () {
    actingAs($this->student)->get(route('admin.messages.index'))->assertForbidden();
});

it('lets an admin view the message list', function () {
    ContactMessage::factory()->create(['subject' => 'Test mavzu']);

    actingAs($this->admin)->get(route('admin.messages.index'))
        ->assertOk()
        ->assertSee('Test mavzu');
});

it('marks a message as read when viewed', function () {
    $message = ContactMessage::factory()->create();

    actingAs($this->admin)->get(route('admin.messages.show', $message))->assertOk();

    expect($message->refresh()->is_read)->toBeTrue();
});

it('deletes a message', function () {
    $message = ContactMessage::factory()->create();

    actingAs($this->admin)->delete(route('admin.messages.destroy', $message))
        ->assertRedirect(route('admin.messages.index'));

    expect(ContactMessage::count())->toBe(0);
});
