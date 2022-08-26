<?php

namespace App\Http\Resources\Billing;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageReplyResource extends JsonResource
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
            'id' => $this->resource->id,
            'text' => $this->resource->text,
            'datetime' => $this->resource->datetime,
            'aid' => $this->resource->aid,
            'status' => $this->resource->status,
            'ip' => $this->resource->ip,
            'inner_msg' => $this->resource->inner_msg,
        ];
    }
}
