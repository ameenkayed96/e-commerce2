<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
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

Route::get('/', function () {
    return view('layouts.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\admin\dashboardController::class, 'admin'])->name('admin.dashboard');
Route::get('/about',[App\Http\Controllers\Site\SiteController::class, 'about'])->name('about');
Route::get('/services_details',[App\Http\Controllers\Site\SiteController::class, 'services_details'])->name('ser_det');
Route::get('/appointment',[App\Http\Controllers\Site\SiteController::class, 'appointment'])->name('appointment') -> middleware('auth');
Route::post('/booking',[App\Http\Controllers\Site\SiteController::class, 'bookings'])->name('booking');
