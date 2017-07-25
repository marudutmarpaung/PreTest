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

Route::group(['middleware' => ['auth']], function() {

    //USER ROUTE
    Route::get('data/user', 'UserController@index');
    Route::get('data/user/create', "UserController@create");
    Route::post('data/user', "UserController@store");
    Route::get('data/user/{id}/delete', 'UserController@destroy');
    Route::get('data/user/{id}', 'UserController@edit');
    Route::put('data/user/{id}', 'UserController@update');
});
