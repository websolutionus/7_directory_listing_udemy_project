<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SocialLinkDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SocialLinkCreateRequest;
use App\Http\Requests\Admin\SocialLinkUpdateRequest;
use App\Models\SocialLink;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SocialLinkController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:social link index']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(SocialLinkDataTable $dataTable) : View|JsonResponse
    {
        return $dataTable->render('admin.social-link.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() :View
    {
        return view('admin.social-link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SocialLinkCreateRequest $request) : RedirectResponse
    {
        $link = new SocialLink();
        $link->icon = $request->icon;
        $link->url = $request->url;
        $link->status = $request->status;
        $link->save();

        toastr()->success('Created Successfully!');
        return to_route('admin.social-link.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $link = SocialLink::findOrFail($id);
        return view('admin.social-link.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SocialLinkUpdateRequest $request, string $id)
    {
        $link = SocialLink::findOrFail($id);
        if($request->filled('icon')){
            $link->icon = $request->icon;
        }
        $link->url = $request->url;
        $link->status = $request->status;
        $link->save();

        toastr()->success('Update Successfully!');
        return to_route('admin.social-link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            SocialLink::findOrFail($id)->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        }catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
