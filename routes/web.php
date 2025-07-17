<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

Route::get('/',[BlogController::class,'index'])->name('index');
Route::get('/about',[BlogController::class,'about'])->name('about');
Route::get('/contact',[BlogController::class,'contact'])->name('contact');
Route::post('/contact',[BlogController::class,'contact_data']);
Route::get('/post/{post}',[BlogController::class,'post'])->name('post');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::get('/contact',[AdminController::class,'contact'])->name('contact');
    Route::delete('/contact/{contact}',[AdminController::class,'message_destroy'])->name('message_destroy');
    Route::get('/message_replay/{contact}',[AdminController::class,'message_replay'])->name('message_replay');
    Route::post('/message_replay/{contact}',[AdminController::class,'send_message_replay']);
    Route::get('/posts',[AdminController::class,'posts'])->name('posts');
    Route::delete('/posts/{post}',[AdminController::class,'destroy_post'])->name('destroy_post');
    Route::get('/add_post',[AdminController::class,'add_post'])->name('add_post');
    Route::post('/add_post',[AdminController::class,'add_post_info']);
});
