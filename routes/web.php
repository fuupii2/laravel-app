<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+');

Route::get('/', [App\Http\Controllers\PostController::class, 'web'])
    ->name('posts.web');

Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');

Route::patch('/posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])
    ->name('posts.update')
    ->where('post', '[0-9]+');

Route::delete('/posts/{post}/delete', [App\Http\Controllers\PostController::class, 'delete'])
    ->name('posts.delete')
    ->where('post', '[0-9]+');






