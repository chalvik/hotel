<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *  definition="Post",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="title",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="slug",
 *      type="string"
 *  )
 * )
 */
class Hotel extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Атрибуты, которые должны быть преобразованы в дату
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id',
        'owner_id',
        'title',
        'slug',
        'logo',
        'phone',
        'address',
        'location_name',
        'version',
        'current',
        'city_id',
        'user_id',
    ];


    FUNCTION city()
    {
        return $this->belongsTo(City::class);
    }
}
