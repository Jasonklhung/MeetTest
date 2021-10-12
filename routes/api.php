<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//user
Route::get('/user','App\Http\Controllers\Api\UserController@userList');

//bug
Route::get('/bug','App\Http\Controllers\Api\BugController@bugList');
Route::post('/bug/create','App\Http\Controllers\Api\BugController@store');

//ticket
Route::get('/ticket','App\Http\Controllers\Api\TicketController@ticketList');