<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'pelanggan';

    // Kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'nama',
        'email',
        'no_telepon',
        'alamat',
        'kode_lapangan',
        'jumlah_jam',
        'status',
    ];

    // Kolom yang di-cast ke tipe data lain
    protected $casts = [
        'jumlah_jam' => 'integer',
        'status' => 'string',
    ];
}
