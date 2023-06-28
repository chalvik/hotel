<?php

namespace App\Repositories;

use App\Http\Resources\NavigationResource;
use App\Models\Navigation;
use App\Repositories\Interfaces\HotelPageRepositoryInterface;
use App\Repositories\Interfaces\NavigationRepositoryInterface;

class NavigationRepository implements NavigationRepositoryInterface
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return NavigationResource::collection(Navigation::query()->get());
    }

    /**
     * @param int $id
     * @return NavigationResource
     */
    public function getById(int $id)
    {
        return NavigationResource::make(Navigation::query()->findOrFail($id));
    }
}
