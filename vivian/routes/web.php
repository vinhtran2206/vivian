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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
	'as'=>'index',
	'uses'=>'controllerPage@getIndex'
]);

Route::get('collection_women',[
	'as'=>'collection_women',
	'uses'=>'controllerPage@getCollectionWomen'
]);

Route::get('listingMenu',[
	'as'=>'listingMenu',
	'uses'=>'controllerPage@getListingMenu'
]);

/*
Route::get('listing',[
	'as'=>'listing',
	'uses'=>'controllerPage@getListing'
]);
*/

Route::get('productTitle/{id}',[
	'as'=>'productTitle',
	'uses'=>'controllerPage@getProductTitle'
]);

Route::get('cart',[
	'as'=>'cart',
	'uses'=>'controllerPage@getCart'
]);


