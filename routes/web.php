<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');

// Route Guest
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/artist', [App\Http\Controllers\ArtistController::class, 'index'])->name('artist');
Route::get('/requestlyrics', [App\Http\Controllers\RequestLyricsController::class, 'index'])->name('requestlyrics');
Route::get('/aboutjoinus', [App\Http\Controllers\AboutJoinUsController::class, 'index'])->name('aboutjoinus');

// Route Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-login');

Route::get('/test', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('test');
