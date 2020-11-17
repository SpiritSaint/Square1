<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request)
    {
        $posts = Post::query()
            ->with('user')
            ->paginate(10);

        return view('welcome')->with("posts", $posts);
    }
}
