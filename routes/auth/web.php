<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('show.form');
Route::post('givePhone', [AuthController::class, 'givePhone'])->name('give.phone');

Route::get('register/setVerificationCode', [VerificationController::class, 'sendVerificationCode'])->name('send.verification.code');
Route::post('register/verifyPhone', [VerificationController::class, 'verifyPhone'])->name('verify.phone');

