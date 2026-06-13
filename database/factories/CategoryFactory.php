<?php

namespace Database\Factories;

use App\Enums\CategoryType;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $name = fake()->unique()->words(2, true);

        return [
            'parent_id' => null,
            'type' => CategoryType::Content,
            'name' => Str::ucfirst($name),
            'slug' => Str::slug($name).'-'.fake()->unique()->numberBetween(1, 1000000),
            'description' => fake()->optional()->sentence(),
            'depth' => 0,
            'path' => null,
            'sort_order' => 0,
        ];
    }
}
