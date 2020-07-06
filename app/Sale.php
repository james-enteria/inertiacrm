<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function contact()
    {
    	return $this->hasMany('App\Contact');
    }
}
