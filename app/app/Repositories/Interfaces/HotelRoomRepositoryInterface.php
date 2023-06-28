<?php

namespace App\Repositories\Interfaces;

interface HotelRoomRepositoryInterface
{
    public function all();
    public function getById(int $id);
}
