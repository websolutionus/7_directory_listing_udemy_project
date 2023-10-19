<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\AgentListingScheduleDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ListingScheduleStoreReqeust;
use App\Models\Listing;
use App\Models\ListingSchedule;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AgentListingScheduleController extends Controller
{
    public function index(AgentListingScheduleDataTable $dataTable, string $listingId) : View | JsonResponse
    {
        $listing = Listing::select('id', 'title', 'user_id')->where('id', $listingId)->first();
        if($listing->user_id !== Auth::user()->id){
            abort(403);
        }
        $listingTitle = $listing;

        $dataTable->with('listingId', $listingId);
        return $dataTable->render('frontend.dashboard.listing.schedule.index', compact('listingId', 'listingTitle'));
    }

    function create(Request $request, string $listingId) : View {
        $listing = Listing::select('id', 'user_id')->where('id', $listingId)->first();
        if($listing->user_id !== Auth::user()->id){
            abort(403);
        }
        return view('frontend.dashboard.listing.schedule.create', compact('listingId'));
    }

    function store(ListingScheduleStoreReqeust $request, string $listingId) : RedirectResponse {
        $listing = Listing::select('id', 'user_id')->where('id', $listingId)->first();
        if($listing->user_id !== Auth::user()->id){
            abort(403);
        }

        $schedule = new ListingSchedule();
        $schedule->listing_id = $listingId;
        $schedule->day = $request->day;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->status = $request->status;
        $schedule->save();

        toastr()->success('Created Successfully!');

        return to_route('user.listing-schedule.index', $listingId);
    }

    function edit(string $id) : View {
        $schedule = ListingSchedule::findOrFail($id);

        $listing = Listing::select('id', 'user_id')->where('id', $schedule->listing_id)->first();
        if($listing->user_id !== Auth::user()->id){
            abort(403);
        }

        return view('frontend.dashboard.listing.schedule.edit', compact('schedule'));
    }

    function update(ListingScheduleStoreReqeust $request, string $id) : RedirectResponse {

        $schedule = ListingSchedule::findOrFail($id);
        $listing = Listing::select('id', 'user_id')->where('id', $schedule->listing_id)->first();
        if($listing->user_id !== Auth::user()->id){
            abort(403);
        }
        $schedule->day = $request->day;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->status = $request->status;
        $schedule->save();

        toastr()->success('Update Successfully!');

        return to_route('user.listing-schedule.index', $schedule->listing_id);
    }

    function destroy(string $id) : Response {
        $schedule = ListingSchedule::findOrFail($id);
        $listing = Listing::select('id', 'user_id')->where('id', $schedule->listing_id)->first();
        if($listing->user_id !== Auth::user()->id){
            abort(403);
        }
        try {
            $schedule->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        }catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
