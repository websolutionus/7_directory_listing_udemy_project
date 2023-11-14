<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogCommentDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogCommentController extends Controller
{
    function index(BlogCommentDataTable $dataTable) : View | JsonResponse
    {
        return $dataTable->render('admin.blog.blog-comment.index');
    }
}
