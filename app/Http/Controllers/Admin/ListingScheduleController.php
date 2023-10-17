<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ListingScheduleDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingScheduleController extends Controller
{
    public function index(ListingScheduleDataTable $dataTable)
    {
        return $dataTable->render('admin.listing.listing-schedule.index');
    }
}
