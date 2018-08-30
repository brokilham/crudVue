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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'side_bar'],function(){
    Route::get('/GetMenuMain','MenuController@GetMenuMain');
    Route::get('/GetMenuSub1','MenuController@GetMenuSub1');
    Route::get('/GetMenuSub2','MenuController@GetMenuSub2');
});

Route::group(['prefix' => 'administrator'],function(){
    /*Route::get('/GetMenuMain','MenuController@GetMenuMain');
    Route::get('/GetMenuSub1','MenuController@GetMenuSub1');
    Route::get('/GetMenuSub2','MenuController@GetMenuSub2');*/
});

