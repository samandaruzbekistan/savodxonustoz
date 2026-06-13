<?php

namespace Database\Factories;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Content>
 */
class ContentFactory extends Factory
{
    protected $model = Content::class;

    public function definition(): array
    {
        $title = fake()->unique()->sentence(4);

        return [
            'parent_id' => null,
            'category_id' => null,
            'author_id' => null,
            'type' => ContentType::Theory,
            'title' => rtrim($title, '.'),
            'slug' => Str::slug($title).'-'.fake()->unique()->numberBetween(1, 1000000),
            'excerpt' => fake()->sentence(),
            'body' => '<p>'.fake()->paragraph().'</p>',
            'meta' => null,
            'status' => ContentStatus::Published,
            'is_featured' => false,
            'sort_order' => 0,
            'view_count' => 0,
            'published_at' => now(),
        ];
    }

    public function draft(): static
    {
        return $this->state(fn () => [
            'status' => ContentStatus::Draft,
            'published_at' => null,
        ]);
    }

    public function featured(): static
    {
        return $this->state(fn () => ['is_featured' => true]);
    }

    public function blog(): static
    {
        return $this->state(fn () => ['type' => ContentType::Blog]);
    }

    public function news(): static
    {
        return $this->state(fn () => ['type' => ContentType::News]);
    }
}
