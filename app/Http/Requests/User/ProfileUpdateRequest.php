<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'      => 'required|max:255',
            'last_name' => 'required|max:255',
            'email'     => 'required|email|unique:users,email,'. Auth::id(),
            'phone'     => 'required|max:255',
        ];
    }
}
