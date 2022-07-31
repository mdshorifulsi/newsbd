<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\LiveTv;

class LiveTvController extends Controller
{
     public function livetv(){
        
        $livetv=LiveTv::first();
        return view('admin.livetv.index',compact('livetv'));
    }

     public function update(Request $request,$id){

        $livetv=LiveTv::find($id);
        
            $livetv->embed_code=$request->embed_code;
            $livetv->status=$request->status;
        
          
            $livetv->save();

            Toastr::success('live Tv Update successfully !! :','success');
                return redirect()->route('livetv');
    }


     public function unactive($id){

        $livetv=LiveTv::where('id',$id)
            ->update(['status'=>0]);
        Toastr::success('live Tv Active successfully !! :','success');
        return redirect()->route('livetv');

    }

    public function active($id){
        $livetv=LiveTv::where('id',$id)
            ->update(['status'=>1]);
        Toastr::error('live Tv Unactive successfully !! :','success');
       return redirect()->route('livetv');
        
    }

}
