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
            'activate' => $this->resource->activate,
            'registration' => $this->resource->registration,
            'tariff' => new DvMainResource($this->resource->tariff),
            'credit' => [
                'credit' => $this->resource->credit,
                'credit_date' => $this->resource->credit_date,
            ],
            'group' => new GroupResource($this->resource->group),
            'deposit' =>  new BillResource($this->resource->deposit),
            'contacts' => new ContactsResource($this->resource->contacts)
        ];
    }
}
