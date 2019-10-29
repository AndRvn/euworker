<?php

namespace App\Models\Location;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Location\City
 *
 * @property integer $id
 * @property string $name
 * @property integer $city_id
 * @mixin Eloquent
 */
class City extends Model
{
    use HasTranslations;

    protected $fillable = ['city_id'];

    public $translatable = ['name'];
}
