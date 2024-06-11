<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\akreditasi;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
class akreditasiController extends Controller
{
    public function index()
    {
        $akreditasis = Akreditasi::all(); // Retrieve all records
        $akreditasiCount = $akreditasis->count();
    
        return view('dashboard.akreditasi.index', [
            'title' => 'TK Mutiara | Jumlah',
            'author' => 'Kelompok 10',
            'akreditasis' => $akreditasis,
            'akreditasiCount' => $akreditasiCount,
        ]);
    }

    public function create()
    {
        if (Akreditasi::count() >= 1) {
            return redirect()->route('akreditasi.index')
                ->with('error', 'Anda hanya dapat membuat maksimal 1 data.');
        }
        return view('dashboard.akreditasi.create', [
            'title' => 'TK Mutiara | Tambah Akreditasi',
            'author' => 'Kelompok 10',
        ]);
    }

    public function store(Request $request)
    {
        if (Akreditasi::count() >= 1) {
            return redirect()->route('akreditasi.index')
                ->with('error', 'Anda hanya dapat membuat maksimal 1 data.');
        }
        try {
            $validated = $request->validate([
                'grade' => 'required|string|max:255',
                'pihak' => 'required|string|max:255',
                'date' => 'required|date',
                'nilai_isi' => 'required|integer',
                'nilai_kelulusan' => 'required|integer',
                'nilai_proses' => 'required|integer',
                'nilai_pendidikan' => 'required|integer',
                'nilai_prasarana' => 'required|integer',
                'nilai_pengelola' => 'required|integer',
                'nilai_pembiayaan' => 'required|integer',
            ]);

            // Calculate total
            $validated['total'] = $validated['nilai_isi'] + $validated['nilai_kelulusan'] + $validated['nilai_proses'] +
                                  $validated['nilai_pendidikan'] + $validated['nilai_prasarana'] + 
                                  $validated['nilai_pengelola'] + $validated['nilai_pembiayaan'];

            $akreditasi = new Akreditasi(); // Create a new instance
            $akreditasi->fill($validated);
            $akreditasi->save(); // Save to database

            return redirect()->route('akreditasi.index')->with('success', 'Data berhasil ditambahkan.');
        } catch (ValidationException $e) {
            Log::error('Validasi gagal: ' . json_encode($e->errors())); // Log validation errors
            return back()->withErrors($e->errors())->withInput(); // Return with errors and input
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menyimpan data: ' . $e->getMessage()); // Log other errors
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data.']); // General error message
        }
    }

    public function edit($id)
    {
        $akreditasi = Akreditasi::findOrFail($id);
        return view('dashboard.akreditasi.edit', [
            'title' => 'TK Mutiara | Edit Jumlah Siswa',
            'author' => 'Kelompok 10',
            'akreditasi' => $akreditasi,
        ]);
    }
    
    public function profil()
    {   
        $akreditasis = akreditasi::all(); 
        $title = 'TK Mutiara Balige';
        $author = 'Kelompok 10';
        
        return view('profil', compact('title','author','akreditasis'));
    }
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'grade' => 'required|string|max:255',
                'pihak' => 'required|string|max:255',
                'date' => 'required|date',
                'nilai_isi' => 'required|integer',
                'nilai_kelulusan' => 'required|integer',
                'nilai_proses' => 'required|integer',
                'nilai_pendidikan' => 'required|integer',
                'nilai_prasarana' => 'required|integer',
                'nilai_pengelola' => 'required|integer',
                'nilai_pembiayaan' => 'required|integer',
            ]);

            // Calculate total
            $validated['total'] = $validated['nilai_isi'] + $validated['nilai_kelulusan'] + $validated['nilai_proses'] +
                                  $validated['nilai_pendidikan'] + $validated['nilai_prasarana'] + 
                                  $validated['nilai_pengelola'] + $validated['nilai_pembiayaan'];

            $akreditasi = Akreditasi::findOrFail($id); // Find the record by ID
            $akreditasi->fill($validated);
            $akreditasi->save(); // Save the updated record

            return redirect()->route('akreditasi.index')->with('success', 'Data berhasil diperbarui.');
        } catch (ValidationException $e) {
            Log::error('Validasi gagal saat update: ' . json_encode($e->errors())); // Log validation errors
            return back()->withErrors($e->errors())->withInput(); // Return with errors and input
        } catch (\Exception $e) {
            Log::error('Kesalahan saat memperbarui data: ' . $e->getMessage()); // Log other errors
            return back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data.']); // General error message
        }
    }

    public function destroy($id)
    {
        try {
            $akreditasi = Akreditasi::findOrFail($id); // Find the record by ID
            $akreditasi->delete(); // Delete the record

            return redirect()->route('akreditasi.index')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menghapus data: ' . $e->getMessage()); // Log errors
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus data.']); // General error message
        }
    }
}
