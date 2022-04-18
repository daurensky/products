<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title_ru' => 'required|string|max:255',
            'title_kz' => 'required|string|max:255',
        ];
    }
}
