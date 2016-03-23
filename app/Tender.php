<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Tender extends Model implements SluggableInterface
{

    use SluggableTrait;
    protected $sluggable = [
        'build_from' => 'mr_t_no',
        'save_to'    => 'slug',
    ];


    protected $table = 'tenders';
    protected $dateFormat = 'd-M-Y g:i A';

    protected $fillable = [

        'mr_t_no',
        'mr_t_subject',
        'mr_t_identity',
        'mr_t_officer',
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
        'slug',

        'user_id',




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
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmrtwillingfaxAttribute($date)
    {
        $this->attributes['mr_t_willing_fax'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtwillingfaxclosingdateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;  
    }

    public function setmrtwillingfaxclosingdateAttribute($date)
    {
        $this->attributes['mr_t_willing_fax_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtpreparedraftAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;  
    }

    public function setmrtpreparedraftAttribute($date)
    {
        $this->attributes['mr_t_prepare_draft']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtsubbidcommitteeformationmemoAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtsubbidcommitteeformationmemoAttribute($date)
    {
        $this->attributes['mr_t_sub_bid_committee_formation_memo']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendercriteriamemoreplyAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrttendercriteriamemoreplyAttribute($date)
    {
        $this->attributes['mr_t_tender_criteria_memo_reply'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendercriteriamemoAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrttendercriteriamemoAttribute($date)
    {
        $this->attributes['mr_t_tender_criteria_memo']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendercallfortendermemoAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrttendercallfortendermemoAttribute($date)
    {
        $this->attributes['mr_t_tender_call_for_tender_memo']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendercallfortendersignatureAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrttendercallfortendersignatureAttribute($date)
    {
        $this->attributes['mr_t_tender_call_for_tender_signature']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttendersendinvitationfaxAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrttendersendinvitationfaxAttribute($date)
    {
        $this->attributes['mr_t_tender_send_invitation_fax'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtclarificationssenttotechdeptAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtclarificationssenttotechdeptAttribute($date)
    {
        $this->attributes['mr_t_clarifications_sent_to_tech_dept'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtclosingdateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtclosingdateAttribute($date)
    {
        $this->attributes['mr_t_closing_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtclarificationsreceivedfromtechdeptAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtclarificationsreceivedfromtechdeptAttribute($date)
    {
        $this->attributes['mr_t_clarifications_received_from_tech_dept'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtclarificationsreplyfaxAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtclarificationsreplyfaxAttribute($date)
    {
        $this->attributes['mr_t_clarifications_reply_fax']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtopentechenvelopsAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtopentechenvelopsAttribute($date)
    {
        $this->attributes['mr_t_open_tech_envelops']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrtreceivedtechclarificationsfromtechdeptAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtreceivedtechclarificationsfromtechdeptAttribute($date)
    {
        $this->attributes['mr_t_received_tech_clarifications_from_tech_dept']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtsendingtechclarificationstosuppliersAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtsendingtechclarificationstosuppliersAttribute($date)
    {
        $this->attributes['mr_t_sending_tech_clarifications_to_suppliers'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtreceivetechclarificationsreplyAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtreceivetechclarificationsreplyAttribute($date)
    {
        $this->attributes['mr_t_receive_tech_clarifications_reply']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtsendtechclarificationsreplytotechdeptAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtsendtechclarificationsreplytotechdeptAttribute($date)
    {
        $this->attributes['mr_t_send_tech_clarifications_reply_to_tech_dept']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtreceivetechevaluationreportAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtreceivetechevaluationreportAttribute($date)
    {
        $this->attributes['mr_t_receive_tech_evaluation_report']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtissuetechevaluationAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtissuetechevaluationAttribute($date)
    {
        $this->attributes['mr_t_issue_tech_evaluation']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrttechevalsignatureAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrttechevalsignatureAttribute($date)
    {
        $this->attributes['mr_t_tech_eval_signature']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtopencommercialoffersAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtopencommercialoffersAttribute($date)
    {
        $this->attributes['mr_t_open_commercial_offers']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtissuecommercialevaluationAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtissuecommercialevaluationAttribute($date)
    {
        $this->attributes['mr_t_issue_commercial_evaluation']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtcommercialevaluationsignatureAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtcommercialevaluationsignatureAttribute($date)
    {
        $this->attributes['mr_t_commercial_evaluation_signature']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtsendingawardingfaxesAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtsendingawardingfaxesAttribute($date)
    {
        $this->attributes['mr_t_sending_awarding_faxes']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getmrtsendingfinmemoAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setmrtsendingfinmemoAttribute($date)
    {
        $this->attributes['mr_t_sending_fin_memo']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }





    public function user()
    {
        return $this->belongsToMany('App\User' ,'tender_user' ,'tender_id');
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
