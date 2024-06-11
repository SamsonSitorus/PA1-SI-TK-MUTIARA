<?php

namespace App\Http\Controllers;

use App\Models\jumlah_siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class JumlahsiswaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahSiswas = Jumlah_siswa::all(); // Retrieve all records
        $jumlahSiswaCount = $jumlahSiswas->count();
    
        return view('dashboard.jumlah.index', [
            'title' => 'TK Mutiara | Jumlah',
            'author' => 'Kelompok 10',
            
            'jumlahSiswas' => $jumlahSiswas,
            'jumlahSiswaCount' => $jumlahSiswaCount,
        ]);
    }     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Jumlah_siswa::count() >= 1) {
            return redirect()->route('jumlah.index')
                ->with('error', 'Anda hanya dapat membuat maksimal 1 data jumlah siswa.');
        }
        return view('dashboard.jumlah.create', [
            'title' => 'TK Mutiara | Tambah Jumlah Siswa',
            'author' => 'Kelompok 10',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Jumlah_siswa::count() >= 1) {
            return redirect()->route('jumlah.index')
                ->with('error', 'Anda hanya dapat membuat maksimal 1 data jumlah siswa.');
        }
        try {
            $validated = $request->validate([
                'kelasA' => 'required|integer',
                'kelasB' => 'required|integer',
                'kelasC' => 'required|integer',
                'kelasD' => 'required|integer',
                'kelasE' => 'required|integer',
            ]);

            $jumlahSiswa = new Jumlah_siswa(); // Create a new instance
            $jumlahSiswa->fill($validated);

            $jumlahSiswa->save(); // Save to database

            return redirect()->route('jumlah.index')->with('success', 'Data Jumlah Siswa berhasil ditambahkan.');
        } catch (ValidationException $e) {
            Log::error('Validasi gagal: ' . json_encode($e->errors())); // Log validation errors
            return back()->withErrors($e->errors())->withInput(); // Return with errors and input
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menyimpan data Jumlah Siswa: ' . $e->getMessage()); // Log other errors
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.']); // General error message
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  JumlahSiswa  $jumlahSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jumlahSiswa = Jumlah_siswa::findOrFail($id);
        return view('dashboard.jumlah.edit', [
            'title' => 'TK Mutiara | Edit Jumlah Siswa',
            'author' => 'Kelompok 10',
            'jumlahSiswa' => $jumlahSiswa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'kelasA' => 'required|integer',
                'kelasB' => 'required|integer',
                'kelasC' => 'required|integer',
                'kelasD' => 'required|integer',
                'kelasE' => 'required|integer',
            ]);

            $jumlahSiswa = Jumlah_siswa::findOrFail($id); // Find the record by ID
            $jumlahSiswa->fill($validated);

            $jumlahSiswa->save(); // Save the updated record

            return redirect()->route('jumlah.index')->with('success', 'Data Jumlah Siswa berhasil diperbarui.');
        } catch (ValidationException $e) {
            Log::error('Validasi gagal saat update: ' . json_encode($e->errors())); // Log validation errors
            return back()->withErrors($e->errors())->withInput(); // Return with errors and input
        } catch (\Exception $e) {
            Log::error('Kesalahan saat memperbarui data Jumlah Siswa: ' . $e->getMessage()); // Log other errors
            return back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data.']); // General error message
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $jumlahSiswa = Jumlah_siswa::findOrFail($id); // Find the record by ID
            $jumlahSiswa->delete(); // Delete the record

            return redirect()->route('jumlah.index')->with('success', 'Data Jumlah Siswa berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menghapus Data Siswa: ' . $e->getMessage()); // Log errors
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus data.']); // General error message
        }
    }
}


