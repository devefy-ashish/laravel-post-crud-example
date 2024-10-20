<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class,'index'])->name('home');
Route::get('/add-post', [PostController::class,'addPost'])->name('addPost');

Route::post('/submit-post', [PostController::class,'submitPost'])->name('submitPost');


Route::delete('/delete-post/{id}', [PostController::class,'deletePost'])->name('deletePost');

Route::get('/edit-post/{id}', [PostController::class,'editPost'])->name('editPost');

Route::put('/update-post/{id}', [PostController::class,'updatePost'])->name('udpatePost');
