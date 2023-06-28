<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelPageBlockResource extends JsonResource
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
            'id' => $this->id,
            'block_template_id' => $this->block_template_id,
            'title' => $this->title,
            'sub_title' => $this->title,
            'content' => $this->title,
            'image' => $this->image,
            'url' => $this->url,
            'order' => $this->order,

        ];
    }
}
