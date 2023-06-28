<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Controller;
use App\Models\Hotel;

/**
 * Class HotelController
 * @package App\Http\Controllers\Admin
 */
class NavigateItemController extends Controller
{
    public function index()
    {
        $models = Hotel::query()->paginate(20);;
        return view('admin.hotel.index', compact('models'));
    }

    public function show(Hotel $hotel)
    {

        return view('admin.hotel.show', compact('hotel'));
    }

}
