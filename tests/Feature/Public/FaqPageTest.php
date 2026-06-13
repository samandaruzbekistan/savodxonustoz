<?php

use App\Enums\ContentType;
use App\Models\Content;

use function Pest\Laravel\get;

it('lists published faq entries and hides drafts', function () {
    $faq = Content::factory()->create(['type' => ContentType::Faq, 'title' => 'Bu savol ko\'rinadi']);
    $draft = Content::factory()->draft()->create(['type' => ContentType::Faq, 'title' => 'Bu savol yashirin']);

    get(route('faq'))
        ->assertOk()
        ->assertSee($faq->title)
        ->assertDontSee($draft->title);
});

it('does not show non-faq content on the faq page', function () {
    $theory = Content::factory()->create(['title' => 'Nazariya sahifasi']);

    get(route('faq'))
        ->assertOk()
        ->assertDontSee($theory->title);
});
