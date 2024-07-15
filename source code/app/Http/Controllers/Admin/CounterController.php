<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CounterUpdateRequest;
use App\Models\Counter;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CounterController extends Controller
{
    use FileUploadTrait;

    function __construct()
    {
        $this->middleware(['permission:section index'])->only(['index']);
        $this->middleware(['permission:section update'])->only(['update']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $counter = Counter::first();
        return view('admin.counter.index', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CounterUpdateRequest $request, string $id)
    {
        $imagePath = $this->uploadImage($request, 'background', $request->old_background);

        Counter::updateOrCreate(
            ['id' => 1],
            [
                'background' => !empty($imagePath) ? $imagePath : $request->old_background,
                'counter_one' => $request->counter_one,
                'counter_title_one' => $request->counter_title_one,
                'counter_two' => $request->counter_two,
                'counter_title_two' => $request->counter_title_two,
                'counter_three' => $request->counter_three,
                'counter_title_three' => $request->counter_title_three,
                'counter_four' => $request->counter_four,
                'counter_title_four' => $request->counter_title_four
            ]
        );

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }

}
