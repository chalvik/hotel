<?php

namespace App\Repositories;

use App\Http\Resources\HotelRoomResource;
use App\Models\HotelRoom;
use App\Repositories\Interfaces\HotelRoomRepositoryInterface;


class HotelRoomRepository implements HotelRoomRepositoryInterface
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return HotelRoomResource::collection(HotelRoom::query()->get());
    }

    /**
     * @param int $id
     * @return HotelRoomResource
     */
    public function getById(int $id)
    {
        return HotelRoomResource::make(HotelRoom::query()->findOrFail($id));
    }
}
