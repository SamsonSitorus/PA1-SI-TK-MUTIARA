<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $table = 'gallery';
    protected $fillable = [
        'image',
        'title',
        'content',
        'url',
    ];
}
