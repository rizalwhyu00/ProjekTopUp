<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customerGame_id' => fake()->unique()->numerify('############'),
            'server' => fake()->numerify('####'),
            'email' => fake()->unique()->safeEmail,
            'nomor_telepon' => fake()->unique()->phoneNumber,
        ];
    }
}
