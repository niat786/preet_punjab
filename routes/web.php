<?php

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

Route::view('/', 'preet.index');
Route::view('/about', 'preet.about');
Route::view('/poet', 'preet.poet-single');
Route::view('/poetry', 'preet.poetry');
Route::view('/punjabi-culture', 'preet.punjabiculture');
Route::view('/heritage-sites', 'preet.punjabheritage');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
