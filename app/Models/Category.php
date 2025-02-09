<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Category
 *
 * @property integer $id
 * @property string $name
 */
class Category extends Model
{
    use HasTranslations;

    public $translatable = ['name'];
}
