<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    public function ports() {
    	return $this->hasMany('App\Port');
    }
}
