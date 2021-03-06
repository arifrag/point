<?php

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

Route::prefix('v1')->namespace('Api')->group(function () {
    Route::post('register', 'RegisterController@store');

    Route::middleware('auth:api')->group(function () {
        Route::prefix('master')->namespace('Master')->group(function () {
            Route::apiResource('user', 'UserController');

            require base_path('routes/api/master.php');
        });
    });
});
