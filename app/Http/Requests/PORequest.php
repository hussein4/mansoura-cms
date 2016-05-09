<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PORequest extends Request
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

            'po_no' => 'required|regex:/\d{4}\-\d{4}$/',
            'po_subject'=> 'required|regex:/^[a-zA-Z0-9\s]*$/',
            'po_issued'=> 'required',
            'po_total_cost'=> 'required|regex:/^[0-9]*$/',
            'po_currency'=> 'required|regex:/^[a-zA-Z]*$/',
            'po_payment_method'=>'required|regex:/^[a-zA-Z0-9]*$/',
            'po_delivery_date'=>'required',
            'po_delivery_method'=>'required|regex:/^[a-zA-Z]*$/',




        ];
    }
}
