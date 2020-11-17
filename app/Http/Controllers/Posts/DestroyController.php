<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\DestroyRequest;
use App\Models\Post;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param DestroyRequest $request
     * @param Post $post
     * @return RedirectResponse
     * @throws Exception
     */
    public function __invoke(DestroyRequest $request, Post $post)
    {
        $post->delete();
        return redirect('dashboard')->with("message", __('Post deleted successfully'));
    }
}
