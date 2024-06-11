<?php
namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Untuk logging kesalahan
use Illuminate\Validation\ValidationException; // Untuk menangani kesalahan validasi

class GuruController extends Controller
{
    public function index()
    {
        $gurus = guru::all(); // Mendapatkan semua data Prestasi

        return view('dashboard.guru.index', [
            'title' => 'TK Mutiara | Guru',
            'author' => 'Kelompok 10',
            'gurus' => $gurus,
        ]);
    }

    public function create()
    {
        return view('dashboard.guru.create', [
            'title' => 'TK Mutiara | Tambah Guru',
            'author' => 'Kelompok 10',
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|min:12|max:15|regex:/^\d+$/|unique:gurus,no_telp', // Nomor telepon unik
            'jeniskelamin' => 'required|in:laki-laki,perempuan',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        try {
            $guru = new Guru();
            $guru->name = $validated['name'];
            $guru->alamat = $validated['alamat'];
            $guru->no_telp = $validated['no_telp'];
            $guru->jeniskelamin = $validated['jeniskelamin'];
    
            if ($request->hasFile('image')) {
                $gambarNama = $request->file('image')->getClientOriginalName();
                // Simpan gambar ke folder public/guruu
                $gambarPath = $request->file('image')->move(public_path('guruu'), $gambarNama);
                $guru->image = $gambarNama;
            }
    
            $guru->save();
    
            return redirect()->route('guru.index')->with('success', 'Data Guru berhasil ditambahkan.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Cek apakah kode error adalah 1062 dan pesan error mengandung 'gurus_no_telp_unique'
            if ($e->errorInfo[1] == 1062 && strpos($e->getMessage(), 'gurus_no_telp_unique') !== false) {
                return back()->withErrors(['no_telp' => 'Nomor telepon sudah ada.'])->withInput();
            } else {
                return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
            }
        }
    }
    
    public function edit(Guru $guru)
    {
        return view('dashboard.guru.edit', [
            'title' => 'TK Mutiara | Edit Guru',
            'author' => 'Kelompok 10',
            'guru' => $guru,
        ]);
    }
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|min:12|max:15,',
            'jeniskelamin' => 'required|in:laki-laki,perempuan',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        try {
            $guru = Guru::findOrFail($id);
            $guru->name = $validated['name'];
            $guru->alamat = $validated['alamat'];
            $guru->no_telp = $validated['no_telp'];
            $guru->jeniskelamin = $validated['jeniskelamin'];
    
            if ($request->hasFile('image')) {
                if ($guru->image) {
                    // Get the old image path
                    $oldImagePath = 'public/guruu/' . $guru->image;
    
                    // Delete the old image from storage
                    Storage::delete($oldImagePath);
                }
    
                // Get the original file name of the uploaded image
                $gambarNama = $request->file('image')->getClientOriginalName();
    
                // Save the new image to the specified directory
                $gambarPath = $request->file('image')->move(public_path('guruu'), $gambarNama);
    
                // Update the image attribute of the $guru model
                $guru->image = $gambarNama;
            }
    
            $guru->save(); // Simpan entitas yang diperbarui
    
            return redirect()->route('guru.index')->with('success', 'Data Guru berhasil diperbarui.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Cek apakah kode error adalah 1062 dan pesan error mengandung 'gurus_no_telp_unique'
            if ($e->errorInfo[1] == 1062 && strpos($e->getMessage(), 'gurus_no_telp_unique') !== false) {
                return back()->withErrors(['no_telp' => 'Nomor telepon sudah ada.'])->withInput();
            } else {
                return back()->withErrors(['error' => 'Terjadi kesalahan.'])->withInput();
            }
        }
    }
    public function destroy(int $id)
    {
        try {
            $guru = Guru::findOrFail($id); // Cari guru dengan ID

            if ($guru->image) {
                Storage::delete('public/' . $guru->image); // Hapus gambar
            }

            $guru->delete(); // Hapus entitas

            return redirect()->route('guru.index')->with('success', 'Data Guru berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menghapus guru: ' . $e->getMessage()); // Simpan log kesalahan
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus data.']); // Pesan kesalahan umum
        }
    }
}
