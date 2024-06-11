<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index($kategoriId)
    {
        $kategoriId = (int) $kategoriId; // Konversi ke integer
        $kategori = Kategori::findOrFail($kategoriId);
        $fasilitas = Fasilitas::where('kategori_id', $kategori->id)->get();

        return view('dashboard.fasilitas.index', [
            'title' => 'TK Mutiara | Fasilitas',
            'author' => 'Kelompok 10',
            'kategori' => $kategori,    
            'fasilitas' => $fasilitas,
        ]);
    }
    public function fasilitas (){
        $kategoriId = 1; // Sesuaikan dengan kategori_id yang diinginkan
        $kategori = Kategori::findOrFail($kategoriId);
        $fasilitas = Fasilitas::where('kategori_id', $kategoriId)->get();
        $title = 'TK Mutiara Balige';
        $author = 'Kelompok 10';
        
        return view('fasilitaskelas', compact('title', 'author', 'fasilitas'));
    }
    public function fasilitas2 (){
        $kategoriId = 2; // Sesuaikan dengan kategori_id yang diinginkan
        $kategori = Kategori::findOrFail($kategoriId);
        $fasilitas = Fasilitas::where('kategori_id', $kategoriId)->get();
        $title = 'TK Mutiara Balige';
        $author = 'Kelompok 10';
        
        return view('fasilitastaman', compact('title','author','fasilitas'));
    }
 

public function show($id)
{
    $fasilitas = Fasilitas::findOrFail($id);
    $title = 'TK Mutiara Balige';
    $author = 'Kelompok 10';
    return view('show', compact('fasilitas','title','author'));
}
    public function create($kategoriId)
    {
        $kategoriId = (int) $kategoriId; // Konversi ke integer
        $kategori = Kategori::findOrFail($kategoriId);

        return view('dashboard.fasilitas.create', [
            'title' => 'TK Mutiara | Tambah Fasilitas',
            'author' => 'Kelompok 10',
            'kategori' => $kategori,
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'kategori_id' => 'required|exists:kategoris,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $fasilitas = new Fasilitas();
            $fasilitas->name = $validated['name'];
            $fasilitas->description = $validated['description'];
            $fasilitas->kategori_id = $validated['kategori_id'];

            if ($request->hasFile('image')) {
                $gambarNama = $request->file('image')->getClientOriginalName();
                // Simpan gambar ke folder public/fasilitass
                $gambarPath = $request->file('image')->move(public_path('fasilitass'), $gambarNama);
                $fasilitas->image = $gambarNama;
            }

            $fasilitas->save();

            return redirect()->route('fasilitas.index', ['kategoriId' => $fasilitas->kategori_id])
                ->with('success', 'Fasilitas berhasil dibuat.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Cek apakah kode error adalah 1062 dan pesan error mengandung 'fasilitas_name_unique'
            if ($e->errorInfo[1] == 1062 && strpos($e->getMessage(), 'fasilitas_name_unique') !== false) {
                return back()->withErrors(['name' => 'Nama Fasilitas sudah ada.'])->withInput();
            } else {
                return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
            }
        }
    }
    public function update(Request $request, Fasilitas $fasilitas)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $fasilitas->fill($validated);

            if ($request->hasFile('image')) {
                if ($fasilitas->image) {
                    // Get the old image path
                    $oldImagePath = 'public/fasilitass/' . $fasilitas->image;

                    // Delete the old image from storage
                    Storage::delete($oldImagePath);
                }

                // Get the original file name of the uploaded image
                $gambarNama = $request->file('image')->getClientOriginalName();

                // Save the new image to the specified directory
                $gambarPath = $request->file('image')->move(public_path('fasilitass'), $gambarNama);

                // Update the image attribute of the $fasilitas model
                $fasilitas->image = $gambarNama;
            }

            $fasilitas->save(); // Save the updated model to the database

            return redirect()->route('fasilitas.index', ['kategoriId' => $fasilitas->kategori_id])
                             ->with('success', 'Fasilitas berhasil diperbarui.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Check if the error code is 1062 and if the message contains 'fasilitas_name_unique'
            if ($e->errorInfo[1] == 1062 && strpos($e->getMessage(), 'fasilitas_name_unique') !== false) {
                return back()->withErrors(['name' => 'Nama Fasilitas sudah ada.'])->withInput();
            } else {
                return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
            }
        }
    }
    
    public function edit(Fasilitas $fasilitas)
    {
        return view('dashboard.fasilitas.edit', [
            'title' => 'Edit Fasilitas',
            'author' => 'Kelompok 10',
            'fasilitas' => $fasilitas,
        ]);
    }

    public function destroy(Fasilitas $fasilitas)
    {
        if ($fasilitas->image) {
            Storage::disk('public')->delete($fasilitas->image);
        }

        $fasilitas->delete();

        return redirect()->route('fasilitas.index', ['kategoriId' => $fasilitas->kategori_id])
            ->with('success', 'Fasilitas berhasil dihapus.');
    }
}