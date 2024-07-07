<?php

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



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\AlbumController;

/*Route::get('/', function () {
    return view('layouts.home');
});*/

Route::get('/albums', function () {
    return view('layouts.albums');
});

Route::get('/labels', function () {
    return view('layouts.labels');
});

Route::get('/contatti', function () {
    return view('layouts.contatti');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('artists', ArtistController::class);
Route::resource('labels', LabelController::class);
Route::resource('albums', AlbumController::class);
