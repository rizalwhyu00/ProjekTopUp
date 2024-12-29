<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    protected $fillable = ['nama', 'produk', 'harga'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class); // Relasi 1 to Many
    }
}
