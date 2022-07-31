<?php

namespace App\Http\Controllers\Admin;

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
use Auth;

class PostController extends Controller
{
     public function index(){

        $category=Category::get();
        $subcategory=SubCategory::get();
        $district=District::get();
        $subdistrict=SubDistrict::get();
        $post=Post::latest()->get();

        return view('admin.post.index',compact('category','subcategory','district','subdistrict','post'));


    }


     public function create(){

        $category=Category::get();
        $subcategory=SubCategory::get();
        $district=District::get();
        $subdistrict=SubDistrict::get();
        return view('admin.post.create',compact('category','subcategory','district','subdistrict'));
    }


    public function store(Request $request){

        $post=new Post;
        $post->category_id=$request->category_id;
        $post->subcategory_id=$request->subcategory_id;
        $post->district_id=$request->district_id;
        $post->subdistrict_id=$request->subdistrict_id;
        $post->title_bn=$request->title_bn;
        $post->title_en=$request->title_en;
        $post->details_bn=$request->details_bn;
        $post->details_en=$request->details_en;
        $post->tags_bn=$request->tags_bn;
        $post->tags_en=$request->tags_en;
        $post->headline=$request->headline;
        $post->first_section=$request->first_section;
        $post->first_section_thumbnail=$request->first_section_thumbnail;
        $post->big_thumbnail=$request->big_thumbnail;
        $post->status=$request->status;

        $post->user_id=Auth::id();
        $post->post_date=date('d-m-Y');
        $post->post_month=date("F");

      

         if($request->hasFile('image')){
            $file=$request->file('image');
            $name=rand(11111,99999).'.'.$file->getClientOriginalExtension();
            $post->image=$request->file('image')->move("storage/images/postimages",$name);

        $post->save();
        Toastr::success('post successfully Saved:','success');
        return redirect()->route('post.index');
       
}


    }

    public function edit($id){

        $post=Post::find($id);

        $category=Category::get();
        $subcategory=SubCategory::get();
        $district=District::get();
        $subdistrict=SubDistrict::get();
        

       return view('admin.post.edit',compact('category','subcategory','district','subdistrict','post'));
      


    }

    public function update(Request $request,$id){

        $post=Post::find($id);

        $post->category_id=$request->category_id;
        $post->subcategory_id=$request->subcategory_id;
        $post->district_id=$request->district_id;
        $post->subdistrict_id=$request->subdistrict_id;
        $post->title_bn=$request->title_bn;
        $post->title_en=$request->title_en;
        $post->details_bn=$request->details_bn;
        $post->details_en=$request->details_en;
        $post->tags_bn=$request->tags_bn;
        $post->tags_en=$request->tags_en;
        $post->headline=$request->headline;
        $post->first_section=$request->first_section;
        $post->first_section_thumbnail=$request->first_section_thumbnail;
        $post->big_thumbnail=$request->big_thumbnail;
        $post->status=$request->status;

        $post->user_id=Auth::id();
        $post->post_date=date('d-m-Y');
        $post->post_month=date("F");

      

         if($request->hasFile('image')){
            $file=$request->file('image');
            $name=rand(11111,99999).'.'.$file->getClientOriginalExtension();
            $post->image=$request->file('image')->move("storage/images/postimages",$name);

        $post->save();
        Toastr::success('post Edit successfully :','success');
        return redirect()->route('post.index');
       
}



    }

     public function destroy($id){

        $post=Post::find($id);
        $image=$post->image;

            if(!is_null($post)){
                $post->delete();
            }

    unlink($image);
       
        return redirect()->route('post.index');


    }


    


     // json data return

    public function getsubcategory($category_id){

    

    $subcategory=DB::table('sub_categories')->where('category_id',$category_id)->get();
        return response()->json($subcategory);

   


    }


      public function getsubdistrict($district_id){

    

        $subdistrict=DB::table('sub_districts')->where('district_id',$district_id)->get();
        return response()->json($subdistrict);

   


    }


}
