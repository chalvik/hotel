<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class HotelPage extends Model
{
    use HasFactory;
    use CreatedUpdatedBy;
    use Sluggable;

    protected $table = 'hotel_pages';

    protected $fillable = ['title'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'unique' => false
            ]
        ];
    }

    FUNCTION blocks()
    {
        return $this->hasMany(HotelPageBlock::class);
    }
}
