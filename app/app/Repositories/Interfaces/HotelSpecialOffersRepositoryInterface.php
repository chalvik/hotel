<?php

namespace App\Repositories\Interfaces;

interface HotelSpecialOffersRepositoryInterface
{
    public function all();
    public function getById(int $id);
}
