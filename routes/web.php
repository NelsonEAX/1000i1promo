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

/*Route::get('/', function () {
//    return view('welcome');
//    return view('promo');
});*/

Auth::routes();
Route::get('/', 'PromoController@index');
Route::post('/', 'PromoController@index');
Route::get('/index.php', function(){ return Redirect::to('/', 301); });
Route::get('/index.html', function(){ return Redirect::to('/', 301); });



//Route::get('/home', 'HomeController@index')->name('home');
