<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('getCategory' , 'categoryController@getCategory');
Route::post('getCategoryById' , 'categoryController@getCategoryById');
Route::post('/addCategory' , 'categoryController@addCategory');
Route::put('/updateCategory' , 'categoryController@updateCategory');
Route::delete('/deleteCategory' , 'categoryController@deleteCategory');

Route::get('getItem' , 'ItemController@getItem');
Route::post('/addItem' , 'ItemController@addItem');
Route::put('/updateItem' , 'ItemController@updateItem');
Route::delete('/deleteItem' , 'ItemController@deleteItem');