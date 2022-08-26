<?php

namespace App\Http\Resources\Billing;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
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
            'uid' => $this->resource->uid,
            'reply' => $this->resource->reply,
            'ip' => $this->resource->ip,
            'priority' => $this->resource->rpiority,
            'chapter' => $this->resource->chapter,
            'state' => $this->resource->state,
            'message' => $this->resource->messasge,
            'subject' => $this->resource->subject,
            'aid' => $this->resource->aid,
            'responsible' => $this->resource->resposible,
            'inner_msg' => $this->resource->inner_msg,
            'phone' => $this->resource->phone,
            'date' => $this->resource->date,
            'closed_date' => $this->resource->closed_date,
            'done_date' => $this->resource->done_date,
            'plan_date' => $this->resource->plan_date,
            'plan_time' => $this->resource->paln_time,
            'admin_read' => $this->resource->admin_read,
            'replies' => MessageReplyResource::collection($this->whenLoaded('replies'))
        ];
    }
}
