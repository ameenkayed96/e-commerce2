<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'App\Http\Controllers\admin','middleware' => 'auth:admin'],function(){
    Route::get('/test', function(){
        dd("**************");

    });
});

Route::group(['namespace'=>'App\Http\Controllers\admin'],function(){

    Route::get('save','loginController@save');
    Route::get('login','loginController@getlogin');
    Route::post('login','loginController@login') -> name('admin.login');
    Route::get('dashboard', function () {
//dd("******");
    })->name('admin.dashboard');
});

