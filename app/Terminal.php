<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;


class Terminal extends Model
{
    use Spatial;

    protected $spatial = ['location_cord'];

    public function port() {
    	return $this->belongsTo('App\Port');
    }
}
