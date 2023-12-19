<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/detail/{id}', [MainController::class, 'detail'])->name('detail');

Route::get('/animal/{id}', [MainController::class, 'filterAnimal'])->name('filter_animal');

Route::get('/service/{id}', [MainController::class, 'filterService'])->name('filter_service');

Route::get('/location/{province}', [MainController::class, 'filterLocation'])->name('filter_location');

Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store_user');

Route::get('/register/sitter', [RegisterController::class, 'register_sitter'])->middleware('auth')->name('register_sitter');
Route::post('/register/sitter', [RegisterController::class, 'store_sitter'])->name('store_sitter');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');
