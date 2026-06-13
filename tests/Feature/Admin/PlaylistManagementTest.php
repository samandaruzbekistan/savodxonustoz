<?php

use App\Enums\ContentStatus;
use App\Enums\UserRole;
use App\Models\Playlist;
use App\Models\User;
use App\Models\Video;

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->admin = User::factory()->create(['role' => UserRole::Admin]);
});

it('creates a playlist with ordered videos', function () {
    $a = Video::factory()->create();
    $b = Video::factory()->create();

    actingAs($this->admin)->post(route('admin.playlists.store'), [
        'title' => 'PIRLS darslari',
        'status' => ContentStatus::Published->value,
        'videos' => [$a->id, $b->id],
        'order' => [$a->id => 2, $b->id => 1],
    ])->assertRedirect(route('admin.playlists.index'));

    $playlist = Playlist::firstWhere('slug', 'pirls-darslari');

    expect($playlist->videos)->toHaveCount(2)
        ->and($playlist->videos->firstWhere('id', $a->id)->pivot->sort_order)->toBe(2)
        ->and($playlist->videos->firstWhere('id', $b->id)->pivot->sort_order)->toBe(1);
});

it('syncs videos when updating a playlist', function () {
    $playlist = Playlist::factory()->create();
    $a = Video::factory()->create();
    $b = Video::factory()->create();
    $playlist->videos()->attach([$a->id => ['sort_order' => 1]]);

    actingAs($this->admin)->put(route('admin.playlists.update', $playlist), [
        'title' => $playlist->title,
        'slug' => $playlist->slug,
        'status' => $playlist->status->value,
        'videos' => [$b->id],
        'order' => [$b->id => 5],
    ])->assertRedirect(route('admin.playlists.index'));

    $playlist->refresh()->load('videos');

    expect($playlist->videos)->toHaveCount(1)
        ->and($playlist->videos->first()->id)->toBe($b->id);
});
