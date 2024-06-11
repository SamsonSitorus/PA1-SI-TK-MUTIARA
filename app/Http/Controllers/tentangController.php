<?php

namespace App\Http\Controllers;

use App\Models\tentang;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\jumlah_siswa;

class tentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $gurus = Guru::all();
            $jumlahSiswas = Jumlah_siswa::all(); 
            $title = 'TK Mutiara Balige ';
            $author = 'Kelompok 10';
            return view('tentang',compact('gurus','jumlahSiswas','title','author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function show(tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function edit(tentang $tentang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tentang $tentang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function destroy(tentang $tentang)
    {
        //
    }
}
