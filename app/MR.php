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
        'mr_received_by_officer_date',
        'mr_estimated_cost',
        'mr_budgetry_rfq',
        'mr_rfq_budgetry_closing_date',
        'mr_rfq_budgetry_reminder',
        'mr_budgetry_memo',
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

    ];


    protected $dates =[

        'mr_date',
        'mr_received_date',
        'mr_received_by_officer_date',

        'mr_budgetry_rfq',
        'mr_rfq_budgetry_closing_date',
        'mr_rfq_budgetry_reminder',
        'mr_budgetry_memo',
        'mr_checked_on_egpc_site',
        'mr_rfq',
        'mr_rfq_closing_date',
        'mr_rfq_reminder',
        'mr_offers_open',
        'mr_offers_sent_to_tech_dept',
        'mr_offers_received_from_tech_dept_closing_date',
        'mr_offers_received_from_tech_dept_reminder',
        //mr_offers_received_from_tech_dept ,
        'mr_offers_clarifications_sent_to_suppliers',
        'mr_offers_clarifications_closing_date',
        'mr_offers_clarifications_received_from_supplier',
        'mr_offers_clarifications_received_from_supplier_reminder',
        'mr_offers_clarifications_sent_to_tech',
        'mr_offers_evaluation',
        'mr_sent_for_budget_expansion',
        'mr_sent_for_budget_expansion_reminder',
          //mr_evaluation_signature
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
