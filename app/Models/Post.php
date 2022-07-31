<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory');
    }



     public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

     public function subdistrict()
    {
        return $this->belongsTo('App\Models\SubDistrict');
    }

     public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
