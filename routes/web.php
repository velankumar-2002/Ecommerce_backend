<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonController;
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

// Login Register Page Functionality starts

Route::get('/',[LoginController::class,'loginSignUp'])->name('login.signup');
Route::post('/save-register',[LoginController::class,'saveRegister'])->name('save.register');
Route::post('verify-login',[LoginController::class,'verifyLogin'])->name('verify.login');
Route::post('verify-email',[LoginController::class,'verifyEmail'])->name('verify.email');
Route::post('verify-mobile-no',[LoginController::class,'verifyMobileno'])->name('verify.mobile.no');
Route::post('verify-password',[LoginController::class,'verifyPassword'])->name('verify.password');


// Dashboard Page Functionality starts


Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
});


// Person Page Functionality starts

Route::prefix('admin/persons')->group(function () {
    Route::get('/view-persons-lists',[PersonController::class,'viewPersonList'])->name('view.persons.list');
});

