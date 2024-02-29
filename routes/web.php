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
// Route::get('/poet', [FrontController::class, "poet"]);
Route::get('/poet/{slug}', [FrontController::class, 'showPoet'])->name('poet.show');;
Route::get('/poetry', [FrontController::class, "poetry"]);
Route::get('/punjabi-culture', [FrontController::class, "punjabi_culture"]);
Route::get('/punjabi-culture/{slug}', [FrontController::class, "punjabi_culture_view"])->name('pc.show');
Route::get('/heritage-sites', [FrontController::class, "heritage_sites"]);
Route::get('/heritage-sites/{slug}', [FrontController::class, "heritage_sites_view"])->name('hr.show');
Route::get('/about', [FrontController::class, "about"]);
Route::get('/contact', [FrontController::class, "contact"]);

Route::get('/sign-up', [FrontController::class, "sign_up"]);
Route::get('/login', [FrontController::class, "login"]);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
