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

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's

    // Route::post('store','StudentController@store');
    Route::get('index','StudentController@index');
    // Route::get("index",[StudentController::class,'index']);
    });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('store','StudentController@store');
Route::post('register','RegisterController@register');
Route::get('index','StudentController@index');

Route::post('login','RegisterController@login');
