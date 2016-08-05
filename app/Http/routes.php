<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::auth();

Route::get('/character/create', 'CharacterController@create');

Route::group(['middleware' => 'auth'], function(){
	Route::get('mensk', 'Mensk\MenskController@main');



    /*********************
    * Mensk Shops
    *********************/
    
	// Merchant
	
	Route::get('mensk/merchant', function() {		
	    return App::make('App\Http\Controllers\ShopController')->main(1);
	})->middleware('auth');
	
	Route::get('mensk/merchant/{product_id}', function($product_id) {		
	    return App::make('App\Http\Controllers\ShopController')->purchase(1, $product_id);
	})->middleware('auth');
	
	
	// Blacksmith
	
	Route::get('mensk/blacksmith', function() {		
	    return App::make('App\Http\Controllers\ShopController')->main(2);
	})->middleware('auth');
	
	Route::get('mensk/blacksmith/{product_id}', function($product_id) {		
	    return App::make('App\Http\Controllers\ShopController')->purchase(2, $product_id);
	})->middleware('auth');
	
	
	// Alchemist
	
	Route::get('mensk/alchemist', function() {		
	    return App::make('App\Http\Controllers\ShopController')->main(3);
	})->middleware('auth');
	
	Route::get('mensk/alchemist/{product_id}', function($product_id) {		
	    return App::make('App\Http\Controllers\ShopController')->purchase(3, $product_id);
	})->middleware('auth');
    
    
    
    /*********************
    * Mensk Square
    *********************/
    
    // Castle
    Route::get('mensk/castle', 'Mensk\Castle\CastleController@main');
    
    
    // Library
    
    Route::get('mensk/library', 'Mensk\LibraryController@main');
    Route::get('mensk/library/info', 'Mensk\LibraryController@info');
    Route::get('mensk/library/records', 'Mensk\LibraryController@records');
        Route::get('mensk/library/clans', 'Mensk\LibraryController@clans');
        Route::get('mensk/library/citizens', 'Mensk\LibraryController@citizens');
    
    Route::get('mensk/library/books', 'Mensk\LibraryController@books');
    Route::get('mensk/library/books/{category}', 'Mensk\LibraryController@books');
    Route::get('mensk/library/book/{book_id}', 'Mensk\LibraryController@book');
    
    
    // Bank
    
    Route::get('mensk/bank', 'Mensk\BankController@main');
    Route::get('mensk/bank/inc/coins', 'Mensk\BankController@increaseCoinMax');
    Route::post('mensk/bank/deposit', 'Mensk\BankController@deposit');
    Route::post('mensk/bank/withdraw', 'Mensk\BankController@withdraw');
    
    
    // Notices
    
    Route::get('mensk/notices', 'Mensk\NoticesController@main');
});