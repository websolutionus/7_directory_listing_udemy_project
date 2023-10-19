<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\AgentListingScheduleDataTable;
use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AgentListingScheduleController extends Controller
{
    public function index(AgentListingScheduleDataTable $dataTable, string $listingId) : View | JsonResponse
    {
        $dataTable->with('listingId', $listingId);
        $listingTitle = Listing::select('title')->where('id', $listingId)->first();
        return $dataTable->render('frontend.dashboard.listing.schedule.index', compact('listingId', 'listingTitle'));
    }

    function create(Request $request, string $listingId) : View {

        return view('admin.listing.listing-schedule.create', compact('listingId'));
    }

    function store(ListingScheduleStoreReqeust $request, string $listingId) : RedirectResponse {

        $schedule = new ListingSchedule();
        $schedule->listing_id = $listingId;
        $schedule->day = $request->day;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->status = $request->status;
        $schedule->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.listing-schedule.index', $listingId);
    }

    function edit(string $id) : View {
        $schedule = ListingSchedule::findOrFail($id);
        return view('admin.listing.listing-schedule.edit', compact('schedule'));
    }

    function update(ListingScheduleStoreReqeust $request, string $id) : RedirectResponse {

        $schedule = ListingSchedule::findOrFail($id);
        $schedule->day = $request->day;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->status = $request->status;
        $schedule->save();

        toastr()->success('Update Successfully!');

        return to_route('admin.listing-schedule.index', $schedule->listing_id);
    }

    function destroy(string $id) : Response {
        try {
            $schedule = ListingSchedule::findOrFail($id);
            $schedule->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        }catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
