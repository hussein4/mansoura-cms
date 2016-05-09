<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BudgetryRequest extends Request
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
            'mr_b_no' => 'required|regex:/^([A-Z]{3,}\s\d{3}\-\d{2})$/',
            'mr_b_subject'=>'required|regex:/^[a-zA-Z0-9\s]*$/',
            'mr_b_date'=>'required|regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_b_received_date'=>'required',
            'mr_b_officer'=>'required|regex:/^[a-zA-Z]*$/',
            
            
        ];
    }
}
