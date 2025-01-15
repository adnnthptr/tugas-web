<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan; 
use App\Models\Lapangan; 
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    
    public function index()
    {
        // Ambil data pelanggan dengan pagination (10 data per halaman)
        $pelanggan = Pelanggan::paginate(10);

        // Ambil data lapangan (opsional, jika ingin menampilkan lapangan di view)
        $lapangan = Lapangan::all();

        // Kirim data pelanggan dan lapangan ke view
        return view('pelanggan_index', compact('pelanggan', 'lapangan'));
    }

    // Menampilkan form untuk menambah pelanggan baru
    public function create()
    {
        return view('pelanggan_create');
    }

    // Menyimpan pelanggan baru
    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggan,email',
            'no_telepon' => 'nullable|unique:pelanggan,no_telepon',
            'alamat' => 'nullable|string',
            'kode_lapangan' => 'nullable|string',
            'jumlah_jam' => 'required|integer|min:1',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        // Menyimpan data pelanggan ke database
        Pelanggan::create($validated);

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit pelanggan
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan_edit', compact('pelanggan'));
    }

    // Menampilkan laporan pelanggan
    public function laporan()
    {
        // Mengambil semua data pelanggan
        $pelanggan = Pelanggan::all();

        // Menampilkan view laporan pelanggan dengan data yang diambil
        return view('pelanggan_laporan', compact('pelanggan'));
    }

    // Memperbarui data pelanggan
    public function update(Request $request, $id)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggan,email,' . $id,
            'no_telepon' => 'nullable|unique:pelanggan,no_telepon,' . $id,
            'alamat' => 'nullable|string',
            'kode_lapangan' => 'nullable|string',
            'jumlah_jam' => 'required|integer|min:1',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($validated);

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diperbarui!');
    }

    // Menghapus pelanggan
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus!');
    }
}
