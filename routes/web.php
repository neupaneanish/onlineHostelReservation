<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::group(['prefix'=>'/user'],function() {
// Route::get('/admin',)

Route::get('/', 'HomeController@index')->name('home');
});
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::POST('/admin/login','Auth\AdminLoginController@login');

Route::group(['prefix'=>'/admin'],function() {

Route::get('/','Admin\AdminController@list')->name('admin');//home page of admin
Route::get('/logout','Auth\AdminLoginController@logout');//logout
Route::get('/register','Auth\AdminRegisterController@showRegisterForm');//show register form
Route::post('/register','Auth\AdminRegisterController@register');//register admin
Route::get('/hostel/create','Admin\AdminController@hostelAdd'); //hostel's create form
Route::POST('/hostel/create','Admin\AdminController@create');//add Hostel 
Route::get('/hostel','Admin\AdminController@list');//list of Hostel
Route::get('/hostel/edit/{id}','Admin\AdminController@editForm');//show hostle's update form
Route::PATCH('/hostel/edit/{id}','Admin\AdminController@update');//Hostel information Update
Route::get('/hostel/manageImage','Admin\ImageController@image'); //manage image of hostel
Route::get('/hostel/images/{id}','Admin\ImageController@displayImage'); // Show Hostel's images 
Route::get('/hostel/addImage/{id}','Admin\ImageController@imageAddForm'); //show file insert page
Route::post('/hostel/addImage','Admin\ImageController@imageUpload'); //Hostel Image Upload
Route::DELETE('/hostel/delete/{id}','Admin\AdminController@delete');//Hostel Delete
Route::DELETE('/image/delete/{id}','Admin\ImageController@delete');//hostle Image Delete
Route::get('/hostel/detail/{id}','Admin\AdminController@detail');//hostel detail page show
// Route::get('/hostel/display/{id}','Admin\ImageController@displayImage'); 

Route::get('/user','Admin\HostelUserController@index');
// Route::get('/user/{id}','Admin\HostelUserController@userView');
Route::get('/user/view/{id}','Admin\HostelUserController@userDetail');
Route::DELETE('/user/delete/{id}','Admin\HostelUserController@userDelete');
Route::get('/hostel/room/{id}','Admin\HostelRoomController@roomAddForm');
Route::post('/hostel/room/{id}','Admin\HostelRoomController@roomAdd');
Route::get('/hostel/room/view/{id}','Admin\HostelRoomController@roomShow');
Route::get('/room/view/detail/{id}','Admin\HostelRoomController@details');
Route::get('/room/delete/{id}','Admin\HostelRoomController@deleteRoom');


});


