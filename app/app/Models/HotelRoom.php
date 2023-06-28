<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    use HasFactory;

    function building()
    {
        return $this->belongsTo(HotelBuilding::class);
    }

    function images()
    {
        return $this->hasMany(HotelRoomImage::class, 'room_id');
    }


//    FUNCTION building()
//    {
//        return $this->belongsTo(HotelBuilding::class);
//    }
}
