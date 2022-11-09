<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\ReviewTranslation;

class ReviewCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ReviewTranslation::$rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Please fill out this field.',
            'name.unique' => 'This name has already been taken.',
            'slug.required' => 'Please fill out this field.',
            'slug.unique' => 'This slug has already been taken.',
            'link.required_if' => 'Please fill out this field.',
            'description.required' => 'Please fill out this field.',
            'description.min' => 'This field  must be at least 5 digits.',
            'content.required' => 'Please fill out this field.',
            'content.min' => 'This field  must be at least 5 digits.',
            'logo.required_if' => 'Please choose logo',
        ];
    }
}
