<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'     => 'required|string|max:255',
            'place_id' => 'required|exists:places,id',
            'street'   => 'required|string|max:255',
            'house'    => 'required|int',
        ];
    }
}
