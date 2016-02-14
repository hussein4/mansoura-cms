<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PO extends Model
{
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
        'po_completed',
    ];



    protected $fillable = [
        'po_no',
        'po_subject',
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
        'popath',

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
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpoissuedAttribute($date)
    {
        $this->attributes['po_issued'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getpoconfirmationAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpoconfirmationAttribute($date)
    {
        $this->attributes['po_confirmation'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getpoloadedonideasAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpoloadedonideasAttribute($date)
    {
        $this->attributes['po_loaded_on_ideas'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getpoapprovedonideasAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpoapprovedonideasAttribute($date)
    {
        $this->attributes['po_approved_on_ideas'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getpomemotofinAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpomemotofinAttribute($date)
    {
        $this->attributes['po_memo_to_fin'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getpodeliverydateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpodeliverydateAttribute($date)
    {
        $this->attributes['po_delivery_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getporeminderdeliverydateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setporeminderdeliverydateAttribute($date)
    {
        $this->attributes['po_reminder_delivery_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }

    public function getpomrreceiveddateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpomrreceiveddateAttribute($date)
    {
        $this->attributes['po_mr_received_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }



    public function getpomrrmissingdateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpomrrmissingdateAttribute($date)
    {
        $this->attributes['po_mrr_missing_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getpomrrrejecteddateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpomrrrejecteddateAttribute($date)
    {
        $this->attributes['po_mrr_rejected_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getpoinvoicereceiveddateAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpoinvoicereceiveddateAttribute($date)
    {
        $this->attributes['po_invoice_received_date'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getpocoverinvoiceAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpocoverinvoiceAttribute($date)
    {
        $this->attributes['po_cover_invoice'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }


    public function getpocompletedAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setpocompletedAttribute($date)
    {
        $this->attributes['po_completed'] = Carbon::createFromFormat('d-M-Y g:i A', $date);
    }





    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag' ,'pos_tag' ,'po_id')->withTimestamps();
    }


    public function vlist()
    {
        return $this->belongsTo('App\Vlist');
    }


    public function getTagListpoAttribute()
    {
        return $this->tags->lists('id')->all();
    }

}
