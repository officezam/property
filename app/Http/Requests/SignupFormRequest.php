<?php

namespace App\Http\Requests;
use Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Validation;
use App\Http\Controllers\Controller;




class SignupFormRequest extends FormRequest
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
       // 'DisplayName'       => 'required|min:2|unique:users,DisplayName,',


        return [
            'FirstName'         => 'required',
            'lastname'          => 'required',
            'emailAddress'      => 'required | email | unique:users,email,' ,
            'ConatctNumber'     => 'required',
            'CityName'          => 'required',
            'password'          => 'required|min:6',
            'BusinessType'      => 'required',
            'image'             => 'required',
            'iagree'             => 'required',
            'ConfrimPassword'   => 'required||min:6|same:password',
        ];
    }


    /**
     * Get the validation messages that will show on the page.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'FirstName.required'        => 'First Name is require',
            'lastname.required'         => 'Last Name is require',
            //'DisplayName.required'      => 'Display Name is require',
            'emailAddress.required'     => 'Email Address is require',
            'ConatctNumber1.required'   => 'Contact Number is require',
            'iagree.required'           => 'Please Checked Terms & Condition',
            'ConatctNumber.required'    => 'Contact Number is require',
            'CityName.required'         => 'City Name is require',
            'password.required'         => 'Password is require',
            'BusinessType.required'     => 'Business Type is require',


        ];
    }

}
