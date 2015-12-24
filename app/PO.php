<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PO extends Model
{
    protected $table = 'pos';
 protected $dateFormat = 'd-M-Y H:i';
  /*
    public function getDateFormat()
    {
        return 'd:m:Y H:i:s';
    }
*/


    protected $dates =[
        'po_issued',
        'po_confirmed',
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
        'po_confirmed',
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
        return  Carbon::parse($date);
    }


    public function getpoissuedAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y H:i');
    }

    public function setpoissuedAttribute($date)
    {
        $this->attributes['po_issued'] = Carbon::createFromFormat('d-M-Y H:i', $date);
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
