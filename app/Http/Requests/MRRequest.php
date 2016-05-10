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
            'mr_date'=>'required|regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_received_date'=>'required|regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_officer'=>'required|regex:/^[a-zA-Z]*$/',
            'mr_received_by_officer_date'=>'required|regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_estimated_cost'=>'required|regex:/^[-+]?\d+$/',
            'mr_currency'=>'required|regex:/^[a-zA-Z]*$/',
            'mr_identity'=>'required|regex:/^[a-zA-Z\/]*$/',
            'mr_required_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_checked_on_egpc_site'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_rfq'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_rfq_closing_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_rfq_reminder'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_open'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_sent_to_tech_dept'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_received_from_tech_dept_closing_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_received_from_tech_dept_reminder'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_clarifications_sent_to_suppliers'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_clarifications_closing_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_clarifications_received_from_supplier'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_clarifications_received_from_supplier_reminder'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_clarifications_sent_to_tech'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_offers_evaluation'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_sent_for_budget_expansion'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_sent_for_budget_expansion_reminder'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'mr_remarks'=> 'regex:/^[a-zA-Z0-9\s]*$/',


        ];
    }
}
