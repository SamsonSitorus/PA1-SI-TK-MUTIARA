<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    // Method untuk menampilkan daftar kategori
    public function index() 
    {
        // Menghitung jumlah kategori yang ada
        $kategoris = Kategori::all();
        $kategoriCount = $kategoris->count();

        return view('dashboard.kategoris.index', [
            'title' => 'Daftar Kategori',
            'author' => 'Kelompok 10',
            'kategoris' => $kategoris,
            'kategoriCount' => $kategoriCount, // Jumlah kategori
        ]);
    }

    // Method untuk menampilkan form create kategori baru
    public function create() 
    {
        // Cek apakah jumlah kategori sudah mencapai batas
        if (Kategori::count() >= 2) {
            return redirect()->route('kategoris.index')
                             ->with('error', 'Anda hanya dapat membuat maksimal 2 kategori.');
        }

        return view('dashboard.kategoris.create', [
            'title' => 'Tambah Kategori Baru',
            'author' => 'Kelompok 10',
        ]);
    }

    // Method untuk menyimpan kategori baru
    public function store(Request $request) 
    {
        // Cek apakah jumlah kategori sudah mencapai batas
        if (Kategori::count() >= 2) {
            return redirect()->route('kategoris.index')
                             ->with('error', 'Anda hanya dapat membuat maksimal 2 kategori.');
        }

        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:kategoris,name',
        ]);

        // Simpan kategori baru
        $kategori = new Kategori($validated);

        if ($request->hasFile('file')) {
            $kategori->file = $request->file('file')->store('kategori', 'public');
        }

        $kategori->save(); 

        return redirect()->route('kategoris.index')
                         ->with('success', 'Kategori berhasil dibuat.');
    }

    // Method untuk menampilkan form edit kategori
    public function edit(Kategori $kategori) 
    {
        return view('dashboard.kategoris.edit', [
            'title' => 'Edit Kategori',
            'author' => 'Kelompok 10',
            'kategori' => $kategori,
        ]);
    }

    // Method untuk memperbarui kategori
    public function update(Request $request, Kategori $kategori) 
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:kategoris,name,' . $kategori->id,
        ]);

        $kategori->fill($validated);

        if ($request->hasFile('file')) {
            if ($kategori->file) {
                Storage::delete('public/' . $kategori->file); // Hapus file lama
            }
            $kategori->file = $request->file('file')->store('kategori', 'public');
        }

        $kategori->save();

        return redirect()->route('kategoris.index')
                         ->with('success', 'Kategori berhasil diperbarui.');
    }

    // Method untuk menghapus kategori
    public function destroy(Kategori $kategori) 
    {
        if ($kategori->file) {
            Storage::delete('public/' . $kategori->file);
        }

        $kategori->delete(); 

        return redirect()->route('kategoris.index')
                         ->with('success', 'Kategori berhasil dihapus.');
    }
}
