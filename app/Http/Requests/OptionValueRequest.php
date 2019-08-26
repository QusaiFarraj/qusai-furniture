<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OptionValueRequest extends FormRequest
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
            'type' => 'string|required',
            'price' => 'float|required',
            'discount' => 'integer',
            'sku' => 'string|required',
            'color' => 'string',
            'default' => 'bool',
            'active' => 'bool',
        ];
    }
}
