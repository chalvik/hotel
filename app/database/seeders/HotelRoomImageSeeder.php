<?php

namespace Database\Seeders;

use App\Models\HotelRoom;
use App\Models\HotelRoomImage;
use Illuminate\Database\Seeder;

class HotelRoomImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = HotelRoom::query()->get();
        foreach ($rooms as $room) {

            $ids = [];
            $image = new HotelRoomImage();
            $image->image = '/img/hotels/christie.webp';
            $image->room_id = $room->id;
            $room->images()->save($image);

            $ids = [];
            $image = new HotelRoomImage();
            $image->image = '/img/test/preview.webp';
            $image->room_id = $room->id;
            $room->images()->save($image);

            $ids = [];
            $image = new HotelRoomImage();
            $image->image = '/img/test/preview.webp';
            $image->room_id = $room->id;
            $room->images()->save($image);

        }
    }
}
