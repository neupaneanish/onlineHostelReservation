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

Route::get('/', 'Hostel\HostelController@index')->name('home');
// Route::get('/register','Auth\RegisterController@register');
// Route::post('/create','Auth\RegisterController@create');
Auth::routes();
route::get('/aboutus','Hostel\HostelCOntroller@aboutUs');
Route::get('/notification/{id}','Hostel\SearchController@notice')->middleware('auth');
Route::get('/notification','Hostel\SearchController@noNotice')->middleware('guest');
Route::group(['prefix'=>'/hostel'],function() {
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/','Hostel\HostelController@hostel');
// Route::get('/booking','Hostel\HostelController@Booking');
Route::post('/search','Hostel\SearchController@search');
Route::get('/detail/{id}','Hostel\HostelController@details');
Route::get('/test/{id}/{idd}','Hostel\HostelController@book');
Route::get('/booking/details','Hostel\HostelController@gotoLogin')->middleware('guest');
Route::post('/booking/{id}','Hostel\HostelController@roomBook')->middleware('auth');
Route::get('/booking/details/{id}','Hostel\HostelController@bookingDetails')->middleware('auth');
Route::get('/booking/edit/{id}','Hostel\HostelController@editBooking')->middleware('auth');
Route::PATCH('/booking/edit/{id}','Hostel\HostelController@editBook')->middleware('auth');
Route::post('/booking/cancel/{id}','Hostel\HostelController@cancelled')->middleware('auth');


Route::post('/room/price/{id}/{idd}','Hostel\HostelController@roomPrice');
// Route::get('/footer','Hostel\SearchController@search');
});
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::POST('/admin/login','Auth\AdminLoginController@login');

Route::group(['prefix'=>'/admin'],function() {

Route::get('/','Admin\AdminController@list')->name('admin');//home page of admin
Route::get('/logout','Auth\AdminLoginController@logout');//logout
Route::get('/register','Auth\AdminRegisterController@showRegisterForm')->middleware('super');//show register form
Route::get('/show','Admin\AdminManagementController@admin')->middleware('super');
Route::post('/register','Auth\AdminRegisterController@register');//register admin
Route::get('/superAdmin/register','Admin\SuperAdminController@register')->middleware('superAdmin');//register admin
Route::post('/superAdmin/register','Admin\SuperAdminController@create')->middleware('superAdmin');//register admin
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
Route::get('/web/about','Admin\WebController@web');
Route::post('/web/about','Admin\WebController@update');
Route::get('/web/footer','Admin\WebController@footer');
Route::get('/booking/details','Admin\HostelUserController@booking');

Route::get('/web/footer','Admin\WebController@footer');

Route::get('/user','Admin\HostelUserController@index');
// Route::get('/user/{id}','Admin\HostelUserController@userView');
Route::get('/user/view/{id}','Admin\HostelUserController@userDetail');
Route::DELETE('/user/delete/{id}','Admin\HostelUserController@userDelete');
Route::get('/hostel/room/{id}','Admin\HostelRoomController@roomAddForm');
Route::post('/hostel/room/{id}','Admin\HostelRoomController@roomAdd');
Route::get('/hostel/room/view/{id}','Admin\HostelRoomController@roomShow');
Route::get('/room/view/detail/{id}','Admin\HostelRoomController@details');
Route::get('/room/delete/{id}','Admin\HostelRoomController@deleteRoom');
Route::get('/hostel/room/{id}/edit','Admin\HostelRoomController@roomEditForm');
Route::PATCH('/hostel/room/{id}/edit','Admin\HostelRoomController@roomEdit');

Route::get('/password/{id}','Admin\AdminManagementController@password');
Route::PATCH('/password/{id}','Admin\AdminManagementController@reset');
Route::DELETE('/delete/{id}','Admin\AdminManagementController@delete');


});
ROute::get('/view',function (){
return view('admin.rooms.roomDetailView');
});

Route::get('/send', 'NotificationController@sendNotification');


