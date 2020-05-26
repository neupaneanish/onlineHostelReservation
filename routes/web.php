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
    return view('layouts.fcm');
});
Auth::routes();
Route::group(['prefix'=>'/user','middleware'=>'auth'],function() {
// Route::get('/admin',)

Route::get('/', 'HomeController@index')->name('home');
});
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::POST('/admin/login','Auth\AdminLoginController@login');

Route::group(['prefix'=>'/admin'],function() {

Route::get('/','Admin\AdminController@list')->name('admin');
Route::get('/logout','Auth\AdminLoginController@logout');
Route::get('/register','Auth\AdminRegisterController@showRegisterForm');
Route::post('/register','Auth\AdminRegisterController@register');
Route::get('/hostel/create','Admin\AdminController@hostelAdd'); 
Route::POST('/hostel/create','Admin\AdminController@create');
Route::get('/hostel','Admin\AdminController@list');
Route::get('/hostel/edit/{id}','Admin\AdminController@editForm');
Route::get('/hostel/manageImage','Admin\ImageController@image'); 
Route::get('/hostel/images/{id}','Admin\ImageController@displayImage'); 
Route::get('/hostel/addImage/{id}','Admin\ImageController@imageAddForm'); 
Route::post('/hostel/addImage','Admin\ImageController@imageUpload'); 
// Route::get('/hostel/display/{id}','Admin\ImageController@displayImage'); 

Route::get('/user','Admin\HostelUserController@index');
});


