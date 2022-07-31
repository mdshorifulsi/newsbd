<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\District;
use App\Models\SubDistrict;
use App\Models\Post;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use DB;


class SinglePostController extends Controller
{
    public function singlepost($id){

        $singlepost=Post::find($id);
        return view('frontend.singlepost',compact('singlepost'));

    }

    public function subcat_posts($id){

        $subcat_posts=Post::where('subcategory_id',$id)->simplePaginate(3);
        return view('frontend.subcat_posts',compact('subcat_posts'));

    }


     public function view_catpost($id){

        $cat_posts=Post::where('category_id',$id)->simplePaginate(3);
        return view('frontend.category_posts',compact('cat_posts'));

    }
 

}
