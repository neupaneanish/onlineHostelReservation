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
Route::group(['prefix'=>'/user','middleware'=>'auth'],function() {
// Route::get('/admin',)

Route::get('/', 'HomeController@index')->name('home');
});
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::POST('/admin/login','Auth\AdminLoginController@login');

Route::group(['prefix'=>'/admin'],function() {

Route::get('/','AdminController@index')->name('admin');
Route::get('/logout','Auth\AdminLoginController@logout');
Route::get('/register','Auth\AdminRegisterController@showRegisterForm');
Route::post('/register','Auth\AdminRegisterController@register');
});


