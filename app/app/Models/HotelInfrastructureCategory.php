<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelInfrastructureCategory extends Model
{
    use HasFactory;

    protected  $table = 'hotel_infrastructure_categories';

    function items()
    {
        return $this->hasMany(HotelInfrastructure::class, 'category_id', 'id');
    }
}
