<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Counter>
 */
class CounterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'user_one_id' => User::factory(),
            'user_two_id' => User::factory(),
            'user_one_score' => $this->faker->numberBetween(0, 100),
            'user_two_score' => $this->faker->numberBetween(0, 100),
        ];
    }
}
