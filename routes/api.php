<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// 認証
Route::post('/login',[LoginController::class,'login']);
Route::post('/auth_check','App\Http\Controllers\Auth\LoginController@authCheck');
