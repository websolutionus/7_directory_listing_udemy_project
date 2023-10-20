<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{
    function index() : View
    {
        $hero = Hero::first();
        $categories = Category::where('status', 1)->get();
        return view('frontend.home.index', compact('hero', 'categories'));
    }
}
