<?php

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Enums\UserRole;
use App\Models\Content;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

beforeEach(function () {
    $this->admin = User::factory()->create(['role' => UserRole::Admin]);
    $this->student = User::factory()->create(['role' => UserRole::Student]);
});

it('redirects guests from the admin area to login', function () {
    get(route('admin.dashboard'))->assertRedirect(route('login'));
});

it('forbids non-admin users from the admin area', function () {
    actingAs($this->student)->get(route('admin.dashboard'))->assertForbidden();
});

it('lets an admin view the content list', function () {
    actingAs($this->admin)->get(route('admin.contents.index'))->assertOk();
});

it('creates content and auto-generates a slug', function () {
    actingAs($this->admin)->post(route('admin.contents.store'), [
        'type' => ContentType::Theory->value,
        'status' => ContentStatus::Published->value,
        'title' => 'Matnni tushunish nazariyasi',
        'tags' => 'pirls, tushunish',
    ])->assertRedirect(route('admin.contents.index'));

    $content = Content::firstWhere('slug', 'matnni-tushunish-nazariyasi');

    expect($content)->not->toBeNull()
        ->and($content->author_id)->toBe($this->admin->id)
        ->and($content->published_at)->not->toBeNull()
        ->and($content->tags)->toHaveCount(2);
});

it('updates content', function () {
    $content = Content::factory()->create();

    actingAs($this->admin)->put(route('admin.contents.update', $content), [
        'type' => $content->type->value,
        'status' => $content->status->value,
        'title' => 'Yangilangan sarlavha',
        'slug' => $content->slug,
    ])->assertRedirect(route('admin.contents.index'));

    expect($content->refresh()->title)->toBe('Yangilangan sarlavha');
});

it('soft deletes content', function () {
    $content = Content::factory()->create();

    actingAs($this->admin)->delete(route('admin.contents.destroy', $content))
        ->assertRedirect(route('admin.contents.index'));

    $this->assertSoftDeleted($content);
});

it('enforces unique slugs', function () {
    Content::factory()->create(['slug' => 'mavjud-slug']);

    actingAs($this->admin)->post(route('admin.contents.store'), [
        'type' => ContentType::Theory->value,
        'status' => ContentStatus::Draft->value,
        'title' => 'Boshqa sarlavha',
        'slug' => 'mavjud-slug',
    ])->assertSessionHasErrors('slug');
});
