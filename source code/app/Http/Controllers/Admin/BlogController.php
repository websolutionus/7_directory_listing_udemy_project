<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreateRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Traits\FileUploadTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    use FileUploadTrait;

    function __construct()
    {
        $this->middleware(['permission:blog index'])->only(['index']);
        $this->middleware(['permission:blog create'])->only(['create', 'store']);
        $this->middleware(['permission:blog update'])->only(['edit', 'update']);
        $this->middleware(['permission:blog delete'])->only(['destroy']);

    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(BlogDataTable $dataTable) : View | JsonResponse
    {
        return $dataTable->render('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() :View
    {
        $categories = BlogCategory::where('status', 1)->get();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogCreateRequest $request)
    {
        $imagePath = $this->uploadImage($request, 'image');

        $blog = new Blog();
        $blog->image = $imagePath;
        $blog->author_id = auth()->user()->id;
        $blog->title = $request->title;
        $blog->slug = \Str::slug($request->title);
        $blog->blog_category_id = $request->category;
        $blog->description = $request->description;
        $blog->is_popular = $request->is_popular;
        $blog->status = $request->status;
        $blog->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.blog.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $categories = BlogCategory::where('status', 1)->get();
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('categories', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, string $id)
    {
        $imagePath = $this->uploadImage($request, 'image', $request->old_image);

        $blog = Blog::findOrFail($id);
        $blog->image = !empty($imagePath) ? $imagePath : $request->old_image;
        $blog->title = $request->title;
        $blog->author_id = auth()->user()->id;
        $blog->slug = \Str::slug($request->title);
        $blog->blog_category_id = $request->category;
        $blog->description = $request->description;
        $blog->is_popular = $request->is_popular;
        $blog->status = $request->status;
        $blog->save();

        toastr()->success('Update Successfully!');

        return to_route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $this->deleteFile($blog->image);
            $blog->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        }catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
