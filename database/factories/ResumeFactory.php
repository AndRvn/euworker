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

$factory->define(\App\Models\Resume::class, function (Faker $faker) {
    return [
        'title' => ['en' => $faker->title],
        'first_name' => ['en' => $faker->firstName],
        'last_name' => ['en' => $faker->lastName],
        'experience_id' => \App\Models\Experience::all()->random(),
        'language_id' => $faker->randomElement(config('constants.languages')),
        'language_level' => $faker->randomElement(config('constants.language_levels')),
        'description' => ['en' => $faker->realText()],
        'education' => $faker->randomElement(config('constants.education')),
        'skills' => \App\Models\Skill::all()->random(),
        'desired_salary' => $faker->randomFloat(),
        'birth_date' => $faker->dateTimeBetween('1950-01-01', '2000-12-31'),
        'country_id' => \App\Models\Location\Country::all()->random(),
        'city_id' => \App\Models\Location\City::all()->random(),
        'view_count' => $faker->randomNumber(),
    ];
});
