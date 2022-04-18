<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title_ru'            => 'required|string|max:255',
            'title_kz'            => 'required|string|max:255',
            'details'             => 'required|string|max:1000',
            'price'               => 'required|numeric|min:1',
            'product_category_id' => 'required|exists:product_categories,id'
        ];
    }
}
