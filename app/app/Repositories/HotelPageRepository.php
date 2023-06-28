<?php

namespace App\Repositories;

use App\Http\Resources\HotelPageResource;
use App\Http\Resources\HotelResource;
use App\Models\HotelPage;
use App\Repositories\Interfaces\HotelPageRepositoryInterface;

class HotelPageRepository implements HotelPageRepositoryInterface
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        return HotelPageResource::collection(HotelResource::collection(HotelPage::query()->get()));
    }

    /**
     * @param int $id
     * @return HotelPageResource
     */
    public function getById(int $id)
    {
        return HotelPageResource::make(HotelPage::query()->findOrFail($id));
    }

    /**
     * @param int $id
     * @return HotelPageResource
     */
    public function getBySlug(string $slug)
    {
        return HotelPageResource::make(HotelPage::query()
            ->where('slug', $slug)
            ->firstOrFail()
        );
    }
}
