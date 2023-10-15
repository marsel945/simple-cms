<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostSingleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $slug)
    {
        $post = new Post();
        $post = $post->query()->where('slug', '=', $slug)->firstOrFail();
        $data['title'] = $post->title;
        $data['post'] = $post;
        return view('guest.post-single', compact('data'));
    }
}
