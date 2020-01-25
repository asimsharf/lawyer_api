<?php

namespace App\Http\Resources\Countery;

use Illuminate\Http\Resources\Json\Resource;

class CounteryCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
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
                'cities' => route('counteries.show', $this->id)
            ]
        ];
    }
}
