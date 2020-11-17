<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param Post $post
     * @return View
     */
    public function __invoke(Request $request, Post $post)
    {
        return view('posts.edit')->with("post", $post);
    }
}
