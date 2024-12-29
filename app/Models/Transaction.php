<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = ['customer_id', 'game_id', 'metode_pembayaran', 'status', 'tanggal_transaksi'];

    public function customer()
    {
        return $this->belongsTo(Customer::class); // Relasi Many to 1
    }

    public function game()
    {
        return $this->belongsTo(Game::class); // Relasi Many to 1
    }
}
