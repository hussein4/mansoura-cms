<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class MR extends Model  implements SluggableInterface
{

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'mr_no',
        'save_to'    => 'slug',
    ];

    protected $table = 'mrs';
  protected $dateFormat = 'd-M-Y g:i A';
    
    protected $fillable = [


        'mr_no',
        'mr_date',
        'mr_subject',
        'mr_identity',
        'mr_received_date',
        'mr_required_date',
        'mr_officer',
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


        'slug',
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

    public static function fixNull($date)
    {
        $date = (is_null($date) || empty($date) || strlen($date) < 1 ? NULL : $date);
        return $date;
    }
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
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;


    }

    public function setmrdateAttribute($date)
    {
        $this->attributes['mr_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;

    }

    public function getmrreceiveddateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;

    }

    public function setmrreceiveddateAttribute($date)
    {
        $this->attributes['mr_received_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrreceivedbyofficerdateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;

    }

    public function setmrreceivedbyofficerdateAttribute($date)
    {
        $this->attributes['mr_received_by_officer_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    
    //quotation

    public function getmrcheckedonegpcsiteAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;

    }

    public function setmrcheckedonegpcsiteAttribute($date)
    {
        $this->attributes['mr_checked_on_egpc_site'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrrfqAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;

    }

    public function setmrrfqAttribute($date)
    {
        $this->attributes['mr_rfq'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrrfqclosingdateAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmrrfqclosingdateAttribute($date)
    {
        $this->attributes['mr_rfq_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getmrrfqreminderAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmrrfqreminderAttribute($date)
    {
        $this->attributes['mr_rfq_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersopenAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersopenAttribute($date)
    {
        $this->attributes['mr_offers_open'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrofferssenttotechdeptAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmrofferssenttotechdeptAttribute($date)
    {
        $this->attributes['mr_offers_sent_to_tech_dept'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersreceivedfromtechdeptclosingdateAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersreceivedfromtechdeptclosingdateAttribute($date)
    {
        $this->attributes['mr_offers_received_from_tech_dept_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersreceivedfromtechdeptreminderAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersreceivedfromtechdeptreminderAttribute($date)
    {
        $this->attributes['mr_offers_received_from_tech_dept_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersclarificationssenttosuppliersAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersclarificationssenttosuppliersAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_sent_to_suppliers'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getmroffersclarificationsclosingdateAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersclarificationsclosingdateAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_closing_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersclarificationsreceivedfromsupplierreminderAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersclarificationsreceivedfromsupplierreminderAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_received_from_supplier_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersclarificationsreceivedfromsupplierAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersclarificationsreceivedfromsupplierAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_received_from_supplier'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getmroffersclarificationssenttotechAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersclarificationssenttotechAttribute($date)
    {
        $this->attributes['mr_offers_clarifications_sent_to_tech'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmroffersevaluationAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmroffersevaluationAttribute($date)
    {
        $this->attributes['mr_offers_evaluation'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrsentforbudgetexpansionAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmrsentforbudgetexpansionAttribute($date)
    {
        $this->attributes['mr_sent_for_budget_expansion'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getmrsentforbudgetexpansionreminderAttribute($date)
    {
                return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null; 
    }

    public function setmrsentforbudgetexpansionreminderAttribute($date)
    {
        $this->attributes['mr_sent_for_budget_expansion_reminder'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    //Tender 





    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function po()
    {
        return $this->belongsToMany('App\PO','mr_po','mr_id','po_id')->withTimestamps();
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

    public function materials()
    {
        return $this->belongsToMany('App\Material', 'material_mr','mr_id','material_id');
    }



    /**
     * @return mixed
     */
    public function getTagListmrAttribute()
    {
        return $this->tags->lists('id')->all();
    }

    public function getMaterialMrListAttribute()
    {
        return $this->materials->lists('id')->all();
    }

    public function getPoMrListAttribute()
    {
        return $this->po->lists('id')->all();
    }

}
