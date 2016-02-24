<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class MR extends Model
{
    protected $table = 'mrs';
  protected $dateFormat = 'd-M-Y g:i A';
    
    protected $fillable = [


        'mr_no',
        'mr_date',
        'mr_subject',
        'mr_received_date',
        'mr_required_date',
        'mr_received_by_officer_date',
        'mr_estimated_cost',
        'mr_currency',
       
        //Budgetry
        'mr_b_date',
        'mr_b_received_date',
        'mr_b_received_by_officer_date',
        'mr_budgetry_rfq',
        'mr_rfq_budgetry_closing_date',
        'mr_rfq_budgetry_reminder',
        'mr_budgetry_memo',



        //Quotation
        'mr_checked_on_egpc_site',
        'mr_rfq',
        'mr_rfq_closing_date',
        'mr_rfq_reminder',
        'mr_offers_open',
        'mr_offers_sent_to_tech_dept',
        'mr_offers_received_from_tech_dept_closing_date',
        'mr_offers_received_from_tech_dept_reminder',
        'mr_offers_clarifications_sent_to_suppliers',
        'mr_offers_clarifications_closing_date',
        'mr_offers_clarifications_received_from_supplier',
        'mr_offers_clarifications_received_from_supplier_reminder',
        'mr_offers_clarifications_sent_to_tech',
        'mr_offers_evaluation',
        'mr_sent_for_budget_expansion',
        'mr_sent_for_budget_expansion_reminder',

        //Tender
        'mr_t_identity',
        'mr_t_willing_fax',
        'mr_t_willing_fax_closing_date',
        'mr_t_prepare_draft',
        'mr_t_sub_bid_committee_formation_memo',
        'mr_t_tender_criteria_memo',
        'mr_t_tender_criteria_memo_reply',
        'mr_t_tender_call_for_tender_memo',
        'mr_t_tender_call_for_tender_signature',
        'mr_t_tender_send_invitation_fax',
        'mr_t_closing_date',
        'mr_t_clarifications_sent_to_tech_dept',
        'mr_t_clarifications_received_from_tech_dept',
        'mr_t_clarifications_reply_fax',
        'mr_t_open_tech_envelops',
        'mr_t_received_tech_clarifications_from_tech_dept',
        'mr_t_sending_tech_clarifications_to_suppliers',
        'mr_t_receive_tech_clarifications_reply',
        'mr_t_send_tech_clarifications_reply_to_tech_dept',
        'mr_t_receive_tech_evaluation_report',
        'mr_t_issue_tech_evaluation',
        'mr_t_tech_eval_signature',
        'mr_t_open_commercial_offers',
        'mr_t_issue_commercial_evaluation',
        'mr_t_commercial_evaluation_signature',
        'mr_t_sending_awarding_faxes',

        'mr_t_sending_fin_memo',

        'mr_t_finished',
        
        'mrpath',
        'user_id',

    ];


    protected $dates =[

        'mr_date',
        'mr_received_date',
        'mr_received_by_officer_date',
        'mr_required_date',
        
        //budgetry
        'mr_b_date',
        'mr_b_received_date',
        'mr_b_received_by_officer_date',
        'mr_budgetry_rfq',
        'mr_rfq_budgetry_closing_date',
        'mr_rfq_budgetry_reminder',
        'mr_budgetry_memo',
        
        
        
       //Quotation
        'mr_checked_on_egpc_site',
        'mr_rfq',
        'mr_rfq_closing_date',
        'mr_rfq_reminder',
        'mr_offers_open',
        'mr_offers_sent_to_tech_dept',
        'mr_offers_received_from_tech_dept_closing_date',
        'mr_offers_received_from_tech_dept_reminder',
        'mr_offers_received_from_tech_dept' ,
        'mr_offers_clarifications_sent_to_suppliers',
        'mr_offers_clarifications_closing_date',
        'mr_offers_clarifications_received_from_supplier',
        'mr_offers_clarifications_received_from_supplier_reminder',
        'mr_offers_clarifications_sent_to_tech',
        'mr_offers_evaluation',
        'mr_sent_for_budget_expansion',
        'mr_sent_for_budget_expansion_reminder',

        //Tender
        
        'mr_t_willing_fax',
        'mr_t_willing_fax_closing_date',
        'mr_t_prepare_draft',
        'mr_t_sub_bid_committee_formation_memo',
        'mr_t_tender_criteria_memo',
        'mr_t_tender_criteria_memo_reply',
        'mr_t_tender_call_for_tender_memo',
        'mr_t_tender_call_for_tender_signature',
        'mr_t_tender_send_invitation_fax',
        'mr_t_closing_date',
        'mr_t_clarifications_sent_to_tech_dept',
        'mr_t_clarifications_received_from_tech_dept',
        'mr_t_clarifications_reply_fax',
        'mr_t_open_tech_envelops',
        'mr_t_received_tech_clarifications_from_tech_dept',
        'mr_t_sending_tech_clarifications_to_suppliers',
        'mr_t_receive_tech_clarifications_reply',
        'mr_t_send_tech_clarifications_reply_to_tech_dept',
        'mr_t_receive_tech_evaluation_report',
        'mr_t_issue_tech_evaluation',
        'mr_t_tech_eval_signature',
        'mr_t_open_commercial_offers',
        'mr_t_issue_commercial_evaluation',
        'mr_t_commercial_evaluation_signature',
        'mr_t_sending_awarding_faxes',

        'mr_t_sending_fin_memo',
         
    ];


    /**
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('created_at','<=',Carbon::now());
    }

    /**
     * @param $date
     */
    public function setCreatedatAttribute($date)
    {
        $this->attributes['created_at']=Carbon::parse($date);
    }

    /**
     * get created on attribute
     * @param $date
     * @return string
     */
    public function getCreatedatAttribute($date)
    {
        return  Carbon::parse($date)->format('d-M-Y g:i A');
    }






    public function getmrbdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbdateAttribute($date)
    {
        $this->attributes['mr_b_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }
   
    public function getmrbreceiveddateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbreceiveddateAttribute($date)
    {
        $this->attributes['mr_b_received_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrbreceivedbyofficerdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbreceivedbyofficerdateAttribute($date)
    {
        $this->attributes['mr_b_received_by_officer_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    //budgetry 



    public function getmrbudgetryrfqAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbudgetryrfqAttribute($date)
    {
        $this->attributes['mr_budgetry_rfq'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrrfqbudgetryclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqbudgetryclosingdateAttribute($date)
    {
        $this->attributes['mr_rfq_budgetry_closing_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrrfqbudgetryreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqbudgetryreminderAttribute($date)
    {
        $this->attributes['mr_rfq_budgetry_reminder'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }



    public function getmrbudgetrymemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbudgetrymemoAttribute($date)
    {
        $this->attributes['mr_budgetry_memo'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }



    public function getmrdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrdateAttribute($date)
    {
        $this->attributes['mr_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrreceiveddateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrreceiveddateAttribute($date)
    {
        $this->attributes['mr_received_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrreceivedbyofficerdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrreceivedbyofficerdateAttribute($date)
    {
        $this->attributes['mr_received_by_officer_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    
    //quotation

    public function getmrcheckedonegpcsiteAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrcheckedonegpcsiteAttribute($date)
    {
        $this->attributes['mr_checked_on_egpc_site'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrrfqAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqAttribute($date)
    {
        $this->attributes['mr_rfq'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrrfqclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqclosingdateAttribute($date)
    {
        $this->attributes['mr_rfq_closing_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }



    public function getmrrfqreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqreminderAttribute($date)
    {
        $this->attributes['mr_rfq_reminder'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmroffersopenAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersopenAttribute($date)
    {
        $this->attributes['mr_offers_open'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrofferssenttotechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrofferssenttotechdeptAttribute($date)
    {
        $this->attributes['mr_offers_sent_to_tech_dept'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmroffersreceivedfromtechdeptclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersreceivedfromtechdeptclosingdateAttribute($date)
    {
        $this->attributes['mr_offers_received_from_tech_dept_closing_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmroffersreceivedfromtechdeptreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersreceivedfromtechdeptreminderAttribute($date)
    {
        $this->attributes['mr_offers_received_from_tech_dept_reminder'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmroffersclarificationssenttosuppliersAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationssenttosuppliersAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_sent_to_suppliers'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }



    public function getmroffersclarificationsclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationsclosingdateAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_closing_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmroffersclarificationsreceivedfromsupplierreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationsreceivedfromsupplierreminderAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_received_from_supplier_reminder'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmroffersclarificationsreceivedfromsupplierAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationsreceivedfromsupplierAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_received_from_supplier'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }



    public function getmroffersclarificationssenttotechAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationssenttotechAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_sent_to_tech'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmroffersevaluationAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersevaluationAttribute($date)
    {
        $this->attributes['mr_offers_evaluation'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrsentforbudgetexpansionAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrsentforbudgetexpansionAttribute($date)
    {
        $this->attributes['mr_sent_for_budget_expansion'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrsentforbudgetexpansionreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrsentforbudgetexpansionreminderAttribute($date)
    {
        $this->attributes['mr_sent_for_budget_expansion_reminder'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    //Tender 




    public function getmrtwillingfaxAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtwillingfaxAttribute($date)
    {
        $this->attributes['mr_t_willing_fax'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtwillingfaxclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtwillingfaxclosingdateAttribute($date)
    {
        $this->attributes['mr_t_willing_fax_closing_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmr_t_prepare_draftAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtpreparedraftAttribute($date)
    {
        $this->attributes['mr_t_prepare_draft']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtsubbidcommitteeformationmemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsubbidcommitteeformationmemoAttribute($date)
    {
        $this->attributes['mr_t_sub_bid_committee_formation_memo']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrttendercriteriamemoreplyAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendercriteriamemoreplyAttribute($date)
    {
        $this->attributes['mr_sent_for_budget_expansion_reminder'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrttendercriteriamemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendercriteriamemoAttribute($date)
    {
        $this->attributes['mr_t_tender_criteria_memo']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrttendercallfortendermemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendercallfortendermemoAttribute($date)
    {
        $this->attributes['mr_t_tender_call_for_tender_memo']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrttendercallfortendersignatureAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendercallfortendersignatureAttribute($date)
    {
        $this->attributes['mr_t_tender_call_for_tender_signature']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrttendersendinvitationfaxAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendersendinvitationfaxAttribute($date)
    {
        $this->attributes['mr_t_tender_send_invitation_fax'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtclarificationssenttotechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtclarificationssenttotechdeptAttribute($date)
    {
        $this->attributes['mr_t_clarifications_sent_to_tech_dept'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtclosingdateAttribute($date)
    {
        $this->attributes['mr_t_closing_date']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtclarificationsreceivedfromtechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtclarificationsreceivedfromtechdeptAttribute($date)
    {
        $this->attributes['mr_t_clarifications_received_from_tech_dept'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtclarificationsreplyfaxAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtclarificationsreplyfaxAttribute($date)
    {
        $this->attributes['mr_t_clarifications_reply_fax']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtopentechenvelopsAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtopentechenvelopsAttribute($date)
    {
        $this->attributes['mr_t_open_tech_envelops']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getmrtreceivedtechclarificationsfromtechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtreceivedtechclarificationsfromtechdeptAttribute($date)
    {
        $this->attributes['mr_t_received_tech_clarifications_from_tech_dept']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtsendingtechclarificationstosuppliersAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsendingtechclarificationstosuppliersAttribute($date)
    {
        $this->attributes['mr_t_sending_tech_clarifications_to_suppliers'] =Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtreceivetechclarificationsreplyAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtreceivetechclarificationsreplyAttribute($date)
    {
        $this->attributes['mr_t_receive_tech_clarifications_reply']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtsendtechclarificationsreplytotechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsendtechclarificationsreplytotechdeptAttribute($date)
    {
        $this->attributes['mr_t_send_tech_clarifications_reply_to_tech_dept']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtreceivetechevaluationreportAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtreceivetechevaluationreportAttribute($date)
    {
        $this->attributes['mr_t_receive_tech_evaluation_report']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtissuetechevaluationAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtissuetechevaluationAttribute($date)
    {
        $this->attributes['mr_t_issue_tech_evaluation']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrttechevalsignatureAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttechevalsignatureAttribute($date)
    {
        $this->attributes['mr_t_tech_eval_signature']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtopencommercialoffersAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtopencommercialoffersAttribute($date)
    {
        $this->attributes['mr_t_open_commercial_offers']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getmrtissuecommercialevaluationAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtissuecommercialevaluationAttribute($date)
    {
        $this->attributes['mr_t_issue_commercial_evaluation']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }
    
     public function getmrtcommercialevaluationsignatureAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtcommercialevaluationsignatureAttribute($date)
    {
        $this->attributes['mr_t_commercial_evaluation_signature']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

 public function getmrtsendingawardingfaxesAttribute($date)
{
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsendingawardingfaxesAttribute($date)
{
$this->attributes['mr_t_sending_awarding_faxes']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }
    
     public function getmrtsendingfinmemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsendingfinmemoAttribute($date)
    {
        $this->attributes['mr_t_sending_fin_memo']= Carbon::createFromFormat('d-M-Y g:i A', $date);
    }





    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function po()
    {
        return $this->hasMany('App\PO')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag' ,'mrs_tag','mr_id')->withTimestamps();
    }

    public function vlist()
    {
        return $this->hasMany('App\Vlist')->withTimestamps();
    }



    /**
     * @return mixed
     */
    public function getTagListmrAttribute()
    {
        return $this->tags->lists('id')->all();
    }

}
