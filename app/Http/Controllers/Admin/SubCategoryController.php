<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class SubCategoryController extends Controller
{
    public function index(){

        $category=Category::get();
        $subcategory=Subcategory::get();

        return view('admin.Subcategory.index',compact('subcategory','category'));
    }

    public function store(Request $request){

         $validatedData=$request->validate([

        'category_id' => 'required',
        'subcatname_bn' => 'required|max:300|min:2',
        'subcatname_en' => 'required|max:300|min:2',


        ]);

        $subcategory=new SubCategory;
         $subcategory->category_id=$request->category_id;
       

         $subcategory->subcatname_bn=$request->subcatname_bn;
         $subcategory->subcatname_en=$request->subcatname_en;
         $subcategory->subcat_bn_slug = Str::slug($subcategory->subcatname_bn);
         $subcategory->subcat_en_slug = Str::slug($subcategory->subcatname_en);
        $subcategory->save();

        Toastr::success('subCategory successfully Saved:','success');
        return redirect()->route('subcategory.index');


    }


    public function destroy($id){

        $subCategory=SubCategory::find($id);
        $subCategory->delete();
          
       Toastr::error('subCategory delete successfully:','deleted');
        return redirect()->route('subcategory.index');

    }
}
