<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\SubDistrict;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class SubDistrictController extends Controller
{
    
    public function index(){

        $district=District::get();
        $subdistrict=SubDistrict::get();

        return view('admin.subdistrict.index',compact('subdistrict','district'));
    }


    public function store(Request $request){

        

        $subdistrict=new SubDistrict;
         $subdistrict->district_id=$request->district_id;
       

         $subdistrict->subdisname_bn=$request->subdisname_bn;
         $subdistrict->subdisname_en=$request->subdisname_en;
         $subdistrict->subdis_bn_slug = Str::slug($subdistrict->subdisname_bn);
         $subdistrict->subdis_en_slug = Str::slug($subdistrict->subdisname_en);
        $subdistrict->save();

        Toastr::success('subdistrict successfully save :','success');
        return redirect()->route('subdistrict.index');
    }

    public function destroy($id){

         $subdistrict=SubDistrict::find($id);
        $subdistrict->delete();
          
       Toastr::error('District delete successfully:','deleted');
        return redirect()->route('subdistrict.index');


    }
}
