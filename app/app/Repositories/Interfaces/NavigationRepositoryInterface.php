<?php

namespace App\Repositories\Interfaces;

interface NavigationRepositoryInterface
{
    public function all();
    public function getById(int $id);
}
