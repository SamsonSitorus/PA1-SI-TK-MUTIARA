<?php

namespace App\Http\Controllers;

use App\Models\prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {   
        $prestasis = prestasi::all(); // Mendapatkan semua data Prestasi
    
        return view('dashboard.prestasi.index', [
            'title' => 'TK Mutiara | Prestasi',
            'author' => 'Kelompok 10',
            'prestasis' => $prestasis,
        ]);
    }
    public function pencapaian(){
        $prestasis = prestasi::all(); // Mendapatkan semua data guru
        $title = 'TK Mutiara Balige';
        $author = 'Kelompok 10';
        
        return view('prestasi', compact('title','author','prestasis'));
    }
    public function show($id)
    {
        $prestasi = prestasi::findOrFail($id);
        $title = 'TK Mutiara Balige';
        $author = 'Kelompok 10';
    
        return view('show4', compact('prestasi', 'title', 'author'));
    }
    public function create()
    {
        return view('dashboard.prestasi.create', [
            'title' => 'TK Mutiara | Tambah Prestasi',
            'author' => 'Kelompok 10',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|min:4|max:255',
            'content' => 'required|string',
            'url' => 'nullable|string|url', // URL harus valid
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional image
            'date' => 'required|date', // Date is required
        ]);
    
        try {
            $prestasi = new prestasi();
            $prestasi->fill($validated);
    
            if ($request->hasFile('image')) {
                $gambarNama = $request->file('image')->getClientOriginalName();
                // Simpan gambar ke folder public/prestasii
                $gambarPath = $request->file('image')->move(public_path('prestasii'), $gambarNama);
                $prestasi->image = $gambarNama;
            }
    
            $prestasi->save(); // Simpan entitas baru
    
            return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil dibuat.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Cek apakah kode error adalah 1062 dan pesan error mengandung 'prestasis_title_unique'
            if ($e->errorInfo[1] == 1062 && strpos($e->getMessage(), 'prestasis_title_unique') !== false) {
                return back()->withErrors(['title' => 'Judul sudah ada.'])->withInput();
            } else {
                return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
            }
        }
    }

    public function edit(prestasi $prestasi)
    {
        return view('dashboard.prestasi.edit', [
            'title' => 'TK Mutiara | Edit Prestasi',
            'author' => 'Kelompok 10',
            'prestasi' => $prestasi,
        ]);
    }
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'title' => 'required|string||min:4|max:255',
            'content' => 'required|string',
            'url' => 'nullable|string|url', // Valid URL
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional image
            'date' => 'required|date', // Valid date
        ]);

        try {
            $prestasi = prestasi::findOrFail($id);
            $prestasi->fill($validated);

            if ($request->hasFile('image')) {
                if ($prestasi->image) {
                    // Get the old image path
                    $oldImagePath = 'public/prestasii/' . $prestasi->image;

                    // Delete the old image from storage
                    Storage::delete($oldImagePath);
                }

                // Get the original file name of the uploaded image
                $gambarNama = $request->file('image')->getClientOriginalName();

                // Save the new image to the specified directory
                $gambarPath = $request->file('image')->move(public_path('prestasii'), $gambarNama);

                // Update the image attribute of the $prestasi model
                $prestasi->image = $gambarNama;
            }

            $prestasi->save(); // Simpan entitas yang diperbarui

            return redirect()->route('prestasi.index')->with('success', 'Prestasi diperbarui dengan sukses.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Cek apakah kode error adalah 1062 dan pesan error mengandung 'prestasis_title_unique'
            if ($e->errorInfo[1] == 1062 && strpos($e->getMessage(), 'prestasis_title_unique') !== false) {
                return back()->withErrors(['title' => 'Judul sudah ada.'])->withInput();
            } else {
                return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
            }
        }
    }

    public function destroy(int $id)
    {
        $prestasi = prestasi::findOrFail($id);

        if ($prestasi->image) {
            Storage::delete('public/' . $prestasi->image); // Hapus gambar
        }

        $prestasi->delete(); // Hapus entitas

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil dihapus.');
    }
}
