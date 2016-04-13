<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;




class Vlist extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'vname',
        'save_to'    => 'slug',
    ];

    protected $table = 'vlist';

    protected $dateFormat = 'd-M-Y g:i A';

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
        'user_id',


        'slug',



    ];

    protected $dates = [

        'created_on',
        'updated_on',

    ];


    public function scopePublished($query)
    {
        $query->where('created_at','<=',Carbon::now());
    }


    public function getCreatedatAttribute($date)
    {
        return  Carbon::parse($date)->format('d-M-Y g:i A');
    }

    public function setCreatedatAttribute($date)
    {
        $this->attributes['created_at']=Carbon::parse($date);

    }


    public function getUpdatedatAttribute($date)
    {
        return  Carbon::parse($date)->format('d-M-Y g:i A');


    }

    public function setUpdatedatAttribute($date)
    {
        $this->attributes['updated_at']=Carbon::parse($date);
    }



/*

    public function getupdatedatAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;
    }

    public function setupdatedatAttribute($date)
    {
        $this->attributes['updated_at']= $date ? Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }
*/

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

    public function budgetry()
    {
        return $this->hasMany('App\Budgetry' ,'budgetry_vlist');
    }

    public function tender()
    {
        return $this->hasMany('App\Tender' ,'tender_vlist');
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

