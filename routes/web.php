<?php

use Illuminate\Support\Facades\App;
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
        Route::post('photos/update/{id}','Admin\PhotoController@update')->name('photos.update');
        Route::post('photos/create','Admin\PhotoController@store')->name('photos.store');
        Route::post('photos/destroy/{id}','Admin\PhotoController@destroy')->name('photos.destroy');
        Route::resource('users','Admin\UserController');
        Route::resource('menus','Admin\MenuController');
        Route::resource('posts','Admin\PostController');
        Route::resource('companies','Admin\CompanyController');
        Route::delete('galleries/delete/{name}', 'Admin\GalleryController@delete')->name('galleries.delete');
        Route::resource('galleries','Admin\GalleryController');
        Route::resource('metas','Admin\MetaController');
        Route::get('post-galleries','Admin\GalleryController@post_index')->name('posts.galleries.index');
    });
});




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/contact', 'Frontend\ContactController');
Route::get('post/{id}','HomeController@post')->name('post');


