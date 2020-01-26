<?php

namespace App\Http\Resources\DocumentType;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at,
            'href' => [
                'documentTypes' => route('documents.index', $this->id)
            ]
        ];
    }
}
