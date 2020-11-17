<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param UpdateRequest $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $post->update([
            "title" => request()->has('title') ? request()->input('title') : $post->title,
            "description" => request()->has('description') ? request()->input('description') : $post->description,
        ]);
        return redirect('dashboard')->with("message", __('Post updated successfully'));
    }
}
