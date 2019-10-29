<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Skill
 *
 * @property integer $id
 * @property string $name
 */
class Skill extends Model
{
    public $translatable = ['name'];
}
