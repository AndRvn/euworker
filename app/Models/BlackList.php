<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BlackList
 *
 * @property integer $id
 * @property integer $user_id
 */
class BlackList extends Model
{
    protected $fillable = ['user_id'];

    public function users()
    {
        return $this->hasMany('users');
    }
}
