<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Vlist extends Model
{
    protected $table = 'vlist';

    protected $fillable = [
        'vname',
        'vservice',
        'vfax',
        'vphone',
        'vmobile',
        'vemail',
        'vcontactperson',
        'vaddress',
        'vcapitallimit',
        'vegpcno',
        'vremarks',
        'vgrade',
        'vpath',
        'created_on' ,
        'created_at',


    ];

    protected $dates = ['created_on','=>','date(Y-m-d H:i:s)'];


    public function scopePublished($query)
    {
         $query->where('created_on','<=',Carbon::now());
    }

    public function setCreatedonAttribute($date)
    {
        $this->attributes['created_on']=Carbon::parse($date);
    }

    /**
     * get created on attribute
     * @param $date
     * @return string
     */
    public function getCreatedonAttribute($date)
    {
       return  Carbon::parse($date)->format('Y-m-d');
    }


    /**
     * vlist is owned by a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * get the tag associated with given supplier
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag' ,'vlist_tag')->withTimestamps();
    }

    public function mr()
    {
        return $this->belongsToMany('App\MR' ,'mrs_tag')->withTimestamps();
    }

    public function po()
    {
        return $this->hasMany('App\PO' ,'po_vlist');
    }


    /**
     * get a list of tag ids associated with the current vlist
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }


}

