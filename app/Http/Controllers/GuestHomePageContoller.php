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
        $data['title'] = 'Home';

        foreach ($data['posts'] as $post) {
            if ($post->attachment->count() > 0) {
                $post->cover = $post->attachment->first()->path . '/' . $post->attachment->first()->file;
            }
        }
        return view('guest.welcome', compact('data'));
    }
}
