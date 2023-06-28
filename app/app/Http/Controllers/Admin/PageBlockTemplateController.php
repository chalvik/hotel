<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Controller;
use App\Models\Hotel;

/**
 * Class HotelController
 * @package App\Http\Controllers\Admin
 */
class PageBlockTemplateController extends Controller
{
    public function index()
    {
        $models = Hotel::query()->paginate(20);;
        return view('admin.page_block_template.index', compact('models'));
    }


}
