<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('adminlte.logout');

Route::get('/rates', [App\Http\Controllers\ex_rates_ctrl::class, 'APIrates'])->name('adminlte.rates');
Route::get('/kantor', [App\Http\Controllers\cantor_ctrl::class, 'calculator'])->name('adminlte.kantor');

