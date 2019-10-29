<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Vacancy::class, function (Faker $faker) {
    $city = \App\Models\Location\City::all()->random();

    return [
        'name' => ['en' => $faker->name],
        'description' => ['en' => $faker->realText()],
        'type' => $faker->randomElement(\App\Models\Vacancy::TYPES),
        'experience_id' => \App\Models\Experience::all()->random(),
        'user_id' => \App\User::all()->random(),
        'category_id' => \App\Models\Category::all()->random(),
        'language_id' => $faker->randomElement(config('constants.languages')),
        'language_level' => $faker->randomElement(config('constants.language_levels')),
        'education' => $faker->randomElement(config('constants.education')),
        'skills' => \App\Models\Skill::all()->random(),
        'salary' => $faker->randomFloat(3, 900, 3000),
        'salary_per_hour' => $faker->randomFloat(3, 5, 70),
        'city_id' => $city->id,
        'country_id' => $city->country_id,
        'view_count' => $faker->randomNumber(),
    ];
});
