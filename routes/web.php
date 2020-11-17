<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Controllers\WelcomeController::class);

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', \App\Http\Controllers\DashboardController::class)
    ->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/posts/create', \App\Http\Controllers\Posts\CreateController::class)
    ->name('posts.create');

Route::middleware(['auth:sanctum', 'verified'])
    ->post('/posts', \App\Http\Controllers\Posts\StoreController::class)
    ->name('posts.store');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/posts/{post}/edit', \App\Http\Controllers\Posts\EditController::class)
    ->name('posts.edit');

Route::middleware(['auth:sanctum', 'verified'])
    ->put('/posts/{post}', \App\Http\Controllers\Posts\UpdateController::class)
    ->name('posts.update');

Route::middleware(['auth:sanctum', 'verified'])
    ->delete('/posts/{post}', \App\Http\Controllers\Posts\DestroyController::class)
    ->name('posts.destroy');
