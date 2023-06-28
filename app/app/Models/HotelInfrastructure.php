<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelInfrastructure extends Model
{
    use HasFactory;

    function category()
    {
        return $this->belongsTo(HotelInfrastructureCategory::class);
    }
}