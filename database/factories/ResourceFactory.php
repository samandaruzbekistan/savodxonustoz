<?php

namespace Database\Factories;

use App\Enums\ContentStatus;
use App\Enums\ResourceExtension;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<resource>
 */
class ResourceFactory extends Factory
{
    protected $model = Resource::class;

    public function definition(): array
    {
        $title = rtrim(fake()->unique()->sentence(4), '.');
        $extension = fake()->randomElement(ResourceExtension::cases());

        return [
            'category_id' => null,
            'author_id' => null,
            'title' => $title,
            'slug' => Str::slug($title).'-'.fake()->unique()->numberBetween(1, 1000000),
            'description' => fake()->sentence(),
            'disk' => 'public',
            'file_path' => 'resources/sample/'.Str::slug($title).'.'.$extension->value,
            'file_name' => Str::slug($title).'.'.$extension->value,
            'mime_type' => 'application/octet-stream',
            'extension' => $extension->value,
            'file_size' => fake()->numberBetween(50_000, 5_000_000),
            'download_count' => 0,
            'status' => ContentStatus::Published,
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
