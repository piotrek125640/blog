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

Route::get('/', 'MainController@index');
Route::get('/diagnostyka', 'DiagnostykaController@index');
Route::get('/transport', 'TransportController@index');
Route::get('/warsztat', 'WarsztatController@index');
Route::get('/o_nas', 'KontaktController@about');
Route::get('/kontakt', 'KontaktController@messages');
Route::get('/informacje','KontaktController@info');
Route::post('/', 'ReviewsController@getReviews');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin','Administrator\AdministratorController@index');
