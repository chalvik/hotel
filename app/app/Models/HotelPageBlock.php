<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPageBlock extends Model
{
    use HasFactory;
    use CreatedUpdatedBy;

    protected $table = 'hotel_page_blocks';
}
