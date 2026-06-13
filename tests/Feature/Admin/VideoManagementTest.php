<?php

use App\Enums\ContentStatus;
use App\Enums\UserRole;
use App\Models\User;
use App\Models\Video;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

beforeEach(function () {
    $this->admin = User::factory()->create(['role' => UserRole::Admin]);
    $this->student = User::factory()->create(['role' => UserRole::Student]);
});

it('redirects guests from admin videos to login', function () {
    get(route('admin.videos.index'))->assertRedirect(route('login'));
});

it('forbids non-admins from admin videos', function () {
    actingAs($this->student)->get(route('admin.videos.index'))->assertForbidden();
});

it('lets an admin view the video list', function () {
    actingAs($this->admin)->get(route('admin.videos.index'))->assertOk();
});

it('creates a video and extracts the youtube id and thumbnail', function () {
    actingAs($this->admin)->post(route('admin.videos.store'), [
        'title' => 'Ravon o\'qish darsi',
        'status' => ContentStatus::Published->value,
        'youtube_url' => 'https://www.youtube.com/watch?v=abcDEF12345',
    ])->assertRedirect(route('admin.videos.index'));

    $video = Video::firstWhere('slug', 'ravon-oqish-darsi');

    expect($video)->not->toBeNull()
        ->and($video->youtube_id)->toBe('abcDEF12345')
        ->and($video->thumbnail_url)->toBe('https://img.youtube.com/vi/abcDEF12345/hqdefault.jpg')
        ->and($video->published_at)->not->toBeNull();
});

it('rejects an invalid youtube url', function () {
    actingAs($this->admin)->post(route('admin.videos.store'), [
        'title' => 'Yomon video',
        'status' => ContentStatus::Draft->value,
        'youtube_url' => 'https://example.com/not-youtube',
    ])->assertSessionHasErrors('youtube_url');
});

it('soft deletes a video', function () {
    $video = Video::factory()->create();

    actingAs($this->admin)->delete(route('admin.videos.destroy', $video))
        ->assertRedirect(route('admin.videos.index'));

    $this->assertSoftDeleted($video);
});
