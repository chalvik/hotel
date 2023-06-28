<?php

namespace App\Services;

use App\Models\Hotel;
use App\Services\Interfaces\AdminServiceInterface;

class HotelService implements AdminServiceInterface
{

    public function paginate($pages = null)
    {
        return Hotel::query()->paginate($pages ?? 20);
    }

    public function store()
    {

    }

    public function grtById()
    {

    }

    public function destroy()
    {

    }

    public function delete()
    {

    }

}
