<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ReviewDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    function index(ReviewDataTable $dataTable) : View | JsonResponse {
        return $dataTable->render('admin.listing.listing-review.index');
    }
}
