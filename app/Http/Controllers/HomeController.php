<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
