<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->randomElement(['Mobile Legends', 'Free Fire']),
            'produk' => fake()->randomElement(['86 Diamond', '172 Diamond', '344 Diamond']),
            'harga' => fake()->randomFloat(2, 5000, 2000000),
        ];
    }
}
