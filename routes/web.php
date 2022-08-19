<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Auth\EmailVerifyController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\RegisteredTenantController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

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

Route::get('/', function () {
    return view('welcome');
});

// register route to create a tenant
Route::get('/f-register', [RegisteredTenantController::class, 'first_create']);
Route::post('/f-register', [RegisteredTenantController::class, 'first_store'])->middleware('verified')->name('first_register');
Route::get('/s-register', [RegisteredTenantController::class, 'second_create']);
Route::post('/s-register', [RegisteredTenantController::class, 'second_store'])->name('second_register');

// TODO: verify email before user registration
// Route::get('/register-email', [EmailVerifyController::class, 'index']);
// Route::post('/register-email', [EmailVerifyController::class, 'store']);

// register admin routes
Route::get('/admin/register', [AdminController::class, 'index']);
Route::post('/admin/register', [AdminController::class, 'store']);
// admin login routes
Route::get('/admin/login', [AdminLoginController::class, 'index']);

Route::post('/admin/store', [AdminController::class, 'store'])->name('store');
Route::post('/admin/check', [AdminController::class, 'check'])->name('check');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('logout');

Route::middleware(['auth_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/admin/staff', [AdminController::class, 'staff'])->name('staff');
});