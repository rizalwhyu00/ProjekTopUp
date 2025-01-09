<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'game_id' => Game::factory(),
            'customerGame_id' => fake()->unique()->numerify('############'),
            'server' => fake()->numerify('####'),
            'email' => fake()->unique()->safeEmail,
            'nomor_telepon' => fake()->unique()->phoneNumber,
            'metode_pembayaran' => fake()->randomElement(['Transfer Bank', 'OVO', 'GoPay']),
            'status' => fake()->randomElement(['Proses', 'Berhasil', 'Gagal']),
            'tanggal_transaksi' => fake()->dateTime,
        ];
    }
}
