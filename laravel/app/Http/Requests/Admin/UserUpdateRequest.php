<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
    public function rules(Request $request)
    {
        User::$rules['email'] = ['required', Rule::unique('users')->ignore($request->user)];
        User::$rules['phone'] = ['nullable', Rule::unique('users')->ignore($request->user)];
        User::$rules['password'] = ['nullable', 'min:8', 'max:20'];
        User::$rules['passwordAgain'] = ['nullable', 'same:password'];
        return User::$rules;

    }
}
