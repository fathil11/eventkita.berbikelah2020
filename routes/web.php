<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

// Public Section
Route::get('/tes', 'PublicController@test');
Route::get('/', 'PublicController@showHome')->name('home');
Route::get('daftar', 'PublicController@showRegister');
Route::post('daftar', 'PublicController@storeParticipant');
Route::get('daftar/pesan', 'PublicController@showRegisterMessage');

// Competition Section
Route::get('/peserta/{code}', 'EventController@showParticipantDashboard');

// Admin Section
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@showDashboard');

    Route::group(['prefix' => 'peserta'], function () {
        Route::get('/pembayaran', 'AdminController@showParticipantsPayment');
        Route::get('/{id}/lunas', 'AdminController@paidParticipant');
        Route::get('/{id}/tidak-lunas', 'AdminController@unpaidParticipant');

        Route::get('/merchant', 'AdminController@showParticipantsMerchant');
        Route::get('/{id}/merchant/ambil', 'AdminController@getParticipantMerchant');
        Route::get('/{id}/merchant/batalkan', 'AdminController@cancelParticipantMerchant');

        Route::get('/', 'AdminController@showParticipants');
        Route::post('/', 'AdminController@storeParticipants');
        Route::get('/tambah', 'AdminController@showAddParticipants');
        Route::get('/{id}', 'AdminController@showParticipant');
        Route::patch('/{id}/edit', 'AdminController@updateParticipant');
        Route::get('/{id}/hapus', 'AdminController@deleteParticipant');
    });
});

// Auth Route Section
Auth::routes(['register' => false]);

Route::get('logout', function () {
    session()->flush();
    return redirect('/');
});
