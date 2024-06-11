<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasis'; // Pastikan nama tabel sesuai dengan migrasi
    protected $fillable = [
        'image',
        'title',
        'content',
        'url',
        'date',
    ];
}
