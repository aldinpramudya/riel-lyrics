<?php

use App\Http\Controllers\ArtistController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

    // ROUTING ARTIST
    Route::get('/admin/artist', [App\Http\Controllers\AdminArtistController::class, 'index'])->name('admin-artist');
    Route::get('/admin/artist/create', [App\Http\Controllers\AdminArtistController::class, 'create'])->name('admin-artist-create');
    Route::post('/admin/artist/store', [App\Http\Controllers\AdminArtistController::class, 'store'])->name('admin-artist-store');
    Route::get('/admin/artist/edit/{id}', [App\Http\Controllers\AdminArtistController::class, 'edit'])->name('admin-artist-edit');
    Route::put('/admin/artist/update/{id}', [App\Http\Controllers\AdminArtistController::class, 'update'])->name('admin-artist-update');
    Route::delete('/admin/artist/delete/{id}', [App\Http\Controllers\AdminArtistController::class, 'destroy'])->name('admin-artist-delete');


    Route::get('/admin/albums', [App\Http\Controllers\AdminAlbumsController::class, 'index'])->name('admin-albums');
    Route::get('/admin/songs', [App\Http\Controllers\AdminSongsController::class, 'index'])->name('admin-songs');
    Route::get('/admin/lyrics', [App\Http\Controllers\AdminLyricsController::class, 'index'])->name('admin-lyrics');
    Route::get('/admin/requestlyrics', [App\Http\Controllers\AdminRequestController::class, 'index'])->name('admin-requestlyrics');
});
