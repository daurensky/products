<?php

namespace App\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => "required|email|max:255|unique:users,{$this->user->id}",
            'password' => 'nullable|string|min:3|max:30',
            'type'     => 'required|in:STOCK,SHOP,OPERATOR'
        ];
    }
}
