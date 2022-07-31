<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class CategoryController extends Controller
{
    public function index(){

         $category=Category::latest()->get();
        return view('admin.category.index',compact('category'));

    }


    public function store(Request $request){


         $validatedData=$request->validate([

        'catname_bn' => 'required|max:300|min:2',
        'catname_en' => 'required|max:300|min:2',


        ]);

         $category=new Category;
         $category->catname_bn=$request->catname_bn;
         $category->catname_en=$request->catname_en;
         $category->cat_bn_slug = Str::slug($category->catname_bn);
         $category->cat_en_slug = Str::slug($category->catname_en);
        $category->save();
        Toastr::success('Category successfully Saved:','success');
        return redirect()->route('category.index');


    }

     public function edit($id){

    // $data=DB::table('categories')->where('id',$id)->first();
        $data=Category::findorfail($id);
    return response()->json($data);

}

public function update(Request $request){


        $category=Category::where('id',$request->id)->first();
        $category->update([
        'catname_bn'=>$request->catname_bn,
        'catname_en'=>$request->catname_en,
        'cat_bn_slug'=>Str::slug($request->catname_bn,'-'),
        'cat_en_slug'=>Str::slug($request->catname_en,'-')


    ]);

        Toastr::success('Category Update successfully :','success');
        return redirect()->route('category.index');
    }


    public function destroy($id){

         $category=Category::find($id);
        $category->delete();
          
       
        return redirect()->route('category.index');

    }


  

    
}
