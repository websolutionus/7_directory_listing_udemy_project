<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ListingScheduleDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ListingScheduleStoreReqeust;
use App\Models\ListingSchedule;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
}
