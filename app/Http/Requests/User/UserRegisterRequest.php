<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'required|max:255',
            'password'  => 'required|confirmed',
        ];
    }
}
