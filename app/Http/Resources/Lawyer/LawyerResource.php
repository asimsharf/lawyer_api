<?php

namespace App\Http\Resources\Lawyer;

use Illuminate\Http\Resources\Json\JsonResource;

class LawyerResource extends JsonResource
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
            'city' => $this->city,
            'document'=> $this->document,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
        ];
    }
}
