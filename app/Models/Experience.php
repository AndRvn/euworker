<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Category
 *
 * @property integer $id
 * @property string $name
 * @mixin Eloquent
 */
class Experience extends Model
{
    use HasTranslations;

    public $translatable = ['name'];
}
