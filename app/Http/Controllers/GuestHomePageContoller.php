<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class GuestHomePageContoller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data['posts'] = Post::all();
        return view('guest.welcome', compact('data'));
    }
}
