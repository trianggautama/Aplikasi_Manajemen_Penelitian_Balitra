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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/index', 'adminController@index')->name('index');
    Route::get('/pejabat', 'adminController@pejabatIndex')->name('pejabatIndex');
    Route::get('/permohonan', 'adminController@permohonanIndex')->name('permohonanIndex');

// user route
    Route::get('/user', 'UserController@index')->name('userIndex');
    Route::post('/user', 'UserController@store')->name('userStore');
    Route::get('/user/profil', 'UserController@profil')->name('userProfil');
    Route::get('/user/edit/{uuid}', 'UserController@edit')->name('userEdit');
    Route::put('/user/edit/{uuid}', 'UserController@update')->name('userUpdate');
    Route::get('/user/delete/{uuid}', 'UserController@destroy')->name('userDestroy');

    //pembimbing
    Route::get('/pembimbing', 'pembimbingController@index')->name('pembimbingIndex');
    Route::post('/pembimbing', 'PembimbingController@store')->name('pembimbingStore');
    Route::get('/pembimbing/profil', 'PembimbingController@profil')->name('pembimbingProfil');
    Route::get('/pembimbing/edit/{uuid}', 'PembimbingController@edit')->name('pembimbingEdit');
    Route::put('/pembimbing/edit/{uuid}', 'PembimbingController@update')->name('pembimbingUpdate');
    Route::get('/pembimbing/delete/{uuid}', 'PembimbingController@destroy')->name('pembimbingDestroy');

    //objekpenelitian
    Route::get('/objekPenelitian', 'objekPenelitianController@index')->name('objekPenelitianIndex');
    Route::post('/objekPenelitian', 'objekPenelitianController@store')->name('objekPenelitianStore');
    Route::get('/objekPenelitian/edit', 'objekPenelitianController@edit')->name('objekPenelitianEdit');
    Route::put('/objekPenelitian/edit/{uuid}', 'objekPenelitianController@update')->name('objekPenelitianUpdate');
    Route::get('/objekPenelitian/delete/{uuid}', 'objekPenelitianController@destroy')->name('objekPenelitianDestroy');

    //fasilitas
    Route::get('/fasilitas', 'fasilitasController@index')->name('fasilitasIndex');
    Route::get('/fasilitas/edit', 'fasilitasController@edit')->name('fasilitasEdit');
});
