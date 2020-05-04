<?php

use Illuminate\Support\Facades\Route;

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
    return view('login.login');
});
Route::get('/map','MapController@index');

Route::get('/shops','ShopController@index');
Route::get('/shops/{id}','ShopController@show');
Route::post('/shops/create','ShopController@create');
Route::post('/shops/update/{id}','ShopController@update')->middleware('AdminAuth');
Route::post('/shops/delete/{id}','ShopController@delete')->middleware('AdminAuth');;

Route::get('/myInfo','MyInfoController@show');
Route::post('/myInfo/update','MyInfoController@update');

Route::get('/users','UserController@index');
Route::get('/users/{id}','UserController@show');
Route::post('/users/update/{id}','UserController@update')->middleware('AdminAuth');
Route::post('/users/delete/{id}','UserController@delete')->middleware('AdminAuth');

Route::get('/categories','CategoryController@index');
Route::get('/categories/{id}','CategoryController@show');
Route::post('/categories/create','CategoryController@create')->middleware('AdminAuth');
Route::post('/categories/update/{id}','CategoryController@update')->middleware('AdminAuth');
Route::post('/categories/delete{id}','CategoryController@delete')->middleware('AdminAuth');