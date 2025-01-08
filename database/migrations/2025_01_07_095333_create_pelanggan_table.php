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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable(false);  // Nama pelanggan
            $table->string('email')->unique();  // Email pelanggan
            $table->string('no_telepon')->nullable()->unique();  // Nomor telepon pelanggan
            $table->string('alamat')->nullable();  // Alamat pelanggan
            $table->string('kode_lapangan')->nullable();  // Kode lapangan
            $table->integer('jumlah_jam');  // Jumlah jam yang dimainkan
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');  // Status pelanggan
            $table->timestamps();  // Tanggal pembuatan dan update data pelanggan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
