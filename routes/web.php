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

use Illuminate\Support\Facades\Route;

Route::get('/', 'StudentsController@index');
Route::get('/create', 'StudentsController@create');
Route::get('/form', 'StudentsController@create');
Route::get('/{student}', 'StudentsController@show');
Route::post('/', 'StudentsController@store');
Route::delete('/{student}', 'StudentsController@destroy');
Route::get('/{student}/edit', 'StudentsController@edit');
Route::patch('/{student}', 'StudentsController@update');
