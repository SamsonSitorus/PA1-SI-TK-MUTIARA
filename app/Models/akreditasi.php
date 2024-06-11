<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akreditasi extends Model
{
    use HasFactory;
    protected $table = 'akreditasi'; // Specify the table name if it differs from the default naming convention
    protected $fillable = ['grade','pihak','date','nilai_isi','nilai_kelulusan','nilai_proses','nilai_pendidikan',
    'nilai_prasarana','nilai_pengelola','nilai_pembiayaan','total'];
    
}
