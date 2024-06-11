<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jumlah_siswa extends Model
{
    use HasFactory;

    protected $table = 'jumlah_siswas'; // Specify the table name if it differs from the default naming convention
    protected $fillable = ['kelasA', 'kelasB', 'kelasC', 'kelasD', 'kelasE'];

}
