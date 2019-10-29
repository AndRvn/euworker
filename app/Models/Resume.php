<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Resume
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
 */
class Resume extends Model
{
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
    ];

    public $translatable = [
        'title',
        'first_name',
        'last_name',
        'description',
    ];

    protected $casts = ['birth_date' => 'datetime'];
}
