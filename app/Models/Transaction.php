<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = ['game_id', 'customerGame_id', 'server', 'email', 'nomor_telepon', 'metode_pembayaran', 'status', 'tanggal_transaksi'];

    public function game()
    {
        return $this->belongsTo(Game::class); // Relasi Many to 1
    }
}
