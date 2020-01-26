<?php

namespace App\Http\Resources\Lawyer;

use Illuminate\Http\Resources\Json\Resource;

class LawyerCollection extends Resource
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
            'email'=> $this->email,
            'password'=> $this->password,
            'phone'=> $this->phone,
            'remember_token'=> $this->remember_token,
            'office_name'=> $this->office_name,
            'gender'=>$this->gender,
            'profile_image'=> $this->profile_image,
            'background_imge'=> $this->background_imge,
            'address_text'=> $this->address_text,
            'latitude'=> $this->latitude,
            'longitude'=> $this->longitude,
            'city_id'=> $this->city_id,
            'document_id'=> $this->document_id,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at,
            'href' => [
                'lawyer_details' => route('lawyers.show', $this->id)
            ]
        ];
    }
}
