<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'adminController@depan')->name('depan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permohonan/input', 'adminController@permohonanInput')->name('permohonanInput');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/index', 'adminController@index')->name('index');
    Route::get('/pejabat', 'adminController@pejabatIndex')->name('pejabatIndex');

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

    //pejabat
    Route::get('/pejabat', 'PejabatController@index')->name('pejabatIndex'); 
    Route::post('/pejabat', 'PejabatController@store')->name('pejabatStore');
    Route::get('/pejabat/profil', 'PejabatController@profil')->name('pejabatProfil');
    Route::get('/pejabat/edit/{uuid}', 'PejabatController@edit')->name('pejabatEdit');
    Route::put('/pejabat/edit/{uuid}', 'PejabatController@update')->name('pejabatUpdate');
    Route::get('/pejabat/delete/{uuid}', 'PejabatController@destroy')->name('pejabatDestroy');

    //objekpenelitian
    Route::get('/objekPenelitian', 'objekPenelitianController@index')->name('objekPenelitianIndex');
    Route::post('/objekPenelitian', 'objekPenelitianController@store')->name('objekPenelitianStore');
    Route::get('/objekPenelitian/edit/{uuid}', 'objekPenelitianController@edit')->name('objekPenelitianEdit');
    Route::put('/objekPenelitian/edit/{uuid}', 'objekPenelitianController@update')->name('objekPenelitianUpdate');
    Route::get('/objekPenelitian/delete/{uuid}', 'objekPenelitianController@destroy')->name('objekPenelitianDestroy');

    //fasilitas
    Route::get('/fasilitas', 'fasilitasController@index')->name('fasilitasIndex');
    Route::post('/fasilitas', 'fasilitasController@store')->name('fasilitasStore');
    Route::get('/fasilitas/edit/{uuid}', 'fasilitasController@edit')->name('fasilitasEdit');
    Route::put('/fasilitas/edit/{uuid}', 'fasilitasController@update')->name('fasilitasUpdate');
    Route::get('/fasilitas/delete/{uuid}', 'fasilitasController@destroy')->name('fasilitasDestroy');

    //berita
    Route::get('/berita', 'beritaController@index')->name('beritaIndex');
    Route::post('/berita', 'beritaController@store')->name('beritaStore');
    Route::get('/berita/edit/{uuid}', 'beritaController@edit')->name('beritaEdit');
    Route::put('/berita/edit/{uuid}', 'beritaController@update')->name('beritaUpdate');
    Route::get('/berita/delete/{uuid}', 'beritaController@destroy')->name('beritaDestroy');

    //permohonan
    Route::get('/permohonan', 'permohonanController@index')->name('permohonanIndex');
    Route::get('/permohonan/detail', 'permohonanController@detail')->name('permohonanDetail');

    
});
