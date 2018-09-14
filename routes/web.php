<?php

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

Route::get('/admin', 'AdminController@index')->name('admin.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin'], function(){
    Route::resource('/users', 'UserController');
    Route::resource('/tickets', 'TicketController');
    Route::resource('/message', 'MessageController');
    Route::resource('/company', 'CompanyController');
    Route::resource('/role', 'RoleController');
});

//Route::resource('/test', 'TestController');
