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

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gallery = new Gallery();
        $gallery->fill($validated); 

        $gambarNama = $request->file('image')->getClientOriginalName();
            // Simpan gambar ke folder public/img
            $gambarPath = $request->file('image')->move(public_path('galleryy'), $gambarNama);

            // Ambil nama file gambar dengan ekstensinya
            $gambarNama = $request->file('image')->getClientOriginalName();

            $gallery->image = $gambarNama;


        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Galeri berhasil dibuat.');
    }

    public function edit(Gallery $gallery)
    {
        return view('dashboard.gallery.edit', [
            'title' => "TK Mutiara | Gallery",
            'author' => 'Kelompok 10',
            'gallery' => $gallery,
        ]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'url' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gallery = Gallery::findOrFail($id);

        $gallery->fill($validated);

        if ($request->hasFile('image')) {
            if ($gallery->image) {
                // Get the old image path
                $oldImagePath = 'public/galleryy/' . $gallery->image;

                // Delete the old image from storage
                Storage::delete($oldImagePath);
            }

            // Get the original file name of the uploaded image
            $gambarNama = $request->file('image')->getClientOriginalName();

            // Save the new image to the specified directory
            $gambarPath = $request->file('image')->move(public_path('galleryy'), $gambarNama);

            // Update the image attribute of the $guru model
            $gallery->image = $gambarNama;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Galeri diperbarui dengan sukses.');
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
