<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VlistRequest extends Request
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
            'vname' => 'required|min:4|regex:/^[a-zA-Z0-9\s]*$/',
            'vservice'=> 'required|min:4|regex:/^[a-zA-Z0-9\s\-\:\/]*$/',
            'vfax' => 'required|regex:/^[0-9\s\-\:\+]*$/',
            'vphone'=> 'required|regex:/^[0-9\s\-\:\+]*$/',
            'vaddress'=> 'required|min:4|regex:/^[a-zA-Z0-9\s\-\:\/]*$/',
                     

            'vmobile'=> 'regex:/^[0-9\s\-\:\+]*$/',
            'vemail'=> 'email|max:255|unique:users',
            'vcontactperson'=> 'regex:/^[a-zA-Z0-9\s]*$/',

            'vcapitallimit'=> 'regex:/^[a-zA-Z0-9\s]*$/',
            'vegpcno'=> 'regex:/^[a-zA-Z0-9\s\-\/]*$/',
            'vremarks'=>'regex:/^[a-zA-Z0-9\s\-\/]*$/',
            'vgrade'=>'regex:/^[0-9]*$/',

        ];
    }
}
