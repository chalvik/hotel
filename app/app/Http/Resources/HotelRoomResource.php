<?php

namespace App\Http\Resources;

use App\Models\HotelRoomImage;
use Illuminate\Http\Resources\Json\JsonResource;

class HotelRoomResource extends JsonResource
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
            'title' => $this->title,
            'content' => $this->content,
            'building_id' => $this->building_id,
            'image' => $this->image,
            'images' => HotelRoomImageResource::collection($this->images),
            'building' => HotelBuildingResource::make($this->building),
        ];
    }
}
