<?php

use Illuminate\Support\Facades\Route;

Route::resource('', 'CustomerController')->only(['index', 'edit', 'update', 'destroy']);

//Route::resource('posts', 'PostController')->only(['index', 'show', 'destroy']);

//Route::post('posts/{post}', 'ChangePostStatusController')->name('change.post.status');
