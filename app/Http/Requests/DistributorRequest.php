<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistributorRequest extends FormRequest
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
            'name'              => 'required | max:100 | min:3 | string',
            'owner'             => 'required | max:100 | min:3 | string',
            'province'          => 'required | max:100 | min:3 | string',
            'city'              => 'required | max:100 | min:3 | string',
            'address'           => 'required | max:255 | min:20 | string',
            'email'             => 'required | email',
            'telephone'         => 'required | max:13 | min:3 | integer',
            'address_2'         => 'nullable | max:255  | min:20 | string',
            'distance'          => 'nullable | integer',
            'bill'              => 'nullable | integer',
            'account'           => 'required | integer'
        ];
    }
}
