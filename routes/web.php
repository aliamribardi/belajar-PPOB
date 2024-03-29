<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [PulsaController::class, 'index']);
Route::get('/show/{pulsa}', [PulsaController::class, 'show'])->name('show');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/register/store', [RegisterController::class, 'store'])->name('register.store');
