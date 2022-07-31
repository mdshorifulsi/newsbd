<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;


     protected $fillable = [
        'category_id',
        'subcatname_bn',
        'subcatname_en',
        'subcat_bn_slug',
        'subcat_en_slug',
        'status',
      
    ];



     public function category(){
      
           return $this->belongsTo('App\Models\Category');
       }
}
