<?php

use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Auth;
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

Route::resource('/', 'BerandaController');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store')->name('login.store');
Route::get('/logout', 'LoginController@logout')->name('login.logout');

Route::group(['middleware' => ['auth','CekRole:admin,writer,user']], function() {
    //Admin
    Route::resource('/beranda', 'DashboardController');
} );

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});