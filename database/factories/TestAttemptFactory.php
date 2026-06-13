<?php

namespace Database\Factories;

use App\Models\Test;
use App\Models\TestAttempt;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TestAttempt>
 */
class TestAttemptFactory extends Factory
{
    protected $model = TestAttempt::class;

    public function definition(): array
    {
        return [
            'test_id' => Test::factory(),
            'user_id' => User::factory(),
            'score' => 0,
            'max_score' => 0,
            'started_at' => now(),
            'submitted_at' => now(),
        ];
    }
}
