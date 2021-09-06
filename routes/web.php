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

Route::get('/','RecordController@index');
Route::get('/about','RecordController@about');
Route::get('/contact','RecordController@contact');
Route::get('/portfolio','RecordController@portfolio');
Route::get('/work','RecordController@work');