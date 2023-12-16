<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\CategoryController;

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

Route::get('/pc-components', [CategoryController::class, 'pcComponents']);

Route::get('/', function () {
    return view('user.index');
});

Route::post('/logout', [LoginController::class, 'logout']);

// Buat yang login user
Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', function () {
        // return view('index');
        return 'ini user';
    });
    
});

// Buat login admin
Route::group(['middleware' => 'isAdmin'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});

// Buat yang belum login
Route::group(['middleware'=>'guest'], function(){
    Route::get('/login', function () {
        return view('login.index');
    });
    
    Route::get('/register', function () {
        return view('register.index');
    });
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
    
    // login google
    Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
    Route::get('/auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

});

