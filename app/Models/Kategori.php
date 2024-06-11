<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Mass assignment attributes
    protected $fillable = ['name', 'file'];

    // Relasi dengan Fasilitas
    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class, 'kategori_id', 'id');
    }
}
