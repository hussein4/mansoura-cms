<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MRRequest extends Request
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
            'mr_no' => 'required|regex:/^([A-Z]{3,}\s\d{3}\-\d{2})$/',
            'mr_subject'=> 'required|regex:/^[a-zA-Z0-9\s]*$/',
            'mr_date'=>'required',
            'mr_received_date'=>'required',
            'mr_officer'=>'required|regex:/^[a-zA-Z]*$/',
            'mr_received_by_officer_date'=>'required',
            'mr_estimated_cost'=>'required|regex:/^[-+]?\d+$/',
            'mr_currency'=>'required|regex:/^[a-zA-Z]*$/',


        ];
    }
}
