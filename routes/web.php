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

Route::get('/', 'PagesController@landing')->name('home');
Route::get('/appointments', 'PagesController@appointments');
Route::get('/createposts', 'PagesController@postform');
Route::get('/myposts', 'PagesController@storieslist');
Route::get('/storiespost','PagesController@storiespost');
Route::get('/showpost/{id}', 'PagesController@showpost');
Route::get('/editpost/{id}/edit', 'PagesController@editpost');




Route::get('/book', 'PagesController@book');

Route::get('/addtherapist', 'SuperAdminController@addtherapist')->middleware('is_SuperAdmin');
Route::post('/addbio/{id}', 'SuperAdminController@createbio')->middleware('is_SuperAdmin');
Route::get('/addbio/{id}/users', 'SuperAdminController@addbio')->middleware('is_SuperAdmin');
Route::get('/viewbio/{id}/users', 'SuperAdminController@viewbio')->middleware('is_SuperAdmin');
Route::get('/viewinfo/{id}/users', 'SuperAdminController@viewinfo')->middleware('is_SuperAdmin');
Route::get('/viewtherapist', 'SuperAdminController@viewtherapist')->middleware('is_SuperAdmin');
Route::get('/superadmindashboard', 'SuperAdminController@index')->middleware('is_SuperAdmin')->name('superadmindashboard');
Route::post('/createtherapist', 'SuperAdminController@createTherapist')->middleware('is_SuperAdmin');

Route::get('/dashboard', 'AdminController@dashboard')->middleware('is_admin')->name('dashboard');
Route::get('/usersprofiles', 'AdminController@usersprofiles')->middleware('is_admin');
Route::get('/review/{id}/users', 'AdminController@reviewpatient')->middleware('is_admin');
Route::get('/appointmentsadmin', 'AdminController@appointments')->middleware('is_admin');
Route::get('/sessions', 'AdminController@sessions')->middleware('is_admin');
Route::post('/createsessions', 'AdminController@createsessions')->middleware('is_admin');

Route::get('/notes/{id}/users', 'AdminController@notes')->middleware('is_admin');
Route::get('/viewnotes/{id}/users', 'AdminController@viewnotes')->middleware('is_admin');
Route::post('/createnotes', 'AdminController@createnotes')->middleware('is_admin');


Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('userdashboard');
Route::get('/healthcreate', 'HomeController@healthcreate')->name('healthcreate');
Route::post('/healthinfo', 'HomeController@storehealth');
Route::get('/viewinfo', 'HomeController@viewinfo');
Route::post('/bookappointment', 'AppointmentsController@bookappoitment');
Route::get('/selecttime', 'PagesController@selecttime');
Route::post('/cancelappointment', 'AppointmentsController@cancelappoitment');


Route::get('/chatmessages', 'ChatsController@index');
Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');
