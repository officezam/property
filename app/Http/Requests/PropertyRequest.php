<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'title'            => 'required',
            'description'      => 'required',
            'purpose'          => 'required',
            'type'             => 'required',
            'propety_number'   => 'required',
            'street'           => 'required',
            'sector'           => 'required',
            'city'             => 'required',
            'region'           => 'required',
            'latitude'         => 'required',
            'longitude'        => 'required',
            'payment_address'  => 'required',
            'price'            => 'required',
            'area'             => 'required',
            'area_unit'        => 'required',
            'beds'             => 'required',
            'bathroom'         => 'required',
            'kitchens'         => 'required',
            'powerroom'        => 'required',
            'propertexpire'    => 'required',
        ];
    }
}
