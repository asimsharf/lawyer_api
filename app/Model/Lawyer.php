<?php

namespace App\Model;
use App\Model\City;
use App\Model\Document;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function document()
    {
    	return $this->belongsTo(Document::class);
    }
}
