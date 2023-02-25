<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Name' => 'string|required',
            'Price' => 'numeric|required',
            'Descricao' => 'string|nullable',
            'Image' => 'image|nullable'
        ];
    }
}
