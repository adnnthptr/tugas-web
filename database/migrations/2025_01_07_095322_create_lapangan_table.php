<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapanganTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel lapangan.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lapangan');
            $table->integer('kapasitas');
            $table->enum('status', ['aktif', 'non-aktif']);
            $table->timestamps();
        });
    }

    /**
     * Membatalkan migrasi (menghapus tabel).
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapangan');
    }
}
