<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoomImage extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'room_id'];

    protected $table = 'hotel_room_images';
}
