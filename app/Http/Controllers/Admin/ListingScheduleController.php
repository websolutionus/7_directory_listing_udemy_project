<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ListingScheduleDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ListingScheduleController extends Controller
{
    public function index(ListingScheduleDataTable $dataTable) : view | JsonResponse
    {
        return $dataTable->render('admin.listing.listing-schedule.index');
    }

    function create() : View {
        return view('admin.listing.listing-schedule.create');
    }
}
