<?php
namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {   
        // Fetch all gallery data
        $galleries = Gallery::all();
    
        return view('dashboard.gallery.index', [
            'title' => "TK Mutiara | Gallery",
            'author' => 'Kelompok 10',
            'galleries' => $galleries,
        ]);
    }
    public function gallery(){
        $galleries = Gallery::paginate(3);
        $title = 'TK Mutiara Balige';
        $author = 'Kelompok 10';

        
        return view('index', compact('title','author','galleries'));
    }
    public function create()
    {
        return view('dashboard.gallery.create', [
            'title' => "TK Mutiara | Gallery",
            'author' => 'Kelompok 10',
        ]);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|min:4|max:255', // Menambahkan aturan validasi unik
        'content' => 'required|string',
        'url' => 'nullable|string|url',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    try {
        $gallery = new Gallery();
        $gallery->fill($validated);

        if ($request->hasFile('image')) {
            $gambarNama = $request->file('image')->getClientOriginalName();
            // Simpan gambar ke folder public/galleryy
            $gambarPath = $request->file('image')->move(public_path('galleryy'), $gambarNama);
            $gallery->image = $gambarNama;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Galeri berhasil dibuat.');
    } catch (\Illuminate\Database\QueryException $e) {
        // Cek apakah kode error adalah 1062 dan pesan error mengandung 'gallery_title_unique'
        if ($e->errorInfo[1] == 1062 && strpos($e->getMessage(), 'gallery_title_unique') !== false) {
            return back()->withErrors(['title' => 'Judul sudah ada.'])->withInput();
        } else {
            return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
        }
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.'])->withInput();
    }
}

    public function edit(Gallery $gallery)
    {
        return view('dashboard.gallery.edit', [
            'title' => "TK Mutiara | Gallery",
            'author' => 'Kelompok 10',
            'gallery' => $gallery,
        ]);
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'title' => 'required|string|min:4|max:255',
        'content' => 'required|string',
        'url' => 'nullable|string|url',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    try {
        $gallery = Gallery::findOrFail($id);
        $gallery->fill($validated);

        if ($request->hasFile('image')) {
            if ($gallery->image) {
                // Dapatkan jalur gambar lama
                $oldImagePath = 'public/galleryy/' . $gallery->image;

                // Hapus gambar lama dari penyimpanan
                Storage::delete($oldImagePath);
            }

            // Dapatkan nama file asli dari gambar yang diunggah
            $gambarNama = $request->file('image')->getClientOriginalName();

            // Simpan gambar baru ke direktori yang ditentukan
            $gambarPath = $request->file('image')->move(public_path('galleryy'), $gambarNama);

            // Perbarui atribut gambar dari model galeri
            $gallery->image = $gambarNama;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Galeri berhasil diperbarui.');
    } catch (\Illuminate\Database\QueryException $e) {
        // Periksa apakah kode kesalahan adalah 1062 dan jika pesan kesalahan mengandung 'gallery_title_unique'
        if ($e->errorInfo[1] == 1062 && strpos($e->getMessage(), 'gallery_title_unique') !== false) {
            return back()->withErrors(['title' => 'Judul sudah ada.'])->withInput();
        } else {
            return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
        }
    } catch (\Exception $e) {
        // Penanganan kesalahan umum
        return back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data.'])->withInput();
    }
}
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($gallery->image) {
            Storage::delete('public/' . $gallery->image);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Galeri berhasil dihapus.');
    }

}
