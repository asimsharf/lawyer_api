<?php

namespace App\Model;
use App\Model\City;
use App\Model\Document;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
class Lawyer extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $guarded=[];
    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function document()
    {
    	return $this->belongsTo(Document::class);
    }
}
