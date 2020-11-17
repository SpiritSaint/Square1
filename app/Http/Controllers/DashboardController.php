<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request)
    {
        $query = Post::query()
            ->where('user_id', $request->user()->id)
            ->with('user');

        if (request()->has('sort') && in_array($request->input('sort'), ['asc', 'desc'])) {
            $query->orderBy('publication_date', $request->input('sort'));
        } else {
            $query->orderBy('publication_date', 'desc');
        }

        $posts = $query->paginate(15);
        return view('dashboard')->with("posts", $posts);
    }
}
