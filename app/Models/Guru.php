<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 class Guru extends Model
    {
        use HasFactory;
        protected $table = 'gurus'; // Pastikan nama tabel sesuai dengan migrasi
        protected $fillable = [
            'image',
            'name',
            'alamat',
            'no_telp',
            'jeniskelamin',
        ];
    }
