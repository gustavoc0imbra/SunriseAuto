<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsPostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'string|required',
            'description' => 'string|nullable',
            'category_id' => 'integer|required',
            'image' => 'file|nullable',
            'cost_price' => 'regex:/^\d*(\.\d{1,2})?$/|required',
            'selling_price' => 'regex:/^\d*(\.\d{1,2})?$/|nullable'
        ];
    }
}
