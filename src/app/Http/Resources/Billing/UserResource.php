<?php

namespace App\Http\Resources\Billing;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'login' => $this->resource->id,
            'uid' => $this->resource->uid,
            'gid' => $this->resource->gid,
            'test' => $this->resource->messages,
            'contacts' => [
                'fio' => $this->resource->contacts->fio,
                'phone' => $this->resource->contacts->phone,
                'email' => $this->resource->contacts->email,
                'city' => $this->resource->contacts->city,
                'street' => $this->resource->contacts->address_street,
                'build' => $this->resource->contacts->address_build,
                'flat' => $this->resource->contacts->address_flat,
                'comments' => $this->resource->contacts->comments,
                'contract_id' => $this->resource->contacts->contract_id,
                'contract_date' => $this->resource->contacts->contract_date,
                'passport_num' => $this->resource->contacts->pasport_num,
                'passport_date' => $this->resource->contacts->pasport_date,
                'passport_grant' => $this->resource->contacts->pasport_grant,
            ],
        ];
    }
}
