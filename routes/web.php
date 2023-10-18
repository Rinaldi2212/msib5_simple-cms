<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Rute Berita

Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('berita.show');
Route::get('/berita/create', [NewsController::class, 'create'])->name('berita.create')->middleware('auth');
Route::post('/berita', [NewsController::class, 'store'])->name('berita.store');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
