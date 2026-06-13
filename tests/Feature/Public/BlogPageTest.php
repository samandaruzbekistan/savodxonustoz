<?php

use App\Models\Content;

use function Pest\Laravel\get;

it('lists published blog and news posts and hides drafts', function () {
    $blog = Content::factory()->blog()->create(['title' => 'Ochiq maqola']);
    $news = Content::factory()->news()->create(['title' => 'Yangi xabar']);
    $draft = Content::factory()->blog()->draft()->create(['title' => 'Qoralama maqola']);

    get(route('blog.index'))
        ->assertOk()
        ->assertSee($blog->title)
        ->assertSee($news->title)
        ->assertDontSee($draft->title);
});

it('filters the feed by type', function () {
    $blog = Content::factory()->blog()->create(['title' => 'Faqat maqola']);
    $news = Content::factory()->news()->create(['title' => 'Faqat yangilik']);

    get(route('blog.index', ['type' => 'news']))
        ->assertOk()
        ->assertSee($news->title)
        ->assertDontSee($blog->title);
});

it('shows a published post and increments views', function () {
    $post = Content::factory()->blog()->create(['title' => 'Metodik maqola', 'view_count' => 0]);

    get(route('blog.show', $post->slug))
        ->assertOk()
        ->assertSee($post->title);

    expect($post->refresh()->view_count)->toBe(1);
});

it('returns 404 for a draft post', function () {
    $post = Content::factory()->blog()->draft()->create();

    get(route('blog.show', $post->slug))->assertNotFound();
});

it('does not expose non-feed content through the blog show route', function () {
    $theory = Content::factory()->create(['title' => 'Nazariya sahifasi']);

    get(route('blog.show', $theory->slug))->assertNotFound();
});
