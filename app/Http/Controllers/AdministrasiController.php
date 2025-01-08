<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrasi = Administrasi::paginate(5);
        return view('administrasi_index', compact('administrasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrasi_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'tanggal_reservasi' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required|after:waktu_mulai',
            'biaya' => 'required|numeric|min:0',
            'status_pembayaran' => 'required|in:Belum Dibayar,Lunas',
            'catatan' => 'nullable|string',
        ]);

        Administrasi::create($request->all());

        return redirect()->route('administrasi.index')->with('success', 'Reservasi berhasil disimpan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $administrasi = Administrasi::findOrFail($id);
        return view('administrasi_edit', compact('administrasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $administrasi = Administrasi::findOrFail($id);

        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'tanggal_reservasi' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required|after:waktu_mulai',
            'biaya' => 'required|numeric|min:0',
            'status_pembayaran' => 'required|in:Belum Dibayar,Lunas',
            'catatan' => 'nullable|string',
        ]);

        $administrasi->update($request->all());

        return redirect()->route('administrasi.index')->with('success', 'Reservasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $administrasi = Administrasi::findOrFail($id);
        $administrasi->delete();

        return redirect()->route('administrasi.index')->with('success', 'Reservasi berhasil dihapus!');
    }

    /**
     * Generate a report of all reservations.
     */
    public function laporan()
    {
        $administrasi = Administrasi::all();
        return view('administrasi_laporan', compact('administrasi'));
    }
}
