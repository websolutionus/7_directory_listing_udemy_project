<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SectionTitleUpdateRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'our_feature_title' => ['nullable', 'string', 'max:255'],
            'our_feature_sub_title' => ['nullable', 'string', 'max:255'],
            'our_categories_title' => ['nullable', 'string', 'max:255'],
            'our_categories_sub_title' => ['nullable', 'string', 'max:255'],
            'our_location_title' => ['nullable', 'string', 'max:255'],
            'our_location_sub_title' => ['nullable', 'string', 'max:255'],
            'our_featured_listing_title' => ['nullable', 'string', 'max:255'],
            'our_featured_listing_sub_title' => ['nullable', 'string', 'max:255'],
            'our_our_pricing_title' => ['nullable', 'string', 'max:255'],
            'our_our_pricing_sub_title' => ['nullable', 'string', 'max:255'],
            'our_testimonial_title' => ['nullable', 'string', 'max:255'],
            'our_testimonial_sub_title' => ['nullable', 'string', 'max:255'],
            'our_blog_title' => ['nullable', 'string', 'max:255'],
            'our_blog_sub_title' => ['nullable', 'string', 'max:255'],
        ];
    }
}
