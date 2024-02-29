<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

Route::get('/',  [FrontController::class, "front_page"]);
Route::get('/poet', [FrontController::class, "poet"]);
Route::get('/poetry', [FrontController::class, "poetry"]);
Route::get('/punjabi-culture', [FrontController::class, "punjabi_culture"]);
Route::get('/heritage-sites', [FrontController::class, "heritage_sites"]);
Route::get('/about', [FrontController::class, "about"]);
Route::get('/contact', [FrontController::class, "contact"]);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
