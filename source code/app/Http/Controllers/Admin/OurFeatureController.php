<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OurFeatureDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OurFeatureCreateRequest;
use App\Models\OurFeature;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use function Ramsey\Uuid\v1;

class OurFeatureController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:section index'])->only(['index']);
        $this->middleware(['permission:section create'])->only(['create', 'store']);
        $this->middleware(['permission:section update'])->only(['update', 'edit']);
        $this->middleware(['permission:section delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(OurFeatureDataTable $dataTable) : View | JsonResponse
    {
        return $dataTable->render('admin.our-feature.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.our-feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurFeatureCreateRequest $request) : RedirectResponse
    {
        $ourFeature = new OurFeature();
        $ourFeature->icon = $request->icon;
        $ourFeature->title = $request->title;
        $ourFeature->short_description = $request->short_description;
        $ourFeature->status = $request->status;
        $ourFeature->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.our-features.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $ourFeature = OurFeature::findOrFail($id);
        return view('admin.our-feature.edit', compact('ourFeature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OurFeatureCreateRequest $request, string $id)
    {
        $ourFeature = OurFeature::findOrFail($id);
        $ourFeature->icon = $request->icon;
        $ourFeature->title = $request->title;
        $ourFeature->short_description = $request->short_description;
        $ourFeature->status = $request->status;
        $ourFeature->save();

        toastr()->success('Updated Successfully!');

        return to_route('admin.our-features.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            OurFeature::findOrFail($id)->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        }catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
