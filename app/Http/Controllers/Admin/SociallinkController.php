<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Social;
use Brian2694\Toastr\Facades\Toastr;

class SociallinkController extends Controller
{
    public function social(){

        
        $social=DB::table('socials')->first();
       
        return view('admin.sociallink.social')->with('social',$social);
    }

    public function update(Request $request,$id){


            $social=Social::find($id);
            $social->facebook=$request->facebook;
            $social->twitter=$request->twitter;
            $social->youtube=$request->youtube;
            $social->github=$request->github;
            $social->linkedin=$request->linkedin;
            $social->save();

            Toastr::success('social Update successfully !! :','success');
                return redirect()->route('social');

    }
}
