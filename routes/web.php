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

/*Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){
Route::get('/','DashBoardController@index');
});*/
Route::get('/admin','admin\DashBoardController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//category
Route::get('/category/create','admin\CategoryController@create');
Route::post('/category/store','admin\CategoryController@store')->name('category.store');
Route::get('/category/delete/{id}','admin\CategoryController@destroy')->name('category.destroy');
Route::get('/category/edit/{id}','admin\CategoryController@edit')->name('category.edit');;
Route::post('/category/update/{id}','admin\CategoryController@update')->name('category.update');
Route::get('/category/index','\App\Http\Controllers\admin\CategoryController@index');

//product
Route::get('/product/create','admin\ProductController@create');
Route::post('/product/store','admin\ProductController@store')->name('product.store');
Route::get('/product/delete/{id}','admin\ProductController@destroy')->name('product.destroy');
Route::get('/product/edit/{id}','admin\ProductController@edit')->name('product.edit');;
Route::post('/product/update/{id}','admin\ProductController@update')->name('product.update');
Route::get('/product/index','admin\ProductController@index');

//message
Route::get('/message/create','admin\MessageController@create');
Route::post('/message/store','admin\MessageController@store')->name('message.store');
Route::get('/message/delete/{id}','admin\MessageController@destroy')->name('message.destroy');
Route::get('/message/edit/{id}','admin\MessageController@edit')->name('message.edit');;
Route::post('/message/update/{id}','admin\MessageController@update')->name('message.update');
Route::get('/message/index','admin\MessageController@index');

//book
Route::get('/comand/create','admin\ComandController@create');
Route::post('/comand/store','admin\ComandController@store')->name('comand.store');
Route::get('/comand/delete/{id}','admin\ComandController@destroy')->name('comand.destroy');
Route::get('/comand/edit/{id}','admin\ComandController@edit')->name('comand.edit');;
Route::post('/comand/update/{id}','admin\ComandController@update')->name('comand.update');
Route::get('/comand/index','admin\ComandController@index');


//login
Route::get('login', array('uses' => 'HomeController@showLogin'))->name('login.show');;

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'))->name('login.proccess');;

Route::get('/book/','BookController@index');
Route::get('/contact/','ContactController@index');
Route::get('/product/','ProductController@index');