<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ReviewDataTable;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ReviewController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:listing review']);
    }

    function index(ReviewDataTable $dataTable) : View | JsonResponse {
        return $dataTable->render('admin.listing.listing-review.index');
    }

    /** Update review Status */
    function updateStatus(string $id) : Response {
        $review = Review::findOrFail($id);
        $review->is_approved = !$review->is_approved;
        $review->save();
        return response(['status' => 'success', 'message' => 'Updated Successfully']);
    }

    /** destroy item */
    function destroy(string $id) : Response {
        try {
            Review::findOrFail($id)->delete();

            return response(['status' => 'success', 'message' => 'Deleted successfully!']);
        }catch(\Exception $e){
            logger($e);
            return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
