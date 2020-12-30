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

Route::group(['prefix' => 'adminfrontoffice'], function () {
    Route::get('/', 'AdminFrontOfficeController@index')->name('adminFrontOffice');
    Route::resource('jenisperbaikan', 'MasterJenisPerbaikanController');
    Route::resource('pitstop', 'MasterPitstopController');
    Route::resource('diskon', 'MasterDiskonController');
});

// MODUL
// ROUTE KEPEGAWAIAN
Route::prefix('kepegawaian/dashboardpegawai')
    ->namespace('Kepegawaian')
    ->group(function() {
        Route::get('/', 'DashboardpegawaiController@index')
            ->name('dashboardpegawai');
    });