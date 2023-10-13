<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function renderCmsOverview()
    {
        $data['posts'] = Post::all();
        $data['total_post'] = $data['posts']->count();
        $data['total_user'] = User::all()->count();

        return view('admin.pages.cms.index', compact('data'));
    }
}
