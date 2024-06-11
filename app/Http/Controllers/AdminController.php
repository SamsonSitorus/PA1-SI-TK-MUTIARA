<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.index', [
            'title' => "TK Mutiara Balige | Admin",
            'author' => 'Kelompok 10',
            'admins' => User::get()
        ]);
    }

    public function create()
    {
        return view('dashboard.admin.create', [
            'title' => "TK Mutiara Balige| Admin",
            'author' => 'Kelompok 10',
        ]);
    }

    public function store(StoreAdminRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        alert()->success('Buat Data Sukses!', 'Data admin telah ditambahkan.');

        return redirect('/dashboard/admin');
    }
}
