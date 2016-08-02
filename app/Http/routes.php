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
    return view('index');
});

Route::auth();

Route::get('/character/create', 'CharacterController@create');

Route::group(['middleware' => 'auth'], function(){
	Route::get('mensk', 'Mensk\MenskController@main');
	Route::get('mensk/bank', 'Mensk\BankController@main');
	Route::get('mensk/bank/inc/coins', 'Mensk\BankController@increaseCoinMax');
	Route::post('mensk/bank/deposit', 'Mensk\BankController@deposit');
	Route::post('mensk/bank/withdraw', 'Mensk\BankController@withdraw');	
	
	Route::get('mensk/merchant', function() {		
	    return App::make('App\Http\Controllers\ShopController')->main(1);
	})->middleware('auth');
	
	Route::get('mensk/merchant/{product_id}', function($product_id) {		
	    return App::make('App\Http\Controllers\ShopController')->purchase(1, $product_id);
	})->middleware('auth');
});