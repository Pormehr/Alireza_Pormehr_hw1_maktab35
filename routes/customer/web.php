<?php

use Illuminate\Support\Facades\Route;

Route::resource('', 'CustomerController')->only(['index', 'edit', 'update', 'destroy']);

Route::resource('post', 'PostController');

//Route::post('post/{post}', 'ChangePostStatusController')->name('change.post.status');
