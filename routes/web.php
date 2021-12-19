<?php

use App\Http\Controllers\AutenticationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/logout', [AutenticationController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/save', [UserController::class, 'save'])->name('save');
Route::get('/login', [AutenticationController::class, 'login'])->name('login');
Route::post('/autentication', [AutenticationController::class, 'autentication'])->name('autentication');
//Route::get('/search', [AutenticationController::class, 'search'])->name('search');
Route::post('/user', [AutenticationController::class, 'search'])->name('user');

Route::get('/', [AutenticationController::class, 'home'])->name('home');

// Protected Pages
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AutenticationController::class, 'private'])->name('dashboard');
});
