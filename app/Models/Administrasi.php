<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;

    // Nama tabel yang sesuai dengan migrasi
    protected $table = 'administrasi';

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_pelanggan',
        'nomor_telepon',
        'email',
        'tanggal_reservasi',
        'waktu_mulai',
        'waktu_selesai',
        'biaya',
        'status_pembayaran',
        'catatan',
    ];
}
