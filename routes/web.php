<?php

use Illuminate\Support\Facades\Artisan;
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



/********************  clear cache  ****************************************/
Route::get('/clearcache', function() {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


/********************  admin panel ****************************************/
Route::group(['middleware' => ['admin']], function () {
    Route::prefix('admin/')->group(function (){
        Route::get('dashboard','Admin\AdminController@index')->name('admin.dashboard');
        Route::get('photos','Admin\PhotoController@index')->name('photos.index');
        Route::get('photos/create','Admin\PhotoController@store')->name('photos.create');
        Route::resource('users','Admin\UserController');
    });
});




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
