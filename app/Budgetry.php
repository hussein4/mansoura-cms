<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Budgetry extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'mr_b_no',
        'save_to'    => 'slug',
    ];

    protected $table = 'budgetries';
    protected $dateFormat = 'd-M-Y g:i A';

    protected $fillable = [

        'mr_b_no',
        'mr_b_subject',
        'mr_b_estimated_cost',
        'mr_b_currency',
        'mr_b_date',
        'mr_b_received_date',
        'mr_b_officer',
        'mr_b_received_by_officer_date',
        'mr_budgetry_rfq',
        'mr_rfq_budgetry_closing_date',
        'mr_rfq_budgetry_reminder',
        'mr_budgetry_memo',
        'mr_b_finished',
        'slug',
        'user_id',

    ];


    protected $dates =[
        'mr_b_date',
        'mr_b_received_date',
        'mr_b_received_by_officer_date',
        'mr_budgetry_rfq',
        'mr_rfq_budgetry_closing_date',
        'mr_rfq_budgetry_reminder',
        'mr_budgetry_memo',
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





    public function user()
    {
        return $this->belongsTo('App\User' , 'budgetry_user', 'budgetry_id' , 'user_id')->withTimestamps();
    }


    public function tags()
    {
        return $this->belongsToMany('App\Tag' ,'budgetry_tag','budgetry_id')->withTimestamps();
    }

    public function vlist()
    {
        return $this->hasMany('App\Vlist')->withTimestamps();
    }



    /**
     * @return mixed
     */
    public function getTagListbudgetryAttribute()
    {
        return $this->tags->lists('id')->all();
    }



}
