<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ClaimDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClaimController extends Controller
{
    function index(ClaimDataTable $dataTable) : View | JsonResponse {
        return $dataTable->render('admin.claim.index');
    }
}
