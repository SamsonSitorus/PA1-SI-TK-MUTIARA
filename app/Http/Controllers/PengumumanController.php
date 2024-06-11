<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengumuman;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumans = pengumuman::all(); // Mengambil semua pengumuman
        return view('dashboard.pengumuman.index', [
            'title' => 'TK Mutiara | Pengumuman',
            'author' => 'Kelompok 10',
            'pengumumans' => $pengumumans,
        ]);
    }
    public function show($id)
{
    $pengumuman = pengumuman::findOrFail($id);
    $title = 'TK Mutiara Balige';
    $author = 'Kelompok 10';

    return view('show5', compact('pengumuman','title','author'));
}
    public function pendaftaran()
    {   
        $pengumumans = pengumuman::all(); // Mendapatkan semua data guru
        $title = 'TK Mutiara Balige';
        $author = 'Kelompok 10';
        
        return view('pendaftaran', compact('title','author','pengumumans'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengumuman.create', [
            'title' => 'TK Mutiara | Tambah Pengumuman',
            'author' => 'Kelompok 10',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:4|max:255',
            'content' => 'required|string|min:8',
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Validasi file dengan mimes
        ]);

        $pengumuman = new pengumuman($validated);

        $gambarNama = $request->file('file')->getClientOriginalName();
            // Simpan gambar ke folder public/img
            $gambarPath = $request->file('file')->move(public_path('pengumuman_files'), $gambarNama);

            // Ambil nama file gambar dengan ekstensinya
            $gambarNama = $request->file('file')->getClientOriginalName();

            $pengumuman->file = $gambarNama;

        $pengumuman->save(); // Simpan entitas baru

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\pengumuman $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(pengumuman $pengumuman)
    {
        return view('dashboard.pengumuman.edit', [
            'title' => 'TK Mutiara | Edit Pengumuman',
            'author' => 'Kelompok 10',
            'pengumuman' => $pengumuman,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\pengumuman $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengumuman $pengumuman)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:4|max:255',
            'content' => 'required|string|min:8', // Validasi harus sama seperti pada `store`
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Validasi tipe file
        ]);

        $pengumuman->fill($validated);

        if ($request->hasFile('file')) {
            if ($pengumuman->file) {
                // Get the old file path
                $oldfilePath = 'public/pengumuman_files/' . $pengumuman->file;

                // Delete the old file from storage
                Storage::delete($oldfilePath);
            }

            // Get the original file name of the uploaded file
            $gambarNama = $request->file('file')->getClientOriginalName();

            // Save the new file to the specified directory
            $gambarPath = $request->file('file')->move(public_path('pengumuman_files'), $gambarNama);

            // Update the file attribute of the $guru model
            $pengumuman->file = $gambarNama;
        }

        $pengumuman->save(); // Simpan perubahan

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\pengumuman $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengumuman $pengumuman)
    {
        if ($pengumuman->file) {
            Storage::delete('public/' . $pengumuman->file); // Hapus file lama
        }

        $pengumuman->delete(); // Hapus entitas

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}
