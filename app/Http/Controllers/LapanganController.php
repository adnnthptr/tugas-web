<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lapangan = Lapangan::paginate(5);
        return view('lapangan_index', compact('lapangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lapangan_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lapangan' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        Lapangan::create($request->all());

        return redirect()->route('lapangan.index')->with('success', 'Lapangan berhasil disimpan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lapangan = Lapangan::findOrFail($id);
        return view('lapangan_edit', compact('lapangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $lapangan = Lapangan::findOrFail($id);

        $request->validate([
            'nama_lapangan' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        $lapangan->update($request->all());

        return redirect()->route('lapangan.index')->with('success', 'Lapangan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lapangan = Lapangan::findOrFail($id);
        $lapangan->delete();

        return redirect()->route('lapangan.index')->with('success', 'Lapangan berhasil dihapus!');
    }

    /**
     * Generate a report of all fields.
     */
    public function laporan()
    {
        $lapangan = Lapangan::all();
        return view('lapangan_laporan', compact('lapangan'));
    }
}
