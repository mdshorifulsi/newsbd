<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

     protected $fillable = [
        'catname_bn',
        'catname_en',
        'cat_bn_slug',
        'cat_en_slug',
        'status',
      
    ];
}
