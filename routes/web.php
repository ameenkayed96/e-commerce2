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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\admin\dashboardController::class, 'admin'])->name('admin.dashboard');
Route::get('/about',[App\Http\Controllers\Site\SiteController::class, 'about'])->name('about');
Route::get('/services_details',[App\Http\Controllers\Site\SiteController::class, 'services_details'])->name('ser_det');
Route::get('/appointment',[App\Http\Controllers\Site\SiteController::class, 'appointment'])->name('appointment') -> middleware('auth');
Route::post('/booking',[App\Http\Controllers\Site\SiteController::class, 'bookings'])->name('booking');
Route::get('/doctors',[App\Http\Controllers\Site\SiteController::class, 'doctors'])->name('doctors');
Route::get('/services',[App\Http\Controllers\Site\SiteController::class, 'services'])->name('services');
Route::get('/contact_us',[App\Http\Controllers\Site\SiteController::class, 'contact_us'])->name('contact_us');
Route::post('/sendMessage',[App\Http\Controllers\Site\SiteController::class, 'sendMessage'])->name('sendMessage');
Route::get('/doc_det/{id}',[App\Http\Controllers\Site\SiteController::class, 'doc_det'])->name('doc_det');
Route::get('/testdet/{id}',[App\Http\Controllers\Site\SiteController::class, 'det']);
Route::get('/blogs',[App\Http\Controllers\Site\SiteController::class, 'blogs'])->name('blogs');
Route::get('/reviews',[App\Http\Controllers\Site\SiteController::class, 'reviews'])->name('reviews');

Route::get('/logout',function(){
    Auth::logout();
    session()->flush();
    session()->regenerate();
    return redirect('/');
});
