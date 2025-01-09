<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\User;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rizal',
            'email' => 'rizal23ti@mahasiswa.pcr.ac.id',
            'password' => Hash::make('password'),
        ]);

        // Buat data game
        $games = Game::factory(5)->create();

        // Buat data transaksi
        Transaction::factory(20)->create([
            'game_id' => $games->random()->id,
        ]);
    }
}
