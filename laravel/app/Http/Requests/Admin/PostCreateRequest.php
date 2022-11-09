<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\PostTranslation;

class PostCreateRequest extends FormRequest
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
        PostTranslation::$rules['image'] = ['required'];
        return PostTranslation::$rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Please fill out this field.',
            'title.string' => 'This field must be a string.',
            'title.min' => 'This field  must be at least 5 digits.',
            'description.required' => 'Please fill out this field.',
            'description.string' => 'This field must be a string.',
            'description.min' => 'This field  must be at least 5 digits.',
            'content.required' => 'Please fill out this field.',
            'content.string' => 'This field must be a string.',
            'content.min' => 'This field  must be at least 5 digits.',
            'slug.required' => 'Please fill out this field.',
            'slug.min' => 'This field  must be at least 5 digits.',
            'image.required' => 'Please choose image'
        ];
    }
}
