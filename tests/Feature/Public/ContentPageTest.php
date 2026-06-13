<?php

use App\Enums\CategoryType;
use App\Models\Category;
use App\Models\Content;

use function Pest\Laravel\get;

it('renders the home page', function () {
    get(route('home'))->assertOk();
});

it('shows a section with its published content', function () {
    $category = Category::factory()->create([
        'type' => CategoryType::Content,
        'slug' => 'nazariya',
    ]);

    $content = Content::factory()->create([
        'category_id' => $category->id,
        'title' => 'Ravon o\'qish',
    ]);

    get(route('sections.show', $category->slug))
        ->assertOk()
        ->assertSee($content->title);
});

it('shows a published content page', function () {
    $content = Content::factory()->create(['title' => 'Tanqidiy o\'qish']);

    get(route('contents.show', $content->slug))
        ->assertOk()
        ->assertSee($content->title);
});

it('returns 404 for draft content', function () {
    $content = Content::factory()->draft()->create();

    get(route('contents.show', $content->slug))->assertNotFound();
});
