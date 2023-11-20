<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Models\Category;
use App\Traits\FileUploadTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Str;

class CategoryController extends Controller
{
    use FileUploadTrait;

    function __construct()
    {
        $this->middleware(['permission:listing index'])->only(['index']);
        $this->middleware(['permission:listing create'])->only(['create', 'store']);
        $this->middleware(['permission:listing update'])->only(['edit', 'update']);
        $this->middleware(['permission:listing delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable) : View | JsonResponse
    {
        return $dataTable->render('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request) : RedirectResponse
    {
        $iconPath = $this->uploadImage($request, 'image_icon');
        $backgroundPath = $this->uploadImage($request, 'background_image');

        $category = new Category();
        $category->image_icon = $iconPath;
        $category->background_image = $backgroundPath;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->show_at_home = $request->show_at_home;
        $category->status = $request->status;
        $category->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.category.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, string $id) : RedirectResponse
    {
        $iconPath = $this->uploadImage($request, 'image_icon', $request->old_icon);
        $backgroundPath = $this->uploadImage($request, 'background_image', $request->olb_background);

        $category = Category::findOrFail($id);
        $category->image_icon = !empty($iconPath) ? $iconPath : $request->old_icon;
        $category->background_image = !empty($backgroundPath) ? $backgroundPath : $request->old_background;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->show_at_home = $request->show_at_home;
        $category->status = $request->status;
        $category->save();

        toastr()->success('Update Successfully!');

        return to_route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $this->deleteFile($category->image_icon);
        $this->deleteFile($category->background_image);

        $category->delete();

        return response(['status' => 'success', 'message' => 'Item deleted successfuly!']);

    }
}
