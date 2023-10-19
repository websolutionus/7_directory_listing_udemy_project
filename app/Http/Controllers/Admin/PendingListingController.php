<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PendingListingDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendingListingController extends Controller
{
    function index(PendingListingDataTable $dataTable) {
        return $dataTable->render('admin.pending-listing.index');
    }
}
