<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuBuilderController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:menu builder index']);
    }

    function index() : View {
        return view('admin.menu-builder.index');
    }
}
