<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * App\Models\Vacancy
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $type
 * @property integer $category_id
 * @property integer $country_id
 * @property integer $city_id
 * @property integer $experience_id
 * @property integer $user_id
 * @property array $languages
 * @property array $skills
 * @property float $salary
 * @property float $salary_per_hour
 * @property integer $education
 * @property Carbon $published_at
 * @property Carbon $validity
 */
class Vacancy extends Model
{
    use HasTranslations;

    const FULL_TIME = 'full time';
    const PART_TIME = 'part time';
    const SEASONAL = 'seasonal';

    const TYPES = [
        self::FULL_TIME,
        self::PART_TIME,
        self::SEASONAL,
    ];

    protected $fillable = [
        'category_id',
        'country_id',
        'city_id',
        'experience_id',
        'user_id',
        'languages',
        'salary',
        'salary_per_hour',
        'education',
        'published_at',
        'validity',
    ];

    public $translatable = ['name', 'description'];

    protected $casts = [
        'languages' => 'array',
    ];


}
