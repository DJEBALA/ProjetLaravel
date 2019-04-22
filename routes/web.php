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
Route::get('/', 'HomeController@index');
Route::get('/Home', 'HomeController@index');

Route::get('/Articles', 'ArticlesController@Articles');
Route::get('/Contact', 'ContactController@Contact');
Route::get('/Articles/{post_name}', 'ArticlesController@show');

Route::post('/Contact', 'ContactController@store');//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
