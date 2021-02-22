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


define('PAGINATION-COUNT',10);
Route::group(['namespace'=>'App\Http\Controllers\admin'],function(){
    Route::get('/test', function(){
        dd("**************");

    });

    //-----------------------------Languages Routes----------------------------
    Route::group(['prefix' => 'languages'] , function(){
       Route::get('/','LanguagesController@index') -> name('admin.languages');
    // Route::get('/',function(){
    //     dd("*************************");
    // }) -> name('admin.languages');

    });
});

Route::group(['namespace'=>'App\Http\Controllers\admin'],function(){

    Route::get('save','loginController@save');
    Route::get('login','loginController@getlogin');
    Route::post('login','loginController@login') -> name('admin.login');
    Route::get('dashboard', function () {
return view('admin.dashboard');
    })->name('admin.dashboard');
});

