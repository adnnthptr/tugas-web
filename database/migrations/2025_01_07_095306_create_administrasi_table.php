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
        Schema::create('administrasi', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_pelanggan'); // Nama pelanggan yang melakukan reservasi
            $table->string('nomor_telepon', 15); // Nomor telepon pelanggan
            $table->string('email')->nullable(); // Email pelanggan (opsional)
            $table->date('tanggal_reservasi'); // Tanggal reservasi
            $table->time('waktu_mulai'); // Waktu mulai reservasi
            $table->time('waktu_selesai'); // Waktu selesai reservasi
            $table->decimal('biaya', 10, 2); // Biaya reservasi
            $table->string('status_pembayaran')->default('Belum Dibayar'); // Status pembayaran
            $table->text('catatan')->nullable(); // Catatan tambahan (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrasi');
    }
};
