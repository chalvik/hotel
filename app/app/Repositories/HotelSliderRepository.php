<?php

namespace App\Repositories;

use App\Http\Resources\HotelSliderResource;
use App\Models\HotelSlider;
use App\Repositories\Interfaces\HotelSliderRepositoryInterface;

class HotelSliderRepository implements HotelSliderRepositoryInterface
{

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return HotelSliderResource::collection(HotelSlider::query()->get());
    }

    /**
     * @param int $id
     * @return HotelSliderResource
     */
    public function getById(int $id)
    {
        return  HotelSliderResource::make(HotelSlider::query()->findOrFail($id));
    }
}
