<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Material extends Model  implements SluggableInterface
{

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'm_description',
        'save_to'    => 'slug',
    ];
    
    public $timestamps = false;

    protected $table = 'materials';
    protected $dateFormat = 'd-M-Y g:i A';
   
    protected $dates =[
        'm_last_update_date',
    ];

    protected $fillable = [
        'm_code',
        'm_description',
        'm_unit',
        'm_consumption',
        'm_last_unit_price',
        'm_last_unit_price_currency',
        'm_max',
        'm_min',
        'm_remarks',
        'm_required',
        'm_stock',
        'm_usage',
        'm_requesting_dept',
        'm_identity',
        'm_company',
        'm_location',
        'm_reorder',
        'm_last_update_date',
        'm_mesc',
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



    public function getmlastupdatedateAttribute($date)
    {
        return ($date != "0000-00-00 00:00:00" && !is_null($date)) ? Carbon::parse($date)->format('d-M-Y g:i A') : null;

    }

    public function setmlastupdatedateAttribute($date)
    {
        $this->attributes['m_last_update_date'] = $date ?Carbon::createFromFormat('d-M-Y g:i A', $date)->toDateString() : null;
    }




    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function mr()
    {
        return $this->belongstoMany('App\MR')->withTimestamps();
    }

    public function po()
    {
        return $this->belongstoMany('App\PO')->withTimestamps();
    }


    public function tags()
    {
        return $this->belongsToMany('App\Tag' )->withTimestamps();
    }


    public function suppliers()
    {
        return $this->hasMany('App\Vlist');
    }



    public function getTagMaterialListAttribute()
    {
        return $this->tags->lists('id')->all();
    }

    public function getMrMaterialListAttribute()
    {
        return $this->mr->lists('id')->all();
    }

    public function getSuppliersMaterialListAttribute()
    {

        return $this->suppliers()->lists('id')->all();
    }




}
