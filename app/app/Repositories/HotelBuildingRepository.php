<?php

namespace App\Repositories;

use App\Http\Resources\HotelBuildingResource;
use App\Models\HotelBuilding;
use App\Repositories\Interfaces\HotelBuildingRepositoryInterface;

class HotelBuildingRepository implements HotelBuildingRepositoryInterface
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return HotelBuildingResource::collection(HotelBuilding::query()->get());
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getById(int $id)
    {
        return HotelBuildingResource::make(HotelBuilding::query()->findOrFail($id));
    }
}
