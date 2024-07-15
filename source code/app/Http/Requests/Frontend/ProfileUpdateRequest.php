<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'avatar' => ['nullable', 'image', 'max:2000'],
            'banner' => ['nullable', 'image', 'max:2000'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'max:50'],
            'address' => ['required', 'max:255'],
            'about' => ['required', 'max:300'],
            'website' => ['nullable', 'url',],
            'fb_link' => ['nullable', 'url',],
            'x_link' => ['nullable', 'url',],
            'in_link' => ['nullable', 'url',],
            'wa_link' => ['nullable', 'url',],
            'instra_link' => ['nullable', 'url',],
        ];
    }
}
