<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
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
            'id' => $this->id,
            'document_path' => $this->document_path,
            'document_type_id' => $this->document_type_id,
            'created_at' => $this->created_at,
            'updated_at' =>$this->updated_at
        ];
    }
}
