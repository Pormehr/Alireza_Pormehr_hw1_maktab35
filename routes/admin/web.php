<?php

use Illuminate\Support\Facades\Route;

Route::resource('', 'AdminController')->only(['index', 'edit', 'update']);

Route::resource('customer', 'CustomerController');
