<?php

// 認証
Route::post('/login','App\Http\Controllers\Auth\LoginController@login');
Route::post('/auth_check','App\Http\Controllers\Auth\LoginController@authCheck');


// 全URL対象※URLはfrontend側で制御する
Route::get('/{any}', 'Src\controller\SpaController@index')->where('any', '.*');
