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
       'mr_t_officer'=> 'required|regex:/^[a-zA-Z]*$/',
       'mr_t_identity'=>'regex:/^[a-zA-Z0-9\s\-\/]*$/',
        'mr_t_willing_fax'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_willing_fax_closing_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_prepare_draft'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_sub_bid_committee_formation_memo'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_tender_criteria_memo'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_tender_criteria_memo_reply'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_tender_call_for_tender_memo'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_tender_call_for_tender_signature'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_tender_send_invitation_fax'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_closing_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_clarifications_sent_to_tech_dept'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_clarifications_received_from_tech_dept'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_clarifications_reply_fax'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_open_tech_envelops'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_received_tech_clarifications_from_tech_dept'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_sending_tech_clarifications_to_suppliers'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_receive_tech_clarifications_reply'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_send_tech_clarifications_reply_to_tech_dept'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_receive_tech_evaluation_report'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_issue_tech_evaluation'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_tech_eval_signature'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_open_commercial_offers'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_issue_commercial_evaluation',
        'mr_t_commercial_evaluation_signature'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_sending_awarding_faxes'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_sending_fin_memo'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        'mr_t_finished'=>'regex:/^[a-zA-Z0-9\s]*$/',
        'mr_t_remarks'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
        ];
    }
}
