<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained('games')->onDelete('cascade');
            $table->string('customerGame_id')->unique();
            $table->string('server');
            $table->string('email')->unique();
            $table->string('nomor_telepon')->unique();
            $table->string('metode_pembayaran');
            $table->enum('status', ['Proses', 'Berhasil', 'Gagal'])->default('Proses');
            $table->timestamp('tanggal_transaksi')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
