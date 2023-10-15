<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Helpers\FormatDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostAttachment;
use App\Models\TemporaryPostAttachment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data['title'] = 'All Post';

        return view('admin.pages.cms.post.index', compact('data'));
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

            ->addColumn('title', fn ($item) => $item->title)
            ->addColumn('category', fn ($item) => $item->category->title)
            ->addColumn('date', fn ($item) => FormatDate::getDateTimeCutMonth($item->created_at))
            ->addColumn('author', function ($item) {
                $author = $item->author->name;
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
                $element .= '<span class="dropdown-header">Actions</span>';
                $element .= '<a class="dropdown-item" href="' . route('admin.cms.post.edit', $item->slug) . '"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>';
                $element .= '<a class="dropdown-item" href="#"><i class="fe fe-move dropdown-item-icon"></i>Detail</a>';
                $element .= '<form  id="delete-' . $item->id . '" action="' . route('admin.cms.post.destroy', $item->id) . '" method="POST">';
                $element .= method_field('DELETE');
                $element .= csrf_field();
                $element .= '<button class="dropdown-item" type="button"  data-id ="' . $item->id . '" data-url_delete="' . route('admin.cms.post.destroy', $item->id) . '" onclick="alertConfirm(this)" data-id="' . $item->id . '"><i class="fe fe-trash dropdown-item-icon"></i>Delete</button>';
                $element .= '</form>';
                $element .= '</span></span>';

                return $element;
            })
            ->rawColumns(['author', 'status', 'action'])
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::all();
        $data['title'] = 'Add Post';
        return view('admin.pages.cms.post.add', compact('data'));
    }

    public function uploadAttachmentFile(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $folder = uniqid('post-image-', true);
            $image->storeAs('images/tmp/' . $folder, $fileName);
            TemporaryPostAttachment::create([
                'folder' => $folder,
                'file' => $fileName
            ]);

            return $folder;
        }

        return '';
    }

    public function deleteAttachmentFile()
    {
        $temporaryAttachmentFile = TemporaryPostAttachment::where('folder', request()->getContent())->first();
        if ($temporaryAttachmentFile) {
            Storage::deleteDirectory('images/tmp/' . $temporaryAttachmentFile->folder);
            $temporaryAttachmentFile->delete();
        }

        return response()->noContent();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $temporaryAttachmentFiles = TemporaryPostAttachment::all();

        try {
            DB::beginTransaction();

            $newPost = new Post();

            $newPost->user_id = Auth::user()->id;
            $newPost->category_id = $request->category_id;
            $newPost->title = $request->title;
            $newPost->slug = $request->slug;
            $newPost->excerpt = $request->excerpt;
            $newPost->content = $request->content;

            $newPost->save();

            foreach ($temporaryAttachmentFiles as $temporaryAttachmentFile) {
                Storage::copy('images/tmp/' . $temporaryAttachmentFile->folder . '/' . $temporaryAttachmentFile->file, 'images/' . $temporaryAttachmentFile->folder . '/' . $temporaryAttachmentFile->file);
                PostAttachment::create([
                    'post_id' => $newPost->id,
                    'file' =>  $temporaryAttachmentFile->file,
                    'path' => $temporaryAttachmentFile->folder
                ]);
                Storage::deleteDirectory('images/tmp/' . $temporaryAttachmentFile->folder);
                $temporaryAttachmentFile->delete();
            }
            DB::commit();

            return to_route('admin.cms.posts')->with('success', trans('response.success.store', ['data' => 'Post']));
        } catch (\Throwable $th) {
            foreach ($temporaryAttachmentFiles as $temporaryAttachmentFile) {
                Storage::deleteDirectory('images/tmp/' . $temporaryAttachmentFile->folder);
                $temporaryAttachmentFile->delete();
            }
            DB::rollBack();
            dd($th->getMessage());
        }
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
    public function edit(string $slug)
    {
        $find_post = Post::where('slug', $slug)->firstOrFail();

        $data['categories'] = Category::all();
        $data['post'] = $find_post;
        $data['title'] = 'Edit Post';
        return view('admin.pages.cms.post.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $slug)
    {

        try {
            DB::beginTransaction();
            $find_post = Post::where('slug', $slug)->firstOrFail();
            $find_post->slug = null;
            $find_post->update($request->validated());
            DB::commit();
            return to_route('admin.cms.posts')->with('success', trans('response.success.update', ['data' => 'Post']));
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        $files = $post->attachment;

        foreach ($files as $file) {
            Storage::deleteDirectory('images/' . $file->path);
            $file->delete();
        }
        $post->delete();

        return redirect()->back()->with('success', trans('response.success.delete', ['data' => 'Post']));
    }
}
