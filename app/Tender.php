<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tender extends Model
{
    protected $table = 'tenders';
    protected $dateFormat = 'd-M-Y g:i A';

    protected $fillable = [

        'mr_t_no',
        'mr_t_subject',
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




    ];


    protected $dates =[


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

    public function getmrtpreparedraftAttribute($date)
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
        $this->attributes['mr_t_tender_criteria_memo_reply'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
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
        return $this->belongsToMany('App\User');
    }

    public function po()
    {
        return $this->hasMany('App\PO')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag' ,'mrs_tag','mr_id')->withTimestamps();
    }

    public function suppliers()
    {
        return $this->belongsToMany('App\Vlist' , 'tender_vlist','tender_id');
    }

    public function mr()
    {
        return $this->belongsToMany('App\MR' ,'mr_tender','tender_id','mr_id');
    }



    /**
     * @return mixed
     */
    public function getTagListtenderAttribute()
    {
        return $this->tags->lists('id')->all();
    }

    public function getMrTenderListAttribute()
    {
        return $this->mr->lists('id')->all();
    }

    public function getSuppliersTenderListAttribute()
    {
        return $this->suppliers->lists('id')->all();
    }



}
