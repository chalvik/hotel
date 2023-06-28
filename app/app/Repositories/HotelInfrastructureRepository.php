<?php

namespace App\Repositories;

use App\Http\Resources\HotelInfrastructureResource;
use App\Http\Resources\HotelResource;
use App\Models\HotelInfrastructure;
use App\Repositories\Interfaces\HotelInfrastructureInterface;


class HotelInfrastructureRepository implements HotelInfrastructureInterface
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return HotelInfrastructureResource::collection(HotelInfrastructure::query()->get());
    }

    /**
     * @param int $id
     * @return HotelResource
     */
    public function getById(int $id): HotelInfrastructureResource
    {
        return HotelInfrastructureResource::make(HotelInfrastructure::query()->findOrFail($id));
    }
}
