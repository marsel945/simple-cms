<?php

namespace App\Http\Controllers\Admin;

use Throwable;
use App\Helpers\Json;
use App\Models\Category;
use Illuminate\View\View;
use App\Helpers\FormatDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data['categories'] = Category::all();
        $data['title'] = 'Post Categories';
        return view('admin.pages.cms.category.index', compact('data'));
    }

    /**
     * Render datatable serverside
     * 
     */
    public function datatable()
    {
        $query = Category::query()->orderBy('updated_at');

        return DataTables::of($query)
            ->addColumn('title', fn ($item) => $item->title)
            ->addColumn('slug', fn ($item) => $item->slug)
            ->addColumn('posts', fn ($item) => $item->post->count())
            ->addColumn('date_created', fn ($item) => date('d M Y', strtotime($item->created_at)))
            ->addColumn('date_updated', fn ($item) => FormatDate::getDateTimeCutMonth($item->updated_at))
            ->addColumn('status', function ($item) {
                $element = '';
                if ($item->status == 'live') {
                    $element .= '<span class="badge bg-success">Live</span>';
                } else {
                    $element .= '<span class="badge bg-warning">Draft</span>';
                }

                return $element;
            })
            ->addColumn('action', function ($item) {
                $element = ' <span class="dropdown dropstart">
                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                    role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                    data-bs-offset="-20,20" aria-expanded="false">
                    <i class="fe fe-more-vertical"></i>
                </a>
                <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                    <span class="dropdown-header">Action</span>
                    <a class="dropdown-item" href="#"><i
                            class="fe fe-send dropdown-item-icon"></i>Publish</a>
                    <a class="dropdown-item" href="#"><i
                            class="fe fe-inbox dropdown-item-icon"></i>Moved
                        Draft</a>';
                $element .= '<button class="dropdown-item" data-id ="' . $item->id . '" onclick="editCategory(this)" data-url_edit = "' . route('admin.cms.category.edit', $item->id) . '" data-url_update="' . route('admin.cms.category.update', $item->id) . '" ><i class="fe fe-edit dropdown-item-icon"></i>Edit</button>';
                $element .= '<form  id="delete-' . $item->id . '" action="' . route('admin.cms.category.destroy', $item->id) . '" method="POST">';
                $element .= method_field('DELETE');
                $element .= csrf_field();
                $element .= '<button class="dropdown-item" type="button"  data-id ="' . $item->id . '" data-url_delete="' . route('admin.cms.category.destroy', $item->id) . '" onclick="alertConfirm(this)" data-id="' . $item->id . '"><i class="fe fe-trash dropdown-item-icon"></i>Delete</button>';
                $element .= '</form>';
                $element .= '</span></span>';
                return $element;
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        try {

            DB::beginTransaction();
            $category = new Category();

            $category->parent_id = $request->parent_id;
            $category->title = $request->title;
            $category->slug = $category->slug;
            $category->status = 'draft';

            $category->save();
            DB::commit();
            return redirect()->back()->with('success', trans('response.success.store', ['data' => 'Category']));
        } catch (Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): JsonResponse
    {
        try {
            DB::beginTransaction();

            $data = Category::findOrFail($id);
            return Json::success($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return Json::error($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCategoryRequest $request, string $id)
    {
        try {
            DB::beginTransaction();
            $data = Category::findOrFail($id);
            $data->update($request->validated());
            DB::commit();

            return redirect()->back()->with('success', trans('response.success.update', ['data' => 'Category']));
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', trans('response.error.update', ['data' => $th->getMessage()]));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            DB::beginTransaction();
            $find_category = Category::find($category)->firstOrFail();

            $find_category->delete();
            DB::commit();

            return redirect()->back()->with('success', trans('response.success.delete', ['data' => 'Category']));
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', trans('response.error.delete', ['data' => $th->getMessage()]));
        }
    }
}
