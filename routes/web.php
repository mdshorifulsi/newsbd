<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// language
Route::group(['namespace'=>'App\Http\Controllers\Frontend'],function(){
    Route::get('/language/english', 'LanguageController@english')->name('lang.english');
    Route::get('/language/bangla', 'LanguageController@bangla')->name('lang.bangla');
        
    
    });



Route::group(['namespace'=>'App\Http\Controllers\Frontend'],function(){

    Route::get('/view-post/{id}', 'SinglePostController@singlepost');
    Route::get('/subcat_posts/{id}', 'SinglePostController@subcat_posts');

    Route::get('/view-catpost/{id}', 'SinglePostController@view_catpost');
    
        
    
    });