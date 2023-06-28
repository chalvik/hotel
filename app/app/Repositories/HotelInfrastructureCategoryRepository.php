<?php

namespace App\Repositories;

use App\Http\Resources\HotelInfrastructureCategoryResource;
use App\Http\Resources\HotelInfrastructureResource;
use App\Http\Resources\HotelResource;
use App\Models\HotelInfrastructureCategory;
use App\Repositories\Interfaces\HotelInfrastructureCategoryInterface;


class HotelInfrastructureCategoryRepository implements HotelInfrastructureCategoryInterface
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return HotelInfrastructureCategoryResource::collection(HotelInfrastructureCategory::query()->get());
    }

    /**
     * @param int $id
     * @return HotelResource
     */
    public function getById(int $id)
    {
        return HotelInfrastructureCategoryResource::make(HotelInfrastructureCategory::query()->findOrFail($id));
    }
}
