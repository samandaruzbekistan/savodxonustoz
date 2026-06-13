<?php

namespace Database\Factories;

use App\Enums\ContentStatus;
use App\Models\Video;
use App\Support\YouTube;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Video>
 */
class VideoFactory extends Factory
{
    protected $model = Video::class;

    public function definition(): array
    {
        $title = rtrim(fake()->unique()->sentence(4), '.');
        $youtubeId = Str::random(11);

        return [
            'category_id' => null,
            'title' => $title,
            'slug' => Str::slug($title).'-'.fake()->unique()->numberBetween(1, 1000000),
            'description' => fake()->paragraph(),
            'youtube_id' => $youtubeId,
            'youtube_url' => "https://www.youtube.com/watch?v={$youtubeId}",
            'thumbnail_url' => YouTube::thumbnail($youtubeId),
            'duration' => fake()->optional()->numberBetween(60, 1800),
            'status' => ContentStatus::Published,
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
}
