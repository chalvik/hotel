<?php

namespace App\Repositories\Interfaces;

interface RepositoryInterface
{
    public function all();
    public function getById(int $id);
}
