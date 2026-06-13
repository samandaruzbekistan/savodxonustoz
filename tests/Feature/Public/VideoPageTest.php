<?php

use App\Models\Playlist;
use App\Models\Video;

use function Pest\Laravel\get;

it('lists published videos and hides drafts', function () {
    $published = Video::factory()->create(['title' => 'Ochiq video']);
    $draft = Video::factory()->draft()->create(['title' => 'Yopiq video']);

    get(route('videos.index'))
        ->assertOk()
        ->assertSee($published->title)
        ->assertDontSee($draft->title);
});

it('shows a published video, embeds it and increments views', function () {
    $video = Video::factory()->create(['title' => 'Matn tahlili', 'view_count' => 0]);

    get(route('videos.show', $video->slug))
        ->assertOk()
        ->assertSee($video->title)
        ->assertSee($video->embed_url, false);

    expect($video->refresh()->view_count)->toBe(1);
});

it('returns 404 for a draft video', function () {
    $video = Video::factory()->draft()->create();

    get(route('videos.show', $video->slug))->assertNotFound();
});

it('shows a playlist with its videos', function () {
    $playlist = Playlist::factory()->create();
    $video = Video::factory()->create(['title' => 'Pleylist videosi']);
    $playlist->videos()->attach([$video->id => ['sort_order' => 1]]);

    get(route('playlists.show', $playlist->slug))
        ->assertOk()
        ->assertSee($video->title);
});
