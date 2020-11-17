<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\StoreRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function __invoke(StoreRequest $request)
    {
        Post::query()->create([
            "user_id" => request()->user()->id,
            "title" => request()->input('title'),
            "description" => request()->input('description'),
            "publication_date" => now()
        ]);
        return redirect('dashboard')->with("message", __('Post created successfully'));
    }
}
