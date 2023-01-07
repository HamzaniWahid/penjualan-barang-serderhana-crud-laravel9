<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::resource('barang', BarangController::class);

Route::resource('member', MemberController::class);

Route::resource('user', UserController::class);

Route::resource('auth', LoginController::class);

Route::post('register', [App\Http\Controllers\LoginController::class, 'register']);

Route::get('logout', [App\Http\Controllers\LoginController::class, 'destroy']);

Route::get('/cetakpdf', [App\Http\Controllers\BarangController::class, 'cetakpdf']);