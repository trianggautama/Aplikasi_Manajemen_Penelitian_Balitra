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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permohonan/input', 'adminController@permohonanInput')->name('permohonanInput');


Route::get('/index', 'adminController@index')->name('index');
Route::get('/user', 'adminController@userIndex')->name('userIndex');
Route::get('/pembimbing', 'adminController@pembimbingIndex')->name('pembimbingIndex');
Route::get('/pejabat', 'adminController@pejabatIndex')->name('pejabatIndex');
Route::get('/objekPenelitian', 'adminController@objekPenelitianIndex')->name('objekPenelitianIndex');
Route::get('/fasilitas', 'adminController@fasilitasIndex')->name('fasilitasIndex');
Route::get('/permohonan', 'adminController@permohonanIndex')->name('permohonanIndex');

