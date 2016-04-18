<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class PO extends Model implements SluggableInterface
{

    use SluggableTrait;
    protected $sluggable = [
        'build_from' => 'po_no',
        'save_to'    => 'slug',
    ];

    protected $table = 'pos';
    protected $dateFormat = 'd-M-Y g:i A';



    protected $dates =[
        'po_issued',
        'po_confirmation',
        'po_loaded_on_ideas',
        'po_approved_on_ideas',
        'po_memo_to_fin',
        'po_delivery_date',
        'po_reminder_delivery_date',
        'po_mr_received_date',
        'po_mrr_received_date',
        'po_mrr_missing_date',
        'po_mrr_rejected_date',
        'po_invoice_received_date',
        'po_cover_invoice',

    ];



    protected $fillable = [
        'po_no',
        'po_subject',
        'po_materials_cost',
        'po_freight_cost',
        'po_total_cost',
        'po_currency',
        'po_purchase_method',
        'po_payment_method',
        'po_delivery_method',
        'po_issued',
        'po_confirmation',
        'po_loaded_on_ideas',
        'po_approved_on_ideas',
        'po_memo_to_fin',
        'po_delivery_date',
        'po_reminder_delivery_date',
        'po_mr_received_date',
        'po_mrr_received_date',
        'po_mrr_missing_date',
        'po_mrr_rejected_date',
        'po_invoice_received_date',
        'po_penalty',
        'po_cover_invoice',

        'po_completed',
        'slug',




        'user_id',

    ];


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


    public function getpoissuedAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpoissuedAttribute($date)
    {
        $this->attributes['po_issued']= $date ? Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getpoconfirmationAttribute($date)
    {
        //$value == "0000-00-00 00:00:00" ? "0000-00-00 00:00:00" : $value;
//        var_dump($date);
//        var_dump(!empty($date)?'ok':'not');
//        var_dump(Carbon::parse($date)->format('d-M-Y g:i A')); die;
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpoconfirmationAttribute($date)
    {
        $this->attributes['po_confirmation']= $date ? Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getpoloadedonideasAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpoloadedonideasAttribute($date)
    {
        $this->attributes['po_loaded_on_ideas']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getpoapprovedonideasAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpoapprovedonideasAttribute($date)
    {
        $this->attributes['po_approved_on_ideas']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getpomemotofinAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpomemotofinAttribute($date)
    {
        $this->attributes['po_memo_to_fin']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getpodeliverydateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpodeliverydateAttribute($date)
    {
        $this->attributes['po_delivery_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getporeminderdeliverydateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setporeminderdeliverydateAttribute($date)
    {
        $this->attributes['po_reminder_delivery_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }

    public function getpomrreceiveddateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpomrreceiveddateAttribute($date)
    {
        $this->attributes['po_mr_received_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getpomrrmissingdateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpomrrmissingdateAttribute($date)
    {
        $this->attributes['po_mrr_missing_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getpomrrrejecteddateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpomrrrejecteddateAttribute($date)
    {
        $this->attributes['po_mrr_rejected_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getpoinvoicereceiveddateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpoinvoicereceiveddateAttribute($date)
    {
        $this->attributes['po_invoice_received_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }


    public function getpomrrreceiveddateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpomrrreceiveddateAttribute($date)
    {
        $this->attributes['po_mrr_received_date']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }



    public function getpocoverinvoiceAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setpocoverinvoiceAttribute($date)
    {
        $this->attributes['po_cover_invoice']= $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }




    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function mr()
    {
        return $this->belongsToMany('App\MR' ,'mr_po','po_id','mr_id');
    }

    public function material()
    {
        return $this->belongsToMany('App\Material' ,'material_po','po_id','material_id');
    }


    public function tags()
    {
        return $this->belongsToMany('App\Tag' ,'pos_tag' ,'po_id')->withTimestamps();
    }


    public function suppliers()
    {
        return $this->belongsToMany('App\Vlist','po_vlist' ,'po_id','vlist_id');
    }


    public function tenders()
    {
        return $this->belongsToMany('App\Tender','po_tender' ,'po_id','tender_id');
    }

    public function getTagListpoAttribute()
    {
        return $this->tags->lists('id')->all();
    }

    public function getMrListAttribute()
    {
        return $this->mr->lists('id')->all();
    }

    public function getSuppliersListAttribute()
    {

        return $this->suppliers()->lists('id')->all();
    }


    public function getMaterialListAttribute()
    {

        return $this->material()->lists('id')->all();
    }



    public function getTendersListAttribute()
    {

        return $this->tenders()->lists('id')->all();
    }





}
