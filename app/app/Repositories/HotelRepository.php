<?php

namespace App\Repositories;

use App\Http\Resources\HotelResource;
use App\Models\Hotel;
use App\Repositories\Interfaces\HotelRepositoryInterface;

class HotelRepository implements HotelRepositoryInterface
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return HotelResource::collection(Hotel::query()->get());
    }

    /**
     * @param int $id
     * @return HotelResource
     */
    public function getById(int $id): HotelResource
    {
        return HotelResource::make(Hotel::query()->findOrFail($id));
    }
}
