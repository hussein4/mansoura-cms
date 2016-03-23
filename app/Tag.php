<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Tag extends Model implements SluggableInterface
{

    use SluggableTrait;
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $fillable = [
        'name',
        'slug',
    ];


    /**
     * Get the Vlist associated with a given tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function vlist()
    {
        return $this->belongsToMany('App\Vlist',"vlist_tag")->withTimestamps();
    }

    public function mr()
    {
        return $this->belongsToMany('App\MR',"mrs_tag" ,'tag_id',"mr_id")->withTimestamps();
    }

    public function po()
    {
        return $this->belongsToMany('App\PO',"pos_tag", "po_id")->withTimestamps();
    }

    public function budgetry()
    {
        return $this->belongsToMany('App\Budgetry',"budgetry_tag", "budgetry_id")->withTimestamps();
    }

    public function tender()
    {
        return $this->belongsToMany('App\Tender',"tenders_tag",'tag_id', "tender_id")->withTimestamps();
    }

    public function material()
    {
        return $this->belongsToMany('App\Material',"material_tag",'tag_id', "material_id")->withTimestamps();
    }

}
