<?php

use Illuminate\Support\Facades\Route;





Route::get('/dashboard',[App\Http\Controllers\AdminController::class, 'admin'])->name('admin.dashboard')->middleware('is_admin');



Route::group(['namespace'=>'App\Http\Controllers\Admin','middleware'=>'is_admin'],function(){
	
// Category Route
	
	Route::group(['prefix'=>'category'],function(){
		Route::get('/', 'CategoryController@index')->name('category.index');
		Route::post('/store', 'CategoryController@store')->name('category.store');
		Route::get('/delete{id}', 'CategoryController@destroy')->name('category.delete');
		Route::get('/edit/{id}', 'CategoryController@edit');
		Route::post('/update', 'CategoryController@update')->name('category.update');

	});


	Route::group(['prefix'=>'subcategory'],function(){
		Route::get('/', 'SubCategoryController@index')->name('subcategory.index');
		Route::post('/store', 'SubCategoryController@store')->name('subcategory.store');
		Route::get('/delete{id}', 'SubCategoryController@destroy')->name('subcategory.delete');
		// Route::get('/edit/{id}', 'SubCategoryController@edit');
		// Route::post('/update', 'SubCategoryController@update')->name('subcategory.update');

	});

	Route::group(['prefix'=>'district'],function(){
		Route::get('/', 'DistrictController@index')->name('district.index');
		Route::post('/store', 'DistrictController@store')->name('district.store');
		Route::get('/delete{id}', 'DistrictController@destroy')->name('district.delete');
		// Route::get('/edit/{id}', 'DistrictController@edit');
		// Route::post('/update', 'DistrictController@update')->name('district.update');

	});

	Route::group(['prefix'=>'subdistrict'],function(){
		Route::get('/', 'SubDistrictController@index')->name('subdistrict.index');
		Route::post('/store', 'SubDistrictController@store')->name('subdistrict.store');
		Route::get('/delete{id}', 'SubDistrictController@destroy')->name('subdistrict.delete');
		// Route::get('/edit/{id}', 'SubDistrictController@edit');
		// Route::post('/update', 'SubDistrictController@update')->name('subdistrict.update');

	});

	Route::group(['prefix'=>'post'],function(){
		Route::get('/', 'PostController@index')->name('post.index');
		Route::get('/create', 'PostController@create')->name('post.create');
		Route::post('/store', 'PostController@store')->name('post.store');

		Route::get('/edit{id}', 'PostController@edit')->name('post.edit');
		Route::post('/update{id}', 'PostController@update')->name('post.update');

		Route::get('/delete{id}', 'PostController@destroy')->name('post.delete');
		Route::get('get/subcategory/{category_id}', 'PostController@getsubcategory');
		Route::get('get/subdistrict/{district_id}', 'PostController@getsubdistrict');

	});


	Route::group(['prefix'=>'social'],function(){
		Route::get('/', 'SociallinkController@social')->name('social');
		Route::post('/update{id}', 'SociallinkController@update')->name('social.update');

	

	});


	Route::group(['prefix'=>'seo'],function(){
		Route::get('/', 'SeoController@social')->name('seo');
		Route::post('/update{id}', 'SeoController@update')->name('seo.update');

	

	});

	Route::group(['prefix'=>'namaj'],function(){
		Route::get('/', 'NamajController@namaj')->name('namaj');
		Route::post('/update{id}', 'NamajController@update')->name('namaj.update');

	

	});

	Route::group(['prefix'=>'livetv'],function(){
		Route::get('/', 'LiveTvController@livetv')->name('livetv');
		Route::post('/update{id}', 'LiveTvController@update')->name('livetv.update');

		Route::get('/unactive{id}','LiveTvController@unactive')->name('livetv.unactive');
		Route::get('/active{id}','LiveTvController@active')->name('livetv.active');

	

	});


	
Route::group(['prefix'=>'notice'],function(){
		Route::get('/', 'NoticeController@index')->name('notice.index');

		Route::post('/store', 'NoticeController@store')->name('notice.store');
		Route::get('/delete{id}', 'NoticeController@destroy')->name('notice.delete');

		Route::get('/notice_unactive{id}','NoticeController@unactive')->name('notice_unactive');
		Route::get('/notice_active{id}','NoticeController@active')->name('notice_active');
		// Route::get('/edit/{id}', 'NoticeController@edit');
		// Route::post('/update', 'NoticeController@update')->name('notice.update');

	});


Route::group(['prefix'=>'website'],function(){
		Route::get('/', 'WebsiteController@index')->name('website.index');

		Route::post('/store', 'WebsiteController@store')->name('website.store');
		Route::get('/delete{id}', 'WebsiteController@destroy')->name('website.delete');

		Route::get('/unactive{id}','WebsiteController@unactive')->name('unactive');
		Route::get('/active{id}','WebsiteController@active')->name('active');
		// Route::get('/edit/{id}', 'WebsiteController@edit')->name('website.edit');
		// Route::post('/update', 'WebsiteController@update')->name('website.update');

	});

Route::group(['prefix'=>'photo'],function(){

		Route::get('/', 'PhotoGalleryController@index')->name('photo.index');
		Route::get('/create', 'PhotoGalleryController@create')->name('photo.create');
		Route::post('/store', 'PhotoGalleryController@store')->name('photo.store');
		Route::get('/delete{id}', 'PhotoGalleryController@destroy')->name('photo.delete');

		// Route::get('/edit/{id}', 'PhotoGalleryController@edit');
		// Route::post('/update', 'PhotoGalleryController@update')->name('photo.update');

	});

	




	




	



		

	});