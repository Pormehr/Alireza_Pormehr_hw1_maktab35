<?php

use Illuminate\Support\Facades\Route;

Route::resource('', 'AdminController')->only(['index', 'edit', 'update']);

Route::resource('customer', 'CustomerController')->only(['index', 'show', 'destroy']);

Route::post('customer/{customer}', 'ChangeCustomerStatusController')->name('change.customer.status');
