<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Skill
 *
 * @property integer $id
 * @property string $name
 */
class Skill extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    public function skills()
    {
        return $this->belongsToMany(Profile::class, 'profiles_skill');
    }
}
