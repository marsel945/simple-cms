<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FormatDate;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.cms.post.index');
    }

    /**
     * 
     * Render Datatable post resource
     * 
     */

    public function datatable()
    {
        $query = Post::query()->orderBy('updated_at');

        return DataTables::of($query)
            ->addColumn('check', function ($item) {
                $element = '<div class="form-check">
                                <input type="checkbox" class="form-check-input" id="categoryCheck1">
                                <label class="form-check-label" for="categoryCheck1"></label>
                            </div>';
                return $element;
            })
            ->addColumn('title', fn ($item) => $item->title)
            ->addColumn('category', fn ($item) => Post::find($item->category_id)->category->title)
            ->addColumn('date', fn ($item) => FormatDate::getDateTimeCutMonth($item->created_at))
            ->addColumn('author', function ($item) {
                $author = Post::find($item->user_id)->author->name;
                $element = '';
                $element .= '<div class="d-flex align-items-center">';
                $element .= '<img src="../../assets/images/avatar/avatar-7.jpg"';
                $element .= 'alt="" class="rounded-circle avatar-xs me-2" />';
                $element .= '<h5 class="mb-0">' . $author  . '</h5>';
                $element .= '</div>';

                return $element;
            })
            ->addColumn('status', function ($item) {
                $element = '';

                if ($item->status == 'draft') {
                    $element = '<span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>Draft';
                } else if ($item->status == 'published') {
                    $element = '<span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>Published';
                } else if ($item->status = 'scheduled') {
                    $element = '<span class="badge-dot bg-info me-1 d-inline-block align-middle"></span>Scheduled';
                }
                return $element;
            })
            ->addColumn('action', function ($item) {
                $element = '';
                $element .= '<span class="dropdown dropstart">';
                $element .= '<a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">';
                $element .= '<i class="fe fe-more-vertical"></i>';
                $element .= '</a>';
                $element .= '<span class="dropdown-menu" aria-labelledby="courseDropdown1">';
                $element .= '<span class="dropdown-header">Settings</span>';
                $element .= '<a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>';
                $element .= '<a class="dropdown-item" href="#"><i class="fe fe-move dropdown-item-icon"></i>Move</a>';
                $element .= '<a class="dropdown-item" href="#"><i class="fe fe-copy dropdown-item-icon"></i>Copy</a>';
                $element .= '<a class="dropdown-item" href="#"><i class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>';
                $element .= '<a class="dropdown-item" href="#"><i class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>';
                $element .= '<a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Delete</a>';
                $element .= '</span></span>';

                return $element;
            })
            ->rawColumns(['check', 'author', 'status', 'action'])
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::all();
        $data['title'] = 'Add Post';
        return view('pages.admin.cms.post.add', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        dd("halo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
