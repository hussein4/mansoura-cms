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


        
        'mrpath',
        'user_id',

    ];


    protected $dates =[

        'mr_date',
        'mr_received_date',
        'mr_received_by_officer_date',
        'mr_required_date',
        

        
        
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
        $this->attributes['mr_b_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }
   
    public function getmrbreceiveddateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbreceiveddateAttribute($date)
    {
        $this->attributes['mr_b_received_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrbreceivedbyofficerdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbreceivedbyofficerdateAttribute($date)
    {
        $this->attributes['mr_b_received_by_officer_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    //budgetry 



    public function getmrbudgetryrfqAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbudgetryrfqAttribute($date)
    {
        $this->attributes['mr_budgetry_rfq'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrrfqbudgetryclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqbudgetryclosingdateAttribute($date)
    {
        $this->attributes['mr_rfq_budgetry_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrrfqbudgetryreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqbudgetryreminderAttribute($date)
    {
        $this->attributes['mr_rfq_budgetry_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getmrbudgetrymemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrbudgetrymemoAttribute($date)
    {
        $this->attributes['mr_budgetry_memo'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getmrdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrdateAttribute($date)
    {
        $this->attributes['mr_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrreceiveddateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrreceiveddateAttribute($date)
    {
        $this->attributes['mr_received_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrreceivedbyofficerdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrreceivedbyofficerdateAttribute($date)
    {
        $this->attributes['mr_received_by_officer_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    
    //quotation

    public function getmrcheckedonegpcsiteAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrcheckedonegpcsiteAttribute($date)
    {
        $this->attributes['mr_checked_on_egpc_site'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrrfqAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqAttribute($date)
    {
        $this->attributes['mr_rfq'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrrfqclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqclosingdateAttribute($date)
    {
        $this->attributes['mr_rfq_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getmrrfqreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrrfqreminderAttribute($date)
    {
        $this->attributes['mr_rfq_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersopenAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersopenAttribute($date)
    {
        $this->attributes['mr_offers_open'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrofferssenttotechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrofferssenttotechdeptAttribute($date)
    {
        $this->attributes['mr_offers_sent_to_tech_dept'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersreceivedfromtechdeptclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersreceivedfromtechdeptclosingdateAttribute($date)
    {
        $this->attributes['mr_offers_received_from_tech_dept_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersreceivedfromtechdeptreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersreceivedfromtechdeptreminderAttribute($date)
    {
        $this->attributes['mr_offers_received_from_tech_dept_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersclarificationssenttosuppliersAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationssenttosuppliersAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_sent_to_suppliers'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getmroffersclarificationsclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationsclosingdateAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersclarificationsreceivedfromsupplierreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationsreceivedfromsupplierreminderAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_received_from_supplier_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersclarificationsreceivedfromsupplierAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationsreceivedfromsupplierAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_received_from_supplier'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getmroffersclarificationssenttotechAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersclarificationssenttotechAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_sent_to_tech'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersevaluationAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmroffersevaluationAttribute($date)
    {
        $this->attributes['mr_offers_evaluation'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrsentforbudgetexpansionAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrsentforbudgetexpansionAttribute($date)
    {
        $this->attributes['mr_sent_for_budget_expansion'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrsentforbudgetexpansionreminderAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrsentforbudgetexpansionreminderAttribute($date)
    {
        $this->attributes['mr_sent_for_budget_expansion_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    //Tender 




    public function getmrtwillingfaxAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtwillingfaxAttribute($date)
    {
        $this->attributes['mr_t_willing_fax'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtwillingfaxclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtwillingfaxclosingdateAttribute($date)
    {
        $this->attributes['mr_t_willing_fax_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmr_t_prepare_draftAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtpreparedraftAttribute($date)
    {
        $this->attributes['mr_t_prepare_draft']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtsubbidcommitteeformationmemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsubbidcommitteeformationmemoAttribute($date)
    {
        $this->attributes['mr_t_sub_bid_committee_formation_memo']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendercriteriamemoreplyAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendercriteriamemoreplyAttribute($date)
    {
        $this->attributes['mr_sent_for_budget_expansion_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendercriteriamemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendercriteriamemoAttribute($date)
    {
        $this->attributes['mr_t_tender_criteria_memo']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendercallfortendermemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendercallfortendermemoAttribute($date)
    {
        $this->attributes['mr_t_tender_call_for_tender_memo']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendercallfortendersignatureAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendercallfortendersignatureAttribute($date)
    {
        $this->attributes['mr_t_tender_call_for_tender_signature']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendersendinvitationfaxAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttendersendinvitationfaxAttribute($date)
    {
        $this->attributes['mr_t_tender_send_invitation_fax'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtclarificationssenttotechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtclarificationssenttotechdeptAttribute($date)
    {
        $this->attributes['mr_t_clarifications_sent_to_tech_dept'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtclosingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtclosingdateAttribute($date)
    {
        $this->attributes['mr_t_closing_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtclarificationsreceivedfromtechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtclarificationsreceivedfromtechdeptAttribute($date)
    {
        $this->attributes['mr_t_clarifications_received_from_tech_dept'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtclarificationsreplyfaxAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtclarificationsreplyfaxAttribute($date)
    {
        $this->attributes['mr_t_clarifications_reply_fax']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtopentechenvelopsAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtopentechenvelopsAttribute($date)
    {
        $this->attributes['mr_t_open_tech_envelops']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrtreceivedtechclarificationsfromtechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtreceivedtechclarificationsfromtechdeptAttribute($date)
    {
        $this->attributes['mr_t_received_tech_clarifications_from_tech_dept']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
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
        $this->attributes['mr_t_receive_tech_clarifications_reply']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtsendtechclarificationsreplytotechdeptAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsendtechclarificationsreplytotechdeptAttribute($date)
    {
        $this->attributes['mr_t_send_tech_clarifications_reply_to_tech_dept']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtreceivetechevaluationreportAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtreceivetechevaluationreportAttribute($date)
    {
        $this->attributes['mr_t_receive_tech_evaluation_report']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtissuetechevaluationAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtissuetechevaluationAttribute($date)
    {
        $this->attributes['mr_t_issue_tech_evaluation']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttechevalsignatureAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrttechevalsignatureAttribute($date)
    {
        $this->attributes['mr_t_tech_eval_signature']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtopencommercialoffersAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtopencommercialoffersAttribute($date)
    {
        $this->attributes['mr_t_open_commercial_offers']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtissuecommercialevaluationAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtissuecommercialevaluationAttribute($date)
    {
        $this->attributes['mr_t_issue_commercial_evaluation']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }
    
     public function getmrtcommercialevaluationsignatureAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtcommercialevaluationsignatureAttribute($date)
    {
        $this->attributes['mr_t_commercial_evaluation_signature']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

 public function getmrtsendingawardingfaxesAttribute($date)
{
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsendingawardingfaxesAttribute($date)
{
$this->attributes['mr_t_sending_awarding_faxes']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }
    
     public function getmrtsendingfinmemoAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setmrtsendingfinmemoAttribute($date)
    {
        $this->attributes['mr_t_sending_fin_memo']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
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

    public function tenders()
    {
        return $this->hasMany('App\Tender' ,'mr_tender' ,'mr_id')->withTimestamps();
    }



    /**
     * @return mixed
     */
    public function getTagListmrAttribute()
    {
        return $this->tags->lists('id')->all();
    }

}
