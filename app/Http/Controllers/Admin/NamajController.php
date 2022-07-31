<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\Namaj;

class NamajController extends Controller
{
     public function namaj(){
        
        $namaj=DB::table('namajs')->first();
        return view('admin.namaj.namaj',compact('namaj'));
    }


    public function update(Request $request,$id){

        $namaj=Namaj::find($id);
        
            $namaj->fojor=$request->fojor;
            $namaj->johor=$request->johor;
            $namaj->asor=$request->asor;
            $namaj->magrib=$request->magrib;
            $namaj->esha=$request->esha;
            $namaj->jummah=$request->jummah;
          
            $namaj->save();

            Toastr::success('namaj Time Update successfully !! :','success');
                return redirect()->route('namaj');
    }

}
