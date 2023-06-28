<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavigationItem extends Model
{
    use HasFactory;

    protected $table = 'hotel_navigation_items';

    public function items()
    {
        return $this->hasMany(NavigationItem::class, 'pid' , 'id');
    }

}
