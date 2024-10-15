<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_details_show extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'desc',
        'section_id',
        'section_photo',
        'data_id',
    ];

}
