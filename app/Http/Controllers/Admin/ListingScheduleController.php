<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ListingScheduleDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ListingScheduleStoreReqeust;
use App\Models\ListingSchedule;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ListingScheduleController extends Controller
{
    public function index(ListingScheduleDataTable $dataTable) : view | JsonResponse
    {
        return $dataTable->render('admin.listing.listing-schedule.index');
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

        return to_route('admin.listing-schedule.index', ['id' => $listingId]);
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

        return to_route('admin.listing-schedule.index', ['id' => $schedule->listing_id]);
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
