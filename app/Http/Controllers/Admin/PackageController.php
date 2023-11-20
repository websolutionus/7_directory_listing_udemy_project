<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PackageDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PackageCreateRequest;
use App\Models\Package;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PackageController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:package index'])->only(['index']);
        $this->middleware(['permission:package create'])->only(['create', 'store']);
        $this->middleware(['permission:package update'])->only(['edit', 'update']);
        $this->middleware(['permission:package delete'])->only(['destroy']);

    }

    /**
     * Display a listing of the resource.
     */
    public function index(PackageDataTable $dataTable) : View | JsonResponse
    {
        return $dataTable->render('admin.package.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PackageCreateRequest $request) : RedirectResponse
    {
        $package = new Package();
        $package->type = $request->type;
        $package->name = $request->name;
        $package->price = $request->price;
        $package->number_of_days = $request->number_of_days;
        $package->num_of_listing = $request->num_of_listing;
        $package->num_of_photos = $request->num_of_photos;
        $package->num_of_video = $request->num_of_video;
        $package->num_of_amenities = $request->num_of_amenities;
        $package->num_of_featured_listing = $request->num_of_featured_listing;
        $package->show_at_home = $request->show_at_home;
        $package->status = $request->status;
        $package->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.packages.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $package = Package::findOrFail($id);
        return view('admin.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PackageCreateRequest $request, string $id)
    {
        $package = Package::findOrFail($id);
        $package->type = $request->type;
        $package->name = $request->name;
        $package->price = $request->price;
        $package->number_of_days = $request->number_of_days;
        $package->num_of_listing = $request->num_of_listing;
        $package->num_of_photos = $request->num_of_photos;
        $package->num_of_video = $request->num_of_video;
        $package->num_of_amenities = $request->num_of_amenities;
        $package->num_of_featured_listing = $request->num_of_featured_listing;
        $package->show_at_home = $request->show_at_home;
        $package->status = $request->status;
        $package->save();

        toastr()->success('Update Successfully!');

        return to_route('admin.packages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Package::findOrFail($id)->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        }catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
