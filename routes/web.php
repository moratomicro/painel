<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', 'App\Http\Controllers\PessoasController@index');
Route::get('/create', 'App\Http\Controllers\PessoasController@create');
Route::get('/show', 'App\Http\Controllers\PessoasController@show');
Route::get('/destroy', 'App\Http\Controllers\PessoasController@destroy');

Route::get('/', function () {
    return view('welcome');
});
