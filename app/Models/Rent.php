<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Rent
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property float $price
 * @property Carbon $published_at
 * @property integer $user_id
 * @property integer $city_id
 * @property integer $country_id
 * @property Carbon $validity
 */
class Rent extends Model
{
    use HasTranslations;

    protected $fillable = ['price', 'published_at', 'validity', 'user_id', 'city_id', 'country_id'];

    public $translatable = ['title', 'description'];

    protected $casts = [
        'published_at' => 'datetime',
        'validity' => 'datetime',
    ];
}
