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
        Route::resource('users','Admin\UserController');
        Route::resource('menus','Admin\MenuController');
        Route::resource('posts','Admin\PostController');
        Route::resource('companies','Admin\CompanyController');
        Route::resource('galleries','Admin\GalleryController');
        Route::resource('metas','Admin\MetaController');
        Route::resource('categories','Admin\CategoryController');
        Route::resource('files','Admin\FileController');
        Route::resource('machines','Admin\MachineController');
        Route::resource('industries','Admin\IndustryController');

        Route::get('dashboard','Admin\AdminController@index')->name('admin.dashboard');
        Route::get('photos','Admin\PhotoController@index')->name('photos.index');
        Route::post('photos/update/{id}','Admin\PhotoController@update')->name('photos.update');
        Route::post('photos/create','Admin\PhotoController@store')->name('photos.store');
        Route::post('photos/destroy/{id}','Admin\PhotoController@destroy')->name('photos.destroy');
        Route::get('delete/{slug}','Admin\PostController@deletePost');
        Route::delete('galleries/delete/{name}', 'Admin\GalleryController@delete')->name('galleries.delete');
        Route::get('post-galleries','Admin\GalleryController@post_index')->name('posts.galleries.index');
        Route::post('markAsRead','Admin\ContactController@markAsRead')->name('markAsRead');
        Route::post('markAsRead-contact','Admin\ContactController@markAsRead_contact')->name('mark.contact');

        Route::get('contacts/{id}/edit','Admin\ContactController@edit')->name('contacts.edit');
        Route::delete('contacts/{id}','Admin\ContactController@destroy')->name('contacts.destroy');
        Route::patch('contacts/update/{id}','Admin\ContactController@update')->name('contacts.update');

        Route::get('contacts/{id}','Admin\ContactController@show')->name('contacts.show');

        Route::get('contacts','Admin\ContactController@index')->name('contacts.index');

        Route::get('tickets', 'Admin\TicketsController@index')->name('tickets.index');
        Route::get('tickets/edit/{id}', 'Admin\TicketsController@edit')->name('ticket.edit');
        Route::post('tickets/update', 'Admin\TicketsController@update')->name('ticket.update');

        Route::get('orders/{id}', 'Admin\OrderController@show')->name('order.show');
        Route::get('orders', 'Admin\OrderController@index')->name('orders');

    });
});


Auth::routes();
Auth::routes(['register' => false]);


Route::group(['middleware'=>'auth'], function() {
    // Route::get('/profile', 'Frontend\UserController@profile')->name('user.profile');
    Route::resource('/contact', 'Frontend\ContactController');

    Route::get('/profile/new_ticket', 'TicketsController@create')->name('ticket.create');
    Route::post('/new_ticket', 'TicketsController@store');

    Route::get('/profile/tickets', 'TicketsController@userTickets')->name('profile.tickets');

    Route::get('/profile/tickets/{ticket_id}', 'TicketsController@show');

    Route::post('comment', 'CommentsController@postComment')->name('comment');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('close_ticket/{ticket_id}', 'TicketsController@close');

    Route::patch('update-user','HomeController@update_user')->name('user.update');
    Route::get('profile/upload','HomeController@file')->name('user.file');
    Route::get('profile/files','HomeController@files')->name('user.files');
    Route::post('profile/upload','UploadFileController@upload')->name('file.store');
    Route::delete('profile/file/destroy/{id}','UploadFileController@destroy')->name('files.destroy');


});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/order', 'HomeController@order')->name('order');
Route::get('/colleague', 'HomeController@colleague')->name('colleague');
Route::get('/customer', 'HomeController@customer')->name('customer');
Route::post('/order', 'OrderController@store')->name('Order');
Route::post('/Order_customer', 'OrderController@store_customer')->name('Order_customer');
Route::get('post/{id}','HomeController@post')->name('post');




