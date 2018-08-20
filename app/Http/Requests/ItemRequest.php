<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'name'          => 'required | max:100 | min:3 | string',
            'code'          => 'required | max:10 | min:3 | string',
            'stock'         => 'nullable | integer',
            'price'         => 'required | integer',
            'description'   => 'nullable | max:255  | min:5 | string',
            'weight'        => 'required | integer',
            'dimention'     => 'required | integer',
            'material'      => 'required | string | max:100 | min:3'
        ];
    }
}
