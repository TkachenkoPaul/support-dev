<?php

namespace App\Http\Resources\Billing;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'fio' => $this->resource->fio,
            'address'=> $this->resource->address_street.' д. '
                .$this->resource->address_build.' кв. '
                .$this->resource->address_flat,
            'phone' => $this->resource->phone,
            'email' => $this->resource->email,
            'city' => $this->resource->city,
            'street' => $this->resource->address_street,
            'build' => $this->resource->address_build,
            'flat' => $this->resource->address_flat,
            'comments' => $this->resource->comments,
            'contract_id' => $this->resource->contract_id,
            'contract_date' => $this->resource->contract_date,
            'passport_num' => $this->resource->pasport_num,
            'passport_date' => $this->resource->pasport_date,
            'passport_grant' => $this->resource->pasport_grant,
        ];
    }
}
