<?php

use App\Http\Controllers\AuthController;


Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/', function () {
    return view('auth');
});

