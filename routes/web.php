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

/*
Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){
Route::get('/','DashBoardController@index');
});*/

//home
Route::get('/','HomeController@index');


//Auth
Auth::routes();
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


//front office 
Route::get('/book/','BookController@index');
Route::get('/book/finish/{id}','BookController@book')->name('book.finish');
Route::post('/book/finish/','BookController@store')->name('book.store');
Route::get('/contact/','ContactController@index')->name('contact.send');
Route::post('/contact/','ContactController@contact');
Route::get('/product/','ProductController@index');
Route::get('/user/index','\App\Http\Controllers\admin\UserController@index');

//kitchen
Route::get('/kitchen/create','\App\Http\Controllers\admin\KitchenController@create');
Route::post('/kitchen/store','\App\Http\Controllers\admin\KitchenController@store')->name('kitchen.store');
Route::get('/kitchen/delete/{id}','\App\Http\Controllers\admin\KitchenController@destroy')->name('kitchen.destroy');
Route::get('/kitchen/edit/{id}','\App\Http\Controllers\admin\KitchenController@edit')->name('kitchen.edit');;
Route::post('/kitchen/update/{id}','\App\Http\Controllers\admin\KitchenController@update')->name('kitchen.update');
Route::get('/kitchen/index','\App\Http\Controllers\admin\KitchenController@index');

//addons
Route::get('/addons/create','\App\Http\Controllers\admin\AddonsController@create');
Route::post('/addons/store','\App\Http\Controllers\admin\AddonsController@store')->name('addons.store');
Route::get('/addons/delete/{id}','\App\Http\Controllers\admin\AddonsController@destroy')->name('addons.destroy');
Route::get('/addons/edit/{id}','\App\Http\Controllers\admin\AddonsController@edit')->name('addons.edit');;
Route::post('/addons/update/{id}','\App\Http\Controllers\admin\AddonsController@update')->name('addons.update');
Route::get('/addons/index','\App\Http\Controllers\admin\AddonsController@index');

//customer
Route::get('/customer/create','\App\Http\Controllers\admin\CustomerController@create');
Route::post('/customer/store','\App\Http\Controllers\admin\CustomerController@store')->name('customer.store');
Route::get('/customer/delete/{id}','\App\Http\Controllers\admin\CustomerController@destroy')->name('customer.destroy');
Route::get('/customer/edit/{id}','\App\Http\Controllers\admin\CustomerController@edit')->name('customer.edit');;
Route::post('/customer/update/{id}','\App\Http\Controllers\admin\CustomerController@update')->name('customer.update');
Route::get('/customer/index','\App\Http\Controllers\admin\CustomerController@index');

//foodtype
Route::get('/foodtype/create','\App\Http\Controllers\admin\FoodTypeController@create');
Route::post('/foodtype/store','\App\Http\Controllers\admin\FoodTypeController@store')->name('foodtype.store');
Route::get('/foodtype/delete/{id}','\App\Http\Controllers\admin\FoodTypeController@destroy')->name('foodtype.destroy');
Route::get('/foodtype/edit/{id}','\App\Http\Controllers\admin\FoodTypeController@edit')->name('foodtype.edit');;
Route::post('/foodtype/update/{id}','\App\Http\Controllers\admin\FoodTypeController@update')->name('foodtype.update');
Route::get('/foodtype/index','\App\Http\Controllers\admin\FoodTypeController@index');

//ingredients
Route::get('/ingredients/create','\App\Http\Controllers\admin\IngredientsController@create');
Route::post('/ingredients/store','\App\Http\Controllers\admin\IngredientsController@store')->name('ingredients.store');
Route::get('/ingredients/delete/{id}','\App\Http\Controllers\admin\IngredientsController@destroy')->name('ingredients.destroy');
Route::get('/ingredients/edit/{id}','\App\Http\Controllers\admin\IngredientsController@edit')->name('ingredients.edit');;
Route::post('/ingredients/update/{id}','\App\Http\Controllers\admin\IngredientsController@update')->name('ingredients.update');
Route::get('/ingredients/index','\App\Http\Controllers\admin\IngredientsController@index');

//merchant
Route::get('/merchant/create','\App\Http\Controllers\admin\MerchantController@create');
Route::post('/merchant/store','\App\Http\Controllers\admin\MerchantController@store')->name('merchant.store');
Route::get('/merchant/delete/{id}','\App\Http\Controllers\admin\MerchantController@destroy')->name('merchant.destroy');
Route::get('/merchant/edit/{id}','\App\Http\Controllers\admin\MerchantController@edit')->name('merchant.edit');;
Route::post('/merchant/update/{id}','\App\Http\Controllers\admin\MerchantController@update')->name('merchant.update');
Route::get('/merchant/index','\App\Http\Controllers\admin\MerchantController@index')->name('merchant');

//offer
Route::get('/offer/create','\App\Http\Controllers\admin\OfferController@create');
Route::post('/offer/store','\App\Http\Controllers\admin\OfferController@store')->name('offer.store');
Route::get('/offer/delete/{id}','\App\Http\Controllers\admin\OfferController@destroy')->name('offer.destroy');
Route::get('/offer/edit/{id}','\App\Http\Controllers\admin\OfferController@edit')->name('offer.edit');;
Route::post('/offer/update/{id}','\App\Http\Controllers\admin\OfferController@update')->name('offer.update');
Route::get('/offer/index','\App\Http\Controllers\admin\OfferController@index');

//room
Route::get('/room/create','\App\Http\Controllers\admin\RoomController@create');
Route::post('/room/store','\App\Http\Controllers\admin\RoomController@store')->name('room.store');
Route::get('/room/delete/{id}','\App\Http\Controllers\admin\RoomController@destroy')->name('room.destroy');
Route::get('/room/edit/{id}','\App\Http\Controllers\admin\RoomController@edit')->name('room.edit');;
Route::post('/room/update/{id}','\App\Http\Controllers\admin\RoomController@update')->name('room.update');
Route::get('/room/index','\App\Http\Controllers\admin\RoomController@index');

//size
Route::get('/size/create','\App\Http\Controllers\admin\SizeController@create');
Route::post('/size/store','\App\Http\Controllers\admin\SizeController@store')->name('size.store');
Route::get('/size/delete/{id}','\App\Http\Controllers\admin\SizeController@destroy')->name('size.destroy');
Route::get('/size/edit/{id}','\App\Http\Controllers\admin\SizeController@edit')->name('size.edit');;
Route::post('/size/update/{id}','\App\Http\Controllers\admin\SizeController@update')->name('size.update');
Route::get('/size/index','\App\Http\Controllers\admin\SizeController@index');

//supper
Route::get('/supplier/create','\App\Http\Controllers\admin\SupplierController@create');
Route::post('/supplier/store','\App\Http\Controllers\admin\SupplierController@store')->name('supplier.store');
Route::get('/supplier/delete/{id}','\App\Http\Controllers\admin\SupplierController@destroy')->name('supplier.destroy');
Route::get('/supplier/edit/{id}','\App\Http\Controllers\admin\SupplierController@edit')->name('supplier.edit');;
Route::post('/supplier/update/{id}','\App\Http\Controllers\admin\SupplierController@update')->name('supplier.update');
Route::get('/supplier/index','\App\Http\Controllers\admin\SupplierController@index');

//table
Route::get('/table/create','\App\Http\Controllers\admin\TableController@create');
Route::post('/table/store','\App\Http\Controllers\admin\TableController@store')->name('table.store');
Route::get('/table/delete/{id}','\App\Http\Controllers\admin\TableController@destroy')->name('table.destroy');
Route::get('/table/edit/{id}','\App\Http\Controllers\admin\TableController@edit')->name('table.edit');;
Route::post('/table/update/{id}','\App\Http\Controllers\admin\TableController@update')->name('table.update');
Route::get('/table/index','\App\Http\Controllers\admin\TableController@index');

//table reservation
Route::get('/tablereservation/create','\App\Http\Controllers\admin\TableReservationController@create');
Route::post('/tablereservation/store','\App\Http\Controllers\admin\TableReservationController@store')->name('tablereservation.store');
Route::get('/tablereservation/delete/{id}','\App\Http\Controllers\admin\TableReservationController@destroy')->name('tablereservation.destroy');
Route::get('/tablereservation/edit/{id}','\App\Http\Controllers\admin\TableReservationController@edit')->name('tablereservation.edit');;
Route::post('/tablereservation/update/{id}','\App\Http\Controllers\admin\TableReservationController@update')->name('tablereservation.update');
Route::get('/tablereservation/index','\App\Http\Controllers\admin\TableReservationController@index');

//reporting
Route::get('/reporting/food','\App\Http\Controllers\admin\ReportingController@indexFood');
Route::get('/reporting/order','\App\Http\Controllers\admin\ReportingController@indexOrder');
Route::post('/reporting/food','\App\Http\Controllers\admin\ReportingController@storeFood')->name('reporting.storeFood');
Route::post('/reporting/order','\App\Http\Controllers\admin\ReportingController@storeOrder')->name('reporting.storeOrder');