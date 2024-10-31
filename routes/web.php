<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SetPasswordController;
use App\Http\Controllers\TenantController;
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
Route::redirect('/', '/login');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('tenants', TenantController::class);
    Route::get('setpassword', [SetPasswordController::class, 'create'])->name('setpassword');
    Route::post('setpassword', [SetPasswordController::class, 'store'])->name('setpassword.store');
});

Route::get('invitation/{user}', [TenantController::class, 'invitation'])->name('invitation');
