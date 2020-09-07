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

Route::get('/','HomeController@index');

Auth::routes();

/*
Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){
Route::get('/','DashBoardController@index');
});*/

Route::get('/admin','admin\DashBoardController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//category
Route::get('/category/create','\App\Http\Controllers\admin\CategoryController@create');
Route::post('/category/store','\App\Http\Controllers\admin\CategoryController@store')->name('category.store');
Route::get('/category/delete/{id}','\App\Http\Controllers\admin\CategoryController@destroy')->name('category.destroy');
Route::get('/category/edit/{id}','\App\Http\Controllers\admin\CategoryController@edit')->name('category.edit');;
Route::post('/category/update/{id}','\App\Http\Controllers\admin\CategoryController@update')->name('category.update');
Route::get('/category/index','\App\Http\Controllers\admin\CategoryController@index');

//product
Route::get('/product/create','\App\Http\Controllers\admin\ProductController@create');
Route::post('/product/store','\App\Http\Controllers\admin\ProductController@store')->name('product.store');
Route::get('/product/delete/{id}','\App\Http\Controllers\admin\ProductController@destroy')->name('product.destroy');
Route::get('/product/edit/{id}','\App\Http\Controllers\admin\ProductController@edit')->name('product.edit');;
Route::post('/product/update/{id}','\App\Http\Controllers\admin\ProductController@update')->name('product.update');
Route::get('/product/index','\App\Http\Controllers\admin\ProductController@index');

//message
Route::get('/message/create','\App\Http\Controllers\admin\MessageController@create');
Route::post('/message/store','\App\Http\Controllers\admin\MessageController@store')->name('message.store');
Route::get('/message/delete/{id}','\App\Http\Controllers\admin\MessageController@destroy')->name('message.destroy');
Route::get('/message/edit/{id}','\App\Http\Controllers\admin\MessageController@edit')->name('message.edit');;
Route::post('/message/update/{id}','\App\Http\Controllers\admin\MessageController@update')->name('message.update');
Route::get('/message/index','\App\Http\Controllers\admin\MessageController@index');

//book
Route::get('/comand/create','\App\Http\Controllers\admin\ComandController@create');
Route::post('/comand/store','\App\Http\Controllers\admin\ComandController@store')->name('comand.store');
Route::get('/comand/delete/{id}','\App\Http\Controllers\admin\ComandController@destroy')->name('comand.destroy');
Route::get('/comand/edit/{id}','\App\Http\Controllers\admin\ComandController@edit')->name('comand.edit');;
Route::post('/comand/update/{id}','\App\Http\Controllers\admin\ComandController@update')->name('comand.update');
Route::get('/comand/index','\App\Http\Controllers\admin\ComandController@index');

//slider
Route::get('/slider/create','\App\Http\Controllers\admin\SliderController@create');
Route::post('/slider/store','\App\Http\Controllers\admin\SliderController@store')->name('slider.store');
Route::get('/slider/delete/{id}','\App\Http\Controllers\admin\SliderController@destroy')->name('slider.destroy');
Route::get('/slider/index','\App\Http\Controllers\admin\SliderController@index');


//login
Route::get('login', array('uses' => 'HomeController@showLogin'))->name('login.show');;
Route::get('login', array('uses' => 'HomeController@showLogin'))->name('login');


// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'))->name('login.proccess');;

Route::get('/book/','BookController@index');
Route::get('/book/finish/{id}','BookController@book')->name('book.finish');
Route::post('/book/finish/','BookController@store')->name('book.store');
Route::get('/contact/','ContactController@index')->name('contact.send');
Route::post('/contact/','ContactController@contact');
Route::get('/product/','ProductController@index');
Route::get('/user/index','\App\Http\Controllers\admin\UserController@index');