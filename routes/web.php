<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// handding login
Route::group(['prefix' => 'cw-admin', 'middleware' => 'CheckLogin'], function(){
    Route::get('/dang-nhap', 'CWadmin\LoginController@index')->name('login');
    Route::post('/dang-nhap', 'CWadmin\LoginController@postlogin')->name('postlogin');
});



// handding admin
Route::group(['prefix' => 'cw-admin', 'middleware' => 'CheckAdmin'], function() {

	//cw-admin/
	Route::get('/', 'CWadmin\DashboardController@index')->name('home');

    // đăng xuất 
    Route::get('/dang-xuat', 'CWadmin\LoginController@logout')->name('logout');
    Route::post('/dang-xuat', 'CWadmin\LoginController@postout')->name('postout');


    //cw-admin/bai-viet
    Route::group(['prefix' => 'bai-viet'], function() 
    {
        Route::get('/', 'CWadmin\PostsController@index');
        Route::get('/chinh-bai-viet/{id}', 'CWadmin\PostsController@edit');
    });

    //cw-admin/danh-sach
    Route::group(['prefix' => 'danh-sach'], function() 
    {
        Route::get('/', 'CWadmin\CategoryController@index');
    });

    // thư viện hình ảnh
    Route::group(['prefix' => 'thu-vien-hinh'], function() 
    {
        Route::get('/', 'CWadmin\ImagesController@index');
    });

    // người dùng
    Route::group(['prefix' => 'nguoi-dung'], function() 
    {
        Route::get('/', 'CWadmin\ImagesController@index');
    });
});


// vuejs 
Route::get('/','Template\HomeController@index');
Route::get('/post/','Template\HomeController@index');
Route::get('/{slug}','Template\HomeController@detail');