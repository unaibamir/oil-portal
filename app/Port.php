<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Port extends Model
{
    
    use Spatial;

    protected $spatial = ['location_cord'];

    public function location() {
    	return $this->belongsTo('App\Location');
    }

    public function terminals() {
    	return $this->hasMany('App\Terminal');
    }
}
