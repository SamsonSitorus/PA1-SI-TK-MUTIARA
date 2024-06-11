<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;

class pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $fillable = ['title', 'content', 'file'];


}
