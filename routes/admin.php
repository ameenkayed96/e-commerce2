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


define('PAGINATION-COUNT', 10);
Route::group(['namespace' => 'App\Http\Controllers\admin'], function () {
    Route::get('/test', function () {
        dd("**************");
    });

    //-----------------------------Languages Routes----------------------------
    Route::group(['prefix' => 'languages'], function () {
        Route::get('/', 'LanguagesController@index')->name('admin.languages');
        Route::get('/delete/{id}', 'LanguagesController@delete')->name('admin.delete');
        Route::get('/add', 'LanguagesController@addLang')->name('admin.addLanguages');
        //    Route::post('/add','LanguagesController@saveLang') -> name('languages.add');
        Route::post('/add', function () {
            dd(session()->get('success'));
        })->name('languages.add');
        Route::get('/edit/{id}', 'LanguagesController@editLang');
        Route::post('/edit/{id}', 'LanguagesController@saveEdit')->name('languages.edit');
        Route::get('/deleteAll', 'LanguagesController@deleteAll');


        // Route::get('/',function(){
        //     dd("*************************");
        // }) -> name('admin.languages');

    });
});

Route::group(['namespace' => 'App\Http\Controllers\admin'], function () {

    Route::get('save', 'loginController@save');
    // Route::get('login','loginController@getlogin');
    // Route::post('login','loginController@login') -> name('admin.login');
    //     Route::get('/', function () {
    //         // dd(Auth::user());
    //         dd(auth()->guard('admin'));
    // return view('admin.dashboard');
    //     })->name('admin.dashboard')->middleware('auth');
    Route::get('/', 'dashboardController@admin')->name('admin.dashboard');
});
