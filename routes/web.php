<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AdminLyricsController; // Add this line
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

    // ROUTING ALBUMS
    Route::get('/admin/albums', [App\Http\Controllers\AdminAlbumsController::class, 'index'])->name('admin-albums');
    Route::get('/admin/albums/create', [App\Http\Controllers\AdminAlbumsController::class, 'create'])->name('admin-albums-create');
    Route::post('/admin/albums/store', [App\Http\Controllers\AdminAlbumsController::class, 'store'])->name('admin-albums-store');
    Route::get('/admin/albums/edit/{id}', [App\Http\Controllers\AdminAlbumsController::class, 'edit'])->name('admin-albums-edit');
    Route::put('/admin/albums/update/{id}', [App\Http\Controllers\AdminAlbumsController::class, 'update'])->name('admin-albums-update');
    Route::delete('/admin/albums/delete/{id}', [App\Http\Controllers\AdminAlbumsController::class, 'destroy'])->name('admin-albums-delete');

    // ROUTING SONGS
    Route::get('/admin/songs', [App\Http\Controllers\AdminSongsController::class, 'index'])->name('admin-songs');
    Route::get('/admin/songs/create', [App\Http\Controllers\AdminSongsController::class, 'create'])->name('admin-songs-create');
    Route::post('/admin/songs/store', [App\Http\Controllers\AdminSongsController::class, 'store'])->name('admin-songs-store');
    Route::get('/admin/songs/edit/{id}', [App\Http\Controllers\AdminSongsController::class, 'edit'])->name('admin-songs-edit');
    Route::put('/admin/songs/update/{id}', [App\Http\Controllers\AdminSongsController::class, 'update'])->name('admin-songs-update');
    Route::delete('/admin/songs/delete/{id}', [App\Http\Controllers\AdminSongsController::class, 'destroy'])->name('admin-songs-delete');

    // ROUTING LYRICS
    Route::get('/admin/lyrics', [App\Http\Controllers\AdminLyricsController::class, 'index'])->name('admin-lyrics');
    Route::get('/admin/lyrics/create', [App\Http\Controllers\AdminLyricsController::class, 'create'])->name('admin-lyrics-create');
    Route::post('/admin/lyrics/store', [App\Http\Controllers\AdminLyricsController::class, 'store'])->name('admin-lyrics-store');
    Route::get('/admin/lyrics/edit/{id}', [App\Http\Controllers\AdminLyricsController::class, 'edit'])->name('admin-lyrics-edit');
    Route::put('/admin/lyrics/update/{id}', [App\Http\Controllers\AdminLyricsController::class, 'update'])->name('admin-lyrics-update');
    Route::delete('/admin/lyrics/delete/{id}', [App\Http\Controllers\AdminLyricsController::class, 'destroy'])->name('admin-lyrics-delete');
    Route::get('/admin/lyrics/detail/{lyric}', [App\Http\Controllers\AdminLyricsController::class, 'show'])->name('admin-lyrics-detail');
        
    Route::get('/admin/requestlyrics', [App\Http\Controllers\AdminRequestController::class, 'index'])->name('admin-requestlyrics');
});
