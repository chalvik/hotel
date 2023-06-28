<?php

namespace App\Repositories\Interfaces;

interface HotelBuildingRepositoryInterface
{
    public function all();
    public function getById(int $id);
}
