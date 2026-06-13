<?php

namespace Database\Factories;

use App\Enums\QuestionType;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Question>
 */
class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'test_id' => Test::factory(),
            'type' => QuestionType::MultipleChoice,
            'prompt' => fake()->sentence().'?',
            'explanation' => fake()->sentence(),
            'points' => 1,
            'sort_order' => 0,
        ];
    }

    public function type(QuestionType $type): static
    {
        return $this->state(fn () => ['type' => $type]);
    }
}
