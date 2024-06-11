<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Gallery;
use App\Models\Guru;
use App\Models\Header;
use App\Models\Kategori;
use App\Models\pengumuman;
use App\Models\Prestasi;
use App\Models\jumlah_siswa;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => "TK Mutiara Balige",
            'author' => "Kelompok 10",
            'fasilitas' => Fasilitas::get(),
            'Gallery' => Gallery::get(),
            'Guru' => Guru::get(),
            'kategori' => Kategori::get(),
            'pengumuman' => pengumuman::latest()->paginate(3),
            'prestasi' => Prestasi::latest()->paginate(3),
            'jumlah_siswa' => jumlah_siswa::get(),
         
        ]);
    }

  
}
