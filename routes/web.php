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

// Route::get('/', function () {
//     return view('welcome');
// });


//login
Route::get('/login','App\Http\Controllers\LoginController@index')->name('login.index');
Route::post('/login','App\Http\Controllers\LoginController@login')->name('login');
Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

	//ticket
	Route::get('/ticket/index','App\Http\Controllers\TicketController@index')->name('ticket.index');
	Route::get('/ticket/create','App\Http\Controllers\TicketController@create')->name('ticket.create');
	Route::post('/ticket/store','App\Http\Controllers\TicketController@store')->name('ticket.store');
	Route::post('/ticket/slove/{id}','App\Http\Controllers\TicketController@slove')->name('ticket.slove');

	//bug
	Route::get('/bug/index','App\Http\Controllers\BugController@index')->name('bug.index');
	Route::get('/bug/create','App\Http\Controllers\BugController@create')->name('bug.create');
	Route::post('/bug/store','App\Http\Controllers\BugController@store')->name('bug.store');
	Route::get('/bug/edit/{id}','App\Http\Controllers\BugController@edit')->name('bug.edit');
	Route::post('/bug/update/{id}','App\Http\Controllers\BugController@update')->name('bug.update');
	Route::post('/bug/destroy/{id}','App\Http\Controllers\BugController@destroy')->name('bug.destroy');
	Route::post('/bug/slove/{id}','App\Http\Controllers\BugController@slove')->name('bug.slove');

	//user
	Route::get('/user/index','App\Http\Controllers\UserController@index')->name('user.index');
	Route::get('/user/create','App\Http\Controllers\UserController@create')->name('user.create');
	Route::post('/user/store','App\Http\Controllers\UserController@store')->name('user.store');
});