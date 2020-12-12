<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('show.form');
Route::get('givePhone', [AuthController::class, 'givePhone'])->name('give.phone');
