<?php

namespace App\Model;

use App\Model\DocumentType;
use App\Model\Lawyer;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded=[];
    public function document_type()
    {
    	return $this->belongsTo(DocumentType::class);
    }
    public function lawyer()
    {
    	return $this->hasOne(Lawyer::class);
    }
}
