<?php

namespace App\Model;

use App\Model\Countery;
use App\Model\Lawyer;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function countery()
    {
    	return $this->belongsTo(Countery::class);
    }
    public function lawyers()
    {
    	return $this->hasMany(Lawyer::class);
    }
}
