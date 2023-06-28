<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;

    protected $table = 'hotel_navigations';

    public function items()
    {
        return $this->hasMany(NavigationItem::class)->whereNull('pid');
    }

}
