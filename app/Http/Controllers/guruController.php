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
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'no_telp' => 'required|string|min:12|max:15|regex:/^\d+$/',
                'jeniskelamin' => 'required|in:laki-laki,perempuan',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);

            $guru = new Guru(); // Buat objek guru baru
            $guru->fill($validated);


            $gambarNama = $request->file('image')->getClientOriginalName();
            // Simpan gambar ke folder public/img
            $gambarPath = $request->file('image')->move(public_path('guruu'), $gambarNama);

            // Ambil nama file gambar dengan ekstensinya
            $gambarNama = $request->file('image')->getClientOriginalName();

            $guru->image = $gambarNama;



            $guru->save(); // Simpan ke database

            return redirect()->route('guru.index')->with('success', 'Data Guru berhasil ditambahkan.');
        } catch (ValidationException $e) {
            Log::error('Validasi gagal: ' . json_encode($e->errors())); // Simpan kesalahan validasi ke log
            return back()->withErrors($e->errors())->withInput(); // Kembalikan ke formulir dengan kesalahan dan input sebelumnya
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menyimpan data guru: ' . $e->getMessage()); // Simpan kesalahan lainnya
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.']); // Pesan kesalahan umum
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
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'no_telp' => 'required|string|min:12|max:15|regex:/^\d+$/',
                'jeniskelamin' => 'required|in:laki-laki,perempuan',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);

            $guru = Guru::findOrFail($id); // Cari entitas guru berdasarkan ID
            $guru->fill($validated);

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

                // Save the updated model to the database
                $guru->save();
            }


            $guru->save(); // Simpan entitas yang diperbarui

            return redirect()->route('guru.index')->with('success', 'Data Guru berhasil diperbarui.');
        } catch (ValidationException $e) {
            Log::error('Validasi gagal saat update: ' . json_encode($e->errors())); // Logging kesalahan validasi
            return back()->withErrors($e->errors())->withInput(); // Kembalikan dengan pesan error dan input
        } catch (\Exception $e) {
            Log::error('Kesalahan saat memperbarui data guru: ' . $e->getMessage()); // Simpan kesalahan lainnya
            return back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data.']); // Pesan kesalahan umum
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
