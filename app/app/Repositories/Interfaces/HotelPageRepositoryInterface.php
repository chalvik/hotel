<?php

namespace App\Repositories\Interfaces;

interface HotelPageRepositoryInterface
{
    public function all();
    public function getById(int $id);
    public function getBySlug(string $slug);
}
