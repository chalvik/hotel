<?php

namespace App\Repositories\Interfaces;

interface HotelPageBlockRepositoryInterface
{
    public function all();
    public function getById(int $id);
}
