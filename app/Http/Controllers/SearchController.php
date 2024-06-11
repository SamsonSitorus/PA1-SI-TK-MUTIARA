<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Validasi input
        $request->validate([
            'query' => 'required|string|min:1',
        ]);

        // Ambil query pencarian
        $query = $request->input('query');

        // Query untuk tabel pengumuman
        $pengumuman = DB::table('pengumuman')
            ->select('id', 'title as name', 'created_at', DB::raw("'pengumuman' as type"))
            ->where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%");

        // Query untuk tabel fasilitas
        $fasilitas = DB::table('fasilitas')
            ->select('id', 'name', 'created_at', DB::raw("'fasilitas' as type"))
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%");

        // Query untuk tabel prestasi
        $prestasi = DB::table('prestasis')
            ->select('id', 'title as name', 'created_at', DB::raw("'prestasi' as type"))
            ->where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%");

        // Gabungkan hasil pencarian dari semua tabel
        $results = $pengumuman->union($fasilitas)->union($prestasi)->get();

        // Tampilkan hasil pencarian ke view
        $title = 'TK Mutiara Balige';
        $author = 'Kelompok 10';

        return view('search.results', compact('results','title','author'));
    }
   public function showPage()
{
    // Example data for demonstration purposes
    $results = [
        (object)[
            'id' => 1,
            'name' => 'Example Result 1',
            'type' => 'example_type',
            // Add other properties as needed
        ],
        (object)[
            'id' => 2,
            'name' => 'Example Result 2',
            'type' => 'example_type',
            // Add other properties as needed
        ],
        // Add more example results as needed
    ];

    // Make sure to include the title variable when returning the view
    return view('search.result', [
        'title' => 'Your Page Title',
        'results' => $results,]);

}
}


