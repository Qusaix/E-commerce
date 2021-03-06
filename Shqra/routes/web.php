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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('login','dashboardAuth\Auth@login')->name('login');
Route::post('login','dashboardAuth\Auth@login_button')->name('login_now');
Route::post('logout','dashboardAuth\Auth@logout')->name('logout');
Route::get('rigster','dashboardAuth\Auth@rigster')->name('rigster');
Route::post('rigster','dashboardAuth\Auth@rigster_button')->name('rigster.user');




Route::namespace('dashboard')->middleware(['auth','role:admin|company'])->prefix('dashboard')->group(function(){

    Route::get('/','HomeController@index')->name('dashboard.home');

    Route::prefix('ads')->group(function(){
        Route::get('/','AdsController@index')->name('dashboard.ads');
        Route::get('/datatable','AdsController@datatable')->name('dashboard.ads.datatable');
        
        // Create Ads

        Route::get('create','AdsController@create')->name('dashboard.ads.create');
        Route::post('store','AdsController@store')->name('dashboard.ads.store');


        // Edit Ads

        Route::get('edit/{id}','AdsController@edit')->name('dashboard.ads.edit');
        Route::post('update/{id}','AdsController@update')->name('dashboard.ads.update');



    });

    Route::prefix('featured')->group(function(){

        Route::get('/','FeaturedController@index')->name('dashboard.featured');

        // Store Featured Routes
        Route::get('create','FeaturedController@create')->name('dashboard.featured.create');
        Route::post('store','FeaturedController@store')->name('dashboard.featured.store');
        
        // Update Featured Routes
        Route::get('/{id}','FeaturedController@edit')->name('dashboard.featured.edit');
        Route::post('update/{id}','FeaturedController@update')->name('dashboard.featured.update');

        // Delete Featured Routes
        Route::post('delete/{id}','FeaturedController@delete')->name('dashboard.featured.delete');





    });

    Route::prefix('rating')->group(function(){
        
        Route::post('store','RatingController@store')->name('dashboard.rating.store');

    });

    Route::prefix('users')->group(function(){
        Route::get('/','UserController@index')->name('dashboard.users');
        Route::get('/datatable','UserController@datatable')->name('dashboard.users.datatable');

    });

    Route::prefix('vendors')->group(function(){

        Route::get('/','VendorController@index')->name('dashboard.vendors');

    });

    Route::prefix('countdown')->group(function(){

        #Show Countdown Routes
        Route::get('/','CountdownController@index')->name('dashboard.countdown');

        // Update Countdown Routes 
        Route::get('/edit/{id}','CountdownController@edit')->name('dashboard.countdown.edit');
        Route::post('/update/{id}','CountdownController@update')->name('dashboard.countdown.update');


        // Create Countdown Routes
        Route::get('/create','CountdownController@create')->name('dashboard.countdown.create');
        Route::post('/store','CountdownController@store')->name('dashboard.countdown.store');

        // Remove Countdown Routes
        Route::post('/delete/{id}','CountdownController@delete')->name('dashboard.countdown.delete');
        
    });

    Route::prefix('products')->group(function(){
        
        // Show Products Routes
        Route::get('/','ProductsController@index')->name('dashbaord.product');

        // Create Products Routes
        Route::get('/create','ProductsController@create')->name('dashboard.products.create');
        Route::post('/store','ProductsController@store')->name('dashboard.products.store');

        // Update Products Routes
        Route::get('/edit/{id}','ProductsController@edit')->name('dashboard.products.edit');
        Route::post('/update/{id}','ProductsController@update')->name('dashboard.products.update');

        

    });

    Route::prefix('orders')->group(function(){
        
        // Show Orders Routes
        Route::get('/','OrdersController@index')->name('dashboard.orders');
    });


});

Route::namespace('frontend')->group(function(){
    Route::get('/','HomeController@index')->name('home');

    #Product Routes 
    Route::prefix('product')->group(function(){

        Route::get("/{id}",'ProductController@index')->name('products');

    });

    #Categores Routes
    Route::prefix('categores')->group(function(){
        Route::get('/{id?}','CategoresController@index')->name('categores');
    });

    #Cart Routes
    Route::prefix('cart')->middleware(['auth'])->group(function(){

        Route::get('/','CartController@my_cart')->name('cart');

        Route::post('add/{id}','CartController@add_product')->name('add_product_cart');

        Route::post('remove/{cart_id}/{product_id?}','CartController@remove_product')->name('remove_product_cart');

        Route::post('check_out','CartController@check_out')->name('check_out')->middleware('auth');

    });

    #Search Routes
    Route::prefix('search')->group(function(){
        Route::post('/','SearchController@search')->name('search');
    });

   

});

