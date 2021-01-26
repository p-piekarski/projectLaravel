<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('adminlte.logout');

Route::get('/rates', [App\Http\Controllers\ex_rates_ctrl::class, 'APIrates'])->name('adminlte.rates');

Route::get('/kantor', [App\Http\Controllers\cantor_ctrl::class, 'calculator'])->name('adminlte.kantor');

Route::get('/mypage', [App\Http\Controllers\mypage_controller::class, 'mypage'])->name('adminlte.mypage');

Route::get('/history_json', [App\Http\Controllers\history_controller::class, 'json_view']);

Route::get('/card', [App\Http\Controllers\creditcard_controller::class, 'creditcard'])->name('adminlte.creditcard');

// Route::get('/history', [App\Http\Controllers\history_controller::class, 'history']);

Route::get('/getHistory/{id}', [App\Http\Controllers\history_controller::class, 'getHistory']);



Route::get('/history',[App\Http\Controllers\history_controller::class, 'index']);

Route::get('/addHistory',[App\Http\Controllers\history_controller::class, 'create']);

Route::post('/historyaction', [App\Http\Controllers\history_controller::class, 'storeHistory']);

Route::get('/admin', [App\Http\Controllers\admin_controller::class, 'allUsers']);

Route::delete('/deleteUser/{id}', [App\Http\Controllers\admin_controller::class, 'deleteUser']);
