<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// show dashboard
Route::get('/',[UserController :: class, 'index'])->middleware('auth');;

//show register/create form
Route::get('/register',[UserController :: class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store'])->middleware('auth');;

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
