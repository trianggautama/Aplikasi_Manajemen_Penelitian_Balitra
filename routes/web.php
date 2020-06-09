<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'adminController@depan')->name('depan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permohonan/input', 'adminController@permohonanInput')->name('permohonanInput');
Route::post('/permohonan/input', 'adminController@permohonanStore')->name('permohonanStore');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/index', 'adminController@index')->name('index');
    Route::get('/pejabat', 'adminController@pejabatIndex')->name('pejabatIndex');

// user route
    Route::get('/user', 'UserController@index')->name('userIndex');
    Route::post('/user', 'UserController@store')->name('userStore');
    Route::get('/user/profil', 'UserController@profil')->name('userProfil');
    Route::put('/user/profil/update', 'UserController@profileUpdate')->name('profileUpdate');
    Route::get('/user/edit/{uuid}', 'UserController@edit')->name('userEdit');
    Route::put('/user/edit/{uuid}', 'UserController@update')->name('userUpdate');
    Route::get('/user/delete/{uuid}', 'UserController@destroy')->name('userDestroy');

    //pembimbing
    Route::get('/pembimbing', 'pembimbingController@index')->name('pembimbingIndex');
    Route::post('/pembimbing', 'PembimbingController@store')->name('pembimbingStore');
    Route::get('/pembimbing/profil', 'PembimbingController@profil')->name('pembimbingProfil');
    Route::put('/pembimbing/profil/update', 'PembimbingController@profileUpdate')->name('profilePembimbingUpdate');
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
    Route::get('/permohonan/detail/{uuid}', 'permohonanController@show')->name('permohonanShow');
    Route::get('/permohonan/detail/lampiran/{uuid}', 'permohonanController@lampiranPreview')->name('lampiranPreview');
    Route::put('/permohonan/detail/{uuid}', 'permohonanController@verifikasiPermohonan')->name('verifikasiPermohonan');
    Route::get('/permohonan/filter', 'permohonanController@filter')->name('permohonanFilter');

    //peneliti
    Route::get('/peneliti', 'penelitiController@index')->name('penelitiIndex');
    Route::post('/peneliti', 'penelitiController@store')->name('penelitiStore');
    Route::get('/peneliti/detail/{uuid}', 'penelitiController@show')->name('penelitiShow');
    Route::get('/peneliti/edit/{uuid}', 'penelitiController@edit')->name('penelitiEdit');
    Route::put('/peneliti/edit/{uuid}', 'penelitiController@update')->name('penelitiUpdate');
    Route::get('/peneliti/delete/{uuid}', 'penelitiController@destroy')->name('penelitiDestroy');

    //penelitian
    Route::get('/penelitian', 'penelitianController@index')->name('penelitianIndex');
    Route::post('/penelitian', 'penelitianController@store')->name('penelitianStore');
    Route::get('/penelitian/detail/{uuid}', 'penelitianController@show')->name('penelitianShow');
    Route::get('/penelitian/edit/{uuid}', 'penelitianController@edit')->name('penelitianEdit');
    Route::put('/penelitian/edit/{uuid}', 'penelitianController@update')->name('penelitianUpdate');
    Route::get('/penelitian/delete/{uuid}', 'penelitianController@destroy')->name('penelitianDestroy');
    Route::get('/penelitian/jobdesk/edit/{uuid}', 'penelitianController@jobdeskEdit')->name('jobdeskEdit');
    Route::put('/penelitian/jobdesk/edit/{uuid}', 'penelitianController@jobdeskUpdate')->name('jobdeskUpdate');

    //penelitian
    Route::get('/peminjaman', 'peminjamanController@index')->name('peminjamanIndex');
    Route::post('/peminjaman', 'peminjamanController@store')->name('peminjamanStore');
    Route::get('/peminjaman/edit/', 'peminjamanController@edit')->name('peminjamanEdit');
    Route::put('/peminjaman/edit/{uuid}', 'peminjamanController@update')->name('peminjamanUpdate');
    Route::get('/peminjaman/delete/{uuid}', 'peminjamanController@destroy')->name('peminjamanDestroy');

    //penelitian
    Route::get('/peminjaman', 'peminjamanController@index')->name('peminjamanIndex');
    Route::post('/peminjaman', 'peminjamanController@store')->name('peminjamanStore');
    Route::get('/peminjaman/edit/{uuid}', 'peminjamanController@edit')->name('peminjamanEdit');
    Route::put('/peminjaman/edit/{uuid}', 'peminjamanController@update')->name('peminjamanUpdate');
    Route::get('/peminjaman/delete/{uuid}', 'peminjamanController@destroy')->name('peminjamanDestroy');

    //CETAK REPORT
    Route::get('/objekPenelitian/cetak', 'reportController@objekPenelitianCetak')->name('objekPenelitianCetak');
    Route::get('/fasilitas/cetak', 'reportController@fasilitasCetak')->name('fasilitasCetak');
    Route::get('/permohonan/cetak', 'reportController@permohonanCetak')->name('permohonanCetak');
    Route::post('/permohonan/filter', 'reportController@permohonanFilter')->name('permohonanFilterCetak');
    Route::get('/pembimbing/biodata/cetak/{uuid}', 'reportController@pembimbingCetakBiodata')->name('pembimbingCetakBiodata');
    Route::get('/penelitian/cetak', 'reportController@penelitianCetak')->name('penelitianCetak');
    Route::get('/penelitian/sk/{uuid}', 'reportController@skPenelitian')->name('skPenelitian');
    Route::get('/peneliti/cetak', 'reportController@penelitiCetak')->name('penelitiCetak');

    //HALAMAN PEMBIMBING - MENU PENELITI
    Route::get('pembimbing/peneliti', 'penelitiController@pembimbingPenelitiIndex')->name('pembimbingPenelitiIndex');

    //HALAMAN PEMBIMBING - MENU PENELITIAN
    Route::get('pembimbing/penelitian', 'penelitianController@pembimbingPenelitianIndex')->name('pembimbingPenelitianIndex');
    Route::get('/penelitian/jobdesk/{uuid}', 'penelitianController@jobdesk')->name('penelitianJobdesk');
    Route::post('/penelitian/jobdesk/create', 'penelitianController@jobdeskStore')->name('penelitianJobdeskStore');
    Route::put('/penelitian/jobdesk/update', 'penelitianController@jobdeskStatusUpdate')->name('penelitianJobdeskUpdate');
    Route::get('/penelitian/jobdesk/delete', 'penelitianController@jobdeskDestroy')->name('penelitianJobdeskDestroy');

    //PENELITI

    //HALMAAN PENELITI - MENU PEMBIMBING
    Route::get('peneliti/pembimbing', 'pembimbingController@penelitiPembimbingIndex')->name('penelitiPembimbingIndex');

    //HALAMAN PENELITI - MENU PENELITIAN
    Route::get('peneliti/penelitian', 'penelitianController@penelitiPenelitianIndex')->name('penelitiPenelitianIndex');
    Route::post('/peneliti/jobdesk/create', 'penelitianController@penelitiJobdeskStore')->name('penelitiJobdeskStore');

     //HALAMAN PENELITI - MENU jobdesk
     Route::get('peneliti/jobdesk/{uuid}', 'penelitianController@penelitiJobdeskIndex')->name('penelitiJobdeskIndex'); 
     Route::get('peneliti/peminjaman', 'peminjamanController@penelitiIndex')->name('penelitiPeminjamanIndex');
});
