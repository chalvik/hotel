<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Controller;
use App\Models\City;

/**
 * Class HotelController
 * @package App\Http\Controllers\Admin
 */
class CityController extends Controller
{
    public function index()
    {
        $models  = City::query()->paginate(20);
        return view('admin.city.index', compact('models'));
    }

}
