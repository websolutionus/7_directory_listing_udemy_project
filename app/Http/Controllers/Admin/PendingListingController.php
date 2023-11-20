<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PendingListingDataTable;
use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PendingListingController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:pending listing']);
    }

    function index(PendingListingDataTable $dataTable) {
        return $dataTable->render('admin.pending-listing.index');
    }

    function update(Request $request) : Response {
        $request->validate([
            'value' => ['boolean']
        ]);

        try{
            $listing = Listing::findOrFail($request->id);
            $listing->is_approved = $request->value;
            $listing->save();

            return response(['status' => 'success', 'message' => 'status updated successfully!']);
        }catch(\Exception $e){
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
