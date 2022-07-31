<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhotoGallery;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class PhotoGalleryController extends Controller
{
    public function index(){

        $Photogallery=PhotoGallery::latest()->get();
        return view('admin.photo.index',compact('Photogallery'));
    }

    public function create(){

        return view('admin.photo.create');
    }

    public function store(Request $request){

        $Photogallery=new PhotoGallery;
        $Photogallery->title_en=$request->title_en;
        $Photogallery->title_bn=$request->title_bn;
        $Photogallery->type=$request->type;

         if($request->hasFile('photo')){
            $file=$request->file('photo');
            $name=rand(11111,99999).'.'.$file->getClientOriginalExtension();
            $Photogallery->photo=$request->file('photo')->move("storage/images/gallery",$name);

        $Photogallery->save();
        Toastr::success('Photogallery successfully Saved:','success');
        return redirect()->route('photo.index');
       
}

    }

    public function destroy($id){

        $Photogallery=PhotoGallery::find($id);
        $photo=$Photogallery->photo;

            if(!is_null($Photogallery)){
                $Photogallery->delete();
            }

        unlink($photo);
        return redirect()->route('photo.index');




    }

}
