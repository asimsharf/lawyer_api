<?php

namespace App\Model;

use App\Model\DocumentType;
use App\Model\Lawyer;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function documents_type()
    {
    	return $this->belongsTo(DocumentType::class);
    }
    public function lawyers()
    {
    	return $this->belongsTo(Lawyer::class);
    }
}
