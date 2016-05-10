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
            'po_issued'=> 'required|regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_total_cost'=> 'required|regex:/^[0-9]*$/',
            'po_currency'=> 'required|regex:/^[a-zA-Z]*$/',
            'po_payment_method'=>'required|regex:/^[a-zA-Z0-9]*$/',
            'po_delivery_date'=>'required|regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_delivery_method'=>'required|regex:/^[a-zA-Z]*$/',
            'po_materials_cost'=> 'regex:/^[0-9]*$/',
            'po_freight_cost'=> 'regex:/^[0-9]*$/',
            'po_purchase_method'=>'required|regex:/^[a-zA-Z]*$/',
            'po_confirmation'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_loaded_on_ideas'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_approved_on_ideas'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_memo_to_fin'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_reminder_delivery_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_mr_received_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_mrr_received_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_mrr_missing_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_mrr_rejected_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_invoice_received_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_penalty'=>'regex:/^[a-zA-Z0-9]*$/',
            'po_cover_invoice'=>'required|regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_remarks'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'po_completed'=>'regex:/^[a-zA-Z0-9]*$/',

        ];
    }
}
