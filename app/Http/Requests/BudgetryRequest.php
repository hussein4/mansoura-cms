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
            'mr_b_subject'=>'required|regex:/^[a-zA-Z0-9\s\-]*$/',
            'mr_b_estimated_cost'=>'regex:/^[-+]?\d+$/',
            'mr_b_currency'=>'regex:/^[a-zA-Z]*$/',
            'mr_b_date'=>'required|regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_b_received_date'=>'required',
            'mr_b_officer'=>'required|regex:/^[a-zA-Z]*$/',
            'mr_b_received_by_officer_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_budgetry_rfq'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_rfq_budgetry_closing_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_rfq_budgetry_reminder'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_budgetry_memo'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_b_finished'=>'regex:/^[0-9]*$/',
            'mr_b_remarks'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            
            
        ];
    }
}
