<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TenderRequest extends Request
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
            'mr_t_no' => 'required|regex:/^([A-Z]{3,3}\s\d{2}\-\d{2})$/',
            'mr_t_subject'=> 'required|regex:/^[a-zA-Z0-9\s]*$/',
            'mr_t_officer'=> 'required|regex:/^[a-zA-Z]*$/'
        ];
    }
}
