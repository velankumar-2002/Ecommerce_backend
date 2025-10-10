<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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


Route::get('/',[LoginController::class,'loginSignUp'])->name('login.signup');
Route::post('/save-register',[LoginController::class,'saveRegister'])->name('save.register');
Route::post('verify-email',[LoginController::class,'verifyEmail'])->name('verify.email');
Route::post('verify-mobile-no',[LoginController::class,'verifyMobileno'])->name('verify.mobile.no');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('login.signup');
});

