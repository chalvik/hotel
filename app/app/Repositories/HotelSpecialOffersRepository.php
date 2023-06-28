<?php

namespace App\Repositories;

use App\Http\Resources\HotelSpecialOfferResource;
use App\Models\HotelSpecialOffer;
use App\Repositories\Interfaces\HotelSpecialOffersRepositoryInterface;

class HotelSpecialOffersRepository implements HotelSpecialOffersRepositoryInterface
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return HotelSpecialOfferResource::collection(HotelSpecialOffer::query()->get());
    }

    /**
     * @param int $id
     * @return HotelSpecialOfferResource
     */
    public function getById(int $id)
    {
        return HotelSpecialOfferResource::make(HotelSpecialOffer::query()->findOrFail($id));
    }
}
