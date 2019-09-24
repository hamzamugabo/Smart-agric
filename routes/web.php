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
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sells','SellsController@index')->name('sells_path');
Route::get('/sells/product','SellsController@index_product')->name('sells_products_path');
Route::post('/sells', 'SellsController@store')->name('store_sells_path');

Route::get('/sells/{id}', 'SellsController@show')->name('blog_path');
Route::get('/sells/{id}/edit', 'SellsController@edit')->name('edit_blog_path');
Route::put('/sells/{id}','SellsController@update')->name('update_blog_path');
Route::delete('/sells/{id}','SellsController@delete')->name('delete_blog_path');


Route::get('index','SearchDataController@index');
Route::get('search','SearchDataController@result');