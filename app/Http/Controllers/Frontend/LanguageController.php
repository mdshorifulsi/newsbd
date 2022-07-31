<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class LanguageController extends Controller
{
    public function english(){
        Session::get('lang');
        Session::forget('lang');
        Session::put('lang','english');
        return redirect()->back();



    }

    public function bangla(){

        Session::get('lang');
        Session::forget('lang');
        Session::put('lang','bangla');
        return redirect()->back();

        
    }
}
