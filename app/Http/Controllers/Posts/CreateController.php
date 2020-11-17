<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\CreateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param CreateRequest $request
     * @return View
     */
    public function __invoke(CreateRequest $request)
    {
        return view('posts.create');
    }
}
