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

Route::get('/', 'HomeController@home');
Route::get('/land', 'HomeController@land');
Route::post('/search', 'StudentsController@search');

Route::resource('students','StudentsController');
Route::resource('fees','FeesController'); 