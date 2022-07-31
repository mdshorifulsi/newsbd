<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Seo;

class SeoController extends Controller
{
    public function social(){
        
        $seo=DB::table('seos')->first();
        return view('admin.seo.seo',compact('seo'));
    }


    public function update(Request $request,$id){

        $seo=Seo::find($id);
            $seo->meta_author=$request->meta_author;
            $seo->meta_title=$request->meta_title;
            $seo->meta_keyword=$request->meta_keyword;
            $seo->meta_description=$request->meta_description;
            $seo->google_analytics=$request->google_analytics;
            $seo->google_verification=$request->google_verification;
            $seo->alexa_analytics=$request->alexa_analytics;


             if($request->hasFile('logo')){
            $file=$request->file('logo');
            $name=rand(11111,99999).'.'.$file->getClientOriginalExtension();
            $seo->logo=$request->file('logo')->move("storage/images/logo",$name);



            $seo->save();

            Toastr::success('seo Update successfully !! :','success');
                return redirect()->route('seo');

}



    }
}
