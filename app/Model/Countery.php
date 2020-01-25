<?php

namespace App\Model;

use App\Model\City;
use Illuminate\Database\Eloquent\Model;

class Countery extends Model
{
    public function cities()
    {
    	return $this->hasMany(City::class);
    }
}
