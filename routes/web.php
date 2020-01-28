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

// use Illuminate\Routing\Route;

use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'MainController@index');
Route::get('/dashboard-home', 'MainController@dashboard');
Route::get('categories', 'CategoryController@index')->name('index');
Route::post('store_category', 'CategoryController@store')->name('store.cat');
Route::get('edit_cat/{category}', 'CategoryController@edit')->name('edit_cat');
Route::post('/update_cat/{category}', 'CategoryController@update')->name('update');
Route::get('/delete_cat/{category}', 'CategoryController@destroy')->name('delete.cat');





