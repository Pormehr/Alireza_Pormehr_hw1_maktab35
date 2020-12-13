<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('show.form');
Route::post('givePhone', [AuthController::class, 'givePhone'])->name('give.phone');

Route::get('register/setVerificationCode', [VerificationController::class, 'sendVerificationCode'])->name('send.verification.code');
Route::post('register/verifyPhone', [VerificationController::class, 'verifyPhone'])->name('verify.phone');

Route::get('register/completion', [RegisterController::class, 'index'])->name('register.completion');
Route::post('register/creation', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('show.login');
Route::post('login/confirm', [LoginController::class, 'login'])->name('confirm.login');

Route::get('logout', LogoutController::class)->name('logout');
