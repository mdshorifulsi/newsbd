<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class NoticeController extends Controller
{
    public function index(){

        $notice=Notice::get();
        return view('admin.notice.index',compact('notice'));
    }

    public function store(Request $request){

        $validatedData=$request->validate([

        'notice_en' => 'required|max:300|min:2',
        'notice_bn' => 'required|max:300|min:2',
        'status' => 'required',


        ]);

         $notice=new Notice;
         $notice->notice_en=$request->notice_en;
         $notice->notice_bn=$request->notice_bn;
         $notice->status=$request->status;
     
        $notice->save();
        Toastr::success('notice successfully Saved:','success');
        return redirect()->route('notice.index');

    }

    public function destroy($id){

        $notice=Notice::find($id);
        $notice->delete();
        return redirect()->route('notice.index');
    }

    public function unactive($id){

        $notice=Notice::where('id',$id)
            ->update(['status'=>0]);

        return redirect()->route('notice.index');

    }

    public function active($id){
        $notice=Notice::where('id',$id)
            ->update(['status'=>1]);

        return redirect()->route('notice.index');
        
    }
}
