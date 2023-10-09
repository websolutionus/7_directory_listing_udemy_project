<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HeroController extends Controller
{
    function index() : View {
        return view('admin.hero.index');
    }
}
