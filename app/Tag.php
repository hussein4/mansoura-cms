<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'name',




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
        return $this->belongsToMany('App\MR',"mrs_tag" ,"mr_id")->withTimestamps();
    }

    public function po()
    {
        return $this->belongsToMany('App\PO',"pos_tag", "po_id")->withTimestamps();
    }

}
