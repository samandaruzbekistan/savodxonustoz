<?php

use App\Models\ContactMessage;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('shows the contact form', function () {
    get(route('contact'))->assertOk()->assertSee('Biz bilan bog');
});

it('stores a valid contact message as unread', function () {
    post(route('contact.store'), [
        'name' => 'Dilnoza',
        'email' => 'dilnoza@example.com',
        'subject' => 'Hamkorlik',
        'message' => 'Salom, men hamkorlik qilmoqchiman va savolim bor.',
    ])->assertRedirect(route('contact'))->assertSessionHas('success');

    $message = ContactMessage::firstWhere('email', 'dilnoza@example.com');

    expect($message)->not->toBeNull()
        ->and($message->name)->toBe('Dilnoza')
        ->and($message->is_read)->toBeFalse();
});

it('validates required contact fields', function () {
    post(route('contact.store'), [
        'name' => '',
        'email' => 'not-an-email',
        'message' => 'short',
    ])->assertSessionHasErrors(['name', 'email', 'message']);

    expect(ContactMessage::count())->toBe(0);
});
