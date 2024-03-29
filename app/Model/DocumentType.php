<?php

namespace App\Model;

use App\Model\Document;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $guarded=[];
    public function documents()
    {
    	return $this->hasMany(Document::class);
    }
}
