<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

    use HasFactory;
    protected $fillable = [
        'image',
        'desc',
        'title1' ,
        'desc1' ,
        'title2',
        'desc2',
        'title3',
        'desc3',
        'title4' ,
        'desc4',
        'title5',
        'desc5' ,
     ];

}
