<?php

namespace App\Model;

use App\Model\Countery;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function counteries()
    {
    	return $this->belongsTo(Countery::class);
    }
}
