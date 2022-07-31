<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;


class WebsiteController extends Controller
{
    public function index(){

        $website=Website::get();
        return view('admin.website.index',compact('website'));
    }

    public function store(Request $request){

        $validatedData=$request->validate([

        'website_name_en' => 'required|max:300|min:2',
        'website_name_bn' => 'required|max:300|min:2',
        'website_link' => 'required|max:300|min:2',
        'status' => 'required',


        ]);

         $website=new Website;
         $website->website_name_en=$request->website_name_en;
         $website->website_name_bn=$request->website_name_bn;
         $website->website_link=$request->website_link;
         $website->status=$request->status;
     
        $website->save();
        Toastr::success('website successfully Saved:','success');
        return redirect()->route('website.index');

    }


   



    public function destroy($id){

        $website=Website::find($id);
        $website->delete();
        return redirect()->route('website.index');
    }

    public function unactive($id){

        $website=Website::where('id',$id)
            ->update(['status'=>0]);

        return redirect()->route('website.index');

    }

    public function active($id){
        $website=Website::where('id',$id)
            ->update(['status'=>1]);

        return redirect()->route('website.index');
        
    }
}
