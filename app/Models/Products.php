<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'desc',
        'sub_image',
        'sub_image2',
        'sub_title',
        'sub_title2',
        'sub_desc',
        'sub_desc2',
    ];
}
