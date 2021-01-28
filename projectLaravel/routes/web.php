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

//Administracja kontami użytkowników
Route::get('/admin', [App\Http\Controllers\admin_controller::class, 'allUsers']);
Route::delete('/deleteUser/{id}', [App\Http\Controllers\admin_controller::class, 'deleteUser']);

//Historia rachunku
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('/addHistory', [App\Http\Controllers\HistoryController::class, 'create']);
Route::post('/history/store', [App\Http\Controllers\HistoryController::class, 'store']);
Route::get('/history/{id}', [App\Http\Controllers\HistoryController::class, 'show']);
Route::get('/history/edit/{id}', [App\Http\Controllers\HistoryController::class, 'edit']);
Route::put('/history/update/{id}', [App\Http\Controllers\HistoryController::class, 'update']);
Route::delete('/history/delete/{id}', [App\Http\Controllers\HistoryController::class, 'destroy']);