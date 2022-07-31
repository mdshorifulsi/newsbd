<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class DistrictController extends Controller
{
    

    public function index(){

        $district=District::get();
        return view('admin.district.index',compact('district'));


    }

    public function store(Request $request){

         $validatedData=$request->validate([

        'district_bn' => 'required|max:300|min:2',
        'district_en' => 'required|max:300|min:2',


        ]);

         $district=new District;
         $district->district_bn=$request->district_bn;
         $district->district_en=$request->district_en;
         $district->dis_bn_slug = Str::slug($district->district_bn);
         $district->dis_en_slug = Str::slug($district->district_en);
        $district->save();
        Toastr::success('district successfully Saved:','success');
        return redirect()->route('district.index');


    }

    public function destroy($id){


        $district=District::find($id);
        $district->delete();
          
       Toastr::error('district delete successfully:','deleted');
        return redirect()->route('district.index');

    }
}
