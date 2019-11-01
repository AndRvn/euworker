<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Location\Country
 *
 * @property integer $id
 * @property string $name
 */
class Country extends Model
{
    use HasTranslations;

    protected $fillable = ['id'];

    public $translatable = ['name'];
}
