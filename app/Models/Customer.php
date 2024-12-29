<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $fillable = ['customerGame_id', 'server', 'email', 'nomor_telepon'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class); // Relasi 1 to Many
    }
}
