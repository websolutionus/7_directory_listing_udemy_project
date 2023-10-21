<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PackageCreateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', 'in:free,paid'],
            'name' => ['required', 'string', 'max:50'],
            'price' => ['required', 'numeric'],
            'number_of_days' => ['required', 'integer'],
            'num_of_listing' => ['required', 'integer'],
            'num_of_photos' => ['required', 'integer'],
            'num_of_video' => ['required', 'integer'],
            'num_of_amenities' => ['required', 'integer'],
            'num_of_featured_listing' => ['required', 'integer'],
            'show_at_home' => ['required', 'boolean'],
            'status' => ['required', 'boolean'],
        ];
    }

    function messages()
    {
        return [
            'num_of_listing.required' => 'Number of listing field is required',
            'num_of_listing.integer' => 'Number of listing value have to be integer',
            'num_of_photos.required' => 'Number of Photos field is required',
            'num_of_photos.integer' => 'Number of Photos value have to be integer',
            'num_of_video.required' => 'Number of Video field is required',
            'num_of_video.integer' => 'Number of Video value have to be integer',
            'num_of_amenities.required' => 'Number of Amenities field is required',
            'num_of_amenities.integer' => 'Number of Amenities value have to be integer',
            'num_of_featured_listing.required' => 'Number of Featured Listing field is required',
            'num_of_featured_listing.integer' => 'Number of Featured Listing value have to be integer',
        ];
    }
}
