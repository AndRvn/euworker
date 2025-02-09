<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Traits\Translatable;

/**
 * App\Models\Profile
 *
 * @property integer $id
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property integer $language_id
 * @property integer $language_level
 * @property string $description
 * @property string $resume_path
 * @property integer $education
 * @property array $skills
 * @property float $desired_salary
 * @property Carbon $birth_date
 * @property integer $country_id
 * @property integer $city_id
 * @property integer $view_count
 * @property boolean $is_hidden
 * @property boolean $user_id
 * @mixin Eloquent
 */
class Profile extends Model
{
    use HasTranslations;
    use Translatable;

    protected $fillable = [
        'user_id',
        'language_id',
        'language_level',
        'resume_path',
        'education',
        'skills',
        'desired_salary',
        'country_id',
        'city_id',
        'view_count',
        'experience_id',
        'is_hidden',
        'birth_date'
    ];

    public $translatable = [
        'title',
        'first_name',
        'last_name',
        'description',
        'address'
    ];

    protected $casts = ['birth_date' => 'datetime'];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'profiles_skill');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
