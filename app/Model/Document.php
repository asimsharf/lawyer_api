<?php

namespace App\Model;

use App\Model\DocumentType;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function documents_type()
    {
    	return $this->belongsTo(DocumentType::class);
    }
}
