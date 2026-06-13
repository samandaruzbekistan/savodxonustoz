<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Test>
 */
class TestFactory extends Factory
{
    protected $model = Test::class;

    public function definition(): array
    {
        $title = fake()->unique()->sentence(4);

        return [
            'category_id' => null,
            'author_id' => null,
            'title' => rtrim($title, '.'),
            'slug' => Str::slug($title).'-'.fake()->unique()->numberBetween(1, 1000000),
            'description' => fake()->sentence(),
            'instructions' => fake()->sentence(),
            'settings' => ['pass_percent' => 60],
            'is_published' => true,
        ];
    }

    public function draft(): static
    {
        return $this->state(fn () => ['is_published' => false]);
    }
}
