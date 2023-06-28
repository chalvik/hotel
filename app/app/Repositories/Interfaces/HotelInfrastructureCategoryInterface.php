<?php

namespace App\Repositories\Interfaces;

use GuzzleHttp\Psr7\Request;

interface HotelInfrastructureCategoryInterface
{
    public function all();
    public function getById(int $id);
}
