<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan model ini sudah ada

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Ambil query pencarian dari input
        $query = $request->input('query');
        
        // Lakukan pencarian berdasarkan query
        // Ganti 'name' dengan kolom yang sesuai jika diperlukan
        $results = Product::where('name', 'like', '%' . $query . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('search.results', compact('results', 'query'));
    }
}
