<?php

use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('/', 'BerandaController');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store')->name('login.store');
Route::get('/logout', 'LoginController@logout')->name('login.logout');

//Blog Khusus User
Route::resource('/blog', "BlogUserController");
Route::get('/search/', "BlogUserController@search")->name('blog.search');

//Kategori Blog
Route::resource('/kategori', "CategoryUserController");

Route::group(['middleware' => ['auth','CekRole:admin,writer,user']], function() {
    //Admin
    Route::resource('/beranda', 'DashboardController');

    //Data User
    Route::resource('/admin/data-user', "DataUserController");

    //Data Devisi
    Route::resource('/admin/data-devisi', "DataDevisionController");

    //Data Team
    Route::resource('/admin/data-team', "DataTeamController");

    //Faq
    Route::resource('/admin/faq', "FaqController");

    //Tesimoni
    Route::resource('/admin/testimoni', "TestimoniController");

    //About Us Setting
    Route::resource('/admin/about-us', "AboutController");

    //Client Image
    Route::resource('/admin/client-image', "ClientImageController");

    //Blog
    Route::resource('/admin/data-blog', "DataBlogController");
    
    //Setting
    Route::prefix('settings')->group(function() {
        Route::resource('header-setting', "HeaderSettingController");
        Route::resource('global-setting', "GlobalSettingController");
        Route::resource('footer-setting', "FooterSettingController");
    });
} );

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});