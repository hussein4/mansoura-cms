<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class MR extends Model
{
    protected $table = 'mrs';
    protected $dateFormat = 'd-M-Y H:i';
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

    ];


    protected $dates =[

        'mr_date',
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
        return  Carbon::parse($date)->format('d-M-Y H:i:s');
    }



    public function getmrdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y H:i');
    }

    public function setmrdateAttribute($date)
    {
        $this->attributes['mr_date'] = Carbon::createFromFormat('d-M-Y H:i', $date);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
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
