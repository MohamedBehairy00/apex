<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_details extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'desc',
        'sub_section_id',
        'sections_id',
    ];

}
