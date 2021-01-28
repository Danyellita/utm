<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            'name' => 'required|string|between:2,100',
            'category_id' => 'required|string|email|max:100|unique:users',
            'composition' => 'required|string|min:6',
            'regions_id' => 'required|string|min:6',
            'weight' => 'required',
            'product_measurement' => 'required',
            'picture' => 'required|',
            'pharmacy_id' => 'required|string|min:6',

        ];


    }

     public function messages()
    {
        return [
            'name.required' => 'Please fix this field.',
            'category_id.required' => 'Please fix this field.',
            'composition.required' => 'Please fix this field.',
            'name.required' => 'Please fix this field.',
        ];
    }
}
