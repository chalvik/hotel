<?php

namespace App\Repositories\Interfaces;

interface HotelSliderRepositoryInterface
{
    public function all();
    public function getById(int $id);
}
