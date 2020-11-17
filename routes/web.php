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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $query = \App\Models\Post::query()
        ->where('user_id', request()->user()->id)
        ->with('user');

    if (request()->has('sort') && in_array(request()->input('sort'), ['asc', 'desc'])) {
        $query->orderBy('publication_date', request()->input('sort'));
    } else {
        $query->orderBy('publication_date', 'desc');
    }

    $posts = $query->paginate(15);
    return view('dashboard')->with("posts", $posts);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/posts/create', function () {
    return view('posts.create');
})->name('posts.create');

Route::middleware(['auth:sanctum', 'verified'])->post('/posts', function () {
    Post::query()->create([
        "user_id" => request()->user()->id,
        "title" => request()->input('title'),
        "description" => request()->input('description'),
        "publication_date" => now()
    ]);
    return redirect('dashboard')->with("message", __('Post created successfully'));
})->name('posts.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/posts/{post}/edit', function (\App\Models\Post $post) {
    $posts = \App\Models\Post::query()->paginate(15);
    return view('posts.edit')->with("post", $post);
})->name('posts.edit');

Route::middleware(['auth:sanctum', 'verified'])->put('/posts/{post}', function (\App\Models\Post $post) {
    $post->update([
        "title" => request()->has('title') ? request()->input('title') : $post->title,
        "description" => request()->has('description') ? request()->input('description') : $post->description,
    ]);
    return redirect('dashboard')->with("message", __('Post updated successfully'));
})->name('posts.update');

Route::middleware(['auth:sanctum', 'verified'])->delete('/posts/{post}', function (\App\Models\Post $post) {
    $post->delete();
    return redirect('dashboard')->with("message", __('Post deleted successfully'));
})->name('posts.destroy');
