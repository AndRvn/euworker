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
    $languages = [
        'lang' => $faker->randomElement(config('constants.languages')),
        'level' => $faker->randomElement(config('constants.language_levels')),
    ];

    $city = \App\Models\Location\City::all()->random();

    return [
        'title' => ['en' => $faker->jobTitle],
        'first_name' => ['en' => $faker->firstName],
        'last_name' => ['en' => $faker->lastName],
        'experience_id' => \App\Models\Experience::all()->random(),
        'languages' => json_encode($languages),
        'description' => ['en' => $faker->realText()],
        'education' => $faker->randomElement(config('constants.education')),
        'desired_salary' => $faker->randomFloat(3, 900, 3000),
        'birth_date' => $faker->dateTimeBetween('1950-01-01', '2000-12-31'),
        'city_id' => $city->id,
        'country_id' => $city->country_id,
        'view_count' => $faker->randomNumber(),
        'user_id' => \App\User::where('type', 'seeker')->get()->random(),
    ];
});
