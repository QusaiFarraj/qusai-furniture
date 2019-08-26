<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|required',
            'slug' => 'string|required|unique',
            'active' => 'bool',
            'display_name' => 'string',
            'description' => 'text',
            'dimensions' => 'text',
            'care' => 'text',
            'price' => 'float|required',
            'discount' => 'integer',
            'sku' => 'string|required',
            'finance_available' => 'bool',
            'finance_terms' => 'string',
            'warranty' => 'bool',
            'returnable' => 'bool',
            'delivery_included' => 'bool',
        ];
    }
}
